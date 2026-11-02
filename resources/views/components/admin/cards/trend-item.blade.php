@props([
    'image' => '',
    'rank' => 1,
    'name' => '',
    'stats' => '',
    'growth' => '',
    'note' => '',
])

<div class="p-space-sm rounded-xl bg-surface-container-low flex items-center justify-between">
    <div class="flex items-center gap-space-sm">
        <div class="relative w-12 h-12 rounded-xl overflow-hidden shrink-0">
            <img class="w-full h-full object-cover" src="{{ $image }}" alt="{{ $name }}" />
            <span
                class="absolute bottom-0 right-0 bg-primary text-on-primary font-label-sm text-label-sm px-1 rounded-tl">#{{ $rank }}</span>
        </div>
        <div class="flex flex-col">
            <span class="font-label-md text-label-md text-on-surface font-bold">{{ $name }}</span>
            <span class="font-body-sm text-body-sm text-on-surface-variant">{{ $stats }}</span>
        </div>
    </div>
    <div class="text-right">
        <span class="font-label-md text-label-md text-tertiary font-bold">{{ $growth }}</span>
        <div class="text-on-surface-variant font-body-sm text-body-sm">{{ $note }}</div>
    </div>
</div>
