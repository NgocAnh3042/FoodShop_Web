<x-customer-layout>
    <div class="flex flex-col w-full">

        {{-- Banner đầu trang --}}
        <x-customer.sections.menu.menu-banner />

        {{-- Khung 2 cột: bộ lọc bên trái, danh sách món bên phải --}}
        <section class="max-w-7xl mx-auto px-gutter w-full py-space-md">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">

                {{-- Cột trái (3/12) --}}
                <x-customer.sections.menu.menu-filter />

                {{-- Cột phải (9/12) --}}
                <div class="lg:col-span-9 flex flex-col gap-space-lg min-w-0">
                    <x-customer.sections.menu.menu-toolbar />
                    <x-customer.sections.menu.menu-grid />
                    <x-customer.sections.menu.menu-customer-set />
                    <x-customer.sections.menu.menu-pagination />
                </div>

            </div>
        </section>
    </div>

    {{-- @push('scripts') ... @endpush: chép nguyên khối script trong file menu.blade.php mình gửi --}}
</x-customer-layout>
