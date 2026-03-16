<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/certificados', function () {
    return view('certificados.index');
});

Route::get('/certificados/create', function () {
    return view('certificados.create');
});

Route::get('/verify', function () {
    return view('verify.verify');
});
Route::resource('cursos', CourseController::class);

Route::get('/participantes', function () {
    return view('participantes.index');
});

Route::get('/participantes/crear', function () {
    return view('participantes.crear');
});

Route::get('/usuarios', function () {
    return view('usuarios.index');
});

