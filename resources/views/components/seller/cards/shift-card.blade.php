@props([
    'icon' => 'schedule',
    'iconColor' => 'primary', // gold | primary
    'title' => '',
    'open' => '07:00',
    'close' => '22:00',
    'enabled' => true,
])

@php
    $colors = [
        'gold' => 'text-secondary-container',
        'primary' => 'text-primary',
    ];
    $iconClass = $colors[$iconColor] ?? $colors['primary'];
@endphp

<div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-sm">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-space-xs">
            <span class="material-symbols-outlined {{ $iconClass }} text-[20px]">{{ $icon }}</span>
            <span class="font-label-md text-label-md text-on-surface">{{ $title }}</span>
        </div>
        <input class="accent-primary w-4 h-4 rounded" type="checkbox" @checked($enabled) />
    </div>

    <div class="flex items-center gap-space-xs text-on-surface">
        <div class="flex-1 px-space-sm py-space-xs rounded-lg bg-surface-container-lowest text-center">
            <span class="font-label-sm text-label-sm text-on-surface-variant block">Mở cửa</span>
            <span class="font-headline-sm text-headline-sm font-semibold">{{ $open }}</span>
        </div>
        <span class="material-symbols-outlined text-on-surface-variant text-[16px]">arrow_forward</span>
        <div class="flex-1 px-space-sm py-space-xs rounded-lg bg-surface-container-lowest text-center">
            <span class="font-label-sm text-label-sm text-on-surface-variant block">Đóng ca</span>
            <span class="font-headline-sm text-headline-sm font-semibold">{{ $close }}</span>
        </div>
    </div>
</div>
