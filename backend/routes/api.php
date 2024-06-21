<?php

use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Chart Route
Route::get('/chartdata', [ChartController::class,'onAllSelect']);

//Client Review Route
Route::get('/client-review-all', [ClientReviewController::class,'onAllSelect']);

//Client Review Route
Route::post('/contact-send', [ContactController::class,'contactSend']);
Route::get('/contact-get', [ContactController::class,'contactGet']);

//Course Route
Route::get('/course-home', [CourseController::class,'courseFour']);
Route::get('/course-all', [CourseController::class,'courseAll']);
Route::get('/course-details/{courseId}', [CourseController::class,'courseDetails']);

//Footer Route
Route::get('/footer-data-all', [FooterController::class,'allFooterData']);

//Information Route
Route::get('/information-data-all', [InformationController::class,'allInformationData']);

//Services Route
Route::get('/services-data-all', [ServiceController::class,'allService']);

//Project Route
Route::get('/project-home', [ProjectController::class,'projectThree']);
Route::get('/project-all', [ProjectController::class,'projectAll']);
Route::get('/project-details/{projectId}', [ProjectController::class,'projectDetails']);


//Home Page Route
Route::get('/home/video', [HomePageController::class,'slectVideo']);
Route::get('/home/total/student/course', [HomePageController::class,'totalStuCourse']);
Route::get('/home/tech', [HomePageController::class,'totalTech']);
Route::get('/home/title/subtitle', [HomePageController::class,'homeTitleSubTile']);
