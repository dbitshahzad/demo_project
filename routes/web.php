<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;

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
Route::get('/', function () {
    return view('welcome');
});


Route::post('/postregister', [UserController::class, 'store'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/Auth', [AuthController::class, 'Auth'])->name('Auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('', [UserController::class, 'Dashbord']);



Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::middleware(['auth'])->group(function () {
  
    Route::view('/home', 'content.index');
    Route::get('/Register', [UserController::class, 'create'])->name('create')->name('Registertion');

    Route::get('/task', [TaskController::class, 'Task']);
    Route::post('/store', [TaskController::class, 'ret']);
    Route::get('/show', [TaskController::class, 'show'])->middleware('is_admin');
    Route::get('/edite/{task}', [TaskController::class, 'edite'])->name('Edite')->middleware('is_admin');
    Route::put('/update/{task}', [TaskController::class, 'update'])->name('update')->middleware('is_admin');
    Route::delete('/delete/{task}', [TaskController::class, 'destroy'])->name('delete')->middleware('is_admin');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
