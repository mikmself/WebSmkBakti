<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/alur-pendaftaran',[\App\Http\Controllers\HomeController::class,'alurPendaftaran']);
