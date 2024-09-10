<?php

use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('patients', PatientsController::class);