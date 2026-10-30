<x-seller-layout title="Quản lý đơn hàng">
    <div class="p-space-lg max-w-[1720px] mx-auto w-full flex flex-col gap-space-lg">

        <x-seller.sections.orders.header />
        <x-seller.sections.orders.summary-stats />
        <x-seller.sections.orders.filters />

        <div class="grid grid-cols-1 xl:grid-cols-12 gap-space-lg items-start">
            <div class="xl:col-span-8 flex flex-col gap-space-md">
                <x-seller.sections.orders.orders-table />
                <x-seller.sections.orders.kitchen-status />
            </div>

            <div class="xl:col-span-4 flex flex-col gap-space-md sticky top-20">
                <x-seller.sections.orders.order-detail />
            </div>
        </div>

    </div>
</x-seller-layout>
