<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherUserController extends Controller
{
    public function TeacherDashboard(){

        return view('teacher.dashboard');

    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('frontend.welcome'));
    }
    public function profile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('teacher.profile', compact('profileData'));
    }

}
