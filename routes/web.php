<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\ControllersResponses\LoginResponse;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Redirects for User Type Dashboards
Route::middleware(['auth:sanctum', 'verified'])->get('admin/dashboard', function () {
    return view('admin/dashboard/index');
})->name('admin.dashboard.index');

Route::middleware(['auth:sanctum', 'verified'])->get('teacher/dashboard', function () {
    return view('teacher/dashboard/index');
})->name('teacher.dashboard.index');

Route::middleware(['auth:sanctum', 'verified'])->get('student/dashboard', function () {
    return view('student/dashboard/index');
})->name('student.dashboard.index');


// Socialite Login
Route::get('login/google', [LoginController::class, 'redirectToProvider']);
Route::get('login/google/callback', [LoginController::class, 'handleProviderCallback']);

Route::delete('admin/users/{user}', [AdminUserController::class, 'destroy'])->middleware('admin');
Route::patch('admin/users/{user}', [AdminUserController::class, 'update'])->middleware('admin');

// Route for Multi-Auth Users
Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function() {
        Route::resource('dashboard', \App\Http\Controllers\Student\DashboardController::class);
        Route::resource('learn', \App\Http\Controllers\Student\LearnController::class);
    });
    Route::group(['middleware' => 'role:teacher', 'prefix' => 'teacher', 'as' => 'teacher.'], function() {
        Route::resource('dashboard', \App\Http\Controllers\Teacher\DashboardController::class);
        Route::resource('lessons', \App\Http\Controllers\Teacher\TeacherLessonController::class);
        Route::resource('teams', \App\Http\Controllers\Teacher\TeacherTeamController::class);
    });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('dashboard', \App\Http\Controllers\Admin\DashboardController::class);
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    });
});



