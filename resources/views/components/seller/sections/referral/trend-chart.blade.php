<div class="p-space-lg rounded-2xl bg-surface-container-lowest shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.03)] flex flex-col gap-space-md">
<div class="flex flex-wrap items-center justify-between gap-space-sm">
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Khách mới theo tuần</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Lượng khách đăng ký qua mã giới thiệu BEPHUE trong 4 tuần gần nhất</p>
</div>
<div class="flex items-center gap-space-sm">
<span class="px-space-sm py-1 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-[15px]">trending_up</span>
                +73% Tăng trưởng tháng
              </span>
<span class="font-label-md text-label-md text-on-surface font-bold">Tổng 61 khách</span>
</div>
</div>
<!-- SVG Chart Data Visualization -->
<div class="w-full pt-space-xs">
<div class="relative h-44 w-full">
<svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 500 120">
<defs>
<lineargradient id="chartGradient" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#cc4900" stop-opacity="0.35"></stop>
<stop offset="100%" stop-color="#cc4900" stop-opacity="0.0"></stop>
</lineargradient>
</defs>
<!-- Horizontal Grid Lines -->
<line stroke="#f0e6e0" stroke-dasharray="4" stroke-width="1" x1="0" x2="500" y1="20" y2="20"></line>
<line stroke="#f0e6e0" stroke-dasharray="4" stroke-width="1" x1="0" x2="500" y1="60" y2="60"></line>
<line stroke="#f0e6e0" stroke-width="1" x1="0" x2="500" y1="100" y2="100"></line>
<!-- Area Fill Under Path -->
<path d="M 30,95 Q 160,80 180,75 T 320,60 T 470,18 L 470,100 L 30,100 Z" fill="url(#chartGradient)"></path>
<!-- Trend Line -->
<path d="M 30,95 Q 160,80 180,75 T 320,60 T 470,18" fill="none" stroke="#a33900" stroke-linecap="round" stroke-width="3"></path>
<!-- Data Points & Tooltips -->
<!-- Week 1: 8 -->
<circle cx="30" cy="95" fill="#ffffff" r="4.5" stroke="#a33900" stroke-width="2.5"></circle>
<!-- Week 2: 12 -->
<circle cx="180" cy="75" fill="#ffffff" r="4.5" stroke="#a33900" stroke-width="2.5"></circle>
<!-- Week 3: 15 -->
<circle cx="320" cy="60" fill="#ffffff" r="4.5" stroke="#a33900" stroke-width="2.5"></circle>
<!-- Week 4: 26 -->
<circle cx="470" cy="18" fill="#a33900" r="5.5" stroke="#ffffff" stroke-width="2.5"></circle>
</svg>
<!-- HTML Overlay Labels for precise typography token usage -->
<div class="absolute inset-0 flex justify-between items-end pointer-events-none px-2 pb-0">
<div class="flex flex-col items-center">
<span class="font-label-sm text-label-sm text-on-surface font-bold">8 khách</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Tuần 1</span>
</div>
<div class="flex flex-col items-center -ml-6">
<span class="font-label-sm text-label-sm text-on-surface font-bold">12 khách</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Tuần 2</span>
</div>
<div class="flex flex-col items-center">
<span class="font-label-sm text-label-sm text-on-surface font-bold">15 khách</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Tuần 3</span>
</div>
<div class="flex flex-col items-center">
<span class="font-label-sm text-label-sm text-primary font-bold bg-primary-fixed px-1.5 py-0.5 rounded">26 khách</span>
<span class="font-body-sm text-body-sm text-primary font-bold">Tuần 4 (Hiện tại)</span>
</div>
</div>
</div>
</div>
</div>
