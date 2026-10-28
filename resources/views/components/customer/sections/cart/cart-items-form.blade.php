<div class="lg:col-span-7 flex flex-col gap-space-xl">
    <!-- SECTION 1: Cart Items -->
    <div
        class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-lg relative overflow-hidden">
        <div class="flex items-center justify-between pb-space-xs">
            <div class="flex items-center gap-space-sm">
                <span class="material-symbols-outlined text-primary text-[26px]">restaurant_menu</span>
                <div>
                    <h2 class="font-headline-md text-on-surface">Món đã chọn</h2>
                    <p class="font-body-sm text-on-surface-variant">Từ quán: <strong class="text-on-surface">Bếp Huế Cố Đô
                            - Chi nhánh Hai Bà Trưng</strong></p>
                </div>
            </div>
            <button
                class="text-on-surface-variant hover:text-primary font-label-sm transition-colors flex items-center gap-1"
                type="button">
                <span class="material-symbols-outlined text-[16px]">add_circle</span> Thêm món khác
            </button>
        </div>

        <!-- Items Stack -->
        <div class="flex flex-col gap-space-md" id="cart-item-list">
            <!-- Item 1 -->
            <div
                class="flex items-start justify-between gap-space-md p-space-sm bg-surface rounded-xl hover:bg-surface-container-low transition-colors">
                <div class="flex items-start gap-space-md flex-1 min-w-0">
                    <img class="w-20 h-20 rounded-lg object-cover shrink-0"
                        src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&q=80&w=200"
                        alt="Bún bò" />
                    <div class="flex flex-col min-w-0 flex-1">
                        <h3 class="font-headline-sm text-on-surface truncate">Bún Bò Huế Đặc Biệt</h3>
                        <p class="font-body-sm text-on-surface-variant italic truncate mt-0.5">Ít ớt cay, nhiều rau sống
                            bắp chuối</p>
                        <span class="font-label-md text-primary font-bold mt-1">75.000đ</span>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-space-xs shrink-0 self-center">
                    <div class="flex items-center bg-surface-container-highest rounded-full px-1 py-0.5">
                        <button
                            class="w-7 h-7 rounded-full flex items-center justify-center text-on-surface hover:bg-surface-container-lowest qty-minus"
                            type="button"><span class="material-symbols-outlined text-[16px]">remove</span></button>
                        <span class="w-7 text-center font-label-md text-on-surface font-bold qty-value">1</span>
                        <button
                            class="w-7 h-7 rounded-full flex items-center justify-center text-on-surface hover:bg-surface-container-lowest qty-plus"
                            type="button"><span class="material-symbols-outlined text-[16px]">add</span></button>
                    </div>
                    <button class="text-on-surface-variant hover:text-error transition-colors p-1" type="button"><span
                            class="material-symbols-outlined text-[18px]">delete_outline</span></button>
                </div>
            </div>
            <!-- (Bạn có thể lặp tiếp các món khác hoặc dùng vòng lặp Blade từ cơ sở dữ liệu sau này) -->
        </div>
    </div>

    <!-- SECTION 2: Delivery Destination -->
    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-space-sm">
                <span class="material-symbols-outlined text-primary text-[26px]">pin_drop</span>
                <div>
                    <h2 class="font-headline-md text-on-surface">Địa chỉ giao nhận</h2>
                    <p class="font-body-sm text-on-surface-variant">Tài xế FoodHub sẽ giao tận tay quý khách</p>
                </div>
            </div>
            <button
                class="px-space-md py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container text-primary font-label-md transition-colors"
                type="button">Đổi địa chỉ</button>
        </div>
        <div class="p-space-sm bg-surface-container-low rounded-lg flex flex-col gap-0.5">
            <span class="font-label-sm text-on-surface-variant uppercase font-bold tracking-wider">Địa chỉ giao:</span>
            <span class="font-label-lg text-on-surface font-bold">Tòa nhà Centec Tower, Tầng 8 - Phòng 802</span>
            <span class="font-body-sm text-on-surface-variant">120 Hai Bà Trưng, Phường Bến Nghé, Quận 1, TP. Hồ Chí
                Minh</span>
        </div>
    </div>

    <!-- SECTION 3: Payment Methods -->
    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
        <div class="flex items-center gap-space-sm">
            <span class="material-symbols-outlined text-primary text-[26px]">account_balance_wallet</span>
            <div>
                <h2 class="font-headline-md text-on-surface">Phương thức thanh toán</h2>
                <p class="font-body-sm text-on-surface-variant">Mã hóa an toàn 256-bit chuẩn ngân hàng</p>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
            <label
                class="flex items-center gap-space-md p-space-md rounded-xl bg-surface hover:bg-surface-container-low cursor-pointer transition-colors">
                <input checked class="accent-primary w-4 h-4" name="payment_method" type="radio" />
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-[24px] text-primary">credit_card</span>
                    <span class="font-label-lg font-bold text-on-surface">Thẻ Quốc Tế / Nội Địa</span>
                </div>
            </label>
            <label
                class="flex items-center gap-space-md p-space-md rounded-xl bg-surface hover:bg-surface-container-low cursor-pointer transition-colors">
                <input class="accent-primary w-4 h-4" name="payment_method" type="radio" />
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-[24px] text-tertiary">payments</span>
                    <span class="font-label-lg font-bold text-on-surface">Tiền mặt khi nhận (COD)</span>
                </div>
            </label>
        </div>
    </div>
</div>
