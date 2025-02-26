<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ex',function(){
    return view('example');
})->name('example');

Route::get('/Haldaftar',[AuthController::class,'halDaftar'])->name('auth.halDaftar');
Route::post('/daftar',[AuthController::class,'daftar'])->name('auth.daftar');
Route::get('/Hallogin',[AuthController::class,'halLogin'])->name('auth.halLogin');
Route::post('/login',[AuthController::class,'login'])->name('auth.login');
