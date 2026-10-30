<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
    <!-- Dish Card 1: Bún Bò Huế Đặc Biệt (Best Seller) -->
    <div
        class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
        <div class="flex flex-col gap-space-sm">
            <div class="relative w-full h-44 rounded-xl overflow-hidden bg-surface-container">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                    data-alt="Tô Bún Bò Huế Đặc Biệt đầy đặn nước dùng màu cam đậm sóng sánh, chả cua Huế vàng ruộm, thịt bắp bò hoa thái lát mỏng, giò heo thơm ngon cùng hành hoa thái mỏng trên nền bàn gỗ ấm cúng mang phong cách ẩm thực Cố Đô chất lượng cao."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSR0NXf7mB0kbCHq-Sr778KhdPiRn6_Xu44DP0n0HQDi-XdtJ61XmDYggjPuORbNS5dqAOZJ-dUoMfpVTZenH5StVv__3PNLiPafcYdGV5qShH_PgBb9ncYmaPVFNS72lfQAGKI5wdK7jeJVt-1BSB5zqjMQL30fZ8FeE5JnVpkxIo5Il4or8hkMhQfJh5zdvRA-ffSBTMFgAz3SDkqjnpFtp6QU-DYewUzhmcAZuD" />
                <div
                    class="absolute top-2 left-2 flex items-center gap-1 px-space-xs py-0.5 rounded-full bg-secondary text-on-secondary font-label-sm text-label-sm shadow-sm">
                    <span class="material-symbols-outlined text-[13px]"
                        style="font-variation-settings: 'FILL' 1;">local_fire_department</span>
                    <span>Bán chạy #1</span>
                </div>
                <div
                    class="absolute top-2 right-2 px-space-xs py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm">
                    ⭐ 4.9 (428 đánh giá)
                </div>
                <div
                    class="absolute bottom-2 left-2 px-space-xs py-0.5 rounded-md bg-inverse-surface/80 backdrop-blur-sm text-inverse-on-surface font-body-sm text-body-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">timer</span> 12 phút
                </div>
            </div>
            <div>
                <div class="flex items-start justify-between gap-space-xs">
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Bún Bò Huế Đặc Biệt Cố Đô
                    </h3>
                    <span
                        class="font-label-sm text-label-sm text-on-surface-variant bg-surface-container-low px-1.5 py-0.5 rounded">M-01</span>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-0.5">
                    Bắp bò hoa mềm ngọt, nạm bò giòn rụm, chả cua Huế thượng hạng, tiết luộc và móng giò giòn sần sật.
                </p>
            </div>
            <!-- Price & Sales stat -->
            <div class="flex items-baseline justify-between mt-1">
                <div class="flex items-baseline gap-space-xs">
                    <span class="font-headline-md text-headline-md text-primary font-bold">65.000₫</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant line-through">75.000₫</span>
                    <span class="font-label-sm text-label-sm text-error bg-error-container px-1 rounded">-13%</span>
                </div>
                <span class="font-label-sm text-label-sm text-tertiary">382 lượt bán / tuần</span>
            </div>
        </div>
        <!-- Controls & Stock Switch -->
        <div class="mt-space-md pt-space-sm bg-surface-container-low p-space-sm rounded-xl flex flex-col gap-space-sm">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-space-xs">
                    <span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span>
                    <span class="font-label-md text-label-md text-tertiary">Còn hàng &amp; Đang nhận đơn</span>
                </div>
                <!-- Interactive switch simulation -->
                <button class="w-11 h-6 bg-tertiary rounded-full p-0.5 flex items-center transition-colors"
                    type="button">
                    <div
                        class="w-5 h-5 bg-on-tertiary rounded-full shadow-sm transform translate-x-5 transition-transform">
                    </div>
                </button>
            </div>
            <div class="flex items-center gap-space-xs">
                <button
                    class="flex-1 py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm flex items-center justify-center gap-1 transition-colors"
                    onclick="openOptionsModal('Bún Bò Huế Đặc Biệt Cố Đô')" type="button">
                    <span class="material-symbols-outlined text-[16px] text-primary">tune</span>
                    <span>Cấu hình Topping (4)</span>
                </button>
                <button
                    class="py-1.5 px-space-sm rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                    onclick="openDishModal('Chỉnh sửa Bún Bò Huế Đặc Biệt', 'Điều chỉnh giá bán, ảnh món ăn và công thức', '65000', '75000', 'Bắp bò hoa, nạm bò, chả cua Huế thượng hạng, tiết luộc', 'Còn hàng')"
                    type="button">
                    <span class="material-symbols-outlined text-[16px]">edit</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Dish Card 2: Bún Bò Bắp Cua Cố Đô -->
    <div
        class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
        <div class="flex flex-col gap-space-sm">
            <div class="relative w-full h-44 rounded-xl overflow-hidden bg-surface-container">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                    data-alt="Tô Bún Bò Bắp Cua thơm lừng với những lát bắp bò tươi thái mỏng, chả cua quết vàng tươi nổi bật trên nước dùng ngập ánh sả ớt đỏ cam rực rỡ, kèm đĩa rau sống bắp chuối tươi mát bên cạnh."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5Zf0q1doKa80tFNzGJMKhCBugNxquodlYqC9CRojcvhRb-wTAKs6fPlFh65KHtxwtJtK1pSO_A14s3az5-bh0QeV77jXnNM_DiGqNTH2h1hdvwPiFwZfOK9M2pjq3scTVuHaluT4pk8x3Jm0i7Wr4UerEeb-q0TF0uJP8qL_mXQWgwKRu3Qn9WVHV0jIkhbVeIBgX80Y0X1QwE5gf0A10rqnw0KkuCTlSW0Aki9sH" />
                <div
                    class="absolute top-2 left-2 flex items-center gap-1 px-space-xs py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm shadow-sm">
                    <span class="material-symbols-outlined text-[13px]"
                        style="font-variation-settings: 'FILL' 1;">thumb_up</span>
                    <span>Khách yêu thích</span>
                </div>
                <div
                    class="absolute top-2 right-2 px-space-xs py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm">
                    ⭐ 4.8 (210 đánh giá)
                </div>
                <div
                    class="absolute bottom-2 left-2 px-space-xs py-0.5 rounded-md bg-inverse-surface/80 backdrop-blur-sm text-inverse-on-surface font-body-sm text-body-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">timer</span> 10 phút
                </div>
            </div>
            <div>
                <div class="flex items-start justify-between gap-space-xs">
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Bún Bò Bắp Cua Cố Đô</h3>
                    <span
                        class="font-label-sm text-label-sm text-on-surface-variant bg-surface-container-low px-1.5 py-0.5 rounded">M-02</span>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-0.5">
                    Tập trung vào vị ngọt thanh của bắp bò hoa hảo hạng và hương vị đậm đà ngầy ngậy của chả cua biển
                    nguyên chất.
                </p>
            </div>
            <div class="flex items-baseline justify-between mt-1">
                <div class="flex items-baseline gap-space-xs">
                    <span class="font-headline-md text-headline-md text-primary font-bold">55.000₫</span>
                </div>
                <span class="font-label-sm text-label-sm text-tertiary">215 lượt bán / tuần</span>
            </div>
        </div>
        <div class="mt-space-md pt-space-sm bg-surface-container-low p-space-sm rounded-xl flex flex-col gap-space-sm">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-space-xs">
                    <span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span>
                    <span class="font-label-md text-label-md text-tertiary">Còn hàng &amp; Đang nhận đơn</span>
                </div>
                <button class="w-11 h-6 bg-tertiary rounded-full p-0.5 flex items-center transition-colors"
                    type="button">
                    <div
                        class="w-5 h-5 bg-on-tertiary rounded-full shadow-sm transform translate-x-5 transition-transform">
                    </div>
                </button>
            </div>
            <div class="flex items-center gap-space-xs">
                <button
                    class="flex-1 py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm flex items-center justify-center gap-1 transition-colors"
                    onclick="openOptionsModal('Bún Bò Bắp Cua Cố Đô')" type="button">
                    <span class="material-symbols-outlined text-[16px] text-primary">tune</span>
                    <span>Cấu hình Topping (3)</span>
                </button>
                <button
                    class="py-1.5 px-space-sm rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                    onclick="openDishModal('Chỉnh sửa Bún Bò Bắp Cua', 'Điều chỉnh giá bán và thông tin sản phẩm', '55000', '', 'Bắp bò hoa thái mỏng, chả cua quết thơm ngậy', 'Còn hàng')"
                    type="button">
                    <span class="material-symbols-outlined text-[16px]">edit</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Dish Card 3: Bún Giò Nạc Cẩm Lệ (TẠM HẾT HÀNG) -->
    <div
        class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between group opacity-90">
        <div class="flex flex-col gap-space-sm">
            <div class="relative w-full h-44 rounded-xl overflow-hidden bg-surface-container">
                <img class="w-full h-full object-cover grayscale-[30%] group-hover:scale-105 transition-transform duration-300"
                    data-alt="Bát bún giò nạc thơm lừng với khoanh giò heo được ninh nhừ vừa tới, bì giòn thịt mềm, nước dùng trong vắt màu hổ phách, điểm xuyết hành lá và ớt chưng đỏ thắm truyền thống xứ Huế."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBd4VXL94SNqjUPbNlxbnDZ7O4-5lBSXKRTdAymJKBStFPcm-dFa36yJ0ip9SG9_lOvMaa-WcCDwiFlcCNAZI5fVSJntVdAH4BnjOZgk6ft3VCIu-cZSTu9mSZ6n6eo-4wipz8H0U9H-evPqa_450EnDXjrcORu_4rHMy8VDW5eZCKVKaMyrj8MhOfKh6fvDrmF0eEkuP83hdq6zflDpOQ05BZf_cE8G19IFt4kIvtX" />
                <div
                    class="absolute top-2 left-2 flex items-center gap-1 px-space-xs py-0.5 rounded-full bg-error text-on-error font-label-sm text-label-sm shadow-sm">
                    <span class="material-symbols-outlined text-[13px]">block</span>
                    <span>Tạm ngưng nhận đơn</span>
                </div>
                <div
                    class="absolute top-2 right-2 px-space-xs py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm">
                    ⭐ 4.6 (98 đánh giá)
                </div>
                <div class="absolute inset-0 bg-on-surface/20 flex items-center justify-center">
                    <span
                        class="px-space-md py-1 rounded-full bg-error-container text-on-error-container font-label-md text-label-md shadow-md">HẾT
                        NGUYÊN LIỆU GIÒ HEO</span>
                </div>
            </div>
            <div>
                <div class="flex items-start justify-between gap-space-xs">
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Bún Giò Nạc Cẩm Lệ</h3>
                    <span
                        class="font-label-sm text-label-sm text-on-surface-variant bg-surface-container-low px-1.5 py-0.5 rounded">M-03</span>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-0.5">
                    Khoanh giò nạc giòn sần sật ninh kỹ cùng sả cây, đậm đà vị ruốc Huế không gắt mùi.
                </p>
            </div>
            <div class="flex items-baseline justify-between mt-1">
                <div class="flex items-baseline gap-space-xs">
                    <span class="font-headline-md text-headline-md text-on-surface font-bold">50.000₫</span>
                </div>
                <span class="font-label-sm text-label-sm text-on-surface-variant">89 lượt bán / tuần</span>
            </div>
        </div>
        <!-- Inactive Toggle -->
        <div class="mt-space-md pt-space-sm bg-surface-container-low p-space-sm rounded-xl flex flex-col gap-space-sm">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-space-xs">
                    <span class="w-2.5 h-2.5 rounded-full bg-error"></span>
                    <span class="font-label-md text-label-md text-error">Hết hàng / Tạm tắt</span>
                </div>
                <button
                    class="w-11 h-6 bg-surface-container-highest rounded-full p-0.5 flex items-center transition-colors"
                    type="button">
                    <div
                        class="w-5 h-5 bg-on-surface-variant rounded-full shadow-sm transform translate-x-0 transition-transform">
                    </div>
                </button>
            </div>
            <div class="flex items-center gap-space-xs">
                <button
                    class="flex-1 py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm flex items-center justify-center gap-1 transition-colors"
                    onclick="openOptionsModal('Bún Giò Nạc Cẩm Lệ')" type="button">
                    <span class="material-symbols-outlined text-[16px] text-primary">tune</span>
                    <span>Cấu hình Topping (2)</span>
                </button>
                <button
                    class="py-1.5 px-space-sm rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                    onclick="openDishModal('Chỉnh sửa Bún Giò Nạc Cẩm Lệ', 'Cập nhật số lượng và tình trạng kho', '50000', '', 'Khoanh giò heo nạc giòn, rau thơm, bún sợi to', 'Hết hàng')"
                    type="button">
                    <span class="material-symbols-outlined text-[16px]">edit</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Dish Card 4: Bún Bò Gân Giòn Xứ Huế -->
    <div
        class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
        <div class="flex flex-col gap-space-sm">
            <div class="relative w-full h-44 rounded-xl overflow-hidden bg-surface-container">
                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                    data-alt="Tô Bún Bò Gân Giòn hấp dẫn với những miếng gân bò hoa trong suốt dẻo thơm, điểm xuyết hạt tiêu sọ và hành ngò xanh mướt, nước lèo trong veo phảng phất hương mắm ruốc thanh tao đặc trưng của đất Thần Kinh."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCcySBW3Dpkm0dAVmYIYfK805Nen-kNgsws614JxLF7Bh3koIx6LtVlONWZcfosVlfA3PyS0NQu66yTOUGw3DCHvNz0Iki4lX7iv1OmtsAL7X9feTcxpBROM0fin7txT4XqVCZKKGwU9KeHaAZC_IwqMlsf1sUOS4IlGsXehbtrmtCFEgg-UoYFKDiDMBvEz1krfM6XQMkZ1dAN2ccmSU1r1qzBm-4eelByaNq9T_Wo" />
                <div
                    class="absolute top-2 left-2 flex items-center gap-1 px-space-xs py-0.5 rounded-full bg-surface-container-highest text-on-surface font-label-sm text-label-sm shadow-sm">
                    <span>Món truyền thống</span>
                </div>
                <div
                    class="absolute top-2 right-2 px-space-xs py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm">
                    ⭐ 4.7 (140 đánh giá)
                </div>
                <div
                    class="absolute bottom-2 left-2 px-space-xs py-0.5 rounded-md bg-inverse-surface/80 backdrop-blur-sm text-inverse-on-surface font-body-sm text-body-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">timer</span> 12 phút
                </div>
            </div>
            <div>
                <div class="flex items-start justify-between gap-space-xs">
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Bún Bò Gân Giòn Xứ Huế</h3>
                    <span
                        class="font-label-sm text-label-sm text-on-surface-variant bg-surface-container-low px-1.5 py-0.5 rounded">M-04</span>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-0.5">
                    Gân trong giòn sần sật không bị dai, giữ trọn collagen tươi được ninh hầm liên tục 6 tiếng.
                </p>
            </div>
            <div class="flex items-baseline justify-between mt-1">
                <div class="flex items-baseline gap-space-xs">
                    <span class="font-headline-md text-headline-md text-primary font-bold">52.000₫</span>
                </div>
                <span class="font-label-sm text-label-sm text-tertiary">144 lượt bán / tuần</span>
            </div>
        </div>
        <div class="mt-space-md pt-space-sm bg-surface-container-low p-space-sm rounded-xl flex flex-col gap-space-sm">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-space-xs">
                    <span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span>
                    <span class="font-label-md text-label-md text-tertiary">Còn hàng &amp; Đang nhận đơn</span>
                </div>
                <button class="w-11 h-6 bg-tertiary rounded-full p-0.5 flex items-center transition-colors"
                    type="button">
                    <div
                        class="w-5 h-5 bg-on-tertiary rounded-full shadow-sm transform translate-x-5 transition-transform">
                    </div>
                </button>
            </div>
            <div class="flex items-center gap-space-xs">
                <button
                    class="flex-1 py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm flex items-center justify-center gap-1 transition-colors"
                    onclick="openOptionsModal('Bún Bò Gân Giòn Xứ Huế')" type="button">
                    <span class="material-symbols-outlined text-[16px] text-primary">tune</span>
                    <span>Cấu hình Topping (3)</span>
                </button>
                <button
                    class="py-1.5 px-space-sm rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                    onclick="openDishModal('Chỉnh sửa Bún Bò Gân Giòn', 'Cập nhật giá và nguyên liệu', '52000', '', 'Gân bò hoa trong giòn, bún tươi, nước sả ruốc', 'Còn hàng')"
                    type="button">
                    <span class="material-symbols-outlined text-[16px]">edit</span>
                </button>
            </div>
        </div>
    </div>
</div>
