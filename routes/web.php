<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

//SISWA
Route::get('/home', [SiswaController::class, 'home'])->name('home');
Route::get('/absen', [SiswaController::class, 'tampil'])->name('siswa.tampil');
Route::get('/absen/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');
Route::post('/absen/submit', [SiswaController::class, 'submit'])->name('siswa.submit');
Route::get('/absen/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('/absen/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::post('/absen/delete/{id}', [SiswaController::class, 'delete'])->name('siswa.delete');

//USER
Route::get('/kelola', [UserController::class, 'tampil'])->name('user.tampil');
Route::get('/kelola/tambah', [UserController::class, 'tambah'])->name('user.tambah');
Route::post('/kelola/submit', [UserController::class, 'submit'])->name('user.submit');
Route::get('/kelola/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/kelola/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::post('/kelola/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
