<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    @livewireStyles
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-white">
    <div class="flex flex-row h-screen">

        <x-sidebars.sidebar/>

        <div class="flex flex-col w-full">

            <x-navbar/>

            {{ $slot }}

        </div>

    </div>


    @livewireScripts
</body>
</html>
