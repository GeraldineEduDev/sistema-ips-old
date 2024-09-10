<?php

use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.layout');
});

Route::get('/biologicos', function () {
    return view('biologicos.index');
});

Route::resource('patients', PatientsController::class);