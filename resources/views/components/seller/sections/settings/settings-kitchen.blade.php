<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col gap-space-md">
    <div class="flex items-center gap-space-xs">
        <span class="material-symbols-outlined text-primary text-[22px]">microwave</span>
        <h2 class="font-headline-sm text-headline-sm text-on-surface">3. Cấu hình vận hành bếp &amp; Đơn hàng</h2>
    </div>
    <div class="flex flex-col gap-space-md">
        <!-- Prep Time -->
        <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
                <span class="font-label-md text-label-md text-on-surface">Thời gian nấu &amp; đóng gói mặc định</span>
                <span class="font-headline-sm text-headline-sm text-primary font-bold" id="prepTimeVal">15 phút</span>
            </div>
            <input class="accent-primary cursor-pointer w-full mt-space-xs" max="45" min="5"
                oninput="document.getElementById('prepTimeVal').innerText = this.value + ' phút'" step="5"
                type="range" value="15" />
            <div class="flex justify-between font-label-sm text-label-sm text-on-surface-variant">
                <span>Nhanh (5p)</span>
                <span>Tiêu chuẩn (15p)</span>
                <span>Món hầm kỹ (45p)</span>
            </div>
        </div>
        <!-- Delivery Radius -->
        <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
                <span class="font-label-md text-label-md text-on-surface">Bán kính nhận đơn ship xa nhất</span>
                <span class="font-headline-sm text-headline-sm text-secondary font-bold" id="radiusVal">10.0 km</span>
            </div>
            <input class="accent-primary cursor-pointer w-full mt-space-xs" max="25" min="1"
                oninput="document.getElementById('radiusVal').innerText = parseFloat(this.value).toFixed(1) + ' km'"
                step="0.5" type="range" value="10" />
            <div class="flex justify-between font-label-sm text-label-sm text-on-surface-variant">
                <span>1 km</span>
                <span>Bán kính chuẩn (10 km)</span>
                <span>Mở rộng (25 km)</span>
            </div>
        </div>
        <!-- Max Active Capacity Buffer -->
        <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
                <div>
                    <span class="font-label-md text-label-md text-on-surface block">Giới hạn đơn cùng lúc giờ cao
                        điểm</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Bật cảnh báo tạm giãn cách khi bếp
                        chạm ngưỡng</span>
                </div>
                <div
                    class="w-16 h-10 rounded-xl bg-surface-container-lowest flex items-center justify-center font-headline-sm text-headline-sm text-on-surface shadow-inner">
                    25
                </div>
            </div>
        </div>
    </div>
</div>
