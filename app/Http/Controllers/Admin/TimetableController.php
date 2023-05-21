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

        $data = [
            'teahcers' => Teacher::all(),
            'rooms' => Room::all(),
            'subjects' => Subject::all(),
            'groups' => N_groupe::all(),
        ];
        return view('admin.timetable.index', $data);
    }
}
