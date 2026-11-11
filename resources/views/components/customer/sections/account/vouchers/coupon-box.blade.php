<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
        <div>
            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Kho voucher &amp; Ưu đãi của tôi
            </h1>
            <p class="font-body-md text-body-md text-on-surface-variant mt-1">Quản lý mã giảm giá từ quán quen và ưu đãi
                sàn FoodHub</p>
        </div>
        <div
            class="flex items-center gap-2 self-start sm:self-auto px-3 py-1.5 rounded-lg bg-surface-container text-on-surface font-label-md text-label-md">
            <span class="material-symbols-outlined text-primary text-[20px]">account_balance_wallet</span>
            <span>Tổng ưu đãi: <strong class="text-primary">5 mã</strong></span>
        </div>
    </div>
    <!-- Coupon Input Form -->
    <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col gap-2.5">
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2.5">
            <div class="relative flex-1">
                <span
                    class="absolute left-3.5 top-1/2 -translate-y-1/2 material-symbols-outlined text-outline text-[20px]">sell</span>
                <input
                    class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-11 pr-4 py-2.5 rounded-lg placeholder-outline focus:outline-none focus:ring-2 focus:ring-primary/40 uppercase tracking-wide font-semibold shadow-sm"
                    id="voucherInput" placeholder="Ví dụ: BEPHUE, BANHMI99, FREESHIP..." type="text" />
            </div>
            <button
                class="px-6 py-2.5 rounded-full bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2 flex-shrink-0 cursor-pointer"
                id="btnSaveVoucher">
                <span class="material-symbols-outlined text-[18px]">add_circle</span>
                Lưu mã
            </button>
        </div>
        <div class="flex items-start gap-2 text-on-surface-variant">
            <span class="text-base select-none">💡</span>
            <p class="font-body-sm text-body-sm leading-relaxed">
                Nhập mã giới thiệu từ quán bạn vừa ghé hoặc mã bạn bè tặng để kích hoạt ngay vào kho quà.
            </p>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        // Interactive Save Voucher Simulation
        document.getElementById('btnSaveVoucher').addEventListener('click', function() {
            const input = document.getElementById('voucherInput');
            const val = input.value.trim().toUpperCase();
            if (!val) {
                input.focus();
                return;
            }

            // Quick micro-animation & toast simulation
            const originalText = this.innerHTML;
            this.innerHTML =
                '<span class="material-symbols-outlined text-[18px] animate-spin">refresh</span> Đang kiểm tra...';
            this.disabled = true;

            setTimeout(() => {
                this.innerHTML = '<span class="material-symbols-outlined text-[18px]">check</span> Đã lưu!';
                this.classList.remove('bg-primary');
                this.classList.add('bg-tertiary');

                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.classList.add('bg-primary');
                    this.classList.remove('bg-tertiary');
                    this.disabled = false;
                    input.value = '';
                }, 1800);
            }, 600);
        });
    </script>
@endpush
