<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>tentang Kami</h1><p>Informasi tentang apotek</p>';
})->name('about.index');
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

Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/{nim}', [ProfilController::class, 'show'])->name('profil.show');