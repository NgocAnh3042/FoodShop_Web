@php
    // Ảnh bên dưới là link tạm. Sau này thay hai mảng này bằng dữ liệu từ Controller
    $ranking = [
        [
            'rank' => 1,
            'gold' => true,
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuDkxhhos1PE6zrqSK6x81Ik9_zN5gle2HU9X9PARQT_KB9fQX5ZrzTlvkJfWUNVBoNOYWlRmz2WiDxS4Fky57FTvpJH7iClBHTsPZJFp83034FD3V-95smJVmfFzjL_pXGhfORWL6z6A0YHzwPDbtbv_2KY5ijyEg5SvwC9XxGYDdWC2KNpYymcpttKDZpOr0Z4qY4wJjXEqrxhiU5MrWfxPi4BFRXvkizmQHXjaKWi',
            'name' => 'Cơm Tấm Phúc Lộc Thọ',
            'branch' => 'Chuỗi 18 chi nhánh',
            'region' => 'Toàn TP.HCM',
            'orders' => '1.420 đơn',
            'gmv' => '114.850.000đ',
            'prep' => '8.4 phút',
            'slow' => false,
        ],
        [
            'rank' => 2,
            'gold' => false,
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuCKGG0HEaYjUgv_OrgMBd_glHr1ywAz3Uo1nB1kotTC2wEqhIPP2QdRWEwuIBg2-CwnqJiaINM7s2QeJ6A0uW6ZdWjcoiZro94kexX6KipB2KR1-hfk6Jow_mSxfFGoyi96arpr3wCyu6WFLx7drGBUdmcXXrN7nOSk1Bq3ebPe_2RPBe3QpKcKfGHZuak2XTobs61lQGksadwRmbqqemdooQMIP6oHrMjsYUfRwS0r',
            'name' => 'Phở Thìn Lò Đúc',
            'branch' => 'Hai Bà Trưng, HN',
            'region' => 'Hà Nội',
            'orders' => '890 đơn',
            'gmv' => '88.200.000đ',
            'prep' => '10.1 phút',
            'slow' => false,
        ],
        [
            'rank' => 3,
            'gold' => false,
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuAb1PVUyVVxHFbaDyvaii4xzjvnrP-_Mv02X_QkFQoZn3TQAv5NNTMgNuDQm9CVLgeUGMRnkQaLnOmisbt6chJyTAmQfqlzN2IKjK-Vg3KZZ_9ozVcryTIOj0V1q5RknE3_RiEAlPSDNXqIej3IIvC3Qx0C4BVzaJNX18codbD8O8GhtZqBPQag1QsxgY2QYysqZDS8OfUDSCH_PJNS_ZXyTLJED4MkZkmYp6UZ3Iin',
            'name' => 'Phúc Long Coffee & Tea',
            'branch' => 'Quận 1 & Quận 3',
            'region' => 'TP.HCM',
            'orders' => '1.250 đơn',
            'gmv' => '82.400.000đ',
            'prep' => '12.5 phút',
            'slow' => true,
        ],
        [
            'rank' => 4,
            'gold' => false,
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuDmjGvOpAjEjo1pVnnea3Ds1ojjbG2gw3tA8H8al6YSjtWAvEK6OhJUI2j4L63pSt6HRa9VyidLSUKmOlo4fL3bH0Zjbwbrl-TrBrRblWvsbwcxD4V1ZWgPhkzlgU-D4Pa6SNSEKNokcvoes7gx30U7O_t3LRvi1s6fvWeE5xZzCYrL_wGdtie_UbjyMMz0UozDBCuhKRP9dRZkqBfOuIgSWXZjX5EuL_JZrN-V28Cl',
            'name' => 'Bánh Mì Huỳnh Hoa',
            'branch' => 'Lê Thị Riêng, Q.1',
            'region' => 'TP.HCM',
            'orders' => '960 đơn',
            'gmv' => '76.800.000đ',
            'prep' => '7.2 phút',
            'slow' => false,
        ],
        [
            'rank' => 5,
            'gold' => false,
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuCFUfpDCSuLOZ26EavDEgkco_uQ3JSBk1jZE82AwfS-BeDKx-xe0QGywENzVmKiZU_pY8hhslamFIMWgzXjhHlm8IYV6AtGY3PoeGOfohKIyVYCHhIyOvH9cLeMEFvrr80H2zEi-bjCu3_uJpQ-2uBW8B26Bb32A1dUlDia_dnbwM0si_w1ALGw6-3zYQv35Um14Kegp09dNQeSkqMFS6KIxjOieBLXCLowp3nTP9Vw',
            'name' => 'Sushi Tei Vietnam',
            'branch' => 'Hoàn Kiếm & Ba Đình',
            'region' => 'Hà Nội',
            'orders' => '285 đơn',
            'gmv' => '69.500.000đ',
            'prep' => '14.0 phút',
            'slow' => false,
        ],
    ];

    $trends = [
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuA92YiCa6HQKqtmDatyQcW6kxy0oHat9loLo4wvL39KDapI3-GOPw-6UpZ7qbZH8NiL51wtIM-g_xf8R1LXVvEVU9XnQS2THY9njyFMFm61H5O8fFb2v6mBivtMS-_o_OHiJSFzjQrO7J-dJ6tNWbFLJDrnr3N4ZoKi0Pf15Bt0q3j1IvE2lF3sKew2miSPo40GmXosyAz-AzCZW0eLtBOX4Gvzh-l3E2CrpECLpdnI',
            'rank' => 1,
            'name' => 'Cơm Tấm Sườn Bì Chả Đặc Biệt',
            'stats' => '4.180 phần đã đặt • 32 cửa hàng',
            'growth' => '+28%',
            'note' => 'Đỉnh lúc 12:15',
        ],
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuCNW5rHN0PrAx4P5DZ8XDrdGLE6v2e8GfL60lyv36e52iUy78QPRi7kNZU8ZpJVIsjOG_NaLb_4WFDrlU0qVaQo99-4vF5XP8yIwxyrDDNArDEEWnE_l48AAz9354YBXFub_LG0oWcAobX6A8iEErOallFcC59xqUxCbjyWW1TcsZUwnA9EYqrA4jFsIci8J9BOFm3j7GTuY4cNu3w7KoYYw3FT6gJ4S1ynuyUxzGmU',
            'rank' => 2,
            'name' => 'Cà Phê Muối / Cà Phê Sữa Đá',
            'stats' => '3.890 ly đã đặt • 78 cửa hàng',
            'growth' => '+42%',
            'note' => 'Tăng mạnh khối VP',
        ],
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuAb8UCj47iiljpqBFFOHPzitcfp4qgLxVl6iH-9fKKbTpK92nXvOCo3k6RYkHKcS4h9Fe_i3aMJLAtG-r4ykQBtOiGpXLbD4Fzoh__14gxYDla0PuEdlEISANXsPUhcN8V7R3yDlVKF2iZkunxPvg6FlyaQTCM6Nmmx1538a0RGEpkYJOWRiz3wU6EdBW4_v_NL2tZtFbnivv7S1UD9c7OHKl1E4EpvHEOLDIUTMUrK',
            'rank' => 3,
            'name' => 'Bún Bò Huế Chả Cua',
            'stats' => '2.410 tô đã đặt • 45 cửa hàng',
            'growth' => '+18%',
            'note' => 'Khu vực Cầu Giấy & Q.1',
        ],
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuApyf_IrKpEYlttTovi5k4GJzlsXg3SdXFL9z3nE4Y1Tt1vewYQHi-wuOoc0YrAKLfePyoNL8TIVB4_WpwMfe9dfwQR8OP9oQS3-rUuqJHOpkxmuxmuGsAiVcGnWRZ15Me1uqWmEeV3gQsus_pVxgi1vt0d89k7JqBC8wNIedh4n0NWfrquCc0cQdiK_tnTjDpD4DJEH2qHV3yiHfRoCdSmS6mLUY9aPNZWIztnOCRL',
            'rank' => 4,
            'name' => 'Healthy Poke Salad Bowl',
            'stats' => '1.940 phần • Đơn giá TB cao',
            'growth' => '+15%',
            'note' => 'Tập trung Quận 2 & 7',
        ],
    ];
