@php
    // route: tên route | pattern: dùng để xác định menu đang active | badge: nhãn số (tuỳ chọn)
    $menu = [
        ['label' => 'Tổng quan', 'icon' => 'dashboard', 'route' => 'seller.dashboard', 'pattern' => 'seller.dashboard'],
        [
            'label' => 'Quản lý đơn hàng',
            'icon' => 'receipt_long',
            'route' => 'seller.orders.index',
            'pattern' => 'seller.orders.*',
            'badge' => '8 mới',
        ],
        [
            'label' => 'Thực đơn & Món ăn',
            'icon' => 'restaurant_menu',
            'route' => 'seller.products.index',
            'pattern' => 'seller.products.*',
        ],
        [
            'label' => 'Báo cáo doanh thu',
            'icon' => 'query_stats',
            'route' => 'seller.reports.index',
            'pattern' => 'seller.reports.*',
        ],
        [
            'label' => 'Khuyến mãi & Marketing',
            'icon' => 'campaign',
            'route' => 'seller.promotions.index',
            'pattern' => 'seller.promotions.*',
        ],
        [
            'label' => 'Đánh giá khách hàng',
            'icon' => 'star_rate',
            'route' => 'seller.reviews.index',
            'pattern' => 'seller.reviews.*',
        ],
        ['label' => 'Cài đặt quán', 'icon' => 'settings', 'route' => 'seller.shop.edit', 'pattern' => 'seller.shop.*'],
    ];
@endphp

<aside
    class="fixed left-0 top-0 h-full w-72 bg-surface-container-lowest z-50 flex flex-col shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
    {{-- Thương hiệu + chi nhánh --}}
    <div class="p-space-lg bg-surface-container-low flex flex-col gap-space-sm">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-space-sm">
                <div
                    class="w-9 h-9 rounded-xl bg-primary flex items-center justify-center text-on-primary font-headline-sm text-headline-sm">
                    🍲</div>
                <div>
                    <span class="font-headline-sm text-headline-sm text-primary tracking-tight block">FoodHub</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block">Đối
                        tác Quán</span>
                </div>
            </div>
            <span
                class="px-space-sm py-space-xs rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">Quán</span>
        </div>

        <div class="mt-space-xs p-space-sm rounded-xl bg-surface-container-lowest shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
            <div class="flex items-center justify-between">
                <div class="min-w-0 pr-space-xs">
                    <p class="font-label-md text-label-md text-on-surface truncate">Bếp Huế Cố Đô</p>
                    <p class="font-body-sm text-body-sm text-on-surface-variant truncate">CN Hai Bà Trưng</p>
                </div>
                <span class="material-symbols-outlined text-on-surface-variant text-[20px]">unfold_more</span>
            </div>
            <div class="mt-space-xs pt-space-xs flex items-center justify-between">
                <div class="flex items-center gap-space-xs">
                    <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                    <span class="font-label-sm text-label-sm text-tertiary">Đang mở cửa</span>
                </div>
                <button type="button"
                    class="font-label-sm text-label-sm text-primary hover:text-on-primary-fixed-variant transition-colors">Đổi</button>
            </div>
        </div>
    </div>

    {{-- Menu --}}
    <nav class="flex-1 px-space-md py-space-md flex flex-col gap-space-xs overflow-y-auto">
        @foreach ($menu as $item)
            @php
                $active = request()->routeIs($item['pattern']);
                $href = \Illuminate\Support\Facades\Route::has($item['route']) ? route($item['route']) : '#';
            @endphp
            <a href="{{ $href }}" @if ($active) aria-current="page" @endif
                class="flex items-center justify-between px-space-md py-space-sm rounded-xl transition-all
                {{ $active
                    ? 'bg-primary-container text-on-primary-container'
                    : 'text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface' }}">
                <div class="flex items-center gap-space-sm">
                    <span class="material-symbols-outlined text-[20px]">{{ $item['icon'] }}</span>
                    <span class="font-label-md text-label-md">{{ $item['label'] }}</span>
                </div>
                @isset($item['badge'])
                    <span
                        class="px-space-sm py-space-xs rounded-full bg-primary text-on-primary font-label-sm text-label-sm">{{ $item['badge'] }}</span>
                @endisset
            </a>
        @endforeach
    </nav>

    {{-- Trạng thái quán --}}
    <div class="p-space-md bg-surface-container-lowest">
        <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-sm">
            <div class="flex items-center justify-between">
                <span class="font-label-md text-label-md text-on-surface">Tình trạng quán</span>
                <span class="font-label-sm text-label-sm text-tertiary">Hoạt động</span>
            </div>
            <button type="button"
                class="w-full py-space-sm px-space-md rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-error font-label-md text-label-md flex items-center justify-center gap-space-xs transition-colors">
                <span class="material-symbols-outlined text-[18px]">pause_circle</span>
                Tạm ngưng nhận đơn
            </button>
        </div>
    </div>
</aside>
