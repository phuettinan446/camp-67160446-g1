<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se',function(){
    return view('template.default');
});

Route::get('/mycontroller',[App\Http\Controllers\MyController::class, 'index']);
Route::get('/calculate',[App\Http\Controllers\MyController::class, 'inFo']);
Route::post('/calculate',[App\Http\Controllers\MyController::class, 'calculate']);

Route::get('/me',[App\Http\Controllers\MyController::class, 'html101']);
Route::post('/me',[App\Http\Controllers\MyController::class, 'me']);

Route::resource('/flight', App\Http\Controllers\FlightController::class);
