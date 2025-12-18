<?php

use App\Http\Controllers\PrepationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('form',[StudentController::class,'createform']);
Route::post('add',[TeacherController::class,'store']);
Route::post('pre',[PrepationController::class,'store']);
