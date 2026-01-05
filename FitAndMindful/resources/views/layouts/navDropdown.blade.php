<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'App') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>

<body class="bg-[#656d4a] min-h-screen text-[#f5f5f5]">
<!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full h-16 bg-[#656d4a] flex items-center px-6 z-10 shadow-sm">
    
        <!-- spacer, so dropdown is on the left -->
        <div class="flex-1"></div>

        <!-- Dropdown button -->
        <button id="menuBtn">
            <!-- Dropdown icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav>

<!-- Overlay when opening dropdown -->
    <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-30"></div>

<!-- Dropdown menu -->
    <div id="menu" class=" hidden fixed top-0 right-0 bottom-0 w-3/4 sm:w-2/3 md:w-1/2 lg:w-1/5 min-w-[260px] bg-[#656d4a] text-[#c2c5aa] z-40 overflow-y-auto">
        
        <div class="p-6 space-y-4">
            <a href="{{ route(name: 'home') }}" class="block px-2 py-1 rounded {{ request()->routeIs('home') ? 'text-[#f5f5f5] font-bold' : 'text-[#c2c5aa] hover:text-[#f5f5f5] font-bold' }}">Home</a>
            @for ($i = 1; $i <= 25; $i++)
                <a href="{{ route(name: 'test') }}" class="block px-2 py-1 rounded {{ request()->routeIs('test') ? 'text-[#f5f5f5] font-bold' : 'text-[#c2c5aa] hover:text-[#f5f5f5] font-bold' }}">Test</a>
            @endfor
        </div>
    </div>
    
<!-- Page content -->
    <main class="pt-16 flex-1">
        <div class="">
            @yield('content')
        </div>
    </main>

<!-- Footer -->
    <footer class="bg-[#cccccb] text-black">
        <div class=" mx-auto w-full px-4 sm:px-6 md:px-10 lg:px-[6.666vw] py-8 flex flex-col justify-end">
            <h1 class="text-lg font-bold mb-2 text-left text-[28px]">Connection</h1>
            <p class="text-left text-[18px]">About us</p>
            <p class="text-left text-[18px]">Terms and policy</p>
            <p class="text-left text-[18px]">Support:</p>
            <p class="text-left text-[18px] text-blue-600">Fit&Mindful.support@gmail.com</p>
            <p class="mt-2 text-center text-[18px]">Fit&Mindful©</p>
        </div>
    </footer>

</body>

</html>
