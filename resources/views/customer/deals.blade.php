<x-customer-layout>
    {{-- thanh thông báo + đếm ngược --}}
    <x-customer.sections.deals.deals-ticker />
    <x-customer.sections.deals.deals_hero />
    <x-customer.sections.deals.deals-filter />
    <div class="max-w-7xl mx-auto px-gutter w-full py-8 flex flex-col gap-12">
        <x-customer.sections.deals.voucher />
        <x-customer.sections.deals.combo />
        <x-customer.sections.deals.rewards-tiers />
        <x-customer.sections.deals.partner-strip />
    </div>
    @push('scripts')
        <script>
            // Sao chép mã
            function copyCode(btn, code) {
                navigator.clipboard.writeText(code);
                const originalText = btn.innerText;
                btn.innerText = "Đã chép!";
                btn.classList.add("bg-tertiary");
                setTimeout(() => {
                    btn.innerText = originalText;
                    btn.classList.remove("bg-tertiary");
                }, 2000);
            }

            // Lưu voucher
            function claimVoucher(button, code) {
                button.disabled = true;
                button.innerHTML = '<span class="material-symbols-outlined text-sm">check</span><span>Đã lưu</span>';
                button.classList.remove("bg-primary", "bg-tertiary", "bg-secondary-container", "bg-primary-container",
                    "bg-tertiary-container", "bg-secondary");
                button.classList.add("bg-surface-container-highest", "text-on-surface-variant", "cursor-default");
                showToast(`Đã lưu thành công mã ${code} vào kho voucher của bạn!`);
            }

            // Thêm combo vào giỏ
            function addToCart(button, name, price) {
                const originalIcon = button.innerHTML;
                button.innerHTML = '<span class="material-symbols-outlined text-xl">check</span>';
                button.classList.add("bg-tertiary");
                showToast(`Đã thêm combo "${name}" (${price}) vào giỏ hàng!`);
                setTimeout(() => {
                    button.innerHTML = originalIcon;
                    button.classList.remove("bg-tertiary");
                }, 1500);
            }

            // Hộp thông báo nhỏ dưới màn hình
            function showToast(message) {
                let toast = document.getElementById("foodhub-toast");
                if (!toast) {
                    toast = document.createElement("div");
                    toast.id = "foodhub-toast";
                    toast.className =
                        "fixed bottom-8 left-1/2 -translate-x-1/2 z-50 bg-inverse-surface text-inverse-on-surface px-6 py-3 rounded-full shadow-2xl font-body-md text-sm flex items-center gap-2 transform transition-all duration-300 pointer-events-none opacity-0 translate-y-4";
                    document.body.appendChild(toast);
                }
                toast.innerHTML =
                    `<span class="material-symbols-outlined text-tertiary-fixed text-lg">check_circle</span> <span>${message}</span>`;
                toast.classList.remove("opacity-0", "translate-y-4");
                toast.classList.add("opacity-100", "translate-y-0");
                setTimeout(() => {
                    toast.classList.remove("opacity-100", "translate-y-0");
                    toast.classList.add("opacity-0", "translate-y-4");
                }, 2600);
            }

            // Lọc voucher theo loại
            function setFilter(button, category) {
                document.querySelectorAll(".filter-btn").forEach(btn => {
                    btn.classList.remove("bg-primary", "text-on-primary");
                    btn.classList.add("bg-surface-container-low", "text-on-surface-variant");
                });
                button.classList.remove("bg-surface-container-low", "text-on-surface-variant");
                button.classList.add("bg-primary", "text-on-primary");

                document.querySelectorAll(".voucher-card").forEach(card => {
                    const show = category === "all" || card.getAttribute("data-category") === category;
                    card.style.display = show ? "flex" : "none";
                });
            }

            // Đồng hồ đếm lùi
            let secs = 19,
                mins = 42,
                hours = 3;
            setInterval(() => {
                secs--;
                if (secs < 0) {
                    secs = 59;
                    mins--;
                    if (mins < 0) {
                        mins = 59;
                        hours--;
                        if (hours < 0) hours = 23;
                    }
                }
                const elHours = document.getElementById("countdown-hours");
                const elMins = document.getElementById("countdown-mins");
                const elSecs = document.getElementById("countdown-secs");
                if (elHours) elHours.innerText = hours.toString().padStart(2, "0");
                if (elMins) elMins.innerText = mins.toString().padStart(2, "0");
                if (elSecs) elSecs.innerText = secs.toString().padStart(2, "0");
            }, 1000);

            // Tìm mã coupon
            const searchInput = document.getElementById("voucher-search");
            if (searchInput) {
                searchInput.addEventListener("input", function(e) {
                    const query = e.target.value.toLowerCase().trim();
                    document.querySelectorAll(".voucher-card").forEach(card => {
                        const match = card.innerText.toLowerCase().includes(query);
                        card.style.display = match ? "flex" : "none";
                    });
                });
            }
        </script>
    @endpush
</x-customer-layout>
