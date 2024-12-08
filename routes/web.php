<?php

use Illuminate\Support\Facades\Route;

Route::get('/{username}', function (string $username) {
    return view('welcome', ['username' => $username]);
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/user/{id}', function () {
    return view('welcome');
});
