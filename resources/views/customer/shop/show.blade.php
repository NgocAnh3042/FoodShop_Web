<x-customer-layout>

    {{-- Luôn hiện: ảnh bìa, logo, tên quán. Chip mã chỉ hiện khi có mã --}}
    <x-customer.sections.shop-referral.hero :slug="$slug" :referral-code="$showWelcome ? $referralCode : null" />

    {{-- Chỉ hiện cho khách đến bằng mã quán --}}
    @if ($showWelcome)
        <x-customer.sections.shop-referral.voucher-showcase />
        <x-customer.sections.shop-referral.how-it-works />
        <x-customer.sections.shop-referral.claim-modal />
    @endif

    {{-- Luôn hiện --}}
    <x-customer.sections.shop-referral.signature-dishes />
    <x-customer.sections.shop-referral.assurance-strip />

</x-customer-layout>
