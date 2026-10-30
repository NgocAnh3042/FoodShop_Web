<header class="fixed top-0 left-72 right-0 h-16 bg-surface/80 backdrop-blur-xl z-40 shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
    <div class="h-16 w-full px-space-lg flex items-center justify-between gap-space-md">

        {{-- Tìm kiếm --}}
        <div class="flex-1 max-w-md">
            <div class="flex items-center gap-space-sm px-space-md py-space-xs rounded-xl bg-surface-container-low">
                <span class="material-symbols-outlined text-on-surface-variant text-[20px]">search</span>
                <input type="search" placeholder="Tìm mã đơn, tên món, SĐT khách..."
                    class="w-full bg-transparent font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant focus:outline-none" />
            </div>
        </div>

        <div class="flex items-center gap-space-md">
            <div
                class="hidden xl:flex items-center gap-space-xs px-space-sm py-space-xs rounded-lg bg-surface-container-low">
                <span class="material-symbols-outlined text-tertiary text-[18px]">print</span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">Máy in bill:</span>
                <span class="font-label-sm text-label-sm text-tertiary">Đã kết nối</span>
            </div>

            <div
                class="hidden md:flex items-center gap-space-xs px-space-sm py-space-xs rounded-lg bg-surface-container-low">
                <span class="material-symbols-outlined text-primary text-[18px]">support_agent</span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">Hotline:</span>
                <span class="font-label-sm text-label-sm text-on-surface font-semibold">1900 6868</span>
            </div>

            <button type="button" aria-label="Thông báo"
                class="p-space-xs rounded-lg text-on-surface-variant hover:text-on-surface transition-colors relative">
                <span class="material-symbols-outlined text-[24px]">notifications</span>
                <span class="absolute top-1 right-1 w-2 h-2 rounded-full bg-error"></span>
            </button>

            <div class="flex items-center gap-space-sm pl-space-xs">
                <div class="text-right hidden sm:block">
                    <p class="font-label-md text-label-md text-on-surface leading-tight">
                        {{ auth()->user()->name ?? 'Chị Thuý Hà' }}</p>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-tight">Chủ quán</p>
                </div>
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
                </div>
            </div>
        </div>
    </div>
</header>
