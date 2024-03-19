<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\Democontroller;
Route::get('/', function () {
    return view('index');
});
Route::controller(Democontroller::class)->group(function (){
    Route::get('/index', 'Index')->name('index.page');
    /*Route::get('/ejemplo', 'ejemploMetodo')->name('ejemplo.page')->middleware('check');*/
    Route::get('/ejemplo', 'ejemploMetodo')->name('ejemplo.page');
    Route::get('/servicios', 'servicioMetodo')->name('servicio.page');
    Route::get('/contactanos', 'contactosMetodo')->name('contactos.page');
});
