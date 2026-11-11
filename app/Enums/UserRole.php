<?php

namespace App\Enums;

enum UserRole: string
{
    case Customer = 'customer';
    case Seller   = 'seller';
    case Driver   = 'driver';
    case Admin    = 'admin';

    public function homeRoute(): string
    {
        return match ($this) {
            self::Admin    => 'admin.dashboard',
            self::Seller   => 'seller.dashboard',
            self::Driver   => 'driver.dashboard',
            self::Customer => 'home',
        };
    }
}