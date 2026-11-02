<section class="bg-surface-container-lowest rounded-3xl p-space-lg shadow-sm flex flex-col gap-space-lg">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-md">
<div class="w-10 h-10 rounded-xl bg-secondary-fixed-dim/40 text-secondary flex items-center justify-center">
<span class="material-symbols-outlined text-[22px]">local_shipping</span>
</div>
<div>
<h2 class="font-headline-md text-headline-md text-on-surface">Phân khu 2: Biểu Phí Vận Chuyển &amp; Surge Pricing Engine</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Định tuyến động giá ship và bảo đảm thu nhập tài xế trong điều kiện khắc nghiệt</p>
</div>
</div>
<div class="flex items-center gap-2 bg-tertiary-container/10 px-3 py-1 rounded-full text-tertiary font-label-sm text-label-sm">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
          Surge Engine: Tự Động Kích Hoạt
        </div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-space-lg">
<!-- Biểu phí cơ bản -->
<div class="bg-surface-container-low rounded-2xl p-space-lg flex flex-col gap-space-md">
<span class="font-label-lg text-label-lg text-on-surface font-bold">Biểu phí cơ bản theo khoảng cách</span>
<div class="bg-surface-container-lowest rounded-xl p-space-md flex flex-col gap-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant">Mức mở cửa (2km đầu tiên)</span>
<div class="flex items-baseline justify-between">
<span class="font-display-sm text-display-sm text-primary font-extrabold">16.000 <span class="text-headline-sm font-normal text-on-surface-variant">đ</span></span>
<span class="px-2 py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-on-surface">Cố định</span>
</div>
</div>
<div class="bg-surface-container-lowest rounded-xl p-space-md flex flex-col gap-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant">Đơn giá km tiếp theo (km thứ 3 trở đi)</span>
<div class="flex items-baseline justify-between">
<span class="font-headline-lg text-headline-lg text-on-surface font-bold">+5.000 <span class="text-body-md font-normal text-on-surface-variant">đ / km</span></span>
<span class="px-2 py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-on-surface">Cộng dồn</span>
</div>
</div>
<div class="flex items-center justify-between pt-space-xs">
<div>
<div class="font-label-md text-label-md text-on-surface">Bán kính giao tối đa</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Chặn đơn khi người dùng ở quá xa quán</div>
</div>
<div class="flex items-center gap-1 bg-surface-container-lowest px-3 py-1.5 rounded-xl">
<span class="font-headline-sm text-headline-sm font-bold text-primary">15.0</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">km</span>
</div>
</div>
</div>
<!-- Surge Pricing - Thời tiết xấu & Mưa lớn -->
<div class="bg-surface-container-low rounded-2xl p-space-lg flex flex-col justify-between">
<div class="flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<span class="font-label-lg text-label-lg text-on-surface font-bold">Hệ số Thời tiết Xấu (Mưa lớn / Ngập)</span>
<!-- Toggle Switch -->
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-surface-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Hệ thống đồng bộ API Dự báo Thời tiết Quốc gia. Khi vũ lượng &gt; 35mm/h, tự động nhân hệ số.</p>
<div class="bg-surface-container-lowest rounded-xl p-space-md flex flex-col gap-2">
<div class="flex justify-between items-center">
<span class="font-label-sm text-label-sm text-on-surface-variant">Khoảng dao động hệ số</span>
<span class="font-headline-sm text-headline-sm font-bold text-primary">x1.3 — x1.6</span>
</div>
<div class="w-full bg-surface-variant h-2 rounded-full overflow-hidden flex">
<div class="bg-primary h-full w-3/5 ml-[30%] rounded-full"></div>
</div>
<div class="flex justify-between font-label-sm text-label-sm text-on-surface-variant">
<span>x1.0 (Bình thường)</span>
<span>x2.0 (Bão cấp 8)</span>
</div>
</div>
</div>
<div class="mt-space-md bg-tertiary-fixed-dim/20 rounded-xl p-space-sm flex items-start gap-2 text-on-surface">
<span class="material-symbols-outlined text-tertiary text-[20px] mt-0.5">check_circle</span>
<span class="font-body-sm text-body-sm">
<strong class="font-bold text-tertiary">Chính sách đặc thù:</strong> Toàn bộ 100% phần tiền tăng từ hệ số thời tiết được cộng thẳng vào ví tài xế nhận chuyến.
            </span>
</div>
</div>
<!-- Cảnh báo thiếu xe & Ngưỡng điều phối -->
<div class="bg-surface-container-low rounded-2xl p-space-lg flex flex-col justify-between">
<div class="flex flex-col gap-space-md">
<span class="font-label-lg text-label-lg text-on-surface font-bold">Ngưỡng Thiếu Tài Xế Cục Bộ</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Kích hoạt thông báo đẩy huy động tài xế vùng lân cận di chuyển sang điểm nóng.</p>
<div class="bg-surface-container-lowest rounded-xl p-space-md flex items-center justify-between">
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Tỷ lệ Đơn / Tài xế kích hoạt</span>
<div class="font-headline-md text-headline-md text-error font-bold mt-1">&gt; 1.8 đơn / tx</div>
</div>
<div class="w-12 h-12 rounded-xl bg-error-container text-error flex items-center justify-center">
<span class="material-symbols-outlined text-[26px]">warning</span>
</div>
</div>
<!-- Mini Inline Chart: Heatmap District Distribution -->
<div class="bg-surface-container-lowest rounded-xl p-space-md flex flex-col gap-2">
<span class="font-label-sm text-label-sm text-on-surface-variant">Tình trạng các điểm nóng hiện tại</span>
<div class="flex items-center justify-between text-body-sm">
<span class="font-medium">Quận 1, TP.HCM</span>
<span class="text-error font-bold">2.1 (Surge x1.5)</span>
</div>
<div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden">
<div class="bg-error h-full w-[85%] rounded-full"></div>
</div>
<div class="flex items-center justify-between text-body-sm pt-1">
<span class="font-medium">Cầu Giấy, Hà Nội</span>
<span class="text-secondary font-bold">1.7 (Cận ngưỡng)</span>
</div>
<div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden">
<div class="bg-secondary-container h-full w-[65%] rounded-full"></div>
</div>
</div>
</div>
<button class="mt-space-md w-full py-2 bg-surface-container-highest hover:bg-surface-variant text-on-surface font-label-sm text-label-sm rounded-xl transition-all" type="button">
            Xem bản đồ nhiệt thời gian thực (Heatmap 24/7)
          </button>
</div>
</div>
</section>
