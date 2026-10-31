<x-seller-layout title="Cài đặt quán">
    <div class="flex flex-col w-full">
        <div class="p-space-lg max-w-7xl mx-auto w-full flex flex-col gap-space-lg">

            {{-- Tiêu đề + công tắc mở/đóng quán, rồi thanh danh mục cài đặt --}}
            <x-seller.sections.settings.settings-header />
            <x-seller.sections.settings.settings-tabs />

            {{-- Khung 2 cột: bên trái 7/12, bên phải 5/12 --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">

                <div class="lg:col-span-7 flex flex-col gap-space-lg">
                    <x-seller.sections.settings.settings-profile />
                    <x-seller.sections.settings.settings-schedule />
                </div>

                <div class="lg:col-span-5 flex flex-col gap-space-lg">
                    <x-seller.sections.settings.settings-kitchen />
                    <x-seller.sections.settings.settings-printer />
                    <x-seller.sections.settings.settings-sound />
                </div>

            </div>

            {{-- Chừa chỗ để thanh lưu cố định bên dưới không che nội dung --}}
            <div class="h-20"></div>
        </div>

        {{-- Thanh "Lưu cài đặt" dính đáy màn hình và thông báo thành công --}}
        <x-seller.sections.settings.settings-action-bar />
        <x-seller.sections.settings.settings-toast />
    </div>
</x-seller-layout>
