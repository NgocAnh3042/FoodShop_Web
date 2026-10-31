<div
    class="fixed bottom-0 right-0 left-72 bg-surface/90 backdrop-blur-xl z-30 shadow-[0_-4px_20px_-2px_rgba(234,88,12,0.08)]">
    <div class="max-w-7xl mx-auto px-space-lg py-space-sm flex items-center justify-between">
        <div class="hidden sm:flex items-center gap-space-xs text-on-surface-variant">
            <span class="material-symbols-outlined text-tertiary text-[20px]">check_circle</span>
            <span class="font-body-sm text-body-sm">Cập nhật lần cuối: 10 phút trước bởi Thuý Hà</span>
        </div>
        <div class="flex items-center gap-space-md ml-auto w-full sm:w-auto justify-end">
            <button
                class="px-space-lg py-space-sm rounded-full bg-surface-container-highest hover:bg-surface-dim text-on-surface font-label-md text-label-md transition-colors shadow-sm"
                onclick="window.location.reload()" type="button">
                Hủy thay đổi
            </button>
            <button
                class="px-space-xl py-space-sm rounded-full bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md shadow-md hover:shadow-lg transition-all flex items-center gap-space-xs"
                onclick="const toast = document.getElementById('saveToast'); toast.classList.remove('hidden'); setTimeout(() =&gt; toast.classList.add('hidden'), 3500);"
                type="button">
                <span class="material-symbols-outlined text-[18px]">save</span>
                <span>Lưu cài đặt cấu hình quán</span>
            </button>
        </div>
    </div>
</div>
