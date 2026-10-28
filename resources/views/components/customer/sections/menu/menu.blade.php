    <x-customer-layout>
        <div class="flex flex-col w-full">

            {{-- Banner đầu trang + thẻ lọc nhanh --}}
            <x-customer.sections.menu.menu-banner />

            <section class="max-w-7xl mx-auto px-gutter w-full py-space-md">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">

                    {{-- Cột trái: bộ lọc --}}
                    <x-customer.sections.menu.menu-filter />

                    {{-- Cột phải: danh sách món --}}
                    <div class="lg:col-span-9 flex flex-col gap-space-lg min-w-0">
                        <x-customer.sections.menu.menu-toolbar />
                        <x-customer.sections.menu.menu-grid />
                        <x-customer.sections.menu.menu-custom-set />
                        <x-customer.sections.menu.menu-pagination />
                    </div>

                </div>
            </section>
        </div>

        @push('scripts')
            <script>
                // Bấm nút "+" thì đổi thành dấu tick trong 1,2 giây
                document.addEventListener('DOMContentLoaded', () => {
                    document.querySelectorAll('button[aria-label="Thêm vào giỏ"]').forEach(btn => {
                        btn.addEventListener('click', (e) => {
                            e.preventDefault();
                            const origContent = btn.innerHTML;
                            btn.innerHTML =
                                '<span class="material-symbols-outlined text-[20px]">check</span>';
                            btn.classList.add('bg-tertiary-container');
                            setTimeout(() => {
                                btn.innerHTML = origContent;
                                btn.classList.remove('bg-tertiary-container');
                            }, 1200);
                        });
                    });
                });
            </script>
        @endpush
    </x-customer-layout>
