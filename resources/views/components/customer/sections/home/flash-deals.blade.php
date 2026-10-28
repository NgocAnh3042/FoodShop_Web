<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div
        class="bg-gradient-to-r from-amber-700 via-orange-600 to-amber-500 rounded-3xl p-6 md:p-10 text-white relative overflow-hidden shadow-xl">

        <!-- Họa tiết nền trang trí -->
        <svg class="absolute -right-16 -top-16 w-80 h-80 text-white/10 pointer-events-none" fill="currentColor"
            viewBox="0 0 200 200">
            <path
                d="M45.7,-64.8C58.9,-54.6,69.1,-41.2,74.5,-26.1C79.8,-11,80.4,5.9,74.8,20.4C69.3,34.9,57.7,47.1,44.2,56.7C30.7,66.4,15.3,73.5,-1.2,75.1C-17.7,76.8,-35.4,72.9,-49.2,63.1C-63,53.4,-72.9,37.8,-77.4,20.7C-81.9,3.6,-81,-15.1,-73.4,-30.3C-65.7,-45.5,-51.4,-57.2,-36.4,-66.6C-21.4,-76,-5.7,-83.1,4.9,-89.9C15.6,-96.7,32.5,-75,45.7,-64.8Z"
                transform="translate(100 100)"></path>
        </svg>

        <!-- Tiêu đề & Bộ đếm thời gian -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 relative z-10 pb-8">
            <div class="flex flex-col gap-1">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/20 backdrop-blur-md w-fit">
                    <span class="text-amber-300 text-lg animate-pulse">⚡</span>
                    <span class="text-xs uppercase font-extrabold tracking-wider text-amber-200">Chớp Nhoáng Giờ
                        Vàng</span>
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Combo Siêu Giảm Đến 50%</h2>
                <p class="text-sm text-white/90">Số lượng có hạn, làm mới thực đơn ưu đãi mỗi ngày vào lúc 11:30 &amp;
                    18:00</p>
            </div>

            <!-- Bộ đếm ngược thời gian -->
            <div
                class="flex items-center gap-2 bg-black/20 backdrop-blur-md px-4 py-2.5 rounded-2xl self-start md:self-auto">
                <span class="text-sm text-white/90 font-medium">Kết thúc sau:</span>
                <div class="flex items-center gap-1 text-base font-black text-amber-300">
                    <span class="bg-black/40 px-2 py-1 rounded-md" id="cd-hours">02</span>
                    <span>:</span>
                    <span class="bg-black/40 px-2 py-1 rounded-md" id="cd-mins">47</span>
                    <span>:</span>
                    <span class="bg-black/40 px-2 py-1 rounded-md" id="cd-secs">39</span>
                </div>
            </div>
        </div>

        <!-- Danh sách các Thẻ Deal (Sử dụng component con hoặc viết trực tiếp) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative z-10">

            <x-customer.cards.flash-deal-card
                image="https://images.unsplash.com/photo-1562967914-608f82629710?auto=format&fit=crop&q=80&w=600"
                discount="-45%" remaining="Còn 8 suất" title="Combo Gà Cay Giòn Rụm + Khoai Tây Lắc"
                desc="Gà Rán Chivago • 4 miếng gà sốt cay ngọt & khoai tây" price="89.000đ" oldPrice="165.000đ"
                percent="78%" />

            <x-customer.cards.flash-deal-card
                image="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&q=80&w=600"
                discount="-35%" remaining="Còn 12 suất" title="Bún Bò Huế Đặc Biệt + Trà Tắc Khổng Lồ"
                desc="Bún Bò O Phượng • Nạm bò, giò gân, chả cua Huế" price="65.000đ" oldPrice="99.000đ"
                percent="60%" />

            <x-customer.cards.flash-deal-card
                image="https://images.unsplash.com/photo-1541658016709-82535e94bc69?auto=format&fit=crop&q=80&w=600"
                discount="Mua 1 Tặng 1" remaining="Còn 25 suất" title="Trà Sữa Trân Châu Hoàng Kim (Size L)"
                desc="KOI Thé Signature • Tặng kèm 01 Lục Trà Macchiato" price="68.000đ" oldPrice="136.000đ"
                percent="89%" />

        </div>
    </div>
</section>

<!-- Script đếm ngược thời gian -->
<script>
    (function initFlashCountdown() {
        var hElem = document.getElementById('cd-hours');
        var mElem = document.getElementById('cd-mins');
        var sElem = document.getElementById('cd-secs');
        if (!hElem || !mElem || !sElem) return;

        var totalSecs = 2 * 3600 + 47 * 60 + 39;

        setInterval(function() {
            if (totalSecs <= 0) {
                totalSecs = 3 * 3600;
            }
            totalSecs--;

            var hrs = Math.floor(totalSecs / 3600);
            var mins = Math.floor((totalSecs % 3600) / 60);
            var secs = totalSecs % 60;

            hElem.textContent = hrs < 10 ? '0' + hrs : hrs;
            mElem.textContent = mins < 10 ? '0' + mins : mins;
            sElem.textContent = secs < 10 ? '0' + secs : secs;
        }, 1000);
    })();
</script>
