@props([
    'slug' => '',
    'image' => 'https://lh3.googleusercontent.com/...',
    'badge' => 'Giảm 25k',
    'badgeColor' => 'bg-primary',
    'category' => 'Ẩm thực',
    'distance' => '1.2 km',
    'name' => 'Tên quán ăn',
    'rating' => '4.9',
    'reviews' => '(650+)',
    'time' => '15-25 phút',
])

@php
    // Chưa có slug thì link tạm là '#', không gây lỗi
    $href = $slug ? url('/shop/' . $slug) : '#';
@endphp

<div
    class="relative bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all group flex flex-col justify-between">

    {{-- Link phủ kín thẻ: bấm ở đâu trong thẻ cũng mở trang quán --}}
    <a href="{{ $href }}" class="absolute inset-0 z-10" aria-label="Xem quán {{ $name }}"></a>

    <!-- Phần Hình ảnh & Nhãn giảm giá -->
    <div class="relative aspect-[4/3] bg-surface-container overflow-hidden">
        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            src="{{ $image }}" alt="{{ $name }}" />

        <div class="absolute top-3 left-3 flex flex-col gap-1">
            <span
                class="{{ $badgeColor }} text-on-primary font-label-sm text-label-sm px-2.5 py-1 rounded-full font-bold shadow-sm">{{ $badge }}</span>
        </div>

        {{-- z-20: nằm trên link phủ nên bấm tim không mở trang quán --}}
        <button aria-label="Yêu thích quán"
            class="absolute top-3 right-3 z-20 w-8 h-8 rounded-full bg-white/80 backdrop-blur-md flex items-center justify-center text-outline hover:text-error transition-colors"
            type="button">
            <span class="material-symbols-outlined text-[18px]">favorite</span>
        </button>
    </div>

    <!-- Phần Thông tin quán -->
    <div class="p-space-md flex flex-col flex-1 justify-between gap-space-sm">
        <div>
            <div class="flex items-center justify-between gap-space-xs pb-1">
                <span class="font-label-sm text-label-sm text-on-surface-variant truncate">{{ $category }}</span>
                <span class="font-label-sm text-label-sm text-tertiary font-bold shrink-0">{{ $distance }}</span>
            </div>
            <h3
                class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors">
                {{ $name }}</h3>
        </div>

        <!-- Đánh giá & Thời gian giao -->
        <div class="flex items-center justify-between pt-space-xs border-t border-transparent">
            <div class="flex items-center gap-1">
                <span class="material-symbols-outlined text-secondary-container text-[18px]"
                    style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="font-label-md text-label-md text-on-surface font-extrabold">{{ $rating }}</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant">{{ $reviews }}</span>
            </div>
            <div class="flex items-center gap-1 font-body-sm text-body-sm text-on-surface-variant">
                <span class="material-symbols-outlined text-[16px] text-primary">schedule</span>
                <span>{{ $time }}</span>
            </div>
        </div>
    </div>
</div>
