<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'App') }}</title>

    {{-- Fonts --}}
    @include('layouts.fonts')

    {{-- Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>

<body class="bg-[#656d4a] min-h-screen flex flex-col text-[#f5f5f5]">

    {{-- Optional logo above navbar --}}
    <div class="h-16">
        @yield('logo')
    </div>

    {{-- Navbar --}}
    @include('layouts.navDropdown')

    {{-- Page content --}}
    <main class="pt-6 flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

</body>
</html>