<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;

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

// COURSES
//  main page
Route::get('/', [CourseController::class, 'index']);

// Show create course form
Route::get('/courses/create', [CourseController::class, 'create']);

// Store course data
Route::post('/courses', [CourseController::class, 'store']);
// show form edit
Route::get('/courses/{course}/edit', [CourseController::class, 'edit']);
// edit course
Route::put('/courses/{course}', [CourseController::class, 'update']);

// detail courses
Route::get('/courses/{course}', [CourseController::class, 'show']);

// delete course
Route::delete('/courses/{course}', [CourseController::class, 'destroy']);




// Materials
// Show create material form
Route::get('/materials/create/{course}', [MaterialController::class, 'create']);

// Store material data
Route::post('/materials', [MaterialController::class, 'store']);

// Show edit material form
Route::get('/materials/{material}/edit', [MaterialController::class, 'edit']);

Route::put('/materials/{material}', [MaterialController::class, 'update']);
Route::delete('/materials/{material}', [MaterialController::class, 'destroy']);

