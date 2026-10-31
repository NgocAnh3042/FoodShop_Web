@props([
    'badge' => null,
    'badgeClass' => 'bg-primary text-on-primary',
    'name',
    'description',
    'sold',
    'revenue',
    'margin',
    'image',
    'alt' => '',
])

<div class="bg-surface-container-low rounded-xl p-space-md flex flex-col justify-between hover:shadow-md transition-all">
    <div>
        <div class="relative w-full h-32 rounded-lg overflow-hidden mb-space-sm">
            <img class="w-full h-full object-cover" src="{{ $image }}" alt="{{ $alt }}" />
            @if ($badge)
                <span
                    class="absolute top-2 left-2 px-2 py-0.5 rounded-full font-label-sm text-label-sm font-bold {{ $badgeClass }}">{{ $badge }}</span>
            @endif
        </div>
        <h4 class="font-label-lg text-label-lg font-bold text-on-surface truncate">{{ $name }}</h4>
        <p class="font-body-sm text-body-sm text-on-surface-variant">{{ $description }}</p>
    </div>

    <div class="mt-space-md pt-space-xs space-y-1">
        <div class="flex justify-between text-body-sm font-body-sm">
            <span class="text-on-surface-variant">Đã bán:</span>
            <span class="font-bold text-on-surface">{{ $sold }}</span>
        </div>
        <div class="flex justify-between text-body-sm font-body-sm">
            <span class="text-on-surface-variant">Doanh số:</span>
            <span class="font-bold text-primary">{{ $revenue }}</span>
        </div>
        <div class="flex justify-between items-center text-body-sm font-body-sm">
            <span class="text-on-surface-variant">Tỷ suất lãi:</span>
            <span class="font-bold text-tertiary bg-tertiary/10 px-1.5 py-0.5 rounded">{{ $margin }}</span>
        </div>
    </div>
</div>
