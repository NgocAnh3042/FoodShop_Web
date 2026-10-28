<section class="relative w-full overflow-hidden bg-surface-container-low pt-space-xl pb-margin-wide">
    <!-- Ambient Warm Orbs -->
    <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-secondary-fixed/40 blur-3xl pointer-events-none">
    </div>
    <div class="absolute top-1/2 -left-20 w-80 h-80 rounded-full bg-primary-fixed/30 blur-3xl pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-gutter relative z-10">
        <div class="grid grid-cols-12 gap-space-lg items-center">
            <!-- Hero Text & Search (Col 7) -->
            <div class="col-span-12 lg:col-span-7 flex flex-col gap-space-lg">
                <div
                    class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-primary-fixed text-on-primary-fixed w-fit shadow-sm">
                    <span class="material-symbols-outlined text-[18px] text-primary"
                        style="font-variation-settings: 'FILL' 1;">local_fire_department</span>
                    <span class="font-label-sm text-label-sm tracking-wider uppercase font-extrabold">Ẩm thực nóng sốt
                        hỏa tốc</span>
                </div>
                <h1 class="font-display-lg text-display-lg text-on-surface tracking-tight leading-tight">
                    Thưởng thức món ngon <br />
                    <span class="text-primary-container relative inline-block">
                        chuẩn vị bếp nhà
                        <svg class="absolute -bottom-2 left-0 w-full h-3 text-secondary-container" fill="none"
                            preserveaspectratio="none" viewbox="0 0 200 12">
                            <path d="M2 9C58 2 142 2 198 9" stroke="currentColor" stroke-linecap="round"
                                stroke-width="4"></path>
                        </svg>
                    </span>
                    giao trong 20 phút
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                    Tận hưởng mỹ vị từ hơn 3.500+ nhà hàng hàng đầu &amp; quán gia truyền trứ danh Sài Gòn. Đóng gói
                    chuyên dụng giữ trọn độ giòn nóng và hương vị nguyên bản.
                </p>
                <!-- Interactive Search with Quick Tags -->
                <div
                    class="bg-surface-container-lowest p-space-sm rounded-2xl shadow-xl flex flex-col gap-space-sm max-w-xl">
                    <div class="flex items-center gap-space-sm px-space-sm">
                        <span class="material-symbols-outlined text-primary text-[26px]">restaurant_menu</span>
                        <input
                            class="flex-1 bg-transparent py-space-sm text-on-surface placeholder:text-outline font-body-md text-body-md outline-none border-none ring-0 focus:ring-0 focus:outline-none"
                            id="heroSearchInput" placeholder="Bạn thèm món gì trưa nay? Gõ tên món hoặc quán ăn..."
                            type="text" />
                        <button
                            class="px-space-lg py-3 rounded-xl bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container shadow-md transition-all flex items-center gap-space-xs"
                            type="button">
                            <span>Tìm món</span>
                            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </button>
                    </div>
                    <!-- Suggestion Chips -->
                    <div
                        class="flex items-center gap-space-xs flex-wrap pt-space-xs px-space-sm border-t border-transparent">
                        <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Gợi ý
                            nhanh:</span>
                        <button
                            class="px-space-sm py-1 rounded-full bg-surface-container hover:bg-primary-fixed hover:text-on-primary-fixed font-label-sm text-label-sm text-on-surface-variant transition-colors"
                            type="button">Phở bò tái lăn</button>
                        <button
                            class="px-space-sm py-1 rounded-full bg-surface-container hover:bg-primary-fixed hover:text-on-primary-fixed font-label-sm text-label-sm text-on-surface-variant transition-colors"
                            type="button">Pizza hải sản</button>
                        <button
                            class="px-space-sm py-1 rounded-full bg-surface-container hover:bg-primary-fixed hover:text-on-primary-fixed font-label-sm text-label-sm text-on-surface-variant transition-colors"
                            type="button">Bún đậu mắm tôm</button>
                        <button
                            class="px-space-sm py-1 rounded-full bg-surface-container hover:bg-primary-fixed hover:text-on-primary-fixed font-label-sm text-label-sm text-on-surface-variant transition-colors"
                            type="button">Trà đào dầm</button>
                        <button
                            class="px-space-sm py-1 rounded-full bg-surface-container hover:bg-primary-fixed hover:text-on-primary-fixed font-label-sm text-label-sm text-on-surface-variant transition-colors"
                            type="button">Cơm tấm sườn bì</button>
                    </div>
                </div>
                <!-- Trust Badges -->
                <div class="grid grid-cols-3 gap-space-md pt-space-sm max-w-xl">
                    <div
                        class="flex items-center gap-space-sm p-space-sm rounded-xl bg-surface-container-lowest/80 backdrop-blur-sm shadow-sm">
                        <div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary text-[22px]">timer</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-bold">Giao 20 phút</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Bồi thường nếu muộn</span>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-space-sm p-space-sm rounded-xl bg-surface-container-lowest/80 backdrop-blur-sm shadow-sm">
                        <div
                            class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-secondary text-[22px]">moped</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-bold">Freeship 0đ</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Đơn hàng từ 100k</span>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-space-sm p-space-sm rounded-xl bg-surface-container-lowest/80 backdrop-blur-sm shadow-sm">
                        <div class="w-10 h-10 rounded-full bg-tertiary-fixed flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-tertiary text-[22px]">soup_kitchen</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-bold">Nóng giòn 100%</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Thùng giữ nhiệt kép</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Visual Showcase (Col 5 Bento) -->
            <div class="col-span-12 lg:col-span-5 relative">
                <div class="relative mx-auto w-full max-w-md">
                    <!-- Main Hero Image Showcase -->
                    <div
                        class="relative rounded-3xl overflow-hidden shadow-2xl bg-surface-container-high aspect-square">
                        <img class="w-full h-full object-cover"
                            data-alt="A lavish tabletop display of authentic Vietnamese beef pho bowl with fresh aromatic herbs, golden-crispy spring rolls on artisanal ceramicware, garnished with chili peppers and lime in warm atmospheric restaurant lighting with natural bokeh"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfsom9cVtLKyFlSVQj1jN3WA80ZUl4E1zcencV4LCwZxPBdrWntEwEDxmonhejaYQDlDfhrScT9VZQ7t7lYN8ahefNMzLQ9FlGA9O5zfF0cYlMr6ZiOZ82Qz-vPLvfuS8m4NFV_AfppiJkOHxaBMpRgBTFFFi0xdXkia9lRjig1vdVNbqdczcohHUNyAhSpl5yrt_UOf_2-wLyAzwqj6nBnGr9o_2lddKJOhDN8roxPFMefBf1EaBO6Q" />
                        <!-- Floating Delivery Guarantee Tag -->
                        <div
                            class="absolute top-4 left-4 bg-surface-container-lowest/95 backdrop-blur-md px-space-md py-space-xs rounded-full shadow-lg flex items-center gap-space-xs">
                            <span class="w-2.5 h-2.5 rounded-full bg-tertiary animate-pulse"></span>
                            <span class="font-label-md text-label-md text-on-surface font-bold">98.4% giao đúng
                                giờ</span>
                        </div>
                        <!-- Floating Chef Signature Card -->
                        <div class="absolute -bottom-4 right-4 bg-surface-container-lowest p-space-md rounded-2xl shadow-xl flex items-center gap-space-md max-w-[260px] animate-bounce"
                            style="animation-duration: 3s;">
                            <div
                                class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-primary text-[28px]">award_star</span>
                            </div>
                            <div class="flex flex-col">
                                <span
                                    class="font-label-sm text-label-sm text-secondary-container font-extrabold uppercase tracking-wider">Món
                                    Nổi Bật</span>
                                <span class="font-label-md text-label-md text-on-surface font-bold truncate">Phở Thìn Lò
                                    Đúc</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Hơn 1.2k lượt đặt tuần
                                    qua</span>
                            </div>
                        </div>
                    </div>
                    <!-- Overlapping Decorative Dish -->
                    <div
                        class="absolute -bottom-8 -left-8 w-36 h-36 rounded-2xl overflow-hidden shadow-xl ring-4 ring-surface-container-lowest hidden sm:block bg-surface-container">
                        <img class="w-full h-full object-cover"
                            data-alt="Overhead close-up of Vietnamese broken rice com tam with glazed grilled pork chop, steamed egg meatloaf, pickled carrots and cucumber on an elegant dark ceramic plate with golden backlight"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7zpkc5I61eANpLlkSdjhM-kSIM303fcUDCuN4LYlNrjfdVhiOlmg6CpDAcp53CY2vpVnW1gtpH7UW4j2s4aPfAocqJLtzJmC73x4Gk9piNUFzQCLzoZt5KHn8RSofl7WWOj3dTUCBcLwhwk51YoCWig2zI_fbhHEFF1nHaiZkgYbB_a_nw-x3GK07KJFrsGwTdH0uJA5L3OIV0DOg9Dno5LlGkFCS4t4Wmd4oneEtTPuPJYVz2KapJA" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
