<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/katalog', function () {
//     return view('katalog');
// });

// Route::get('/bantuan', function () {
//     return view('bantuan');
// });

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
