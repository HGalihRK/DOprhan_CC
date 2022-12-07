<?php

use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CompetitionController;
use App\Http\Controllers\API\CourseController;
use App\Http\Controllers\API\CourseBookingController;
use App\Http\Controllers\API\OrphanageController;
use App\Http\Controllers\API\TutorController;
use App\Http\Controllers\API\DayController;
use App\Http\Middleware\VerifyAPIKey;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(VerifyAPIKey::class)->group(function () {
    Route::get('competition', [CompetitionController::class, 'index']);
    Route::post('course-booking', [CourseBookingController::class, 'getCourseBooking']);
    Route::post('day', [DayController::class, 'getDay']);
    Route::get('course', [CourseController::class, 'index']);
    Route::post('orphanage', [OrphanageController::class, 'index']);
    Route::post('tutor', [TutorController::class, 'index']);
});
