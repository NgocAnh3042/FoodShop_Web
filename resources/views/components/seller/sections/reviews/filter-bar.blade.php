<div class="p-space-md rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-sm">
    <div class="flex flex-wrap items-center justify-between gap-space-sm">
        <!-- Filter Pills -->
        <div class="flex flex-wrap items-center gap-space-xs" id="filter-pills">
            <button
                class="px-space-md py-space-xs rounded-full bg-primary text-on-primary font-label-md text-label-md flex items-center gap-space-xs shadow-sm transition-all"
                type="button">
                <span>Tất cả đánh giá</span>
                <span class="px-1.5 py-0.2 rounded-full bg-on-primary/20 text-on-primary text-[11px]">1.420</span>
            </button>
            <button
                class="px-space-md py-space-xs rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface-variant font-label-md text-label-md flex items-center gap-space-xs transition-all"
                type="button">
                <span>Chưa phản hồi</span>
                <span class="px-1.5 py-0.2 rounded-full bg-error text-on-error font-label-sm text-label-sm">4</span>
            </button>
            <button
                class="px-space-md py-space-xs rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface-variant font-label-md text-label-md flex items-center gap-space-xs transition-all"
                type="button">
                <span class="material-symbols-outlined text-[16px]">photo_library</span>
                <span>Có hình ảnh / video</span>
                <span class="text-on-surface-variant/70 font-label-sm text-label-sm">280</span>
            </button>
            <button
                class="px-space-md py-space-xs rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface-variant font-label-md text-label-md flex items-center gap-1 transition-all"
                type="button">
                <span>5 sao</span>
                <span class="material-symbols-outlined text-[14px] text-secondary"
                    style="font-variation-settings: 'FILL' 1;">star</span>
            </button>
            <button
                class="px-space-md py-space-xs rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface-variant font-label-md text-label-md flex items-center gap-1 transition-all"
                type="button">
                <span>Dưới 3 sao</span>
                <span class="text-error font-bold">★</span>
            </button>
        </div>
        <!-- Dish Specific Dropdown -->
        <div class="flex items-center gap-space-xs w-full sm:w-auto">
            <div class="relative w-full sm:w-64">
                <select
                    class="w-full appearance-none pl-space-md pr-space-lg py-space-xs rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none cursor-pointer">
                    <option value="">Lọc theo món ăn cụ thể</option>
                    <option value="bun-bo-hue">Bún Bò Giò Heo Đặc Biệt</option>
                    <option value="banh-beo">Bánh Bèo Chén Tôm Cháy</option>
                    <option value="banh-nam">Bánh Nậm Lá Dong</option>
                    <option value="nem-lui">Nem Lụi Nướng Than Hoa</option>
                    <option value="che-bot-loc">Chè Bột Lọc Heo Quay</option>
                </select>
                <span
                    class="material-symbols-outlined text-on-surface-variant absolute right-2.5 top-1/2 -translate-y-1/2 pointer-events-none text-[18px]">expand_more</span>
            </div>
        </div>
    </div>
</div>
