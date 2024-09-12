<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('intro');
});

Route::view('/signup', 'signup');
Route::get('/registerPost',[RegistrationController::class,'register']);

//login
Route::view('/login','login');
//loginpost
Route::post('/loginPost',[RegistrationController::class,'login']);