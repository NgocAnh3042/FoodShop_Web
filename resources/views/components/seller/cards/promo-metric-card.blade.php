@props([
    'label',
    'icon' => null,
    'iconClass' => 'text-primary',
    'badge' => null,
    'badgeClass' => 'bg-tertiary-container text-on-tertiary-container',
    'barClass' => 'bg-primary',
    'barWidth' => 50,
    'blobClass' => null,
])

<div
    class="bg-surface-container-lowest p-space-lg rounded-xl shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] flex flex-col justify-between relative overflow-hidden group hover:-translate-y-0.5 transition-transform">
    @if ($blobClass)
        <div class="absolute -right-4 -bottom-4 w-24 h-24 rounded-full pointer-events-none blur-xl {{ $blobClass }}">
        </div>
    @endif

    <div class="flex items-center justify-between mb-space-sm">
        <span class="font-label-md text-label-md text-on-surface-variant">{{ $label }}</span>
        @if ($badge)
            <span
                class="px-space-xs py-0.5 rounded-md font-label-sm text-label-sm font-bold {{ $badgeClass }}">{{ $badge }}</span>
        @else
            <div
                class="w-9 h-9 rounded-xl bg-surface-container-low flex items-center justify-center {{ $iconClass }}">
                <span class="material-symbols-outlined text-[20px]">{{ $icon }}</span>
            </div>
        @endif
    </div>

    {{ $slot }}

    <div class="w-full bg-surface-container-low h-1.5 rounded-full mt-space-md overflow-hidden">
        <div class="h-full rounded-full {{ $barClass }}" style="width: {{ $barWidth }}%;"></div>
    </div>
</div>
