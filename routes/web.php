<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'mainpage');

Route::middleware(['auth', 'role.redir'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backoffice.dashboard');
    })->name('dashboard');
});


Route::middleware(['auth', 'role.redir'])->group(function () {
    Route::get('/', function () {
        return view('mainpage');
    });
});


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
