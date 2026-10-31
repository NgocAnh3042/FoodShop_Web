<div
    class="rounded-xl bg-surface-container p-space-lg shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] flex flex-col lg:flex-row items-start lg:items-center justify-between gap-space-md relative overflow-hidden">
    <div
        class="absolute top-0 right-0 w-80 h-full bg-gradient-to-l from-primary/10 via-transparent to-transparent pointer-events-none">
    </div>

    {{-- Nhóm bên trái: biểu tượng + nội dung. flex-1 min-w-0 để chiếm hết chỗ trống và được phép co --}}
    <div class="flex items-start gap-space-md relative z-10 flex-1 min-w-0">
        <div class="w-12 h-12 rounded-xl bg-primary flex items-center justify-center text-on-primary shrink-0 shadow-md">
            <span class="material-symbols-outlined text-[26px]">psychology</span>
        </div>
        <div class="flex flex-col gap-1 max-w-2xl min-w-0">
            <div class="flex flex-wrap items-center gap-space-xs">
                <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Đề xuất độc
                    quyền từ FoodHub AI</span>
                <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">Dựa trên dữ liệu 7 ngày qua</span>
            </div>
            <p class="font-headline-sm text-headline-sm text-on-surface font-bold">
                Tối ưu công suất bếp: Kích cầu khung giờ vắng khách (14h00 - 17h00)
            </p>
            <p class="font-body-md text-body-md text-on-surface-variant">
                Khung giờ chiều của quán hiện chỉ đạt 22% công suất. Kích hoạt voucher <span
                    class="text-primary font-semibold">Giảm 15% (tối đa 25.000đ)</span> vào khung giờ này ước tính đem
                lại thêm <span class="font-semibold text-on-surface">18 - 25 đơn/ngày</span> mà không ảnh hưởng giờ cao
                điểm.
            </p>
        </div>
    </div>

    {{-- Nhóm nút bên phải: bỏ w-full md:w-auto, chỉ giữ shrink-0 để không bị bóp --}}
    <div class="flex flex-wrap items-center gap-space-sm relative z-10 shrink-0">
        <button
            class="px-space-md py-space-sm rounded-full bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-label-md text-label-md transition-colors"
            type="button">
            Xem phân tích giờ
        </button>
        <button
            class="px-space-md py-space-sm rounded-full bg-primary text-on-primary hover:bg-primary-container font-label-md text-label-md transition-all shadow-[0_4px_14px_rgba(204,73,0,0.35)] flex items-center gap-space-xs"
            type="button">
            <span class="material-symbols-outlined text-[18px]">auto_fix_high</span>
            <span>Áp dụng đề xuất ngay</span>
        </button>
    </div>
</div>
