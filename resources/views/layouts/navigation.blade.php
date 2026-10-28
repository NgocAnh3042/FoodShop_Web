<!-- HEADER NAVIGATION -->
<header
    class="fixed top-0 left-0 right-0 z-50 bg-surface/90 backdrop-blur-xl shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)]">
    <div class="h-20 max-w-7xl mx-auto px-gutter flex items-center justify-between gap-space-md">

        <!-- Logo & Địa chỉ giao hàng -->
        <div class="flex items-center gap-space-lg shrink-0">
            <a class="flex items-center gap-space-sm group focus:outline-none" data-path="home" href="#">
                <img alt="FoodHub Logo" class="h-8 w-auto object-contain"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9GbLCdxuwwuvrHfFz8bypTzQUSDFnCKYrpP2U_ERQjYNwHNZ8QGrwJGVlqp7ZScy-0rbCjzuZVXMPGDp6-dE8cNtm4gs-tvHBSmDnwgNg-YyGrj2k-6_YOXyvSn-xNVfLiEA3FHcY5lKeouFWvvzovsQqtK2dBnY2HvF3Pyt7mWgxq_Xkw266Leb5sMUwOL-XsxPl1cCCnxDxl1KSV6jk1nIRtaP2KOVuj1a5_4L8jW4EbxiqtzS9sA" />
                <span class="font-headline-lg text-headline-lg text-primary tracking-tight font-extrabold">Food<span
                        class="text-secondary-container">Hub</span></span>
            </a>

            <!-- Vị trí giao hàng nhanh -->
            <div
                class="hidden xl:flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer">
                <span class="material-symbols-outlined text-primary text-[20px]">location_on</span>
                <div class="flex flex-col text-left leading-none">
                    <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Giao
                        đến</span>
                    <span class="font-label-md text-label-md text-on-surface font-medium truncate max-w-[170px]">120 Hai
                        Bà Trưng, Q.1</span>
                </div>
                <span class="material-symbols-outlined text-outline text-[18px]">keyboard_arrow_down</span>
            </div>
        </div>

        <!-- Ô tìm kiếm nhanh ở Header -->
        <div class="flex-1 max-w-lg hidden lg:block">
            <div class="relative flex items-center w-full">
                <span
                    class="material-symbols-outlined absolute left-space-md text-outline pointer-events-none text-[20px]">search</span>
                <input
                    class="w-full pl-11 pr-space-lg py-2.5 bg-surface-container-low hover:bg-surface-container focus:bg-surface-container-lowest text-on-surface placeholder:text-outline font-body-md text-body-md rounded-full transition-all outline-none border-none ring-0 focus:ring-2 focus:ring-primary/30"
                    placeholder="Tìm món ngon, trà sữa, cơm trưa..." type="text" />
                <button
                    class="absolute right-1.5 px-space-md py-1.5 bg-primary text-on-primary rounded-full font-label-md text-label-md hover:bg-primary-container transition-colors"
                    type="button">Tìm kiếm</button>
            </div>
        </div>

        <!-- Menu điều hướng chính -->
        <nav class="hidden md:flex items-center gap-space-xs shrink-0">
            <a aria-current="page"
                class="px-space-md py-2 transition-all bg-primary-container text-on-primary-container font-semibold rounded-full"
                href="#">Trang chủ</a>
            <a class="px-space-md py-2 rounded-full font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all"
                href="#">Thực đơn</a>
            <a class="px-space-md py-2 rounded-full font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all"
                href="#">Khuyến mãi</a>
            <a class="px-space-md py-2 rounded-full font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all"
                href="#">Đơn của tôi</a>
        </nav>

        <!-- Giỏ hàng, Thông báo & Profile người dùng -->
        <div class="flex items-center gap-space-sm shrink-0">
            <!-- Giỏ hàng -->
            <a class="flex items-center gap-space-sm pl-space-md pr-space-lg py-2 rounded-full bg-primary text-on-primary hover:bg-primary-container shadow-[0_4px_14px_rgba(163,57,0,0.25)] transition-all cursor-pointer"
                href="#">
                <div class="relative flex items-center">
                    <span class="material-symbols-outlined text-[22px]">shopping_bag</span>
                    <span
                        class="absolute -top-1.5 -right-2 bg-secondary-container text-on-secondary-container font-label-sm text-label-sm w-4 h-4 rounded-full flex items-center justify-center font-bold">3</span>
                </div>
                <div class="hidden sm:flex flex-col text-left">
                    <span class="font-label-sm text-label-sm leading-none opacity-90">Giỏ hàng</span>
                    <span class="font-label-md text-label-md leading-none font-bold">185.000đ</span>
                </div>
            </a>

            <!-- Nút thông báo -->
            <button aria-label="Thông báo"
                class="w-10 h-10 rounded-full bg-surface-container-low hover:bg-surface-container flex items-center justify-center text-on-surface transition-colors relative"
                type="button">
                <span class="material-symbols-outlined text-[20px]">notifications</span>
                <span class="w-2 h-2 rounded-full bg-primary absolute top-2 right-2"></span>
            </button>

            <!-- Ảnh đại diện / Profile -->
            <div class="flex items-center gap-space-xs pl-space-xs cursor-pointer group">
                <img alt="Profile" class="w-8 h-8 rounded-full object-cover ring-2 ring-primary/20"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlmbZQIR48Z2MRZJJwOdpMbcyN-pg8tSjmR7Nj1ditGYLYrjOcGYRKdiXx7EkqrTVt3mdx6fDI1Kl3EUqixpFUO8GzbhQH_Jy0SvrSsWseNJhTkCiqo9Xe_u_RY4jC1sXsvNOfEihGZabm8SboTxrxlYyL2CBWoi6XovhIGR59whq_qKlj2uesRtdbAEYYtTfBIVBVSV4A7lfD2ZyCtcHkxOwQhrm1Vj5l1l_x__0d-KD3Ls-AMRE6qA" />
                <span
                    class="material-symbols-outlined text-outline group-hover:text-on-surface text-[18px] transition-colors">arrow_drop_down</span>
            </div>
        </div>

    </div>
</header>
