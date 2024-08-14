<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;


// GET - index
// GET - create
// POST - store
// GET{id} - show 
// GET{id} - edit 
// PUT/PATCH - update
// DElETE - delete

// Route::get('/students', [StudentController::class, 'index']);
// Route::get('/students/create',  [StudentController::class, 'create']);
// Route::post('/students', [StudentController::class, 'store']);
// Route::get('/students/{id}',  [StudentController::class, 'show']);
// Route::get('/students/{id}/edit',  [StudentController::class, 'edit']);
// Route::put('/students/{id}',  [StudentController::class, 'update']);
// Route::delete('/students/{id}',  [StudentController::class, 'delete']);

Route::resource('/students', StudentController::class);

Route::resource('/courses', CourseController::class);
