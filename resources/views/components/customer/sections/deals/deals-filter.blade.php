<!-- Filter & Categories Rail -->
<section class="sticky top-20 z-40 bg-surface/95 backdrop-blur-md py-4 shadow-sm">
    <div class="max-w-7xl mx-auto px-gutter">
        <div class="flex items-center justify-between gap-4 overflow-x-auto no-scrollbar pb-1">
            <!-- Filter Tabs -->
            <div class="flex items-center gap-2 shrink-0" id="filter-container">
                <button
                    class="filter-btn active-filter px-4 py-2 rounded-full font-label-lg text-label-lg bg-primary text-on-primary shadow-sm transition-all flex items-center gap-1.5"
                    onclick="setFilter(this, 'all')">
                    <span class="material-symbols-outlined text-lg">local_mall</span>
                    <span>Tất cả ưu đãi</span>
                    <span class="px-1.5 py-0.5 rounded-full text-xs bg-white/20 ml-1">24</span>
                </button>
                <button
                    class="filter-btn px-4 py-2 rounded-full font-label-lg text-label-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-all flex items-center gap-1.5"
                    onclick="setFilter(this, 'freeship')">
                    <span class="material-symbols-outlined text-lg text-tertiary">local_shipping</span>
                    <span>Miễn phí giao hàng (Freeship)</span>
                </button>
                <button
                    class="filter-btn px-4 py-2 rounded-full font-label-lg text-label-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-all flex items-center gap-1.5"
                    onclick="setFilter(this, 'dishes')">
                    <span class="material-symbols-outlined text-lg text-primary">lunch_dining</span>
                    <span>Mã giảm món chính</span>
                </button>
                <button
                    class="filter-btn px-4 py-2 rounded-full font-label-lg text-label-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-all flex items-center gap-1.5"
                    onclick="setFilter(this, 'payment')">
                    <span class="material-symbols-outlined text-lg text-secondary">credit_card</span>
                    <span>Ưu đãi Thẻ &amp; Ví điện tử</span>
                </button>
                <button
                    class="filter-btn px-4 py-2 rounded-full font-label-lg text-label-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-all flex items-center gap-1.5"
                    onclick="setFilter(this, 'combo')">
                    <span class="material-symbols-outlined text-lg text-primary-container">groups</span>
                    <span>Combo nhóm bạn</span>
                </button>
            </div>
            <!-- Quick Search Voucher Code Input -->
            <div class="hidden xl:flex items-center gap-2 bg-surface-container-low rounded-full px-3 py-1.5 shrink-0">
                <span class="material-symbols-outlined text-outline text-lg">search</span>
                <input
                    class="bg-transparent border-0 outline-none text-xs font-body-md w-44 placeholder:text-outline text-on-surface"
                    id="voucher-search" placeholder="Nhập mã coupon cụ thể..." type="text" />
            </div>
        </div>
    </div>
</section>
