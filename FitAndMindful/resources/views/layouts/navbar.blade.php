<div class="flex items-center gap-2 sm:gap-3 md:gap-4">
    <img src="/images/Icons/FiT&Mindful logo.png" alt="Logo" 
         class="w-12 sm:w-12 md:w-16 lg:w-20 xl:w-24" />
    <h1 class="text-[#c2c5aa] font-anton 
        text-xl sm:text-2xl md:text-2xl lg:text-3xl xl:text-4xl">
        FIT&MINDFUL
    </h1>
</div>

<nav class="w-full max-w-[86rem] mx-auto bg-[#c2c5aa] text-[#f5f5f5] 
            p-3 sm:p-4 md:p-5 lg:p-6 rounded-xl sm:rounded-2xl lg:rounded-[3rem]">

    <div class="flex flex-wrap justify-center items-center 
        gap-2 sm:gap-3 md:gap-4 lg:gap-6 
        uppercase">

        <a href="{{ route('home') }}"
            class="font-cardo font-bold text-base sm:text-base md:text-lg lg:text-xl">Homepage</a>
        <a href="{{ route('workouts.index') }}"
            class="font-cardo font-bold text-base sm:text-base md:text-lg lg:text-xl">Workouts</a>
        <a href="{{ route('workout-diary') }}"
            class="font-cardo font-bold text-base sm:text-base md:text-lg lg:text-xl">Workout Diary</a>
        <a href="{{ route('recipes') }}"
            class="font-cardo font-bold text-base sm:text-base md:text-lg lg:text-xl">Recipes</a>
        <a href="{{ route('food-diary') }}"
            class="font-cardo font-bold text-base sm:text-base md:text-lg lg:text-xl">Food Diary</a>
        <a href="{{ route('journal') }}"
            class="font-cardo font-bold text-base sm:text-base md:text-lg lg:text-xl">Journal</a>
        <a href="{{ route('mental-health') }}"
            class="font-cardo font-bold text-base sm:text-base md:text-lg lg:text-xl">Mental Health</a>

        @guest
            <a href="{{ route('login') }}"
                class="font-cardo font-bold text-base sm:text-base md:text-lg lg:text-xl uppercase">Sign In</a>
        @else
            <form method="POST" action="{{ route('logout') }}" class="flex items-center">
                @csrf
                <button type="submit" class="font-cardo font-bold text-base sm:text-base md:text-lg lg:text-xl uppercase">
                    Logout
                </button>
            </form>
        @endguest
    </div>
</nav>