@props([
    'barClass' => 'from-primary to-primary-container',
    'badge',
    'badgeClass' => 'bg-primary-fixed text-on-primary-fixed',
    'icon',
    'iconClass' => 'text-primary',
    'eyebrow',
    'title',
    'titleClass' => 'text-primary',
    'subtitle',
    'description',
    'metaIcon' => 'event',
    'code',
    'codeClass' => 'text-primary',
    'status',
    'statusIcon' => 'check_circle',
    'statusIconClass' => 'text-tertiary',
    'tag',
    'tagClass' => 'text-primary',
])

<div
    class="relative bg-surface-container-lowest rounded-3xl overflow-hidden shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all flex flex-col justify-between group">
    {{-- Dải màu trên cùng --}}
    <div class="h-3 w-full bg-gradient-to-r {{ $barClass }}"></div>

    <div class="p-space-lg flex-1 flex flex-col justify-between">
        <div>
            <div class="flex items-center justify-between gap-2 mb-space-sm">
                <span
                    class="px-2.5 py-1 rounded-full font-label-sm text-label-sm uppercase tracking-wider font-extrabold {{ $badgeClass }}">{{ $badge }}</span>
                <span class="material-symbols-outlined text-[22px] {{ $iconClass }}"
                    style="font-variation-settings: 'FILL' 1;">{{ $icon }}</span>
            </div>
            <div class="mt-space-xs">
                <p class="font-label-sm text-label-sm text-outline-variant uppercase font-bold tracking-wider">
                    {{ $eyebrow }}</p>
                <h3 class="font-headline-lg text-headline-lg font-black tracking-tight mt-0.5 {{ $titleClass }}">
                    {{ $title }}</h3>
                <p class="font-body-md text-body-md text-on-surface font-semibold mt-1">{{ $subtitle }}</p>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">{{ $description }}</p>
            </div>
        </div>

        {{-- Đường đục lỗ --}}
        <div class="relative my-space-md py-2 flex items-center">
            <div class="absolute -left-10 w-6 h-6 rounded-full bg-surface"></div>
            <div class="absolute -right-10 w-6 h-6 rounded-full bg-surface"></div>
            <div class="w-full border-t-2 border-dashed border-surface-container-highest"></div>
        </div>

        <div class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
            <div class="flex items-center gap-1.5">
                <span class="material-symbols-outlined text-[18px] text-secondary">{{ $metaIcon }}</span>
                <span>{{ $meta }}</span>
            </div>
            <span class="font-label-md text-label-md font-bold {{ $codeClass }}">{{ $code }}</span>
        </div>
    </div>

    <div class="px-space-lg pb-space-lg pt-0">
        <div
            class="w-full py-2 px-3 rounded-xl bg-surface-container-low flex items-center justify-between text-on-surface-variant">
            <span class="font-body-sm text-body-sm flex items-center gap-1">
                <span class="material-symbols-outlined text-[16px] {{ $statusIconClass }}">{{ $statusIcon }}</span>
                {{ $status }}
            </span>
            <span
                class="font-label-sm text-label-sm uppercase font-bold {{ $tagClass }}">{{ $tag }}</span>
        </div>
    </div>
</div>
