<div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-lg">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-primary text-[22px]">tune</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Bảng Điều Khiển Màu Sắc Chính (Color Palette Editor)</h3>
</div>
<button class="font-label-sm text-label-sm text-primary hover:underline font-bold flex items-center gap-0.5" type="button">
<span class="material-symbols-outlined text-[16px]">restart_alt</span> Khôi phục gốc
          </button>
</div>
<!-- 1. Primary Brand Color Deep Dive -->
<div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-md">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-primary shadow-inner flex items-center justify-center text-on-primary font-label-md font-bold">P</div>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-on-surface font-bold">Màu Thương Hiệu Chủ Đạo (Primary Brand)</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Deep Food Warm Orange • <code class="font-mono text-primary font-bold">#EA580C</code></span>
</div>
</div>
<div class="flex items-center gap-space-xs">
<input class="w-28 px-space-sm py-1 rounded-lg bg-surface-container-lowest text-center font-mono font-label-md text-label-md text-on-surface outline-none shadow-sm" type="text" value="#EA580C"/>
<input class="w-9 h-9 rounded-lg cursor-pointer bg-transparent outline-none" type="color" value="#ea580c"/>
</div>
</div>
<!-- Sliders: Saturation & Brightness -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md pt-space-xs">
<div class="flex flex-col gap-1">
<div class="flex justify-between font-label-sm text-label-sm text-on-surface-variant">
<span>Độ bão hòa (Saturation)</span>
<span class="font-bold text-on-surface">94%</span>
</div>
<input class="w-full accent-primary cursor-pointer" max="100" min="0" type="range" value="94"/>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between font-label-sm text-label-sm text-on-surface-variant">
<span>Độ sáng (Brightness / Lightness)</span>
<span class="font-bold text-on-surface">48%</span>
</div>
<input class="w-full accent-primary cursor-pointer" max="100" min="0" type="range" value="48"/>
</div>
</div>
</div>
<!-- 2. Accent & Secondary Colors -->
<div class="flex flex-col gap-space-sm">
<span class="font-label-md text-label-md text-on-surface font-bold">Màu Nhấn &amp; Phụ trợ (Accent &amp; Secondary)</span>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<!-- Accent 1 -->
<div class="p-space-sm rounded-xl bg-surface-container-low flex items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm">
<span class="w-8 h-8 rounded-lg bg-[#f97316] shadow-sm"></span>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface font-bold">Vibrant Amber Orange</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Nút phụ, chip ưu đãi</span>
</div>
</div>
<span class="font-mono font-label-sm text-label-sm text-on-surface-variant bg-surface-container px-space-xs py-0.5 rounded">#f97316</span>
</div>
<!-- Accent 2 -->
<div class="p-space-sm rounded-xl bg-surface-container-low flex items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm">
<span class="w-8 h-8 rounded-lg bg-secondary-container shadow-sm"></span>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface font-bold">Golden Honey</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Đánh giá 5 sao, VIP</span>
</div>
</div>
<span class="font-mono font-label-sm text-label-sm text-on-surface-variant bg-surface-container px-space-xs py-0.5 rounded">#f59e0b</span>
</div>
</div>
</div>
<!-- 3. Semantic System Status Colors -->
<div class="flex flex-col gap-space-sm">
<span class="font-label-md text-label-md text-on-surface font-bold">Màu Trạng Thái Hệ Thống (Semantic Status Colors)</span>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-sm">
<!-- Success -->
<div class="p-space-sm rounded-xl bg-surface-container-low flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs">
<span class="w-3 h-3 rounded-full bg-tertiary-container"></span>
<span class="font-label-sm text-label-sm font-bold text-on-surface">Thành công / Online</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Fresh Leaf Green</span>
<span class="font-mono font-label-sm text-label-sm text-tertiary font-bold">#16a34a</span>
</div>
<!-- Warning -->
<div class="p-space-sm rounded-xl bg-surface-container-low flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs">
<span class="w-3 h-3 rounded-full bg-secondary"></span>
<span class="font-label-sm text-label-sm font-bold text-on-surface">Cảnh báo / Cao điểm</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Amber Alert Surge</span>
<span class="font-mono font-label-sm text-label-sm text-secondary font-bold">#d97706</span>
</div>
<!-- Danger -->
<div class="p-space-sm rounded-xl bg-surface-container-low flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs">
<span class="w-3 h-3 rounded-full bg-error"></span>
<span class="font-label-sm text-label-sm font-bold text-on-surface">Báo động / Hủy đơn</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Crimson Red Danger</span>
<span class="font-mono font-label-sm text-label-sm text-error font-bold">#dc2626</span>
</div>
<!-- Info -->
<div class="p-space-sm rounded-xl bg-surface-container-low flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs">
<span class="w-3 h-3 rounded-full bg-[#0284c7]"></span>
<span class="font-label-sm text-label-sm font-bold text-on-surface">Thông tin / Định vị</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Ocean Blue Track</span>
<span class="font-mono font-label-sm text-label-sm text-[#0284c7] font-bold">#0284c7</span>
</div>
</div>
</div>
<!-- 4. Surface & Container Hierarchy -->
<div class="flex flex-col gap-space-sm">
<span class="font-label-md text-label-md text-on-surface font-bold">Màu Nền &amp; Bề mặt (Surface &amp; Container Tokens)</span>
<div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm">
<div class="p-space-sm rounded-xl bg-surface flex flex-col gap-0.5 shadow-sm">
<span class="font-label-sm text-label-sm font-bold text-on-surface">Background</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">#fff8f5 Warm Cream</span>
</div>
<div class="p-space-sm rounded-xl bg-surface-container-low flex flex-col gap-0.5 shadow-sm">
<span class="font-label-sm text-label-sm font-bold text-on-surface">Container Low</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">#fcf2eb Shell</span>
</div>
<div class="p-space-sm rounded-xl bg-surface-container-lowest flex flex-col gap-0.5 shadow-sm">
<span class="font-label-sm text-label-sm font-bold text-on-surface">Card Canvas</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">#ffffff Pure White</span>
</div>
<div class="p-space-sm rounded-xl bg-surface-container-highest flex flex-col gap-0.5 shadow-sm">
<span class="font-label-sm text-label-sm font-bold text-on-surface">Outline Variant</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">#fed7aa Soft Border</span>
</div>
</div>
</div>
</div>
