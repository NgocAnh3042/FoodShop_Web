<x-admin-layout title="Quản lý tài xế & đội xe">
    <div class="flex flex-col w-full">

        <x-admin.sections.drivers.command-strip />
        <x-admin.sections.drivers.kpi-cards />

        {{-- Khung 2 cột: bản đồ đội xe (8/12) và mật độ theo trạm (4/12) --}}
        <div class="px-space-lg pb-space-lg grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
            <x-admin.sections.drivers.fleet-map />
            <x-admin.sections.drivers.hub-density />
        </div>

        <x-admin.sections.drivers.kyc-queue />
        <x-admin.sections.drivers.driver-table />
    </div>
</x-admin-layout>
