@props([
    'icon',
    'iconClass' => 'bg-primary-fixed text-primary',
    'number',
    'numberClass' => 'bg-primary text-on-primary',
    'title',
])

<div
    class="relative z-10 bg-surface-container-lowest rounded-3xl p-space-lg shadow-sm flex flex-col items-center text-center">
    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-space-md shadow-inner {{ $iconClass }}">
        <span class="material-symbols-outlined text-[32px]">{{ $icon }}</span>
    </div>
    <div
        class="w-6 h-6 rounded-full font-label-sm text-label-sm flex items-center justify-center font-bold mb-space-xs {{ $numberClass }}">
        {{ $number }}
    </div>
    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">{{ $title }}</h3>
    <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
        {{ $slot }}
    </p>
</div>
