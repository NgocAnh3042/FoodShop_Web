@props([
    'icon'    => 'moped',
    'title'   => '',
    'desc'    => '',
    'status'  => 'Đang bật',
    'note'    => '',
    'checked' => true,
])

<label class="group relative flex flex-col justify-between p-space-md rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all cursor-pointer shadow-sm ring-2 ring-primary">
    <div>
        <div class="flex items-center justify-between mb-space-sm">
            <div class="w-11 h-11 rounded-xl bg-primary text-on-primary flex items-center justify-center shadow-md shadow-primary/20">
                <span class="material-symbols-outlined text-[24px]">{{ $icon }}</span>
            </div>
            {{-- Công tắc bật/tắt --}}
            <input class="sr-only peer" type="checkbox" @checked($checked)/>
            <div class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-surface-variant after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary relative"></div>
        </div>
        <h3 class="font-label-lg text-label-lg text-on-surface font-bold">{{ $title }}</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 leading-snug">{{ $desc }}</p>
    </div>
    <div class="mt-space-md pt-space-xs flex items-center justify-between text-label-sm font-label-sm text-primary">
        <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-primary"></span> {{ $status }}</span>
        <span class="text-on-surface-variant font-normal">{{ $note }}</span>
    </div>
</label>
