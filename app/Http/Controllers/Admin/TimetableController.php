<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\N_groupe;
use App\Models\Room;
use App\Models\Subject;
use App\Models\Teacher;
use App\Services\CalendarService;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function index(CalendarService $calendarService)
    {

        $weekDays = Lesson::WEEK_DAYS;

        $calendarData = $calendarService->generateCalendarData($weekDays);

        // $data = [
        //     'teahcers' => Teacher::all(),
        //     'rooms' => Room::all(),
        //     'subjects' => Subject::all(),
        //     'groups' => N_groupe::all(),
        // ];
        return view('admin.timetable.index', compact('weekDays', 'calendarData'));
    }
}
