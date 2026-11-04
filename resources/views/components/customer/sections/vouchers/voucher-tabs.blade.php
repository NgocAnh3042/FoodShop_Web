<div
    class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-sm border-b border-outline-variant/30 pb-2">
    <!-- Tab buttons -->
    <div class="flex items-center gap-2 overflow-x-auto no-scrollbar py-1">
        <button
            class="px-4 py-2 rounded-full font-label-md text-label-md font-bold bg-primary text-on-primary transition-all whitespace-nowrap shadow-sm flex items-center gap-1.5"
            id="tab-btn-shop" onclick="switchTab('shop')">
            <span>Voucher của quán</span>
            <span
                class="px-1.5 py-0.2 rounded-full bg-surface-container-lowest text-primary font-label-sm text-label-sm font-bold">3</span>
        </button>
        <button
            class="px-4 py-2 rounded-full font-label-md text-label-md font-semibold text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all whitespace-nowrap flex items-center gap-1.5"
            id="tab-btn-foodhub" onclick="switchTab('foodhub')">
            <span>Voucher FoodHub</span>
            <span
                class="px-1.5 py-0.2 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-bold">2</span>
        </button>
        <button
            class="px-4 py-2 rounded-full font-label-md text-label-md font-semibold text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all whitespace-nowrap flex items-center gap-1.5"
            id="tab-btn-used" onclick="switchTab('used')">
            <span>Đã dùng</span>
        </button>
        <button
            class="px-4 py-2 rounded-full font-label-md text-label-md font-semibold text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all whitespace-nowrap"
            id="tab-btn-expired" onclick="switchTab('expired')">
            <span>Hết hạn</span>
        </button>
    </div>
    <!-- Sort Dropdown Pill -->
    <div class="flex items-center gap-2 self-end sm:self-auto">
        <span class="font-body-sm text-body-sm text-on-surface-variant hidden md:inline">Sắp xếp:</span>
        <div class="relative inline-block">
            <button
                class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-surface-container-lowest text-on-surface font-label-md text-label-md shadow-sm hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
                <span>Sắp hết hạn trước</span>
                <span class="material-symbols-outlined text-[16px]">expand_more</span>
            </button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function switchTab(tabKey) {
            const tabs = ['shop', 'foodhub', 'used', 'expired'];

            tabs.forEach(t => {
                const contentEl = document.getElementById(`tab-content-${t}`);
                const btnEl = document.getElementById(`tab-btn-${t}`);

                if (!contentEl || !btnEl) return;

                if (t === tabKey) {
                    contentEl.classList.remove('hidden');
                    if (t === 'shop' || t === 'foodhub') {
                        contentEl.classList.add('grid');
                    } else {
                        contentEl.classList.add('flex');
                    }

                    // Active button styles
                    btnEl.className =
                        'px-4 py-2 rounded-full font-label-md text-label-md font-bold bg-primary text-on-primary transition-all whitespace-nowrap shadow-sm flex items-center gap-1.5';
                } else {
                    contentEl.classList.add('hidden');
                    contentEl.classList.remove('grid', 'flex');

                    // Inactive button styles
                    btnEl.className =
                        'px-4 py-2 rounded-full font-label-md text-label-md font-semibold text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all whitespace-nowrap flex items-center gap-1.5';
                }
            });
        }
    </script>
@endpush
