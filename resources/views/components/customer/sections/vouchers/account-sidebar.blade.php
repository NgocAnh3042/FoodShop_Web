<aside class="lg:col-span-4 xl:col-span-3 flex flex-col gap-space-md">
    <!-- User Profile Card -->
    <div
        class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col items-center text-center relative overflow-hidden">
        <div class="absolute -top-12 -right-12 w-28 h-28 rounded-full bg-primary/5 pointer-events-none"></div>
        <div class="relative mb-space-sm">
            <div
                class="w-20 h-20 rounded-full p-1 bg-gradient-to-tr from-secondary to-primary shadow-sm flex items-center justify-center">
                <div
                    class="w-full h-full rounded-full bg-surface-container-high flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-[44px] text-primary"
                        style="font-variation-settings: 'FILL' 1;">person</span>
                </div>
            </div>
            <span
                class="absolute bottom-0 right-0 w-6 h-6 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center text-[12px] shadow-sm ring-2 ring-surface-container-lowest">
                <span class="material-symbols-outlined text-[14px]">verified</span>
            </span>
        </div>
        <h2 class="font-headline-sm text-headline-sm text-on-surface tracking-tight">Nguyễn Hoàng Nam</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">0912 ••• 678</p>
        <!-- Tier Badge -->
        <div
            class="mt-space-sm inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant">
            <span class="material-symbols-outlined text-[16px] text-secondary">workspace_premium</span>
            <span class="font-label-sm text-label-sm font-semibold">Thành viên Foodie Bạc (Silver)</span>
        </div>
        <!-- Quick Stats Micro-bar -->
        <div class="w-full grid grid-cols-2 gap-2 mt-space-md pt-space-sm border-t border-outline-variant/30 text-left">
            <div class="flex flex-col">
                <span class="font-body-sm text-body-sm text-on-surface-variant">Điểm tích lũy</span>
                <span class="font-headline-sm text-headline-sm text-primary font-bold">1.450 pts</span>
            </div>
            <div class="flex flex-col text-right">
                <span class="font-body-sm text-body-sm text-on-surface-variant">Đã tiết kiệm</span>
                <span class="font-headline-sm text-headline-sm text-tertiary font-bold">420.000đ</span>
            </div>
        </div>
    </div>
    <!-- Sidebar Navigation -->
    <div class="bg-surface-container-lowest rounded-xl p-space-sm shadow-sm flex flex-col gap-1">
        <a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface hover:bg-surface-container transition-all group"
            href="#">
            <div class="flex items-center gap-3">
                <span
                    class="material-symbols-outlined text-on-surface-variant group-hover:text-primary transition-colors text-[22px]">person_outline</span>
                <span class="font-label-md text-label-md">Thông tin cá nhân</span>
            </div>
            <span class="material-symbols-outlined text-outline-variant text-[18px]">chevron_right</span>
        </a>
        <a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface hover:bg-surface-container transition-all group"
            href="#">
            <div class="flex items-center gap-3">
                <span
                    class="material-symbols-outlined text-on-surface-variant group-hover:text-primary transition-colors text-[22px]">receipt_long</span>
                <span class="font-label-md text-label-md">Đơn của tôi</span>
            </div>
            <span
                class="px-2 py-0.5 rounded-full bg-secondary-container/20 text-on-secondary-container font-label-sm text-label-sm font-bold">
                2 đang giao
            </span>
        </a>
        <!-- ACTIVE MENU ITEM -->
        <a class="flex items-center justify-between px-3 py-2.5 rounded-lg bg-primary text-on-primary shadow-sm font-bold transition-all"
            href="#">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-on-primary text-[22px]"
                    style="font-variation-settings: 'FILL' 1;">confirmation_number</span>
                <span class="font-label-md text-label-md">Kho voucher</span>
            </div>
            <span
                class="px-2 py-0.5 rounded-full bg-surface-container-lowest text-primary font-label-sm text-label-sm font-bold">
                5 có sẵn
            </span>
        </a>
        <a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface hover:bg-surface-container transition-all group"
            href="#">
            <div class="flex items-center gap-3">
                <span
                    class="material-symbols-outlined text-on-surface-variant group-hover:text-primary transition-colors text-[22px]">pin_drop</span>
                <span class="font-label-md text-label-md">Địa chỉ đã lưu</span>
            </div>
            <span class="material-symbols-outlined text-outline-variant text-[18px]">chevron_right</span>
        </a>
        <a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface hover:bg-surface-container transition-all group"
            href="#">
            <div class="flex items-center gap-3">
                <span
                    class="material-symbols-outlined text-on-surface-variant group-hover:text-primary transition-colors text-[22px]">favorite_border</span>
                <span class="font-label-md text-label-md">Món &amp; Quán yêu thích</span>
            </div>
            <span
                class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
                12
            </span>
        </a>
        <div class="my-1 border-t border-outline-variant/30"></div>
        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-error hover:bg-error-container/20 transition-all"
            href="#">
            <span class="material-symbols-outlined text-[22px]">logout</span>
            <span class="font-label-md text-label-md font-semibold">Đăng xuất</span>
        </a>
    </div>
    <!-- Help Widget -->
    <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col gap-2">
        <div class="flex items-center gap-2 text-primary">
            <span class="material-symbols-outlined text-[20px]">help_outline</span>
            <span class="font-label-md text-label-md font-bold">Cần hỗ trợ ưu đãi?</span>
        </div>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Liên hệ hotline CSKH hoặc tra cứu thể lệ chương
            trình đổi mã voucher thành viên.</p>
        <a class="font-label-sm text-label-sm text-primary font-bold hover:underline inline-flex items-center gap-1 mt-1"
            href="#">
            Xem điều khoản voucher
            <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
        </a>
    </div>
</aside>
