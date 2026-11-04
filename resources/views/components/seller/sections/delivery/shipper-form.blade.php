<div class="bg-surface-container-lowest rounded-2xl p-space-lg shadow-sm border border-primary/20 flex flex-col gap-space-md relative overflow-hidden" id="shipper-inline-card">
<div class="absolute -top-12 -right-12 w-48 h-48 rounded-full bg-primary/5 pointer-events-none"></div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-9 h-9 rounded-xl bg-primary text-on-primary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[20px]">assignment_ind</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Biểu mẫu: Thêm shipper mới vào quán</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Nhập thông tin xác thực để kích hoạt tài khoản giao hàng thuộc cơ sở Hai Bà Trưng</p>
</div>
</div>
<span class="px-2.5 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">
              Quy trình KYC 2 lớp
            </span>
</div>
<!-- Form Fields Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mt-2">
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface font-semibold">Họ và tên tài xế <span class="text-error">*</span></label>
<input class="w-full px-space-md py-2.5 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-on-surface-variant focus:outline-none focus:ring-2 focus:ring-primary/40" placeholder="Nhập đầy đủ họ tên như CCCD..." type="text"/>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface font-semibold">Số điện thoại liên hệ <span class="text-error">*</span></label>
<input class="w-full px-space-md py-2.5 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-on-surface-variant focus:outline-none focus:ring-2 focus:ring-primary/40" placeholder="09xx xxx xxx (Số nhận OTP)" type="tel"/>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface font-semibold">Loại phương tiện</label>
<select class="w-full px-space-md py-2.5 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary/40">
<option value="petrol">Xe máy xăng (Wave, Sirius, Vision, Lead...)</option>
<option value="electric">Xe máy điện (VinFast Feliz, Klara, Dat Bike...)</option>
</select>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface font-semibold">Biển số xe đăng ký <span class="text-error">*</span></label>
<input class="w-full px-space-md py-2.5 rounded-xl bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-on-surface-variant focus:outline-none focus:ring-2 focus:ring-primary/40 uppercase" placeholder="Ví dụ: 29-A1 123.45" type="text"/>
</div>
</div>
<!-- Document Upload Zones -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
<!-- CCCD Upload -->
<div class="flex flex-col gap-1">
<span class="font-label-md text-label-md text-on-surface font-semibold">Căn cước công dân (Mặt trước &amp; sau)</span>
<div class="border-2 border-dashed border-outline-variant/60 rounded-xl p-space-md bg-surface-container-low/50 hover:bg-surface-container-low transition-colors flex flex-col items-center justify-center text-center cursor-pointer min-h-[110px]">
<span class="material-symbols-outlined text-primary text-[28px] mb-1">add_a_photo</span>
<p class="font-label-md text-label-md text-on-surface font-medium">Tải ảnh chụp CCCD 2 mặt</p>
<p class="font-body-sm text-body-sm text-on-surface-variant text-[11px]">Định dạng JPG, PNG rõ nét không lóa</p>
</div>
</div>
<!-- GPLX Upload -->
<div class="flex flex-col gap-1">
<span class="font-label-md text-label-md text-on-surface font-semibold">Giấy phép lái xe (GPLX A1 / A2)</span>
<div class="border-2 border-dashed border-outline-variant/60 rounded-xl p-space-md bg-surface-container-low/50 hover:bg-surface-container-low transition-colors flex flex-col items-center justify-center text-center cursor-pointer min-h-[110px]">
<span class="material-symbols-outlined text-primary text-[28px] mb-1">badge</span>
<p class="font-label-md text-label-md text-on-surface font-medium">Tải ảnh chụp GPLX hợp lệ</p>
<p class="font-body-sm text-body-sm text-on-surface-variant text-[11px]">Bản gốc còn thời hạn sử dụng</p>
</div>
</div>
</div>
<!-- SLA Callout Info Box -->
<div class="p-space-md rounded-xl bg-surface-container-high/60 flex items-start gap-space-sm text-body-sm">
<span class="material-symbols-outlined text-primary text-[22px] shrink-0 mt-0.5">verified_user</span>
<div>
<p class="font-label-md text-label-md text-on-surface font-bold">Lưu ý bảo mật &amp; an toàn giao vận FoodHub:</p>
<p class="text-on-surface-variant mt-0.5 leading-relaxed">
                Hồ sơ shipper nội bộ sẽ được ban điều phối FoodHub kiểm duyệt &amp; xác minh danh tính trước khi được phân công nhận đơn thực tế. 
                Thời gian xử lý phê duyệt (SLA) dao động từ <strong>15 - 30 phút</strong> trong giờ hoạt động của chi nhánh.
              </p>
</div>
</div>
<!-- Actions -->
<div class="flex items-center justify-end gap-space-sm pt-space-xs">
<button class="px-space-lg py-2.5 rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md transition-colors" type="button">
              Hủy bỏ
            </button>
<button class="px-space-xl py-2.5 rounded-xl bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md flex items-center gap-space-xs transition-all shadow-md shadow-primary/20" type="button">
<span class="material-symbols-outlined text-[19px]">send</span>
<span>Gửi hồ sơ thẩm định</span>
</button>
</div>
</div>
