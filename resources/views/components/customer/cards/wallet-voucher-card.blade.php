@props([
    'scope',
    'scopeIcon' => 'storefront',
    'scopeClass' => 'bg-primary/10 text-primary',
    'tag' => null,
    'tagClass' => 'bg-surface-container text-on-surface-variant',
    'title',
    'titleClass' => 'font-display-sm text-display-sm text-primary',
    'minOrder',
    'icon',
    'iconClass' => 'bg-primary/10 text-primary',
    'description',
    'timeIcon' => 'timer',
    'timeIconClass' => 'text-secondary',
    'timeLeft',
    'timeClass' => 'text-primary',
    'expiry' => null,
    'code',
])

<div
    class="group relative bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col overflow-hidden">
    {{-- Khuyết vé hai bên --}}
    <div class="absolute -left-3 top-[108px] w-6 h-6 rounded-full bg-surface z-20"></div>
    <div class="absolute -right-3 top-[108px] w-6 h-6 rounded-full bg-surface z-20"></div>

    <div class="p-space-md pb-space-sm flex flex-col gap-2 relative">
        <div class="flex items-center justify-between gap-2">
            <div
                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full font-label-sm text-label-sm font-bold {{ $scopeClass }}">
                <span class="material-symbols-outlined text-[15px]">{{ $scopeIcon }}</span>
                <span>{{ $scope }}</span>
            </div>
            @if ($tag)
                <span
                    class="px-2 py-0.5 rounded-full font-label-sm text-label-sm {{ $tagClass }}">{{ $tag }}</span>
            @endif
        </div>

        <div class="mt-1 flex items-baseline justify-between">
            <div class="flex flex-col">
                <span class="leading-tight font-extrabold tracking-tight {{ $titleClass }}">{{ $title }}</span>
                <span
                    class="font-label-md text-label-md text-on-surface font-semibold mt-0.5">{{ $minOrder }}</span>
            </div>
            <div
                class="w-12 h-12 rounded-xl flex items-center justify-center group-hover:scale-105 transition-transform flex-shrink-0 {{ $iconClass }}">
                <span class="material-symbols-outlined text-[28px]">{{ $icon }}</span>
            </div>
        </div>

        <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">{{ $description }}</p>
    </div>

    {{-- Đường đục lỗ --}}
    <div class="relative w-full px-6 flex items-center">
        <div class="w-full border-t-2 border-dashed border-outline-variant/40"></div>
    </div>

    <div class="p-space-md pt-space-sm flex items-center justify-between gap-3 bg-surface-container-low/40 mt-auto">
        <div class="flex flex-col gap-1">
            <div class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
                <span class="material-symbols-outlined text-[16px] {{ $timeIconClass }}">{{ $timeIcon }}</span>
                <span class="font-bold {{ $timeClass }}">{{ $timeLeft }}</span>
                @if ($expiry)
                    <span class="hidden sm:inline text-outline">({{ $expiry }})</span>
                @endif
            </div>
            <div class="flex items-center gap-1.5">
                <span class="font-label-sm text-label-sm text-on-surface-variant">Mã:</span>
                <span
                    class="px-2 py-0.5 rounded bg-surface-container-highest font-mono text-on-surface font-bold text-label-sm uppercase tracking-wider">{{ $code }}</span>
            </div>
        </div>
        <button
            class="px-5 py-2 rounded-full bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md font-bold shadow-sm hover:shadow transition-all flex items-center gap-1 flex-shrink-0">
            <span>Dùng ngay</span>
            <span class="material-symbols-outlined text-[16px]">chevron_right</span>
        </button>
    </div>
</div>
