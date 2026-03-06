<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
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
