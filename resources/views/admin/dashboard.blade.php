<x-admin-layout title="Tổng quan vận hành">
    <div class="flex flex-col w-full">

        {{-- Dải trạng thái trên cùng --}}
        <x-admin.sections.dashboard.ticker />

        <div class="p-gutter flex flex-col gap-gutter">
            <x-admin.sections.dashboard.kpi-cards />
            <x-admin.sections.dashboard.heatmap-velocity />
            <x-admin.sections.dashboard.performance-incidents />
            <x-admin.sections.dashboard.leaderboards />
        </div>

    </div>
</x-admin-layout>
