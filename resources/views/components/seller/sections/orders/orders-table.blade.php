<div
    class="rounded-2xl bg-surface-container-lowest shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] overflow-hidden">
    <div class="p-space-md bg-surface-container-low flex items-center justify-between">
        <div class="flex items-center gap-space-sm">
            <span class="font-headline-sm text-headline-sm text-on-surface font-bold">Danh sách đơn xử lý ngay</span>
            <span class="px-2 py-0.5 rounded-md bg-primary/10 text-primary font-label-sm text-label-sm font-semibold">Ưu
                tiên theo thời gian giao</span>
        </div>
        <div class="flex items-center gap-space-xs">
            <button class="p-1.5 rounded-lg hover:bg-surface-container text-on-surface-variant" title="Làm mới"
                type="button">
                <span class="material-symbols-outlined text-[18px]">refresh</span>
            </button>
            <button class="p-1.5 rounded-lg hover:bg-surface-container text-on-surface-variant" title="Tùy chọn cột"
                type="button">
                <span class="material-symbols-outlined text-[18px]">view_column</span>
            </button>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr
                    class="bg-surface-container-low/50 text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
                    <th class="py-space-sm px-space-md font-semibold">Mã đơn &amp; Nguồn</th>
                    <th class="py-space-sm px-space-md font-semibold">Khách hàng &amp; Lưu ý</th>
                    <th class="py-space-sm px-space-md font-semibold">Món &amp; Số lượng</th>
                    <th class="py-space-sm px-space-md font-semibold">Tổng &amp; TT</th>
                    <th class="py-space-sm px-space-md font-semibold">Tiến độ bếp</th>
                    <th class="py-space-sm px-space-md font-semibold">Tài xế phụ trách</th>
                    <th class="py-space-sm px-space-md font-semibold text-right">Xử lý</th>
                </tr>
            </thead>
            <tbody class="divide-y-0 text-body-md font-body-md">
                <!-- ROW 1: ACTIVE / HIGHLIGHTED (FH-90145) -->
                <tr class="bg-primary/5 hover:bg-primary/10 transition-colors cursor-pointer"
                    onclick="selectOrder('FH-90145')">
                    <td class="py-space-md px-space-md align-top">
                        <div class="flex items-center gap-1.5 mb-1">
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="font-headline-sm text-headline-sm text-primary font-bold">#FH-90145</span>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant block">11:42 (12 phút
                            trước)</span>
                        <span
                            class="mt-1 inline-block px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm">FoodHub
                            Giao</span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <p class="font-label-md text-label-md text-on-surface font-semibold">Trần Minh Hoàng</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">0982 ••• 849</p>
                        <div
                            class="mt-1 flex items-start gap-1 p-1 rounded bg-secondary-fixed/30 text-on-secondary-container">
                            <span class="material-symbols-outlined text-[14px] text-secondary mt-0.5">edit_note</span>
                            <span class="font-label-sm text-label-sm leading-tight">Ít cay, nhiều bắp hoa</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <p class="font-label-md text-label-md text-on-surface">2x Bún Bò Huế Đặc Biệt</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant truncate max-w-[180px]">1x Canh khổ
                            qua cá thát lát</p>
                        <span class="font-label-sm text-label-sm text-primary font-medium">+1 Trà cung đình</span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold block">198.000đ</span>
                        <span
                            class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm mt-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span> MoMo
                        </span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-secondary-fixed text-secondary font-label-sm text-label-sm font-bold mb-1">
                            <span class="material-symbols-outlined text-[14px]">soup_kitchen</span> Đang nấu (04:15)
                        </span>
                        <div class="w-24 bg-surface-container-high h-1.5 rounded-full overflow-hidden">
                            <div class="bg-secondary h-full rounded-full w-2/3"></div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <div class="flex items-center gap-1.5">
                            <div
                                class="w-7 h-7 rounded-full bg-surface-container-highest flex items-center justify-center font-label-sm text-label-sm font-bold text-on-surface">
                                NV</div>
                            <div>
                                <p class="font-label-md text-label-md text-on-surface leading-tight">Nguyễn Văn Vũ</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-tight">29E2-849.21
                                </p>
                            </div>
                        </div>
                        <span class="text-tertiary font-label-sm text-label-sm mt-1 inline-flex items-center gap-0.5">
                            <span class="material-symbols-outlined text-[14px]">near_me</span> Cách quán 350m
                        </span>
                    </td>
                    <td class="py-space-md px-space-md align-top text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="px-space-sm py-1 rounded-lg bg-tertiary text-on-tertiary font-label-sm text-label-sm hover:opacity-90 transition-opacity"
                                title="Báo món hoàn tất để tài xế lấy" type="button">
                                Xong món
                            </button>
                            <button class="p-1 rounded-lg hover:bg-surface-container text-on-surface-variant"
                                title="In phiếu chế biến" type="button">
                                <span class="material-symbols-outlined text-[18px]">print</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- ROW 2: NEW ARRIVAL (FH-90148) -->
                <tr class="bg-surface-container-lowest hover:bg-surface-container-low transition-colors cursor-pointer">
                    <td class="py-space-md px-space-md align-top">
                        <div class="flex items-center gap-1.5 mb-1">
                            <span class="w-2 h-2 rounded-full bg-primary animate-ping"></span>
                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold">#FH-90148</span>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant block">11:49 (Vừa xong)</span>
                        <span
                            class="mt-1 inline-block px-1.5 py-0.5 rounded bg-primary-fixed text-on-primary-fixed-variant font-label-sm text-label-sm">Đơn
                            Hẹn Giờ</span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <p class="font-label-md text-label-md text-on-surface font-semibold">Lê Thảo My</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">0914 ••• 332</p>
                        <span class="font-body-sm text-body-sm text-on-surface-variant italic">Không ớt sa tế</span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <p class="font-label-md text-label-md text-on-surface">3x Bánh Bèo Chén Tôm Cháy</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">1x Nem lụi nướng sả (10 cây)</p>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold block">245.000đ</span>
                        <span
                            class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm mt-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Thẻ ATM/Visa
                        </span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-primary-fixed text-on-primary-fixed-variant font-label-sm text-label-sm font-bold">
                            <span class="material-symbols-outlined text-[14px]">alarm</span> Cần nhận (01:45)
                        </span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span class="font-body-sm text-body-sm text-on-surface-variant italic">Đang điều phối tài
                            xế...</span>
                    </td>
                    <td class="py-space-md px-space-md align-top text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="px-space-sm py-1 rounded-lg bg-primary text-on-primary font-label-sm text-label-sm hover:opacity-90 transition-opacity"
                                type="button">
                                Nhận ngay
                            </button>
                            <button class="p-1 rounded-lg hover:bg-error-container text-error" title="Từ chối đơn"
                                type="button">
                                <span class="material-symbols-outlined text-[18px]">close</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- ROW 3: DRIVER PICKING UP / SHIPPING (FH-90142) -->
                <tr class="bg-surface-container-lowest hover:bg-surface-container-low transition-colors cursor-pointer">
                    <td class="py-space-md px-space-md align-top">
                        <div class="flex items-center gap-1.5 mb-1">
                            <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold">#FH-90142</span>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant block">11:30 (24 phút
                            trước)</span>
                        <span
                            class="mt-1 inline-block px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm">FoodHub
                            Giao</span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <p class="font-label-md text-label-md text-on-surface font-semibold">Đoàn Quốc Tuấn</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">0977 ••• 192</p>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Kèm thêm rau muống chẻ</span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <p class="font-label-md text-label-md text-on-surface">1x Bún Bắp Bò Gân Trong</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">1x Chè Hạt Sen Long Nhãn</p>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold block">115.000đ</span>
                        <span
                            class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm mt-1">
                            Tiền mặt (COD)
                        </span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px]">two_wheeler</span> Đang trên đường
                        </span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <div class="flex items-center gap-1.5">
                            <div
                                class="w-7 h-7 rounded-full bg-surface-container-highest flex items-center justify-center font-label-sm text-label-sm font-bold text-on-surface">
                                LT</div>
                            <div>
                                <p class="font-label-md text-label-md text-on-surface leading-tight">Lý Thành Đạt</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-tight">30F1-529.18
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md align-top text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button class="p-1 rounded-lg hover:bg-surface-container text-on-surface-variant"
                                title="In lại hóa đơn" type="button">
                                <span class="material-symbols-outlined text-[18px]">receipt</span>
                            </button>
                            <button class="p-1 rounded-lg hover:bg-surface-container text-on-surface-variant"
                                title="Theo dõi lộ trình" type="button">
                                <span class="material-symbols-outlined text-[18px]">map</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- ROW 4: TAKEAWAY PICKUP (FH-90139) -->
                <tr
                    class="bg-surface-container-lowest hover:bg-surface-container-low transition-colors cursor-pointer">
                    <td class="py-space-md px-space-md align-top">
                        <div class="flex items-center gap-1.5 mb-1">
                            <span class="w-2 h-2 rounded-full bg-secondary"></span>
                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold">#FH-90139</span>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant block">11:15 (40 phút
                            trước)</span>
                        <span
                            class="mt-1 inline-block px-1.5 py-0.5 rounded bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-semibold">Khách
                            Tự Lấy</span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <p class="font-label-md text-label-md text-on-surface font-semibold">Chị Hoàng Yến</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">0903 ••• 664</p>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Mang hộp riêng của khách</span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <p class="font-label-md text-label-md text-on-surface">4x Cơm Hến Cố Đô</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">2x Bánh lọc trần gói lá chuối</p>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold block">310.000đ</span>
                        <span
                            class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm mt-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span> Đã thanh toán
                        </span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-surface-container-highest text-on-surface font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px]">storefront</span> Chờ khách đến
                        </span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Tự đến quầy lấy</span>
                    </td>
                    <td class="py-space-md px-space-md align-top text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="px-space-sm py-1 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm hover:bg-surface-container-highest"
                                type="button">
                                Đã giao khách
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- ROW 5: DINE-IN TABLE ORDER (FH-90135) -->
                <tr
                    class="bg-surface-container-lowest hover:bg-surface-container-low transition-colors cursor-pointer">
                    <td class="py-space-md px-space-md align-top">
                        <div class="flex items-center gap-1.5 mb-1">
                            <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold">#FH-90135</span>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant block">11:05 (50 phút
                            trước)</span>
                        <span
                            class="mt-1 inline-block px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm">Bàn
                            số 06 (Lầu 1)</span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <p class="font-label-md text-label-md text-on-surface font-semibold">Bàn 6 - Khách lẻ 4 người
                        </p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Phục vụ: Em Lan</p>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <p class="font-label-md text-label-md text-on-surface">1x Lẩu Bò Nhúng Dấm Huế</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">1x Đĩa bắp bò thêm</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">4x Trà đá</p>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold block">485.000đ</span>
                        <span
                            class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm mt-1">
                            Chưa thanh toán
                        </span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px]">dinner_dining</span> Đã lên đủ món
                        </span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Phục vụ nội bộ</span>
                    </td>
                    <td class="py-space-md px-space-md align-top text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="px-space-sm py-1 rounded-lg bg-primary text-on-primary font-label-sm text-label-sm hover:opacity-90"
                                type="button">
                                Tính tiền
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- ROW 6: COMPLETED DELIVERED (FH-90128) -->
                <tr
                    class="bg-surface-container-lowest hover:bg-surface-container-low transition-colors cursor-pointer opacity-70">
                    <td class="py-space-md px-space-md align-top">
                        <div class="flex items-center gap-1.5 mb-1">
                            <span class="w-2 h-2 rounded-full bg-on-surface-variant"></span>
                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold">#FH-90128</span>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant block">10:48 (Đã hoàn
                            tất)</span>
                        <span
                            class="mt-1 inline-block px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm">FoodHub
                            Giao</span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <p class="font-label-md text-label-md text-on-surface font-semibold">Nguyễn Hữu Nam</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">0945 ••• 882</p>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <p class="font-label-md text-label-md text-on-surface">2x Bún Chả Cua Huế</p>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold block">130.000đ</span>
                        <span
                            class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface font-label-sm text-label-sm mt-1">
                            ZaloPay
                        </span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[14px]">done_all</span> Thành công
                        </span>
                    </td>
                    <td class="py-space-md px-space-md align-top">
                        <p class="font-label-md text-label-md text-on-surface">Trần Bảo Trọng</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">29L1-923.11</p>
                    </td>
                    <td class="py-space-md px-space-md align-top text-right">
                        <button class="p-1 rounded-lg hover:bg-surface-container text-on-surface-variant"
                            title="Xem chi tiết đơn" type="button">
                            <span class="material-symbols-outlined text-[18px]">visibility</span>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Table Bottom Pagination / Summary -->
    <div
        class="p-space-md bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-space-sm">
        <span class="font-body-sm text-body-sm text-on-surface-variant">Hiển thị 6 / 163 đơn hàng trong ngày</span>
        <div class="flex items-center gap-1">
            <button
                class="p-1.5 rounded-lg bg-surface-container-lowest text-on-surface-variant hover:text-on-surface disabled:opacity-50"
                disabled="" type="button">
                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            <button class="w-8 h-8 rounded-lg bg-primary text-on-primary font-label-sm text-label-sm"
                type="button">1</button>
            <button
                class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface-container"
                type="button">2</button>
            <button
                class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface-container"
                type="button">3</button>
            <span class="px-1 text-on-surface-variant">...</span>
            <button
                class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface-container"
                type="button">28</button>
            <button class="p-1.5 rounded-lg bg-surface-container-lowest text-on-surface-variant hover:text-on-surface"
                type="button">
                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function selectOrder(orderId) {
            console.log('Focused Order: ' + orderId);
        }
    </script>
@endpush
