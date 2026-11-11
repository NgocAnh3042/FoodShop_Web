@props(['title' => 'Tài khoản', 'user' => null])

<x-customer-layout :title="$title">
    <div class="max-w-7xl mx-auto w-full px-6 lg:px-12 py-space-lg">

        <x-customer.account.breadcrumb :title="$title" />

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
            <x-customer.account.sidebar :user="$user" />

            <section class="lg:col-span-8 xl:col-span-9 flex flex-col gap-space-lg">
                {{ $slot }}
            </section>
        </div>

    </div>
</x-customer-layout>
