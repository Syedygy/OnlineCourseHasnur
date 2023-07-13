<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\MaterialController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('home', [CourseController::class, 'show']);
Route::get('/course', function () {
    return view('course');
});

Route::post('course', [CourseController::class, 'store']);
Route::get('detailcourse/{id}', [CourseController::class, 'detail']);

Route::get('editcourse/{id}', [CourseController::class, 'edit']);
Route::put('editcourse/{id}', [CourseController::class, 'update']);
Route::get('deletecourse/{id}', [CourseController::class, 'delete']);


Route::get('/materialset', function () {
    return view('materialset',[
        'course' => Course::all()
    ]);
});
Route::post('materialset', [MaterialController::class, 'store']);

Route::get('addmaterial', [MaterialController::class,'index']);
Route::get('coursedata', [CourseController::class,'index']);
Route::get('materialdata', [MaterialController::class,'show']);

Route::get('editmaterial/{id}', [MaterialController::class, 'edit']);
Route::put('editmaterial/{id}', [MaterialController::class, 'update']);
Route::get('deletematerial/{id}', [MaterialController::class, 'delete']);
Route::post('addmaterial', [MaterialController::class,'store']);









