<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAuth;

Route::middleware([CheckAuth::class])->group(function () {
    Route::get('/', function () {
        return view('users.index');
    });
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
