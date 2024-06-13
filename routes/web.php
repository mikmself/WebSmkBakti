<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('index');
Route::get('/semua-berita',[\App\Http\Controllers\HomeController::class,'semuaBerita'])->name('semuaBerita');
Route::get('/show-berita/{slug}',[\App\Http\Controllers\HomeController::class,'showBerita'])->name('showBerita');
Route::get('/alur-pendaftaran',[\App\Http\Controllers\HomeController::class,'alurPendaftaran'])->name('alurPendaftaran');
Route::get('/beasiswa',[\App\Http\Controllers\HomeController::class,'beasiswa'])->name('beasiswa');
Route::get('/galeri',[\App\Http\Controllers\HomeController::class,'galeri'])->name('galeri');
Route::get('/data-guru',[\App\Http\Controllers\HomeController::class,'dataGuru'])->name('dataGuru');
Route::get('/ekstrakulikuler',[\App\Http\Controllers\HomeController::class,'ekstrakulikuler'])->name('ekstrakulikuler');
Route::get('/fasilitas',[\App\Http\Controllers\HomeController::class,'fasilitas'])->name('fasilitas');
Route::get('/kontak',[\App\Http\Controllers\HomeController::class,'kontak'])->name('kontak');
Route::get('/pendaftaran-website',[\App\Http\Controllers\HomeController::class,'pendaftaranWebsite'])->name('pendaftaranWebsite');
Route::get('/pendaftaran-whatsapp',[\App\Http\Controllers\HomeController::class,'pendaftaranWhatsapp'])->name('pendaftaranWhatsapp');
Route::get('/struktur-organisasi',[\App\Http\Controllers\HomeController::class,'strukturOrganisasi'])->name('strukturOrganisasi');
Route::get('/visi-misi',[\App\Http\Controllers\HomeController::class,'visiMisi'])->name('visiMisi');
Route::get('/detail-jurusan/{jurusan}',[\App\Http\Controllers\HomeController::class,'detailJurusan'])->name('detailJurusan');

Route::post('/daftar-website',[\App\Http\Controllers\PendaftarController::class,'daftarWebsite'])->name('daftarWebsite');
Route::post('/kontak',[\App\Http\Controllers\KontakController::class,'store'])->name('kontak.store');

Route::get('/download/{id}',[\App\Http\Controllers\PendaftarController::class,'download'])->name('download');
