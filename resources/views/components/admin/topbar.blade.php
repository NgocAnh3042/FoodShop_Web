<header
    class="fixed top-0 left-72 right-0 h-16 bg-surface/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-40 flex items-center justify-between px-space-lg">
    <div class="flex items-center gap-space-md">
        <div class="relative flex items-center"><span
                class="material-symbols-outlined absolute left-space-md text-on-surface-variant text-[18px]">search</span><input
                class="w-96 pl-10 pr-space-md py-space-xs bg-surface-container-lowest rounded-full font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant outline-none shadow-[0_1px_4px_rgba(0,0,0,0.02)] focus:bg-surface-container-low transition-all"
                placeholder="Tra cứu Đơn hàng, Quán ăn, Tài xế..." type="text" /></div>
        <div class="hidden xl:flex items-center gap-space-xs px-space-md py-1 bg-tertiary-container/10 rounded-full">
            <span class="w-2 h-2 rounded-full bg-tertiary-container"></span><span
                class="font-label-sm text-label-sm text-tertiary font-bold">Hệ thống: Bình thường 99.98%</span>
        </div>
    </div>
    <div class="flex items-center gap-space-md">
        <div class="hidden md:flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm"><span
                class="material-symbols-outlined text-[16px]">schedule</span><span>Hà Nội (GMT+7)</span></div>
        <div class="relative flex items-center justify-center"><button
                class="relative p-space-xs text-on-surface-variant hover:text-on-surface transition-colors"
                type="button"><span class="material-symbols-outlined text-[22px]">notifications</span><span
                    class="absolute top-1 right-1 w-2 h-2 rounded-full bg-primary ring-2 ring-surface"></span></button>
        </div>
        <div class="flex items-center gap-space-sm pl-space-sm">
            <div class="flex flex-col text-right hidden sm:flex"><span
                    class="font-label-md text-label-md text-on-surface font-bold leading-tight">{{ auth()->user()->name ?? 'Super Admin' }}</span><span
                    class="font-label-sm text-label-sm text-on-surface-variant leading-tight">Ban Điều Hành
                    FoodHub</span></div>
            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span
                    class="material-symbols-outlined text-on-primary text-[18px]">person</span></div>
        </div>
    </div>
</header>
