<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/css/global.css')
    @vite('resources/js/alpine.js')
</head>

<body>
    <div class="bg-white min-h-full">
        <x-navbar></x-navbar>
        
        {{-- <x-header>{{ $title }}</x-header> --}}

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
