<div class="bg-surface-container-lowest rounded-xl shadow-[0_4px_20px_-2px_rgba(234,88,12,0.05)] overflow-hidden flex flex-col">
<!-- Table Controls & Filters -->
<div class="p-space-lg flex flex-col gap-space-md">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md">
<div>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold">
              Bảng Kê Đối Soát Đối Tác &amp; Chi Trả (Settlement Ledger)
            </h2>
<p class="font-body-md text-on-surface-variant">
              Duyệt lệnh chi tự động qua hệ thống cổng kết nối Vietcombank Corporate Host-to-Host.
            </p>
</div>
<div class="flex items-center gap-space-sm flex-wrap">
<!-- Filter Partner Type -->
<div class="flex p-0.5 bg-surface-container rounded-lg">
<button class="px-space-md py-1 rounded-md bg-surface-container-lowest text-primary font-label-sm shadow-sm">Tất cả (14.550)</button>
<button class="px-space-md py-1 rounded-md text-on-surface-variant hover:text-on-surface font-label-sm">Quán ăn (6.120)</button>
<button class="px-space-md py-1 rounded-md text-on-surface-variant hover:text-on-surface font-label-sm">Đội xế Hub (8.430)</button>
</div>
<!-- Status Pill Select -->
<div class="relative">
<select class="appearance-none bg-surface-container pl-space-md pr-8 py-1.5 rounded-lg font-label-sm text-on-surface outline-none cursor-pointer">
<option>Trạng thái: Tất cả</option>
<option>Đã thanh toán thành công</option>
<option>Chờ Super Admin ký duyệt</option>
<option>Có chênh lệch đối soát</option>
<option>Tạm giữ do khiếu nại</option>
</select>
<span class="material-symbols-outlined text-[18px] text-on-surface-variant absolute right-2 top-2 pointer-events-none">expand_more</span>
</div>
</div>
</div>
<!-- Quick filter / Search sub-bar -->
<div class="flex items-center gap-space-md flex-wrap pt-space-xs">
<div class="flex items-center gap-space-xs bg-surface-container-low px-space-md py-1.5 rounded-full flex-1 min-w-[260px]">
<span class="material-symbols-outlined text-[18px] text-on-surface-variant">search</span>
<input class="bg-transparent font-body-sm text-on-surface outline-none w-full placeholder:text-on-surface-variant" placeholder="Tìm kiếm theo Mã đối tác (FHB-xxxx), tên quán ăn, tên đội xế..." type="text"/>
</div>
<div class="flex items-center gap-space-xs text-body-sm text-on-surface-variant">
<span>Hiển thị: <strong>4</strong> / 14.550 bản ghi cần xử lý tức thì</span>
</div>
</div>
</div>
<!-- Master Table Grid -->
<div class="overflow-x-auto w-full">
<table class="w-full text-left font-body-md text-on-surface">
<thead class="bg-surface-container-low text-on-surface-variant font-label-sm uppercase tracking-wider">
<tr>
<th class="py-space-sm px-space-lg">Đối Tác &amp; Mã Hub</th>
<th class="py-space-sm px-space-md text-right">Tổng GMV / Cước</th>
<th class="py-space-sm px-space-md text-right">Chiết Khấu Sàn</th>
<th class="py-space-sm px-space-md text-right">Trợ Giá / Thưởng</th>
<th class="py-space-sm px-space-md text-right font-bold text-on-surface">Thực Nhận (Payout)</th>
<th class="py-space-sm px-space-md">Kênh &amp; Trạng Thái</th>
<th class="py-space-sm px-space-lg text-right">Thao Tác Ký Duyệt</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-low">
<!-- Row 1: Bếp Huế Cố Đô -->
<tr class="hover:bg-surface-container-low/60 transition-colors">
<td class="py-space-md px-space-lg">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-bold">
<span class="material-symbols-outlined text-[20px]">restaurant</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-on-surface font-bold">Bếp Huế Cố Đô (CN Hai Bà Trưng)</span>
<span class="font-body-sm text-on-surface-variant flex items-center gap-1">
<span class="font-mono text-[11px] text-primary bg-primary/5 px-1.5 py-0.5 rounded font-semibold">FHB-88421</span>
<span>• Quán đối tác Premium</span>
</span>
</div>
</div>
</td>
<td class="py-space-md px-space-md text-right font-semibold text-on-surface">
                128.450.000đ
              </td>
<td class="py-space-md px-space-md text-right text-error font-medium">
                -25.690.000đ
                <div class="text-[11px] text-on-surface-variant">(20% tiêu chuẩn)</div>
</td>
<td class="py-space-md px-space-md text-right text-tertiary font-medium">
                +4.850.000đ
                <div class="text-[11px] text-on-surface-variant">(Voucher Brand + Freeship)</div>
