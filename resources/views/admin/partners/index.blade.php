<x-admin-layout title="Quản lý đối tác quán">
    <div class="flex flex-col w-full">

        <div class="p-space-lg flex flex-col gap-space-lg">
            <x-admin.sections.partners.kpi-cards />
            <x-admin.sections.partners.controls />
            <x-admin.sections.partners.merchant-table />
            <x-admin.sections.partners.analytics-row />
        </div>

        {{-- Cửa sổ duyệt hồ sơ quán (ẩn, mở bằng JavaScript) --}}
        <x-admin.sections.partners.audit-modal />
    </div>

    @push('scripts')
        <script>
            function openAuditModal(merchantCode) {
                const modal = document.getElementById('auditModalOverlay');
                if (modal) {
                    modal.classList.remove('hidden');
                }
            }

            function closeAuditModal() {
                const modal = document.getElementById('auditModalOverlay');
                if (modal) {
                    modal.classList.add('hidden');
                }
            }

            function approveMerchantSuccess() {
                alert('Đã phê duyệt thành công quán Bánh Mì Huỳnh Hoa (CN2) - Mã FHB-99120. Quán đã sẵn sàng nhận đơn!');
                closeAuditModal();
            }

            function rejectMerchantPrompt() {
                const reason = prompt('Nhập lý do từ chối hồ sơ (Gửi email giải trình cho chủ quán):',
                    'Hình ảnh Giấy chứng nhận ATTP chưa rõ dấu mộc');
                if (reason) {
                    alert('Đã từ chối hồ sơ và gửi thông báo lý do: "' + reason + '"');
                    closeAuditModal();
                }
            }

            function promptDiscount(code, name, currentDiscount) {
                const newRate = prompt('Cập nhật mức chiết khấu sàn (%) cho: ' + name + ' (' + code + ')', currentDiscount);
                if (newRate && !isNaN(newRate)) {
                    alert('Đã cập nhật mức chiết khấu của quán ' + name + ' thành: ' + newRate + '%');
                }
            }
            // Tab active switcher micro-interaction
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelectorAll('.tab-btn').forEach(b => {
                        b.className =
                            'tab-btn px-space-md py-space-xs rounded-full font-label-md text-label-md text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all flex items-center gap-space-xs whitespace-nowrap';
                    });
                    this.className =
                        'tab-btn px-space-md py-space-xs rounded-full font-label-md text-label-md bg-primary text-on-primary shadow-sm flex items-center gap-space-xs whitespace-nowrap';
                });
            });
            // Close modal on Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeAuditModal();
                }
            });
        </script>
    @endpush
</x-admin-layout>
