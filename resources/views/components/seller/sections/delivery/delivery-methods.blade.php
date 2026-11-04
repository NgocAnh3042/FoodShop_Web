@php
    // Sau này thay mảng này bằng dữ liệu từ Controller (cài đặt giao hàng của quán)
    $methods = [
        ['icon' => 'moped', 'title' => 'Chủ quán tự giao', 'desc' => 'Chủ quán hoặc nhân viên trực tiếp giao đơn gần trong bán kính ngắn. Miễn trung gian.', 'status' => 'Đang bật', 'note' => 'Bán kính ≤ 1.5 km'],
        ['icon' => 'local_shipping', 'title' => 'Đội giao hàng của quán', 'desc' => 'Quán tự chủ động đội ngũ tài xế riêng, tối ưu chi phí vận hành & chăm sóc khách quen.', 'status' => '4 tài xế liên kết', 'note' => 'Ưu tiên số 1'],
        ['icon' => 'shopping_bag', 'title' => 'Khách tự đến lấy', 'desc' => 'Khách đặt trước trên FoodHub và ghé quán nhận món, đóng gói sẵn tiết kiệm thời gian chờ.', 'status' => 'Sẵn sàng nhận', 'note' => 'Phí giao: 0đ'],
    ];
@endphp

<div class="bg-surface-container-lowest rounded-2xl p-space-lg shadow-sm flex flex-col gap-space-lg">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm pb-space-sm border-b border-surface-container-low">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">tune</span>
</div>
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Đăng ký phương thức giao</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Kích hoạt các kênh giao đơn linh hoạt theo nhân sự hiện có tại cơ sở Hai Bà Trưng</p>
</div>
</div>
<span class="text-label-sm font-label-sm px-3 py-1 rounded-full bg-surface-container text-on-surface-variant self-start sm:self-auto">
          3/4 phương thức kích hoạt
        </span>
</div>
<!-- 4 Option Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">
@foreach ($methods as $m)
                <x-seller.cards.delivery-option
                    :icon="$m['icon']"
                    :title="$m['title']"
                    :desc="$m['desc']"
                    :status="$m['status']"
                    :note="$m['note']" />
            @endforeach
<!-- Option 4: Shipper FoodHub (Disabled / Coming Soon) -->
<div class="relative flex flex-col justify-between p-space-md rounded-2xl bg-surface-container-high/60 opacity-70 cursor-not-allowed">
<div class="absolute top-3 right-3 px-2 py-0.5 rounded-full bg-secondary text-on-secondary font-label-sm text-label-sm tracking-tight shadow-sm">
            Sắp ra mắt
          </div>
<div>
<div class="w-11 h-11 rounded-xl bg-surface-container-highest text-on-surface-variant flex items-center justify-center mb-space-sm">
<span class="material-symbols-outlined text-[24px]">electric_moped</span>
</div>
<h3 class="font-label-lg text-label-lg text-on-surface-variant font-bold">Shipper FoodHub</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant/80 mt-1 leading-snug">
              Hệ thống tự động điều phối tài xế công nghệ FoodHub đến quán lấy món giao hỏa tốc.
            </p>
</div>
<div class="mt-space-md pt-space-xs flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant/70">
<span>Tự động gán tài xế</span>
<span class="font-medium">Đang thử nghiệm</span>
</div>
</div>
</div>
<!-- Below Options Configuration Controls Bar -->
<div class="pt-space-md border-t border-surface-container-low grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-space-md items-end">
<!-- Config 1: Bán kính giao tối đa -->
<div class="flex flex-col gap-1.5 p-space-sm rounded-xl bg-surface-container-low">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-[18px] text-primary">radar</span>
              Bán kính giao tối đa
            </span>
<span class="px-2 py-0.5 rounded-md bg-primary-fixed text-on-primary-fixed font-headline-sm text-headline-sm font-bold">3 km</span>
</div>
<div class="px-1 py-2">
<input class="w-full h-2 bg-surface-container-highest rounded-lg appearance-none cursor-pointer accent-primary" max="10" min="1" step="1" type="range" value="3"/>
<div class="flex justify-between text-[11px] font-label-sm text-on-surface-variant mt-1">
<span>1km</span>
<span class="text-primary font-bold">3km (Khuyên dùng)</span>
<span>5km</span>
<span>10km</span>
</div>
</div>
</div>
<!-- Config 2: Biểu phí giao hàng -->
<div class="flex flex-col gap-1.5 p-space-sm rounded-xl bg-surface-container-low">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-[18px] text-primary">payments</span>
              Phí giao cho khách
            </span>
<span class="font-label-sm text-label-sm text-tertiary font-bold bg-tertiary/10 px-2 py-0.5 rounded">Tự tính</span>
</div>
<div class="flex items-center gap-2 mt-1">
<div class="flex-1 bg-surface-container-lowest px-3 py-1.5 rounded-lg shadow-inner">
<p class="text-[10px] text-on-surface-variant font-label-sm uppercase">2km đầu tiên</p>
<p class="font-label-lg text-label-lg font-bold text-on-surface">15.000đ</p>
</div>
<span class="text-on-surface-variant font-bold">+</span>
<div class="flex-1 bg-surface-container-lowest px-3 py-1.5 rounded-lg shadow-inner">
<p class="text-[10px] text-on-surface-variant font-label-sm uppercase">Mỗi km sau</p>
<p class="font-label-lg text-label-lg font-bold text-on-surface">5.000đ/km</p>
</div>
</div>
</div>
<!-- Config 3: Thời gian chuẩn bị TB -->
<div class="flex flex-col gap-1.5 p-space-sm rounded-xl bg-surface-container-low">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-[18px] text-primary">timer</span>
              Thời gian ra món TB
            </span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Bếp nấu</span>
</div>
<div class="flex items-center justify-between bg-surface-container-lowest p-1.5 rounded-lg shadow-inner mt-1">
<button class="w-8 h-8 rounded-md bg-surface-container hover:bg-surface-container-high flex items-center justify-center font-bold text-on-surface transition-colors" type="button">−</button>
<div class="text-center">
<span class="font-headline-sm text-headline-sm font-extrabold text-primary">15</span>
<span class="font-label-sm text-label-sm text-on-surface-variant ml-1">phút</span>
</div>
<button class="w-8 h-8 rounded-md bg-surface-container hover:bg-surface-container-high flex items-center justify-center font-bold text-on-surface transition-colors" type="button">+</button>
</div>
</div>
<!-- Config 4: Buttons Lưu & Khôi phục -->
<div class="flex items-center gap-2">
<button class="flex-1 py-3 px-space-md rounded-xl bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md flex items-center justify-center gap-space-xs transition-all shadow-md shadow-primary/25 active:scale-[0.98]" type="button">
<span class="material-symbols-outlined text-[20px]">check_circle</span>
<span>Lưu cài đặt</span>
</button>
<button class="p-3 rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="Khôi phục mặc định" type="button">
<span class="material-symbols-outlined text-[22px]">restart_alt</span>
</button>
</div>
</div>
</div>
