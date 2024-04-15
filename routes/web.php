<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/carpinteria', function () {
    return view('carpinteria');
});

Route::get('/electricidad', function () {
    return view('electricidad');
});

Route::get('/fontaneria', function () {
    return view('fontaneria');
});

Route::get('/consulta-electricidad', 'ElectricidadController@consultar')->name('consulta.electricidad');