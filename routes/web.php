<?php

use Database\Seeders\Barang;
use Illuminate\Support\Facades\Route;

Route::view('/', 'mainpage')->middleware('role.redir')->name('/');
Route::view('/produk', 'livewire.barang.katalog')->name('produk');
Route::get('/barang/{id}', \App\Livewire\Component\ProdukDesk::class)->name('barang.show');
Route::get('/produk', function (Request $request) {
    $searchTerm = request()->query('search');

    $barangResults = \App\Models\Barang::where('nama_barang', 'like', "%{$searchTerm}%")
        ->orWhere('deskripsi', 'like', "%{$searchTerm}%")
        ->orWhere('merk', 'like', "%{$searchTerm}%")
        ->select('id', 'nama_barang as name', DB::raw('"barang" as source'));

    $jasaResults = \App\Models\Jasa::query()
        ->where('nama_jasa', 'like', "%{$searchTerm}%")
        ->select('id', 'nama_jasa as name', DB::raw('"jasa" as source')); 

    $products = $barangResults->union($jasaResults)->get();

    return view('livewire.barang.katalog', compact('products', 'searchTerm'));
})->name('produk');


Route::middleware(['auth', 'role.redir'])->group(function () {
    Route::get(
        '/dashboard',
        \App\Livewire\Backoffice\Dashboard::class
    )->name('dashboard');

    Route::get(
        '/productmanage',
        \App\Livewire\Barang\Barangindex::class
    )->name('productmanage.index');

    Route::get(
        '/productmanage/create',
        \App\Livewire\Barang\BarangCreate::class
    )->name('productmanage.create');

    Route::get('/productmanage/{barangId}/edit', \App\Livewire\Barang\Barangedit::class)
        ->name('productmanage.edit');

    Route::get('/servicemanage', \App\Livewire\Service\ServiceIndex::class)
        ->name('servicemanage');

    Route::get('/notifikasi', \App\Livewire\Notifikasi\Notifikasi::class)
        ->name('notifikasi');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';