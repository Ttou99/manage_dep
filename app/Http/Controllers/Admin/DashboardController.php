<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $teachers = Teacher::all();
        return view('admin.dashboard', compact('teachers'));
    }
}
