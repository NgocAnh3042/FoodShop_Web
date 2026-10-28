<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/deals',function(){
    return view('customer.deals');
})->name('deals');

Route::get('/home',function(){
    return view('customer.home');
})->name('home');

Route::get('/menu', function () {
    return view('customer.menu');
})->name('menu');

Route::get('order', function () {
    return view('customer.orders.index');
})->name('order');

Route::get('/cart-checkout', function () {
    return view('customer.cart.index');
})->name('cart');

require __DIR__.'/auth.php';
