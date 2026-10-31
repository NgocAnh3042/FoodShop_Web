<x-seller-layout title="Báo cáo doanh thu">
    <div class="p-space-lg max-w-7xl mx-auto w-full flex flex-col gap-space-lg">

        <x-seller.sections.reports.header />
        <x-seller.sections.reports.kpi-stats />

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
            <x-seller.sections.reports.revenue-chart />

            <div class="lg:col-span-4 flex flex-col gap-space-md">
                <x-seller.sections.reports.category-breakdown />
                <x-seller.sections.reports.peak-hours />
            </div>
        </div>

        <x-seller.sections.reports.top-dishes />
        <x-seller.sections.reports.payout-table />
        <x-seller.sections.reports.notice-banner />

    </div>
</x-seller-layout>
