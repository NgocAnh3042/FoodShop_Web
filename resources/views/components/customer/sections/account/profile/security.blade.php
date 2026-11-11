<section class="bg-surface-container-lowest rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col gap-6">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-surface-container-high flex items-center justify-center text-primary">
            <span class="material-symbols-outlined text-[22px]">shield_lock</span>
        </div>
        <div>
            <h3 class="font-headline-sm text-headline-sm font-bold text-on-surface">Bảo mật &amp; Đăng nhập</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Tăng cường an toàn và quản lý phiên truy cập của
                bạn</p>
        </div>
    </div>

    <div class="flex flex-col gap-4">
        {{-- Mật khẩu --}}
        <div
            class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 p-4 rounded-2xl bg-surface-container-low">
            <div class="flex items-center gap-3">
                <div
                    class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant">
                    <span class="material-symbols-outlined text-[20px]">key</span>
                </div>
                <div>
                    <p class="font-label-md text-label-md text-on-surface font-bold">Mật khẩu đăng nhập</p>
                    <p class="font-body-sm text-body-sm tracking-widest text-on-surface-variant font-mono">••••••••••••
                    </p>
                </div>
            </div>
            <button type="button"
                class="px-4 py-2 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md font-bold transition-colors">
                Đổi mật khẩu
            </button>
        </div>

        {{-- 2FA --}}
        <div class="flex items-center justify-between gap-4 p-4 rounded-2xl bg-surface-container-low">
            <div class="flex items-center gap-3">
                <div
                    class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-tertiary shrink-0">
                    <span class="material-symbols-outlined text-[20px]">phonelink_lock</span>
                </div>
                <div>
                    <div class="flex flex-wrap items-center gap-2">
                        <p class="font-label-md text-label-md text-on-surface font-bold">Xác thực 2 bước (2FA qua OTP
                            SMS)</p>
                        <span
                            class="px-2 rounded bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-bold">Khuyên
                            dùng</span>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Yêu cầu mã xác thực gửi về điện thoại
                        mỗi khi đăng nhập thiết bị mới</p>
                </div>
            </div>
            <label class="relative inline-flex items-center cursor-pointer shrink-0">
                <input type="checkbox" class="sr-only peer" checked>
                <div
                    class="w-12 h-6 bg-surface-variant rounded-full peer peer-checked:after:translate-x-full peer-checked:bg-tertiary after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all">
                </div>
            </label>
        </div>

        {{-- Liên kết mạng xã hội --}}
        <x-customer.sections.account.profile.social-links />
    </div>
</section>
