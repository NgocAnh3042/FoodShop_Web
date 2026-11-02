<div class="mx-space-lg mb-space-lg bg-surface-container-low rounded-2xl p-space-md shadow-sm">
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-space-md pb-space-sm">
        <div class="flex items-center gap-space-sm">
            <div class="w-10 h-10 rounded-xl bg-primary text-on-primary flex items-center justify-center shadow-sm">
                <span class="material-symbols-outlined text-[24px]">verified</span>
            </div>
            <div class="flex flex-col">
                <div class="flex items-center gap-space-sm">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-extrabold">Thẩm Định & Duyệt Hồ
                        Sơ Tài Xế Mới (KYC Queue)</span>
                    <span
                        class="px-2 py-0.5 rounded-full bg-primary text-on-primary font-label-sm text-label-sm font-bold">64
                        Hồ Sơ Cần Duyệt</span>
                </div>
                <span class="font-body-sm text-body-sm text-on-surface-variant">Tiêu chuẩn kiểm duyệt: CCCD/GPLX, Cà vẹt
                    xe máy, Lý lịch tư pháp số 2, Bài test An toàn vệ sinh thực phẩm</span>
            </div>
        </div>
        <button
            class="px-space-md py-space-xs rounded-xl bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-label-md text-label-md"
            type="button">
            Xem tất cả hàng chờ
        </button>
    </div>
    @php
        // Ảnh bên dưới là link tạm. Sau này thay mảng này bằng dữ liệu từ Controller (bảng hồ sơ tài xế)
        $applicants = [
            [
                'image' =>
                    'https://lh3.googleusercontent.com/aida-public/AB6AXuCzYyy2YBxG5DO9C6YAmkcox4A2DNNwASTOxRocm5IqEz7Tr9FzPNTeQkxMPzGW513CYCxbYeG7p2_a6E4tJXJUOMl5TA3xIEKLJuhINDN8MjZUXHsbbqqQtSiY88qL8FjmaqBqGbDcuQ7VLIFEB6SKsJk9ZetXlXDt9Sj_dIg5IrQFm3K0EILdb-i5Mt9zdkywUP9wx7QGaxiBTz2VlaYxWMBQ74Xvdt5BiKWK9wJS',
                'name' => 'Võ Minh Trí',
                'submitted' => '25 phút trước',
                'score' => 100,
                'license' => 'Hợp lệ (A1)',
                'plate' => '59-T1 884.22',
                'record' => 'Đã nộp',
                'record_ok' => true,
                'food' => 'Đạt bài test',
                'status' => 'ready',
            ],
            [
                'image' =>
                    'https://lh3.googleusercontent.com/aida-public/AB6AXuCkPWdR0xUhfQ7_i4tpCygYD514rU22Ia9_A4MCRmUAaeyNWwlAWyUJRxBwvoH-MYiURLJPjMLvvzuoi_zTLYd9Eb4v6x0FXqrvQFT4lCd6aktjHHvukEbMcOjfe0JH_XmixC3tGQRmHnP_HzLpPka3M7cHFMRmXrf1sTlCMFu25KP-0oJBz5aRAxdPs5mDOL6vLP5NZzvsVuXIZSLRAQu3Bkbrr0LMsfbFQvkMk-Km',
                'name' => 'Đỗ Quốc Thắng',
                'submitted' => '42 phút trước',
                'score' => 92,
                'license' => 'Hợp lệ (A2)',
                'plate' => '29-B1 791.03',
                'record' => 'Chờ cấp bổ sung',
                'record_ok' => false,
                'food' => 'Đạt bài test',
                'status' => 'pending',
            ],
            [
                'image' =>
                    'https://lh3.googleusercontent.com/aida-public/AB6AXuA0PzojSOyS1ylsoRHkUgPomjqIXPdvgROcCuVqxDkcPttYxSzu2DiMSHdb2oQK9vEsJB79RkA2H-N6jnbiT-zrWu5NQsRN-H_NNbw4jk7pBUH443Q4rVhxdTi0gYvyPK-VUVmnlK_EaKlZ96rBHc7pD0XzAKlg4UGHIiNcA0p6eJ69cCo0mXTfMQXfeTC92vAk-LLFQZS1zuaHI9ohMvMSHLMpDl8V_SpvrY-qI2xU',
                'name' => 'Phạm Thị Mai Trâm',
                'submitted' => '1 giờ trước',
                'score' => 98,
                'license' => 'Hợp lệ (A1)',
                'plate' => '59-H2 314.99',
                'record' => 'Đã nộp',
                'record_ok' => true,
                'food' => 'Đạt bài test',
                'status' => 'ready',
            ],
        ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mt-space-sm">
        @foreach ($applicants as $a)
            <x-admin.cards.kyc-card :image="$a['image']" :name="$a['name']" :submitted="$a['submitted']" :score="$a['score']"
                :license="$a['license']" :plate="$a['plate']" :record="$a['record']" :record-ok="$a['record_ok']" :food="$a['food']"
                :status="$a['status']" />
        @endforeach
    </div>
</div>