</td>
<td class="py-space-md px-space-md text-right">
<span class="font-headline-sm text-headline-sm text-primary font-bold">107.610.000<span class="text-label-sm font-normal">đ</span></span>
</td>
<td class="py-space-md px-space-md">
<div class="flex flex-col gap-1 items-start">
<span class="inline-flex items-center gap-1 px-space-sm py-0.5 rounded-full text-tertiary bg-tertiary-container/15 font-label-sm font-semibold">
<span class="material-symbols-outlined text-[14px]">check_circle</span> Đã chi trả thành công
                  </span>
<span class="font-body-sm text-on-surface-variant text-[12px] flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">account_balance</span> VCB •••• 9281
                  </span>
</div>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="inline-flex items-center gap-space-xs">
<button class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" title="Xuất hóa đơn VAT điện tử" type="button">
<span class="material-symbols-outlined text-[18px]">receipt_long</span>
</button>
<button class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" title="Xem lệnh chi H2H" type="button">
<span class="material-symbols-outlined text-[18px]">open_in_new</span>
</button>
</div>
</td>
</tr>
<!-- Row 2: Phở Thìn Lò Đúc -->
<tr class="hover:bg-surface-container-low/60 transition-colors">
<td class="py-space-md px-space-lg">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-secondary-container/20 flex items-center justify-center text-secondary font-bold">
<span class="material-symbols-outlined text-[20px]">ramen_dining</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-on-surface font-bold">Phở Thìn Lò Đúc</span>
<span class="font-body-sm text-on-surface-variant flex items-center gap-1">
<span class="font-mono text-[11px] text-primary bg-primary/5 px-1.5 py-0.5 rounded font-semibold">FHB-77209</span>
<span>• Quán Di Sản Cố Định</span>
</span>
</div>
</div>
</td>
<td class="py-space-md px-space-md text-right font-semibold text-on-surface">
                88.200.000đ
              </td>
<td class="py-space-md px-space-md text-right text-error font-medium">
                -13.230.000đ
                <div class="text-[11px] text-on-surface-variant">(15% đối tác chiến lược)</div>
</td>
<td class="py-space-md px-space-md text-right text-tertiary font-medium">
                +2.100.000đ
                <div class="text-[11px] text-on-surface-variant">(Trợ giá Flash Sale)</div>
</td>
<td class="py-space-md px-space-md text-right">
<span class="font-headline-sm text-headline-sm text-primary font-bold">77.070.000<span class="text-label-sm font-normal">đ</span></span>
</td>
<td class="py-space-md px-space-md">
<div class="flex flex-col gap-1 items-start">
<span class="inline-flex items-center gap-1 px-space-sm py-0.5 rounded-full text-tertiary bg-tertiary-container/15 font-label-sm font-semibold">
<span class="material-symbols-outlined text-[14px]">check_circle</span> Đã chi trả
                  </span>
<span class="font-body-sm text-on-surface-variant text-[12px] flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">account_balance</span> BIDV •••• 4410
                  </span>
</div>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="inline-flex items-center gap-space-xs">
<button class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" title="Xuất hóa đơn VAT điện tử" type="button">
<span class="material-symbols-outlined text-[18px]">receipt_long</span>
</button>
<button class="p-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" title="Xem lệnh chi H2H" type="button">
<span class="material-symbols-outlined text-[18px]">open_in_new</span>
</button>
</div>
</td>
</tr>
<!-- Row 3: Đội xe Hub Quận 1 (52 tài xế Pro) -->
<tr class="bg-secondary-fixed/10 hover:bg-secondary-fixed/20 transition-colors">
<td class="py-space-md px-space-lg">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-secondary-container flex items-center justify-center text-on-secondary-container font-bold">
<span class="material-symbols-outlined text-[20px]">two_wheeler</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-on-surface font-bold">Đội xe Hub Quận 1 (52 Tài xế Pro)</span>
<span class="font-body-sm text-on-surface-variant flex items-center gap-1">
<span class="font-mono text-[11px] text-secondary bg-secondary-fixed/60 px-1.5 py-0.5 rounded font-semibold">FLEET-Q1-PRO</span>
<span>• Đội trưởng: Nguyễn Văn Hưng</span>
</span>
</div>
</div>
</td>
<td class="py-space-md px-space-md text-right font-semibold text-on-surface">
                185.400.000đ
              </td>
<td class="py-space-md px-space-md text-right text-error font-medium">
                -37.080.000đ
                <div class="text-[11px] text-on-surface-variant">(20% cước phí sàn)</div>
