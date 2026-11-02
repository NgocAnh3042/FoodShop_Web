<div
    class="lg:col-span-8 bg-surface-container-lowest rounded-2xl p-space-md shadow-sm flex flex-col justify-between relative">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-space-md gap-space-sm">
        <div>
            <div class="flex items-center gap-space-xs">
                <span class="material-symbols-outlined text-primary text-[20px]">map</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-bold">Bản Đồ Phân Bổ Đội Xe & Điểm
                    Nóng (Heatmap Hubs)</span>
            </div>
            <span class="font-body-sm text-body-sm text-on-surface-variant">Phân tích theo bán kính 3km tâm các quận nội
                thành TP. Hồ Chí Minh & Hà Nội</span>
        </div>
        <div class="flex items-center gap-space-xs bg-surface-container p-1 rounded-xl">
            <button
                class="px-3 py-1 rounded-lg bg-surface-container-lowest text-on-surface font-label-sm text-label-sm shadow-sm font-bold"
                type="button">TP. Hồ Chí Minh</button>
            <button
                class="px-3 py-1 rounded-lg text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm"
                type="button">Hà Nội</button>
            <button
                class="px-3 py-1 rounded-lg text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm"
                type="button">Đà Nẵng</button>
        </div>
    </div>
    <!-- Map Display Container with HUD Overlays -->
    <div class="relative w-full h-96 rounded-xl overflow-hidden bg-surface-container">
        <div class="w-full h-full bg-cover bg-center" data-location="District 1, Ho Chi Minh City, Vietnam"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDytCWpD0k9TDjp0wJefPH5BNGyEKQHzHvJfY731vHescpS3jyK8LBkQrRWZoYQ7Fcn6zrqbuDTUfA3aCLck9BP1KTTaabhboM1UueBmAZZz1ZSSCykKrltgaoZMedlmszNFovMsmavInkmojmvQ2STW89YezSdxp9wN3t6TEzUSlXrxn6zFDuk9dqPwb52QhMZKSB3CbHherlHIGhx4MpZjaZ7otOXKBTXEXKGnVT1')">
        </div>
        <!-- Live HUD Overlay Top Left -->
        <div
            class="absolute top-3 left-3 bg-surface/90 backdrop-blur-md px-space-md py-space-sm rounded-xl shadow-md flex items-center gap-space-md">
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-error animate-ping"></span>
                <span class="font-label-sm text-label-sm font-bold text-on-surface">Độ trễ hệ thống: 82ms</span>
            </div>
            <span class="text-on-surface-variant text-[12px]">|</span>
            <div class="font-body-sm text-body-sm text-on-surface">
                Khu vực thiếu xe: <span class="font-bold text-error">Bến Nghé, Tân Định</span>
            </div>
        </div>
        <!-- Heat Legend Bottom Left -->
        <div
            class="absolute bottom-3 left-3 bg-surface/90 backdrop-blur-md px-3 py-2 rounded-xl shadow-md flex items-center gap-3">
            <span class="font-label-sm text-label-sm text-on-surface-variant">Mật độ:</span>
            <div class="flex items-center gap-1">
                <span class="w-3 h-3 rounded-full bg-tertiary"></span>
                <span class="font-label-sm text-label-sm text-on-surface">Dư tài xế</span>
            </div>
            <div class="flex items-center gap-1">
                <span class="w-3 h-3 rounded-full bg-secondary-container"></span>
                <span class="font-label-sm text-label-sm text-on-surface">Cân bằng</span>
            </div>
            <div class="flex items-center gap-1">
                <span class="w-3 h-3 rounded-full bg-primary"></span>
                <span class="font-label-sm text-label-sm text-on-surface">Cao điểm thiếu xe</span>
            </div>
        </div>
        <!-- Rider Ping Floating Mock Indicators -->
        <div
            class="absolute top-1/4 left-1/3 bg-primary text-on-primary px-2 py-1 rounded-full shadow-lg font-label-sm text-label-sm flex items-center gap-1 cursor-pointer transform -translate-x-1/2 -translate-y-1/2 hover:scale-110 transition-transform">
            <span class="material-symbols-outlined text-[14px]">two_wheeler</span>
            <span>Trần Quốc Bảo (#FH-89421)</span>
        </div>
        <div
            class="absolute top-1/2 left-2/3 bg-tertiary text-on-tertiary px-2 py-1 rounded-full shadow-lg font-label-sm text-label-sm flex items-center gap-1 cursor-pointer transform -translate-x-1/2 -translate-y-1/2 hover:scale-110 transition-transform">
            <span class="material-symbols-outlined text-[14px]">hourglass_empty</span>
            <span>Lê Hoàng Long (Rảnh)</span>
        </div>
        <div
            class="absolute bottom-1/3 left-1/2 bg-surface-container-highest text-on-surface px-2 py-1 rounded-full shadow-lg font-label-sm text-label-sm flex items-center gap-1 cursor-pointer transform -translate-x-1/2 -translate-y-1/2">
            <span class="material-symbols-outlined text-[14px]">storefront</span>
            <span>Hub Phố Đi Bộ (58 đơn chờ)</span>
        </div>
    </div>
    <!-- Quick Dispatch Insights Below Map -->
    <div class="grid grid-cols-3 gap-space-sm pt-space-md text-center">
        <div class="bg-surface-container-low p-space-sm rounded-xl">
            <div class="font-headline-sm text-headline-sm text-primary font-bold">1.8 phút</div>
            <div class="font-body-sm text-body-sm text-on-surface-variant">Thời gian match đơn trung bình</div>
        </div>
        <div class="bg-surface-container-low p-space-sm rounded-xl">
            <div class="font-headline-sm text-headline-sm text-tertiary font-bold">96.8%</div>
            <div class="font-body-sm text-body-sm text-on-surface-variant">Tỷ lệ chấp thuận đơn tự động</div>
        </div>
        <div class="bg-surface-container-low p-space-sm rounded-xl">
            <div class="font-headline-sm text-headline-sm text-secondary font-bold">14.2 km/h</div>
            <div class="font-body-sm text-body-sm text-on-surface-variant">Tốc độ di chuyển giờ cao điểm</div>
        </div>
    </div>
</div>
