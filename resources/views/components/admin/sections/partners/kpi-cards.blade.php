<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-space-md">
    <!-- Card 1: Total Merchants -->
    <div
        class="relative overflow-hidden bg-surface-container-lowest rounded-xl p-space-md shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] hover:-translate-y-0.5 transition-all">
        <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-primary-fixed flex items-center justify-center text-on-primary-fixed">
                <span class="material-symbols-outlined text-[22px]">storefront</span>
            </div>
            <span
                class="px-space-xs py-0.5 rounded-full bg-tertiary-container/10 text-tertiary font-label-sm text-label-sm font-bold flex items-center gap-0.5">
                <span class="material-symbols-outlined text-[14px]">trending_up</span> +4.8%
            </span>
        </div>
        <div class="mt-space-sm">
            <span class="font-body-sm text-body-sm text-on-surface-variant uppercase tracking-wider block">Tổng Quán đối
                tác</span>
            <div class="flex items-baseline gap-space-xs mt-1">
                <span class="font-display-sm text-display-sm font-bold text-on-surface">12.450</span>
                <span class="font-label-sm text-label-sm text-on-surface-variant font-normal">điểm bán</span>
            </div>
        </div>
        <div class="mt-space-xs flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
            <span>Độ phủ: 24 tỉnh/thành</span>
            <span class="text-tertiary font-semibold">Tăng trưởng tốt</span>
        </div>
    </div>
    <!-- Card 2: Active & Open -->
    <div
        class="relative overflow-hidden bg-surface-container-lowest rounded-xl p-space-md shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] hover:-translate-y-0.5 transition-all">
        <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-tertiary-container/15 flex items-center justify-center text-tertiary">
                <span class="material-symbols-outlined text-[22px]"
                    style="font-variation-settings: 'FILL' 1;">restaurant_menu</span>
            </div>
            <div class="flex items-center gap-1 font-label-sm text-label-sm text-tertiary font-bold">
                <span class="w-2 h-2 rounded-full bg-tertiary-container animate-pulse"></span>
                89.9% công suất
            </div>
        </div>
        <div class="mt-space-sm">
            <span class="font-body-sm text-body-sm text-on-surface-variant uppercase tracking-wider block">Quán đang mở
                bán</span>
            <div class="flex items-baseline gap-space-xs mt-1">
                <span class="font-display-sm text-display-sm font-bold text-tertiary">11.200</span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">online hiện tại</span>
            </div>
        </div>
        <div class="mt-space-xs flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
            <span>Giờ cao điểm trưa</span>
            <span class="text-primary font-semibold">Tải đơn +22%</span>
        </div>
    </div>
    <!-- Card 3: Pending KYC Verification -->
    <div
        class="relative overflow-hidden bg-surface-container-lowest rounded-xl p-space-md shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] hover:-translate-y-0.5 transition-all">
        <div class="flex items-center justify-between">
            <div
                class="w-10 h-10 rounded-xl bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant">
                <span class="material-symbols-outlined text-[22px]">pending_actions</span>
            </div>
            <span
                class="px-space-xs py-0.5 rounded-full bg-secondary-fixed/50 text-secondary font-label-sm text-label-sm font-bold">
                SLA: < 4 giờ </span>
        </div>
        <div class="mt-space-sm">
            <span class="font-body-sm text-body-sm text-on-surface-variant uppercase tracking-wider block">Chờ kiểm
                duyệt mở mới</span>
            <div class="flex items-baseline gap-space-xs mt-1">
                <span class="font-display-sm text-display-sm font-bold text-secondary">85</span>
                <span class="font-label-sm text-label-sm text-secondary font-bold">hồ sơ KYC</span>
            </div>
        </div>
        <div class="mt-space-xs flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
            <span>34 hồ sơ gấp</span>
            <button class="text-primary font-label-sm text-label-sm font-bold hover:underline"
                onclick="openAuditModal('FHB-99120')" type="button">Xử lý ngay →</button>
        </div>
    </div>
    <!-- Card 4: Penalized / Locked -->
    <div
        class="relative overflow-hidden bg-surface-container-lowest rounded-xl p-space-md shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] hover:-translate-y-0.5 transition-all">
        <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-error-container flex items-center justify-center text-error">
                <span class="material-symbols-outlined text-[22px]">gavel</span>
            </div>
            <span
                class="px-space-xs py-0.5 rounded-full bg-error-container/60 text-error font-label-sm text-label-sm font-bold">
                0.33% tỷ lệ
            </span>
        </div>
        <div class="mt-space-sm">
            <span class="font-body-sm text-body-sm text-on-surface-variant uppercase tracking-wider block">Tạm khóa vi
                phạm</span>
            <div class="flex items-baseline gap-space-xs mt-1">
                <span class="font-display-sm text-display-sm font-bold text-error">42</span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">quán đối tác</span>
            </div>
        </div>
        <div class="mt-space-xs flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
            <span>Hủy đơn cao / Vệ sinh ATTP</span>
            <span class="text-error font-semibold">Giám sát 24/7</span>
        </div>
    </div>
</div>
