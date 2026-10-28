@php
    // Ảnh bên dưới là link tạm. Tải ảnh về public/images/combos/ rồi đổi thành asset('images/combos/ten-anh.jpg')
    // Sau này thay mảng này bằng dữ liệu từ Controller (bảng products hoặc combos)
    $combos = [
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuARgp4_Qf6dS3IWq-dbUcoGLZ1nWdISIXbgfhyoDIEtLwnsrsM935FR6tFZ1_t3TaNSR_wUiGfeLvvI7oRMtsNE-A8bxY5cCM8v8qBgbkhiTgskzvyFLLmwFfTxHW6V0vbj-tDW7uAFBvya1K1tudneC9SDL5JYNOxoCUbEH5b1XnePi_lSJ8sMWBwwaH5Yut39hR-cKxHzkZVAwHq4ybLfjGz4u84r3nqe_BbWE6z62tIJNqWt_v1UnQ',
            'discount' => '-45%',
            'rating' => '4.9 (420+)',
            'type' => 'Combo Gia Đình 3-4 Người',
            'color' => 'primary',
            'title' => 'Mâm Cơm Quê Sum Vầy',
            'desc' => 'Thịt kho hột vịt, canh chua cá lóc miền Tây, rau luộc kho quẹt thơm phức.',
            'old_price' => '345.000đ',
            'price' => '189.000đ',
        ],
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuAYrbfmY1zyp2qLc8K2gLjifGDSXYYvK-3z03w3D7MeuJRT5QC3lBFXVTciAWonkjdISiphS0slXB3htDuDhvxFi42LAvcATtHyd5TA1fKXgb-wLgm6cdS-KqQV9fc_5y_3Sly_SAYPqlFdEazE4Q4UA3wtmD2a2idDFiQS0ON18ChYuNh6Pp6n25JF9uJEedyU_CVv6A-q0HHZZPaUhlrvCSRYaWhcRZTF-o8LWytRyEyTcrKDZRM7kA',
            'discount' => '-40%',
            'rating' => '4.8 (890+)',
            'type' => 'Bữa Trưa Văn Phòng',
            'color' => 'secondary',
            'title' => 'Cơm Tấm Sườn Chả + Trà Tắc',
            'desc' => 'Sườn nướng mật ong mềm mọng, chả trứng thịt, canh rong biển thanh ngọt & 1 nước.',
            'old_price' => '115.000đ',
            'price' => '69.000đ',
        ],
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuDug4C_Nw9J6c1GpbEbUNY2D6ywYNSBYYEHSlA3Ltohorzl4kOXWDHvd6atWGgGkZysBR8QAk4Wbr0eIDEffRLqF3w3hIPS4EEvf1Vqhn3hIbDWYBNTTDszWXd-_nULjHkrd62PikodQBjBC-lKZcYY-xApfxOzVOsT_mZ7tlebFRQ5vf9tN48DOgK_DFWEK4CYTfgNqbr8MEHvKtzZHPXRbnRGFRlWgLgN0gQPf6q3nnwom5O3O8D8ZQ',
            'discount' => '-50%',
            'rating' => '5.0 (650+)',
            'type' => 'Tụ Tập Bạn Bè',
            'color' => 'tertiary',
            'title' => 'Set Lẩu Thái Hải Sản Bò Mỹ',
            'desc' => 'Đủ vị mực ống, tôm càng, bắp bò Úc, nước lẩu cốt dừa lá chanh kèm rau nấm thả ga.',
            'old_price' => '499.000đ',
            'price' => '249.000đ',
        ],
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuAx6cVxAc9l3k5fdbirzvqUQL01mzXRGiPG4WiP5NEHWWwKLhW7x2XHmsZYZxemnisv20dQ5BndIL5nfKgm9C8oJ2fPqkdpMbKzHR0TXcCmLhg_4UIT1vNp2GBoTchbtI66s45sadRnlzfr_e6nK4PgWFZb8AwTwglTvqjmkAhFEnvIsM2ewvgJUo12pEo-vZfidDxvQRJF280x6pbnCAF19tJXSpm8rxf0WxgKJ1qcBsi0oCnuRPmVwQ',
            'discount' => '-35%',
            'rating' => '4.9 (1.2k+)',
            'type' => 'Ăn Vặt & Party Chill',
            'color' => 'orange',
            'title' => 'Tiệc Gà Rán Sốt Cay Seoul',
            'desc' => '6 miếng gà giòn sốt mật cay cay ngọt ngọt, khoai lắc lắc, tặng kèm 2 ly trà sữa nướng.',
            'old_price' => '260.000đ',
            'price' => '169.000đ',
        ],
    ];
@endphp

<section class="flex flex-col gap-6 pt-4">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
        <div>
            <div class="flex items-center gap-2 text-primary font-label-sm uppercase tracking-wider font-bold">
                <span class="material-symbols-outlined text-lg">local_fire_department</span>
                <span>Ưu đãi ẩm thực số 1</span>
            </div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface mt-1">Combo giảm sốc cuối tuần (-30% đến -50%)
            </h2>
        </div>
        <a class="self-start md:self-auto flex items-center gap-1 text-primary hover:text-primary-container font-label-lg text-label-lg transition-colors"
            data-path="menu" href="#">
            <span>Xem tất cả combo</span>
            <span class="material-symbols-outlined text-lg">arrow_forward</span>
        </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($combos as $combo)
            <x-customer.cards.combo-card :image="$combo['image']" :discount="$combo['discount']" :rating="$combo['rating']" :type="$combo['type']"
                :color="$combo['color']" :title="$combo['title']" :desc="$combo['desc']" :old-price="$combo['old_price']" :price="$combo['price']" />
        @endforeach
    </div>
</section>
