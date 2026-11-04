<div class="pt-2">
    <div class="rounded-2xl bg-surface-container-low p-4 sm:p-5 shadow-sm space-y-3">
        <div class="flex items-center justify-between flex-wrap gap-2">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-[20px]"
                    style="font-variation-settings: 'FILL' 1;">storefront</span>
                <span class="font-label-lg text-label-lg font-bold text-on-surface">Bạn có mã quán không?</span>
                <span
                    class="px-2 py-0.5 rounded-full bg-secondary-container/30 text-on-secondary-container font-label-sm text-label-sm font-extrabold">Độc
                    quyền</span>
            </div>
            <!-- Interactive State Switcher for Previewing -->
            <div class="flex items-center gap-1 bg-surface-container rounded-lg p-1" id="state-tab-container">
                <button
                    class="px-2.5 py-1 rounded font-label-sm text-label-sm font-bold bg-surface-container-lowest text-primary shadow-xs transition-all"
                    id="tab-valid" onclick="switchState('valid')" type="button">
                    1. Hợp lệ
                </button>
                <button
                    class="px-2.5 py-1 rounded font-label-sm text-label-sm font-medium text-on-surface-variant hover:text-on-surface transition-all"
                    id="tab-empty" onclick="switchState('empty')" type="button">
                    2. Trống
                </button>
                <button
                    class="px-2.5 py-1 rounded font-label-sm text-label-sm font-medium text-on-surface-variant hover:text-on-surface transition-all"
                    id="tab-invalid" onclick="switchState('invalid')" type="button">
                    3. Lỗi
                </button>
            </div>
        </div>
        <!-- STATE 1: HỢP LỆ / VALID (Default Active) -->
        <div class="space-y-3" id="state-panel-valid">
            <div class="flex gap-2">
                <div class="relative flex-1">
                    <span
                        class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-tertiary text-[20px]">verified</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 rounded-xl bg-surface-container-lowest font-label-lg text-label-lg tracking-wider font-extrabold text-tertiary focus:outline-none shadow-xs uppercase"
                        readonly="" type="text" value="BEPHUE" />
                </div>
                <button
                    class="px-4 py-2 rounded-xl bg-tertiary text-on-tertiary font-label-md text-label-md font-bold flex items-center gap-1.5 shadow-sm cursor-default"
                    type="button">
                    <span class="material-symbols-outlined text-[18px]">check_circle</span>
                    <span>Đã áp dụng</span>
                </button>
            </div>
            <!-- Valid Card Feedback -->
            <div class="p-3.5 rounded-xl bg-surface-container-lowest shadow-sm space-y-2.5">
                <div class="flex items-start justify-between gap-3">
                    <div class="flex items-center gap-2.5">
                        <div
                            class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center shadow-xs overflow-hidden flex-shrink-0">
                            <span class="material-symbols-outlined text-primary text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">soup_kitchen</span>
                        </div>
                        <div class="min-w-0">
                            <div class="flex items-center gap-1.5">
                                <p class="font-label-md text-label-md font-bold text-on-surface truncate">Bếp Huế Cố Đô
                                </p>
                                <span class="material-symbols-outlined text-tertiary text-[16px]">verified</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant truncate">CN Hai Bà Trưng, Quận
                                1</p>
                        </div>
                    </div>
                    <span
                        class="px-2 py-0.5 rounded-md bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-label-sm font-extrabold flex items-center gap-1 whitespace-nowrap">
                        <span class="material-symbols-outlined text-[13px]">card_giftcard</span>
                        Quà độc quyền
                    </span>
                </div>
                <!-- High-Value Voucher Pills -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-1">
                    <div class="flex items-center gap-2 p-2 rounded-lg bg-primary-fixed/40">
                        <span class="text-[16px]">🏷️</span>
                        <div class="min-w-0">
                            <p class="font-label-sm text-label-sm font-bold text-primary truncate">Giảm 30.000đ đơn đầu
                            </p>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-none text-[10px]">Đơn từ
                                80.000đ</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 p-2 rounded-lg bg-tertiary-fixed/30">
                        <span class="text-[16px]">🚚</span>
                        <div class="min-w-0">
                            <p class="font-label-sm text-label-sm font-bold text-tertiary truncate">Freeship 3 đơn liền
                            </p>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-none text-[10px]">Tối đa
                                15k/đơn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- STATE 2: CHƯA NHẬP / TRỐNG (Hidden by default) -->
        <div class="space-y-2 hidden" id="state-panel-empty">
            <div class="flex gap-2">
                <div class="relative flex-1">
                    <span
                        class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">sell</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 rounded-xl bg-surface-container-lowest font-body-md text-body-md placeholder:text-outline focus:outline-none uppercase font-semibold"
                        placeholder="Nhập mã giới thiệu của quán (VD: BEPHUE)" type="text" />
                </div>
                <button
                    class="px-5 py-2 rounded-xl bg-primary text-on-primary font-label-md text-label-md font-bold hover:bg-primary-container active:scale-95 transition-all shadow-sm"
                    type="button">
                    Áp dụng
                </button>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1.5 pl-1">
                <span class="material-symbols-outlined text-[16px] text-secondary">info</span>
                Nhận mã từ menu tại bàn, tờ rơi hoặc fanpage quán để nhận quà tặng riêng.
            </p>
        </div>
        <!-- STATE 3: KHÔNG HỢP LỆ / INVALID (Hidden by default) -->
        <div class="space-y-2 hidden" id="state-panel-invalid">
            <div class="flex gap-2">
                <div class="relative flex-1">
                    <span
                        class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-error text-[20px]">error</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 rounded-xl bg-surface-container-lowest font-label-lg text-label-lg font-bold text-error focus:outline-none shadow-xs uppercase"
                        type="text" value="PHO999" />
                </div>
                <button
                    class="px-5 py-2 rounded-xl bg-surface-variant text-on-surface font-label-md text-label-md font-bold hover:bg-surface-container-high transition-all shadow-sm"
                    type="button">
                    Thử lại
                </button>
            </div>
            <div
                class="p-2.5 rounded-xl bg-error-container text-on-error-container flex items-center justify-between gap-2 shadow-xs">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">cancel</span>
                    <span class="font-label-sm text-label-sm font-bold">Mã không tồn tại hoặc đã hết hạn ưu đãi</span>
                </div>
                <span class="font-body-sm text-body-sm text-on-error-container underline cursor-pointer">Cần trợ
                    giúp?</span>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function switchState(state) {
            var pValid = document.getElementById('state-panel-valid');
            var pEmpty = document.getElementById('state-panel-empty');
            var pInvalid = document.getElementById('state-panel-invalid');

            var tValid = document.getElementById('tab-valid');
            var tEmpty = document.getElementById('tab-empty');
            var tInvalid = document.getElementById('tab-invalid');

            var activeTabClass =
                'px-2.5 py-1 rounded font-label-sm text-label-sm font-bold bg-surface-container-lowest text-primary shadow-xs transition-all';
            var inactiveTabClass =
                'px-2.5 py-1 rounded font-label-sm text-label-sm font-medium text-on-surface-variant hover:text-on-surface transition-all';

            pValid.classList.add('hidden');
            pEmpty.classList.add('hidden');
            pInvalid.classList.add('hidden');

            tValid.className = inactiveTabClass;
            tEmpty.className = inactiveTabClass;
            tInvalid.className = inactiveTabClass;

            if (state === 'valid') {
                pValid.classList.remove('hidden');
                tValid.className = activeTabClass;
            } else if (state === 'empty') {
                pEmpty.classList.remove('hidden');
                tEmpty.className = activeTabClass;
            } else if (state === 'invalid') {
                pInvalid.classList.remove('hidden');
                tInvalid.className = activeTabClass;
            }
        }
    </script>
@endpush