@endphp

<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter mb-gutter">
    <!-- Top 5 Merchants by GMV (7 Columns) -->
    <div class="lg:col-span-7 bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between">
        <div class="flex items-center justify-between mb-space-md">
            <div class="flex items-center gap-space-xs">
                <span class="material-symbols-outlined text-primary text-[22px]">workspace_premium</span>
                <div class="flex flex-col">
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Top 5 Quán Doanh Số Khủng
                        Nhất Hôm Nay</h3>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Thống kê theo giá trị giao dịch GMV
                        lũy kế đến hiện tại</span>
                </div>
            </div>
            <span
                class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-surface-container font-semibold text-on-surface-variant">Cập
                nhật: 2 phút trước</span>
        </div>
        <!-- Merchants Table / List -->
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr
                        class="text-on-surface-variant font-label-sm text-label-sm uppercase bg-surface-container-low rounded-lg">
                        <th class="py-2.5 px-3 rounded-l-lg">Hạng / Quán ăn</th>
                        <th class="py-2.5 px-3">Khu vực</th>
                        <th class="py-2.5 px-3">Tổng Đơn</th>
                        <th class="py-2.5 px-3">Doanh Số (GMV)</th>
                        <th class="py-2.5 px-3 rounded-r-lg text-right">Tốc độ chuẩn bị</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container">
                    @foreach ($ranking as $row)
                        <x-admin.cards.rank-row :rank="$row['rank']" :gold="$row['gold']" :image="$row['image']" :name="$row['name']"
                            :branch="$row['branch']" :region="$row['region']" :orders="$row['orders']" :gmv="$row['gmv']" :prep="$row['prep']"
                            :slow="$row['slow']" />
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Real-Time Hot Food Trends & Velocity (5 Columns) -->
    <div
        class="lg:col-span-5 bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between">
        <div class="flex items-center justify-between mb-space-md">
            <div class="flex items-center gap-space-xs">
                <span class="material-symbols-outlined text-primary text-[22px]">local_fire_department</span>
                <div class="flex flex-col">
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Hot Trend Toàn Sàn (Live)
                    </h3>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Món ăn có lượng đặt tăng đột biến
                        trong 2 giờ qua</span>
                </div>
            </div>
            <span class="material-symbols-outlined text-primary text-[20px] animate-bounce">whatshot</span>
        </div>
        <!-- Hot Items List -->
        <div class="flex flex-col gap-space-sm">
            @foreach ($trends as $item)
                <x-admin.cards.trend-item :image="$item['image']" :rank="$item['rank']" :name="$item['name']" :stats="$item['stats']"
                    :growth="$item['growth']" :note="$item['note']" />
            @endforeach
        </div>
        <div class="p-space-sm rounded-lg bg-surface-container flex items-center justify-between mt-space-sm">
            <span class="text-on-surface-variant font-body-sm text-body-sm">Thuật toán Feed Đề Xuất tự động đẩy ưu tiên
                món Hot vào trang chủ khách hàng.</span>
            <span class="font-label-sm text-label-sm text-primary font-bold cursor-pointer hover:underline">Cấu hình
                Boost</span>
        </div>
    </div>
</div>
