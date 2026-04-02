    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'App') }}</title>

        {{-- Fonts --}}
        <link
            href="https://fonts.googleapis.com/css2?family=Anton&family=Cardo:wght@400;700&family=HK+Grotesk:wght@400;500&display=swap"
            rel="stylesheet">

        {{-- Assets --}}
        @vite(['resources/css/app.css', 'resources/js/app.ts'])
    </head>

    <body class="bg-[#656d4a] min-h-screen flex flex-col text-[#f5f5f5] overflow-y-scroll">

        {{-- Navbar --}}
        @if (!isset($hideNavbar) || !$hideNavbar)
            <header class="px-6">
                @include('layouts.navbar')
            </header>
        @endif

        {{-- Page content --}}
        <main class="mt-1 sm:mt-2 md:mt-6 lg:mt-16 flex-grow
                mx-4 sm:mx-6 md:mx-10 lg:mx-20
                mb-28">
            @yield('content')
        </main>

        {{-- Footer --}}
        @if (!isset($hideFooter) || !$hideFooter)
            @include('layouts.footer')
        @endif
    </body>

    </html>