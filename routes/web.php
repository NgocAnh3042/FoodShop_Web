<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Customer\AccountController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Driver;

Route::get('/dashboard', fn (Request $request) => redirect()->route($request->user()->role->homeRoute()))
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

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


// Tài khoản là dữ liệu cá nhân, bắt buộc phải đăng nhập.
Route::middleware('auth')->group(function () {
    Route::get('/account', [AccountController::class, 'vouchers'])->name('account');

    Route::prefix('account')->name('account.')->group(function () {
        Route::get('/profile', [AccountController::class, 'profile'])->name('profile');
        Route::get('/orders', [AccountController::class, 'orders'])->name('orders');
        Route::get('/vouchers', [AccountController::class, 'vouchers'])->name('vouchers');
        Route::get('/addresses', [AccountController::class, 'addresses'])->name('addresses');
        Route::get('/favorites', [AccountController::class, 'favorites'])->name('favorites');
    });

    // Giữ các URL cũ để liên kết đang dùng không bị hỏng.
    Route::get('/profile', [AccountController::class, 'vouchers'])->name('profile');
    Route::redirect('/vouchers', '/account/vouchers')->name('vouchers');
    Route::redirect('/order', '/account/orders')->name('order');
    Route::get('/cart-checkout', fn () => view('customer.cart.index'))->name('cart');
});

// Trang chủ & Các trang công khai cho Customer
Route::get('/', fn () => view('customer.home'))->name('home');
Route::get('/home', fn () => view('customer.home'));
Route::get('/deals', fn () => view('customer.deals'))->name('deals');
Route::get('/menu', fn () => view('customer.menu'))->name('menu');


// Seller (Người bán / Chủ quán)
Route::prefix('seller')->name('seller.')->middleware(['auth', 'role:seller'])->group(function () {
    Route::get('/', fn () => view('seller.dashboard'))->name('dashboard');
    Route::get('/orders', fn () => view('seller.orders.index'))->name('orders.index');
    Route::get('/products', fn () => view('seller.products.index'))->name('products.index');
    Route::get('/reports', fn () => view('seller.reports.index'))->name('reports.index');
    Route::get('/promotions', fn () => view('seller.promotions.index'))->name('promotions.index');
    Route::get('/reviews', fn () => view('seller.reviews.index'))->name('reviews.index');
    Route::get('/shop/edit', fn () => view('seller.shop.edit'))->name('shop.edit');
    Route::get('/delivery', fn () => view('seller.delivery.index'))->name('delivery.index');
    Route::get('/referrals', fn () => view('seller.referrals.index'))->name('referrals.index');
});

// Admin
Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', fn () => view('admin.dashboard'))->name('dashboard');
    Route::get('/partners', fn () => view('admin.partners.index'))->name('partners.index');
    Route::get('/drivers', fn () => view('admin.drivers.index'))->name('drivers.index');
    Route::get('/disputes', fn () => view('admin.disputes.index'))->name('disputes.index');
    Route::get('/settings', fn () => view('admin.settings.index'))->name('settings.index');
    Route::get('/theme',    fn () => view('admin.theme.index'))->name('theme.index');
    Route::get('/finance',  fn () => view('admin.finance.index'))->name('finance.index');
});

// ---------- DRIVER ----------
Route::middleware(['auth', 'role:driver'])
    ->prefix('driver')->name('driver.')
    ->group(function () {
        Route::get('/', [Driver\DashboardController::class, 'index'])->name('dashboard');
    });

require __DIR__.'/auth.php';
