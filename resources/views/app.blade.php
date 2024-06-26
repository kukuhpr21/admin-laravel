<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        <x-sidebars.sidebar/>
        <x-navbar/>

        <div class="p-4 sm:ml-64">
            <div class="p-4 bg-slate-100 rounded-lg mt-20">
                dashboard
            </div>
        </div>
    </body>
</html>
