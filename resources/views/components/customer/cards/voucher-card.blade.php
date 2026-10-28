@props(['category', 'theme' => 'primary', 'icon', 'discount', 'unit' => '%', 'subtitle', 'title', 'desc', 'code', 'expiry'])

<div class="voucher-card group relative bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 flex overflow-hidden min-h-[170px]" data-category="{{ $category }}">
    <!-- Ticket Left Stamp Accent -->
    <div class="w-28 bg-{{ $theme }} text-on-{{ $theme }} flex flex-col items-center justify-between p-3 shrink-0 relative">
        <div class="flex flex-col items-center text-center">
            <span class="material-symbols-outlined text-2xl">{{ $icon }}</span>
            <span class="font-label-sm uppercase tracking-widest text-[10px] opacity-90 mt-1">{{ $subtitle }}</span>
            <span class="font-display-sm text-display-sm font-black leading-none mt-1">{{ $discount }}<span class="text-base font-bold">{{ $unit }}</span></span>
        </div>
        <div class="px-2 py-0.5 rounded-full bg-white/20 text-[10px] font-label-sm uppercase tracking-wider text-center">
            {{ $attributes->get('badge', 'Toàn sàn') }}
        </div>
        <div class="absolute -top-3 -right-3 w-6 h-6 rounded-full bg-surface"></div>
        <div class="absolute -bottom-3 -right-3 w-6 h-6 rounded-full bg-surface"></div>
    </div>

    <!-- Perforated Line Decoration -->
    <div class="w-px h-full border-r-2 border-dashed border-surface-container my-3 shrink-0"></div>

    <!-- Ticket Right Information -->
    <div class="flex-1 p-4 flex flex-col justify-between min-w-0">
        <div>
            <div class="flex items-center justify-between gap-2">
                <span class="px-2 py-0.5 rounded bg-{{ $theme }}-fixed text-on-{{ $theme }}-fixed text-label-sm uppercase font-bold tracking-wider">{{ $attributes->get('tag', 'Ưu đãi') }}</span>
                <span class="text-[11px] font-label-sm text-outline flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">schedule</span> {{ $expiry }}
                </span>
            </div>
            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mt-1.5 truncate">{{ $title }}</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-1 mt-0.5">{{ $desc }}</p>
        </div>

        <div class="pt-3 flex items-center justify-between gap-2 border-t border-surface-container/50">
            <div class="flex flex-col">
                <span class="text-[10px] font-label-sm uppercase tracking-wider text-outline">Mã voucher</span>
                <span class="font-mono font-extrabold text-sm text-{{ $theme }} tracking-wider">{{ $code }}</span>
            </div>
            <button class="px-4 py-1.5 rounded-full bg-{{ $theme }} text-on-{{ $theme }} font-label-md text-label-md hover:opacity-90 shadow-sm transition-all flex items-center gap-1" onclick="claimVoucher(this, '{{ $code }}')">
                <span class="material-symbols-outlined text-sm">bookmark_add</span>
                <span>Lưu mã</span>
            </button>
        </div>
    </div>
</div>