<div class="flex flex-col gap-3 pt-2">
    <p class="font-label-md text-label-md text-on-surface font-bold">Liên kết mạng xã hội</p>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
        {{-- Google (đã liên kết) --}}
        <div class="p-4 rounded-2xl bg-surface-container-low flex flex-col justify-between gap-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[22px] text-primary">account_circle</span>
                    <span class="font-label-md text-label-md font-bold text-on-surface">Google</span>
                </div>
                <span class="w-2 h-2 rounded-full bg-tertiary"></span>
            </div>
            <div>
                <p class="font-body-sm text-body-sm text-on-surface-variant truncate">hoangnam.work@gmail.com</p>
                <span class="inline-flex items-center gap-1 mt-1 text-tertiary font-label-sm text-label-sm font-bold">
                    <span class="material-symbols-outlined text-[13px]">check_circle</span>
                    Đã liên kết
                </span>
            </div>
        </div>

        {{-- Facebook (chưa liên kết) --}}
        <div class="p-4 rounded-2xl bg-surface-container-low flex flex-col justify-between gap-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[22px] text-secondary">share</span>
                    <span class="font-label-md text-label-md font-bold text-on-surface">Facebook</span>
                </div>
                <span class="w-2 h-2 rounded-full bg-surface-variant"></span>
            </div>
            <div>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Chưa liên kết</p>
                <button type="button"
                    class="mt-1 text-primary hover:text-primary-container font-label-sm text-label-sm font-bold transition-colors">+
                    Liên kết ngay</button>
            </div>
        </div>

        {{-- Apple ID (chưa liên kết) --}}
        <div class="p-4 rounded-2xl bg-surface-container-low flex flex-col justify-between gap-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[22px] text-on-surface">lock</span>
                    <span class="font-label-md text-label-md font-bold text-on-surface">Apple ID</span>
                </div>
                <span class="w-2 h-2 rounded-full bg-surface-variant"></span>
            </div>
            <div>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Chưa liên kết</p>
                <button type="button"
                    class="mt-1 text-primary hover:text-primary-container font-label-sm text-label-sm font-bold transition-colors">+
                    Liên kết ngay</button>
            </div>
        </div>
    </div>
</div>
