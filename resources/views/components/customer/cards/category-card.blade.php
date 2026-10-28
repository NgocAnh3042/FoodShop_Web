@props([
    'title' => 'Danh mục',
    'count' => '0+ quán',
    'icon' => 'bento',
    'bgColor' => 'bg-secondary-fixed',
    'textColor' => 'text-on-secondary-fixed',
])

<a class="group p-space-md rounded-2xl bg-surface-container-lowest hover:bg-surface-container-low flex flex-col items-center text-center shadow-sm hover:shadow-md transition-all border border-surface-variant/20"
    href="#">
    <div
        class="w-16 h-16 rounded-2xl {{ $bgColor }} flex items-center justify-center {{ $textColor }} mb-space-sm group-hover:scale-110 transition-transform shadow-inner">
        <span class="material-symbols-outlined text-[36px]"
            style="font-variation-settings: 'FILL' 1;">{{ $icon }}</span>
    </div>
    <span
        class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors">{{ $title }}</span>
    <span class="font-body-sm text-body-sm text-on-surface-variant pt-1">{{ $count }}</span>
</a>
