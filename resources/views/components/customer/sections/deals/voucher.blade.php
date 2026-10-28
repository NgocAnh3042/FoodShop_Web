@php
    // Sau này thay mảng này bằng dữ liệu từ Controller (bảng coupons)
    $vouchers = [
        [
            'variant' => 'primary',
            'category' => 'dishes',
            'icon' => 'restaurant_menu',
            'label' => 'GIẢM NGAY',
            'amount' => '50',
            'unit' => '%',
            'stamp' => 'Toàn sàn',
            'tag' => 'Món chính',
            'expires' => 'Còn 18 giờ',
            'title' => 'Đại Tiệc Tinh Hoa Ẩm Thực',
            'desc' => 'Giảm tối đa 60.000đ cho đơn từ 120.000đ',
            'code' => 'YUMMY50',
        ],
        [
            'variant' => 'tertiary',
            'category' => 'freeship',
            'icon' => 'local_shipping',
            'label' => 'SHIP 0Đ',
            'amount' => '25',
            'unit' => 'K',
            'stamp' => 'Bán kính 5km',
            'tag' => 'Freeship Extra',
            'expires' => 'HSD: 30/11',
            'title' => 'Miễn Phí Giao Tận Bàn',
            'desc' => 'Giảm 25.000đ phí giao hàng cho đơn từ 80.000đ',
            'code' => 'FREESHIP25',
        ],
        [
            'variant' => 'gold',
            'category' => 'payment',
            'icon' => 'account_balance_wallet',
            'label' => 'VÍ ĐIỆN TỬ',
            'amount' => '35',
            'unit' => 'K',
            'stamp' => 'ZaloPay & Momo',
            'tag' => 'Ví đối tác',
            'expires' => 'Còn 120 lượt',
            'title' => 'Ưu Đãi Ví Không Tiền Mặt',
            'desc' => 'Giảm 35.000đ khi thanh toán qua ZaloPay hoặc ShopeePay',
            'code' => 'EWALLET35',
        ],
        [
            'variant' => 'orange',
            'category' => 'combo',
            'icon' => 'celebration',
            'label' => 'NHÓM BẠN',
            'amount' => '80',
            'unit' => 'K',
            'stamp' => 'Từ 4 người',
            'tag' => 'Tiệc văn phòng',
            'expires' => 'HSD: 7 ngày',
            'title' => 'Hội Bạn Ăn Uống Thả Ga',
            'desc' => 'Giảm 80.000đ cho đơn đặt món nhóm từ 250.000đ',
            'code' => 'TEAMFEAST',
        ],
        [
            'variant' => 'green',
            'category' => 'freeship',
            'icon' => 'two_wheeler',
            'label' => 'SHIP VIP',
            'amount' => '40',
            'unit' => 'K',
            'stamp' => 'Không giới hạn',
            'tag' => 'Freeship Max',
            'expires' => 'Hot nhất ngày',
            'title' => 'Giao Siêu Tốc 0 Đồng',
            'desc' => 'Giảm thẳng 40.000đ cước vận chuyển đơn từ 150.000đ',
            'code' => 'FREESHIPMAX',
        ],
        [
            'variant' => 'brown',
            'category' => 'payment',
            'icon' => 'credit_card_heart',
            'label' => 'VISA CARD',
            'amount' => '50',
            'unit' => 'K',
            'stamp' => 'Thẻ tín dụng',
            'tag' => 'Đối tác Ngân hàng',
            'expires' => 'Thứ 6 & Thứ 7',
            'title' => 'Đặc Quyền Chủ Thẻ Visa',
            'desc' => 'Giảm 50.000đ khi liên kết thanh toán thẻ Visa chạm FoodHub',
            'code' => 'VISAFOOD50',
        ],
    ];
@endphp

<section class="flex flex-col gap-6">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-2">
        <div>
            <div class="flex items-center gap-2 text-primary font-label-sm uppercase tracking-wider font-bold">
                <span class="material-symbols-outlined text-lg">loyalty</span>
                <span>Kho mã giảm giá độc quyền</span>
            </div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface mt-1">Mã giảm giá hot sẵn sàng lưu</h2>
        </div>
        <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
            Chỉ cần nhấn <strong class="text-primary font-semibold">Lưu mã</strong>, voucher sẽ tự động hiển thị tại bước
            thanh toán giỏ hàng.
        </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="voucher-grid">
        @foreach ($vouchers as $v)
            <x-customer.cards.voucher-card :variant="$v['variant']" :category="$v['category']" :icon="$v['icon']" :label="$v['label']"
                :amount="$v['amount']" :unit="$v['unit']" :stamp="$v['stamp']" :tag="$v['tag']" :expires="$v['expires']"
                :title="$v['title']" :desc="$v['desc']" :code="$v['code']" />
        @endforeach
    </div>
</section>
