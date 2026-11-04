<x-customer-layout title="Kho voucher & Ưu đãi">
    <div class="max-w-7xl mx-auto w-full px-6 lg:px-12 py-space-lg">

        <x-customer.sections.vouchers.breadcrumb />

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
            <x-customer.sections.vouchers.account-sidebar />

            <section class="lg:col-span-8 xl:col-span-9 flex flex-col gap-space-lg">
                <x-customer.sections.vouchers.coupon-box />
                <x-customer.sections.vouchers.referral-banner />

                <div class="flex flex-col gap-space-md">
                    <x-customer.sections.vouchers.voucher-tabs />
                    <x-customer.sections.vouchers.shop-vouchers />
                    <x-customer.sections.vouchers.foodhub-vouchers />
                    <x-customer.sections.vouchers.empty-states />
                </div>

                <x-customer.sections.vouchers.savings-insight />
            </section>
        </div>

    </div>
</x-customer-layout>
