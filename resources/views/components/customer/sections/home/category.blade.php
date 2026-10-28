<section class="w-full max-w-7xl mx-auto px-gutter py-space-xl">
    <div class="flex items-center justify-between pb-space-lg">
        <div class="flex flex-col">
            <span class="font-label-sm text-label-sm text-primary uppercase font-extrabold tracking-wider">Khám Phá Hương
                Vị</span>
            <h2 class="font-headline-lg text-headline-lg text-on-surface font-extrabold tracking-tight">Danh Mục Ẩm Thực
                Nổi Bật</h2>
        </div>
        <a class="font-label-lg text-label-lg text-primary hover:text-primary-container flex items-center gap-1 font-bold group transition-colors"
            href="#">
            <span>Xem tất cả 24 thể loại</span>
            <span
                class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </a>
    </div>

    <!-- Lưới 6 cột chứa các component -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-space-md">
        <x-customer.cards.category-card title="Cơm Văn Phòng" count="540+ quán" icon="bento" bgColor="bg-secondary-fixed"
            textColor="text-on-secondary-fixed" />
        <x-customer.cards.category-card title="Bún - Phở - Mì" count="820+ quán" icon="ramen_dining"
            bgColor="bg-primary-fixed" textColor="text-on-primary-fixed" />
        <x-customer.cards.category-card title="Fastfood & Burger" count="310+ quán" icon="lunch_dining"
            bgColor="bg-secondary-fixed-dim" textColor="text-on-secondary-fixed" />
        <x-customer.cards.category-card title="Đồ Uống & Trà Sữa" count="650+ quán" icon="local_cafe"
            bgColor="bg-primary-fixed-dim" textColor="text-on-primary-fixed" />
        <x-customer.cards.category-card title="Món Chay Thanh Đạm" count="190+ quán" icon="psychiatry"
            bgColor="bg-tertiary-fixed" textColor="text-on-tertiary-fixed" />
        <x-customer.cards.category-card title="Ăn Vặt & Tráng Miệng" count="420+ quán" icon="cake"
            bgColor="bg-surface-variant" textColor="text-on-surface" />
    </div>
</section>
