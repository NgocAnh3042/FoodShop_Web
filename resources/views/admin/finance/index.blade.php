<x-admin-layout title="Tài chính & đối soát">
    <div class="flex flex-col w-full">
        <div class="p-space-lg xl:p-margin flex flex-col gap-space-xl max-w-[1520px] mx-auto w-full">

            <x-admin.sections.finance.header />
            <x-admin.sections.finance.kpi-cards />

            {{-- Dòng chảy GMV (7/12) và cơ cấu thanh toán (5/12) --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
                <x-admin.sections.finance.flow-allocation />
                <x-admin.sections.finance.payment-mix />
            </div>

            {{-- Bảng kê đối soát đối tác (có bộ lọc và phân trang bên trong) --}}
            <x-admin.sections.finance.settlement-ledger />

            {{-- Cảnh báo gian lận (7/12) và kê khai thuế (5/12) --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
                <x-admin.sections.finance.fraud-alerts />
                <x-admin.sections.finance.tax-compliance />
            </div>

        </div>
    </div>
</x-admin-layout>
