<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

// GET - index
// GET - create
// POST - store
// GET{id} - show 
// GET{id} - edit 
// PUT/PATCH - update
// DElETE - delete

Route::get('login', [AuthController::class, 'login'])->name('login');

Route::post('login', [AuthController::class, 'loginPost']);

Route::post('logout', [AuthController::class, 'logout']);

Route::get('register', [AuthController::class, 'registration']);

Route::post('register', [AuthController::class, 'registrationPost']);


Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('layout.app');
    })->name('home');

    Route::resource('/students', StudentController::class);

    Route::resource('/courses', CourseController::class);
});
