<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') |  {{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ asset("/css/app.css") }}">
    </head>
    <body class="py-7 flex flex-col justify-between min-h-screen">
        <main role="main" class="text-gray-900">
            @yield('content')
        </main>
        <footer>
            <p class="text-gray-500">
                &copy; Copyright {{ date('Y') }} 
                @if(! Route::is('app_about'))
                &middot; <a href="{{ route('app_about') }}" class="text-indigo-500 hover:text-indigo-600 underline">about me</a>
                @endif
            </p>
        </footer>
    </body>
</html>
