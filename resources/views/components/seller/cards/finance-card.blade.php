@props(['label', 'icon', 'iconClass' => 'bg-primary-fixed text-primary'])

<div
    class="bg-surface-container-lowest p-space-lg rounded-xl shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] flex flex-col justify-between">
    <div class="flex items-center justify-between">
        <span class="font-label-md text-label-md text-on-surface-variant">{{ $label }}</span>
        <span class="w-9 h-9 rounded-xl flex items-center justify-center {{ $iconClass }}">
            <span class="material-symbols-outlined text-[22px]">{{ $icon }}</span>
        </span>
    </div>

    {{ $slot }}
</div>
