<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home/user', function () {
//     return view('home');
// });

// Route::get('/second', function () {
//     return view('second');
// });

// Route::get('/get_user', [UserController::class, 'index']);

Route::resource('student', StudentController::class);
