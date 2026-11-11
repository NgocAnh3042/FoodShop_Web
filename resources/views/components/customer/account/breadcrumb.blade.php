@props(['title'])

<nav aria-label="Breadcrumb" class="flex items-center gap-2 text-on-surface-variant mb-space-lg">
    <a class="font-body-sm text-body-sm hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}">
        <span class="material-symbols-outlined text-[16px]">home</span>
        Trang chủ
    </a>
    <span class="material-symbols-outlined text-[14px] text-outline-variant">chevron_right</span>
    <a class="font-body-sm text-body-sm hover:text-primary transition-colors" href="{{ route('account') }}">Tài khoản</a>
    <span class="material-symbols-outlined text-[14px] text-outline-variant">chevron_right</span>
    <span class="font-body-sm text-body-sm text-primary font-bold">{{ $title }}</span>
</nav>
