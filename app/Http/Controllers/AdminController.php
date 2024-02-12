<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Auth;
use App\Services\UserService;
use App\Services\InvitationService;
use App\Services\RsvpService;
use App\Services\AttendanceService;
use App\Models\Rsvp;
use App\Models\Invitation;

class AdminController extends Controller
{
    protected $user_service, $invitation_service, $rsvp_service, $attendanceService;
    public function __construct(UserService $user_service, InvitationService $invitation_service, 
    RsvpService $rsvp_service, AttendanceService $attendanceService)
    {
        $this->user_service = $user_service;
        $this->invitation_service = $invitation_service;
        $this->rsvp_service = $rsvp_service;
        $this->attendanceService = $attendanceService;
    }
    public function mapData($items, $mapping)
    {
        $result = [];

        foreach ($items as $item) {
            $itemData = [];

            foreach ($mapping as $key) {
                $itemData[$key] = $item->{$key};
            }

            $result[] = $itemData;
        }

        return $result;
    }
    public function index(){
        $count_number_of_invitations = Invitation::count();
        $count_number_of_akad_guests = Invitation::where('invitation_type', '=', 'Akad')->sum('num_of_guests');
        $count_number_of_guests = Invitation::sum('num_of_guests');
        $count_number_of_confirmed_guests = Rsvp::sum('num_of_guests');
        $count_number_of_confirmed_invitations = Rsvp::count();
        $count_number_of_attended_guests = Attendance::sum('number_of_guests');
        return view('admin.index', [
            'count_number_of_invitations' => $count_number_of_invitations,
            'count_number_of_akad_guests' => $count_number_of_akad_guests,
            'count_number_of_guests'=> $count_number_of_guests,
            'count_number_of_attended_guests' => $count_number_of_attended_guests,
            'count_number_of_confirmed_guests' => $count_number_of_confirmed_guests,
            'count_number_of_confirmed_invitations' => $count_number_of_confirmed_invitations,
        ]);
    } 
    public function getAllGuests() {
        $guests = $this->invitation_service->get();
        return view('admin.invitation-list', [
            'guests' => $guests,
        ]);
    }
    public function submitInvitation(Request $request) {
        $data = $request->all();
        $data['uuid'] = Uuid::uuid4();
        $data['user_id'] = Auth::user()->id;

        $query = $this->invitation_service->create($data);
        return redirect()->route('index-invitation');
    }
    public function viewInvitation($id) {
        $data = $this->invitation_service->view($id);

        return response()->json(['data' => $data, 'status' => 200], 200);
    }
    public function submitEditInvitation(Request $request) {
        $data = $request->all();
        
        $query = $this->invitation_service->update($data['id'], $data);
        return redirect()->route('index-invitation');
    }
    public function deleteInvitation($id) {
        $query = $this->invitation_service->delete($id);

        return;
    }
    public function getAllRsvps() {
        $rsvps = $this->rsvp_service->get_all_rsvps();
        return view('admin.rsvp-list', [
            'rsvps' => $rsvps,
        ]);
    }
    public function markInvitaitonAsSent(Request $request) {
        $data = $this->invitation_service->view($request->id);
        $data->is_sent = 1;
        $data->time_invitation_sent = date('Y-m-d H:i:s');
        $data->save();

        return true;
    }
    public function getAttendanceList(Request $request) {
        $guest = $this->attendanceService->get();

        return view('admin.attendance', [
            'guests' => $guest,
        ]);
    }
    public function checkGuests(Request $request) {
        echo('<hr>');
        echo('<div id="results">');
        echo('<h5>Hasil Pencarian Tamu</h5>');
        try {
            $guests = $this->invitation_service->getInvitationByNameAndAddress($request->name, $request->address);
            if(sizeof($guests)>0) {
                $guests = $this->mapData($guests, ['id', 'name', 'address']);
    
                echo('<div class="table-responsive">');
                echo('<table class="table table-bordered table-striped table-hover">');
                echo('<thead>');
                echo('<tr>');
                echo('<th class="text-center align-middle">Nama</th>');
                echo('<th class="text-center align-middle">Alamat</th>');
                echo('<th class="text-center align-middle" style="width: 10%;">Tindakan</th>');
                echo('</tr>');
                echo('</thead>');
                echo('<tbody>');
                foreach($guests as $guest) {
                    echo('<tr>');
                    echo('<td>'.$guest['name'].'</td>');
                    echo('<td>'.$guest['address'].'</td>');
                    echo('<td><a href="'.route('submit-attendance').'?id='.$guest['id'].'" class="btn btn-primary">Tandai Kehadiran</a></td>');
                    echo('</tr>');
                }
                echo('</tbody>');
                echo('</table>');
            }
            else {
                echo('<p class="text-center">Undangan tidak ditemukan</p>');
            }
        }
        catch(\Exception $e) {
            echo('<p class="text-center">Undangan tidak ditemukan</p>');
        }
        finally {
            echo('</div>');
        }
    }
    public function insertAttendance(Request $request) {
        $check = $this->invitation_service->view($request->id);
        if($check) {
            $guest = new Attendance;
            $guest->invitation_id = $request->id;
            $guest->number_of_guests = $check->num_of_guests;
            $guest->save();
        }
        return redirect()->back();
    }
    public function markSouvenirHaveTaken($id) {
        $data = $this->attendanceService->view($id);
        $data->timestamp_gift = date('Y-m-d H:i:s');
        $data->save();

        return redirect()->back();
    }
}
