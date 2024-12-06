<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'mainpage')->middleware('role.redir');
Route::view('/produk', 'livewire.produk-index')->name('produk'); 


Route::middleware(['auth', 'role.redir'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backoffice.dashboard');
    })->name('dashboard');
    Route::get('/productmanage', function () {
        return view('livewire.barang-index');
    })->name('productmanage');
    Route::get('/servicemanage', function () {
        return view('backoffice.servicemanage');
    });
    Route::get('/notifikasi', function () {
        return view('backoffice.notifikasi');
    });
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';