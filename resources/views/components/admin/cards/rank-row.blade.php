@props([
    'rank' => 1,
    'gold' => false, // true = huy hiệu hạng màu nổi (hạng 1)
    'image' => '',
    'name' => '',
    'branch' => '',
    'region' => '',
    'orders' => '',
    'gmv' => '',
    'prep' => '',
    'slow' => false, // true = thời gian chuẩn bị chậm, hiện màu cảnh báo
])

<tr class="hover:bg-surface-container-low transition-colors">
    <td class="py-3 px-3">
        <div class="flex items-center gap-space-sm">
            <span
                class="w-5 h-5 rounded-full {{ $gold ? 'bg-secondary text-on-secondary' : 'bg-surface-container-highest text-on-surface' }} font-label-sm text-label-sm flex items-center justify-center font-bold">{{ $rank }}</span>
            <div class="w-9 h-9 rounded-lg overflow-hidden shrink-0">
                <img class="w-full h-full object-cover" src="{{ $image }}" alt="{{ $name }}" />
            </div>
            <div class="flex flex-col">
                <span class="font-label-md text-label-md text-on-surface font-bold">{{ $name }}</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant">{{ $branch }}</span>
            </div>
        </div>
    </td>
    <td class="py-3 px-3 font-body-sm text-body-sm text-on-surface-variant">{{ $region }}</td>
    <td class="py-3 px-3 font-label-md text-label-md text-on-surface font-bold">{{ $orders }}</td>
    <td class="py-3 px-3 font-label-md text-label-md text-primary font-bold">{{ $gmv }}</td>
    <td class="py-3 px-3 text-right">
        <span
            class="px-2 py-0.5 rounded {{ $slow ? 'bg-secondary-fixed text-on-secondary-fixed' : 'bg-tertiary-container/10 text-tertiary' }} font-label-sm text-label-sm font-bold">{{ $prep }}</span>
    </td>
</tr>
