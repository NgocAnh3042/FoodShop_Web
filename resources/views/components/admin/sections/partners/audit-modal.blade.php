<div class="fixed inset-0 bg-inverse-surface/50 backdrop-blur-sm z-50 flex items-center justify-center p-space-md hidden transition-opacity"
    id="auditModalOverlay">
    <div
        class="bg-surface-container-lowest w-full max-w-4xl rounded-xl shadow-2xl overflow-hidden flex flex-col max-h-[921px] animate-in fade-in zoom-in-95">
        <!-- Modal Header -->
        <div class="p-space-md bg-surface-container-high flex items-center justify-between">
            <div class="flex items-center gap-space-sm">
                <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center text-on-primary">
                    <span class="material-symbols-outlined text-[22px]">verified</span>
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                        <span class="font-headline-sm text-headline-sm font-bold text-on-surface"
                            id="modalMerchantName">Hồ Sơ Duyệt: Bánh Mì Huỳnh Hoa (CN2)</span>
                        <span
                            class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-bold"
                            id="modalMerchantCode">FHB-99120</span>
                    </div>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Kiểm định hồ sơ pháp lý, vệ sinh
                        ATTP & thiết lập chiết khấu ban đầu</span>
                </div>
            </div>
            <button
                class="w-8 h-8 rounded-full bg-surface-container hover:bg-surface-container-highest text-on-surface-variant flex items-center justify-center transition-colors"
                onclick="closeAuditModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <!-- Modal Body (Scrollable Split Review) -->
        <div class="p-space-lg overflow-y-auto flex flex-col gap-space-lg">
            <!-- Section 1: Business Identification & Banking -->
            <div>
                <span
                    class="font-label-md text-label-md text-primary uppercase tracking-wider font-bold block mb-space-sm">1.
                    Pháp Nhân & Tài Khoản Ngân Hàng Thụ Hưởng</span>
                <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-space-md bg-surface-container-low p-space-md rounded-xl">
                    <div class="flex flex-col gap-1">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Tên Doanh Nghiệp / Hộ Kinh
                            Doanh:</span>
                        <span class="font-label-md text-label-md font-bold text-on-surface">HỘ KINH DOANH BÁNH MÌ HUỲNH
                            HOA CHI NHÁNH 2</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant mt-1">Đại diện pháp luật: <strong
                                class="text-on-surface">Trần Lệ Hoa</strong> (CCCD: 079188009214)</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Địa chỉ kinh doanh: Số 26 Lê Thị
                            Riêng, P. Bến Thành, Quận 1, TP.HCM</span>
                    </div>
                    <div class="flex flex-col gap-1 bg-surface-container-lowest p-space-sm rounded-xl">
                        <div class="flex items-center justify-between">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Tài khoản nhận
                                tiền (T+1):</span>
                            <span
                                class="inline-flex items-center gap-1 font-label-sm text-label-sm text-tertiary font-bold">
                                <span class="material-symbols-outlined text-[14px]">check_circle</span> Đã xác thực
                                Napas
                            </span>
                        </div>
                        <span class="font-headline-sm text-headline-sm font-bold text-on-surface">1903 8829 001
                            028</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Ngân hàng TMCP Kỹ Thương Việt
                            Nam (Techcombank) - CN Sài Gòn</span>
                        <span class="font-label-md text-label-md text-primary font-semibold">Chủ TK: TRAN LE HOA</span>
                    </div>
                </div>
            </div>
            <!-- Section 2: Legal Paperwork & Food Hygiene Certification (ATTP & GPKD) -->
            <div>
                <div class="flex items-center justify-between mb-space-sm">
                    <span class="font-label-md text-label-md text-primary uppercase tracking-wider font-bold">2. Hồ Sơ
                        Chứng Từ Pháp Lý (Giấy phép ĐKKD & ATTP)</span>
                    <span class="font-body-sm text-body-sm text-tertiary font-bold flex items-center gap-1">
                        <span class="material-symbols-outlined text-[16px]">verified</span> 2/2 Tệp gốc đã thẩm tra
                    </span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                    <!-- Doc 1: ATTP Certificate -->
                    <div class="p-space-sm bg-surface-container rounded-xl flex flex-col gap-space-xs">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-space-xs">
                                <span
                                    class="material-symbols-outlined text-primary text-[20px]">health_and_safety</span>
                                <span class="font-label-md text-label-md font-bold text-on-surface">Giấy chứng nhận
                                    ATTP</span>
                            </div>
                            <span class="text-tertiary font-label-sm text-label-sm font-bold">Còn hạn đến 12/2026</span>
                        </div>
                        <div
                            class="relative w-full h-40 bg-surface-container-high rounded-lg overflow-hidden group cursor-pointer">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                data-alt="Official food safety hygiene government certificate document with stamps and seals laid flat under bright office lighting, high resolution scanner quality."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDEA5MhxJb_ytE-h1URaOD1tq4ONvAVb4xl4r7DXT1Bgk18tK9Fx6bdWG1a3QLB36rrG77eT6VXYS6ytyIPXpk9plXDmSzuZPPr5eH5wvKYdNr6H9OS06mqnXR8gb5VEIaWezpxGALzITEeoyvIDV4TwMn7GOkS3N-eAoGDQsKDdhZXdyuZ5X5FRVw1MYiatRQsW1JOJmyBiQqn3u8NtVgUQn4XGGeHSuGQGKmlWumI" />
                            <div
                                class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity text-white font-label-sm text-label-sm gap-1">
                                <span class="material-symbols-outlined text-[18px]">zoom_in</span> Xem ảnh gốc HD
                            </div>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Số GP: 41-ATTP/2023/BQLATTP cấp
                            bởi Ban Quản lý ATTP TP.HCM</span>
                    </div>
                    <!-- Doc 2: GPKD -->
                    <div class="p-space-sm bg-surface-container rounded-xl flex flex-col gap-space-xs">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-space-xs">
                                <span class="material-symbols-outlined text-primary text-[20px]">badge</span>
                                <span class="font-label-md text-label-md font-bold text-on-surface">Giấy phép
                                    ĐKKD</span>
                            </div>
                            <span class="text-tertiary font-label-sm text-label-sm font-bold">Cấp ngày 15/03/2022</span>
                        </div>
                        <div
                            class="relative w-full h-40 bg-surface-container-high rounded-lg overflow-hidden group cursor-pointer">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                data-alt="Business registration license legal paperwork document stamped by department of planning and investment, crisp high quality archival document."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgiV3sQ-o24ZMcNVF8yS9Cw0s1wVbM5e_p6gXi6_9Rl15Ulahg_FAqe8a_Vitfy6aUG9q3g3JiwCIdxiAhunc49mWaD98pjGbiYFTh7Tzcqak4BYAZxeURoLTSIbA0j4F8JeDmKUAHgx21yFR2eE_JVAbOn_7hf2eUIy30VGigPY-1f7d9qT8olDxTNtaFORIlMTKNDFjTnNyUyl67s0BmrXZbwZ_Zk3Qe5KP5GaD5" />
                            <div
                                class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity text-white font-label-sm text-label-sm gap-1">
                                <span class="material-symbols-outlined text-[18px]">zoom_in</span> Xem ảnh gốc HD
                            </div>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Mã số ĐKKD: 0317892341 do UBND
                            Quận 1 cấp phép</span>
                    </div>
                </div>
            </div>
            <!-- Section 3: Proposed Menu & Pricing Check -->
            <div>
                <span
                    class="font-label-md text-label-md text-primary uppercase tracking-wider font-bold block mb-space-sm">3.
                    Thực Đơn Món Ăn Mở Bán (Menu Preview)</span>
                <div class="bg-surface-container-low p-space-md rounded-xl">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-sm">
                        <div class="p-space-sm bg-surface-container-lowest rounded-xl flex items-center gap-space-sm">
                            <div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden flex-shrink-0">
                                <img class="w-full h-full object-cover"
                                    data-alt="Signature loaded Vietnamese banh mi with roasted pate, mayonnaise, layered cold cuts and fragrant cilantro."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDB6nwBlBTu43RvndY6HgqVaOvpCbh_MfaYoK5EI9-RSHtv6XLdrVbX6l7axcgqXHU26GaKtnUWnrK43P1Sct7kR4yGSskGjfo8cMAkGntgYyYtDvmS78tPkHyQmaGgJx0_LWShzS70ZtNWOYoNfeFrJ1ixzpnoWDQcfcOMHFaszwEIlWs-8R-k2RwVwUbCL5Pzj6fyTwJznN6GKJDbRhmTx4b7kaDs78jeCva-272M" />
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-label-md text-label-md font-bold text-on-surface truncate">Bánh Mì Đặc
                                    Biệt</span>
                                <span class="font-label-sm text-label-sm text-primary font-bold">68.000 đ</span>
                            </div>
                        </div>
                        <div class="p-space-sm bg-surface-container-lowest rounded-xl flex items-center gap-space-sm">
                            <div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden flex-shrink-0">
                                <img class="w-full h-full object-cover"
                                    data-alt="Fresh loaf of Vietnamese baguette bread with a jar of rich pate and pork char siu slices on side."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAe6ZGxsuF2qOcmAc7ukmIKDjySJ18WPwF8RxIMXGLptFRH7kVa7H5Gm9xrZ97ojdzRztngWsVS7r_05jw1HcEXdHt7j9WcANlPzsrPeNj9tClL33hUIo9KTq0cMyiUe9QUwMiNJysFT6qspJWhJ_VfGtRqA1K87okyGsmE5xCocJg71SE2ctwbuu78i49VVDdbGT1C1555iJE4ja395Jd6VSYG5C2WyyKQwna6xrqF" />
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-label-md text-label-md font-bold text-on-surface truncate">Bánh Mì
                                    Pate Chả Lụa</span>
                                <span class="font-label-sm text-label-sm text-primary font-bold">55.000 đ</span>
                            </div>
                        </div>
                        <div class="p-space-sm bg-surface-container-lowest rounded-xl flex items-center gap-space-sm">
                            <div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden flex-shrink-0">
                                <img class="w-full h-full object-cover"
                                    data-alt="Traditional Vietnamese iced condensed milk coffee in tall glass with ice cubes."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8Ekj6WOnyDxAunV2gTJ3Ymkknb89UG2KQavIFbS2EKyiKzDBHCqkcvC28zKYghZjw_YdLK8C7TjTfmeETBhnQM8i7h8sBOYrrFNf_qxI8oZGg9yPC-2CZ0T8BxV459waY0I1NSWV4XiqpQLEbmey9qEYcpExGhlv7wBZE66xRVuhtpc-O4A_0Y3QvAIpGI8aHZ2iNh1AlHCY2u8OX1nS9oQyeXHXY2SFHFADoGbYG" />
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-label-md text-label-md font-bold text-on-surface truncate">Cà Phê Sữa
                                    Đá Sài Gòn</span>
                                <span class="font-label-sm text-label-sm text-primary font-bold">25.000 đ</span>
                            </div>
                        </div>
                    </div>
                    <span class="font-body-sm text-body-sm text-on-surface-variant block mt-space-sm">Tổng cộng 14 món
                        ăn & thức uống đã được cấu hình giá niêm yết đồng nhất tại quán.</span>
                </div>
            </div>
            <!-- Section 4: Commission Setting & Operational SLA -->
            <div
                class="bg-surface-container-high/40 p-space-md rounded-xl flex flex-col md:flex-row items-center justify-between gap-space-md">
                <div class="flex flex-col">
                    <span class="font-label-md text-label-md text-on-surface font-bold">Cấu hình Chiết Khấu Sàn Áp
                        Dụng:</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Áp dụng từ ngày phê duyệt, chu kỳ
                        đối soát thanh toán thứ 2 hàng tuần</span>
                </div>
                <div class="flex items-center gap-space-sm">
                    <select
                        class="px-space-md py-2 bg-surface-container-lowest rounded-xl font-label-md text-label-md text-primary font-bold outline-none cursor-pointer">
                        <option value="18">Mức 18.0% (Chuẩn đối tác cam kết đơn)</option>
                        <option selected="" value="20">Mức 20.0% (Tiêu chuẩn quán mới)</option>
                        <option value="15">Mức 15.0% (Đối tác chiến lược)</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Modal Footer Action CTAs -->
        <div
            class="p-space-md bg-surface-container-high flex flex-col sm:flex-row items-center justify-between gap-space-sm">
            <div class="flex items-center gap-space-sm text-on-surface-variant font-body-sm text-body-sm">
                <span class="material-symbols-outlined text-[18px] text-tertiary">security</span>
                <span>Duyệt hồ sơ sẽ kích hoạt mã gian hàng lên ứng dụng khách hàng ngay lập tức.</span>
            </div>
            <div class="flex items-center gap-space-sm w-full sm:w-auto justify-end">
                <button
                    class="px-space-md py-2 rounded-full font-label-md text-label-md bg-error-container text-error hover:bg-error/20 transition-all flex items-center gap-1"
                    onclick="rejectMerchantPrompt()" type="button">
                    <span class="material-symbols-outlined text-[18px]">cancel</span>
                    Từ chối hồ sơ
                </button>
                <button
                    class="px-space-lg py-2 rounded-full font-label-md text-label-md bg-primary hover:bg-primary-container text-on-primary font-bold shadow-md transition-all flex items-center gap-1"
                    onclick="approveMerchantSuccess()" type="button">
                    <span class="material-symbols-outlined text-[18px]">verified</span>
                    Phê duyệt & Kích hoạt quán
                </button>
            </div>
        </div>
    </div>
</div>
