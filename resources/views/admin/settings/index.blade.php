<x-admin-layout title="Cài đặt toàn sàn">
    <div class="flex flex-col w-full">

        {{-- Thanh điều khiển dính đầu trang (tiêu đề, tab phân khu, nút Lưu) --}}
        <x-admin.sections.settings.control-bar />

        <div class="max-w-[1360px] mx-auto px-space-lg py-space-lg w-full flex flex-col gap-space-xl">
            <x-admin.sections.settings.kpi-ribbon />
            <x-admin.sections.settings.fees />
            <x-admin.sections.settings.shipping-surge />
            <x-admin.sections.settings.sla-compensation />
            <x-admin.sections.settings.security />
            <x-admin.sections.settings.audit-trail />
        </div>
    </div>

    @push('scripts')
    <script>
// Tab switching interactions
const tabs = document.querySelectorAll('.tab-btn');
tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    tabs.forEach(t => {
      t.classList.remove('bg-primary-fixed', 'text-primary', 'shadow-sm');
      t.classList.add('text-on-surface-variant');
    });
    tab.classList.add('bg-primary-fixed', 'text-primary', 'shadow-sm');
    tab.classList.remove('text-on-surface-variant');
  });
});
 // Discount slider real-time updater
const rateSlider = document.getElementById('rate-slider');
const rateDisplay = document.getElementById('rate-display');
if (rateSlider && rateDisplay) {
  rateSlider.addEventListener('input', (e) => {
    rateDisplay.textContent = e.target.value + '%';
  });
}
 // Save button micro-feedback
const saveBtn = document.getElementById('save-settings-btn');
if (saveBtn) {
  saveBtn.addEventListener('click', () => {
    const originalText = saveBtn.innerHTML;
    saveBtn.innerHTML = '<span class="material-symbols-outlined text-[18px] animate-spin">sync</span><span>Đang ghi nhận...</span>';
    saveBtn.classList.add('opacity-80');
    setTimeout(() => {
      saveBtn.innerHTML = '<span class="material-symbols-outlined text-[18px]">task_alt</span><span>Đã lưu thành công!</span>';
      saveBtn.classList.remove('opacity-80');
      saveBtn.classList.add('bg-tertiary', 'hover:bg-tertiary-container');
      setTimeout(() => {
        saveBtn.innerHTML = originalText;
        saveBtn.classList.remove('bg-tertiary', 'hover:bg-tertiary-container');
      }, 2000);
    }, 800);
  });
}
  
    </script>
    @endpush
</x-admin-layout>
