<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'App') }}</title>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Cardo:wght@400;700&family=HK+Grotesk:wght@400;500&display=swap" rel="stylesheet">

    {{-- Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>

<body class="bg-[#656d4a] min-h-screen flex flex-col text-[#f5f5f5] overflow-y-scroll">
    <div class="">

        {{-- Navbar --}}
        <header class="px-6 scale-ms-50">
            @include('layouts.navbar')
        </header>

        {{-- Page content --}}
        <main class="mt-16 flex-grow mx-20 mb-28">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('layouts.footer')

    </div>
</body>

</html>