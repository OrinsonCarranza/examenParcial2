<?php

use App\Http\Controllers\EstudianteController;

Route::get('/', function () {
    return view('home');
});

Route::resource('estudiantes', EstudianteController::class);
