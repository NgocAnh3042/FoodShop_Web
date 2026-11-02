<x-admin-layout title="Giao diện & màu sắc">
    <div class="flex flex-col w-full">

        <x-admin.sections.theme.header />
        <x-admin.sections.theme.active-banner />

        {{-- Khung 2 cột: cấu hình bên trái (7/12), xem trước trực tiếp bên phải (5/12) --}}
        <div class="px-space-lg pb-space-xl grid grid-cols-1 xl:grid-cols-12 gap-space-lg items-start">
            <div class="xl:col-span-7 flex flex-col gap-space-lg">
                <x-admin.sections.theme.presets />
                <x-admin.sections.theme.palette-editor />
                <x-admin.sections.theme.tokens />
            </div>

            <x-admin.sections.theme.live-preview />
        </div>
    </div>

    @push('scripts')
    <script>
(function() {
  const slider = document.getElementById('splitRangeSlider');
  const label = document.getElementById('splitPercentLabel');
  if (slider && label) {
    slider.addEventListener('input', function(e) {
      label.textContent = e.target.value + '% Tỉ lệ';
    });
  }
   // Visual feedback toggle for preview modal button
  const toggleBtn = document.getElementById('toggleModalPreview');
  if (toggleBtn) {
    toggleBtn.addEventListener('click', function() {
      alert('Đang kết nối live stream tới Simulator: iPhone 15 Pro & Samsung Galaxy S24 Ultra...');
    });
  }
})();
  
    </script>
    @endpush
</x-admin-layout>
