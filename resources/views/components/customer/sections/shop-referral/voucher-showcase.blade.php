<section class="max-w-7xl mx-auto px-gutter py-space-xl w-full">
    <!-- State Switcher (Toggle between Guest & Logged In) -->
    <div class="flex flex-col items-center justify-center gap-3 mb-space-xl">
        <div class="bg-surface-container p-1 rounded-full flex items-center shadow-inner">
            <button
                class="px-space-md py-2 rounded-full font-label-md text-label-md transition-all flex items-center gap-1.5 bg-primary text-on-primary shadow-sm"
                id="btn-guest-tab" onclick="setVoucherState('guest')" type="button">
                <span class="material-symbols-outlined text-[18px]">person_add</span>
                <span>Khách mới (Chưa kích hoạt)</span>
            </button>
            <button
                class="px-space-md py-2 rounded-full font-label-md text-label-md transition-all flex items-center gap-1.5 text-on-surface-variant hover:text-on-surface"
                id="btn-logged-tab" onclick="setVoucherState('logged-in')" type="button">
                <span class="material-symbols-outlined text-[18px]">account_circle</span>
                <span>Đã có tài khoản FoodHub</span>
            </button>
        </div>
        <p class="font-body-sm text-body-sm text-outline flex items-center gap-1">
            <span class="material-symbols-outlined text-[15px]">info</span>
            Nhấn chuyển đổi trạng thái để xem trải nghiệm thực tế của khách hàng
        </p>
    </div>
    <!-- Active Toast Banner (Visible only in Logged-In State) -->
    <div class="hidden max-w-3xl mx-auto mb-space-lg" id="logged-toast">
        <div
            class="rounded-2xl bg-tertiary-fixed-dim/30 p-space-md flex items-start gap-space-sm shadow-md animate-fade-in">
            <span class="material-symbols-outlined text-tertiary text-[26px] shrink-0"
                style="font-variation-settings: 'FILL' 1;">check_circle</span>
            <div class="flex-1">
                <p class="font-headline-sm text-headline-sm text-on-tertiary-fixed font-bold">
                    Đã lưu 3 voucher vào ví quà tặng của bạn thành công!
                </p>
                <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">
                    Mã đã được tự động liên kết với số điện thoại của bạn. Bạn có thể chọn món bên dưới và voucher sẽ
                    được tự động kích hoạt tại bước thanh toán.
                </p>
            </div>
        </div>
    </div>
    <!-- 3 Perforated Ticket Vouchers -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-space-lg items-stretch">
        <!-- Voucher 1 -->
        <x-customer.cards.welcome-voucher-card bar-class="from-primary to-primary-container" badge="Độc quyền bạn mới"
            badge-class="bg-primary-fixed text-on-primary-fixed" icon="local_fire_department" icon-class="text-primary"
            eyebrow="Ưu đãi món ăn" title="GIẢM 30.000đ" title-class="text-primary" subtitle="Đơn đầu tiên từ 80.000đ"
            description="Áp dụng trọn vẹn cho toàn bộ menu món Huế chính thống tại Bếp Huế Cố Đô." meta-icon="event"
            code="Mã: BEPHUE30" code-class="text-primary" status="Sẵn sàng áp dụng" status-icon="check_circle"
            status-icon-class="text-tertiary" tag="Quét là có" tag-class="text-primary">
            <x-slot:meta>Hạn: <strong>14 ngày</strong> từ kích hoạt</x-slot:meta>
        </x-customer.cards.welcome-voucher-card>
        <!-- Voucher 2 -->
        <x-customer.cards.welcome-voucher-card bar-class="from-secondary-container to-secondary"
            badge="Miễn phí giao tận nơi" badge-class="bg-secondary-fixed text-on-secondary-fixed" icon="two_wheeler"
            icon-class="text-secondary" eyebrow="Ưu đãi vận chuyển" title="FREESHIP 3 ĐƠN" title-class="text-secondary"
            subtitle="Giảm tối đa 15.000đ / đơn"
            description="Tài xế giao hỏa tốc bằng túi giữ nhiệt chuẩn FoodHub, bảo đảm món ăn nóng hổi."
            meta-icon="event" code="Mã: FREESHIP3" code-class="text-secondary" status="3 lượt dùng"
            status-icon="check_circle" status-icon-class="text-tertiary" tag="Tự cộng dồn" tag-class="text-secondary">
            <x-slot:meta>Hạn: <strong>14 ngày</strong> từ kích hoạt</x-slot:meta>
        </x-customer.cards.welcome-voucher-card>
        <!-- Voucher 3 -->
        <x-customer.cards.welcome-voucher-card bar-class="from-tertiary to-tertiary-container" badge="Quà quán gửi tặng"
            badge-class="bg-tertiary-fixed text-on-tertiary-fixed" icon="cake" icon-class="text-tertiary"
            eyebrow="Món tặng kèm" title="TẶNG 1 TRÁNG MIỆNG" title-class="text-tertiary"
            subtitle="Chè Hạt Sen hoặc Bánh Bèo Chén"
            description="Món tráng miệng thủ công chuẩn vị cố đô trứ danh nấu từ hạt sen hồ Tịnh Tâm." meta-icon="event"
            code="Mã: QUABANGOP" code-class="text-tertiary" status="Trị giá 28.000đ" status-icon="check_circle"
            status-icon-class="text-tertiary" tag="Tặng tự động" tag-class="text-tertiary">
            <x-slot:meta>Hạn: <strong>14 ngày</strong> từ kích hoạt</x-slot:meta>
        </x-customer.cards.welcome-voucher-card>
    </div>
    <!-- Dynamic CTA Area based on State -->
    <div class="mt-space-xl max-w-xl mx-auto flex flex-col items-center justify-center text-center">
        <!-- Guest Action Block -->
        <div class="w-full flex flex-col items-center gap-space-sm" id="cta-guest-block">
            <button
                class="w-full sm:w-auto px-10 py-4 rounded-full bg-primary text-on-primary font-headline-sm text-headline-sm hover:bg-primary-container shadow-xl shadow-primary/25 transition-all flex items-center justify-center gap-3 cursor-pointer transform hover:scale-[1.02]"
                onclick="claimVouchersModal()">
                <span>Nhận trọn bộ 3 quà tặng &amp; Đăng ký ngay</span>
                <span class="text-xl">🎁</span>
            </button>
            <div class="flex items-center gap-2 pt-1 font-body-md text-body-md text-on-surface-variant">
                <span>Đã có tài khoản?</span>
                <button class="text-primary font-bold hover:underline" onclick="setVoucherState('logged-in')"
                    type="button">
                    Đăng nhập để nhận ngay
                </button>
            </div>
        </div>
        <!-- Logged In Action Block -->
        <div class="hidden w-full flex flex-col items-center gap-space-sm" id="cta-logged-block">
            <div
                class="w-full p-space-md rounded-2xl bg-surface-container flex flex-col sm:flex-row items-center justify-between gap-space-md">
                <div class="flex items-center gap-3 text-left">
                    <div
                        class="w-12 h-12 rounded-full bg-tertiary/10 text-tertiary flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[24px]">verified</span>
                    </div>
                    <div>
                        <p class="font-label-lg text-label-lg text-on-surface font-bold">Gói voucher đã nằm trong ví của
                            bạn</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Chọn món bên dưới để thưởng thức
                            ngay!</p>
                    </div>
                </div>
                <a class="px-space-lg py-3 rounded-full bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container shadow-md transition-all shrink-0 flex items-center gap-2"
                    href="#signature-dishes">
                    <span>Đặt món ngay</span>
                    <span class="material-symbols-outlined text-[18px]">arrow_downward</span>
                </a>
            </div>
        </div>
    </div>
</section>
