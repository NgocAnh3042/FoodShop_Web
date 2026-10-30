<div
    class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05)] flex flex-col gap-space-md">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
        <div>
            <h3 class="font-headline-sm text-headline-sm text-on-surface">Hiệu suất doanh thu &amp; Số lượng đơn theo giờ
            </h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Đỉnh điểm bữa trưa (11:30 - 13:00) và tối (18:30
                - 20:00)</p>
        </div>
        <div class="flex items-center gap-1 bg-surface-container-low p-1 rounded-xl">
            <button
                class="px-space-sm py-1 rounded-lg bg-surface-container-lowest text-primary font-label-sm text-label-sm shadow-sm font-semibold"
                type="button">Hôm nay</button>
            <button
                class="px-space-sm py-1 rounded-lg text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm"
                type="button">Hôm qua</button>
            <button
                class="px-space-sm py-1 rounded-lg text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm"
                type="button">7 ngày</button>
        </div>
    </div>
    <!-- Inline Data Visualization: Hourly Bar & Area Chart -->
    <div class="w-full pt-space-sm">
        <div class="h-60 w-full relative flex items-end gap-2 sm:gap-3 px-2">
            <!-- Y-Axis guide lines -->
            <div class="absolute inset-x-0 top-0 h-px bg-surface-container-high pointer-events-none"></div>
            <div class="absolute inset-x-0 top-1/2 h-px bg-surface-container-high pointer-events-none"></div>
            <div class="absolute inset-x-0 bottom-0 h-px bg-surface-container-high pointer-events-none"></div>
            <!-- Bar 1: 08:00 -->
            <div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end group cursor-pointer">
                <div
                    class="text-[10px] font-label-sm text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">
                    8 đơn</div>
                <div class="w-full max-w-[28px] bg-primary/20 rounded-t-lg transition-all group-hover:bg-primary"
                    style="height: 18%;"></div>
                <span class="font-label-sm text-label-sm text-on-surface-variant text-[11px]">08h</span>
            </div>
            <!-- Bar 2: 09:00 -->
            <div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end group cursor-pointer">
                <div
                    class="text-[10px] font-label-sm text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">
                    14 đơn</div>
                <div class="w-full max-w-[28px] bg-primary/25 rounded-t-lg transition-all group-hover:bg-primary"
                    style="height: 28%;"></div>
                <span class="font-label-sm text-label-sm text-on-surface-variant text-[11px]">09h</span>
            </div>
            <!-- Bar 3: 10:00 -->
            <div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end group cursor-pointer">
                <div
                    class="text-[10px] font-label-sm text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">
                    22 đơn</div>
                <div class="w-full max-w-[28px] bg-primary/40 rounded-t-lg transition-all group-hover:bg-primary"
                    style="height: 44%;"></div>
                <span class="font-label-sm text-label-sm text-on-surface-variant text-[11px]">10h</span>
            </div>
            <!-- Bar 4: 11:00 (Peak Lunch 1) -->
            <div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end group cursor-pointer">
                <div class="text-[10px] font-label-sm text-primary font-bold opacity-100">46 đơn</div>
                <div class="w-full max-w-[28px] bg-primary rounded-t-lg transition-all shadow-md shadow-primary/30"
                    style="height: 92%;"></div>
                <span class="font-label-sm text-label-sm text-primary font-bold text-[11px]">11h</span>
            </div>
            <!-- Bar 5: 12:00 (Peak Lunch 2) -->
            <div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end group cursor-pointer">
                <div class="text-[10px] font-label-sm text-primary font-bold opacity-100">51 đơn</div>
                <div class="w-full max-w-[28px] bg-primary rounded-t-lg transition-all shadow-md shadow-primary/30"
                    style="height: 100%;"></div>
                <span class="font-label-sm text-label-sm text-primary font-bold text-[11px]">12h</span>
            </div>
            <!-- Bar 6: 13:00 -->
            <div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end group cursor-pointer">
                <div
                    class="text-[10px] font-label-sm text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">
                    26 đơn</div>
                <div class="w-full max-w-[28px] bg-primary/40 rounded-t-lg transition-all group-hover:bg-primary"
                    style="height: 48%;"></div>
                <span class="font-label-sm text-label-sm text-on-surface-variant text-[11px]">13h</span>
            </div>
            <!-- Bar 7: 14:00 -->
            <div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end group cursor-pointer">
                <div
                    class="text-[10px] font-label-sm text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">
                    12 đơn</div>
                <div class="w-full max-w-[28px] bg-primary/20 rounded-t-lg transition-all group-hover:bg-primary"
                    style="height: 22%;"></div>
                <span class="font-label-sm text-label-sm text-on-surface-variant text-[11px]">14h</span>
            </div>
            <!-- Bar 8: 15:00 -->
            <div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end group cursor-pointer">
                <div
                    class="text-[10px] font-label-sm text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">
                    16 đơn</div>
                <div class="w-full max-w-[28px] bg-primary/30 rounded-t-lg transition-all group-hover:bg-primary"
                    style="height: 30%;"></div>
                <span class="font-label-sm text-label-sm text-on-surface-variant text-[11px]">15h</span>
            </div>
            <!-- Bar 9: 16:00 -->
            <div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end group cursor-pointer">
                <div
                    class="text-[10px] font-label-sm text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">
                    19 đơn</div>
                <div class="w-full max-w-[28px] bg-primary/35 rounded-t-lg transition-all group-hover:bg-primary"
                    style="height: 36%;"></div>
                <span class="font-label-sm text-label-sm text-on-surface-variant text-[11px]">16h</span>
            </div>
            <!-- Bar 10: 17:00 -->
            <div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end group cursor-pointer">
                <div
                    class="text-[10px] font-label-sm text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">
                    28 đơn</div>
                <div class="w-full max-w-[28px] bg-secondary-container rounded-t-lg transition-all group-hover:bg-primary"
                    style="height: 52%;"></div>
                <span class="font-label-sm text-label-sm text-on-surface-variant text-[11px]">17h</span>
            </div>
            <!-- Bar 11: 18:00 (Evening Peak) -->
            <div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end group cursor-pointer">
                <div class="text-[10px] font-label-sm text-primary font-bold opacity-100">42 đơn</div>
                <div class="w-full max-w-[28px] bg-primary/90 rounded-t-lg transition-all shadow-md shadow-primary/20"
                    style="height: 82%;"></div>
                <span class="font-label-sm text-label-sm text-primary font-bold text-[11px]">18h</span>
            </div>
            <!-- Bar 12: Hiện tại (19h) -->
            <div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end group cursor-pointer">
                <div class="text-[10px] font-label-sm text-tertiary font-bold opacity-100">38 đơn</div>
                <div class="w-full max-w-[28px] bg-tertiary rounded-t-lg transition-all shadow-md shadow-tertiary/20"
                    style="height: 74%;"></div>
                <span class="font-label-sm text-label-sm text-tertiary font-bold text-[11px]">19h</span>
            </div>
        </div>
    </div>
    <!-- Channel Distribution Summary -->
    <div
        class="pt-space-md bg-surface-container-low rounded-xl p-space-md grid grid-cols-1 sm:grid-cols-3 gap-space-md">
        <div class="flex flex-col gap-1">
            <div class="flex items-center gap-1.5">
                <span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">FoodHub Now (Giao tận nơi)</span>
            </div>
            <div class="flex items-baseline gap-1.5 pl-4">
                <span class="font-headline-sm text-headline-sm font-bold text-on-surface">78%</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant">(110 đơn - 14.39M)</span>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <div class="flex items-center gap-1.5">
                <span class="w-2.5 h-2.5 rounded-full bg-secondary-container"></span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">Tự đến lấy (Takeaway)</span>
            </div>
            <div class="flex items-baseline gap-1.5 pl-4">
                <span class="font-headline-sm text-headline-sm font-bold text-on-surface">15%</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant">(21 đơn - 2.76M)</span>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <div class="flex items-center gap-1.5">
                <span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">Bán tại quầy (POS)</span>
            </div>
            <div class="flex items-baseline gap-1.5 pl-4">
                <span class="font-headline-sm text-headline-sm font-bold text-on-surface">7%</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant">(11 đơn - 1.29M)</span>
            </div>
        </div>
    </div>
</div>
