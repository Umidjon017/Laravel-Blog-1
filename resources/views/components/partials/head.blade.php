<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- Facebook Meta --}}
<meta property="og:url"content="{{url()->current()}}"/>
<meta property="og:image" content="{{config('app.url')}}/@yield('og:image')">
<meta property="og:title" content="@yield('og:title')"/>

<!-- Tailwind CSS -->
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
<script src="https://cdn.tailwindcss.com"></script>
<!--Replace with your tailwind.css once created-->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Scripts -->
<script src="{{ asset('js/main.js') }}" defer></script>
<script src="{{ asset('js/drop-down.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>

<title> @yield('title', 'Blog') </title>

@livewireStyles()