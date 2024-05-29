<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaisenController;
use App\Http\Controllers\Pasiencontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selam', function () {
    return "selamat belajar fahri";
});

Route::get('/Beranda', function (){
    return "halaman beranda";
});

Route::get('/profile', function() {
    return"Halaman Profile";
});


//Praktikum Laravel 22
Route::get('/dashboard', [AdminController::class, 'index' ]);
Route::get('/contact', [ContactController::class, 'index' ]);

//Praktikum Laravel 23
Route::get('/dashboard/pasien', [PasienController::class, 'index' ]);