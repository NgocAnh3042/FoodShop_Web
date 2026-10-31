@props([
    'status',
    'statusClass' => 'bg-tertiary-container text-on-tertiary-container',
    'dotClass' => 'bg-tertiary-fixed',
    'code',
    'title',
    'offer',
    'offerClass' => 'text-primary',
    'metaIcon' => 'schedule',
    'meta',
    'actionIcon' => 'pause_circle',
    'actionTitle' => 'Tạm dừng',
    'linkLabel' => 'Báo cáo chi tiết',
    'linkIcon' => 'arrow_forward',
    'image',
    'alt' => '',
])

<div
    class="bg-surface-container-lowest rounded-xl p-space-lg shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] flex flex-col justify-between gap-space-md hover:-translate-y-0.5 transition-all">
    <div class="flex flex-col gap-space-sm">
        <div class="flex items-start justify-between gap-space-sm">
            <div class="flex items-center gap-space-xs">
                <span
                    class="px-space-sm py-0.5 rounded-full font-label-sm text-label-sm flex items-center gap-1 {{ $statusClass }}">
                    <span class="w-1.5 h-1.5 rounded-full {{ $dotClass }}"></span>
                    {{ $status }}
                </span>
                <span
                    class="px-space-xs py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-on-surface-variant font-mono">{{ $code }}</span>
            </div>
            <div class="flex items-center gap-1">
                <button
                    class="p-1 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors"
                    title="Chỉnh sửa" type="button">
                    <span class="material-symbols-outlined text-[18px]">edit</span>
                </button>
                <button
                    class="p-1 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-error transition-colors"
                    title="{{ $actionTitle }}" type="button">
                    <span class="material-symbols-outlined text-[18px]">{{ $actionIcon }}</span>
                </button>
            </div>
        </div>

        <div class="flex items-start gap-space-md">
            <div class="w-20 h-20 rounded-xl overflow-hidden shrink-0 bg-surface-container">
                <img class="w-full h-full object-cover" src="{{ $image }}" alt="{{ $alt }}" />
            </div>
            <div class="flex flex-col min-w-0">
                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold leading-snug">{{ $title }}
                </h3>
                <p class="font-body-md text-body-md font-semibold mt-0.5 {{ $offerClass }}">{{ $offer }}</p>
                <div class="flex items-center gap-space-xs mt-1 text-on-surface-variant font-label-sm text-label-sm">
                    <span class="material-symbols-outlined text-[16px]">{{ $metaIcon }}</span>
                    <span>{{ $meta }}</span>
                </div>
            </div>
        </div>

        {{ $performance }}
    </div>

    <div class="flex items-center justify-between pt-space-xs text-on-surface-variant font-body-sm text-body-sm">
        {{ $footer }}
        <button
            class="text-primary hover:text-on-primary-fixed-variant font-label-md text-label-md flex items-center gap-0.5"
            type="button">
            <span>{{ $linkLabel }}</span>
            <span class="material-symbols-outlined text-[16px]">{{ $linkIcon }}</span>
        </button>
    </div>
</div>
