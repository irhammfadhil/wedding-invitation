<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Auth;
use App\Services\UserService;
use App\Services\InvitationService;
use App\Services\RsvpService;
use App\Models\Invitation;

class AdminController extends Controller
{
    protected $user_service, $invitation_service, $rsvp_service;
    public function __construct(UserService $user_service, InvitationService $invitation_service, RsvpService $rsvp_service)
    {
        $this->user_service = $user_service;
        $this->invitation_service = $invitation_service;
        $this->rsvp_service = $rsvp_service;
    }
    public function index(){
        $count_number_of_invitations = Invitation::count();
        $count_number_of_guests = Invitation::sum('num_of_guests');
        return view('admin.index', [
            'count_number_of_invitations' => $count_number_of_invitations,
            'count_number_of_guests'=> $count_number_of_guests,
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
}
