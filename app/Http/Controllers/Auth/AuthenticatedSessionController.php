<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    // LoginRequest $request truyền dữ liều người khi nhập vào để kiểm tra xác thực, nếu đúng thì đăng nhập thành công, nếu sai thì báo lỗi
    // Đồng thời nó cũng là nơi để thực thi kiểm tra database
public function store(LoginRequest $request): RedirectResponse
{
    $request->authenticate();
    $request->session()->regenerate();

    $user = $request->user();
    $user->forceFill(['last_login_at' => now()])->save();

    $home = route($user->role->homeRoute());

    // Khách quay lại trang đang định vào; các vai trò khác luôn về trang của mình
    return $user->isRole(UserRole::Customer)
        ? redirect()->intended($home)
        : redirect()->to($home);
}

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
