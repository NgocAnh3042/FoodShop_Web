<div class="lg:col-span-4 bg-surface-container-lowest rounded-2xl p-space-md shadow-sm flex flex-col justify-between">
    <div>
        <div class="flex items-center justify-between pb-space-sm">
            <div class="flex items-center gap-space-xs">
                <span class="material-symbols-outlined text-secondary text-[20px]">hub</span>
                <span class="font-headline-sm text-headline-sm text-on-surface font-bold">Mật Độ Tài Xế Theo Trạm</span>
            </div>
            <span class="font-label-sm text-label-sm text-on-surface-variant font-bold">LIVE UPDATE</span>
        </div>
        <span class="font-body-sm text-body-sm text-on-surface-variant">Điều hướng tài xế chuyển vùng để cân đối nhu cầu
            đơn đặt.</span>
        <!-- Cluster List -->
        @php
            // Sau này thay mảng này bằng dữ liệu từ Controller (bảng trạm điều phối)
            $hubs = [
                [
                    'name' => 'Hub Quận 1 & Quận 3',
                    'label' => 'Báo Động Thiếu Xe',
                    'style' => 'danger',
                    'active' => '620 xế',
                    'demand' => '1.150 đơn/h',
                    'load' => 94,
                ],
                [
                    'name' => 'Hub Bình Thạnh & Phú Nhuận',
                    'label' => 'Cân Bằng Tốt',
                    'style' => 'good',
                    'active' => '890 xế',
                    'demand' => '810 đơn/h',
                    'load' => 60,
                ],
                [
                    'name' => 'Hub Cầu Giấy (Hà Nội)',
                    'label' => 'Tăng Trưởng Nóng',
                    'style' => 'warm',
                    'active' => '940 xế',
                    'demand' => '1.020 đơn/h',
                    'load' => 82,
                ],
                [
                    'name' => 'Hub Quận 7 & Nhà Bè',
                    'label' => 'Cân Bằng Tốt',
                    'style' => 'good',
                    'active' => '510 xế',
                    'demand' => '460 đơn/h',
                    'load' => 52,
                ],
            ];
        @endphp

        <div class="mt-space-md flex flex-col gap-space-sm">
            @foreach ($hubs as $hub)
                <x-admin.cards.hub-card :name="$hub['name']" :label="$hub['label']" :style="$hub['style']" :active="$hub['active']"
                    :demand="$hub['demand']" :load="$hub['load']" />
            @endforeach
        </div>
    </div>
    <!-- Action Button for Rebalancing -->
    <button
        class="w-full mt-space-md py-space-sm px-space-md bg-surface-container-high hover:bg-surface-variant text-on-surface rounded-xl font-label-md text-label-md flex items-center justify-center gap-space-xs transition-colors"
        type="button">
        <span class="material-symbols-outlined text-[18px]">near_me</span>
        <span>Phát thông báo điều hướng +15.000đ/đơn</span>
    </button>
</div>
