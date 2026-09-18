<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'index']);

Route::get('/menu/{id}', [MenuController::class, 'detail']);

Route::get('/cart', function () {
    return view('cart.index');
});

Route::get('/checkout', function () {
    return view('checkout.index');
});

Route::get('/payment', function () {
    return view('payment.index');
});

Route::get('/success', function () {
    return view('success.index');
});