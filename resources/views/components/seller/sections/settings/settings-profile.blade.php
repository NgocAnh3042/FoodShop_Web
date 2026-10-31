<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col gap-space-md">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-space-xs">
            <span class="material-symbols-outlined text-primary text-[22px]">restaurant</span>
            <h2 class="font-headline-sm text-headline-sm text-on-surface">1. Hồ sơ quán ăn &amp; Nhận diện</h2>
        </div>
        <span class="font-label-sm text-label-sm text-tertiary bg-tertiary-fixed/30 px-space-xs py-0.5 rounded-full">Đã
            xác minh</span>
    </div>
    <!-- Cover Banner Upload Area -->
    <div class="relative w-full h-44 rounded-xl overflow-hidden shadow-inner group">
        <div class="bg-cover bg-center w-full h-full"
            data-alt="Traditional Hue cuisine restaurant banner showing authentic bun bo hue bowls, royal clay pots, fragrant broth steam, vintage wooden background, warm amber aesthetic, soft natural lighting."
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDduiLP9QbAzqtzbg9W4xCi1cfGGyeHtkRlAxtkuSnWYo4JNXzhtuzEholDlm5mNAQPdK2YUQWq93RYRwbCmkHGbg8x0yxHjfY_BB_hC8gPD0mdsEA2an-Wzc2cKfNPNlYI8VQUPo4EjBk4Yjfq3QqeBDQ74hzh6mqSWXNkIQOtPt_jPC6y67naxlp-D4DX30LcQgmXMmr5bKo6t0mm2QqusnZbgwlRGHrPVvnBLk1c')">
        </div>
        <div
            class="absolute inset-0 bg-inverse-surface/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity backdrop-blur-xs">
            <button
                class="px-space-md py-space-xs rounded-xl bg-surface-container-lowest text-on-surface font-label-md text-label-md shadow-md flex items-center gap-space-xs"
                type="button">
                <span class="material-symbols-outlined text-[18px]">add_a_photo</span>
                Đổi ảnh bìa quán
            </button>
        </div>
        <div
            class="absolute top-2 right-2 px-space-xs py-0.5 rounded-lg bg-inverse-surface/60 text-inverse-on-surface font-label-sm text-label-sm">
            Khuyến nghị: 1200 x 480px
        </div>
    </div>
    <!-- Avatar & Primary Fields -->
    <div class="flex flex-col sm:flex-row items-start gap-space-md -mt-10 sm:-mt-12 px-space-sm relative z-10">
        <div
            class="relative w-20 h-20 sm:w-24 sm:h-24 rounded-2xl overflow-hidden shadow-lg border-4 border-surface-container-lowest bg-surface-container">
            <img class="w-full h-full object-cover"
                data-alt="Close up brand icon logo of an authentic Vietnamese royal bowl of Bun Bo Hue with chopsticks, warm terracotta orange and golden accents, clean minimalist restaurant branding."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDCjPahRJGeNZfIlvY3BuILHAiKIplKoEylLWcrKdS2-7lXyik6TPS1_tGQLbbB0tMvM6lDW6pVAXzWHeUOd2NVN3nWup9sRN06XNQ90jfo_UjA0qdsF_8uZk2PNgHia4P_Xk5YInh7Uko8fbqNh57AoQop_nBQejys2G_3p0CrZTwjvNu3pLGuimMiEyXSaiPzoIPethkCanFUKqkRzkzou_el70ulckjaLQOViJ9X" />
            <button
                class="absolute inset-0 bg-inverse-surface/40 flex items-center justify-center text-inverse-on-surface opacity-0 hover:opacity-100 transition-opacity"
                type="button">
                <span class="material-symbols-outlined text-[20px]">photo_camera</span>
            </button>
        </div>
        <div class="flex-1 w-full pt-space-xs">
            <div class="flex flex-col gap-space-xs">
                <label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Tên thương hiệu trên ứng
                    dụng</label>
                <input
                    class="w-full px-space-md py-space-sm rounded-xl bg-surface-container-low font-headline-sm text-headline-sm text-on-surface focus:outline-none focus:bg-surface-container-lowest shadow-inner"
                    name="shop_name" type="text" value="Bếp Huế Cố Đô" />
            </div>
        </div>
    </div>
    <!-- Details Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md mt-space-xs">
        <x-seller.form.icon-input label="Địa chỉ chi nhánh" icon="location_on" icon-color="primary" name="shop_address"
            value="48 Hai Bà Trưng, P. Bến Nghé, Quận 1, TP. HCM" />
        <x-seller.form.icon-input label="Hotline hiển thị cho khách hàng" icon="call" icon-color="primary"
            name="shop_hotline" value="028 3822 9999" />
        <x-seller.form.icon-input label="Đường dây nóng quản lý bếp" icon="kitchen" icon-color="secondary"
            name="kitchen_phone" value="0908 123 456 (Bếp trưởng Tuấn)" />
        <x-seller.form.icon-input label="Phân loại ẩm thực" icon="ramen_dining" icon-color="primary" name="cuisine_type"
            value="Món Huế, Bún bò, Bánh bèo - nậm - lọc" />
    </div>
    <!-- Description -->
    <div class="flex flex-col gap-space-xs">
        <label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Mô tả ngắn &amp; Lời chào
            khách</label>
        <textarea name="description"
            class="w-full px-space-md py-space-sm rounded-xl bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none resize-none"
            rows="3">Gìn giữ hương vị cố đô truyền thống hơn 25 năm. Nước dùng ninh hầm xương bò 12 tiếng hòa quyện mắm ruốc chuẩn gốc Huế. Nguyên liệu tươi mới chọn lọc mỗi sáng sớm.</textarea>
    </div>
</div>
