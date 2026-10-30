<x-seller-layout title="Thực đơn & Món ăn">
    <div class="px-space-lg py-space-md flex flex-col gap-space-md">

        <x-seller.sections.products.header />
        <x-seller.sections.products.summary-stats />

        <div class="grid grid-cols-1 xl:grid-cols-12 gap-space-lg items-start">
            <x-seller.sections.products.category-sidebar />

            <section class="xl:col-span-8 flex flex-col gap-space-md">
                <x-seller.sections.products.filter-toolbar />
                <x-seller.sections.products.dish-grid />
                <x-seller.sections.products.pagination />
            </section>
        </div>

    </div>

    {{-- Các hộp thoại (fixed, ẩn mặc định) --}}
    <x-seller.sections.products.dish-modal />
    <x-seller.sections.products.options-modal />
    <x-seller.sections.products.category-modal />
</x-seller-layout>
