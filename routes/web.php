<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/alur-pendaftaran',[\App\Http\Controllers\HomeController::class,'alurPendaftaran']);
Route::get('/beasiswa',[\App\Http\Controllers\HomeController::class,'beasiswa']);
Route::get('/data-guru',[\App\Http\Controllers\HomeController::class,'dataGuru']);
Route::get('/ekstrakulikuler',[\App\Http\Controllers\HomeController::class,'ekstrakulikuler']);
Route::get('/fasilitas',[\App\Http\Controllers\HomeController::class,'fasilitas']);
Route::get('/kontak',[\App\Http\Controllers\HomeController::class,'kontak']);
Route::get('/pendaftaran-website',[\App\Http\Controllers\HomeController::class,'pendaftaranWebsite']);
Route::get('/pendaftaran-whatsapp',[\App\Http\Controllers\HomeController::class,'pendaftaranWhatsapp']);
Route::get('/struktur-organisasi',[\App\Http\Controllers\HomeController::class,'strukturOrganisasi']);
Route::get('/visi-misi',[\App\Http\Controllers\HomeController::class,'visiMisi']);
