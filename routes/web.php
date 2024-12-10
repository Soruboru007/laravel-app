<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name(name: 'home');

Route::get(uri: 'login', action: [AuthManager::class, 'login'])->name(name: 'login');

Route::post(uri: 'login', action: [AuthManager::class, 'loginpost'])->name(name: 'loginpost');

Route::get(uri: 'register', action: [AuthManager::class, 'register'])->name(name: 'register');

Route::post(uri: 'register', action: [AuthManager::class, 'registerpost'])->name(name: 'registerpost');