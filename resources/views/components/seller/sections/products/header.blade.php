<div
    class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-space-md bg-surface-container-lowest p-space-md rounded-xl shadow-sm">
    <div class="flex items-center gap-space-md">
        <div class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center text-on-primary-fixed">
            <span class="material-symbols-outlined text-[28px]"
                style="font-variation-settings: 'FILL' 1;">restaurant_menu</span>
        </div>
        <div>
            <div class="flex items-center gap-space-xs">
                <h1 class="font-headline-md text-headline-md text-on-surface">Thực đơn &amp; Danh mục món ăn</h1>
                <span
                    class="px-space-xs py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm">Đã
                    đồng bộ POS</span>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Chi nhánh Bếp Huế Cố Đô • Cập nhật giá bán, tùy
                chọn món và quản lý tồn kho trực tiếp</p>
        </div>
    </div>
    <div class="flex flex-wrap items-center gap-space-xs w-full lg:w-auto">
        <button
            class="flex-1 sm:flex-initial flex items-center justify-center gap-space-xs px-space-md py-space-sm rounded-full bg-surface-container-high hover:bg-surface-container-highest text-on-surface transition-colors font-label-md text-label-md"
            type="button">
            <span class="material-symbols-outlined text-[18px]">file_download</span>
            <span>Xuất Excel</span>
        </button>
        <button
            class="flex-1 sm:flex-initial flex items-center justify-center gap-space-xs px-space-md py-space-sm rounded-full bg-surface-container-high hover:bg-surface-container-highest text-on-surface transition-colors font-label-md text-label-md"
            type="button">
            <span class="material-symbols-outlined text-[18px]">sync</span>
            <span>Đồng bộ thực đơn</span>
        </button>
        <button
            class="flex-1 sm:flex-initial flex items-center justify-center gap-space-xs px-space-md py-space-sm rounded-full bg-secondary-fixed text-on-secondary-fixed hover:bg-secondary-fixed-dim transition-colors font-label-md text-label-md"
            onclick="document.getElementById('modal-add-category').classList.remove('hidden')" type="button">
            <span class="material-symbols-outlined text-[18px]">category</span>
            <span>+ Tạo nhóm mới</span>
        </button>
        <button
            class="flex-1 sm:flex-initial flex items-center justify-center gap-space-xs px-space-lg py-space-sm rounded-full bg-primary text-on-primary hover:bg-primary-container transition-all font-label-md text-label-md shadow-sm"
            onclick="openDishModal('Tạo món mới', 'Điền thông tin món ăn mới để bổ sung vào thực đơn FoodHub', '', '', '', 'Còn hàng')"
            type="button">
            <span class="material-symbols-outlined text-[18px]">add_circle</span>
            <span>+ Thêm món mới</span>
        </button>
    </div>
</div>
    