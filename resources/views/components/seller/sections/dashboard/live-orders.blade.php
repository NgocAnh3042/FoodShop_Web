<div
    class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05)] flex flex-col gap-space-md">
    <!-- Section Header with pipeline tabs -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
        <div class="flex items-center gap-space-xs">
            <div class="w-2.5 h-2.5 rounded-full bg-error animate-ping"></div>
            <h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">Đơn hàng trực tiếp</h2>
            <span
                class="px-space-xs py-0.5 rounded-md bg-primary-fixed text-on-primary-fixed-variant font-label-sm text-label-sm ml-1">Live
                POS</span>
        </div>
        <!-- Filter Tabs -->
        <div class="flex items-center gap-1 p-1 bg-surface-container-low rounded-xl overflow-x-auto">
            <button
                class="px-space-md py-1.5 rounded-lg bg-surface-container-lowest text-primary font-label-sm text-label-sm shadow-sm whitespace-nowrap flex items-center gap-1"
                type="button">
                <span>Mới nhận</span>
                <span
                    class="w-5 h-5 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-[10px]">3</span>
            </button>
            <button
                class="px-space-md py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm whitespace-nowrap flex items-center gap-1"
                type="button">
                <span>Đang nấu</span>
                <span
                    class="w-5 h-5 rounded-full bg-surface-container-highest text-on-surface flex items-center justify-center font-bold text-[10px]">5</span>
            </button>
            <button
                class="px-space-md py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm whitespace-nowrap flex items-center gap-1"
                type="button">
                <span>Chờ tài xế</span>
                <span
                    class="w-5 h-5 rounded-full bg-surface-container-highest text-on-surface flex items-center justify-center font-bold text-[10px]">4</span>
            </button>
            <button
                class="px-space-md py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm whitespace-nowrap flex items-center gap-1"
                type="button">
                <span>Đang giao</span>
                <span
                    class="w-5 h-5 rounded-full bg-surface-container-highest text-on-surface flex items-center justify-center font-bold text-[10px]">12</span>
            </button>
        </div>
    </div>
    <!-- Live Order Cards Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-space-md">
        <!-- Card 1: Vừa đặt - Cần duyệt gấp (Countdown timer) -->
        <div
            class="rounded-xl bg-surface-container-low p-space-md flex flex-col justify-between gap-space-md shadow-sm relative overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-1 bg-primary"></div>
            <div>
                <div class="flex items-center justify-between pb-space-xs">
                    <div class="flex items-center gap-space-xs">
                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold">#FH-90145</span>
                        <span
                            class="px-2 py-0.5 rounded-full bg-error text-on-error font-label-sm text-label-sm flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-on-error animate-ping"></span> Mới đặt
                        </span>
                    </div>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">1 phút trước</span>
                </div>
                <!-- Customer & Note -->
                <div
                    class="py-space-xs flex items-center justify-between text-body-sm font-body-sm text-on-surface-variant">
                    <span>Khách: <strong class="text-on-surface">Minh Tuấn</strong> (0918***122)</span>
                    <span class="text-primary font-semibold">Giao gấp 20p</span>
                </div>
                <!-- Items ordered -->
                <div
                    class="mt-space-xs py-space-sm bg-surface-container-lowest rounded-xl p-space-sm flex flex-col gap-1.5 shadow-sm">
                    <div class="flex justify-between items-start font-body-md text-body-md text-on-surface">
                        <span class="font-semibold text-primary">3x Cơm Tấm Sườn Cốt Lết</span>
                        <span>195.000đ</span>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant italic pl-4">- Thêm trứng ốp la lòng
                        đào, ít mỡ hành</p>
                    <div class="flex justify-between items-start font-body-md text-body-md text-on-surface">
                        <span class="font-semibold text-primary">2x Canh Khổ Qua Nhồi Thịt</span>
                        <span>51.000đ</span>
                    </div>
                    <div
                        class="pt-space-xs flex justify-between items-center font-label-md text-label-md text-on-surface">
                        <span class="text-on-surface-variant">Tổng tiền (Đã thanh toán ví):</span>
                        <span class="text-primary text-headline-sm font-bold">246.000đ</span>
                    </div>
                </div>
            </div>
            <!-- Actions: Countdown Accept Button -->
            <div class="flex items-center gap-space-sm pt-space-xs">
                <button
                    class="flex-1 py-space-sm px-space-sm rounded-xl bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-md shadow-primary/20 transition-all"
                    type="button">
                    <span class="material-symbols-outlined text-[18px]">check_circle</span>
                    <span>Chấp nhận (<span id="countdown">01:45</span>)</span>
                </button>
                <button
                    class="py-space-sm px-space-sm rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-error font-label-md text-label-md transition-all"
                    type="button">
                    <span class="material-symbols-outlined text-[18px]">close</span>
                </button>
            </div>
        </div>
        <!-- Card 2: Đang nấu - Chuẩn bị xong & Tài xế đang đến -->
        <div
            class="rounded-xl bg-surface-container-low p-space-md flex flex-col justify-between gap-space-md shadow-sm relative overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-1 bg-secondary-container"></div>
            <div>
                <div class="flex items-center justify-between pb-space-xs">
                    <div class="flex items-center gap-space-xs">
                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold">#FH-90142</span>
                        <span
                            class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
                            Đang nấu
                        </span>
                    </div>
                    <span class="font-label-sm text-label-sm text-secondary font-semibold">Còn 4 phút</span>
                </div>
                <div
                    class="py-space-xs flex items-center justify-between text-body-sm font-body-sm text-on-surface-variant">
                    <span>Tài xế: <strong class="text-on-surface">Trần Quốc Bảo</strong></span>
                    <span class="font-label-sm text-label-sm text-tertiary flex items-center gap-0.5">
                        <span class="material-symbols-outlined text-[16px]">moped</span> Đang đến (200m)
                    </span>
                </div>
                <!-- Items ordered -->
                <div
                    class="mt-space-xs py-space-sm bg-surface-container-lowest rounded-xl p-space-sm flex flex-col gap-1.5 shadow-sm">
                    <div class="flex justify-between items-start font-body-md text-body-md text-on-surface">
                        <span class="font-semibold text-on-surface">2x Bún Bò Huế Đặc Biệt</span>
                        <span>170.000đ</span>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant italic pl-4">- Cay vừa, lấy nhiều hành
                        hoa và bắp hoa</p>
                    <div class="flex justify-between items-start font-body-md text-body-md text-on-surface">
                        <span class="font-semibold text-on-surface">1x Bánh Bèo Chén (Khay 8)</span>
                        <span>55.000đ</span>
                    </div>
                    <div class="flex justify-between items-start font-body-md text-body-md text-on-surface">
                        <span class="font-semibold text-on-surface">2x Trà Đào Cam Sả Tươi</span>
                        <span>60.000đ</span>
                    </div>
                    <div
                        class="pt-space-xs flex justify-between items-center font-label-md text-label-md text-on-surface">
                        <span class="text-on-surface-variant">Tổng thu quán:</span>
                        <span class="text-primary text-headline-sm font-bold">285.000đ</span>
                    </div>
                </div>
            </div>
            <!-- Actions -->
            <div class="flex items-center gap-space-sm pt-space-xs">
                <button
                    class="flex-1 py-space-sm px-space-sm rounded-xl bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-md shadow-primary/20 transition-all"
                    type="button">
                    <span class="material-symbols-outlined text-[18px]">soup_kitchen</span>
                    <span>Xong món - Gọi tài xế</span>
                </button>
                <button
                    class="py-space-sm px-space-sm rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md transition-all"
                    title="In phiếu chế biến" type="button">
                    <span class="material-symbols-outlined text-[18px]">print</span>
                </button>
            </div>
        </div>
        <!-- Card 3: Đã nấu xong - Tài xế đã tới nhận -->
        <div
            class="rounded-xl bg-surface-container-low p-space-md flex flex-col justify-between gap-space-md shadow-sm relative overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-1 bg-tertiary"></div>
            <div>
                <div class="flex items-center justify-between pb-space-xs">
                    <div class="flex items-center gap-space-xs">
                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold">#FH-90138</span>
                        <span class="px-2 py-0.5 rounded-full bg-tertiary/15 text-tertiary font-label-sm text-label-sm">
                            Đã đóng gói
                        </span>
                    </div>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">Chờ giao</span>
                </div>
                <div
                    class="py-space-xs flex items-center justify-between text-body-sm font-body-sm text-on-surface-variant">
                    <span>Tài xế: <strong class="text-on-surface">Nguyễn Văn Hưng</strong></span>
                    <span
                        class="font-label-sm text-label-sm bg-tertiary/10 text-tertiary px-2 py-0.5 rounded font-mono font-bold">59E1-432.19</span>
                </div>
                <!-- Items ordered -->
                <div
                    class="mt-space-xs py-space-sm bg-surface-container-lowest rounded-xl p-space-sm flex flex-col gap-1.5 shadow-sm">
                    <div class="flex justify-between items-start font-body-md text-body-md text-on-surface">
                        <span class="font-semibold text-on-surface">1x Set Nem Lụi Cố Đô (10 cây)</span>
                        <span>160.000đ</span>
                    </div>
                    <div class="flex justify-between items-start font-body-md text-body-md text-on-surface">
                        <span class="font-semibold text-on-surface">2x Bún Thịt Nướng Chả Ram</span>
                        <span>160.000đ</span>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant italic pl-4">- Để riêng nước mắm ớt tỏi
                        và đậu phộng rang</p>
                    <div
                        class="pt-space-xs flex justify-between items-center font-label-md text-label-md text-on-surface">
                        <span class="text-on-surface-variant">Tổng tiền:</span>
                        <span class="text-primary text-headline-sm font-bold">320.000đ</span>
                    </div>
                </div>
            </div>
            <!-- Actions -->
            <div class="flex items-center gap-space-sm pt-space-xs">
                <button
                    class="flex-1 py-space-sm px-space-sm rounded-xl bg-tertiary hover:bg-tertiary-container text-on-tertiary font-label-md text-label-md flex items-center justify-center gap-1.5 shadow-md shadow-tertiary/20 transition-all"
                    type="button">
                    <span class="material-symbols-outlined text-[18px]">sports_motorsports</span>
                    <span>Giao hàng cho Shipper</span>
                </button>
                <button
                    class="py-space-sm px-space-sm rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md transition-all"
                    title="Xem vị trí đơn" type="button">
                    <span class="material-symbols-outlined text-[18px]">navigation</span>
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        (function() {
            let secondsLeft = 105; // 01:45
            const countdownEl = document.getElementById('countdown');
            if (!countdownEl) return;

            const interval = setInterval(function() {
                if (secondsLeft <= 0) {
                    clearInterval(interval);
                    countdownEl.textContent = '00:00';
                    return;
                }
                secondsLeft--;
                const mins = Math.floor(secondsLeft / 60);
                const secs = secondsLeft % 60;
                countdownEl.textContent = (mins < 10 ? '0' : '') + mins + ':' + (secs < 10 ? '0' : '') + secs;
            }, 1000);
        })();
    </script>
@endpush
