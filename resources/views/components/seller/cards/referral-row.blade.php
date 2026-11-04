@props([
    'initials'   => '',
    'name'       => '',
    'note'       => '',
    'date'       => '',
    'time'       => '',
    'status'     => 'done',   // done | waiting | invalid
    'order'      => '',
    'reward'     => '',
    'rewardNote' => '',
])

@php
    // Viết nguyên văn để Tailwind quét thấy class. Database chỉ cần lưu: done, waiting, invalid
    $styles = [
        'done' => [
            'row' => '', 'avatar' => 'bg-surface-container-high text-on-surface-variant', 'note' => 'text-on-surface-variant',
            'chip' => 'bg-tertiary/10 text-tertiary', 'icon' => 'check_circle', 'label' => 'Đã hoàn tất',
            'order' => 'font-label-md text-label-md font-semibold',
            'reward' => 'font-label-md text-label-md text-tertiary font-extrabold', 'rewardNote' => 'text-on-surface-variant',
        ],
        'waiting' => [
            'row' => '', 'avatar' => 'bg-surface-container-high text-on-surface-variant', 'note' => 'text-on-surface-variant',
            'chip' => 'bg-secondary-container/20 text-on-secondary-container', 'icon' => 'hourglass_top', 'label' => 'Chờ đơn đầu',
            'order' => 'text-on-surface-variant font-body-sm text-body-sm italic',
            'reward' => 'font-label-md text-label-md text-on-surface-variant font-semibold', 'rewardNote' => 'text-outline',
        ],
        'invalid' => [
            'row' => 'bg-error-container/20', 'avatar' => 'bg-error-container text-error', 'note' => 'text-error',
            'chip' => 'bg-error-container text-on-error-container', 'icon' => 'cancel', 'label' => 'Không hợp lệ',
            'order' => 'text-on-surface-variant font-body-sm text-body-sm',
            'reward' => 'font-label-md text-label-md text-on-surface-variant', 'rewardNote' => 'text-error',
        ],
    ];
    $s = $styles[$status] ?? $styles['done'];
@endphp

<tr class="hover:bg-surface-container-low/50 transition-colors {{ $s['row'] }}">
    <td class="py-space-md px-space-md">
        <div class="flex items-center gap-space-sm">
            <div class="w-8 h-8 rounded-full {{ $s['avatar'] }} flex items-center justify-center font-bold font-label-sm text-label-sm">{{ $initials }}</div>
            <div>
                <p class="font-label-md text-label-md text-on-surface font-semibold">{{ $name }}</p>
                <span class="font-body-sm text-body-sm {{ $s['note'] }}">{{ $note }}</span>
            </div>
        </div>
    </td>
    <td class="py-space-md px-space-md text-on-surface-variant font-body-sm text-body-sm">
        {{ $date }} <br/><span class="text-[11px] text-outline">{{ $time }}</span>
    </td>
    <td class="py-space-md px-space-md">
        <span class="inline-flex items-center gap-1 px-space-sm py-0.5 rounded-full {{ $s['chip'] }} font-label-sm text-label-sm font-bold">
            <span class="material-symbols-outlined text-[13px]">{{ $s['icon'] }}</span>
            {{ $s['label'] }}
        </span>
    </td>
    <td class="py-space-md px-space-md text-right {{ $s['order'] }}">{{ $order }}</td>
    <td class="py-space-md px-space-md text-right">
        <span class="{{ $s['reward'] }}">{{ $reward }}</span>
        <span class="block font-body-sm text-body-sm {{ $s['rewardNote'] }} text-[11px]">{{ $rewardNote }}</span>
    </td>
</tr>
