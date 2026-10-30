<div
    class="rounded-2xl bg-surface-container-lowest p-space-md shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05)] flex flex-col gap-space-md">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-1.5">
            <span class="material-symbols-outlined text-primary text-[20px]">inventory_2</span>
            <h3 class="font-headline-sm text-headline-sm text-on-surface">Kho món &amp; Nguyên liệu</h3>
        </div>
        <span class="text-on-surface-variant font-label-sm text-label-sm">Bếp trực tiếp</span>
    </div>
    <div class="flex flex-col gap-space-sm">
        <!-- Dish 1 -->
        <div class="p-space-sm rounded-xl bg-surface-container-low flex flex-col gap-2">
            <div class="flex items-center justify-between">
                <div>
                    <p class="font-label-md text-label-md text-on-surface">Bún Bò Huế Đặc Biệt</p>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Đã bán 68 • Còn lại <strong
                            class="text-primary font-bold">12 tô</strong></p>
                </div>
                <div class="flex items-center">
                    <span class="px-2 py-0.5 rounded-full bg-tertiary/15 text-tertiary font-label-sm text-label-sm">Đang
                        bán</span>
                </div>
            </div>
            <!-- Progress bar of stock -->
            <div class="w-full bg-surface-container-high h-1.5 rounded-full overflow-hidden">
                <div class="bg-primary h-full rounded-full" style="width: 85%;"></div>
            </div>
        </div>
        <!-- Dish 2 -->
        <div class="p-space-sm rounded-xl bg-surface-container-low flex flex-col gap-2">
            <div class="flex items-center justify-between">
                <div>
                    <p class="font-label-md text-label-md text-on-surface">Trà Đào Cam Sả Tươi</p>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Đã bán 54 • Còn lại <strong
                            class="text-secondary font-bold">20 ly</strong></p>
                </div>
                <div class="flex items-center">
                    <span class="px-2 py-0.5 rounded-full bg-tertiary/15 text-tertiary font-label-sm text-label-sm">Đang
                        bán</span>
                </div>
            </div>
            <div class="w-full bg-surface-container-high h-1.5 rounded-full overflow-hidden">
                <div class="bg-secondary h-full rounded-full" style="width: 72%;"></div>
            </div>
        </div>
        <!-- Dish 3: Fast Toggle to Out of Stock -->
        <div class="p-space-sm rounded-xl bg-surface-container-low flex items-center justify-between">
            <div>
                <p class="font-label-md text-label-md text-on-surface">Bánh Bèo Chén Tôm Cháy</p>
                <p class="font-body-sm text-body-sm text-error">Sắp hết nguyên liệu tôm cháy</p>
            </div>
            <!-- Quick Interactive Toggle Simulation -->
            <label class="relative inline-flex items-center cursor-pointer">
                <input checked="" class="sr-only peer" type="checkbox" />
                <div
                    class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-surface-container-lowest after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-on-primary after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                </div>
            </label>
        </div>
    </div>
    <button
        class="w-full py-space-sm rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md flex items-center justify-center gap-1 transition-all"
        type="button">
        <span class="material-symbols-outlined text-[18px]">edit_note</span>
        <span>Quản lý định lượng &amp; thực đơn</span>
    </button>
</div>
