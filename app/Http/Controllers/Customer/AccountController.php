<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function profile(Request $request)
    {
        return view('customer.profile.show', [
            'user' => $request->user(),
        ]);
    }

    public function orders(Request $request)
    {
        return view('customer.orders.index', [
            'user' => $request->user(),
        ]);
    }

    public function vouchers(Request $request)
    {
        return view('customer.profile.vouchers', [
            'user' => $request->user(),
        ]);
    }

    public function addresses(Request $request)
    {
        return view('customer.profile.addresses', [
            'user' => $request->user(),
        ]);
    }

    public function favorites(Request $request)
    {
        return view('customer.profile.favorites', [
            'user' => $request->user(),
        ]);
    }
}