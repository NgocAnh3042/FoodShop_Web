<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col gap-space-md">
    <div class="flex items-center gap-space-xs">
        <span class="material-symbols-outlined text-primary text-[22px]">volume_up</span>
        <h2 class="font-headline-sm text-headline-sm text-on-surface">5. Chuông báo đơn hàng mới</h2>
    </div>
    <div class="flex flex-col gap-space-md">
        <div class="flex flex-col gap-space-xs">
            <label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Kiểu âm thanh thông báo</label>
            <div class="grid grid-cols-2 gap-space-sm">
                <label
                    class="flex items-center justify-between p-space-md rounded-xl bg-primary/10 text-primary cursor-pointer shadow-xs">
                    <span class="font-label-md text-label-md">Ting Ting FoodHub</span>
                    <input checked="" class="accent-primary" name="soundType" type="radio" />
                </label>
                <label
                    class="flex items-center justify-between p-space-md rounded-xl bg-surface-container-low text-on-surface cursor-pointer hover:bg-surface-container-high transition-colors">
                    <span class="font-label-md text-label-md">Còi lớn khẩn cấp</span>
                    <input class="accent-primary" name="soundType" type="radio" />
                </label>
            </div>
        </div>
        <!-- Volume slider -->
        <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
                <span class="font-label-md text-label-md text-on-surface">Âm lượng chuông máy POS</span>
                <span class="font-headline-sm text-headline-sm text-primary font-bold" id="volumeVal">100%</span>
            </div>
            <input class="accent-primary cursor-pointer w-full mt-space-xs" max="100" min="20"
                oninput="document.getElementById('volumeVal').innerText = this.value + '%'" type="range"
                value="100" />
        </div>
        <!-- Ringing policy toggle -->
        <div class="flex items-center justify-between p-space-md rounded-xl bg-surface-container-low">
            <div>
                <p class="font-label-md text-label-md text-on-surface">Lặp lại liên tục</p>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Đổ chuông không ngừng tới khi nhân viên bấm
                    "Nhận đơn"</p>
            </div>
            <input checked="" class="accent-primary w-5 h-5 rounded cursor-pointer" type="checkbox" />
        </div>
    </div>
</div>
