<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md" id="tab-content-shop">
    <!-- TICKET CARD 1: Bếp Huế Cố Đô Giảm 30k -->
    <x-customer.cards.wallet-voucher-card scope="Chỉ dùng tại Bếp Huế Cố Đô" scope-icon="storefront"
        scope-class="bg-primary/10 text-primary" tag="Từ mã giới thiệu quán"
        tag-class="bg-tertiary/10 text-tertiary font-semibold" title="GIẢM 30.000đ"
        title-class="font-display-sm text-display-sm text-primary" min-order="Đơn tối thiểu 80.000đ" icon="ramen_dining"
        icon-class="bg-surface-container-high text-primary" description="Áp dụng cho toàn bộ thực đơn Bếp Huế Cố Đô"
        time-icon="timer" time-icon-class="text-secondary" time-left="Còn 6 ngày" time-class="text-primary"
        expiry="Hết hạn: 23:59 28/10" code="BEPHUE30" />
    <!-- TICKET CARD 2: Bếp Huế Cố Đô Freeship -->
    <x-customer.cards.wallet-voucher-card scope="Chỉ dùng tại Bếp Huế Cố Đô" scope-icon="storefront"
        scope-class="bg-primary/10 text-primary" tag="Ưu đãi vận chuyển"
        tag-class="bg-secondary-container/20 text-on-secondary-container font-semibold" title="FREESHIP 15.000đ"
        title-class="font-display-sm text-display-sm text-tertiary" min-order="Đơn tối thiểu 60.000đ" icon="two_wheeler"
        icon-class="bg-tertiary/10 text-tertiary" description="Hỗ trợ tối đa 15.000đ phí giao hàng tận nơi"
        time-icon="timer" time-icon-class="text-secondary" time-left="Còn 12 ngày" time-class="text-tertiary"
        expiry="Hết hạn: 03/11" code="FREESHIPHUE" />
    <!-- TICKET CARD 3: Bánh Mì Huỳnh Hoa Giảm 20k -->
    <x-customer.cards.wallet-voucher-card scope="Chỉ dùng tại Bánh Mì Huỳnh Hoa" scope-icon="storefront"
        scope-class="bg-secondary/15 text-secondary" tag="Sắp hết hạn"
        tag-class="bg-error-container text-on-error-container font-bold" title="GIẢM 20.000đ"
        title-class="font-display-sm text-display-sm text-primary" min-order="Đơn tối thiểu 70.000đ"
        icon="bakery_dining" icon-class="bg-surface-container-high text-secondary"
        description="Ưu đãi tri ân khách hàng thân thiết đặt món buổi sáng" time-icon="alarm"
        time-icon-class="text-error" time-left="Còn 3 ngày" time-class="text-error" expiry="Hết hạn: 25/10"
        code="HUYNHHOA20" />
    <!-- In-grid Banner Prompt -->
    <div
        class="rounded-2xl bg-surface-container-low p-space-md flex flex-col justify-center items-center text-center gap-2 border border-dashed border-outline-variant/60">
        <div
            class="w-12 h-12 rounded-full bg-surface-container-lowest flex items-center justify-center text-primary shadow-sm">
            <span class="material-symbols-outlined text-[24px]">qr_code_scanner</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-on-surface">Bạn có mã voucher từ hóa đơn?</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant max-w-xs">
            Quét mã QR tại quán hoặc nhập mã code trên đầu trang để nhận thêm ưu đãi độc quyền.
        </p>
        <button
            class="mt-1 font-label-md text-label-md text-primary font-bold hover:underline inline-flex items-center gap-1"
            onclick="document.getElementById('voucherInput').focus()">
            <span>Nhập mã ngay</span>
            <span class="material-symbols-outlined text-[16px]">arrow_upward</span>
        </button>
    </div>
</div>
