@props([
    'label',
    'value',
    'icon',
    'valueClass' => 'text-on-surface',
    'iconClass' => 'bg-surface-container-high text-on-surface-variant',
])

<div
    class="p-space-md rounded-xl bg-surface-container-lowest shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05)] flex items-center justify-between">
    <div>
        <span class="font-body-sm text-body-sm text-on-surface-variant block">{{ $label }}</span>
        <span class="font-headline-md text-headline-md font-bold {{ $valueClass }}">{{ $value }}</span>
    </div>
    <div class="w-10 h-10 rounded-xl flex items-center justify-center {{ $iconClass }}">
        <span class="material-symbols-outlined text-[22px]">{{ $icon }}</span>
    </div>
</div>
