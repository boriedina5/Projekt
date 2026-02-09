        <div class="flex items-center">
            <img src="/images/Icons/FiT&Mindful logo.png" alt="Logo" class="max-w-[8vw]" />
            <h1 class="text-[#c2c5aa] text-[30.8px] font-anton">FIT&MINDFUL</h1>
        </div>
        <nav class="w-full bg-[#c2c5aa] text-[#f5f5f5] h-[67.2px] rounded-[2.4rem] max-w-[1382px] mx-auto">
            <div class="flex justify-center items-center space-x-10 uppercase h-full">
                <a href="{{ route('home') }}" class="font-cardo text-[19px] font-bold">Homepage</a>
                <a href="{{ route('workouts') }}" class="font-cardo text-[19px] font-bold">Workouts</a>
                <a href="{{ route(name: 'workout-diary') }}" class="font-cardo text-[19px] font-bold">Workout Diary</a>
                <a href="{{ route('recipes') }}" class="font-cardo text-[19px] font-bold">Recipes</a>
                <a href="{{ route('food-diary') }}" class="font-cardo text-[19px] font-bold">Food Diary</a>
                <a href="{{ route('journal') }}" class="font-cardo text-[19px] font-bold">Journal</a>
                <a href="{{ route('mental-health') }}" class="font-cardo text-[19px] font-bold">Mental Health</a>
                <a href="{{ route('login') }}" class="font-cardo text-[19px] font-semibold">Sign In</a>
            </div>
        </nav>