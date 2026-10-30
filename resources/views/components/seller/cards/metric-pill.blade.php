@props([
    'label',
    'value',
    'icon',
    'labelClass' => 'text-on-surface-variant',
    'valueClass' => 'text-on-surface',
    'iconClass' => 'bg-surface-container-low text-primary',
])

<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-between">
    <div class="flex flex-col">
        <span class="font-label-sm text-label-sm uppercase tracking-wider {{ $labelClass }}">{{ $label }}</span>
        <span
            class="font-display-sm text-display-sm font-extrabold mt-space-xs {{ $valueClass }}">{{ $value }}</span>
        {{ $slot }}
    </div>
    <div class="w-11 h-11 rounded-xl flex items-center justify-center {{ $iconClass }}">
        <span class="material-symbols-outlined text-[24px]">{{ $icon }}</span>
    </div>
</div>
