@props([
    'image' => '',
    'name' => '',
    'submitted' => '',
    'score' => 0,
    'license' => '',
    'plate' => '',
    'record' => '',
    'recordOk' => true,
    'food' => '',
    'status' => 'ready', // ready = đủ điều kiện duyệt | pending = còn thiếu giấy tờ
])

@php
    $ready = $status === 'ready';
@endphp

<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between gap-space-sm">
    <div class="flex items-start justify-between">
        <div class="flex items-center gap-space-sm">
            <img class="w-12 h-12 rounded-full object-cover" src="{{ $image }}" alt="{{ $name }}" />
            <div>
                <div class="font-label-lg text-label-lg text-on-surface font-bold">{{ $name }}</div>
                <div class="font-body-sm text-body-sm text-on-surface-variant">Nộp hồ sơ: {{ $submitted }}</div>
            </div>
        </div>
        <span
            class="px-2 py-0.5 rounded-md {{ $ready ? 'bg-tertiary-fixed text-on-tertiary-fixed' : 'bg-secondary-fixed text-on-secondary-fixed-variant' }} font-label-sm text-label-sm font-bold">Test:
            {{ $score }}/100</span>
    </div>

    <div class="grid grid-cols-2 gap-1 text-body-sm text-on-surface-variant bg-surface-container-low p-2 rounded-lg">
        <div>GPLX: <span class="text-tertiary font-bold">{{ $license }}</span></div>
        <div>Cà vẹt: <span class="text-tertiary font-bold">{{ $plate }}</span></div>
        <div>Lý lịch TP: <span
                class="{{ $recordOk ? 'text-tertiary' : 'text-secondary' }} font-bold">{{ $record }}</span></div>
        <div>ATTP Food: <span class="text-tertiary font-bold">{{ $food }}</span></div>
    </div>

    <div class="flex items-center gap-space-xs pt-1">
        @if ($ready)
            <button
                class="flex-1 py-1.5 rounded-lg bg-tertiary text-on-tertiary font-label-sm text-label-sm font-bold hover:bg-tertiary-container transition-colors"
                type="button">Duyệt Kích Hoạt</button>
        @else
            <button
                class="flex-1 py-1.5 rounded-lg bg-surface-container text-on-surface-variant font-label-sm text-label-sm cursor-not-allowed"
                type="button">Chờ Bổ Sung</button>
        @endif
        <button
            class="px-3 py-1.5 rounded-lg bg-surface-container text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm"
            type="button">Xem chi tiết</button>
        <button class="px-3 py-1.5 rounded-lg bg-error-container text-error font-label-sm text-label-sm"
            type="button">{{ $ready ? 'Từ chối' : 'Yêu cầu lại' }}</button>
    </div>
</div>
