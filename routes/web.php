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
Route::get('/user/dashboard', function () {
    return view('welcome');
});

Route::get('/user/ticket', function () {
    return view('ticket');
});

Route::get('/user/checkout', function () {
    return view('checkout');
});

Route::get('/user/event-detail', function () {
    return view('event-detail');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/events', function () {
    return view('admin.events');
});

Route::get('/admin/transaction', function () {
    return view('admin.transaction');
});