<div class="mx-space-lg mb-space-xl bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden">
    <!-- Filter Header -->
    <div class="p-space-lg bg-surface-container-low flex flex-col gap-space-md">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-space-sm">
            <div>
                <span class="font-headline-sm text-headline-sm text-on-surface font-extrabold">Danh Sách Đối Tác Tài Xế
                    Chi Tiết</span>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Tra cứu thông tin, quản trị ví ký quỹ, lịch
                    sử cuốc xe và quản lý tài khoản</p>
            </div>
            <div class="flex items-center gap-space-xs">
                <span class="font-label-sm text-label-sm text-on-surface-variant">Hiển thị: </span>
                <span class="font-label-sm text-label-sm text-on-surface font-bold">1 - 6 trên 18.600 tài xế</span>
            </div>
        </div>
        <!-- Multifunctional Filter Bar -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-space-sm items-center">
            <!-- Search Input -->
            <div class="md:col-span-4 relative">
                <span
                    class="material-symbols-outlined absolute left-3 top-2.5 text-on-surface-variant text-[18px]">search</span>
                <input
                    class="w-full pl-9 pr-space-md py-2 rounded-xl bg-surface-container-lowest font-body-sm text-body-sm text-on-surface placeholder:text-on-surface-variant outline-none shadow-sm focus:bg-surface transition-all"
                    placeholder="Tìm theo Tên, Mã tài xế (RD-xxxx), SĐT, Biển số..." type="text" />
            </div>
            <!-- Filter 1: Status -->
            <div class="md:col-span-2">
                <select
                    class="w-full px-space-md py-2 rounded-xl bg-surface-container-lowest font-label-md text-label-md text-on-surface shadow-sm outline-none cursor-pointer">
                    <option value="">Tất cả Trạng thái</option>
                    <option value="delivering">Đang giao đơn</option>
                    <option value="available">Sẵn sàng nhận đơn</option>
                    <option value="break">Đang nghỉ ca</option>
                    <option value="offline">Ngoại tuyến</option>
                    <option value="locked">Tạm khóa tài khoản</option>
                </select>
            </div>
            <!-- Filter 2: Driver Tier -->
            <div class="md:col-span-2">
                <select
                    class="w-full px-space-md py-2 rounded-xl bg-surface-container-lowest font-label-md text-label-md text-on-surface shadow-sm outline-none cursor-pointer">
                    <option value="">Tất cả Hạng tài xế</option>
                    <option value="pro">Pro Rider (Hạng Vàng)</option>
                    <option value="standard">Tiêu chuẩn</option>
                    <option value="trainee">Tập sự (< 30 ngày)</option>
                </select>
            </div>
            <!-- Filter 3: Acceptance Rate -->
            <div class="md:col-span-2">
                <select
                    class="w-full px-space-md py-2 rounded-xl bg-surface-container-lowest font-label-md text-label-md text-on-surface shadow-sm outline-none cursor-pointer">
                    <option value="">Tỷ lệ nhận đơn: Tất cả</option>
                    <option value="95">> 95% (Chuẩn thưởng)</option>
                    <option value="90">90% - 95%</option>
                    <option value="under80">
                        < 80% (Cảnh báo)</option>
                </select>
            </div>
            <!-- Reset Button -->
            <div class="md:col-span-2 flex items-center gap-space-xs">
                <button
                    class="w-full py-2 px-space-sm bg-surface-container hover:bg-surface-container-high rounded-xl text-on-surface font-label-md text-label-md transition-colors flex items-center justify-center gap-1"
                    type="button">
                    <span class="material-symbols-outlined text-[16px]">restart_alt</span>
                    <span>Đặt lại</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Master Fleet Data Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr
                    class="bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
                    <th class="py-space-md px-space-lg">Tài Xế & Mã ID</th>
                    <th class="py-space-md px-space-md">Phương Tiện & Hotline</th>
                    <th class="py-space-md px-space-md">Hạng & Đánh Giá</th>
                    <th class="py-space-md px-space-md">Ví Ký Quỹ (Escrow)</th>
                    <th class="py-space-md px-space-md">Hiệu Suất (Nhận/Đúng giờ)</th>
                    <th class="py-space-md px-space-md">Trạng Thái Vận Hành</th>
                    <th class="py-space-md px-space-lg text-right">Hành Động Quản Trị</th>
                </tr>
            </thead>
            <tbody class="divide-y-0">
                <!-- Row 1: Trần Quốc Bảo (Hero Driver from Tracking) -->
                <tr class="hover:bg-surface-container-low transition-colors group">
                    <td class="py-space-md px-space-lg">
                        <div class="flex items-center gap-space-md">
                            <div class="relative">
                                <img class="w-11 h-11 rounded-full object-cover shadow-sm"
                                    data-alt="Portrait of Tran Quoc Bao, a clean-cut Vietnamese delivery rider wearing a modern safety helmet and an orange jacket, with a warm confident expression."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtUfMKJ3-gbIHzLwtgBz725CGE4oX5s5u1_h5ZtBhURoo0tcXQkv-rO-hCY94MjLv5EpG73pMMgOYbh1KguJU5iNuF92CnzTjoyokJ1kQVOq3PW6PPugaG5GBeGNug4P2dgHRBVum-N8JMSdYd9PRG4Roa1NkffE94vvqeu2vrf8-L-xWEaLtBgNB90Nz8gdlvObUf6FNmVJiMmSN6ljVUhT9T_DvO-Puvw0gp4r4H" />
                                <span
                                    class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-primary ring-2 ring-surface"></span>
                            </div>
                            <div>
                                <div
                                    class="font-label-lg text-label-lg text-on-surface font-bold flex items-center gap-1">
                                    <span>Trần Quốc Bảo</span>
                                    <span class="material-symbols-outlined text-secondary text-[16px]"
                                        title="Đội trưởng đội xe Quận 1">stars</span>
                                </div>
                                <div class="font-body-sm text-body-sm text-on-surface-variant">Mã: <span
                                        class="font-bold text-on-surface">RD-44021</span></div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-bold">59-P1 928.34</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Honda AirBlade 150cc •
                                0918.421.902</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-1">
                                <span
                                    class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold">Pro
                                    Rider</span>
                                <div class="flex items-center text-secondary text-[13px] font-bold">
                                    <span class="material-symbols-outlined text-[15px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span>4.95</span>
                                </div>
                            </div>
                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">1.482 cuốc hoàn
                                thành</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-lg text-label-lg text-tertiary font-extrabold">2.450.000 đ</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Ký quỹ an toàn
                                (>500k)</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="font-label-md text-label-md text-on-surface font-bold">99.4%</span>
                                <span class="text-tertiary font-label-sm text-label-sm font-bold">Đúng giờ 98.8%</span>
                            </div>
                            <div class="w-24 bg-surface-container rounded-full h-1 mt-1 overflow-hidden">
                                <div class="bg-tertiary h-1 rounded-full" style="width: 99.4%"></div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-primary/10 text-primary font-label-sm text-label-sm font-bold">
                            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                            <span>Giao đơn #FH-89421</span>
                        </div>
                        <div class="text-[11px] text-on-surface-variant mt-0.5">ETA giao: 12 phút (Q.1)</div>
                    </td>
                    <td class="py-space-md px-space-lg text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors"
                                title="Xem hành trình GPS" type="button">
                                <span class="material-symbols-outlined text-[18px]">route</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors"
                                title="Điều chỉnh ví ký quỹ" type="button">
                                <span class="material-symbols-outlined text-[18px]">account_balance_wallet</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-error-container hover:text-error text-on-surface-variant transition-colors"
                                title="Cảnh báo vi phạm" type="button">
                                <span class="material-symbols-outlined text-[18px]">block</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Row 2: Nguyễn Văn Hưng -->
                <tr class="hover:bg-surface-container-low transition-colors group bg-surface-container-low/30">
                    <td class="py-space-md px-space-lg">
                        <div class="flex items-center gap-space-md">
                            <div class="relative">
                                <img class="w-11 h-11 rounded-full object-cover shadow-sm"
                                    data-alt="Portrait of an energetic Vietnamese young rider Nguyen Van Hung in his twenties smiling outdoors in natural daylight with food delivery gear."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQ1sQ9pFFmgtMgYvi8HobPF2lVjq_Fcau6qlbjQIDFq7i1nWXRqtAdqmrBIj2kBMKaLB0lQQ4Wp1DFlyV7vbmtxMZkE0DUiLqtLzEHIZ8Qh3pMZsNfHyj7OnflLgBLjacHbCtvUE5uURH1my8663FmK6Llfo6Xs_zTRKJ67iOGkPPN6MC6FKVBcD97je9y8YZKQiHhqiIV2By9wspJKchH-COMF0Xa1CgSv1-Ar0se" />
                                <span
                                    class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-tertiary ring-2 ring-surface"></span>
                            </div>
                            <div>
                                <div class="font-label-lg text-label-lg text-on-surface font-bold">Nguyễn Văn Hưng
                                </div>
                                <div class="font-body-sm text-body-sm text-on-surface-variant">Mã: <span
                                        class="font-bold text-on-surface">RD-31089</span></div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-bold">29-H1 451.90</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Yamaha Sirius 110cc •
                                0982.114.772</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-1">
                                <span
                                    class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-bold">Tiêu
                                    Chuẩn</span>
                                <div class="flex items-center text-secondary text-[13px] font-bold">
                                    <span class="material-symbols-outlined text-[15px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span>4.88</span>
                                </div>
                            </div>
                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">840 cuốc hoàn
                                thành</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-lg text-label-lg text-tertiary font-extrabold">1.120.000 đ</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Ký quỹ an toàn</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="font-label-md text-label-md text-on-surface font-bold">96.8%</span>
                                <span class="text-tertiary font-label-sm text-label-sm font-bold">Đúng giờ 95.2%</span>
                            </div>
                            <div class="w-24 bg-surface-container rounded-full h-1 mt-1 overflow-hidden">
                                <div class="bg-tertiary h-1 rounded-full" style="width: 96.8%"></div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-bold">
                            <span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
                            <span>Sẵn Sàng Nhận Đơn</span>
                        </div>
                        <div class="text-[11px] text-on-surface-variant mt-0.5">Khu vực: Hai Bà Trưng, HN</div>
                    </td>
                    <td class="py-space-md px-space-lg text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors"
                                title="Xem hành trình GPS" type="button">
                                <span class="material-symbols-outlined text-[18px]">route</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors"
                                title="Điều chỉnh ví ký quỹ" type="button">
                                <span class="material-symbols-outlined text-[18px]">account_balance_wallet</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-error-container hover:text-error text-on-surface-variant transition-colors"
                                title="Cảnh báo vi phạm" type="button">
                                <span class="material-symbols-outlined text-[18px]">block</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Row 3: Lê Hoàng Long -->
                <tr class="hover:bg-surface-container-low transition-colors group">
                    <td class="py-space-md px-space-lg">
                        <div class="flex items-center gap-space-md">
                            <div class="relative">
                                <img class="w-11 h-11 rounded-full object-cover shadow-sm"
                                    data-alt="Portrait of Le Hoang Long, an experienced Vietnamese rider with a confident look wearing a dark windbreaker outdoors on a city avenue."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoJBZQ49FxYNmOEdw-MPSp-yksSK_VP2K8cLAqQC7ocS8mBDHHhPrbCxut_4IFfKvj6QiHGkSZhsnOBHGW-u6_36BgI-r-YvXC2X7bzk0kXPnyBcyzQ-psqoeEFLVILlTHgzjRFZEKg0KNc5FkTTPxjSPOYs-S6opZ7hbiSPG2z8rHu5fQS1NmQstb_TwlTIqdg6IUWq1UrriVll-XhHVJt9tVFY3FEUahiMkc1WHl" />
                                <span
                                    class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-primary ring-2 ring-surface"></span>
                            </div>
                            <div>
                                <div
                                    class="font-label-lg text-label-lg text-on-surface font-bold flex items-center gap-1">
                                    <span>Lê Hoàng Long</span>
                                    <span class="material-symbols-outlined text-secondary text-[16px]">stars</span>
                                </div>
                                <div class="font-body-sm text-body-sm text-on-surface-variant">Mã: <span
                                        class="font-bold text-on-surface">RD-45192</span></div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-bold">59-X3 661.12</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Honda Winner X •
                                0903.882.110</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-1">
                                <span
                                    class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold">Pro
                                    Rider</span>
                                <div class="flex items-center text-secondary text-[13px] font-bold">
                                    <span class="material-symbols-outlined text-[15px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span>4.98</span>
                                </div>
                            </div>
                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">2.140 cuốc hoàn
                                thành</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-lg text-label-lg text-tertiary font-extrabold">3.890.000 đ</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Ký quỹ an toàn</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="font-label-md text-label-md text-on-surface font-bold">99.8%</span>
                                <span class="text-tertiary font-label-sm text-label-sm font-bold">Đúng giờ 99.2%</span>
                            </div>
                            <div class="w-24 bg-surface-container rounded-full h-1 mt-1 overflow-hidden">
                                <div class="bg-tertiary h-1 rounded-full" style="width: 99.8%"></div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-primary/10 text-primary font-label-sm text-label-sm font-bold">
                            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                            <span>Giao đơn #FH-89490</span>
                        </div>
                        <div class="text-[11px] text-on-surface-variant mt-0.5">Đơn kép: 2 điểm giao (Q.3)</div>
                    </td>
                    <td class="py-space-md px-space-lg text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors"
                                title="Xem hành trình GPS" type="button">
                                <span class="material-symbols-outlined text-[18px]">route</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors"
                                title="Điều chỉnh ví ký quỹ" type="button">
                                <span class="material-symbols-outlined text-[18px]">account_balance_wallet</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-error-container hover:text-error text-on-surface-variant transition-colors"
                                title="Cảnh báo vi phạm" type="button">
                                <span class="material-symbols-outlined text-[18px]">block</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Row 4: Đặng Tuấn Kiệt (Tập sự) -->
                <tr class="hover:bg-surface-container-low transition-colors group bg-surface-container-low/30">
                    <td class="py-space-md px-space-lg">
                        <div class="flex items-center gap-space-md">
                            <div class="relative">
                                <img class="w-11 h-11 rounded-full object-cover shadow-sm"
                                    data-alt="Portrait of a young male Vietnamese delivery trainee Dang Tuan Kiet smiling enthusiastically in front of an urban city backdrop."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQlTFNPVHdEeo2vYHNPjPJhAl-wnZcfXWNMmfeSd5gtrUh7xwFH0c-vX9CR8RkkamD_9t8IFrOaMvMirwsL68DVObLFTgGtqhDX4YkqqqCSs-TjsYNHNujSfmtifIqyFJLWVEJz-Q5jxeOxDthLShrMmL8mN-s57sm-VLQpqx0k47s8Qdm_qYtJScR9ai1-gG376A6ahAJLalEzyo1SYGSwHZazF6CBvczmjhEm0QI" />
                                <span
                                    class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-on-surface-variant ring-2 ring-surface"></span>
                            </div>
                            <div>
                                <div class="font-label-lg text-label-lg text-on-surface font-bold">Đặng Tuấn Kiệt</div>
                                <div class="font-body-sm text-body-sm text-on-surface-variant">Mã: <span
                                        class="font-bold text-on-surface">RD-59104</span></div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-bold">60-B8 229.41</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Honda Wave Alpha •
                                0977.301.992</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-1">
                                <span
                                    class="px-2 py-0.5 rounded-full bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm font-bold">Tập
                                    Sự (14d)</span>
                                <div class="flex items-center text-secondary text-[13px] font-bold">
                                    <span class="material-symbols-outlined text-[15px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span>4.72</span>
                                </div>
                            </div>
                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">58 cuốc hoàn
                                thành</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-lg text-label-lg text-on-surface font-extrabold">600.000 đ</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Ký quỹ ban đầu</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="font-label-md text-label-md text-on-surface font-bold">92.0%</span>
                                <span class="text-on-surface-variant font-label-sm text-label-sm">Đúng giờ 91.5%</span>
                            </div>
                            <div class="w-24 bg-surface-container rounded-full h-1 mt-1 overflow-hidden">
                                <div class="bg-secondary-container h-1 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-bold">
                            <span class="w-2 h-2 rounded-full bg-outline"></span>
                            <span>Đang Nghỉ Ca (Trưa)</span>
                        </div>
                        <div class="text-[11px] text-on-surface-variant mt-0.5">Dự kiến onl: 14:00</div>
                    </td>
                    <td class="py-space-md px-space-lg text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors"
                                title="Xem hành trình GPS" type="button">
                                <span class="material-symbols-outlined text-[18px]">route</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors"
                                title="Điều chỉnh ví ký quỹ" type="button">
                                <span class="material-symbols-outlined text-[18px]">account_balance_wallet</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-error-container hover:text-error text-on-surface-variant transition-colors"
                                title="Cảnh báo vi phạm" type="button">
                                <span class="material-symbols-outlined text-[18px]">block</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Row 5: Phạm Văn Quý (Cảnh báo vi phạm) -->
                <tr class="hover:bg-surface-container-low transition-colors group">
                    <td class="py-space-md px-space-lg">
                        <div class="flex items-center gap-space-md">
                            <div class="relative">
                                <img class="w-11 h-11 rounded-full object-cover shadow-sm"
                                    data-alt="Portrait of Pham Van Quy, a middle-aged delivery rider with a serious expression under city overcast lighting."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBE2ecaVzD4Y6Nu-gxSanGr2_5mwXcN3H7ROjbRt1F1_70bf0VIZ6zspGd4rs5rBxtejQXPFCtoGfX08uvOHvpsIjXmbUXvaWnMS2KJY80vcaWigAYIAOMma3Kiv3FHZoMmi1QF8r52TQ6VJBC5YXsU8hLBxLml20qL0IrbSbV-fx8OfLbDiNHAvcZZWucUi1LPDjFxq2wSqUk8N58v5BSMfm6VActV6KW0u6kjYhbU" />
                                <span
                                    class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-error ring-2 ring-surface"></span>
                            </div>
                            <div>
                                <div class="font-label-lg text-label-lg text-on-surface font-bold">Phạm Văn Quý</div>
                                <div class="font-body-sm text-body-sm text-on-surface-variant">Mã: <span
                                        class="font-bold text-on-surface">RD-29004</span></div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-bold">59-T2 119.82</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Yamaha Exciter 150cc •
                                0938.441.205</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-1">
                                <span
                                    class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-bold">Tiêu
                                    Chuẩn</span>
                                <div class="flex items-center text-error text-[13px] font-bold">
                                    <span class="material-symbols-outlined text-[15px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span>4.21</span>
                                </div>
                            </div>
                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">410 cuốc (2 khiếu
                                nại)</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-lg text-label-lg text-error font-extrabold">180.000 đ</span>
                            <span class="font-body-sm text-body-sm text-error">Dưới mức tối thiểu</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="font-label-md text-label-md text-error font-bold">78.5%</span>
                                <span class="text-error font-label-sm text-label-sm">Hủy đơn 14%</span>
                            </div>
                            <div class="w-24 bg-surface-container rounded-full h-1 mt-1 overflow-hidden">
                                <div class="bg-error h-1 rounded-full" style="width: 78.5%"></div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-error-container text-error font-label-sm text-label-sm font-bold">
                            <span class="material-symbols-outlined text-[14px]">lock</span>
                            <span>Tạm Khóa (24h)</span>
                        </div>
                        <div class="text-[11px] text-error mt-0.5">Lý do: Từ chối ghép đơn >5 lần</div>
                    </td>
                    <td class="py-space-md px-space-lg text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors"
                                title="Xem biên bản vi phạm" type="button">
                                <span class="material-symbols-outlined text-[18px]">gavel</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg bg-tertiary-container/15 text-tertiary hover:bg-tertiary-container hover:text-on-tertiary transition-colors"
                                title="Mở khóa tài xế" type="button">
                                <span class="material-symbols-outlined text-[18px]">lock_open</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-error-container hover:text-error text-on-surface-variant transition-colors"
                                title="Chấm dứt hợp tác" type="button">
                                <span class="material-symbols-outlined text-[18px]">delete_forever</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Row 6: Vũ Đức Trọng -->
                <tr class="hover:bg-surface-container-low transition-colors group bg-surface-container-low/30">
                    <td class="py-space-md px-space-lg">
                        <div class="flex items-center gap-space-md">
                            <div class="relative">
                                <img class="w-11 h-11 rounded-full object-cover shadow-sm"
                                    data-alt="Portrait of Vu Duc Trong, a smiling Vietnamese male delivery rider wearing a high-visibility vest standing next to his motorcycle."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVwev-Hu737Ful165NpfUhCNMRiNxOaIIFWZyEp2ZuBXVdvjTJ8UHnTvNkJyYISDCAbkfO_putPDNuWAwwwy4kNsyp9h8sp-orBl7evM7iyjVvbZm6WbHMe4W0jX5_S9R1wONmuohTXfrDAJiUGRHjaBqpy7EHbluZ4lRcavQQCLCXslZCAhzeFMCKMmBCUVlLvzIhOF_VLCg2L6bcNf12nGnjg6QB_wjMUeMy6nLx" />
                                <span
                                    class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-outline ring-2 ring-surface"></span>
                            </div>
                            <div>
                                <div class="font-label-lg text-label-lg text-on-surface font-bold">Vũ Đức Trọng</div>
                                <div class="font-body-sm text-body-sm text-on-surface-variant">Mã: <span
                                        class="font-bold text-on-surface">RD-38411</span></div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-bold">43-D1 502.83</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Honda Future 125cc •
                                0945.029.117</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-1">
                                <span
                                    class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-bold">Tiêu
                                    Chuẩn</span>
                                <div class="flex items-center text-secondary text-[13px] font-bold">
                                    <span class="material-symbols-outlined text-[15px]"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span>4.91</span>
                                </div>
                            </div>
                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">920 cuốc hoàn
                                thành</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <span class="font-label-lg text-label-lg text-tertiary font-extrabold">1.600.000 đ</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Ký quỹ an toàn</span>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="font-label-md text-label-md text-on-surface font-bold">98.1%</span>
                                <span class="text-tertiary font-label-sm text-label-sm font-bold">Đúng giờ 97.4%</span>
                            </div>
                            <div class="w-24 bg-surface-container rounded-full h-1 mt-1 overflow-hidden">
                                <div class="bg-tertiary h-1 rounded-full" style="width: 98.1%"></div>
                            </div>
                        </div>
                    </td>
                    <td class="py-space-md px-space-md">
                        <div
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm">
                            <span class="w-2 h-2 rounded-full bg-outline"></span>
                            <span>Ngoại Tuyến (Offline)</span>
                        </div>
                        <div class="text-[11px] text-on-surface-variant mt-0.5">Hoạt động gần nhất: 3 giờ trước</div>
                    </td>
                    <td class="py-space-md px-space-lg text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors"
                                title="Xem hành trình GPS" type="button">
                                <span class="material-symbols-outlined text-[18px]">route</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors"
                                title="Điều chỉnh ví ký quỹ" type="button">
                                <span class="material-symbols-outlined text-[18px]">account_balance_wallet</span>
                            </button>
                            <button
                                class="p-1.5 rounded-lg bg-surface-container hover:bg-error-container hover:text-error text-on-surface-variant transition-colors"
                                title="Cảnh báo vi phạm" type="button">
                                <span class="material-symbols-outlined text-[18px]">block</span>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Table Pagination & Bulk Controls -->
    <div
        class="p-space-md bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-space-md">
        <div class="flex items-center gap-space-sm text-body-sm text-on-surface-variant">
            <span>Đã chọn: <span class="font-bold text-on-surface">0 tài xế</span></span>
            <span>•</span>
            <button class="hover:text-primary underline font-label-sm text-label-sm" type="button">Chọn toàn bộ
                18.600 tài xế</button>
        </div>
        <div class="flex items-center gap-space-xs">
            <button
                class="p-2 rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface disabled:opacity-40 transition-colors"
                type="button">
                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            <button
                class="w-8 h-8 rounded-xl bg-primary text-on-primary font-label-md text-label-md font-bold shadow-sm"
                type="button">1</button>
            <button
                class="w-8 h-8 rounded-xl hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors"
                type="button">2</button>
            <button
                class="w-8 h-8 rounded-xl hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors"
                type="button">3</button>
            <span class="px-1 text-on-surface-variant">...</span>
            <button
                class="w-8 h-8 rounded-xl hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors"
                type="button">310</button>
            <button
                class="p-2 rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors"
                type="button">
                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </button>
        </div>
    </div>
</div>
