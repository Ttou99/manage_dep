<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\N_groupeController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\TeacherUserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [WelcomeController::class, 'welcome'])->name('frontend.welcome');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/frontend/contact', [ContactController::class, 'store'])->name('frontend.contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth','role:user'])->prefix('teacher')->group(function () {
    Route::get('/dashboard', [TeacherUserController::class, 'TeacherDashboard'])->name('teacher.dashboard');
    Route::get('/logout', [TeacherUserController::class, 'logout'])->name('teacher.logout');

});

Route::middleware(['auth','role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/store', [AdminController::class, 'store'])->name('admin.profile.store');
    Route::resource('/contacts', ContactController::class)->only(['index', 'destroy']);
    Route::resource('/settings', SettingController::class)->only(['index', 'update']);
    Route::resource('/teachers', TeacherController::class);
    Route::resource('/subjects', SubjectController::class);
    Route::get('/academicyear/{id}', [SubjectController::class, 'getbranches']);
    Route::resource('/groupes', N_groupeController::class);
    Route::get('/section/{id}', [N_groupeController::class, 'getgroupes']);
    Route::resource('/rooms', RoomController::class);
    Route::resource('/events', EventController::class);
});


require __DIR__.'/auth.php';


