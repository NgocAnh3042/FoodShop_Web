<section class="bg-surface-container-lowest rounded-3xl p-space-lg shadow-sm flex flex-col gap-space-lg">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-md">
<div class="w-10 h-10 rounded-xl bg-primary-fixed text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[22px]">percent</span>
</div>
<div>
<h2 class="font-headline-md text-headline-md text-on-surface">Phân khu 1: Mức Chiết khấu &amp; Phí Dịch vụ Sàn</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Thiết lập tỷ lệ giữ lại doanh thu cho từng phân khúc quán đối tác &amp; khoản thu tiện ích</p>
</div>
</div>
<span class="px-3 py-1 bg-surface-container rounded-full font-label-sm text-label-sm text-on-surface-variant">Phạm vi: Toàn quốc</span>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-space-lg">
<!-- Quán thường Slider -->
<div class="bg-surface-container-low rounded-2xl p-space-lg flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-sm">
<span class="font-label-lg text-label-lg text-on-surface">Chiết khấu mặc định Quán Thường</span>
<span class="font-headline-lg text-headline-lg text-primary font-extrabold" id="rate-display">20%</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-lg">Áp dụng trực tiếp vào mỗi đơn hàng được xác nhận đối với đối tác thông thường chưa ký bảo trợ chuỗi.</p>
<div class="flex flex-col gap-2">
<input class="w-full accent-primary h-2 bg-surface-variant rounded-lg cursor-pointer" id="rate-slider" max="30" min="10" step="1" type="range" value="20"/>
<div class="flex justify-between font-label-sm text-label-sm text-on-surface-variant">
<span>10% (Tối thiểu)</span>
<span>20% (Tiêu chuẩn)</span>
<span>30% (Trần quy định)</span>
</div>
</div>
</div>
<div class="mt-space-lg pt-space-md bg-surface-container-lowest rounded-xl p-space-md flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-secondary text-[20px]">info</span>
<span class="font-body-sm text-body-sm text-on-surface">Doanh thu dự phóng theo tỷ lệ hiện tại:</span>
</div>
<span class="font-label-md text-label-md text-primary font-bold">~1.42 tỷ VNĐ / ngày</span>
</div>
</div>
<!-- Quán chuỗi chiến lược & Các loại phí -->
<div class="flex flex-col gap-space-md">
<div class="bg-surface-container-low rounded-2xl p-space-md flex items-center justify-between">
<div class="flex items-center gap-space-md">
<div class="w-10 h-10 rounded-xl bg-secondary-fixed text-secondary flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">corporate_fare</span>
</div>
<div>
<div class="font-label-lg text-label-lg text-on-surface">Chiết khấu Quán Chuỗi Đối Tác Chiến Lược</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Ưu đãi độc quyền cam kết trên 100 đơn/ngày/điểm</div>
</div>
</div>
<div class="flex items-center gap-2">
<input class="w-16 text-center font-headline-sm text-headline-sm font-bold bg-surface-container-lowest text-primary rounded-xl py-1 outline-none" type="number" value="15"/>
<span class="font-label-lg text-label-lg text-on-surface">%</span>
</div>
</div>
<div class="bg-surface-container-low rounded-2xl p-space-md flex items-center justify-between">
<div class="flex items-center gap-space-md">
<div class="w-10 h-10 rounded-xl bg-tertiary-fixed text-tertiary flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">credit_card</span>
</div>
<div>
<div class="font-label-lg text-label-lg text-on-surface">Phí tiện ích nền tảng (Platform Service Fee)</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Cộng vào bill người dùng cuối mỗi giao dịch</div>
</div>
</div>
<div class="flex items-center gap-2">
<input class="w-24 text-right font-headline-sm text-headline-sm font-bold bg-surface-container-lowest text-on-surface rounded-xl px-2 py-1 outline-none" type="text" value="3,000"/>
<span class="font-label-md text-label-md text-on-surface-variant">đ / đơn</span>
</div>
</div>
<div class="bg-surface-container-low rounded-2xl p-space-md flex items-center justify-between">
<div class="flex items-center gap-space-md">
<div class="w-10 h-10 rounded-xl bg-surface-variant text-on-surface-variant flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">shopping_bag</span>
</div>
<div>
<div class="font-label-lg text-label-lg text-on-surface">Ngưỡng đơn tối thiểu cho phép giao</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Dưới mức này yêu cầu thanh toán phụ phí gói món</div>
</div>
</div>
<div class="flex items-center gap-2">
<input class="w-24 text-right font-headline-sm text-headline-sm font-bold bg-surface-container-lowest text-on-surface rounded-xl px-2 py-1 outline-none" type="text" value="30,000"/>
<span class="font-label-md text-label-md text-on-surface-variant">đ</span>
</div>
</div>
</div>
</div>
</section>
