<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\N_groupe;
use App\Models\Room;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function index()
    {

        $weekDays = [
            '1' => 'Monday',
            '2' => 'Tuesday',
            '3' => 'Wednesday',
            '4' => 'Thursday',
            '5' => 'Friday',
            '6' => 'Saturday',
            '7' => 'Sunday',
        ];
    
        $data = [
            'teahcers' => Teacher::all(),
            'rooms' => Room::all(),
            'subjects' => Subject::all(),
            'groups' => N_groupe::all(),
        ];
        return view('admin.timetable.index', compact('data', 'weekDays'));
    }
}
