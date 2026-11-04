<form class="space-y-4" onsubmit="event.preventDefault();">
    <!-- Họ và tên -->
    <div>
        <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1.5" for="fullname">
            Họ và tên <span class="text-primary">*</span>
        </label>
        <div class="relative">
            <span
                class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">person</span>
            <input
                class="w-full pl-10 pr-4 py-2.5 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-outline focus:outline-none focus:bg-surface-container-lowest focus:shadow-md transition-all"
                id="fullname" placeholder="Nguyễn Văn An" type="text" value="Nguyễn Văn An" />
        </div>
    </div>
    <!-- Số điện thoại & OTP Section -->
    <div class="space-y-2.5">
        <div>
            <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1.5" for="phone">
                Số điện thoại <span class="text-primary">*</span>
            </label>
            <div class="flex gap-2">
                <div class="relative flex-1">
                    <span
                        class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">smartphone</span>
                    <input
                        class="w-full pl-10 pr-4 py-2.5 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-lowest focus:shadow-md transition-all"
                        id="phone" placeholder="0912 345 678" type="tel" value="0912 345 678" />
                </div>
                <button
                    class="px-4 py-2.5 rounded-xl bg-primary-fixed text-primary font-label-md text-label-md font-bold whitespace-nowrap hover:bg-primary hover:text-on-primary active:scale-95 transition-all shadow-sm flex items-center gap-1.5"
                    id="btn-otp" type="button">
                    <span class="material-symbols-outlined text-[18px]">cached</span>
                    <span>Đã gửi OTP (59s)</span>
                </button>
            </div>
        </div>
        <!-- OTP Input (6 chữ số) -->
        <div>
            <div class="flex items-center justify-between mb-1.5">
                <label class="font-label-md text-label-md text-on-surface font-semibold" for="otp-code">
                    Mã xác thực OTP (6 chữ số) <span class="text-primary">*</span>
                </label>
                <span class="font-label-sm text-label-sm text-primary font-medium cursor-pointer hover:underline">Gửi
                    lại qua Zalo?</span>
            </div>
            <div class="grid grid-cols-6 gap-2">
                <input
                    class="text-center py-2.5 rounded-xl bg-surface-container-low font-headline-sm text-headline-sm font-bold text-on-surface focus:outline-none focus:bg-surface-container-lowest focus:shadow-md transition-all"
                    maxlength="1" type="text" value="8" />
                <input
                    class="text-center py-2.5 rounded-xl bg-surface-container-low font-headline-sm text-headline-sm font-bold text-on-surface focus:outline-none focus:bg-surface-container-lowest focus:shadow-md transition-all"
                    maxlength="1" type="text" value="6" />
                <input
                    class="text-center py-2.5 rounded-xl bg-surface-container-low font-headline-sm text-headline-sm font-bold text-on-surface focus:outline-none focus:bg-surface-container-lowest focus:shadow-md transition-all"
                    maxlength="1" type="text" value="2" />
                <input
                    class="text-center py-2.5 rounded-xl bg-surface-container-low font-headline-sm text-headline-sm font-bold text-on-surface focus:outline-none focus:bg-surface-container-lowest focus:shadow-md transition-all"
                    maxlength="1" type="text" value="9" />
                <input
                    class="text-center py-2.5 rounded-xl bg-surface-container-low font-headline-sm text-headline-sm font-bold text-on-surface focus:outline-none focus:bg-surface-container-lowest focus:shadow-md transition-all"
                    maxlength="1" placeholder="•" type="text" />
                <input
                    class="text-center py-2.5 rounded-xl bg-surface-container-low font-headline-sm text-headline-sm font-bold text-on-surface focus:outline-none focus:bg-surface-container-lowest focus:shadow-md transition-all"
                    maxlength="1" placeholder="•" type="text" />
            </div>
        </div>
    </div>
    <!-- Mật khẩu -->
    <div>
        <div class="flex items-center justify-between mb-1.5">
            <label class="font-label-md text-label-md text-on-surface font-semibold" for="pwd">
                Mật khẩu <span class="text-primary">*</span>
            </label>
            <span class="font-label-sm text-label-sm text-outline">Tối thiểu 8 ký tự</span>
        </div>
        <div class="relative">
            <span
                class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock</span>
            <input
                class="w-full pl-10 pr-10 py-2.5 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-lowest focus:shadow-md transition-all"
                id="pwd" placeholder="Nhập mật khẩu an toàn" type="password" value="AmThucSaiGon@2024" />
            <button
                class="absolute right-3.5 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface focus:outline-none"
                type="button">
                <span class="material-symbols-outlined text-[20px]">visibility</span>
            </button>
        </div>
    </div>
    <!-- SPECIAL SECTION: "Bạn có mã quán không?" (Interactive 3-State Showcase) -->
    <x-auth.sections.register.referral-box />
    <!-- Terms & Conditions -->
    <div class="flex items-start gap-2.5 pt-1">
        <input checked="" class="mt-0.5 w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer"
            id="terms" type="checkbox" />
        <label class="font-body-sm text-body-sm text-on-surface-variant leading-snug cursor-pointer" for="terms">
            Tôi đồng ý với <a class="font-label-sm text-label-sm font-bold text-primary hover:underline"
                href="#">Điều khoản dịch vụ</a> và <a
                class="font-label-sm text-label-sm font-bold text-primary hover:underline" href="#">Chính sách bảo
                mật</a> của FoodHub Vietnam.
        </label>
    </div>
    <!-- Primary CTA Button -->
    <button
        class="w-full py-3.5 px-6 rounded-full bg-primary hover:bg-primary-container text-on-primary font-headline-sm text-headline-sm font-extrabold shadow-md hover:shadow-xl hover:-translate-y-0.5 active:translate-y-0 transition-all flex items-center justify-center gap-2"
        type="submit">
        <span>Đăng ký và nhận quà ngay</span>
        <span class="text-xl">🎁</span>
    </button>
</form>
