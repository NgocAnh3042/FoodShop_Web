@php
    // Sau này thay mảng này bằng dữ liệu từ Controller (bảng giới thiệu khách)
    // status: done = đã hoàn tất | waiting = chờ đơn đầu | invalid = không hợp lệ
    $referrals = [
        ['initials' => 'NT', 'name' => 'Nguyễn T. •••• 482', 'note' => 'Khách mới FoodHub', 'date' => '24/10/2023', 'time' => '11:20', 'status' => 'done', 'order' => '145.000đ', 'reward' => '+30.000đ', 'reward_note' => 'Đã cộng ví'],
        ['initials' => 'TV', 'name' => 'Trần V. •••• 195', 'note' => 'Quét tại quầy CN Hai Bà Trưng', 'date' => '24/10/2023', 'time' => '09:45', 'status' => 'waiting', 'order' => 'Đang duyệt món...', 'reward' => 'Chờ nhận 30k', 'reward_note' => 'Hạn 30 ngày'],
        ['initials' => 'LM', 'name' => 'Lê M. •••• 831', 'note' => 'Từ link chia sẻ Zalo', 'date' => '23/10/2023', 'time' => '18:30', 'status' => 'done', 'order' => '210.000đ', 'reward' => '+30.000đ', 'reward_note' => 'Đã cộng ví'],
        ['initials' => 'PH', 'name' => 'Phạm H. •••• 604', 'note' => 'Khách mới FoodHub', 'date' => '23/10/2023', 'time' => '14:15', 'status' => 'done', 'order' => '98.000đ', 'reward' => '+30.000đ', 'reward_note' => 'Đã cộng ví'],
        ['initials' => 'HD', 'name' => 'Hoàng D. •••• 329', 'note' => 'SĐT đã có tài khoản trước đây', 'date' => '22/10/2023', 'time' => '12:05', 'status' => 'invalid', 'order' => '--', 'reward' => '0đ', 'reward_note' => 'Trùng lặp'],
        ['initials' => 'ĐQ', 'name' => 'Đỗ Q. •••• 711', 'note' => 'Quét mã QR bàn 04', 'date' => '22/10/2023', 'time' => '10:10', 'status' => 'waiting', 'order' => 'Chưa đặt đơn', 'reward' => 'Chờ nhận 30k', 'reward_note' => 'Còn 28 ngày'],
    ];
@endphp

<div class="rounded-2xl bg-surface-container-lowest shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05),0_2px_6px_-1px_rgba(28,25,23,0.03)] overflow-hidden flex flex-col">
<div class="p-space-lg flex flex-wrap items-center justify-between gap-space-md">
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Khách bạn đã giới thiệu</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Dữ liệu được cập nhật tự động ngay khi khách quét mã hoặc hoàn tất đơn</p>
</div>
<!-- Bộ lọc trạng thái đơn -->
<div class="flex items-center gap-space-xs p-1 rounded-xl bg-surface-container-low">
<button class="px-space-sm py-1 rounded-lg bg-surface-container-lowest font-label-sm text-label-sm text-on-surface shadow-xs">Tất cả (61)</button>
<button class="px-space-sm py-1 rounded-lg text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm">Đã hoàn tất (46)</button>
<button class="px-space-sm py-1 rounded-lg text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm">Chờ đơn (13)</button>
</div>
</div>
<!-- Bảng Responsive -->
<div class="w-full overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
<th class="py-space-sm px-space-md">Khách hàng</th>
<th class="py-space-sm px-space-md">Ngày quét / ĐK</th>
<th class="py-space-sm px-space-md">Trạng thái</th>
<th class="py-space-sm px-space-md text-right">Đơn đầu tiên</th>
<th class="py-space-sm px-space-md text-right">Thưởng cho quán</th>
</tr>
</thead>
<tbody class="divide-y divide-transparent font-body-md text-body-md text-on-surface">
                        @foreach ($referrals as $r)
                            <x-seller.cards.referral-row
                                :initials="$r['initials']"
                                :name="$r['name']"
                                :note="$r['note']"
                                :date="$r['date']"
                                :time="$r['time']"
                                :status="$r['status']"
                                :order="$r['order']"
                                :reward="$r['reward']"
                                :reward-note="$r['reward_note']" />
                        @endforeach
                    </tbody>
</table>
</div>
<!-- Phân trang bảng -->
<div class="p-space-md bg-surface-container-low flex flex-wrap items-center justify-between gap-space-sm">
<span class="font-body-sm text-body-sm text-on-surface-variant">
              Hiển thị <strong class="text-on-surface">6</strong> trên tổng số <strong class="text-on-surface">61</strong> khách giới thiệu
            </span>
<div class="flex items-center gap-1">
<button class="p-1 rounded-lg hover:bg-surface-container-high text-on-surface-variant disabled:opacity-40" disabled="">
<span class="material-symbols-outlined text-[18px]">chevron_left</span>
</button>
<button class="w-8 h-8 rounded-lg bg-primary text-on-primary font-label-sm text-label-sm font-bold shadow-xs">1</button>
<button class="w-8 h-8 rounded-lg text-on-surface hover:bg-surface-container-high font-label-sm text-label-sm">2</button>
<button class="w-8 h-8 rounded-lg text-on-surface hover:bg-surface-container-high font-label-sm text-label-sm">3</button>
<span class="px-1 text-outline font-label-sm text-label-sm">...</span>
<button class="w-8 h-8 rounded-lg text-on-surface hover:bg-surface-container-high font-label-sm text-label-sm">11</button>
<button class="p-1 rounded-lg hover:bg-surface-container-high text-on-surface">
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
</div>
</div>
