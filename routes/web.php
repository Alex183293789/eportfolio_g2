<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('evidencias')->name('evidencias.')->group(function () {
    Route::get('/', function () {
        return view('evidencias.index');
    })->name('index');

    Route::get('/show/{id}', function ($id) {
        return view('evidencias.show', ['id' => $id]);
    })->whereNumber('id')->name('show');

    Route::get('/create', function () {
        return 'Nueva evidencia';
    })->name('create');

    Route::get('/edit/{id}', function ($id) {
        return 'Modificar evidencia ' . e($id);
    })->whereNumber('id')->name('edit');
});

Route::get('/perfil/{id?}', function ($id = null) {
    return view('perfil', ['id' => $id]);
})->whereNumber('id')->name('perfil');

Route::get('acerca', function () {
    return ['centro' => config('eportfolio.centro'), 'aplicacion' => config('app.name')];
})->name('acerca');
