@props([
    'label' => '',
    'icon' => 'edit',
    'iconColor' => 'primary', // primary | secondary
    'name' => '',
    'value' => '',
    'type' => 'text',
])

@php
    // Viết nguyên văn để Tailwind quét thấy class
    $colors = [
        'primary' => 'text-primary',
        'secondary' => 'text-secondary',
    ];
    $iconClass = $colors[$iconColor] ?? $colors['primary'];
@endphp

<div class="flex flex-col gap-space-xs">
    <label class="font-label-sm text-label-sm text-on-surface-variant uppercase">{{ $label }}</label>
    <div class="flex items-center gap-space-xs px-space-md py-space-sm rounded-xl bg-surface-container-low">
        <span class="material-symbols-outlined {{ $iconClass }} text-[20px]">{{ $icon }}</span>
        <input class="w-full bg-transparent font-body-md text-body-md text-on-surface focus:outline-none"
            type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}" />
    </div>
</div>
