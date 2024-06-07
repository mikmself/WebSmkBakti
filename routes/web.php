<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/alur-pendaftaran',[\App\Http\Controllers\HomeController::class,'alurPendaftaran']);
Route::get('/beasiswa',[\App\Http\Controllers\HomeController::class,'beasiswa']);
Route::get('/data-guru',[\App\Http\Controllers\HomeController::class,'dataGuru']);
Route::get('/ekstrakulikuler',[\App\Http\Controllers\HomeController::class,'ekstrakulikuler']);
Route::get('/fasilitas',[\App\Http\Controllers\HomeController::class,'fasilitas']);
