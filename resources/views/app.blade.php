<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="bg-white">
        <div class="flex flex-row h-screen">
            <x-sidebars.sidebar/>

            {{-- main --}}
            <div class="flex flex-col w-full">
                <x-navbar/>
            </div>
            {{-- main --}}
        </div>
    </body>
</html>
