<x-seller-layout title="Giới thiệu & Nhận thưởng">
    <div class="flex flex-col w-full">
        <div class="px-space-lg py-space-lg flex flex-col gap-space-lg max-w-[1360px] mx-auto w-full">

            <x-seller.sections.referral.header />
            <x-seller.sections.referral.hero />
            <x-seller.sections.referral.kpi-cards />

            {{-- Khung 2 cột: biểu đồ và bảng khách (8/12), cơ chế thưởng, ví, quy định (4/12) --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
                <div class="lg:col-span-8 flex flex-col gap-space-lg">
                    <x-seller.sections.referral.trend-chart />
                    <x-seller.sections.referral.customers-table />
                </div>

                <div class="lg:col-span-4 flex flex-col gap-space-lg">
                    <x-seller.sections.referral.reward-mechanism />
                    <x-seller.sections.referral.wallet />
                    <x-seller.sections.referral.rules />
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
    <script>
  function copyToClipboard(text, btnId) {
navigator.clipboard.writeText(text).then(function() {
  const btn = document.getElementById(btnId);
  if (btn) {
    const originalContent = btn.innerHTML;
    btn.innerHTML = '<span class="material-symbols-outlined text-[18px]">check</span><span>Đã sao chép!</span>';
    setTimeout(function() {
      btn.innerHTML = originalContent;
    }, 2000);
  }
}).catch(function(err) {
  console.error('Không thể sao chép: ', err);
});
  }
    </script>
    @endpush
</x-seller-layout>