</td>
<td class="py-space-md px-space-md text-right text-tertiary font-medium">
                +24.500.000đ
                <div class="text-[11px] text-on-surface-variant">(Thưởng nóng Heatmap &amp; Mưa)</div>
</td>
<td class="py-space-md px-space-md text-right">
<span class="font-headline-sm text-headline-sm text-secondary font-bold">172.820.000<span class="text-label-sm font-normal">đ</span></span>
</td>
<td class="py-space-md px-space-md">
<div class="flex flex-col gap-1 items-start">
<span class="inline-flex items-center gap-1 px-space-sm py-0.5 rounded-full text-secondary bg-secondary-container/30 font-label-sm font-bold">
<span class="material-symbols-outlined text-[14px]">history_edu</span> Chờ Super Admin ký duyệt
                  </span>
<span class="font-body-sm text-on-surface-variant text-[12px]">Chi trả tài khoản ví tài xế tức thì</span>
</div>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="inline-flex items-center gap-space-xs">
<button class="px-space-md py-1 rounded-full bg-primary hover:bg-primary-container text-on-primary font-label-sm font-bold shadow-sm transition-all flex items-center gap-1" type="button">
<span class="material-symbols-outlined text-[16px]">draw</span> Ký Duyệt Ngay
                  </button>
</div>
</td>
</tr>
<!-- Row 4: Cơm Tấm Ba Ghiền (Khiếu nại) -->
<tr class="bg-error-container/20 hover:bg-error-container/30 transition-colors">
<td class="py-space-md px-space-lg">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-error/15 flex items-center justify-center text-error font-bold">
<span class="material-symbols-outlined text-[20px]">warning</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-on-surface font-bold">Cơm Tấm Ba Ghiền (Chi nhánh Đặng Văn Ngữ)</span>
<span class="font-body-sm text-on-surface-variant flex items-center gap-1">
<span class="font-mono text-[11px] text-error bg-error/10 px-1.5 py-0.5 rounded font-semibold">FHB-51902</span>
<span>• Đang tranh chấp đơn khiếu nại #DH-8812</span>
</span>
</div>
</div>
</td>
<td class="py-space-md px-space-md text-right font-semibold text-on-surface">
                54.800.000đ
              </td>
<td class="py-space-md px-space-md text-right text-error font-medium">
                -10.960.000đ
                <div class="text-[11px] text-on-surface-variant">(20% phí sàn)</div>
</td>
<td class="py-space-md px-space-md text-right text-on-surface-variant font-medium">
                +0đ
                <div class="text-[11px] text-on-surface-variant">Không áp dụng thưởng</div>
</td>
<td class="py-space-md px-space-md text-right">
<div class="font-headline-sm text-headline-sm text-error font-bold">35.640.000<span class="text-label-sm font-normal">đ</span></div>
<div class="text-[12px] text-error font-semibold">Đã đóng băng -8.200.000đ</div>
</td>
<td class="py-space-md px-space-md">
<div class="flex flex-col gap-1 items-start">
<span class="inline-flex items-center gap-1 px-space-sm py-0.5 rounded-full text-error bg-surface-container-lowest font-label-sm font-bold shadow-sm">
<span class="material-symbols-outlined text-[14px]">lock</span> Tạm giữ bảo đảm bồi hoàn
                  </span>
<span class="font-body-sm text-on-surface-variant text-[12px]">Hạn xử lý điều tra: 24h</span>
</div>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="inline-flex items-center gap-space-xs">
<button class="px-space-md py-1 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm font-semibold transition-colors flex items-center gap-1" type="button">
<span class="material-symbols-outlined text-[16px] text-primary">gavel</span> Xử Lý Case
                  </button>
<button class="px-space-sm py-1 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface font-label-sm" type="button">
                    Mở Khóa
                  </button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination Footer -->
<div class="p-space-md bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-space-sm">
<div class="font-body-sm text-on-surface-variant">
          Hiển thị trang 1 / 364 • Tổng giá trị payout cần duyệt: <strong class="text-on-surface">9.680.500.000đ</strong>
</div>
<div class="flex items-center gap-1">
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-container-high flex items-center justify-center text-on-surface-variant disabled:opacity-40" disabled="">
<span class="material-symbols-outlined text-[16px]">chevron_left</span>
</button>
<button class="w-8 h-8 rounded-lg bg-primary text-on-primary font-label-sm font-bold flex items-center justify-center">1</button>
<button class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface font-label-sm flex items-center justify-center">2</button>
<button class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface font-label-sm flex items-center justify-center">3</button>
<span class="px-1 text-on-surface-variant">...</span>
<button class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface font-label-sm flex items-center justify-center">364</button>
<button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-surface-container-high flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</button>
</div>
</div>
</div>
