<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Lesson;
use App\Models\Room;
use App\Models\Subject;
use App\Models\Teacher;
use App\Services\CalendarService;
use App\Services\TimeService;
use Exception;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function index(CalendarService $calendarService, TimeService $timeService)
    {

        $weekDays = Lesson::WEEK_DAYS;

        $timeRange = $timeService->getTimes(config('app.calendar.start_time'), config('app.calendar.end_time'));
        $calendarData = $calendarService->generateCalendarData($weekDays);

        $data = [
            'teahcers' => Teacher::all(),
            'rooms' => Room::all(),
            'subjects' => Subject::all(),
            'groups' => Group::all(),
        ];
        return view('admin.timetable.index', compact('weekDays', 'calendarData', 'data', 'timeRange'));
    }

    public function store(Request $request)
    {

        try {
            Lesson::create([
                'weekday' => $request->day,
                'start_time' => explode('-', $request->time)[0],
                'end_time' => explode('-', $request->time)[1],
                'comments' => $request->comment,
                'user_id' => auth()->user()->id,
                'teacher_id' => $request->teacher,
                'room_id' => $request->room,
                'subject_id' => $request->subject,
                'group_id' => $request->group,
            ]);

            return redirect()->route('timetable.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }
}
