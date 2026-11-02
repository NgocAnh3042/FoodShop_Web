<div
    class="bg-surface-container-lowest rounded-xl shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] overflow-hidden flex flex-col">
    <!-- Table Header Title Bar with Quick Batch Info -->
    <div class="p-space-md bg-surface-container-low flex items-center justify-between">
        <div class="flex items-center gap-space-sm">
            <span class="font-headline-sm text-headline-sm text-on-surface font-bold">Danh Sách Đối Tác Quán Ăn</span>
            <span
                class="bg-surface-container-highest text-on-surface-variant px-space-sm py-0.5 rounded-full font-label-sm text-label-sm">Hiển
                thị 6 / 12.450 đối tác</span>
        </div>
        <div class="flex items-center gap-space-sm text-on-surface-variant font-label-md text-label-md">
            <span class="material-symbols-outlined text-[18px]">sync</span>
            <span class="text-body-sm font-body-sm">Đồng bộ lúc 14:32:05</span>
        </div>
    </div>
    <!-- Responsive Table Scroll -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse min-w-[1180px]">
            <thead>
                <tr
                    class="bg-surface-container-high/60 text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">
                    <th class="py-space-sm px-space-md w-12 text-center">
                        <input class="accent-primary w-4 h-4 rounded cursor-pointer" type="checkbox" />
                    </th>
                    <th class="py-space-sm px-space-md min-w-[280px]">Tên Quán & Mã đối tác</th>
                    <th class="py-space-sm px-space-md">Chủ quán & Hotline</th>
                    <th class="py-space-sm px-space-md">Phân loại & Khu vực</th>
                    <th class="py-space-sm px-space-md text-center">Tỷ lệ hủy</th>
                    <th class="py-space-sm px-space-md text-center">Đánh giá</th>
                    <th class="py-space-sm px-space-md text-center">Chiết khấu</th>
                    <th class="py-space-sm px-space-md text-right">Doanh thu tháng</th>
                    <th class="py-space-sm px-space-md text-center">Trạng thái</th>
                    <th class="py-space-sm px-space-md text-right">Thao tác</th>
                </tr>
            </thead>
            <tbody class="font-body-md text-body-md text-on-surface divide-y-0" id="merchantTableBody">
                <!-- ROW 1: BẾP HUẾ CỐ ĐÔ (Benchmark Anchor Merchant) -->
                <tr class="hover:bg-surface-container-low transition-colors group">
                    <td class="py-space-md px-space-md text-center">
                        <input class="accent-primary w-4 h-4 rounded cursor-pointer" type="checkbox" />
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex items-center gap-space-sm">
                            <div
                                class="relative w-12 h-12 rounded-xl overflow-hidden shadow-sm flex-shrink-0 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                    data-alt="Close up photograph of traditional Vietnamese Hue spicy beef noodle soup bun bo hue with rich red chili broth, tender beef shank slices, and fresh green herbs served in an authentic ceramic bowl, high culinary detail, warm appetizing lighting."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiq3AxiJaRqUFgKlDktaZSC8l3SrZwC5P6cDufeYwB6FSVM_v8tb1BiJ2RzmUJLx1FuqF75ZR5CUDQIT6iy3dInOgAD7coEoBkk3eW9gPmkbBaYG_BZGyqX07y45kGMIMdnMD_6VRNQZ-xdcwY3rtJ0SjCHnRZ7R6m-NKxuL_IIi6M9yYaYRhRWf7wNVq6vsHaZ5SmF137NFhaJJ1oCKJ93Rw9ovtqIL7-97PEyXqm" />
                            </div>
                            <div class="flex flex-col min-w-0">
                                <div class="flex items-center gap-1.5 flex-wrap">
                                    <span
                                        class="font-headline-sm text-headline-sm font-bold text-on-surface truncate">Bếp
                                        Huế Cố Đô</span>
                                    <span
                                        class="px-1.5 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-bold flex items-center gap-0.5">
                                        <span class="material-symbols-outlined text-[12px]"
                                            style="font-variation-settings: 'FILL' 1;">star</span> Quán Yêu Thích
                                    </span>
                                </div>
                                <div class="flex items-center gap-2 mt-0.5">
                                    <span class="font-label-sm text-label-sm font-bold text-primary">FHB-88421</span>
                                    <span class="text-on-surface-variant font-body-sm text-body-sm">Chi nhánh 01 (Quận
                                        1, TP.HCM)</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-semibold">Nguyễn Thị Hồng
                                Nhung</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">0903 882 199</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col gap-0.5">
                            <span class="font-label-md text-label-md text-on-surface">Đặc sản Miền Trung</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-[14px]">pin_drop</span> Q.1, TP.HCM
                            </span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-block px-2 py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-bold">
                            0.4% (Rất tốt)
                        </span>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <div
                            class="inline-flex items-center gap-1 font-label-md text-label-md font-bold text-secondary">
                            <span class="material-symbols-outlined text-[16px] text-secondary-container"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            4.9
                            <span class="text-on-surface-variant font-normal text-body-sm">(1.420)</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="font-label-md text-label-md font-bold text-primary bg-primary-fixed/50 px-2 py-0.5 rounded-lg">18.0%</span>
                    </td>
                    <td class="py-space-md px-space-md text-right">
                        <span class="font-label-md text-label-md font-bold text-on-surface block">348.650.000 đ</span>
                        <span class="font-body-sm text-body-sm text-tertiary">2.840 đơn</span>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-bold">
                            <span class="w-2 h-2 rounded-full bg-tertiary-container animate-pulse"></span>
                            Đang mở bán
                        </span>
                    </td>
                    <td class="py-space-md px-space-md text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="p-1.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container transition-all"
                                onclick="openAuditModal('FHB-88421')" title="Xem chi tiết" type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg text-on-surface-variant hover:text-secondary hover:bg-surface-container transition-all"
                                onclick="promptDiscount('FHB-88421', 'Bếp Huế Cố Đô', 18)" title="Sửa chiết khấu"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">edit_note</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg text-on-surface-variant hover:text-error hover:bg-surface-container transition-all"
                                title="Tạm khóa cửa hàng" type="button">
                                <span class="material-symbols-outlined text-[20px]">lock_open</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- ROW 2: Phở Thìn Lò Đúc -->
                <tr class="hover:bg-surface-container-low transition-colors group">
                    <td class="py-space-md px-space-md text-center">
                        <input class="accent-primary w-4 h-4 rounded cursor-pointer" type="checkbox" />
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex items-center gap-space-sm">
                            <div
                                class="relative w-12 h-12 rounded-xl overflow-hidden shadow-sm flex-shrink-0 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                    data-alt="Traditional steaming bowl of Pho Thin Lo Duc with stir fried beef flank, lots of chopped scallions and cilantro, rich aromatic bone broth, cinematic culinary photography, warm soft daylight."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdC9e2m0tm4mog_jNcOhkfql0rLx0Ywtt_g3n0952ouz-n2BbEx_4QfQVDsUmu8yV3O4ZQmHNfGgRBtHR2IT6zcdfxb501AYPQIr2AS8GV0vDrOAR9FEBNiUobrHucrr1sdpqvgQVGlvR-k-vo4RI1C32zxj3aNySYsU3KmSOkkKIbUhxc-fasdCrdqceBQMwJ_r9G8O3XFmDAXyyvScr2GdGQ_9FfZtVPbD24xUPp" />
                            </div>
                            <div class="flex flex-col min-w-0">
                                <div class="flex items-center gap-1.5">
                                    <span
                                        class="font-headline-sm text-headline-sm font-bold text-on-surface truncate">Phở
                                        Thìn Lò Đúc</span>
                                    <span
                                        class="px-1.5 py-0.5 rounded-full bg-surface-container-highest text-on-surface font-label-sm text-label-sm font-semibold">Chuỗi
                                        Lớn</span>
                                </div>
                                <div class="flex items-center gap-2 mt-0.5">
                                    <span class="font-label-sm text-label-sm font-bold text-primary">FHB-77209</span>
                                    <span class="text-on-surface-variant font-body-sm text-body-sm">Hai Bà Trưng, Hà
                                        Nội</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-semibold">Nguyễn Trọng
                                Thìn</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">0912 344 888</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col gap-0.5">
                            <span class="font-label-md text-label-md text-on-surface">Phở & Món Nước Bắc</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-[14px]">pin_drop</span> Hà Nội
                            </span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-block px-2 py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-bold">
                            0.8%
                        </span>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <div
                            class="inline-flex items-center gap-1 font-label-md text-label-md font-bold text-secondary">
                            <span class="material-symbols-outlined text-[16px] text-secondary-container"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            4.8
                            <span class="text-on-surface-variant font-normal text-body-sm">(3.890)</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="font-label-md text-label-md font-bold text-primary bg-primary-fixed/50 px-2 py-0.5 rounded-lg">15.0%</span>
                    </td>
                    <td class="py-space-md px-space-md text-right">
                        <span class="font-label-md text-label-md font-bold text-on-surface block">612.300.000 đ</span>
                        <span class="font-body-sm text-body-sm text-tertiary">5.120 đơn</span>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-bold">
                            <span class="w-2 h-2 rounded-full bg-tertiary-container"></span>
                            Đang mở bán
                        </span>
                    </td>
                    <td class="py-space-md px-space-md text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="p-1.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container transition-all"
                                onclick="openAuditModal('FHB-77209')" title="Xem chi tiết" type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg text-on-surface-variant hover:text-secondary hover:bg-surface-container transition-all"
                                onclick="promptDiscount('FHB-77209', 'Phở Thìn Lò Đúc', 15)" title="Sửa chiết khấu"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">edit_note</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg text-on-surface-variant hover:text-error hover:bg-surface-container transition-all"
                                title="Tạm khóa cửa hàng" type="button">
                                <span class="material-symbols-outlined text-[20px]">lock_open</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- ROW 3: Bánh Mì Huỳnh Hoa (Pending verification KYC modal anchor) -->
                <tr class="hover:bg-surface-container-low transition-colors group bg-secondary-fixed/10">
                    <td class="py-space-md px-space-md text-center">
                        <input class="accent-primary w-4 h-4 rounded cursor-pointer" type="checkbox" />
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex items-center gap-space-sm">
                            <div
                                class="relative w-12 h-12 rounded-xl overflow-hidden shadow-sm flex-shrink-0 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                    data-alt="Crusty golden Vietnamese banh mi baguette packed generously with rich pate, cold cuts, cured pork belly, cucumber and fresh cilantro on warm rustic wooden cutting board, studio gourmet presentation."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoWNwJoN7n760ay6k9J0r5D2VC0ew18D0k70AdvgioFwlet18teklNuQ7pWba2UbbEQaiaXHUKzMsDfR-lS6_l7OBKmWWYlO-7duv4ADDWAJa6IE0NAgmBEfPzihyP8TwhAHjHZ3jwjrk1CcSx49Uqd5tHLUwENBHxiZHhmFaFyLaM6cpgJNDD_F66-d7sMl2tguRcrcnxbcwZ2l05_wgPm2FjW_6AEfOY3B8YglUG" />
                            </div>
                            <div class="flex flex-col min-w-0">
                                <div class="flex items-center gap-1.5">
                                    <span
                                        class="font-headline-sm text-headline-sm font-bold text-on-surface truncate">Bánh
                                        Mì Huỳnh Hoa (CN2)</span>
                                    <span
                                        class="px-1.5 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-bold">Hồ
                                        sơ mới</span>
                                </div>
                                <div class="flex items-center gap-2 mt-0.5">
                                    <span class="font-label-sm text-label-sm font-bold text-secondary">FHB-99120</span>
                                    <span class="text-on-surface-variant font-body-sm text-body-sm">Lê Thị Riêng,
                                        Q.1</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-semibold">Trần Lệ Hoa</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">0908 119 922</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col gap-0.5">
                            <span class="font-label-md text-label-md text-on-surface">Bánh Mì & Ăn Sáng</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-[14px]">pin_drop</span> TP.HCM
                            </span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span class="text-on-surface-variant font-body-sm text-body-sm">—</span>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span class="text-on-surface-variant font-body-sm text-body-sm">Mới (Chưa có)</span>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="font-label-md text-label-md font-bold text-secondary bg-secondary-fixed/50 px-2 py-0.5 rounded-lg">20.0%
                            (Đề xuất)</span>
                    </td>
                    <td class="py-space-md px-space-md text-right">
                        <span class="font-label-md text-label-md font-bold text-on-surface-variant block">0 đ</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Chờ lên sàn</span>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-bold">
                            <span class="material-symbols-outlined text-[14px]">hourglass_top</span>
                            Chờ duyệt hồ sơ
                        </span>
                    </td>
                    <td class="py-space-md px-space-md text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="px-space-sm py-1 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-label-sm text-label-sm font-bold flex items-center gap-1 shadow-sm transition-all"
                                onclick="openAuditModal('FHB-99120')" type="button">
                                <span class="material-symbols-outlined text-[16px]">verified</span>
                                Duyệt ngay
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- ROW 4: Cơm Tấm Ba Ghiền -->
                <tr class="hover:bg-surface-container-low transition-colors group">
                    <td class="py-space-md px-space-md text-center">
                        <input class="accent-primary w-4 h-4 rounded cursor-pointer" type="checkbox" />
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex items-center gap-space-sm">
                            <div
                                class="relative w-12 h-12 rounded-xl overflow-hidden shadow-sm flex-shrink-0 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                    data-alt="Vietnamese Com Tam broken rice dish featuring an oversized char-grilled pork chop with lemongrass glaze, steamed egg meatloaf, shredded pork skin, scallion oil, crisp pickled daikon and carrots on porcelain plate."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnNXlJU8eR8pMPwCX4nggnzP5qYm_vDR7aBFIx5PGEVXGZikyX58SAWJcI0WL-s12BtTb1xEwRWIszrZmakwG7ooFrh-SCIjTbXFofUNPUxNBZjxVi8Btyun6NDQDXjr1X7ykG3t1RJop2Xu2KpsQrbVpwKTka8jVRyq06MxYQdd84wi0ozMpMYxZ_c1SmyZ8JnC3cEWjsRoIhk6x9KUpSauphm0-u5B8zt94a6NkR" />
                            </div>
                            <div class="flex flex-col min-w-0">
                                <div class="flex items-center gap-1.5">
                                    <span
                                        class="font-headline-sm text-headline-sm font-bold text-on-surface truncate">Cơm
                                        Tấm Ba Ghiền</span>
                                    <span
                                        class="px-1.5 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-bold">Quán
                                        Yêu Thích</span>
                                </div>
                                <div class="flex items-center gap-2 mt-0.5">
                                    <span class="font-label-sm text-label-sm font-bold text-primary">FHB-51902</span>
                                    <span class="text-on-surface-variant font-body-sm text-body-sm">Đặng Văn Ngữ, Phú
                                        Nhuận</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-semibold">Lê Văn Hùng</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">0938 721 349</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col gap-0.5">
                            <span class="font-label-md text-label-md text-on-surface">Cơm Tấm & Cơm Trưa</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-[14px]">pin_drop</span> Phú Nhuận, TP.HCM
                            </span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-block px-2 py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-bold">
                            1.1%
                        </span>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <div
                            class="inline-flex items-center gap-1 font-label-md text-label-md font-bold text-secondary">
                            <span class="material-symbols-outlined text-[16px] text-secondary-container"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            4.7
                            <span class="text-on-surface-variant font-normal text-body-sm">(2.190)</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="font-label-md text-label-md font-bold text-primary bg-primary-fixed/50 px-2 py-0.5 rounded-lg">18.0%</span>
                    </td>
                    <td class="py-space-md px-space-md text-right">
                        <span class="font-label-md text-label-md font-bold text-on-surface block">425.800.000 đ</span>
                        <span class="font-body-sm text-body-sm text-tertiary">3.600 đơn</span>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-bold">
                            <span class="w-2 h-2 rounded-full bg-outline"></span>
                            Tạm nghỉ (Nghỉ trưa)
                        </span>
                    </td>
                    <td class="py-space-md px-space-md text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="p-1.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container transition-all"
                                onclick="openAuditModal('FHB-51902')" title="Xem chi tiết" type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg text-on-surface-variant hover:text-secondary hover:bg-surface-container transition-all"
                                onclick="promptDiscount('FHB-51902', 'Cơm Tấm Ba Ghiền', 18)" title="Sửa chiết khấu"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">edit_note</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg text-on-surface-variant hover:text-error hover:bg-surface-container transition-all"
                                title="Tạm khóa cửa hàng" type="button">
                                <span class="material-symbols-outlined text-[20px]">lock_open</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- ROW 5: Mì Quảng Bà Mua (Da Nang) -->
                <tr class="hover:bg-surface-container-low transition-colors group">
                    <td class="py-space-md px-space-md text-center">
                        <input class="accent-primary w-4 h-4 rounded cursor-pointer" type="checkbox" />
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex items-center gap-space-sm">
                            <div
                                class="relative w-12 h-12 rounded-xl overflow-hidden shadow-sm flex-shrink-0 bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                    data-alt="Traditional Da Nang Mi Quang turmeric yellow flat rice noodles with braised shrimp, pork, roasted peanuts, sesame rice crackers and raw banana flower salad, authentic Vietnamese cuisine."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMVayoHiECWArGj4j9jl1URYA0j_eWtnETnfHzkz8ypTSVgBIhlz1ZwHbTfI0NRY-NwcwIww9XvzQEyIQq1KGp7wX_9xuYySxq8UTrq-wWiGvL132c8gHXSzAjsX-YUMJ2X5X4_cGyFc9cxk1jtG2zSkgiuT5OXJ10L-F0myQ-APm6-ZBgwpO2wlAjzbn2L3FQf-z_z1Up7-8UI85ybC1pKvpFjsVskdDIfATesfQC" />
                            </div>
                            <div class="flex flex-col min-w-0">
                                <div class="flex items-center gap-1.5">
                                    <span
                                        class="font-headline-sm text-headline-sm font-bold text-on-surface truncate">Mì
                                        Quảng Bà Mua</span>
                                    <span
                                        class="px-1.5 py-0.5 rounded-full bg-surface-container-highest text-on-surface font-label-sm text-label-sm">Chuỗi
                                        Lớn</span>
                                </div>
                                <div class="flex items-center gap-2 mt-0.5">
                                    <span class="font-label-sm text-label-sm font-bold text-primary">FHB-33019</span>
                                    <span class="text-on-surface-variant font-body-sm text-body-sm">Trần Bình Trọng,
                                        Hải Châu, Đà Nẵng</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-semibold">Phan Văn Nam</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">0905 182 390</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col gap-0.5">
                            <span class="font-label-md text-label-md text-on-surface">Món Miền Trung</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-[14px]">pin_drop</span> Hải Châu, Đà Nẵng
                            </span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-block px-2 py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-bold">
                            0.6%
                        </span>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <div
                            class="inline-flex items-center gap-1 font-label-md text-label-md font-bold text-secondary">
                            <span class="material-symbols-outlined text-[16px] text-secondary-container"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            4.8
                            <span class="text-on-surface-variant font-normal text-body-sm">(1.080)</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="font-label-md text-label-md font-bold text-primary bg-primary-fixed/50 px-2 py-0.5 rounded-lg">18.0%</span>
                    </td>
                    <td class="py-space-md px-space-md text-right">
                        <span class="font-label-md text-label-md font-bold text-on-surface block">189.400.000 đ</span>
                        <span class="font-body-sm text-body-sm text-tertiary">1.750 đơn</span>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-bold">
                            <span class="w-2 h-2 rounded-full bg-tertiary-container"></span>
                            Đang mở bán
                        </span>
                    </td>
                    <td class="py-space-md px-space-md text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="p-1.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container transition-all"
                                onclick="openAuditModal('FHB-33019')" title="Xem chi tiết" type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg text-on-surface-variant hover:text-secondary hover:bg-surface-container transition-all"
                                onclick="promptDiscount('FHB-33019', 'Mì Quảng Bà Mua', 18)" title="Sửa chiết khấu"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">edit_note</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg text-on-surface-variant hover:text-error hover:bg-surface-container transition-all"
                                title="Tạm khóa cửa hàng" type="button">
                                <span class="material-symbols-outlined text-[20px]">lock_open</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- ROW 6: Tiệm Trà Sữa Đô Thị (Locked / Penalty) -->
                <tr class="hover:bg-surface-container-low transition-colors group bg-error-container/10">
                    <td class="py-space-md px-space-md text-center">
                        <input class="accent-primary w-4 h-4 rounded cursor-pointer" type="checkbox" />
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex items-center gap-space-sm">
                            <div
                                class="relative w-12 h-12 rounded-xl overflow-hidden shadow-sm flex-shrink-0 bg-surface-container opacity-70">
                                <img class="w-full h-full object-cover grayscale"
                                    data-alt="Iced boba milk tea drinks in plastic takeaway cups with brown sugar syrup drizzles, black tapioca pearls, sweet dessert cafe beverage."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDO3jrMqoiQjVlZ3CNWNKmHvKJ7x8ytPG_RX2TclZXmRyeEaBXIfu06qFFdIVEtHvgZwnjfPbD1LW7G4kxRtf4ccBSWzLawgVmwbU7O1QQdgSq_81j33mY4HBh535OS8lrMoG81EuLPvnwVWoIqAIzSxzlWzmUYJDKPcU_wnvODX8KTvVDxvVhbSJnd25Ln2CzRgZ3FVeK4wNV4u-fSdDf5zmPqeMSeIwtkqxaFhCj9" />
                            </div>
                            <div class="flex flex-col min-w-0">
                                <div class="flex items-center gap-1.5">
                                    <span
                                        class="font-headline-sm text-headline-sm font-bold text-on-surface line-through opacity-80 truncate">Trà
                                        Sữa Đô Thị - CN Cầu Giấy</span>
                                    <span
                                        class="px-1.5 py-0.5 rounded-full bg-error-container text-error font-label-sm text-label-sm font-bold">Tạm
                                        Khóa</span>
                                </div>
                                <div class="flex items-center gap-2 mt-0.5">
                                    <span class="font-label-sm text-label-sm font-bold text-error">FHB-11405</span>
                                    <span class="text-error font-body-sm text-body-sm">Vi phạm: Tỷ lệ hủy đơn >
                                        18%</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-semibold">Hoàng Tuấn
                                Kiệt</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">0983 229 101</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col gap-0.5">
                            <span class="font-label-md text-label-md text-on-surface">Trà sữa & Ăn vặt</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-[14px]">pin_drop</span> Cầu Giấy, Hà Nội
                            </span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-block px-2 py-0.5 rounded-full bg-error-container text-error font-label-sm text-label-sm font-bold">
                            18.4% (Rất cao)
                        </span>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <div class="inline-flex items-center gap-1 font-label-md text-label-md font-bold text-error">
                            <span class="material-symbols-outlined text-[16px] text-error"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            3.2
                            <span class="text-on-surface-variant font-normal text-body-sm">(310)</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="font-label-md text-label-md font-bold text-on-surface-variant bg-surface-container px-2 py-0.5 rounded-lg">20.0%</span>
                    </td>
                    <td class="py-space-md px-space-md text-right">
                        <span class="font-label-md text-label-md font-bold text-on-surface block">14.200.000 đ</span>
                        <span class="font-body-sm text-body-sm text-error">Đang đóng băng ví</span>
                    </td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-error-container text-error font-label-sm text-label-sm font-bold">
                            <span class="material-symbols-outlined text-[14px]">block</span>
                            Đã khóa sàn
                        </span>
                    </td>
                    <td class="py-space-md px-space-md text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="p-1.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container transition-all"
                                onclick="openAuditModal('FHB-11405')" title="Xem biên bản xử phạt" type="button">
                                <span class="material-symbols-outlined text-[20px]">warning</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg text-tertiary hover:bg-surface-container transition-all font-label-sm text-label-sm font-bold"
                                title="Mở khóa tài khoản" type="button">
                                <span class="material-symbols-outlined text-[20px]">lock_reset</span>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Pagination Footer -->
    <div
        class="p-space-md bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-space-sm">
        <div class="flex items-center gap-space-sm text-on-surface-variant font-body-sm text-body-sm">
            <span>Xem</span>
            <select
                class="bg-surface-container-lowest rounded-lg px-2 py-1 font-label-md text-label-md text-on-surface outline-none cursor-pointer">
                <option>10 đối tác/trang</option>
                <option>25 đối tác/trang</option>
                <option>50 đối tác/trang</option>
            </select>
            <span>trong tổng số 12.450 đối tác toàn sàn</span>
        </div>
        <div class="flex items-center gap-space-xs">
            <button
                class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high transition-colors"
                disabled="" type="button">
                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            <button
                class="w-8 h-8 rounded-lg bg-primary text-on-primary font-label-md text-label-md font-bold flex items-center justify-center shadow-sm"
                type="button">1</button>
            <button
                class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface font-label-md text-label-md flex items-center justify-center hover:bg-surface-container transition-colors"
                type="button">2</button>
            <button
                class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface font-label-md text-label-md flex items-center justify-center hover:bg-surface-container transition-colors"
                type="button">3</button>
            <span class="px-1 text-on-surface-variant">...</span>
            <button
                class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface font-label-md text-label-md flex items-center justify-center hover:bg-surface-container transition-colors"
                type="button">1.245</button>
            <button
                class="w-8 h-8 rounded-lg bg-surface-container-lowest flex items-center justify-center text-on-surface hover:bg-surface-container transition-colors"
                type="button">
                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </button>
        </div>
    </div>
</div>
