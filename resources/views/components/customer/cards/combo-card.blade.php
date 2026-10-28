@props([
    'image' => '',
    'discount' => '-0%',
    'rating' => '',
    'type' => '',
    'color' => 'primary',
    'title' => '',
    'desc' => '',
    'oldPrice' => '',
    'price' => '',
])

@php
    $colors = [
        'primary' => 'text-primary',
        'secondary' => 'text-secondary',
        'tertiary' => 'text-tertiary',
        'orange' => 'text-primary-container',
    ];
    $typeColor = $colors[$color] ?? $colors['primary'];
@endphp

<div
    class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group -mt-1 hover:-mt-2">

    {{-- Ảnh + nhãn giảm giá + điểm đánh giá --}}
    <div class="relative aspect-[4/3] w-full overflow-hidden bg-surface-container">
        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            src="{{ $image }}" alt="{{ $title }}" />
        <div
            class="absolute top-3 left-3 bg-primary text-on-primary font-bold text-xs px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <span class="material-symbols-outlined text-xs">trending_down</span>
            <span>{{ $discount }}</span>
        </div>
        <div
            class="absolute bottom-3 right-3 bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label-sm text-xs px-2 py-0.5 rounded-md flex items-center gap-1 shadow-sm">
            <span class="material-symbols-outlined text-amber-500 text-xs"
                style="font-variation-settings: 'FILL' 1;">star</span>
            <span>{{ $rating }}</span>
        </div>
    </div>

    {{-- Nội dung --}}
    <div class="p-4 flex-1 flex flex-col justify-between">
        <div>
            <span
                class="text-xs font-label-sm uppercase tracking-wider {{ $typeColor }} font-semibold">{{ $type }}</span>
            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mt-1 line-clamp-1">
                {{ $title }}</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">{{ $desc }}</p>
        </div>
        <div class="pt-4 flex items-center justify-between border-t border-surface-container mt-4">
            <div>
                <span class="text-xs text-outline line-through block font-body-sm">{{ $oldPrice }}</span>
                <span class="font-headline-md text-headline-md text-primary font-extrabold">{{ $price }}</span>
            </div>
            <button type="button"
                class="w-10 h-10 rounded-full bg-primary text-on-primary hover:bg-primary-container flex items-center justify-center shadow-md transition-all"
                onclick="addToCart(this, @js($title), @js($price))">
                <span class="material-symbols-outlined text-xl">add_shopping_cart</span>
            </button>
        </div>
    </div>
</div>
