<?php

namespace Tests\Feature\Customer;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AccountNavigationTest extends TestCase
{
    use RefreshDatabase;

    public function test_account_sections_render_with_the_shared_navigation(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $sections = [
            'account' => 'Kho voucher & Ưu đãi của tôi',
            'account.profile' => 'Thông tin cá nhân',
            'account.orders' => 'Đơn hàng của tôi',
            'account.vouchers' => 'Kho voucher & Ưu đãi của tôi',
            'account.addresses' => 'Địa chỉ đã lưu',
            'account.favorites' => 'Món & Quán yêu thích',
        ];

        foreach ($sections as $route => $title) {
            $this->get(route($route))
                ->assertOk()
                ->assertSee($title)
                ->assertSee(route('account.profile'), false)
                ->assertSee(route('account.orders'), false)
                ->assertSee(route('account.vouchers'), false)
                ->assertSee(route('account.addresses'), false)
                ->assertSee(route('account.favorites'), false);
        }
    }
}
