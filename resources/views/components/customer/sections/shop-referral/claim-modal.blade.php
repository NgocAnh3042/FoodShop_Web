<div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-inverse-surface/60 backdrop-blur-sm hidden"
    id="claim-modal">
    <div class="bg-surface-container-lowest rounded-3xl max-w-md w-full p-space-lg shadow-2xl relative animate-scale-up">
        <button
            class="absolute top-4 right-4 w-9 h-9 rounded-full bg-surface-container hover:bg-surface-container-high flex items-center justify-center text-on-surface-variant"
            onclick="closeModal()" type="button">
            <span class="material-symbols-outlined text-[20px]">close</span>
        </button>
        <div
            class="w-16 h-16 rounded-2xl bg-primary-fixed text-primary flex items-center justify-center mx-auto mb-space-md shadow-inner">
            <span class="material-symbols-outlined text-[36px]">mark_email_read</span>
        </div>
        <div class="text-center">
            <h3 class="font-headline-md text-headline-md text-on-surface font-extrabold">Nhận gói quà 115.000đ</h3>
            <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                Nhập số điện thoại của bạn để kích hoạt ngay 3 voucher từ quán <strong>Bếp Huế Cố Đô</strong>
            </p>
        </div>
        <form class="mt-space-lg flex flex-col gap-space-md" onsubmit="handleClaimSubmit(event)">
            <div class="relative">
                <label class="font-label-sm text-label-sm text-on-surface-variant block mb-1">Số điện thoại của
                    bạn</label>
                <div
                    class="flex items-center bg-surface-container-low rounded-2xl px-space-md py-3 focus-within:ring-2 focus-within:ring-primary/40 transition-all">
                    <span class="material-symbols-outlined text-outline text-[20px] mr-2">phone_iphone</span>
                    <input
                        class="w-full bg-transparent text-on-surface font-body-md text-body-md outline-none placeholder:text-outline"
                        id="phone-input" placeholder="09x xxx xxxx" required="" type="tel" />
                </div>
            </div>
            <div
                class="p-space-sm rounded-xl bg-surface-container flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
                <span>Mã giới thiệu đính kèm:</span>
                <span class="font-label-md text-label-md text-primary font-bold">BEPHUE (Đã áp dụng ✓)</span>
            </div>
            <button
                class="w-full py-3.5 rounded-full bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container shadow-lg shadow-primary/25 transition-all font-bold flex items-center justify-center gap-2 mt-2"
                type="submit">
                <span>Kích hoạt và Nhận quà ngay</span>
                <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
            </button>
        </form>
    </div>
</div>

@push('scripts')
    <script>
        function setVoucherState(state) {
            const btnGuest = document.getElementById('btn-guest-tab');
            const btnLogged = document.getElementById('btn-logged-tab');
            const ctaGuest = document.getElementById('cta-guest-block');
            const ctaLogged = document.getElementById('cta-logged-block');
            const toast = document.getElementById('logged-toast');

            if (state === 'logged-in') {
                btnGuest.className =
                    'px-space-md py-2 rounded-full font-label-md text-label-md transition-all flex items-center gap-1.5 text-on-surface-variant hover:text-on-surface';
                btnLogged.className =
                    'px-space-md py-2 rounded-full font-label-md text-label-md transition-all flex items-center gap-1.5 bg-primary text-on-primary shadow-sm';
                ctaGuest.classList.add('hidden');
                ctaLogged.classList.remove('hidden');
                toast.classList.remove('hidden');
            } else {
                btnGuest.className =
                    'px-space-md py-2 rounded-full font-label-md text-label-md transition-all flex items-center gap-1.5 bg-primary text-on-primary shadow-sm';
                btnLogged.className =
                    'px-space-md py-2 rounded-full font-label-md text-label-md transition-all flex items-center gap-1.5 text-on-surface-variant hover:text-on-surface';
                ctaGuest.classList.remove('hidden');
                ctaLogged.classList.add('hidden');
                toast.classList.add('hidden');
            }
        }

        function claimVouchersModal() {
            const modal = document.getElementById('claim-modal');
            modal.classList.remove('hidden');
            setTimeout(() => {
                document.getElementById('phone-input')?.focus();
            }, 100);
        }

        function closeModal() {
            document.getElementById('claim-modal').classList.add('hidden');
        }

        function handleClaimSubmit(e) {
            e.preventDefault();
            closeModal();
            setVoucherState('logged-in');

            // Quick confirmation
            const toast = document.getElementById('logged-toast');
            toast.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }

        function addToCartAnimation(btn) {
            const originalText = btn.innerHTML;
            btn.innerHTML = '<span class="material-symbols-outlined text-[18px] text-tertiary">done</span> Đã thêm';
            btn.classList.add('bg-tertiary-fixed', 'text-on-tertiary-fixed');

            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.classList.remove('bg-tertiary-fixed', 'text-on-tertiary-fixed');
            }, 1800);
        }
    </script>
@endpush
