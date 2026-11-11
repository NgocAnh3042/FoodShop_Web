@props(['user'])

@php
    $items = [
        ['route' => 'account.profile', 'label' => 'Thông tin cá nhân', 'icon' => 'person_outline'],
        ['route' => 'account.orders', 'label' => 'Đơn của tôi', 'icon' => 'receipt_long', 'badge' => '2 đang giao'],
        ['route' => 'account.vouchers', 'label' => 'Kho voucher', 'icon' => 'confirmation_number', 'badge' => '5 có sẵn'],
        ['route' => 'account.addresses', 'label' => 'Địa chỉ đã lưu', 'icon' => 'pin_drop'],
        ['route' => 'account.favorites', 'label' => 'Món & Quán yêu thích', 'icon' => 'favorite_border', 'badge' => '12'],
    ];
@endphp

<aside class="lg:col-span-4 xl:col-span-3 flex flex-col gap-space-md">
    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col items-center text-center relative overflow-hidden">
        <div class="absolute -top-12 -right-12 w-28 h-28 rounded-full bg-primary/5 pointer-events-none"></div>
        <div class="relative mb-space-sm">
            <div class="w-20 h-20 rounded-full p-1 bg-gradient-to-tr from-secondary to-primary shadow-sm flex items-center justify-center">
                <div class="w-full h-full rounded-full bg-surface-container-high flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-[44px] text-primary" style="font-variation-settings: 'FILL' 1;">person</span>
                </div>
            </div>
            <span class="absolute bottom-0 right-0 w-6 h-6 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center text-[12px] shadow-sm ring-2 ring-surface-container-lowest">
                <span class="material-symbols-outlined text-[14px]">verified</span>
            </span>
        </div>
        <h2 class="font-headline-sm text-headline-sm text-on-surface tracking-tight">{{ $user->name }}</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">{{ $user->masked_phone }}</p>
        <div class="mt-space-sm inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant">
            <span class="material-symbols-outlined text-[16px] text-secondary">workspace_premium</span>
            <span class="font-label-sm text-label-sm font-semibold">Thành viên Foodie Bạc (Silver)</span>
        </div>
        <div class="w-full grid grid-cols-2 gap-2 mt-space-md pt-space-sm border-t border-outline-variant/30 text-left">
            <div class="flex flex-col">
                <span class="font-body-sm text-body-sm text-on-surface-variant">Điểm tích lũy</span>
                <span class="font-headline-sm text-headline-sm text-primary font-bold">1.450 pts</span>
            </div>
            <div class="flex flex-col text-right">
                <span class="font-body-sm text-body-sm text-on-surface-variant">Đã tiết kiệm</span>
                <span class="font-headline-sm text-headline-sm text-tertiary font-bold">420.000đ</span>
            </div>
        </div>
    </div>

    <nav aria-label="Điều hướng tài khoản" class="bg-surface-container-lowest rounded-xl p-space-sm shadow-sm flex flex-col gap-1">
        @foreach ($items as $item)
            @php
                $active = request()->routeIs($item['route'])
                    || ($item['route'] === 'account.vouchers' && request()->routeIs('account'));
            @endphp
            <a href="{{ route($item['route']) }}"
                @if ($active) aria-current="page" @endif
                class="flex items-center justify-between px-3 py-2.5 rounded-lg transition-all {{ $active ? 'bg-primary text-on-primary shadow-sm font-bold' : 'text-on-surface hover:bg-surface-container group' }}">
                <span class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-[22px] {{ $active ? 'text-on-primary' : 'text-on-surface-variant group-hover:text-primary' }}"
                        @if ($active) style="font-variation-settings: 'FILL' 1;" @endif>{{ $item['icon'] }}</span>
                    <span class="font-label-md text-label-md">{{ $item['label'] }}</span>
                </span>
                @if (isset($item['badge']))
                    <span class="px-2 py-0.5 rounded-full font-label-sm text-label-sm font-bold {{ $active ? 'bg-surface-container-lowest text-primary' : 'bg-surface-container text-on-surface-variant' }}">
                        {{ $item['badge'] }}
                    </span>
                @endif
            </a>
        @endforeach

        <div class="my-1 border-t border-outline-variant/30"></div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-lg text-error hover:bg-error-container/20 transition-all text-left">
                <span class="material-symbols-outlined text-[22px]">logout</span>
                <span class="font-label-md text-label-md font-semibold">Đăng xuất</span>
            </button>
        </form>
    </nav>

    <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col gap-2">
        <div class="flex items-center gap-2 text-primary">
            <span class="material-symbols-outlined text-[20px]">help_outline</span>
            <span class="font-label-md text-label-md font-bold">Cần hỗ trợ ưu đãi?</span>
        </div>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Liên hệ hotline CSKH hoặc tra cứu thể lệ chương trình đổi mã voucher thành viên.</p>
        <a class="font-label-sm text-label-sm text-primary font-bold hover:underline inline-flex items-center gap-1 mt-1" href="{{ route('deals') }}">
            Xem ưu đãi
            <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
        </a>
    </div>
</aside>
