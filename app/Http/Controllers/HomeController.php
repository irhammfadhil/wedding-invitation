<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
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
    
        return view('index', compact('googleCalendarUrl'));
    }
}
