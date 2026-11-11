<?php

namespace App\Models;

use App\Enums\UserRole;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'phone', 'email', 'password', 'role', 'avatar_path', 'status',
        'phone_verified_at', 'email_verified_at',
    ];

    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'phone_verified_at' => 'datetime',
            'last_login_at'     => 'datetime',
            'password'          => 'hashed',
            'role'              => UserRole::class,
        ];
    }

    protected function maskedPhone(): Attribute
    {
        return Attribute::get(function () {
            $phone = (string) $this->phone;
            if ($phone === '') {
                return 'Chưa cập nhật';
            }
            if (strlen($phone) < 7) {
                return $phone;
            }
            return substr($phone, 0, 4).' ••• '.substr($phone, -3);
        });
    }

    public function isRole(UserRole|string $role): bool
    {
        if (is_string($role)) {
            $role = UserRole::tryFrom($role);
        }

        return $this->role === $role;
    }

    public function driver(): HasOne
    {
        return $this->hasOne(Driver::class);
    }

    public function merchants(): HasMany
    {
        return $this->hasMany(Merchant::class, 'owner_user_id');
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'customer_id');
    }
}
