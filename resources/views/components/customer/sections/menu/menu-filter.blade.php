<!-- LEFT FILTER SIDEBAR (3 cols on Desktop) -->
<aside class="lg:col-span-3 flex flex-col gap-space-lg sticky top-24">
    <div class="bg-surface-container-lowest rounded-2xl p-space-lg shadow-sm space-y-space-lg">
        <!-- Filter Header & Reset -->
        <div class="flex items-center justify-between pb-space-xs">
            <div class="flex items-center gap-space-xs">
                <span class="material-symbols-outlined text-primary text-[22px]">tune</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-bold">Bộ lọc tìm kiếm</span>
            </div>
            <button class="font-label-md text-label-md text-primary hover:text-primary-container transition-colors"
                type="button">
                Thiết lập lại
            </button>
        </div>
        <!-- Section 1: Categories -->
        <div class="space-y-space-sm">
            <span class="font-label-md text-label-md text-on-surface font-bold block uppercase tracking-wider text-xs">
                Danh mục món
            </span>
            <div class="flex flex-col gap-1.5">
                <label
                    class="flex items-center justify-between p-2 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all cursor-pointer">
                    <div class="flex items-center gap-2.5">
                        <span class="material-symbols-outlined text-primary text-[20px]">ramen_dining</span>
                        <span class="font-body-md text-body-md text-on-surface font-medium">Món nước (Phở, Bún,
                            Mì)</span>
                    </div>
                    <input checked="" class="w-4 h-4 accent-primary rounded cursor-pointer" type="checkbox" />
                </label>
                <label
                    class="flex items-center justify-between p-2 rounded-xl hover:bg-surface-container transition-all cursor-pointer">
                    <div class="flex items-center gap-2.5">
                        <span class="material-symbols-outlined text-secondary text-[20px]">lunch_dining</span>
                        <span class="font-body-md text-body-md text-on-surface font-medium">Món khô &amp; Cơm
                            phần</span>
                    </div>
                    <input checked="" class="w-4 h-4 accent-primary rounded cursor-pointer" type="checkbox" />
                </label>
                <label
                    class="flex items-center justify-between p-2 rounded-xl hover:bg-surface-container transition-all cursor-pointer">
                    <div class="flex items-center gap-2.5">
                        <span class="material-symbols-outlined text-tertiary text-[20px]">local_cafe</span>
                        <span class="font-body-md text-body-md text-on-surface font-medium">Trà, Cà phê &amp; Sinh
                            tố</span>
                    </div>
                    <input class="w-4 h-4 accent-primary rounded cursor-pointer" type="checkbox" />
                </label>
                <label
                    class="flex items-center justify-between p-2 rounded-xl hover:bg-surface-container transition-all cursor-pointer">
                    <div class="flex items-center gap-2.5">
                        <span class="material-symbols-outlined text-primary-container text-[20px]">icecream</span>
                        <span class="font-body-md text-body-md text-on-surface font-medium">Tráng miệng &amp; Ăn
                            vặt</span>
                    </div>
                    <input class="w-4 h-4 accent-primary rounded cursor-pointer" type="checkbox" />
                </label>
            </div>
        </div>
        <!-- Section 2: Price Range Slider -->
        <div class="space-y-space-sm pt-space-xs">
            <div class="flex items-center justify-between">
                <span class="font-label-md text-label-md text-on-surface font-bold uppercase tracking-wider text-xs">
                    Khoảng giá (VNĐ)
                </span>
                <span class="font-label-md text-label-md text-primary font-bold">0đ - 350.000đ</span>
            </div>
            <div class="pt-2">
                <input class="w-full accent-primary h-2 bg-surface-container rounded-lg cursor-pointer" max="500000"
                    min="0" step="10000" type="range" value="350000" />
                <div
                    class="flex justify-between items-center text-on-surface-variant font-label-sm text-label-sm pt-1.5">
                    <span>0đ</span>
                    <span>250.000đ</span>
                    <span>500.000đ</span>
                </div>
            </div>
            <!-- Quick price pill buttons -->
            <div class="grid grid-cols-3 gap-1.5 pt-1">
                <button
                    class="py-1 px-2 text-center rounded-lg bg-surface-container-low hover:bg-surface-container font-label-sm text-label-sm text-on-surface transition-colors"
                    type="button">Dưới 50k</button>
                <button
                    class="py-1 px-2 text-center rounded-lg bg-surface-container-low hover:bg-surface-container font-label-sm text-label-sm text-on-surface transition-colors"
                    type="button">50k - 150k</button>
                <button
                    class="py-1 px-2 text-center rounded-lg bg-surface-container-low hover:bg-surface-container font-label-sm text-label-sm text-on-surface transition-colors"
                    type="button">Trên 150k</button>
            </div>
        </div>
        <!-- Section 3: Rating (Đánh giá) -->
        <div class="space-y-space-sm pt-space-xs">
            <span class="font-label-md text-label-md text-on-surface font-bold uppercase tracking-wider text-xs">
                Đánh giá chất lượng
            </span>
            <div class="space-y-1.5">
                <label
                    class="flex items-center justify-between p-2 rounded-xl bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors">
                    <div class="flex items-center gap-1.5 text-secondary-container">
                        <span class="material-symbols-outlined text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="font-label-md text-label-md text-on-surface font-semibold">Từ 4.5 sao trở
                            lên</span>
                        <span class="text-on-surface-variant text-label-sm">(Cực ngon)</span>
                    </div>
                    <input checked="" class="w-4 h-4 accent-primary cursor-pointer" name="rating-filter"
                        type="radio" />
                </label>
                <label
                    class="flex items-center justify-between p-2 rounded-xl hover:bg-surface-container cursor-pointer transition-colors">
                    <div class="flex items-center gap-1.5 text-secondary-container">
                        <span class="material-symbols-outlined text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="font-label-md text-label-md text-on-surface font-semibold">Từ 4.0 sao trở
                            lên</span>
                    </div>
                    <input class="w-4 h-4 accent-primary cursor-pointer" name="rating-filter" type="radio" />
                </label>
            </div>
        </div>
        <!-- Section 4: Dietary & Special Lifestyle -->
        <div class="space-y-space-sm pt-space-xs">
            <span class="font-label-md text-label-md text-on-surface font-bold uppercase tracking-wider text-xs">
                Chế độ dinh dưỡng
            </span>
            <div class="flex flex-col gap-1.5">
                <label
                    class="flex items-center justify-between p-2 rounded-xl hover:bg-surface-container transition-colors cursor-pointer">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-tertiary text-[18px]">eco</span>
                        <span class="font-body-md text-body-md text-on-surface">Món chay (Vegetarian)</span>
                    </div>
                    <input class="w-4 h-4 accent-primary rounded cursor-pointer" type="checkbox" />
                </label>
                <label
                    class="flex items-center justify-between p-2 rounded-xl hover:bg-surface-container transition-colors cursor-pointer">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary text-[18px]">health_and_safety</span>
                        <span class="font-body-md text-body-md text-on-surface">Chuẩn Halal</span>
                    </div>
                    <input class="w-4 h-4 accent-primary rounded cursor-pointer" type="checkbox" />
                </label>
                <label
                    class="flex items-center justify-between p-2 rounded-xl hover:bg-surface-container transition-colors cursor-pointer">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-tertiary-container text-[18px]">favorite</span>
                        <span class="font-body-md text-body-md text-on-surface">Ít calo / Eat Clean</span>
                    </div>
                    <input checked="" class="w-4 h-4 accent-primary rounded cursor-pointer" type="checkbox" />
                </label>
            </div>
        </div>
        <!-- Section 5: Delivery Options -->
        <div class="space-y-space-sm pt-space-xs">
            <span class="font-label-md text-label-md text-on-surface font-bold uppercase tracking-wider text-xs">
                Ưu đãi &amp; Dịch vụ
            </span>
            <div class="flex flex-col gap-1.5">
                <label
                    class="flex items-center justify-between p-2 rounded-xl hover:bg-surface-container transition-colors cursor-pointer">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">moped</span>
                        <span class="font-body-md text-body-md text-on-surface">Freeship Extra</span>
                    </div>
                    <input checked="" class="w-4 h-4 accent-primary rounded cursor-pointer" type="checkbox" />
                </label>
                <label
                    class="flex items-center justify-between p-2 rounded-xl hover:bg-surface-container transition-colors cursor-pointer">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-tertiary text-[18px]">verified</span>
                        <span class="font-body-md text-body-md text-on-surface">Quán đối tác uy tín</span>
                    </div>
                    <input checked="" class="w-4 h-4 accent-primary rounded cursor-pointer" type="checkbox" />
                </label>
            </div>
        </div>
        <!-- Quick Promo Small Banner -->
        <div
            class="p-space-md rounded-xl bg-gradient-to-br from-primary-fixed to-secondary-fixed text-on-primary-fixed space-y-1">
            <span class="font-label-sm text-label-sm uppercase font-extrabold tracking-wider block">Ưu đãi độc
                quyền</span>
            <p class="font-headline-sm text-headline-sm font-bold leading-tight">Nhập "FOODHUB" giảm 25.000đ</p>
            <p class="font-body-sm text-body-sm opacity-90">Áp dụng cho đơn hàng trưa từ 100k</p>
        </div>
    </div>
</aside>
