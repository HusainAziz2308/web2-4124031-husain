<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;
// statis
Route::get('/', function () {
    return '<h1>Selamat datang di Apotek Online</h1><p>Home</p>';
})->name('home.index');

Route::get('/contact', function () {
    return '<h1>Kontak</h1><p>Hubungi kami: 0812-xxxx-xxxx</p>';
})->name('contact.index');

// perkenalan
Route::get('/perkenalan', function () {
    return '
        <h1>Halo! Nama Saya Husain Aziz Al Rosyid</h1>
        <p>NIM: 4124031 | Program Studi: Sistem Informasi</p>
        <p>Saya siap belajar Laravel! 🚀</p>
    ';
});
Route::get('/nukhi', function () {
    return '
        <h1>Halo! Nama Saya Nukhi Alvin R</h1>
        <p>NIM: 4124044 | Program Studi: Sistem Informasi</p>
        <p>Saya siap belajar Laravel! 🚀</p>
    ';
});
Route::get('/affani', function () {

    return '<h1>Halo! Nama saya Affani Yusuf</h1>

            <p>NIM: 4119064 | Prodi: Sistem Informasi</p>

            <p>Saya siap belajar Laravel! 🚀</p>';
});

// dinamis
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');

