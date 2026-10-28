@php
    // Ảnh bên dưới là link tạm. Tải ảnh về public/images/foods/ rồi đổi thành asset('images/foods/ten-anh.jpg')
    // Sau này thay mảng này bằng dữ liệu từ Controller (bảng products)
    $foods = [
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuCTUe_Pg8Nqkf-sjeLO0DiZa6xJ6ZEABQT8xX_9j-JUpA2GYXYvGysepWAoCmFxfgM0e5RVfyzZQ9ZoFrOMS7nBhQHqesIbGk0fyBn6eI0EiKZgm00_ldOGkGjLVxEe7ofKSE4bIUJZYlLawRRcebpR4J_fbnHEOpqKJHHeoiizOIXIRtOW_EPfWJT4TixQP-441-my0pEMDKSXTycDIMdWVsPixBsCMr38ZR35P-geXZ6_I8Chgc8TmA',
            'badge' => 'Bán chạy',
            'badge_style' => 'fire',
            'badge_icon' => 'local_fire_department',
            'rating' => '4.9',
            'reviews' => '(320+)',
            'time' => '15-20 phút',
            'kcal' => '520 kcal',
            'title' => 'Phở Bò Tái Lăn Hà Nội',
            'desc' =>
                'Bò thăn tái lăn thơm lừng tỏi phi giòn rụm, bánh phở mềm mượt cùng nước dùng hầm xương ống 12 tiếng thơm ngọt thanh khiết.',
            'old_price' => '75.000đ',
            'price' => '65.000đ',
        ],
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuC7jFwGmxZz0QHmEiT35P4Mhw5qx5uKS-zPXYDZqy1T7cRzm1XvAD3Skg9JO76jT5HZ85kFVCnk-GmE-lSgeYhENdlJcljz0lvuue9M68tEEo79IkVgNoskXizGSVo6V9NYNkfKc2RhcdQoBB8wUb5TEMG47pvYoszd6Lsu3fQ3QF6mdszu55AZbg09tBdYR774WVGxVqEEN0HyZ-2q8Nt6mbRQhDZaNrgrHw6jaAQwz1-wXlDZUnm6UQ',
            'badge' => 'Giảm 15%',
            'badge_style' => 'gold',
            'badge_icon' => null,
            'rating' => '4.8',
            'reviews' => '(510+)',
            'time' => '15-25 phút',
            'kcal' => '680 kcal',
            'title' => 'Cơm Tấm Sườn Cốt Lết Đặc Biệt',
            'desc' =>
                'Sườn cốt lết dày thịt ướp mật ong nướng than hoa, kèm chả trứng hấp béo ngậy, bì thăn giòn rụm và nước mắm kẹo pha độc quyền.',
            'old_price' => '80.000đ',
            'price' => '68.000đ',
        ],
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuDng8cf1EKcWGUVFqfWiLTr3EQFTnjOMh6Cmnm8M936VwUBNoa-J3yG_agPjQuHG_Nn4Uyb5mb9Me-bS6bSh4GnqzvZOD00zZtbk0bk7ms1fRfxhpfAQRI0EN6-3sWZlFPBiOI1ouF2hJQKavJhM61kMJXUQ8zp7GFsueLeXEaOc7R060HREhz0rgT7-5ysDouuIXFDrOaM8krbUuYrlEiDz3-vt_sYw12afD5b_Pr0v1ERZvp3xXh3Zw',
            'badge' => 'Eat Clean',
            'badge_style' => 'green',
            'badge_icon' => 'eco',
            'rating' => '4.9',
            'reviews' => '(184)',
            'time' => '10-15 phút',
            'kcal' => '380 kcal',
            'title' => 'Salad Ức Gà Bơ & Hạt Quinoa',
            'desc' =>
                'Ức gà áp chảo hương thảo mọng nước, bơ sáp Đắk Lắk béo bùi, rau rocket tươi giòn và sốt mè rang nguyên chất nhập khẩu.',
            'old_price' => null,
            'price' => '75.000đ',
        ],
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuAtb6kFVtfdiaznqkYx7Hn-NcMlwcik_u9rt4CT7m17O11g_aZLsRdWWycDbJ6rd9JV4WhKbADp4sXYoSKUWfc9PiZRu9oMBqi4HA-lek1QGimKP7BZt25rPcP5JykomoLvi-CwzYJTy7Sf5f8hq84OvmF1mZZofy9PLMoG73zsFM_4v1pEQVkTdDhj188cFuv4sMiQJZQJvJIj1Y1XLDRLDyc2hXWupHuYDBoA_WcI0u9vSz2rFy1B5A',
            'badge' => null,
            'badge_style' => 'gold',
            'badge_icon' => null,
            'rating' => '4.7',
            'reviews' => '(290)',
            'time' => '15-20 phút',
            'kcal' => '590 kcal',
            'title' => 'Bún Chả Nem Cua Bể',
            'desc' =>
                'Chả nướng than hoa thơm nức mũi ăn kèm nem cua bể Hải Phòng giòn rụm, đu đủ muối chua ngọt và ớt tươi chuẩn vị phố cổ.',
            'old_price' => null,
            'price' => '62.000đ',
        ],
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuCvsbGzWg4KAZoul0PiS5gTVm2vmQA7_oXez-UbylG2HHMPEJY93QV86p4r3KtHil1jViQWqeo8xatX8kNj8NbQ6K-RAlzry6dHIZyYwU1Z54LlA392L_YSTzDqBd_M68Ik9T47WwQbLHrRhnlZzieCakpW-eUVTYmk9XeRTfO0EOZ8oAQ0jDy80VNA_HEHerBbXc8IPN5ELCMFgu-E-uOiDBG6ayNF9CMPKuba6magvKeAnbKrIYxtAw',
            'badge' => 'Gợi ý Trưa',
            'badge_style' => 'orange',
            'badge_icon' => null,
            'rating' => '4.8',
            'reviews' => '(410)',
            'time' => '15-20 phút',
            'kcal' => '650 kcal',
            'title' => 'Cơm Gà Xối Mỡ Đùi Góc Tư',
            'desc' =>
                'Đùi gà chiên xối mỡ nóng hổi giòn rụm từng thớ thịt, cơm chiên hạt vàng dẻo xốp, kèm canh rong biển thanh vị giải ngấy.',
            'old_price' => '65.000đ',
            'price' => '55.000đ',
        ],
        [
            'image' =>
                'https://lh3.googleusercontent.com/aida-public/AB6AXuCZh47m2wr0LXjkM71Us_Il5Oz_sUIDZiPW0Rv-FbD8PGJ60KsvJdaa2X5IO3nmfxaCzOuhNIE30yI19vi53_S33uVGDanzqdUvBpcXnGslBfwLYB1ZjtIgiXL6wNuFzy5eloCCBvtOa28_mKJUiioBb6Ez0dCD3bVZde6qba3chr7MHhntBhyjTIFi2oF_MOQRGFUpKPEAa2s1FdLgMeyIGPgXClw1qQIJVb3F4NxI8n2OegAXMzSOdA',
            'badge' => 'Mua 2 Tặng 1',
            'badge_style' => 'gold',
            'badge_icon' => null,
            'rating' => '4.9',
            'reviews' => '(650+)',
            'time' => '10-15 phút',
            'kcal' => '310 kcal',
            'title' => 'Trà Ô Long Sữa Kem Phô Mai Nướng',
            'desc' =>
                'Trà Ô Long cao nguyên ủ lạnh thơm đậm mùi thảo mộc quyện cùng sữa tươi thanh trùng và lớp kem phô mai New Zealand sánh mịn.',
            'old_price' => null,
            'price' => '42.000đ',
        ],
    ];
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-space-lg">
    @foreach ($foods as $food)
        <x-customer.cards.food-card :image="$food['image']" :badge="$food['badge']" :badge-style="$food['badge_style']" :badge-icon="$food['badge_icon']"
            :rating="$food['rating']" :reviews="$food['reviews']" :time="$food['time']" :kcal="$food['kcal']" :title="$food['title']" :desc="$food['desc']"
            :old-price="$food['old_price']" :price="$food['price']" />
    @endforeach
</div>
