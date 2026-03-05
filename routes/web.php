<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/perkenalan', function () {
    return view('perkenalan');
});
Route::get('/nukhi', function () {
    return view('nukhi');
});
