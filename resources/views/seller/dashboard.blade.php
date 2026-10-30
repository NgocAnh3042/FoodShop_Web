<x-seller-layout title="Tổng quan">
    <div class="p-space-lg max-w-[1380px] w-full mx-auto flex flex-col gap-space-lg">

        <x-seller.sections.dashboard.welcome />
        <x-seller.sections.dashboard.kpi-stats />
        <x-seller.sections.dashboard.live-orders />

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
            <div class="lg:col-span-8 flex flex-col gap-space-lg">
                <x-seller.sections.dashboard.sales-chart />
                <x-seller.sections.dashboard.featured-dish />
            </div>

            <div class="lg:col-span-4 flex flex-col gap-space-lg">
                <x-seller.sections.dashboard.stock />
                <x-seller.sections.dashboard.latest-review />
            </div>
        </div>

    </div>
</x-seller-layout>
