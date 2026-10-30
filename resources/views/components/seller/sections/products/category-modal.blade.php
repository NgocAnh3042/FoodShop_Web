<div class="fixed inset-0 z-50 bg-inverse-surface/50 backdrop-blur-sm flex items-center justify-center p-space-md hidden"
    id="modal-add-category">
    <div class="w-full max-w-md bg-surface-container-lowest rounded-xl shadow-xl overflow-hidden flex flex-col">
        <div class="p-space-md bg-surface-container-low flex items-center justify-between">
            <h2 class="font-headline-sm text-headline-sm text-on-surface">Thêm nhóm danh mục mới</h2>
            <button
                class="w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-on-surface flex items-center justify-center"
                onclick="document.getElementById('modal-add-category').classList.add('hidden')" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <div class="p-space-md flex flex-col gap-space-md">
            <div class="flex flex-col gap-space-xs">
                <label class="font-label-md text-label-md text-on-surface">Tên danh mục <span
                        class="text-error">*</span></label>
                <input
                    class="w-full px-space-md py-2 rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none"
                    placeholder="Ví dụ: Set Cơm Trưa Tiết Kiệm..." type="text" />
            </div>
            <div class="flex flex-col gap-space-xs">
                <label class="font-label-md text-label-md text-on-surface">Biểu tượng Icon (Emoji)</label>
                <input
                    class="w-16 text-center px-space-md py-2 rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none"
                    type="text" value="🍱" />
            </div>
            <div class="flex flex-col gap-space-xs">
                <label class="font-label-md text-label-md text-on-surface">Ghi chú ngắn mô tả nhóm</label>
                <input
                    class="w-full px-space-md py-2 rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none"
                    placeholder="Dành cho dân văn phòng, giao nhanh 15p" type="text" />
            </div>
        </div>
        <div class="p-space-md bg-surface-container-low flex items-center justify-end gap-space-sm">
            <button
                class="px-space-md py-2 rounded-full bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md"
                onclick="document.getElementById('modal-add-category').classList.add('hidden')"
                type="button">Hủy</button>
            <button
                class="px-space-lg py-2 rounded-full bg-primary text-on-primary hover:bg-primary-container font-label-md text-label-md"
                onclick="document.getElementById('modal-add-category').classList.add('hidden')" type="button">Tạo danh
                mục</button>
        </div>
    </div>
</div>
