<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;

Route::get('/', function () {
    return view('welcome');
});

// perkenalan
Route::get('/husain', function () {
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

// statis
Route::get('/', function () {
    return '<h1>Selamat datang di Apotek Online</h1><p>Home</p>';
})->name('home.index');

Route::get('/about', function () {
    return '<h1>Tentang Kami</h1><p>Informasi tentang apotek.</p>';
})->name('about.index');

Route::get('/contact', function () {
    return '<h1>Kontak</h1><p>Hubungi kami: 0812-xxxx-xxxx</p>';
})->name('contact.index');

Route::get('/faq', function () {
    return '<h1>FAQ Apotek</h1><p>Pertanyaan yang sering diajukan pelanggan.</p>';
})->name('faq.index');

Route::get('/panduan', function () {
    return '<h1>Panduan</h1><p>Cara memesan obat dan menebus resep dokter.</p>';
})->name('panduan.index');

Route::get('/promo', function () {
    return '<h1>Promo Apotek</h1><p>Diskon 20% untuk semua produk multivitamin hari ini!</p>';
})->name('promo.index');

// dinamis
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/{nim}', [ProfilController::class, 'show'])->name('profil.show');

Route::get('/katalog/cari/{keyword}', [KatalogController::class, 'search'])->name('katalog.search');
Route::get('/katalog/kategori/{kategori}', [KatalogController::class, 'kategori'])->name('katalog.kategori');
