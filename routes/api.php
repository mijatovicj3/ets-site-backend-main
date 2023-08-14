<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [Controllers\UserController::class, 'login']);
Route::post('register', [Controllers\UserController::class, 'register']);
Route::get('a',  function () {
return "not authenticated";
})->name("a");
Route::resource('classes', Controllers\ClassController::class);
Route::resource('ed_programs', Controllers\EdProgramController::class);
Route::post('getcourse', [Controllers\CourseController::class, 'getcourse']);

Route::resource('course', Controllers\CourseController::class);

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('details', [Controllers\UserController::class, 'details'])->name("details");
    Route::resource('exams', Controllers\ExamController::class);
    Route::resource('answers', Controllers\AnswerController::class);
    Route::resource('questions', Controllers\QuestionController::class);
});
