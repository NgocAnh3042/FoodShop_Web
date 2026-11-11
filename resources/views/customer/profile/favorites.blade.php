<x-customer.account-layout title="Món & Quán yêu thích" :user="$user">
    <section class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
        <div class="mb-space-md">
            <h1 class="font-headline-lg text-headline-lg text-on-surface font-extrabold tracking-tight">Món &amp; Quán yêu thích</h1>
            <p class="font-body-md text-body-md text-on-surface-variant mt-1">Những món ăn và quán bạn đã lưu sẽ được tập hợp tại đây.</p>
        </div>
        <div class="rounded-xl border border-dashed border-outline-variant p-space-lg text-center">
            <span class="material-symbols-outlined text-primary text-[36px]">favorite_border</span>
            <p class="font-label-lg text-label-lg text-on-surface mt-2">Chưa có món hoặc quán yêu thích</p>
            <a href="{{ route('menu') }}" class="inline-flex items-center gap-1 mt-3 font-label-md text-label-md font-bold text-primary hover:underline">
                Khám phá thực đơn
                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
            </a>
        </div>
    </section>
</x-customer.account-layout>
