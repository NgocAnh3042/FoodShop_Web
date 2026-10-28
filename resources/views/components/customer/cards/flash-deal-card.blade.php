@props([
    'image' => '',
    'discount' => '-45%',
    'remaining' => 'Còn 8 suất',
    'title' => 'Tên combo',
    'desc' => 'Mô tả ngắn',
    'price' => '89.000đ',
    'oldPrice' => '165.000đ',
    'percent' => '78%',
])

<div
    class="bg-white text-gray-900 rounded-2xl p-4 shadow-lg flex flex-col justify-between group hover:-translate-y-1 transition-all">
    <div>
        <div class="relative rounded-xl overflow-hidden aspect-[16/10] bg-gray-100 mb-4">
            <img src="{{ $image }}" alt="{{ $title }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <span
                class="absolute top-2 left-2 bg-red-600 text-white text-xs px-2.5 py-0.5 rounded-full font-bold">{{ $discount }}</span>
            <span
                class="absolute bottom-2 right-2 bg-black/70 backdrop-blur-sm text-white text-xs px-2 py-0.5 rounded">{{ $remaining }}</span>
        </div>
        <h3 class="text-base font-bold text-gray-900 group-hover:text-orange-600 transition-colors">{{ $title }}
        </h3>
        <p class="text-xs text-gray-500 mt-1">{{ $desc }}</p>
        <div class="flex items-baseline gap-2 pt-2">
            <span class="text-xl font-black text-orange-600">{{ $price }}</span>
            <span class="text-xs text-gray-400 line-through">{{ $oldPrice }}</span>
        </div>
        <!-- Thanh tiến trình đã bán -->
        <div class="w-full bg-gray-200 rounded-full h-2 mt-2 overflow-hidden">
            <div class="bg-orange-500 h-full rounded-full" style="width: {{ $percent }};"></div>
        </div>
        <p class="text-[11px] text-gray-500 pt-1 text-right">Đã bán {{ $percent }}</p>
    </div>
    <button type="button"
        class="w-full mt-4 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-700 text-white font-semibold text-sm transition-colors flex items-center justify-center gap-2 shadow-md">
        <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
        <span>Chớp Deal Ngay</span>
    </button>
</div>
