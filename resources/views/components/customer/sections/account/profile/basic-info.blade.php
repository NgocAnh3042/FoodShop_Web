@php
    $input =
        'w-full bg-surface-container-low text-on-surface font-body-md text-body-md pl-11 pr-4 py-3 rounded-xl focus:outline-none focus:bg-surface-container-lowest focus:ring-2 focus:ring-primary/40 transition-all';
@endphp

<section class="bg-surface-container-lowest rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col gap-6">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-primary-fixed flex items-center justify-center text-on-primary-fixed">
            <span class="material-symbols-outlined text-[22px]">badge</span>
        </div>
        <div>
            <h3 class="font-headline-sm text-headline-sm font-bold text-on-surface">Hồ sơ cơ bản</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Thông tin hiển thị khi đặt món và giao thức uống
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
        {{-- Họ và tên --}}
        <div class="flex flex-col gap-2 md:col-span-2">
            <label class="font-label-md text-label-md text-on-surface font-bold" for="fullName">Họ và tên</label>
            <div class="relative flex items-center">
                <span
                    class="material-symbols-outlined absolute left-3.5 text-on-surface-variant text-[20px]">person_outline</span>
                <input id="fullName" type="text" class="{{ $input }}" value="Nguyễn Hoàng Nam">
            </div>
        </div>

        {{-- Ngày sinh --}}
        <div class="flex flex-col gap-2 md:col-span-2">
            <label class="font-label-md text-label-md text-on-surface font-bold" for="dob">Ngày sinh</label>
            <div class="relative flex items-center">
                <span
                    class="material-symbols-outlined absolute left-3.5 text-on-surface-variant text-[20px]">calendar_today</span>
                <input id="dob" type="text" placeholder="DD/MM/YYYY" class="{{ $input }}"
                    value="15/08/1995">
            </div>
            <span class="font-body-sm text-body-sm text-on-surface-variant">Nhận voucher quà tặng đặc biệt vào ngày sinh
                nhật!</span>
        </div>

        {{-- Email --}}
        <div class="flex flex-col gap-2">
            <div class="flex items-center justify-between">
                <label class="font-label-md text-label-md text-on-surface font-bold" for="email">Địa chỉ
                    Email</label>
                <span
                    class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-bold">
                    <span class="material-symbols-outlined text-[14px]">verified</span>
                    Đã xác thực
                </span>
            </div>
            <div class="relative flex items-center">
                <span
                    class="material-symbols-outlined absolute left-3.5 text-on-surface-variant text-[20px]">mail</span>
                <input id="email" type="email" class="{{ $input }}" value="hoangnam.nguyen@email.com">
            </div>
        </div>

        {{-- Số điện thoại --}}
        <div class="flex flex-col gap-2">
            <div class="flex items-center justify-between">
                <label class="font-label-md text-label-md text-on-surface font-bold" for="phone">Số điện
                    thoại</label>
                <div class="flex items-center gap-2">
                    <span
                        class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-bold">
                        <span class="material-symbols-outlined text-[14px]">link</span>
                        Đã liên kết
                    </span>
                    <button type="button"
                        class="text-primary hover:text-primary-container font-label-sm text-label-sm font-bold underline">Đổi
                        số</button>
                </div>
            </div>
            <div class="relative flex items-center">
                <span
                    class="material-symbols-outlined absolute left-3.5 text-on-surface-variant text-[20px]">call</span>
                <input id="phone" type="tel" class="{{ $input }}" value="0912 345 678">
            </div>
        </div>
    </div>
</section>
