<div
    class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md bg-surface-container-lowest p-space-lg rounded-xl shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)]">
    <div class="flex flex-col">
        <div class="flex items-center gap-space-xs text-primary font-label-md text-label-md uppercase tracking-wider">
            <span class="material-symbols-outlined text-[18px]">analytics</span>
            <span>Báo cáo tài chính &amp; Doanh số</span>
        </div>
        <h1 class="font-headline-lg text-headline-lg text-on-surface mt-space-xs font-bold">Tổng quan tài chính Bếp Huế
            Cố Đô</h1>
        <p class="font-body-md text-body-md text-on-surface-variant">Kỳ đối soát cập nhật gần nhất: 15:30 hôm nay</p>
    </div>
    <div class="flex flex-wrap items-center gap-space-sm">
        <!-- Date Segment Buttons -->
        <div class="flex items-center p-space-xs bg-surface-container-low rounded-xl">
            <button
                class="px-space-md py-space-xs rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors"
                type="button">Hôm nay</button>
            <button
                class="px-space-md py-space-xs rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors"
                type="button">7 ngày qua</button>
            <button
                class="px-space-md py-space-xs rounded-lg font-label-md text-label-md bg-primary-container text-on-primary-container shadow-sm"
                type="button">Tháng này</button>
            <button
                class="px-space-md py-space-xs rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors"
                type="button">Quý này</button>
            <button
                class="px-space-sm py-space-xs rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-on-surface flex items-center gap-1 transition-colors"
                type="button">
                <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                <span class="hidden sm:inline">Tùy chọn</span>
            </button>
        </div>
        <!-- Export Dropdown Button -->
        <div class="relative group">
            <button
                class="px-space-lg py-space-sm rounded-xl bg-primary text-on-primary font-label-md text-label-md flex items-center gap-space-xs hover:bg-primary-container shadow-[0_4px_16px_rgba(204,73,0,0.25)] transition-all cursor-pointer"
                type="button">
                <span class="material-symbols-outlined text-[20px]">download</span>
                <span>Xuất báo cáo</span>
                <span class="material-symbols-outlined text-[18px]">expand_more</span>
            </button>
            <div
                class="absolute right-0 top-full mt-2 w-48 bg-surface-container-lowest shadow-xl rounded-xl p-space-xs hidden group-hover:flex flex-col gap-1 z-30">
                <button
                    class="flex items-center gap-space-sm px-space-md py-space-xs rounded-lg font-label-md text-label-md text-on-surface hover:bg-surface-container-low text-left"
                    type="button">
                    <span class="material-symbols-outlined text-error text-[18px]">picture_as_pdf</span>
                    Xuất tệp PDF (.pdf)
                </button>
                <button
                    class="flex items-center gap-space-sm px-space-md py-space-xs rounded-lg font-label-md text-label-md text-on-surface hover:bg-surface-container-low text-left"
                    type="button">
                    <span class="material-symbols-outlined text-tertiary text-[18px]">table_view</span>
                    Xuất Excel (.xlsx)
                </button>
            </div>
        </div>
    </div>
</div>
