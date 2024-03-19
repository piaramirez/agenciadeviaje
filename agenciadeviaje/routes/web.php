<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\Democontroller;
Route::get('/', function () {
    return view('index');
});
Route::get('/ejemplo', [Democontroller::class, 'Index']);
Route::get('servicios', [Democontroller::class, 'servicioMetodo']);