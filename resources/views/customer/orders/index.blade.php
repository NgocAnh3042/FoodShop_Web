<x-customer-layout>
    <div class="flex flex-col w-full">
        <div class="w-full max-w-7xl mx-auto px-gutter py-space-lg flex flex-col gap-space-lg">

            <!-- Breadcrumb & Header -->
            <div class="flex flex-col gap-space-sm">
                <nav class="flex items-center gap-space-xs text-on-surface-variant font-label-md">
                    <a href="{{ route('home') }}" class="hover:text-primary transition-colors flex items-center gap-1">
                        <span class="material-symbols-outlined text-[16px]">home</span> Trang chủ
                    </a>
                    <span class="material-symbols-outlined text-[14px] text-outline">chevron_right</span>
                    <span class="text-primary font-bold">Đơn hàng của tôi</span>
                </nav>
                <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md">
                    <div>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface font-extrabold tracking-tight">Đơn
                            hàng của tôi</h1>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                            Quản lý đơn hàng đang đặt, xem biên nhận điện tử và theo dõi hành trình giao đồ ăn trực tiếp
                            theo thời gian thực.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tab Trạng Thái & Lọc -->
            <div
                class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col lg:flex-row items-center justify-between gap-space-md">
                <div class="flex items-center gap-space-xs overflow-x-auto w-full lg:w-auto pb-1 lg:pb-0"
                    id="order-tabs">
                    <button
                        class="tab-btn px-space-md py-2 rounded-full font-label-md transition-all text-on-surface-variant hover:text-on-surface hover:bg-surface-container flex items-center gap-1.5 shrink-0"
                        type="button">
                        Tất cả đơn <span
                            class="bg-surface-container-highest text-on-surface-variant font-label-sm px-2 py-0.5 rounded-full font-bold">12</span>
                    </button>
                    <button
                        class="tab-btn active px-space-md py-2 rounded-full font-label-md transition-all bg-primary-container text-on-primary-container font-bold flex items-center gap-1.5 shrink-0 shadow-sm"
                        type="button">
                        Đang giao <span
                            class="bg-secondary-container text-on-secondary-container font-label-sm px-2 py-0.5 rounded-full font-bold animate-pulse">1</span>
                    </button>
                </div>
            </div>

            <!-- 1. Gọi Component Section: Live Tracking đơn đang giao -->
            <x-customer.sections.order.active-order-tracking />

            <!-- 2. Gọi Component Section: Lịch sử đơn hàng & Hỗ trợ -->
            <x-customer.sections.order.order-history-list />

        </div>
    </div>
</x-customer-layout>
