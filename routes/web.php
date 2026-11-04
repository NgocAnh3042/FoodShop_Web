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

// Kho voucher là dữ liệu cá nhân, nên đặt trong nhóm auth
Route::middleware('auth')->group(function () {
    Route::get('/vouchers', function () {
        return view('customer.profile.vouchers');
    })->name('vouchers');
});

// Trang quán: một view dùng chung cho mọi quán
Route::get('/shop/{slug}', function (string $slug) {
    return view('customer.shop.show', [
        'slug'         => $slug,
        'referralCode' => 'BEPHUE',
        // TẠM THỜI: thêm ?welcome=0 vào địa chỉ để xem trạng thái khách cũ.
        // Sau này thay dòng này bằng điều kiện thật trong controller.
        'showWelcome'  => request()->boolean('welcome', true),
    ]);
})->name('shop.show');

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

Route::get('/profile', function () {
    return view('customer.profile.vouchers');
})->name('profile');

// Seller
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

    Route::get('/delivery', function () {
        return view('seller.delivery.index');
    })->name('delivery.index');

    Route::get('/referrals', function () {
        return view('seller.referrals.index');
    })->name('referrals.index');
});

// Admin
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', fn () => view('admin.dashboard'))->name('dashboard');
    Route::get('/partners', fn () => view('admin.partners.index'))->name('partners.index');
    Route::get('/drivers', fn () => view('admin.drivers.index'))->name('drivers.index');
    Route::get('/disputes', fn () => view('admin.disputes.index'))->name('disputes.index');
    Route::get('/settings', fn () => view('admin.settings.index'))->name('settings.index');
    Route::get('/theme',    fn () => view('admin.theme.index'))->name('theme.index');
    Route::get('/finance',  fn () => view('admin.finance.index'))->name('finance.index');
});

require __DIR__.'/auth.php';
