<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col gap-space-md">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-space-xs">
            <span class="material-symbols-outlined text-primary text-[22px]">nest_clock_farsight_analog</span>
            <h2 class="font-headline-sm text-headline-sm text-on-surface">2. Lịch mở quán &amp; Nhận đơn tự động</h2>
        </div>
        <span class="font-label-sm text-label-sm text-secondary bg-secondary-fixed/50 px-space-xs py-0.5 rounded-full">2
            Ca chuẩn</span>
    </div>
    <!-- Shift Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
        <x-seller.cards.shift-card icon="wb_sunny" icon-color="gold" title="Ca Sáng - Bún bò & Điểm tâm" open="07:30"
            close="14:00" :enabled="true" />
        <x-seller.cards.shift-card icon="dark_mode" icon-color="primary" title="Ca Chiều Tối - Ăn tối & Gia đình"
            open="16:30" close="22:30" :enabled="true" />
    </div>
    <!-- Automated Flags -->
    <div class="flex flex-col gap-space-sm pt-space-xs">
        <div class="flex items-center justify-between p-space-md rounded-xl bg-surface-container-low">
            <div class="flex items-center gap-space-sm">
                <div
                    class="w-8 h-8 rounded-lg bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed">
                    <span class="material-symbols-outlined text-[20px]">alarm_on</span>
                </div>
                <div>
                    <p class="font-label-md text-label-md text-on-surface">Tự động mở cửa đúng giờ</p>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Chuyển trạng thái quán sang mở nhận đơn
                        không cần thao tác tay</p>
                </div>
            </div>
            <input checked="" class="accent-primary w-5 h-5 rounded cursor-pointer" type="checkbox" />
        </div>
        <div class="flex items-center justify-between p-space-md rounded-xl bg-surface-container-low">
            <div class="flex items-center gap-space-sm">
                <div
                    class="w-8 h-8 rounded-lg bg-error-container flex items-center justify-center text-on-error-container">
                    <span class="material-symbols-outlined text-[20px]">event_busy</span>
                </div>
                <div>
                    <p class="font-label-md text-label-md text-on-surface">Chế độ nghỉ lễ &amp; Đóng cửa đột xuất</p>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Tạm ngưng tất cả đơn đặt bàn, đặt món
                        hẹn giờ trong các ngày lễ</p>
                </div>
            </div>
            <input class="accent-primary w-5 h-5 rounded cursor-pointer" type="checkbox" />
        </div>
    </div>
</div>
