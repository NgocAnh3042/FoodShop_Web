<!-- Pagination & Load More Controls -->
<div class="flex flex-col sm:flex-row items-center justify-between gap-space-md pt-space-md pb-space-lg">
    <p class="font-body-sm text-body-sm text-on-surface-variant">
        Đang hiển thị <span class="font-semibold text-on-surface">1 - 6</span> trong tổng số <span
            class="font-semibold text-on-surface">148</span> món ăn
    </p>
    <!-- Number Pagination -->
    <div class="flex items-center gap-1.5">
        <button aria-label="Trang trước"
            class="w-10 h-10 rounded-full bg-surface-container-lowest hover:bg-surface-container text-on-surface flex items-center justify-center shadow-sm disabled:opacity-40 transition-colors"
            type="button">
            <span class="material-symbols-outlined text-[20px]">chevron_left</span>
        </button>
        <button class="w-10 h-10 rounded-full bg-primary text-on-primary font-label-md text-label-md font-bold shadow-sm"
            type="button">1</button>
        <button
            class="w-10 h-10 rounded-full bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors"
            type="button">2</button>
        <button
            class="w-10 h-10 rounded-full bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors"
            type="button">3</button>
        <span class="px-1 text-outline font-label-md">...</span>
        <button
            class="w-10 h-10 rounded-full bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors"
            type="button">25</button>
        <button aria-label="Trang tiếp theo"
            class="w-10 h-10 rounded-full bg-surface-container-lowest hover:bg-surface-container text-on-surface flex items-center justify-center shadow-sm transition-colors"
            type="button">
            <span class="material-symbols-outlined text-[20px]">chevron_right</span>
        </button>
    </div>
    <!-- Secondary Quick Load Action -->
    <button
        class="px-space-lg py-2.5 rounded-full bg-surface-container-low hover:bg-surface-container text-on-surface font-label-md text-label-md flex items-center gap-1.5 transition-colors"
        type="button">
        <span class="material-symbols-outlined text-[18px]">expand_circle_down</span> Xem thêm 12 món khác
    </button>
</div>
