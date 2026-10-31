<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col gap-space-md">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-space-xs">
            <span class="material-symbols-outlined text-primary text-[22px]">print</span>
            <h2 class="font-headline-sm text-headline-sm text-on-surface">4. Kết nối máy in hóa đơn</h2>
        </div>
        <span
            class="flex items-center gap-1 font-label-sm text-label-sm text-tertiary bg-tertiary-fixed/40 px-space-xs py-0.5 rounded-full">
            <span class="w-2 h-2 rounded-full bg-tertiary"></span> Sẵn sàng
        </span>
    </div>
    <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-sm">
        <div class="flex items-start justify-between">
            <div class="flex items-center gap-space-sm">
                <div
                    class="w-10 h-10 rounded-xl bg-surface-container-lowest flex items-center justify-center text-primary shadow-sm">
                    <span class="material-symbols-outlined text-[24px]">receipt_long</span>
                </div>
                <div>
                    <p class="font-label-md text-label-md text-on-surface">Epson TM-T82III (Thermal 80mm)</p>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">IP: 192.168.1.188 • Cổng: 9100 (LAN)
                    </p>
                </div>
            </div>
            <button
                class="px-space-sm py-space-xs rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-sm text-label-sm transition-colors"
                type="button">
                Đổi máy
            </button>
        </div>
        <!-- Printer Options -->
        <div class="pt-space-xs flex flex-col gap-space-xs">
            <label
                class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-lowest cursor-pointer">
                <span class="font-label-md text-label-md text-on-surface">Tự động in khi có đơn mới</span>
                <input checked="" class="accent-primary w-4 h-4 rounded" type="checkbox" />
            </label>
            <label
                class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-lowest cursor-pointer">
                <div>
                    <span class="font-label-md text-label-md text-on-surface block">In tự động 2 liên</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">1 liên chế biến cho Bếp + 1 liên
                        giao cho Tài xế</span>
                </div>
                <input checked="" class="accent-primary w-4 h-4 rounded" type="checkbox" />
            </label>
        </div>
        <!-- Test Print Button -->
        <button
            class="w-full mt-space-xs py-space-sm px-space-md rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-primary font-label-md text-label-md flex items-center justify-center gap-space-xs transition-colors"
            onclick="const btn = this; btn.innerText = 'Đang gửi lệnh in...'; setTimeout(() =&gt; { btn.innerText = 'Đã in phiếu test thành công!'; setTimeout(() =&gt; btn.innerText = 'In thử phiếu test (Bill mẫu)', 2000); }, 800);"
            type="button">
            <span class="material-symbols-outlined text-[18px]">receipt</span>
            <span>In thử phiếu test (Bill mẫu)</span>
        </button>
    </div>
</div>
