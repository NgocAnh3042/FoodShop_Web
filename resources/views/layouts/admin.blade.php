<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ? $title . ' | ' : '' }}Quản trị {{ config('app.name', 'FoodHub') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    @stack('styles')
</head>

<body class="bg-surface font-body-md text-on-surface antialiased">

    {{-- Thanh bên trái, cố định --}}
    <x-admin.sidebar />

    {{-- Phần còn lại: chừa 288px (pl-72) cho sidebar --}}
    <div class="pl-72">
        <x-admin.topbar />

        <main class="relative pt-16 bg-surface min-h-screen">
            {{ $slot }}
        </main>
    </div>

    @stack('scripts')
</body>

</html>
