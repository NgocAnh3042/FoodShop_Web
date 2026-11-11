<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // 1. Kiểm tra xem đã đăng nhập chưa
        if (! $request->user()) {
            return redirect()->route('login');
        }

        // 2. So sánh role của user với role mà route yêu cầu
        // (Sử dụng ->value vì cột role dùng Enum)
        if ($request->user()->role->value !== $role) {
            // Cố tình gõ URL trái phép -> Chặn ngay, báo lỗi 403 (Hoặc redirect về trang chủ kèm thông báo)
            abort(403, 'Bạn không có quyền truy cập vào khu vực này.');
        }

        return $next($request);
    }
}