<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-partials.head />
    </head>
    <body>
        <x-partials.nav />

        <x-ui.alerts />
        
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @yield('content')

        <x-partials.footer />

        @livewireScripts()
    </body>
</html>