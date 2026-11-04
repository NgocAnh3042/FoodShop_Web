@props([
    'name',
    'image',
    'alt' => '',
    'badge',
    'badgeClass' => 'bg-primary text-on-primary',
    'rating',
    'description',
    'price',
    'note' => null,
    'noteClass' => 'text-outline',
])

<div
    class="bg-surface-container-lowest rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition-all flex flex-col group">
    <div class="relative w-full aspect-[4/3] overflow-hidden">
        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
            src="{{ $image }}" alt="{{ $alt ?: $name }}" />
        <span
            class="absolute top-3 left-3 px-2.5 py-1 rounded-full font-label-sm text-label-sm font-bold shadow-sm {{ $badgeClass }}">{{ $badge }}</span>
        <div
            class="absolute bottom-3 right-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm font-bold flex items-center gap-1 shadow-sm">
            <span class="material-symbols-outlined text-secondary-container text-[14px]"
                style="font-variation-settings: 'FILL' 1;">star</span> {{ $rating }}
        </div>
    </div>

    <div class="p-space-md flex-1 flex flex-col justify-between">
        <div>
            <h3
                class="font-headline-sm text-headline-sm text-on-surface font-bold line-clamp-1 group-hover:text-primary transition-colors">
                {{ $name }}</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">{{ $description }}</p>
        </div>
        <div class="pt-space-md flex items-center justify-between gap-2 mt-auto">
            <div class="flex flex-col">
                <span
                    class="font-headline-sm text-headline-sm text-primary font-extrabold leading-none">{{ $price }}</span>
                @if ($note)
                    <span
                        class="font-body-sm text-body-sm mt-0.5 leading-none {{ $noteClass }}">{{ $note }}</span>
                @endif
            </div>
            <button
                class="px-space-md py-2 rounded-full bg-primary-fixed text-on-primary-fixed hover:bg-primary hover:text-on-primary font-label-md text-label-md transition-all flex items-center gap-1 shadow-sm"
                onclick="addToCartAnimation(this)" type="button">
                <span class="material-symbols-outlined text-[18px]">add</span>
                <span>Thêm món</span>
            </button>
        </div>
    </div>
</div>
