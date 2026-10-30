<div
    class="p-space-md rounded-2xl bg-surface-container-lowest shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05)] flex flex-col gap-space-md">
    <!-- Search & Temporal selectors -->
    <div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-space-md">
        <!-- Dual Search Box -->
        <div
            class="flex-1 flex items-center gap-space-sm px-space-md py-space-sm rounded-xl bg-surface-container-low max-w-2xl">
            <span class="material-symbols-outlined text-on-surface-variant text-[22px]">search</span>
            <input
                class="w-full bg-transparent font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant focus:outline-none"
                placeholder="Tìm kiếm nhanh mã đơn (#FH-...), tên khách, 4 số cuối SĐT, tên món ăn..." type="text" />
            <button class="text-on-surface-variant hover:text-on-surface" type="button">
                <span class="material-symbols-outlined text-[18px]">mic</span>
            </button>
        </div>
        <div class="flex flex-wrap items-center gap-space-sm">
            <!-- Time Scope -->
            <div class="flex items-center bg-surface-container-low p-1 rounded-xl">
                <button
                    class="px-space-md py-1.5 rounded-lg bg-surface-container-lowest font-label-sm text-label-sm text-primary shadow-sm"
                    type="button">Hôm nay</button>
                <button
                    class="px-space-md py-1.5 rounded-lg font-label-sm text-label-sm text-on-surface-variant hover:text-on-surface"
                    type="button">7 ngày</button>
                <button
                    class="px-space-md py-1.5 rounded-lg font-label-sm text-label-sm text-on-surface-variant hover:text-on-surface flex items-center gap-1"
                    type="button">
                    <span>Tùy chỉnh</span>
                    <span class="material-symbols-outlined text-[14px]">calendar_today</span>
                </button>
            </div>
            <!-- Channel Filter -->
            <div class="flex items-center gap-space-xs bg-surface-container-low px-space-md py-space-xs rounded-xl">
                <span class="font-label-sm text-label-sm text-on-surface-variant">Kênh:</span>
                <select
                    class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer">
                    <option>Tất cả nguồn đơn</option>
                    <option>FoodHub giao tận nơi</option>
                    <option>Khách tự đến lấy (Take-away)</option>
                    <option>Đơn gọi tại quầy (Dine-in)</option>
                </select>
            </div>
        </div>
    </div>
    <!-- Status Pills Bar -->
    <div class="flex items-center gap-space-xs overflow-x-auto pb-space-xs">
        <button
            class="px-space-md py-space-xs rounded-full bg-on-surface text-surface font-label-md text-label-md whitespace-nowrap shadow-sm"
            type="button">
            Tất cả (163)
        </button>
        <button
            class="flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-primary-fixed text-on-primary-fixed font-label-md text-label-md whitespace-nowrap hover:bg-primary-fixed-dim transition-colors"
            type="button">
            <span class="w-2 h-2 rounded-full bg-primary animate-ping"></span>
            Mới nhận
            <span
                class="px-1.5 py-0.2 rounded-full bg-primary text-on-primary font-label-sm text-label-sm ml-0.5">3</span>
        </button>
        <button
            class="flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-secondary-fixed text-secondary font-label-md text-label-md whitespace-nowrap hover:bg-secondary-fixed-dim transition-colors"
            type="button">
            <span class="w-2 h-2 rounded-full bg-secondary"></span>
            Đang chuẩn bị
            <span
                class="px-1.5 py-0.2 rounded-full bg-secondary text-on-secondary font-label-sm text-label-sm ml-0.5">5</span>
        </button>
        <button
            class="flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container-high text-on-surface font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-highest transition-colors"
            type="button">
            <span class="w-2 h-2 rounded-full bg-primary"></span>
            Đang giao
            <span
                class="px-1.5 py-0.2 rounded-full bg-surface-dim text-on-surface font-label-sm text-label-sm ml-0.5">12</span>
        </button>
        <button
            class="flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container-high text-on-surface font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-highest transition-colors"
            type="button">
            <span class="w-2 h-2 rounded-full bg-tertiary"></span>
            Đã hoàn thành
            <span class="text-on-surface-variant font-label-sm text-label-sm ml-0.5">142</span>
        </button>
        <button
            class="flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container-high text-on-surface font-label-md text-label-md whitespace-nowrap hover:bg-surface-container-highest transition-colors"
            type="button">
            <span class="w-2 h-2 rounded-full bg-error"></span>
            Đã hủy
            <span class="text-on-surface-variant font-label-sm text-label-sm ml-0.5">1</span>
        </button>
    </div>
</div>
