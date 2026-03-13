<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/cursos', function () {
    return view('cursos.index');
});

Route::get('/participantes', function () {
    return view('participantes.index');
});

Route::get('/participantes/crear', function () {
    return view('participantes.crear');
});

Route::get('/usuarios', function () {
    return view('usuarios.index');
});

