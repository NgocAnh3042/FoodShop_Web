<div
    class="lg:col-span-8 bg-surface-container-lowest p-space-lg rounded-xl shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] flex flex-col">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm pb-space-md">
        <div>
            <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Xu hướng doanh thu &amp; Lượng đơn
                theo ngày</h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Theo dõi biến động dòng tiền ròng và số lượng
                đơn trong tháng</p>
        </div>
        <div class="flex items-center gap-space-md">
            <div class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant">
                <span class="w-3 h-3 rounded-full bg-primary inline-block"></span>
                <span>Doanh thu (triệu đồng)</span>
            </div>
            <div class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant">
                <span class="w-3 h-3 rounded-full bg-secondary-container inline-block"></span>
                <span>Số lượng đơn</span>
            </div>
        </div>
    </div>
    <!-- SVG Composite Trend Chart -->
    <div class="relative w-full h-72 my-space-xs flex items-end">
        <svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 700 240">
            <defs>
                <lineargradient id="barGradient" x1="0" x2="0" y1="0" y2="1">
                    <stop offset="0%" stop-color="#cc4900" stop-opacity="0.9"></stop>
                    <stop offset="100%" stop-color="#cc4900" stop-opacity="0.25"></stop>
                </lineargradient>
                <lineargradient id="lineFill" x1="0" x2="0" y1="0" y2="1">
                    <stop offset="0%" stop-color="#fea619" stop-opacity="0.3"></stop>
                    <stop offset="100%" stop-color="#fea619" stop-opacity="0"></stop>
                </lineargradient>
            </defs>
            <!-- Grid Lines -->
            <line stroke="#eae1da" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="700" y1="30"
                y2="30"></line>
            <line stroke="#eae1da" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="700" y1="80"
                y2="80"></line>
            <line stroke="#eae1da" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="700" y1="130"
                y2="130"></line>
            <line stroke="#eae1da" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="700" y1="180"
                y2="180"></line>
            <!-- Bar Chart (Revenue Per Day Intervals) -->
            <!-- Day 1-4 -->
            <rect fill="url(#barGradient)" height="90" rx="4" width="18" x="25" y="110"></rect>
            <rect fill="url(#barGradient)" height="105" rx="4" width="18" x="75" y="95"></rect>
            <rect fill="url(#barGradient)" height="120" rx="4" width="18" x="125" y="80"></rect>
            <rect fill="url(#barGradient)" height="70" rx="4" width="18" x="175" y="130"></rect>
            <!-- Day 5-8 -->
            <rect fill="url(#barGradient)" height="100" rx="4" width="18" x="225" y="100"></rect>
            <rect fill="url(#barGradient)" height="135" rx="4" width="18" x="275" y="65"></rect>
            <rect fill="url(#barGradient)" height="155" rx="4" width="18" x="325" y="45"></rect>
            <rect fill="url(#barGradient)" height="140" rx="4" width="18" x="375" y="60"></rect>
            <!-- Day 9-14 -->
            <rect fill="url(#barGradient)" height="115" rx="4" width="18" x="425" y="85"></rect>
            <rect fill="url(#barGradient)" height="145" rx="4" width="18" x="475" y="55"></rect>
            <rect fill="url(#barGradient)" height="160" rx="4" width="18" x="525" y="40"></rect>
            <rect fill="url(#barGradient)" height="170" rx="4" width="18" x="575" y="30"></rect>
            <rect fill="url(#barGradient)" height="130" rx="4" width="18" x="625" y="70"></rect>
            <rect fill="url(#barGradient)" height="150" rx="4" width="18" x="665" y="50"></rect>
            <!-- Area under Line (Order Count Trend) -->
            <path
                d="M 34 140 L 84 125 L 134 115 L 184 150 L 234 120 L 284 90 L 334 75 L 384 85 L 434 110 L 484 80 L 534 65 L 584 55 L 634 95 L 674 70 L 674 200 L 34 200 Z"
                fill="url(#lineFill)"></path>
            <!-- Spline Line for Orders -->
            <polyline fill="none"
                points="34,140 84,125 134,115 184,150 234,120 284,90 334,75 384,85 434,110 484,80 534,65 584,55 634,95 674,70"
                stroke="#fea619" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></polyline>
            <!-- Key Metric Anchor Pin -->
            <circle cx="584" cy="55" fill="#a33900" r="5" stroke="#ffffff" stroke-width="2"></circle>
            <text fill="#a33900" font-family="Plus Jakarta Sans" font-size="11" font-weight="700" x="545"
                y="42">Đỉnh: 6.8M / 54 đơn</text>
        </svg>
    </div>
    <div
        class="flex justify-between items-center text-on-surface-variant font-label-sm text-label-sm px-2 pt-space-xs">
        <span>01 Thg 10</span>
        <span>05 Thg 10</span>
        <span>10 Thg 10</span>
        <span>15 Thg 10</span>
        <span>20 Thg 10</span>
        <span>25 Thg 10</span>
        <span>Hôm nay (30)</span>
    </div>
    <!-- Weekly Summary Tiles -->
    <div
        class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm mt-space-md pt-space-md bg-surface-container-low p-space-sm rounded-xl">
        <div class="text-center p-space-xs">
            <span class="font-body-sm text-body-sm text-on-surface-variant block">Tuần 1</span>
            <span class="font-label-lg text-label-lg font-bold text-on-surface block">26.850.000đ</span>
            <span class="font-label-sm text-label-sm text-tertiary">182 đơn</span>
        </div>
        <div class="text-center p-space-xs">
            <span class="font-body-sm text-body-sm text-on-surface-variant block">Tuần 2</span>
            <span class="font-label-lg text-label-lg font-bold text-on-surface block">31.200.000đ</span>
            <span class="font-label-sm text-label-sm text-tertiary">215 đơn</span>
        </div>
        <div class="text-center p-space-xs">
            <span class="font-body-sm text-body-sm text-on-surface-variant block">Tuần 3</span>
            <span class="font-label-lg text-label-lg font-bold text-on-surface block">35.400.000đ</span>
            <span class="font-label-sm text-label-sm text-tertiary">238 đơn</span>
        </div>
        <div class="text-center p-space-xs">
            <span class="font-body-sm text-body-sm text-on-surface-variant block">Tuần 4 (Hiện tại)</span>
            <span class="font-label-lg text-label-lg font-bold text-primary block">35.000.000đ</span>
            <span class="font-label-sm text-label-sm text-primary">230 đơn</span>
        </div>
    </div>
</div>
