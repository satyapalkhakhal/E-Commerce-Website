<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/shipping', function () {
    return view('shipping');
});
