<div
    class="bg-surface-container-lowest rounded-xl p-space-md shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] flex flex-col gap-space-md">
    <!-- Top Row: Tabs + Primary Actions -->
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">
        <!-- Status Tabs -->
        <div class="flex items-center gap-space-xs overflow-x-auto pb-1 lg:pb-0" id="filterTabs">
            <button
                class="tab-btn px-space-md py-space-xs rounded-full font-label-md text-label-md bg-primary text-on-primary shadow-sm flex items-center gap-space-xs whitespace-nowrap"
                data-tab="all" type="button">
                <span>Tất cả quán</span>
                <span class="bg-white/20 px-2 py-0.5 rounded-full font-label-sm text-label-sm">12.450</span>
            </button>
            <button
                class="tab-btn px-space-md py-space-xs rounded-full font-label-md text-label-md text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all flex items-center gap-space-xs whitespace-nowrap"
                data-tab="pending" type="button">
                <span>Chờ phê duyệt</span>
                <span
                    class="bg-secondary-fixed text-on-secondary-fixed-variant px-2 py-0.5 rounded-full font-label-sm text-label-sm font-bold">85</span>
            </button>
            <button
                class="tab-btn px-space-md py-space-xs rounded-full font-label-md text-label-md text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all flex items-center gap-space-xs whitespace-nowrap"
                data-tab="warning" type="button">
                <span>Cảnh báo / Vi phạm</span>
                <span
                    class="bg-error-container text-error px-2 py-0.5 rounded-full font-label-sm text-label-sm font-bold">24</span>
            </button>
            <button
                class="tab-btn px-space-md py-space-xs rounded-full font-label-md text-label-md text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all flex items-center gap-space-xs whitespace-nowrap"
                data-tab="paused" type="button">
                <span>Tạm ngưng</span>
                <span
                    class="bg-surface-container text-on-surface-variant px-2 py-0.5 rounded-full font-label-sm text-label-sm">312</span>
            </button>
        </div>
        <!-- Action CTAs -->
        <div class="flex items-center gap-space-sm flex-wrap">
            <button
                class="px-space-md py-space-xs rounded-full font-label-md text-label-md bg-surface-container hover:bg-surface-container-high text-on-surface transition-all flex items-center gap-space-xs shadow-sm"
                type="button">
                <span class="material-symbols-outlined text-[18px]">file_download</span>
                <span>Xuất báo cáo đối tác</span>
            </button>
            <button
                class="px-space-md py-space-xs rounded-full font-label-md text-label-md bg-primary hover:bg-primary-container text-on-primary transition-all flex items-center gap-space-xs shadow-md"
                type="button">
                <span class="material-symbols-outlined text-[18px]">add_business</span>
                <span>Thêm đối tác mới</span>
            </button>
        </div>
    </div>
    <!-- Filter Controls Toolbar -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-12 gap-space-sm pt-space-xs">
        <!-- Search Input -->
        <div class="xl:col-span-4 relative flex items-center">
            <span class="material-symbols-outlined absolute left-3 text-on-surface-variant text-[18px]">search</span>
            <input
                class="w-full pl-9 pr-8 py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant outline-none focus:bg-surface-container-lowest transition-all"
                id="merchantSearch" placeholder="Tìm theo tên quán, Mã FHB-..., hoặc SĐT chủ quán..." type="text" />
            <button class="absolute right-2.5 text-on-surface-variant hover:text-on-surface hidden" id="clearSearch"
                type="button">
                <span class="material-symbols-outlined text-[16px]">close</span>
            </button>
        </div>
        <!-- Tier Category Filter -->
        <div class="xl:col-span-3">
            <div class="relative">
                <select
                    class="w-full px-space-md py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface outline-none appearance-none cursor-pointer focus:bg-surface-container-lowest transition-all">
                    <option value="">Phân hạng: Tất cả phân hạng</option>
                    <option value="favorite">★ Quán Yêu Thích (VIP Choice)</option>
                    <option value="chain">Chuỗi Lớn (Enterprise Brands)</option>
                    <option value="standard">Quán Tiêu Chuẩn (Standard)</option>
                </select>
                <span
                    class="material-symbols-outlined absolute right-3 top-2.5 text-on-surface-variant pointer-events-none text-[18px]">expand_more</span>
            </div>
        </div>
        <!-- City / Region Filter -->
        <div class="xl:col-span-3">
            <div class="relative">
                <select
                    class="w-full px-space-md py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface outline-none appearance-none cursor-pointer focus:bg-surface-container-lowest transition-all">
                    <option value="">Khu vực: Toàn quốc</option>
                    <option value="hcm">TP. Hồ Chí Minh (6.840 quán)</option>
                    <option value="hanoi">Hà Nội (4.210 quán)</option>
                    <option value="danang">Đà Nẵng (1.400 quán)</option>
                </select>
                <span
                    class="material-symbols-outlined absolute right-3 top-2.5 text-on-surface-variant pointer-events-none text-[18px]">location_on</span>
            </div>
        </div>
        <!-- Commission Rate Filter -->
        <div class="xl:col-span-2">
            <div class="relative">
                <select
                    class="w-full px-space-md py-2 bg-surface-container-low rounded-xl font-body-md text-body-md text-on-surface outline-none appearance-none cursor-pointer focus:bg-surface-container-lowest transition-all">
                    <option value="">Chiết khấu: Tất cả</option>
                    <option value="15">Mức 15% (Chuỗi ưu tiên)</option>
                    <option value="18">Mức 18% (Tiêu chuẩn A)</option>
                    <option value="20">Mức 20% (Tiêu chuẩn B)</option>
                    <option value="custom">Chiết khấu riêng</option>
                </select>
                <span
                    class="material-symbols-outlined absolute right-3 top-2.5 text-on-surface-variant pointer-events-none text-[18px]">percent</span>
            </div>
        </div>
    </div>
    <!-- Quick Active Filter Chips -->
    <div class="flex items-center gap-space-xs flex-wrap font-label-sm text-label-sm text-on-surface-variant">
        <span>Đang áp dụng:</span>
        <span class="inline-flex items-center gap-1 bg-surface-container px-space-sm py-1 rounded-full text-on-surface">
            Đang kinh doanh & Chờ duyệt
            <button class="hover:text-primary" type="button"><span
                    class="material-symbols-outlined text-[14px]">close</span></button>
        </span>
        <span class="inline-flex items-center gap-1 bg-surface-container px-space-sm py-1 rounded-full text-on-surface">
            Chiết khấu: Toàn bộ
            <button class="hover:text-primary" type="button"><span
                    class="material-symbols-outlined text-[14px]">close</span></button>
        </span>
        <button class="text-primary hover:underline ml-space-xs font-bold" type="button">Đặt lại tất cả</button>
    </div>
</div>
