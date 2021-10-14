<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/learn', function () {
    return view('learn');
})->name('learn');

Route::middleware(['auth:sanctum', 'verified'])->get('/awards', function () {
    return view('awards');
})->name('awards');

Route::get('login/google', [LoginController::class, 'redirectToProvider']);
Route::get('login/google/callback', [LoginController::class, 'handleProviderCallback']);



