<div
    class="bg-surface-container-lowest p-space-lg rounded-xl shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.04)] flex flex-col">
    <div class="flex items-center justify-between">
        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Cơ cấu danh mục</h3>
        <span class="font-label-sm text-label-sm text-on-surface-variant">Doanh số %</span>
    </div>
    <div class="flex items-center justify-center my-space-md">
        <!-- Donut Chart Inline SVG -->
        <div class="relative w-40 h-40 flex items-center justify-center">
            <svg class="w-full h-full transform -rotate-90" viewbox="0 0 100 100">
                <circle cx="50" cy="50" fill="transparent" r="38" stroke="#eae1da" stroke-width="14">
                </circle>
                <!-- Bún bò Huế 52% (circumference ~ 238.76 => 124.15) -->
                <circle cx="50" cy="50" fill="transparent" r="38" stroke="#cc4900"
                    stroke-dasharray="124.15 238.76" stroke-dashoffset="0" stroke-width="14"></circle>
                <!-- Bánh truyền thống 26% => 62.07 -->
                <circle cx="50" cy="50" fill="transparent" r="38" stroke="#fea619"
                    stroke-dasharray="62.07 238.76" stroke-dashoffset="-124.15" stroke-width="14"></circle>
                <!-- Nước uống 22% => 52.52 -->
                <circle cx="50" cy="50" fill="transparent" r="38" stroke="#00855b"
                    stroke-dasharray="52.52 238.76" stroke-dashoffset="-186.22" stroke-width="14"></circle>
            </svg>
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                <span class="font-headline-sm text-headline-sm font-extrabold text-on-surface">3 Nhóm</span>
                <span class="font-label-sm text-label-sm text-on-surface-variant">Chính</span>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-space-xs mt-space-xs">
        <div class="flex items-center justify-between p-space-xs bg-surface-container-low rounded-lg">
            <div class="flex items-center gap-space-xs">
                <span class="w-3 h-3 rounded-full bg-primary-container"></span>
                <span class="font-label-md text-label-md text-on-surface">Bún bò Huế các loại</span>
            </div>
            <div class="text-right">
                <span class="font-label-md text-label-md text-on-surface font-bold">52%</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant block">66.79M</span>
            </div>
        </div>
        <div class="flex items-center justify-between p-space-xs bg-surface-container-low rounded-lg">
            <div class="flex items-center gap-space-xs">
                <span class="w-3 h-3 rounded-full bg-secondary-container"></span>
                <span class="font-label-md text-label-md text-on-surface">Bánh Huế (Nậm, Lọc, Bèo)</span>
            </div>
            <div class="text-right">
                <span class="font-label-md text-label-md text-on-surface font-bold">26%</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant block">33.39M</span>
            </div>
        </div>
        <div class="flex items-center justify-between p-space-xs bg-surface-container-low rounded-lg">
            <div class="flex items-center gap-space-xs">
                <span class="w-3 h-3 rounded-full bg-tertiary-container"></span>
                <span class="font-label-md text-label-md text-on-surface">Trà cung đình &amp; Thức uống</span>
            </div>
            <div class="text-right">
                <span class="font-label-md text-label-md text-on-surface font-bold">22%</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant block">28.25M</span>
            </div>
        </div>
    </div>
</div>
