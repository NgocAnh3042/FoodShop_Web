<x-customer-layout>
    <div class="flex flex-col w-full">
        <div class="max-w-7xl mx-auto px-gutter w-full py-space-lg">

            <!-- Header & Breadcrumb -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-lg">
                <div class="flex flex-col gap-space-xs">
                    <div
                        class="flex items-center gap-space-xs text-on-surface-variant font-label-sm uppercase tracking-wider">
                        <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Trang chủ</a>
                        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                        <span class="text-primary font-bold">Xác nhận đơn & Thanh toán</span>
                    </div>
                    <h1 class="font-display-sm text-on-surface tracking-tight">Giỏ hàng & Thanh toán</h1>
                </div>
            </div>

            <!-- Main 2-Column Grid Gọi Component -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">

                <!-- Cột trái: Form giỏ hàng, địa chỉ, thanh toán -->
                <x-customer.sections.cart.cart-items-form />

                <!-- Cột phải: Sidebar tổng kết đơn hàng -->
                <x-customer.sections.cart.cart-summary-sidebar />

            </div>

        </div>
    </div>
</x-customer-layout>
