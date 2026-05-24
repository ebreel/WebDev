<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/car', function(){
   return view('car');
 });

Route::get('/news', [StudentController::class, 'index']);