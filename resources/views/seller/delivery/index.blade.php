<x-seller-layout title="Giao hàng">
    <div class="flex flex-col w-full">
        <div class="p-space-lg max-w-[1400px] w-full mx-auto flex flex-col gap-space-lg">

            <x-seller.sections.delivery.header />
            <x-seller.sections.delivery.delivery-methods />

            {{-- Khung 2 cột: đội giao hàng và form thêm shipper (8/12), đơn chờ giao và đang giao (4/12) --}}
            <div class="grid grid-cols-1 xl:grid-cols-12 gap-space-lg items-start">
                <div class="xl:col-span-8 flex flex-col gap-space-lg">
                    <x-seller.sections.delivery.shipper-team />
                    <x-seller.sections.delivery.shipper-form />
                </div>

                <div class="xl:col-span-4 flex flex-col gap-space-lg">
                    <x-seller.sections.delivery.dispatch-queue />
                    <x-seller.sections.delivery.in-transit />
                    <x-seller.sections.delivery.quick-tip />
                </div>
            </div>

        </div>
    </div>
</x-seller-layout>
