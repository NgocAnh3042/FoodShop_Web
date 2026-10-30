<div class="fixed inset-0 z-50 bg-inverse-surface/50 backdrop-blur-sm flex items-center justify-center p-space-md hidden"
    id="modal-dish">
    <div
        class="w-full max-w-2xl bg-surface-container-lowest rounded-xl shadow-xl overflow-hidden flex flex-col max-h-[921px]">
        <!-- Header -->
        <div class="p-space-md bg-surface-container-low flex items-center justify-between">
            <div>
                <h2 class="font-headline-sm text-headline-sm text-on-surface" id="modal-dish-title">Chỉnh sửa món ăn</h2>
                <p class="font-body-sm text-body-sm text-on-surface-variant" id="modal-dish-subtitle">Cập nhật thông số
                    giá, ảnh và định lượng hiển thị cho thực khách</p>
            </div>
            <button
                class="w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-on-surface flex items-center justify-center"
                onclick="closeDishModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <!-- Body Form -->
        <div class="p-space-lg flex-1 overflow-y-auto flex flex-col gap-space-md">
            <!-- Photo Upload Preview Area -->
            <div class="flex flex-col gap-space-xs">
                <label class="font-label-md text-label-md text-on-surface">Hình ảnh đại diện món ăn</label>
                <div class="flex items-center gap-space-md p-space-sm rounded-xl bg-surface-container-low">
                    <div class="w-24 h-24 rounded-lg bg-surface-container overflow-hidden shrink-0">
                        <img class="w-full h-full object-cover"
                            data-alt="Cận cảnh bát bún bò huế thơm phức chuẩn vị với các lớp thịt bò, khoanh giò và chả cua óng ả bắt mắt dưới ánh đèn ấm áp studio ẩm thực."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAaC_5uiBWjdXwbMW1k_PR2TcDUN0Z-jY19eAtaJ0QyRsXGGTDYsTmZVEO8LlpOqYEZ0OSA4Vm3TtG8CkcFJ6mPBbJPwf6YmHgHtsPGdnFEvxjIYcz8irWrILAWapfWa3mvg3pnFk5vNMtzXk6K5MZ07B7yeka8XikPuH2ePVphEcV27YtpF5FaEXkFrqN9E-zukjoBiibCuu6B_YCtFLJz_ir-ID1xIymVl0yr-27B" />
                    </div>
                    <div class="flex flex-col gap-space-xs">
                        <div class="flex items-center gap-space-xs">
                            <button
                                class="px-space-md py-1.5 rounded-lg bg-primary text-on-primary font-label-sm text-label-sm"
                                type="button">Tải ảnh mới</button>
                            <button
                                class="px-space-sm py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm"
                                type="button">Xóa ảnh</button>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Khuyến nghị tỉ lệ 4:3 hoặc 1:1,
                            dung lượng &lt; 5MB (JPG, PNG)</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                <div class="flex flex-col gap-space-xs">
                    <label class="font-label-md text-label-md text-on-surface">Tên món ăn <span
                            class="text-error">*</span></label>
                    <input
                        class="w-full px-space-md py-2 rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none"
                        id="form-dish-name" type="text" value="Bún Bò Huế Đặc Biệt Cố Đô" />
                </div>
                <div class="flex flex-col gap-space-xs">
                    <label class="font-label-md text-label-md text-on-surface">Thuộc danh mục</label>
                    <select
                        class="w-full px-space-md py-2 rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none">
                        <option selected="">Món nước &amp; Bún bò</option>
                        <option>Cơm &amp; Món mặn Cố Đô</option>
                        <option>Bánh Huế truyền thống</option>
                        <option>Tráng miệng Cung Đình</option>
                        <option>Đồ uống tươi mát</option>
                        <option>Topping gọi thêm</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                <div class="flex flex-col gap-space-xs">
                    <label class="font-label-md text-label-md text-on-surface">Giá bán hiển thị (₫) <span
                            class="text-error">*</span></label>
                    <input
                        class="w-full px-space-md py-2 rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none"
                        id="form-dish-price" type="number" value="65000" />
                </div>
                <div class="flex flex-col gap-space-xs">
                    <label class="font-label-md text-label-md text-on-surface">Giá gốc gạch ngang (₫)</label>
                    <input
                        class="w-full px-space-md py-2 rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none"
                        id="form-dish-strike-price" type="number" value="75000" />
                </div>
                <div class="flex flex-col gap-space-xs">
                    <label class="font-label-md text-label-md text-on-surface">Thời gian chế biến TB</label>
                    <div class="flex items-center rounded-lg bg-surface-container-low px-space-md py-2">
                        <input
                            class="w-full bg-transparent font-body-md text-body-md text-on-surface focus:outline-none"
                            type="number" value="12" />
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Phút</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-space-xs">
                <label class="font-label-md text-label-md text-on-surface">Mô tả món ăn &amp; Định lượng nguyên
                    liệu</label>
                <textarea
                    class="w-full p-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none"
                    id="form-dish-desc" rows="3">Bắp bò hoa mềm ngọt, nạm bò giòn rụm, chả cua Huế thượng hạng, tiết luộc và móng giò giòn sần sật. Dùng kèm đĩa rau thơm, bắp chuối thái mịn và sa tế ớt cay nồng chuẩn vị cố đô.</textarea>
            </div>
            <!-- Quick Switch Status -->
            <div class="p-space-md rounded-xl bg-surface-container-low flex items-center justify-between">
                <div class="flex flex-col">
                    <span class="font-label-md text-label-md text-on-surface">Trạng thái mở bán trên hệ thống
                        FoodHub</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Khách hàng sẽ nhìn thấy và có thể
                        đặt món này ngay</span>
                </div>
                <button class="w-12 h-7 bg-tertiary rounded-full p-0.5 flex items-center transition-colors"
                    type="button">
                    <div
                        class="w-6 h-6 bg-on-tertiary rounded-full shadow-sm transform translate-x-5 transition-transform">
                    </div>
                </button>
            </div>
        </div>
        <!-- Footer Buttons -->
        <div class="p-space-md bg-surface-container-low flex items-center justify-end gap-space-sm">
            <button
                class="px-space-lg py-2 rounded-full bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md transition-colors"
                onclick="closeDishModal()" type="button">Hủy bỏ</button>
            <button
                class="px-space-xl py-2 rounded-full bg-primary text-on-primary hover:bg-primary-container font-label-md text-label-md transition-all shadow-sm"
                onclick="closeDishModal()" type="button">Lưu thay đổi</button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function openDishModal(title, subtitle, price, strikePrice, desc, status) {
            document.getElementById('modal-dish-title').innerText = title;
            document.getElementById('modal-dish-subtitle').innerText = subtitle;
            if (price) document.getElementById('form-dish-price').value = price;
            if (strikePrice) document.getElementById('form-dish-strike-price').value = strikePrice;
            if (desc) document.getElementById('form-dish-desc').value = desc;
            document.getElementById('modal-dish').classList.remove('hidden');
        }

        function closeDishModal() {
            document.getElementById('modal-dish').classList.add('hidden');
        }

        function openOptionsModal(dishName) {
            document.getElementById('modal-options-title').innerText = 'Topping & Tùy chọn: ' + dishName;
            document.getElementById('modal-options').classList.remove('hidden');
        }

        function closeOptionsModal() {
            document.getElementById('modal-options').classList.add('hidden');
        }
    </script>
@endpush
