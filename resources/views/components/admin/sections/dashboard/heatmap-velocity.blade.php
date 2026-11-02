<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
    <!-- Live Dispatch Heatmap & Regional Load (7 Columns) -->
    <div class="lg:col-span-7 bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
        <div class="flex items-center justify-between flex-wrap gap-space-sm">
            <div class="flex flex-col">
                <div class="flex items-center gap-space-xs">
                    <span class="material-symbols-outlined text-primary text-[20px]">fmd_good</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Bản đồ nhiệt tải trọng điều
                        phối (Live Heatmap)</h3>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Phân bố nhu cầu gọi món vs mật độ phương
                    tiện theo thời gian thực</p>
            </div>
            <div class="flex items-center gap-space-xs bg-surface-container-low p-1 rounded-lg">
                <button
                    class="px-3 py-1 bg-surface-container-lowest text-primary shadow-sm rounded-md font-label-sm text-label-sm font-bold">TP.
                    Hồ Chí Minh</button>
                <button
                    class="px-3 py-1 text-on-surface-variant hover:text-on-surface rounded-md font-label-sm text-label-sm">Hà
                    Nội</button>
                <button
                    class="px-3 py-1 text-on-surface-variant hover:text-on-surface rounded-md font-label-sm text-label-sm">Đà
                    Nẵng</button>
            </div>
        </div>
        <!-- Simulated Interactive Map Component -->
        <div
            class="relative w-full h-80 rounded-xl overflow-hidden bg-surface-container flex items-center justify-center shadow-inner">
            <div class="w-full h-full bg-cover bg-center" data-location="District 1, Ho Chi Minh City, Vietnam"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDytCWpD0k9TDjp0wJefPH5BNGyEKQHzHvJfY731vHescpS3jyK8LBkQrRWZoYQ7Fcn6zrqbuDTUfA3aCLck9BP1KTTaabhboM1UueBmAZZz1ZSSCykKrltgaoZMedlmszNFovMsmavInkmojmvQ2STW89YezSdxp9wN3t6TEzUSlXrxn6zFDuk9dqPwb52QhMZKSB3CbHherlHIGhx4MpZjaZ7otOXKBTXEXKGnVT1')">
            </div>
            <!-- Heatmap Overlay Glows & Pins -->
            <div
                class="absolute inset-0 bg-gradient-to-t from-surface-dim/80 via-transparent to-transparent pointer-events-none">
            </div>
            <!-- Hotspot Surge Zone 1: Binh Thanh -->
            <div class="absolute top-1/4 left-1/3 flex flex-col items-center group cursor-pointer">
                <div class="relative">
                    <div class="w-12 h-12 rounded-full bg-error/20 animate-ping absolute -inset-2"></div>
                    <div
                        class="w-8 h-8 rounded-full bg-error text-on-error flex items-center justify-center font-label-sm text-label-sm font-bold shadow-lg">
                        1.4x
                    </div>
                </div>
                <div
                    class="mt-1 px-2 py-0.5 rounded bg-surface-container-lowest/95 backdrop-blur shadow-sm text-on-surface font-label-sm text-label-sm font-bold whitespace-nowrap">
                    Bình Thạnh: 820 đơn/h (Thiếu 65 xế)
                </div>
            </div>
            <!-- Hotspot 2: Quan 1 -->
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-col items-center cursor-pointer">
                <div class="relative">
                    <div class="w-9 h-9 rounded-full bg-primary/25 animate-pulse absolute -inset-1.5"></div>
                    <div
                        class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold shadow-md">
                        ★
                    </div>
                </div>
                <div
                    class="mt-1 px-2 py-0.5 rounded bg-surface-container-lowest/95 backdrop-blur shadow-sm text-on-surface font-label-sm text-label-sm font-bold whitespace-nowrap">
                    Quận 1: 1.450 đơn/h (Cân bằng)
                </div>
            </div>
            <!-- Hotspot 3: Quan 7 / Phu My Hung -->
            <div class="absolute bottom-10 right-1/4 flex flex-col items-center cursor-pointer">
                <div
                    class="w-7 h-7 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-label-sm text-label-sm font-bold shadow-md">
                    !
                </div>
                <div
                    class="mt-1 px-2 py-0.5 rounded bg-surface-container-lowest/95 backdrop-blur shadow-sm text-on-surface font-label-sm text-label-sm font-bold whitespace-nowrap">
                    Quận 7: 640 đơn/h (Mưa ngập trễ giao)
                </div>
            </div>
            <!-- Floating Legend inside Map -->
            <div
                class="absolute bottom-3 left-3 p-space-sm bg-surface-container-lowest/90 backdrop-blur-md rounded-lg shadow-sm flex items-center gap-space-md">
                <div class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant">
                    <span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span>
                    <span>Bình thường</span>
                </div>
                <div class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant">
                    <span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
                    <span>Tải cao (>80%)</span>
                </div>
                <div class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant">
                    <span class="w-2.5 h-2.5 rounded-full bg-error"></span>
                    <span>Surge Zone (Thiếu tài xế)</span>
                </div>
            </div>
        </div>
        <!-- Regional Quick Status Bar -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-space-sm pt-space-xs">
            <div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col">
                <div class="flex items-center justify-between">
                    <span class="font-label-sm text-label-sm text-on-surface font-semibold">Quận 1 (TP.HCM)</span>
                    <span class="text-tertiary font-label-sm text-label-sm">Ổn định</span>
                </div>
                <span class="font-headline-sm text-headline-sm text-on-surface font-bold mt-1">11.420 <span
                        class="font-body-sm text-body-sm font-normal text-on-surface-variant">đơn</span></span>
                <div class="w-full bg-surface-container-high h-1.5 rounded-full mt-2 overflow-hidden">
                    <div class="bg-tertiary h-full rounded-full" style="width: 78%"></div>
                </div>
            </div>
            <div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col">
                <div class="flex items-center justify-between">
                    <span class="font-label-sm text-label-sm text-on-surface font-semibold">Bình Thạnh</span>
                    <span class="text-error font-label-sm text-label-sm font-bold">Surge 1.4x</span>
                </div>
                <span class="font-headline-sm text-headline-sm text-error font-bold mt-1">6.850 <span
                        class="font-body-sm text-body-sm font-normal text-on-surface-variant">đơn</span></span>
                <div class="w-full bg-surface-container-high h-1.5 rounded-full mt-2 overflow-hidden">
                    <div class="bg-error h-full rounded-full" style="width: 95%"></div>
                </div>
            </div>
            <div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col">
                <div class="flex items-center justify-between">
                    <span class="font-label-sm text-label-sm text-on-surface font-semibold">Cầu Giấy (HN)</span>
                    <span class="text-tertiary font-label-sm text-label-sm">Ổn định</span>
                </div>
                <span class="font-headline-sm text-headline-sm text-on-surface font-bold mt-1">7.920 <span
                        class="font-body-sm text-body-sm font-normal text-on-surface-variant">đơn</span></span>
                <div class="w-full bg-surface-container-high h-1.5 rounded-full mt-2 overflow-hidden">
                    <div class="bg-tertiary h-full rounded-full" style="width: 72%"></div>
                </div>
            </div>
            <div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col">
                <div class="flex items-center justify-between">
                    <span class="font-label-sm text-label-sm text-on-surface font-semibold">Hoàn Kiếm (HN)</span>
                    <span class="text-secondary font-label-sm text-label-sm">Bận</span>
                </div>
                <span class="font-headline-sm text-headline-sm text-on-surface font-bold mt-1">4.290 <span
                        class="font-body-sm text-body-sm font-normal text-on-surface-variant">đơn</span></span>
                <div class="w-full bg-surface-container-high h-1.5 rounded-full mt-2 overflow-hidden">
                    <div class="bg-secondary h-full rounded-full" style="width: 86%"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Order Velocity Curve Chart (5 Columns) -->
    <div
        class="lg:col-span-5 bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between">
        <div class="flex items-center justify-between">
            <div class="flex flex-col">
                <div class="flex items-center gap-space-xs">
                    <span class="material-symbols-outlined text-primary text-[20px]">show_chart</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Nhịp độ Đơn hàng theo Giờ
                    </h3>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant">So sánh thực tế hôm nay vs Tuần trước (T7)
                </p>
            </div>
            <span
                class="px-2 py-1 rounded bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm font-bold">Cao
                điểm Trưa: 11h30-13h00</span>
        </div>
        <!-- SVG Line Curve Graphic -->
        <div class="w-full my-space-md">
            <div class="relative w-full h-56">
                <svg class="w-full h-full" preserveaspectratio="none" viewbox="0 0 400 160">
                    <defs>
                        <lineargradient id="velocityToday" x1="0" x2="0" y1="0" y2="1">
                            <stop offset="0%" stop-color="#cc4900" stop-opacity="0.35"></stop>
                            <stop offset="100%" stop-color="#cc4900" stop-opacity="0.0"></stop>
                        </lineargradient>
                    </defs>
                    <!-- Horizontal Grid Lines -->
                    <line stroke="#f0e6e0" stroke-dasharray="3 3" stroke-width="1" x1="0" x2="400"
                        y1="40" y2="40"></line>
                    <line stroke="#f0e6e0" stroke-dasharray="3 3" stroke-width="1" x1="0" x2="400"
                        y1="80" y2="80"></line>
                    <line stroke="#f0e6e0" stroke-dasharray="3 3" stroke-width="1" x1="0" x2="400"
                        y1="120" y2="120"></line>
                    <!-- Last Week Line (Dashed) -->
                    <path d="M 0 135 Q 60 130, 100 115 T 180 30 T 260 90 T 330 45 T 400 100" fill="none"
                        opacity="0.6" stroke="#8e7166" stroke-dasharray="4 4" stroke-width="2"></path>
                    <!-- Today Gradient Fill Area -->
                    <path d="M 0 140 Q 60 135, 100 105 T 180 18 T 260 75 T 310 25 L 310 160 L 0 160 Z"
                        fill="url(#velocityToday)"></path>
                    <!-- Today Actual Line -->
                    <path d="M 0 140 Q 60 135, 100 105 T 180 18 T 260 75 T 310 25" fill="none" stroke="#a33900"
                        stroke-linecap="round" stroke-width="3.5"></path>
                    <!-- Current Live Time Beacon at x=310 (Approx 14:15) -->
                    <circle class="animate-pulse" cx="310" cy="25" fill="#a33900" r="5"></circle>
                    <circle cx="310" cy="25" fill="none" opacity="0.75" r="9" stroke="#a33900"
                        stroke-width="1.5"></circle>
                    <line stroke="#cc4900" stroke-dasharray="2 2" stroke-width="1.5" x1="310" x2="310"
                        y1="0" y2="160"></line>
                </svg>
            </div>
            <!-- Time Axis -->
            <div class="flex justify-between text-on-surface-variant font-label-sm text-label-sm pt-2">
                <span>07:00</span>
                <span>09:00</span>
                <span>11:30 (Đỉnh trưa)</span>
                <span>14:00 (Hiện tại)</span>
                <span>18:30 (Đỉnh tối)</span>
                <span>22:00</span>
            </div>
        </div>
        <div class="p-space-sm rounded-lg bg-surface-container-low flex items-center justify-between">
            <div class="flex items-center gap-space-md">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-primary"></span>
                    <span class="font-label-sm text-label-sm text-on-surface">Hôm nay (32.480)</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-1 rounded bg-outline opacity-60"></span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">T7 tuần trước (28.450)</span>
                </div>
            </div>
            <span class="text-tertiary font-label-sm text-label-sm font-bold flex items-center gap-0.5">
                <span class="material-symbols-outlined text-[14px]">arrow_upward</span> +14.1% Volume
            </span>
        </div>
    </div>
</div>
