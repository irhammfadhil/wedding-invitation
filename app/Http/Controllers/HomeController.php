<?php

namespace App\Http\Controllers;
use App\Services\InvitationService;
use App\Services\RsvpService;
use Exception;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $invitation_service, $rsvp_service;
    public function __construct(InvitationService $invitation_service, RsvpService $rsvp_service)
    {
        $this->invitation_service = $invitation_service;
        $this->rsvp_service = $rsvp_service;
    }
    public function index() {
        if(Auth::user()) {
            return redirect()->route('index-admin');
        }
        else {
            return redirect()->route('login');
        }
    }
    public function get_invitation_by_name($name) {
        try {
            $event = [
                'title' => 'Irham Rosy Wedding',
                'start' => '20240414T110000',
                'end' => '20240414T130000',
                'location' => 'Swiss-Belinn Hotel Manyar Surabaya',
                'description' => 'Wedding of Irham and Rosy',
            ];
        
            // Generate Google Calendar URL
            $googleCalendarUrl = 'https://www.google.com/calendar/render?action=TEMPLATE';
            $googleCalendarUrl .= '&text=' . urlencode($event['title']);
            $googleCalendarUrl .= '&dates=' . urlencode($event['start'] . '/' . $event['end']);
            $googleCalendarUrl .= '&location=' . urlencode($event['location']);
            $googleCalendarUrl .= '&details=' . urlencode($event['description']);
    
            $data_invitation = $this->invitation_service->get_invitation_by_name($name);
            if($data_invitation) {
                $rsvps = $this->rsvp_service->get_all_rsvps();
                return view('index', compact('googleCalendarUrl', 'data_invitation', 'rsvps'));
            }
            else {
                abort(404);
            }
        }
        catch (Exception $e) {
            abort(404);
        }
    }
    public function saveRsvps(Request $request) {
        $data = $request->all();

        $check = $this->rsvp_service->get_rsvp_by_invitation_id($data['invitation_id']);
        if($check) {
            $check->invitation_id = $data['invitation_id'];
            $check->response = $data['response'];
            $check->num_of_guests = $data['num_of_guests'];
            $check->wishes = $data['wishes'];
            $check->save();
        }
        else {
            $query = $this->rsvp_service->create($data);
        }

        return true;
    }
    public function getAllRsvps() {
        $rsvps = $this->rsvp_service->get_all_rsvps();
        foreach($rsvps as $rsvp) {
            echo("<p><b>".$rsvp->invitation->name."</b></p>");
            echo("<small>".Carbon::parse($rsvp->created_at)->diffForHumans()."</small>");
            echo("<p>".$rsvp->wishes."</p>");
            echo("<hr>");
        }
    } 
}
