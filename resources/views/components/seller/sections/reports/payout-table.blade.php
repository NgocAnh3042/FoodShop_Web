<div
    class="bg-surface-container-lowest p-space-lg rounded-xl shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] flex flex-col">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm mb-space-md">
        <div>
            <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Lịch Sử Đối Soát Dòng Tiền &amp;
                Chuyển Khoản Ngân Hàng</h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Chi tiết các kỳ quyết toán tự động về tài khoản
                Vietcombank (***8869 - Nguyen Thuy Ha)</p>
        </div>
        <div class="flex items-center gap-space-xs">
            <button
                class="px-space-md py-space-xs rounded-lg bg-surface-container-low text-on-surface font-label-md text-label-md flex items-center gap-1 hover:bg-surface-container-high transition-colors"
                type="button">
                <span class="material-symbols-outlined text-[18px]">filter_list</span>
                Lọc trạng thái
            </button>
            <button
                class="px-space-md py-space-xs rounded-lg bg-surface-container-low text-on-surface font-label-md text-label-md flex items-center gap-1 hover:bg-surface-container-high transition-colors"
                type="button">
                <span class="material-symbols-outlined text-[18px]">receipt</span>
                Hóa đơn VAT
            </button>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left font-body-md text-body-md border-collapse">
            <thead>
                <tr
                    class="bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
                    <th class="py-space-sm px-space-md rounded-l-xl">Kỳ đối soát</th>
                    <th class="py-space-sm px-space-md">Ngày TT</th>
                    <th class="py-space-sm px-space-md text-center">Số đơn</th>
                    <th class="py-space-sm px-space-md text-right">Doanh thu gộp</th>
                    <th class="py-space-sm px-space-md text-right">Phí sàn (20%)</th>
                    <th class="py-space-sm px-space-md text-right">Trợ giá KM</th>
                    <th class="py-space-sm px-space-md text-right font-bold text-on-surface">Thực nhận NH</th>
                    <th class="py-space-sm px-space-md rounded-r-xl text-center">Trạng thái</th>
                </tr>
            </thead>
            <tbody class="divide-y-0 text-body-md">
                <!-- Row 1: Processing -->
                <tr class="hover:bg-surface-container-low/60 transition-colors">
                    <td class="py-space-md px-space-md font-semibold text-primary">
                        KDS-202310-W4
                        <span class="block font-body-sm text-body-sm text-on-surface-variant">23/10 - 29/10</span>
                    </td>
                    <td class="py-space-md px-space-md text-on-surface">30/10/2023</td>
                    <td class="py-space-md px-space-md text-center font-medium">230</td>
                    <td class="py-space-md px-space-md text-right font-medium">35.000.000đ</td>
                    <td class="py-space-md px-space-md text-right text-error font-medium">-7.000.000đ</td>
                    <td class="py-space-md px-space-md text-right text-tertiary font-medium">+1.250.000đ</td>
                    <td class="py-space-md px-space-md text-right font-extrabold text-on-surface text-label-lg">
                        29.250.000đ</td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-flex items-center gap-1 px-space-sm py-0.5 rounded-full bg-secondary-container/20 text-on-secondary-container font-label-sm text-label-sm font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                            Đang xử lý
                        </span>
                    </td>
                </tr>
                <!-- Row 2: Completed -->
                <tr class="hover:bg-surface-container-low/60 transition-colors">
                    <td class="py-space-md px-space-md font-semibold text-on-surface">
                        KDS-202310-W3
                        <span class="block font-body-sm text-body-sm text-on-surface-variant">16/10 - 22/10</span>
                    </td>
                    <td class="py-space-md px-space-md text-on-surface">23/10/2023</td>
                    <td class="py-space-md px-space-md text-center font-medium">238</td>
                    <td class="py-space-md px-space-md text-right font-medium">35.400.000đ</td>
                    <td class="py-space-md px-space-md text-right text-error font-medium">-7.080.000đ</td>
                    <td class="py-space-md px-space-md text-right text-tertiary font-medium">+1.500.000đ</td>
                    <td class="py-space-md px-space-md text-right font-extrabold text-tertiary text-label-lg">
                        29.820.000đ</td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-flex items-center gap-1 px-space-sm py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                            Đã quyết toán
                        </span>
                    </td>
                </tr>
                <!-- Row 3: Completed -->
                <tr class="hover:bg-surface-container-low/60 transition-colors">
                    <td class="py-space-md px-space-md font-semibold text-on-surface">
                        KDS-202310-W2
                        <span class="block font-body-sm text-body-sm text-on-surface-variant">09/10 - 15/10</span>
                    </td>
                    <td class="py-space-md px-space-md text-on-surface">16/10/2023</td>
                    <td class="py-space-md px-space-md text-center font-medium">215</td>
                    <td class="py-space-md px-space-md text-right font-medium">31.200.000đ</td>
                    <td class="py-space-md px-space-md text-right text-error font-medium">-6.240.000đ</td>
                    <td class="py-space-md px-space-md text-right text-tertiary font-medium">+950.000đ</td>
                    <td class="py-space-md px-space-md text-right font-extrabold text-tertiary text-label-lg">
                        25.910.000đ</td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-flex items-center gap-1 px-space-sm py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                            Đã quyết toán
                        </span>
                    </td>
                </tr>
                <!-- Row 4: Completed -->
                <tr class="hover:bg-surface-container-low/60 transition-colors">
                    <td class="py-space-md px-space-md font-semibold text-on-surface">
                        KDS-202310-W1
                        <span class="block font-body-sm text-body-sm text-on-surface-variant">01/10 - 08/10</span>
                    </td>
                    <td class="py-space-md px-space-md text-on-surface">09/10/2023</td>
                    <td class="py-space-md px-space-md text-center font-medium">182</td>
                    <td class="py-space-md px-space-md text-right font-medium">26.850.000đ</td>
                    <td class="py-space-md px-space-md text-right text-error font-medium">-5.370.000đ</td>
                    <td class="py-space-md px-space-md text-right text-tertiary font-medium">+800.000đ</td>
                    <td class="py-space-md px-space-md text-right font-extrabold text-tertiary text-label-lg">
                        22.280.000đ</td>
                    <td class="py-space-md px-space-md text-center">
                        <span
                            class="inline-flex items-center gap-1 px-space-sm py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                            Đã quyết toán
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Pagination & Table Summary Footer -->
    <div
        class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm pt-space-md mt-space-sm bg-surface-container-low p-space-sm rounded-xl">
        <div class="font-body-sm text-body-sm text-on-surface-variant">
            Hiển thị <span class="font-semibold text-on-surface">4</span> trên tổng số <span
                class="font-semibold text-on-surface">12</span> kỳ đối soát năm 2023
        </div>
        <div class="flex items-center gap-1">
            <button
                class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface-variant flex items-center justify-center hover:bg-surface-container-high transition-colors"
                type="button">
                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            <button
                class="w-8 h-8 rounded-lg bg-primary text-on-primary font-label-sm text-label-sm flex items-center justify-center"
                type="button">1</button>
            <button
                class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface-variant font-label-sm text-label-sm flex items-center justify-center hover:bg-surface-container-high transition-colors"
                type="button">2</button>
            <button
                class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface-variant font-label-sm text-label-sm flex items-center justify-center hover:bg-surface-container-high transition-colors"
                type="button">3</button>
            <button
                class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface-variant flex items-center justify-center hover:bg-surface-container-high transition-colors"
                type="button">
                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </button>
        </div>
    </div>
</div>
