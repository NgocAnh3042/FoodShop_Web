@php
    use Illuminate\Support\Facades\Route;

    // 'route' là tên route, chưa có route đó thì link tạm là '#'.
    // 'pattern' dùng để tô sáng mục đang mở.
    $items = [
        ['label' => 'Tổng quan Vận hành',     'icon' => 'grid_view',              'route' => 'admin.dashboard',       'pattern' => 'admin.dashboard'],
        ['label' => 'Quản lý Đối tác Quán',   'icon' => 'storefront',             'route' => 'admin.partners.index',  'pattern' => 'admin.partners.*'],
        ['label' => 'Quản lý Tài xế & Đội xe','icon' => 'two_wheeler',            'route' => 'admin.drivers.index',   'pattern' => 'admin.drivers.*'],
        ['label' => 'Khách hàng & Khiếu nại', 'icon' => 'support_agent',          'route' => 'admin.disputes.index',  'pattern' => 'admin.disputes.*'],
        ['label' => 'Tài chính & Đối soát',   'icon' => 'account_balance_wallet', 'route' => 'admin.finance.index',   'pattern' => 'admin.finance.*'],
        ['label' => 'Cài đặt Toàn sàn',       'icon' => 'tune',                   'route' => 'admin.settings.index',  'pattern' => 'admin.settings.*'],
        ['label' => 'Cấu hình Giao diện & Màu sắc', 'icon' => 'palette',            'route' => 'admin.theme.index',     'pattern' => 'admin.theme.*'],
    ];
@endphp

<aside class="fixed left-0 top-0 h-full w-72 bg-surface-container-low z-50 flex flex-col justify-between shadow-[0_1px_8px_rgba(0,0,0,0.04)]"><div class="flex flex-col"><div class="h-16 px-space-lg flex items-center gap-space-sm bg-surface-container-low"><div class="w-9 h-9 rounded-xl bg-primary flex items-center justify-center text-on-primary shadow-sm"><span class="material-symbols-outlined text-[20px]">restaurant</span></div><div class="flex flex-col leading-tight"><span class="font-headline-sm text-headline-sm text-primary font-bold tracking-tight">FoodHub</span><span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Platform Master</span></div></div><div class="px-space-md py-space-sm"><div class="bg-surface-container rounded-xl p-space-sm flex items-center justify-between"><div class="flex items-center gap-space-xs"><span class="w-2.5 h-2.5 rounded-full bg-tertiary-container animate-pulse"></span><span class="font-label-sm text-label-sm text-tertiary font-bold">Cụm Máy Chủ: Online</span></div><span class="font-label-sm text-label-sm text-on-surface-variant">v4.2.0</span></div></div><nav class="px-space-md py-space-sm flex flex-col gap-space-xs">
                @foreach ($items as $item)
                    @php
                        $active = request()->routeIs($item['pattern']);
                        $href   = Route::has($item['route']) ? route($item['route']) : '#';
                    @endphp
                    <a href="{{ $href }}"
                       @if ($active) aria-current="page" @endif
                       class="flex items-center gap-space-sm px-space-md py-space-sm rounded-xl font-label-md text-label-md transition-all {{ $active ? 'bg-primary-container text-on-primary-container shadow-sm' : 'text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface' }}">
                        <span class="material-symbols-outlined text-[20px]">{{ $item['icon'] }}</span>
                        <span>{{ $item['label'] }}</span>
                    </a>
                @endforeach
            </nav></div><div class="p-space-md"><div class="bg-surface-container-high rounded-xl p-space-md flex flex-col gap-space-xs"><div class="flex items-center justify-between"><span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Đường dây nóng VIP</span><span class="material-symbols-outlined text-[16px] text-primary">phone_in_talk</span></div><span class="font-label-md text-label-md text-primary font-bold">1900 8899 (Ext 9)</span><span class="font-body-sm text-body-sm text-on-surface-variant">Trực ban điều phối sàn 24/7</span></div></div></aside>
