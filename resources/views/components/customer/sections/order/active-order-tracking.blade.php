<section class="bg-surface-container-lowest rounded-xl shadow-md overflow-hidden relative">
    <!-- Top banner strip -->
    <div
        class="bg-gradient-to-r from-primary via-primary-container to-secondary-container px-space-lg py-space-md text-on-primary flex flex-wrap items-center justify-between gap-space-md">
        <div class="flex items-center gap-space-md">
            <div
                class="w-10 h-10 rounded-full bg-surface-container-lowest/25 backdrop-blur-sm flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-on-primary text-[24px] animate-bounce">delivery_dining</span>
            </div>
            <div>
                <div class="flex items-center gap-space-sm flex-wrap">
                    <span class="font-headline-sm text-headline-sm font-bold tracking-tight">Đơn hàng đang trên đường
                        giao</span>
                    <span
                        class="bg-surface-container-lowest/25 text-on-primary font-label-sm text-label-sm px-2.5 py-0.5 rounded-full uppercase tracking-wider font-extrabold">Hỏa
                        Tốc 20p</span>
                </div>
                <p class="font-body-sm text-body-sm text-on-primary/90 mt-0.5">
                    Mã đơn: <strong class="tracking-wide">#FH-89421</strong> • Đặt lúc 11:45 • Quán: <strong>Bếp Huế Cố
                        Đô - Hai Bà Trưng</strong>
                </p>
            </div>
        </div>
        <div
            class="flex items-center gap-space-md bg-surface-container-lowest/15 backdrop-blur-md px-space-md py-1.5 rounded-xl">
            <div class="text-right">
                <div class="font-label-sm text-label-sm uppercase tracking-wider opacity-85">Dự kiến giao lúc</div>
                <div class="font-headline-md text-headline-md font-extrabold">12:15</div>
            </div>
            <div class="h-8 w-px bg-on-primary/30"></div>
            <div class="flex flex-col items-center">
                <span class="font-label-sm text-label-sm opacity-90">Còn khoảng</span>
                <span class="font-headline-sm text-headline-sm font-bold text-secondary-fixed">~12 phút</span>
            </div>
        </div>
    </div>

    <div class="p-space-lg flex flex-col gap-space-lg">
        <!-- 4-Stage Progress Stepper -->
        <div class="bg-surface-container-low rounded-xl p-space-md lg:p-space-lg">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-space-md relative">
                <div class="flex md:flex-col items-center md:items-start gap-space-sm relative">
                    <div class="flex items-center gap-space-sm md:w-full">
                        <div
                            class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center shrink-0 shadow-sm">
                            <span class="material-symbols-outlined text-[20px]">check</span>
                        </div>
                        <div class="hidden md:block flex-1 h-1.5 bg-primary rounded-full"></div>
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="font-label-md text-label-md font-bold text-primary">1. Đã nhận đơn</span>
                        <span class="font-body-sm text-on-surface-variant">11:45 • Hệ thống xác nhận</span>
                    </div>
                </div>
                <div class="flex md:flex-col items-center md:items-start gap-space-sm relative">
                    <div class="flex items-center gap-space-sm md:w-full">
                        <div
                            class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center shrink-0 shadow-sm">
                            <span class="material-symbols-outlined text-[20px]">restaurant</span>
                        </div>
                        <div class="hidden md:block flex-1 h-1.5 bg-primary rounded-full"></div>
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="font-label-md text-label-md font-bold text-primary">2. Bếp nấu xong</span>
                        <span class="font-body-sm text-on-surface-variant">11:58 • Đóng gói kỹ lưỡng</span>
                    </div>
                </div>
                <div class="flex md:flex-col items-center md:items-start gap-space-sm relative">
                    <div class="flex items-center gap-space-sm md:w-full">
                        <div
                            class="w-10 h-10 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center shrink-0 shadow-md ring-4 ring-secondary-container/30 animate-pulse">
                            <span class="material-symbols-outlined text-[22px]">two_wheeler</span>
                        </div>
                        <div
                            class="hidden md:block flex-1 h-1.5 bg-surface-container-highest rounded-full overflow-hidden">
                            <div class="h-full bg-secondary-container w-2/3 animate-pulse"></div>
                        </div>
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="font-label-md text-label-md font-extrabold text-secondary">3. Đang giao hàng</span>
                        <span class="font-body-sm text-on-surface font-semibold">Tài xế cách bạn 1.2km</span>
                    </div>
                </div>
                <div class="flex md:flex-col items-center md:items-start gap-space-sm relative opacity-60">
                    <div class="flex items-center gap-space-sm md:w-full">
                        <div
                            class="w-10 h-10 rounded-full bg-surface-container-highest text-on-surface-variant flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-[20px]">home_pin</span>
                        </div>
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="font-label-md font-semibold text-on-surface-variant">4. Đã giao hàng</span>
                        <span class="font-body-sm text-outline">Dự kiến 12:15</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Grid: Map & Order Details -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
            <div class="lg:col-span-7 flex flex-col gap-space-md">
                <div class="relative w-full h-72 rounded-xl overflow-hidden shadow-inner bg-surface-container">
                    <div class="absolute inset-0 bg-cover bg-center"
                        style="background-image: url('https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?auto=format&fit=crop&q=80&w=800')">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-inverse-surface/80 via-transparent to-transparent">
                        </div>
                        <div
                            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-col items-center">
                            <div
                                class="bg-primary text-on-primary px-2.5 py-1 rounded-full font-label-sm font-bold shadow-lg flex items-center gap-1 mb-1">
                                <span class="material-symbols-outlined text-[14px]">speed</span> 32 km/h
                            </div>
                            <div
                                class="w-11 h-11 rounded-full bg-secondary-container text-on-secondary-container shadow-xl flex items-center justify-center animate-bounce">
                                <span class="material-symbols-outlined text-[24px]">sports_motorsports</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute top-3 right-3 bg-surface-container-lowest/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-1.5 shadow-sm">
                        <span class="w-2.5 h-2.5 rounded-full bg-tertiary animate-ping"></span>
                        <span class="font-label-sm font-extrabold text-tertiary">GPS Trực Tiếp</span>
                    </div>
                </div>

                <!-- Driver Card -->
                <div
                    class="p-space-md bg-surface-container-low rounded-xl flex flex-col sm:flex-row items-center justify-between gap-space-md">
                    <div class="flex items-center gap-space-md w-full sm:w-auto">
                        <img class="w-14 h-14 rounded-full object-cover shadow-sm ring-2 ring-primary/20"
                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=200"
                            alt="Shipper" />
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="font-headline-sm font-bold text-on-surface">Trần Quốc Bảo</span>
                                <span
                                    class="font-label-sm bg-secondary-fixed text-on-secondary-fixed px-2 py-0.5 rounded-full font-bold">4.9
                                    ★</span>
                            </div>
                            <span class="font-body-sm text-on-surface-variant mt-0.5">Air Blade • Biển số: <strong
                                    class="text-on-surface">59P1-882.34</strong></span>
                        </div>
                    </div>
                    <div class="flex items-center gap-space-xs w-full sm:w-auto justify-end">
                        <button
                            class="flex-1 sm:flex-initial flex items-center justify-center gap-1.5 px-space-md py-2 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md transition-colors"
                            type="button">
                            <span class="material-symbols-outlined text-[18px] text-tertiary">chat</span> Nhắn tin
                        </button>
                        <a href="tel:0901234567"
                            class="flex-1 sm:flex-initial flex items-center justify-center gap-1.5 px-space-md py-2 rounded-full bg-primary text-on-primary hover:bg-primary-container font-label-md transition-colors">
                            <span class="material-symbols-outlined text-[18px]">phone</span> Gọi tài xế
                        </a>
                    </div>
                </div>
            </div>

            <!-- Order Summary Items -->
            <div
                class="lg:col-span-5 flex flex-col justify-between bg-surface-container-low rounded-xl p-space-md lg:p-space-lg">
                <div class="flex flex-col gap-space-md">
                    <div
                        class="flex items-center justify-between pb-space-sm border-b border-surface-container-highest">
                        <span class="font-headline-sm font-bold text-on-surface">Món ăn trong đơn (3 món)</span>
                        <span
                            class="font-label-sm text-tertiary font-bold bg-tertiary-fixed/30 px-2.5 py-1 rounded-full">Đã
                            thanh toán MoMo</span>
                    </div>
                    <div class="flex flex-col gap-space-sm font-body-sm">
                        <div class="flex justify-between"><span>1x Bún Bò Huế Đặc Biệt</span><span
                                class="font-bold">75.000đ</span></div>
                        <div class="flex justify-between"><span>1x Bánh Bèo Chén Tôm Cháy</span><span
                                class="font-bold">45.000đ</span></div>
                        <div class="flex justify-between"><span>2x Trà Đào Cam Sả Tươi</span><span
                                class="font-bold">64.000đ</span></div>
                    </div>
                    <div
                        class="pt-space-xs flex flex-col gap-1 text-on-surface-variant font-body-sm border-t border-surface-container-highest">
                        <div class="flex justify-between"><span>Tạm tính</span><span>184.000đ</span></div>
                        <div class="flex justify-between"><span>Phí giao hàng</span><span>18.000đ</span></div>
                        <div class="flex justify-between text-tertiary font-semibold"><span>Voucher giảm
                                giá</span><span>-24.880đ</span></div>
                        <div
                            class="flex justify-between pt-space-xs font-headline-sm font-extrabold text-primary border-t border-surface-container-highest">
                            <span>Tổng thanh toán</span><span>177.120đ</span>
                        </div>
                    </div>
                </div>
                <div class="pt-space-md flex items-center gap-space-sm">
                    <button
                        class="flex-1 py-2.5 px-space-md rounded-full bg-surface-container-highest hover:bg-surface-variant text-on-surface font-label-md font-semibold"
                        type="button">Xem biên nhận</button>
                    <button
                        class="flex-1 py-2.5 px-space-md rounded-full bg-surface-container hover:bg-surface-container-high text-primary font-label-md font-bold flex items-center justify-center gap-1"
                        type="button">
                        <span class="material-symbols-outlined text-[18px]">support_agent</span> Hỗ trợ đơn
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
