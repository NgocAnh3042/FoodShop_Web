<x-customer.account-layout title="Kho voucher & Ưu đãi" :user="$user">
    <x-customer.sections.account.vouchers.coupon-box />
    <x-customer.sections.account.vouchers.referral-banner />

    <div class="flex flex-col gap-space-md">
        <x-customer.sections.account.vouchers.voucher-tabs />
        <x-customer.sections.account.vouchers.shop-vouchers />
        <x-customer.sections.account.vouchers.foodhub-vouchers />
        <x-customer.sections.account.vouchers.empty-states />
    </div>

    <x-customer.sections.account.vouchers.savings-insight />
</x-customer.account-layout>
