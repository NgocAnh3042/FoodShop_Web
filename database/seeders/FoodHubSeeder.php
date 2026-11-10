<?php

namespace Database\Seeders;

use App\Models\Delivery;
use App\Models\Dish;
use App\Models\Driver;
use App\Models\Merchant;
use App\Models\MenuCategory;
use App\Models\Option;
use App\Models\OptionGroup;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Dữ liệu mẫu lấy từ chính các view Blade (Bếp Huế Cố Đô, #FH-90145...).
 * Chạy lại nhiều lần không bị trùng (dùng updateOrCreate / firstOrCreate).
 *
 *   php artisan db:seed
 * Tất cả tài khoản mẫu có mật khẩu: password
 */
class FoodHubSeeder extends Seeder
{
    /** Chèn hoặc cập nhật 1 dòng ở bảng chưa có Model, trả về id */
    private function id(string $table, array $keys, array $values = []): int
    {
        $now = now();
        DB::table($table)->updateOrInsert($keys, $values + ['created_at' => $now, 'updated_at' => $now]);

        return (int) DB::table($table)->where($keys)->value('id');
    }

    public function run(): void
    {
        $now = now();

        // ---------- Danh mục dùng chung ----------
        $regionId = $this->id('regions', ['slug' => 'ho-chi-minh'], ['name' => 'TP. Hồ Chí Minh', 'is_active' => 1]);
        $hubId    = $this->id('hubs', ['region_id' => $regionId, 'name' => 'Quận 1'], ['lat' => 10.7769, 'lng' => 106.7009, 'is_active' => 1]);
        $this->id('commission_tiers', ['code' => 'priority'], ['name' => 'Chuỗi ưu tiên', 'rate_percent' => 15]);
        $tierA    = $this->id('commission_tiers', ['code' => 'standard_a'], ['name' => 'Tiêu chuẩn A', 'rate_percent' => 18]);
        $this->id('commission_tiers', ['code' => 'standard_b'], ['name' => 'Tiêu chuẩn B', 'rate_percent' => 20]);
        $cuisineId = $this->id('cuisine_types', ['name' => 'Đặc sản Miền Trung']);

        // ---------- Tài khoản (mật khẩu: password) ----------
        $admin = User::updateOrCreate(['phone' => '0900000001'], [
            'name' => 'Super Admin', 'email' => 'admin@foodhub.test', 'password' => 'password',
            'role' => 'admin', 'phone_verified_at' => $now, 'email_verified_at' => $now,
        ]);
        DB::table('admin_profiles')->updateOrInsert(['user_id' => $admin->id], [
            'admin_role' => 'super_admin', 'two_fa_enabled' => 1, 'created_at' => $now, 'updated_at' => $now,
        ]);

        $seller = User::updateOrCreate(['phone' => '0900000002'], [
            'name' => 'Nguyễn Thị Hồng Nhung', 'email' => 'seller@foodhub.test', 'password' => 'password',
            'role' => 'seller', 'phone_verified_at' => $now, 'email_verified_at' => $now,
        ]);
        $customer = User::updateOrCreate(['phone' => '0900000003'], [
            'name' => 'Trần Minh Hoàng', 'email' => 'customer@foodhub.test', 'password' => 'password',
            'role' => 'customer', 'phone_verified_at' => $now, 'email_verified_at' => $now,
        ]);
        $driverUser = User::updateOrCreate(['phone' => '0900000004'], [
            'name' => 'Trần Quốc Bảo', 'email' => 'driver@foodhub.test', 'password' => 'password',
            'role' => 'driver', 'phone_verified_at' => $now, 'email_verified_at' => $now,
        ]);

        // ---------- Đối tác + chi nhánh ----------
        $merchant = Merchant::updateOrCreate(['code' => 'FHB-88421'], [
            'owner_user_id' => $seller->id, 'brand_name' => 'Bếp Huế Cố Đô',
            'legal_name' => 'Bếp Huế Cố Đô', 'hotline' => '0903882199',
            'tier' => 'favorite', 'commission_tier_id' => $tierA, 'cuisine_type_id' => $cuisineId,
            'status' => 'active', 'trust_score' => 100, 'approved_by' => $admin->id, 'approved_at' => $now,
        ]);

        $store = Store::updateOrCreate(['slug' => 'bep-hue-co-do'], [
            'merchant_id' => $merchant->id, 'hub_id' => $hubId, 'region_id' => $regionId,
            'branch_name' => 'Chi nhánh Hai Bà Trưng',
            'description' => 'Gìn giữ hương vị cố đô truyền thống hơn 25 năm. Nước dùng ninh hầm xương bò 12 tiếng hòa quyện mắm ruốc chuẩn gốc Huế.',
            'address_line' => '120 Hai Bà Trưng, Phường Bến Nghé', 'district' => 'Quận 1',
            'lat' => 10.7870, 'lng' => 106.7050, 'phone' => '0903882199',
            'is_open' => true, 'status' => 'active', 'rating_avg' => 4.9, 'rating_count' => 1420,
            'avg_prep_minutes' => 12,
        ]);

        DB::table('store_settings')->updateOrInsert(['store_id' => $store->id], [
            'default_prep_minutes' => 15, 'max_order_radius_km' => 10.0, 'max_concurrent_orders' => 25,
            'printer_model' => 'Epson TM-T82III', 'printer_ip' => '192.168.1.188', 'printer_port' => 9100,
            'created_at' => $now, 'updated_at' => $now,
        ]);

        // ---------- Thực đơn ----------
        $cats = [];
        foreach (['Món nước & Bún bò', 'Cơm & Món mặn Cố Đô', 'Bánh Huế truyền thống', 'Tráng miệng Cung Đình', 'Đồ uống tươi mát'] as $i => $name) {
            $cats[$name] = MenuCategory::firstOrCreate(
                ['store_id' => $store->id, 'name' => $name],
                ['sort_order' => $i, 'is_active' => true]
            );
        }

        $dishData = [
            ['M-01', 'Món nước & Bún bò', 'Bún Bò Huế Đặc Biệt Cố Đô', 65000, 75000, 12, 'Bắp bò hoa mềm ngọt, nạm bò giòn rụm, chả cua Huế thượng hạng, tiết luộc và móng giò giòn sần sật.', true, null],
            ['M-02', 'Món nước & Bún bò', 'Bún Bò Bắp Cua Cố Đô', 55000, null, 10, 'Vị ngọt thanh của bắp bò hoa hảo hạng và chả cua biển nguyên chất.', true, null],
            ['M-03', 'Món nước & Bún bò', 'Bún Giò Nạc Cẩm Lệ', 50000, null, 10, 'Giò nạc giòn sần sật ninh cùng sả cây, đậm vị ruốc Huế.', false, 'HẾT NGUYÊN LIỆU GIÒ HEO'],
            ['M-04', 'Món nước & Bún bò', 'Bún Bò Gân Giòn Xứ Huế', 52000, null, 12, 'Gân trong giòn sần sật, ninh hầm liên tục 6 tiếng.', true, null],
            ['B-01', 'Bánh Huế truyền thống', 'Bánh Bèo Chén Tôm Cháy', 45000, null, 8, 'Bánh bèo chén tôm cháy giòn rụm, nước mắm ngọt.', true, null],
            ['C-01', 'Cơm & Món mặn Cố Đô', 'Canh Khổ Qua Thát Lát', 45000, null, 10, 'Nhồi thịt cá thát lát dai giòn, nước dùng xương hầm.', true, null],
            ['D-01', 'Đồ uống tươi mát', 'Trà Cung Đình Huế (Đá)', 13000, null, 3, 'Thảo mộc thanh mát 16 vị.', true, null],
            ['D-02', 'Đồ uống tươi mát', 'Trà Đào Cam Sả Tươi', 32000, null, 4, 'Trà đào cam sả tươi mát.', true, null],
        ];

        $dishes = [];
        foreach ($dishData as [$sku, $cat, $name, $price, $orig, $prep, $desc, $avail, $reason]) {
            $dishes[$sku] = Dish::updateOrCreate(['store_id' => $store->id, 'sku' => $sku], [
                'menu_category_id' => $cats[$cat]->id, 'name' => $name, 'description' => $desc,
                'price' => $price, 'original_price' => $orig, 'prep_minutes' => $prep,
                'is_available' => $avail, 'unavailable_reason' => $reason,
                'rating_avg' => 4.8, 'rating_count' => 100,
            ]);
        }

        // Nhóm topping dùng chung cho các món bún bò
        $group = OptionGroup::firstOrCreate(
            ['store_id' => $store->id, 'name' => 'Topping gọi thêm'],
            ['min_select' => 0, 'max_select' => 3]
        );
        foreach ([['Thêm tiết', 5000], ['Thêm chả cua', 15000], ['Thêm bắp bò', 20000]] as $i => [$name, $extra]) {
            Option::firstOrCreate(
                ['option_group_id' => $group->id, 'name' => $name],
                ['extra_price' => $extra, 'sort_order' => $i, 'is_available' => true]
            );
        }
        foreach (['M-01', 'M-02', 'M-03', 'M-04'] as $sku) {
            $dishes[$sku]->optionGroups()->syncWithoutDetaching([$group->id]);
        }

        // ---------- Tài xế ----------
        $driver = Driver::updateOrCreate(['code' => 'RD-44021'], [
            'user_id' => $driverUser->id, 'type' => 'platform', 'hub_id' => $hubId,
            'full_name' => 'Trần Quốc Bảo', 'phone' => '0918421902',
            'vehicle_type' => 'gas_motorbike', 'vehicle_model' => 'Honda AirBlade 150cc',
            'license_plate' => '59P1-882.34', 'tier' => 'pro', 'kyc_status' => 'approved',
            'work_status' => 'busy', 'rating_avg' => 4.95, 'completed_trips' => 1482,
            'acceptance_rate' => 98.8, 'ontime_rate' => 99.4,
        ]);

        // ---------- Đơn mẫu ----------
        // #FH-90145: khớp UI seller/order-detail (198.000 - 19.800 - 32.076 + 6.000 = 152.124)
        $this->makeOrder($store, $customer, [
            'code' => 'FH-90145', 'status' => 'preparing', 'kitchen_status' => 'cooking',
            'payment_method' => 'momo', 'payment_status' => 'paid',
            'delivery_address' => 'Tòa nhà Centec Tower, Tầng 8 - P.802, 120 Hai Bà Trưng, Q.1',
            'receiver_name' => 'Trần Minh Hoàng', 'receiver_phone' => '0900000003',
            'customer_note' => 'Ít cay, nhiều bắp hoa',
            'store_discount' => 19800, 'delivery_fee' => 15000, 'platform_fee' => 3000, 'packaging_support' => 6000,
            'placed_at' => $now->copy()->subMinutes(12),
        ], [
            ['dish' => $dishes['M-01'], 'qty' => 2, 'unit_price' => 70000, 'option' => ['Thêm tiết', 5000]],
            ['dish' => $dishes['C-01'], 'qty' => 1, 'unit_price' => 45000],
            ['dish' => $dishes['D-01'], 'qty' => 1, 'unit_price' => 13000],
        ], $driver);

        // #FH-90128: đơn đã hoàn tất (để báo cáo / lịch sử có dữ liệu)
        $this->makeOrder($store, $customer, [
            'code' => 'FH-90128', 'status' => 'completed', 'kitchen_status' => 'done',
            'payment_method' => 'zalopay', 'payment_status' => 'paid',
            'delivery_address' => 'Tòa nhà Centec Tower, Tầng 8 - P.802, 120 Hai Bà Trưng, Q.1',
            'receiver_name' => 'Trần Minh Hoàng', 'receiver_phone' => '0900000003',
            'delivery_fee' => 15000, 'platform_fee' => 3000,
            'placed_at' => $now->copy()->subDay(),
            'delivered_at' => $now->copy()->subDay()->addMinutes(35),
        ], [
            ['dish' => $dishes['M-01'], 'qty' => 2, 'unit_price' => 65000],
        ], $driver);
    }

    /** Tạo đơn + dòng món + thanh toán + gán tài xế; tính tiền theo công thức đã thiết kế */
    private function makeOrder(Store $store, User $customer, array $o, array $items, Driver $driver): void
    {
        $subtotal = 0;
        foreach ($items as $it) {
            $subtotal += $it['unit_price'] * $it['qty'];
        }

        $rate       = 18.00; // snapshot % chiết khấu lúc đặt (hạng Tiêu chuẩn A)
        $discount   = $o['store_discount'] ?? 0;
        $commission = (int) round(($subtotal - $discount) * $rate / 100);
        $packaging  = $o['packaging_support'] ?? 0;
        $deliveryFee = $o['delivery_fee'] ?? 0;
        $platformFee = $o['platform_fee'] ?? 0;

        $order = Order::updateOrCreate(['code' => $o['code']], $o + [
            'customer_id' => $customer->id, 'store_id' => $store->id,
            'fulfillment_type' => 'delivery', 'delivery_mode' => 'foodhub_shipper',
            'subtotal' => $subtotal,
            'delivery_fee' => $deliveryFee, 'platform_fee' => $platformFee,
            'store_discount' => $discount, 'platform_discount' => 0,
            'total_amount' => $subtotal + $deliveryFee + $platformFee - $discount,
            'commission_rate' => $rate, 'commission_amount' => $commission,
            'packaging_support' => $packaging,
            'merchant_net' => $subtotal - $discount - $commission + $packaging,
            'distance_km' => 2.4,
        ]);

        if (! $order->wasRecentlyCreated) {
            return; // chạy seeder lần 2: không nhân đôi dòng món
        }

        foreach ($items as $it) {
            $line = $order->items()->create([
                'dish_id' => $it['dish']->id, 'name' => $it['dish']->name,
                'unit_price' => $it['unit_price'], 'quantity' => $it['qty'],
                'line_total' => $it['unit_price'] * $it['qty'],
            ]);
            if (isset($it['option'])) {
                DB::table('order_item_options')->insert([
                    'order_item_id' => $line->id, 'name' => $it['option'][0], 'extra_price' => $it['option'][1],
                ]);
            }
        }

        Payment::create([
            'order_id' => $order->id, 'method' => $o['payment_method'], 'amount' => $order->total_amount,
            'status' => 'success', 'paid_at' => $order->placed_at,
        ]);

        Delivery::create([
            'order_id' => $order->id, 'driver_id' => $driver->id,
            'status' => $order->status === 'completed' ? 'delivered' : 'assigned',
            'customer_fee' => $deliveryFee, 'driver_earning' => 12000,
            'assigned_at' => $order->placed_at,
            'delivered_at' => $order->delivered_at,
        ]);
    }
}
