@props([
    'name' => '',
    'label' => '',
    'style' => 'good', // danger | good | warm
    'active' => '',
    'demand' => '',
    'load' => 0, // phần trăm thanh tải (0-100)
])

@php
    // Viết nguyên văn để Tailwind quét thấy class. Database chỉ cần lưu: danger, good, warm
    $styles = [
        'danger' => ['badge' => 'bg-error-container text-error', 'bar' => 'bg-error'],
        'good' => ['badge' => 'bg-tertiary-container/15 text-tertiary', 'bar' => 'bg-tertiary'],
        'warm' => ['badge' => 'bg-secondary-fixed text-on-secondary-fixed-variant', 'bar' => 'bg-secondary-container'],
    ];
    $s = $styles[$style] ?? $styles['good'];
@endphp

<div class="p-space-sm rounded-xl bg-surface-container-low flex flex-col gap-1">
    <div class="flex items-center justify-between">
        <span class="font-label-md text-label-md text-on-surface font-bold">{{ $name }}</span>
        <span
            class="px-2 py-0.5 rounded-full {{ $s['badge'] }} font-label-sm text-label-sm font-bold">{{ $label }}</span>
    </div>
    <div class="flex items-center justify-between text-body-sm text-on-surface-variant">
        <span>Đang trực chiến: {{ $active }}</span>
        <span>Nhu cầu: {{ $demand }}</span>
    </div>
    <div class="w-full bg-surface-container-highest rounded-full h-1.5 mt-1 overflow-hidden">
        <div class="{{ $s['bar'] }} h-1.5 rounded-full" style="width: {{ $load }}%"></div>
    </div>
</div>
