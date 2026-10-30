@props(['label', 'icon', 'iconClass' => 'bg-primary/10 text-primary'])

<div
    class="rounded-2xl bg-surface-container-lowest p-space-md shadow-[0_4px_20px_-2px_rgba(234,88,12,0.04)] flex flex-col justify-between group hover:-translate-y-0.5 transition-all">
    <div class="flex items-center justify-between">
        <span class="font-label-md text-label-md text-on-surface-variant">{{ $label }}</span>
        <div class="w-8 h-8 rounded-xl flex items-center justify-center {{ $iconClass }}">
            <span class="material-symbols-outlined text-[18px]">{{ $icon }}</span>
        </div>
    </div>

    {{ $slot }}
</div>
