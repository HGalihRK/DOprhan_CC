<?php

use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CompetitionController;
use App\Http\Controllers\API\CourseBookingController;

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
Route::get('competition',[CompetitionController::class,'index']);
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

Route::post('/coursebooking',  [CourseBookingController::class, 'getCourseBooking'])->middleware('auth:sanctum');

Route::prefix('api')->group(function () {
    Route::get('competition',[CompetitionController::class,'index'])->middleware('auth:sanctum');
});
