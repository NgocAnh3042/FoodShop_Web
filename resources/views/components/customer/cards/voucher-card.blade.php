@props([
    'variant' => 'primary',
    'category' => 'dishes',
    'icon' => 'restaurant_menu',
    'label' => 'GIẢM NGAY',
    'amount' => '0',
    'unit' => '%',
    'stamp' => '',
    'tag' => '',
    'expires' => '',
    'title' => '',
    'desc' => '',
    'code' => '',
])

@php
    // Mỗi màu viết nguyên văn để Tailwind quét thấy class. Database chỉ cần lưu tên: primary, tertiary...
    $variants = [
        'primary' => [
            'left' => 'bg-primary text-on-primary',
            'stamp' => 'bg-white/20',
            'tag' => 'bg-primary-fixed text-on-primary-fixed',
            'btn' => 'bg-primary text-on-primary hover:bg-primary-container',
        ],
        'tertiary' => [
            'left' => 'bg-tertiary text-on-tertiary',
            'stamp' => 'bg-white/20',
            'tag' => 'bg-tertiary-fixed text-on-tertiary-fixed',
            'btn' => 'bg-tertiary text-on-tertiary hover:bg-tertiary-container',
        ],
        'gold' => [
            'left' => 'bg-secondary-container text-on-secondary-container',
            'stamp' => 'bg-black/10',
            'tag' => 'bg-secondary-fixed text-on-secondary-fixed',
            'btn' => 'bg-secondary-container text-on-secondary-container hover:opacity-90',
        ],
        'orange' => [
            'left' => 'bg-primary-container text-on-primary',
            'stamp' => 'bg-white/20',
            'tag' => 'bg-primary-fixed-dim text-on-primary-fixed',
            'btn' => 'bg-primary-container text-on-primary hover:bg-primary',
        ],
        'green' => [
            'left' => 'bg-tertiary-container text-on-tertiary-container',
            'stamp' => 'bg-white/20',
            'tag' => 'bg-tertiary-fixed-dim text-on-tertiary-fixed',
            'btn' => 'bg-tertiary-container text-on-tertiary-container hover:bg-tertiary',
        ],
        'brown' => [
            'left' => 'bg-secondary text-on-secondary',
            'stamp' => 'bg-white/20',
            'tag' => 'bg-secondary-fixed-dim text-on-secondary-fixed',
            'btn' => 'bg-secondary text-on-secondary hover:opacity-90',
        ],
    ];
    $c = $variants[$variant] ?? $variants['primary'];
@endphp

<div class="voucher-card group relative bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 flex overflow-hidden min-h-[170px]"
    data-category="{{ $category }}">

    {{-- Cột trái: tem giảm giá --}}
    <div class="w-28 {{ $c['left'] }} flex flex-col items-center justify-between p-3 shrink-0 relative">
        <div class="flex flex-col items-center text-center">
            <span class="material-symbols-outlined text-2xl">{{ $icon }}</span>
            <span class="font-label-sm uppercase tracking-widest text-[10px] opacity-90 mt-1">{{ $label }}</span>
            <span class="font-display-sm text-display-sm font-black leading-none mt-1">{{ $amount }}<span
                    class="text-base font-bold">{{ $unit }}</span></span>
        </div>
        <div
            class="px-2 py-0.5 rounded-full {{ $c['stamp'] }} text-[10px] font-label-sm uppercase tracking-wider text-center">
            {{ $stamp }}
        </div>
        <div class="absolute -top-3 -right-3 w-6 h-6 rounded-full bg-surface"></div>
        <div class="absolute -bottom-3 -right-3 w-6 h-6 rounded-full bg-surface"></div>
    </div>

    {{-- Đường răng cưa --}}
    <div class="w-px h-full border-r-2 border-dashed border-surface-container my-3 shrink-0"></div>

    {{-- Cột phải: thông tin --}}
    <div class="flex-1 p-4 flex flex-col justify-between min-w-0">
        <div>
            <div class="flex items-center justify-between gap-2">
                <span
                    class="px-2 py-0.5 rounded {{ $c['tag'] }} text-label-sm uppercase font-bold tracking-wider">{{ $tag }}</span>
                <span class="text-[11px] font-label-sm text-outline flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">schedule</span> {{ $expires }}
                </span>
            </div>
            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mt-1.5 truncate">{{ $title }}
            </h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">{{ $desc }}</p>
        </div>
        <div class="pt-3 flex items-center justify-between gap-2 border-t border-surface-container/50">
            <div class="flex flex-col">
                <span class="text-[10px] font-label-sm uppercase tracking-wider text-outline">Mã voucher</span>
                <span class="font-mono font-extrabold text-sm text-primary tracking-wider">{{ $code }}</span>
            </div>
            <button type="button"
                class="px-4 py-1.5 rounded-full {{ $c['btn'] }} font-label-md text-label-md shadow-sm transition-all flex items-center gap-1"
                onclick="claimVoucher(this, '{{ $code }}')">
                <span class="material-symbols-outlined text-sm">bookmark_add</span>
                <span>Lưu mã</span>
            </button>
        </div>
    </div>
</div>
