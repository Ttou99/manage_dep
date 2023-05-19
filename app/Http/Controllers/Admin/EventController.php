<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Groupe;
use App\Models\Room;
use App\Models\Subject;
use App\Models\Teacher;
use App\Services\EventService;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $eventServiec = new EventService();
        $events = $eventServiec->getAllEvents();

        $formatedEvents = [];
        foreach ($events as $event) {
            $formatedEvents[] = [
                'title' => $event->title,
                'start' => $event->start_date,
                'end' => $event->end_date
            ];
        }

        $data = [
            'events' => $formatedEvents,
            'teahcers' => Teacher::all(),
            'rooms' => Room::all(),
            'subjects' => Subject::all(),
            'groups' => Groupe::all(),
        ];
        return view('admin.events.index', $data);
    }
}
