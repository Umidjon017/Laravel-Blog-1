<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/choices.css') }}">

        {{-- Livewire --}}
        @livewireStyles

        {{-- BLade UI kit --}}
        @bukStyles(true)

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="flex space-x-8 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}

                        @if(isset($nav))
                            {{ $nav }}                            
                        @endif
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        {{-- Livewire --}}
        @livewireScripts

        {{-- Blade UI kit --}}
        @bukScripts(true)

    </body>
</html>
