<div class="flex flex-col gap-space-md">
    <x-seller.cards.review-card initials="HN" avatar-class="bg-primary-fixed text-on-primary-fixed" name="Hoàng Nam"
        tag="Khách hàng VIP" tag-class="bg-secondary-fixed text-on-secondary-fixed" order="#FH-89210" stars="5"
        rating-label="Tuyệt hảo" rating-label-class="text-tertiary" time="2 giờ trước">
        <x-slot:status>
            <div class="flex items-center gap-space-xs self-start">
                <span
                    class="px-space-sm py-space-xs rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-label-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">check_circle</span> Đã phản hồi
                </span>
                <span
                    class="px-space-sm py-space-xs rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">confirmation_number</span> Đã tặng voucher 20k
                </span>
            </div>
        </x-slot:status>

        <!-- Review Body -->
        <p class="font-body-lg text-body-lg text-on-surface leading-relaxed">
            “Bún bò nước dùng thơm ngậy mắm ruốc chuẩn Huế, thịt bắp hoa mềm giòn, gói lá chuối sạch sẽ, tài xế giao tới
            còn bốc khói nghi ngút. Chắc chắn sẽ ủng hộ dài dài!”
        </p>
        <!-- Food Tag & Dish Image -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-space-md">
            <div class="w-36 h-28 rounded-xl overflow-hidden shadow-sm shrink-0">
                <img class="w-full h-full object-cover transition-transform hover:scale-105 duration-300"
                    data-alt="Close up mouth-watering photo of authentic Hue beef noodle soup (Bun Bo Hue) in a steaming bowl with tender beef shank, fresh herbs, aromatic spicy broth, natural warm lighting, editorial food photography"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRUS9h5uyOPvfAljW2iskJX8_TC7CvjlM7viMksO1MzdjGtcknHO6Fux3S2JjajTZgkbvMt05m_WO-sLjY0idQftXphnVG45FyLWsAekm1PbfGEeElCMKMLl_qSsSTYrVt6UGR4sFWmq6oYuaOS32eaUbTDEhknCKUK3GtqIo-dCaujVDtzrZ5pONHhZ4e06inOeiuL5eq5icucqYVIggNoKSwEzA7_Hq9dApJiV5K" />
            </div>
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-space-xs">
                    <span class="material-symbols-outlined text-primary text-[18px]">restaurant</span>
                    <span class="font-label-md text-label-md text-on-surface">Món đã đặt: Bún Bò Bắp Hoa Cố Đô (Size
                        L)</span>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Ghi chú kèm: "Nhiều ớt chưng, rau sống
                    trụng tái"</p>
            </div>
        </div>
        <!-- Existing Owner Response Display -->
        <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-space-xs">
                    <span class="font-label-md text-label-md text-primary font-bold">Bếp Huế Cố Đô</span>
                    <span
                        class="px-space-xs py-0.2 rounded bg-primary-fixed text-on-primary-fixed-variant font-label-sm text-[10px]">Chủ
                        quán</span>
                </div>
                <span class="font-body-sm text-body-sm text-on-surface-variant">1 giờ trước</span>
            </div>
            <p class="font-body-md text-body-md text-on-surface">
                Dạ Bếp cảm ơn anh Nam rất nhiều ạ! Mắm ruốc và bắp hoa tươi ngon nhập trực tiếp từ Huế mỗi ngày. Quán
                xin gửi tặng anh mã giảm giá 20.000đ cho đơn hàng tiếp theo, chúc anh một ngày thật ngon miệng ạ! ❤️
            </p>
        </div>
        <!-- Action Row -->
        <div class="pt-space-xs flex items-center justify-end gap-space-sm">
            <button
                class="px-space-md py-space-xs rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-sm text-label-sm flex items-center gap-space-xs transition-colors"
                type="button">
                <span class="material-symbols-outlined text-[16px]">edit</span> Chỉnh sửa phản hồi
            </button>
        </div>
    </x-seller.cards.review-card>

    <x-seller.cards.review-card initials="TT" avatar-class="bg-secondary-fixed text-on-secondary-fixed"
        name="Lê Thanh Trúc" order="#FH-89194" stars="4" rating-label="Hài lòng"
        rating-label-class="text-on-surface-variant" time="4 giờ trước">
        <x-slot:status>
            <span
                class="px-space-sm py-space-xs rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm flex items-center gap-1 self-start">
                <span class="material-symbols-outlined text-[14px]">pending</span> Chưa phản hồi
            </span>
        </x-slot:status>

        <!-- Review Body -->
        <p class="font-body-lg text-body-lg text-on-surface leading-relaxed">
            “Món ăn ngon đậm đà, quán nên thêm chanh ớt tươi riêng vì mình ăn cay nhiều. Shipper giao nhanh, đồ ăn vẫn
            ấm.”
        </p>
        <!-- Dish Tag -->
        <div
            class="p-space-xs px-space-sm rounded-lg bg-surface-container-low inline-flex items-center gap-space-xs self-start">
            <span class="material-symbols-outlined text-primary text-[16px]">lunch_dining</span>
            <span class="font-label-sm text-label-sm text-on-surface">Cơm Hến &amp; Bún Hến Hoa Lau x 2</span>
        </div>
        <!-- Interactive Merchant Reply Form -->
        <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-sm">
            <div class="flex items-center justify-between">
                <span class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-space-xs">
                    <span class="material-symbols-outlined text-primary text-[18px]">reply</span> Gửi lời phản hồi của
                    chủ quán
                </span>
                <span class="font-body-sm text-body-sm text-on-surface-variant">Phản hồi sẽ hiển thị công khai trên ứng
                    dụng</span>
            </div>
            <!-- Suggested Quick Replies -->
            <div class="flex items-center gap-space-xs flex-wrap">
                <span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px] text-primary">magic_button</span> Gợi ý câu trả
                    lời:
                </span>
                <button
                    class="px-space-sm py-0.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                    onclick="document.getElementById('reply-input-2').value='Dạ Bếp Huế Cố Đô cảm ơn chị Trúc đã góp ý quý báu ạ! Quán đã bổ sung ngay phần chanh ớt tươi đóng gói riêng cho mọi đơn hàng sau. Rất mong được phục vụ chị lần tới!';">
                    Cảm ơn &amp; ghi nhận thêm chanh ớt
                </button>
                <button
                    class="px-space-sm py-0.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                    onclick="document.getElementById('reply-input-2').value='Chào bạn Trúc, cảm ơn bạn đã yêu thích món ăn của quán. Bếp đã lưu ý ghi chú cay nhiều cho tài khoản của bạn trên hệ thống rồi ạ!';">
                    Lưu ý thói quen cay
                </button>
            </div>
            <div class="relative">
                <textarea
                    class="w-full p-space-sm rounded-xl bg-surface-container-lowest text-on-surface font-body-md text-body-md placeholder:text-on-surface-variant focus:outline-none focus:ring-2 focus:ring-primary/20 min-h-[88px] resize-y"
                    id="reply-input-2" placeholder="Nhập câu trả lời lịch sự, thân thiện của quán..."></textarea>
            </div>
            <div class="flex items-center justify-between gap-space-sm">
                <button
                    class="px-space-sm py-space-xs rounded-xl text-primary hover:bg-primary-fixed/30 font-label-md text-label-md flex items-center gap-1 transition-colors"
                    type="button">
                    <span class="material-symbols-outlined text-[18px]">card_giftcard</span> Tặng Voucher Tri Ân
                </button>
                <div class="flex items-center gap-space-xs">
                    <button
                        class="px-space-md py-space-xs rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md transition-colors"
                        type="button">
                        Bỏ qua
                    </button>
                    <button
                        class="px-space-md py-space-xs rounded-xl bg-primary text-on-primary hover:bg-primary-container font-label-md text-label-md flex items-center gap-space-xs transition-colors shadow-sm"
                        type="button">
                        <span class="material-symbols-outlined text-[16px]">send</span> Gửi phản hồi
                    </button>
                </div>
            </div>
        </div>
    </x-seller.cards.review-card>

    <x-seller.cards.review-card initials="MT" avatar-class="bg-tertiary-fixed text-on-tertiary-fixed" name="Minh Tuấn"
        order="#FH-89140" stars="5" rating-label="Tuyệt hảo" rating-label-class="text-tertiary"
        time="Hôm qua 20:15">
        <x-slot:status>
            <div class="flex items-center gap-space-xs self-start">
                <button
                    class="px-space-md py-space-xs rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md flex items-center gap-space-xs transition-colors"
                    type="button">
                    <span class="material-symbols-outlined text-[16px]">card_giftcard</span> Tặng voucher tri ân
                </button>
                <button
                    class="px-space-md py-space-xs rounded-xl bg-primary text-on-primary hover:bg-primary-container font-label-md text-label-md flex items-center gap-space-xs transition-colors"
                    type="button">
                    <span class="material-symbols-outlined text-[16px]">reply</span> Phản hồi
                </button>
            </div>
        </x-slot:status>

        <!-- Review Body -->
        <p class="font-body-lg text-body-lg text-on-surface leading-relaxed">
            “Bánh bèo chén tôm cháy giòn rụm, nước mắm ngọt ngon xuất sắc. Giao bánh vẫn nóng hổi, xếp vào hộp không bị
            dính nát tí nào.”
        </p>
        <!-- Dish Tag with Photo thumbnail -->
        <div class="flex items-center gap-space-md">
            <div class="w-16 h-16 rounded-xl overflow-hidden shadow-sm shrink-0">
                <img class="w-full h-full object-cover"
                    data-alt="Traditional Vietnamese delicate steamed rice cakes in small ceramic dishes topped with savory dried shrimp flakes and scallion oil, crisp and appetizing"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5xXe_cW9xjBv9LiWvHt7dKMPs6PnwA7vOlmFSueBRhyYa5KtvONdU3UewSwQsm1Y3purcJMkcLsuetaghoJ_pBELd6cKfKHeur6ySJSMhZEYXLum7WhVR2kBSuFOk9m10b6a7rgmBSjUjsX7REPDkgokl2rLf3m46NI4h23v3faDsC-JWdgcnQpD8ptj-f54FaSPqFUKy4_nJl6uigvZlU49PyfLoMMTd9z_BJW7x" />
            </div>
            <div class="flex flex-col">
                <span class="font-label-md text-label-md text-on-surface">Bánh Bèo Chén Nhân Tôm Cháy (Mẹt 10
                    chén)</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant">Đã gọi món này 4 lần tại quán</span>
            </div>
        </div>
    </x-seller.cards.review-card>
</div>
