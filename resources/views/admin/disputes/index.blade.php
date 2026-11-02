<x-admin-layout title="Khách hàng & Khiếu nại">
    <div class="flex flex-col w-full">

        <x-admin.sections.disputes.banner />
        <x-admin.sections.disputes.kpi-cards />
        <x-admin.sections.disputes.fraud-alert />
        <x-admin.sections.disputes.filter-chips />

        {{-- Khung 2 cột: hàng đợi tranh chấp (7/12) và chi tiết ca đang chọn (5/12) --}}
        <div class="px-space-lg py-space-md grid grid-cols-1 xl:grid-cols-12 gap-space-lg items-start">
            <x-admin.sections.disputes.queue />
            <x-admin.sections.disputes.detail-panel />
        </div>

        <x-admin.sections.disputes.toast />
    </div>
</x-admin-layout>
