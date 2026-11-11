<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    // Quyết định xem người dùng có được phép gửi yêu cầu đăng nhập này hay không.
    public function authorize(): bool
    {
        return true;
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    // Định nghĩa các quy tắc kiểm tra (validation rules) cho dữ 
    // liệu do người dùng nhập vào từ form đăng nhập
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws ValidationException
     */
    // Thực hiện toàn bộ quy trình kiểm tra thông tin đăng nhập và xử lý bảo mật.
    public function authenticate(): void
    {
        // Chống dò mật khẩu khi dò quá nhiều lần (rate limiting)
        $this->ensureIsNotRateLimited();
        // Lấy emai và mật khẩu vừa nhập đối chiều vào cơ sở dữ liệu
        if (! Auth::attempt(
        [...$this->only('email', 'password'), 'status' => 'active'],$this->boolean('remember')))
        {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws ValidationException
     */

    // Hàm này chặn người dùng cố tình dò mật khẩu quá nhiều lần trong một khoảng thời gian ngắn.
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }
        event(new Lockout($this));
        $seconds = RateLimiter::availableIn($this->throttleKey());
        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    // Tạo ra một "khóa định danh duy nhất" (Throttle Key) để hệ 
    // thống nhận diện xem ai đang thực hiện hành động đăng nhập.
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->string('email')).'|'.$this->ip());
    }
}
