<section class="w-full max-w-7xl mx-auto px-gutter py-space-xl">
    <!-- Tiêu đề & Tab lọc -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm pb-space-lg">
        <div class="flex flex-col">
            <span class="font-label-sm text-label-sm text-primary uppercase font-extrabold tracking-wider">Xu Hướng Đặt
                Nhiều</span>
            <h2 class="font-headline-lg text-headline-lg text-on-surface font-extrabold tracking-tight">Món Ăn
                Best-Seller Hôm Nay</h2>
        </div>

        <!-- Filter Tabs -->
        <div class="flex items-center gap-space-xs overflow-x-auto pb-2 md:pb-0">
            <button type="button"
                class="px-space-md py-1.5 rounded-full bg-primary text-on-primary font-label-md text-label-md shadow-sm shrink-0">Tất
                cả</button>
            <button type="button"
                class="px-space-md py-1.5 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface-variant font-label-md text-label-md transition-colors shrink-0">Cơm
                &amp; Mì</button>
            <button type="button"
                class="px-space-md py-1.5 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface-variant font-label-md text-label-md transition-colors shrink-0">Ăn
                Nhanh</button>
            <button type="button"
                class="px-space-md py-1.5 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface-variant font-label-md text-label-md transition-colors shrink-0">Trà
                Sữa &amp; Cafe</button>
            <button type="button"
                class="px-space-md py-1.5 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface-variant font-label-md text-label-md transition-colors shrink-0">Healthy</button>
        </div>
    </div>

    <!-- Lưới danh sách sản phẩm (Gọi tái sử dụng component con) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-lg">

        <!-- Sản phẩm 1 -->
        <x-customer.cards.product-card
            image="https://images.unsplash.com/photo-1582878826629-29b7ad1cdc43?auto=format&fit=crop&q=80&w=500"
            category="Phở Gia Truyền" rating="4.9" title="Phở Bò Tái Lăn Hương Vị Phố Cổ"
            desc="Bò xào lăn tỏi thơm lừng, nước dùng hầm xương tủy 12 tiếng ngọt thanh đậm đà." price="62.000đ"
            oldPrice="75.000đ" badge="Top 1 Bán Chạy" badgeBg="bg-secondary-container text-on-secondary-container" />

        <!-- Sản phẩm 2 -->
        <x-customer.cards.product-card
            image="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&q=80&w=500"
            category="Burger Bros" rating="4.8" title="Double Wagyu Cheese Burger"
            desc="Bò Wagyu nướng sốt khói độc quyền, phô mai Cheddar chảy tràn, bánh brioche bơ mềm." price="95.000đ"
            oldPrice="115.000đ" badge="Giảm 20k" badgeBg="bg-primary-fixed text-on-primary-fixed" />

        <!-- Sản phẩm 3 -->
        <x-customer.cards.product-card
            image="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&q=80&w=500"
            category="Bún Đậu Mạc Đĩnh Chi" rating="4.9" title="Mẹt Bún Đậu Thập Cẩm Đặc Biệt"
            desc="Đậu lướt ván giòn vỏ mềm ruột, chả cốm Ước Lễ chiên thơm, dồi sụn nướng than hoa." price="75.000đ"
            oldPrice="85.000đ" />

        <!-- Sản phẩm 4 -->
        <x-customer.cards.product-card
            image="https://images.unsplash.com/photo-1556679343-c7306c1976bc?auto=format&fit=crop&q=80&w=500"
            category="Phúc Long Coffee & Tea" rating="4.7" title="Trà Đào Cam Sả Tươi Mát (Size L)"
            desc="Vị trà đen đậm chất riêng, kết hợp cam vàng mọng nước và miếng đào giòn ngọt thơm." price="48.000đ"
            oldPrice="55.000đ" badge="Giải Nhiệt" badgeBg="bg-tertiary-fixed text-on-tertiary-fixed" />

    </div>
</section>
