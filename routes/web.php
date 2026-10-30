<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware chỉ người đã đăng nhập mới vào được chưa đăng nhập được thì chuyển về trang login
// Chỉ chặn người chưa đăng nhập chứ không có lấy dữ liệu
// Đăng nhập thì sẽ đưa về giao diện profile
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

Route::get('/order', function () {
    return view('customer.orders.index');
})->name('order');

Route::get('/cart-checkout', function () {
    return view('customer.cart.index');
})->name('cart');

// Gộp chung và làm sạch các route của Seller
Route::prefix('seller')->name('seller.')->group(function () {
    Route::get('/', function () {
        return view('seller.dashboard');
    })->name('dashboard');

    Route::get('/orders', function () {
        return view('seller.orders.index');
    })->name('orders.index');

    Route::get('/products', function () {
        return view('seller.products.index');
    })->name('products.index');

    Route::get('/reports', function () {
        return view('seller.reports.index');
    })->name('reports.index');

    Route::get('/promotions', function () {
        return view('seller.promotions.index');
    })->name('promotions.index');

    Route::get('/reviews', function () {
        return view('seller.reviews.index');
    })->name('reviews.index');

    Route::get('/shop/edit', function () {
        return view('seller.shop.edit');
    })->name('shop.edit');
});

require __DIR__.'/auth.php';
