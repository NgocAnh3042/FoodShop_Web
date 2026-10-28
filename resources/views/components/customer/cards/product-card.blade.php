@props([
    'image' => '',
    'category' => 'Danh mục',
    'rating' => '4.9',
    'title' => 'Tên món ăn',
    'desc' => 'Mô tả ngắn gọn hương vị món ăn...',
    'price' => '62.000đ',
    'oldPrice' => '75.000đ',
    'badge' => '',
    'badgeBg' => 'bg-secondary-container text-on-secondary-container',
])

<div
    class="bg-surface-container-lowest rounded-2xl p-space-md shadow-sm hover:shadow-xl transition-all group flex flex-col justify-between">
    <div class="relative rounded-xl overflow-hidden aspect-square bg-surface-container mb-space-sm">
        <img src="{{ $image }}" alt="{{ $title }}"
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

        <!-- Nút yêu thích -->
        <button type="button" aria-label="Yêu thích món"
            class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface-container-lowest/80 backdrop-blur-md flex items-center justify-center text-outline hover:text-error transition-colors">
            <span class="material-symbols-outlined text-[18px]">favorite</span>
        </button>

        <!-- Nhãn phụ (nếu có) -->
        @if ($badge)
            <span
                class="absolute bottom-2 left-2 {{ $badgeBg }} font-label-sm text-label-sm px-2.5 py-0.5 rounded-md font-bold shadow-sm">
                {{ $badge }}
            </span>
        @endif
    </div>

    <div class="flex flex-col gap-1 flex-1 justify-between">
        <div>
            <div class="flex items-center justify-between pb-1">
                <span class="font-body-sm text-body-sm text-on-surface-variant truncate">{{ $category }}</span>
                <div class="flex items-center gap-0.5 text-secondary-container">
                    <span class="material-symbols-outlined text-[16px]"
                        style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="font-label-sm text-label-sm font-bold text-on-surface">{{ $rating }}</span>
                </div>
            </div>
            <h3
                class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors line-clamp-1">
                {{ $title }}</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">{{ $desc }}</p>
        </div>

        <div class="flex items-center justify-between pt-3 mt-auto border-t border-transparent">
            <div class="flex flex-col">
                <span class="font-headline-md text-headline-md text-primary font-black">{{ $price }}</span>
                @if ($oldPrice)
                    <span class="font-body-sm text-body-sm text-outline line-through">{{ $oldPrice }}</span>
                @endif
            </div>
            <button type="button" aria-label="Thêm vào giỏ"
                class="w-10 h-10 rounded-full bg-primary text-on-primary hover:bg-primary-container flex items-center justify-center shadow-md active:scale-95 transition-all">
                <span class="material-symbols-outlined text-[20px]">add</span>
            </button>
        </div>
    </div>
</div>
