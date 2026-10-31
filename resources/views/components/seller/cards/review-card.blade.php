@props([
    'initials',
    'avatarClass' => 'bg-primary-fixed text-on-primary-fixed',
    'name',
    'tag' => null,
    'tagClass' => 'bg-secondary-fixed text-on-secondary-fixed',
    'order',
    'stars' => 5,
    'ratingLabel',
    'ratingLabelClass' => 'text-tertiary',
    'time',
])

<div
    class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] flex flex-col gap-space-md transition-all hover:shadow-[0_12px_28px_-4px_rgba(234,88,12,0.12),0_4px_10px_-2px_rgba(28,25,23,0.04)]">
    <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-space-sm">
        <div class="flex items-start gap-space-md">
            <div
                class="w-12 h-12 rounded-full flex items-center justify-center font-headline-sm text-headline-sm font-bold shrink-0 {{ $avatarClass }}">
                {{ $initials }}
            </div>
            <div>
                <div class="flex items-center gap-space-xs flex-wrap">
                    <span class="font-label-lg text-label-lg text-on-surface">{{ $name }}</span>
                    @if ($tag)
                        <span
                            class="px-space-xs py-0.5 rounded-md font-label-sm text-label-sm {{ $tagClass }}">{{ $tag }}</span>
                    @endif
                    <span class="text-on-surface-variant font-body-sm text-body-sm">• Đơn hàng {{ $order }}</span>
                </div>
                <div class="flex items-center gap-space-xs mt-1">
                    <div class="flex items-center text-secondary">
                        @for ($i = 1; $i <= 5; $i++)
                            <span
                                class="material-symbols-outlined text-[16px] {{ $i > $stars ? 'text-surface-container-highest' : '' }}"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                        @endfor
                    </div>
                    <span class="font-label-sm text-label-sm {{ $ratingLabelClass }}">{{ $ratingLabel }}</span>
                    <span class="text-on-surface-variant font-body-sm text-body-sm">• {{ $time }}</span>
                </div>
            </div>
        </div>

        {{ $status }}
    </div>

    {{ $slot }}
</div>
