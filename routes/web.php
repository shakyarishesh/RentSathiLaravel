<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'intro']);

Route::view('/signup', 'signup');
Route::get('/registerPost',[RegistrationController::class,'register']);

//login
Route::view('/login','login');
//loginpost
Route::post('/loginPost',[RegistrationController::class,'login']);
//logout
Route::get('/registration/logout',[RegistrationController::class,'logout']);

//upload
Route::view('/upload','upload');
Route::post('/upload/add',[UploadController::class,'upload']);
