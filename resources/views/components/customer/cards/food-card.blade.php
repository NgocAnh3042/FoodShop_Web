@props([
    'image'      => '',
    'badge'      => null,     // chữ trên huy hiệu góc trái, để null nếu không có
    'badgeStyle' => 'gold',   // fire | gold | green | orange
    'badgeIcon'  => null,     // tên icon Material Symbols, có thể bỏ trống
    'rating'     => '',
    'reviews'    => '',
    'time'       => '',
    'kcal'       => null,
    'title'      => '',
    'desc'       => '',
    'oldPrice'   => null,
    'price'      => '',
])

@php
    // Viết nguyên văn để Tailwind quét thấy class. Database chỉ cần lưu tên: fire, gold, green, orange
    $badgeStyles = [
        'fire'   => 'bg-primary text-on-primary',
        'gold'   => 'bg-secondary-container text-on-secondary-container',
        'green'  => 'bg-tertiary text-on-tertiary',
        'orange' => 'bg-primary-container text-on-primary-container',
    ];
    $badgeClass = $badgeStyles[$badgeStyle] ?? $badgeStyles['gold'];
@endphp

<article class="group bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
    <div>
        {{-- Ảnh + huy hiệu + điểm đánh giá --}}
        <div class="relative w-full aspect-[4/3] overflow-hidden bg-surface-container">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="{{ $image }}" alt="{{ $title }}"/>

            @if ($badge)
                <div class="absolute top-3 left-3 flex flex-col gap-1.5 items-start">
                    <span class="px-2.5 py-1 rounded-full {{ $badgeClass }} font-label-sm text-label-sm uppercase font-bold tracking-wider shadow-sm flex items-center gap-1">
                        @if ($badgeIcon)
                            <span class="material-symbols-outlined text-[13px]">{{ $badgeIcon }}</span>
                        @endif
                        {{ $badge }}
                    </span>
                </div>
            @endif

            <div class="absolute bottom-3 right-3 bg-inverse-surface/80 backdrop-blur-md text-inverse-on-surface px-2.5 py-1 rounded-full font-label-sm text-label-sm flex items-center gap-1">
                <span class="material-symbols-outlined text-secondary-container text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="font-bold">{{ $rating }}</span>
                <span class="opacity-75">{{ $reviews }}</span>
            </div>
        </div>

        {{-- Thông tin món --}}
        <div class="p-space-md space-y-2">
            <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
                <span class="flex items-center gap-1">
                    <span class="material-symbols-outlined text-[15px]">schedule</span> {{ $time }}
                </span>
                @if ($kcal)
                    <span class="flex items-center gap-1 font-medium text-tertiary">
                        <span class="material-symbols-outlined text-[15px]">fitness_center</span> {{ $kcal }}
                    </span>
                @endif
            </div>
            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors">{{ $title }}</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">{{ $desc }}</p>
        </div>
    </div>

    {{-- Giá + nút --}}
    <div class="p-space-md pt-0 flex items-center justify-between gap-2 mt-auto">
        <div>
            @if ($oldPrice)
                <span class="font-label-sm text-label-sm text-outline line-through block">{{ $oldPrice }}</span>
            @endif
            <span class="font-headline-sm text-headline-sm text-primary font-extrabold">{{ $price }}</span>
        </div>
        <div class="flex items-center gap-2">
            <button class="px-3 py-1.5 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md transition-colors" type="button">
                Tùy chọn
            </button>
            <button aria-label="Thêm vào giỏ" class="w-10 h-10 rounded-full bg-primary hover:bg-primary-container text-on-primary flex items-center justify-center shadow-md hover:scale-105 active:scale-95 transition-all" type="button">
                <span class="material-symbols-outlined text-[20px]">add</span>
            </button>
        </div>
    </div>
</article>