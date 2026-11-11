<x-customer.account-layout title="Thông tin cá nhân" :user="$user" active="profile" subtitle="...">
    <form class="flex flex-col gap-8" onsubmit="event.preventDefault();">
        <x-customer.sections.account.profile.basic-info />
        <x-customer.sections.account.profile.security />
        <x-customer.sections.account.profile.action-bar />
    </form>
</x-customer.account-layout>