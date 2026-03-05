@extends('layouts.app')

@section('content')

        <!-- Top Section: Left Text + Right Images -->
        <div class="flex flex-col lg:flex-row items-start justify-between">

            <!-- Left: Text Content -->
            <div class="flex flex-col items-start">

                <!-- Invisible Logo (kept for structure if needed) -->
                <div class="flex items-center invisible">
                    <img src="{{ asset('images/Icons/FiT&Mindful logo.png') }}" alt="Logo" class="w-[28vw] max-w-[250px]" />
                    <h1 class="text-[#c2c5aa] text-[25.7px] font-anton transform scale-[1.2]">FIT&MINDFUL</h1>
                </div>

                <!-- Main Heading -->
                <div class="w-[55vw]">
                    <div class="text-[#c2c5aa] text-center flex flex-col w-full">
                        <h1 class="text-[125px] font-anton italic text-[#f5f5f5] leading-[1.1]">
                            BE YOUR BEST
                        </h1>
                        <p class="text-[34px] text-[#b6ad90] font-cardo font-bold mb-10 ml-2 w-full leading-[1.2]">
                            APP FOR YOUR PHYSICAL MENTAL<br>HEALTH
                        </p>
                        <button
                            class="bg-[#f5f5f5] text-[#656d4a] rounded-[50px] text-[16px] px-16 py-6 self-center font-semibold">
                            SIGN IN
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right: Images -->
            <div class="flex flex-col mr-2">
                <img src="{{ asset('images/HomePage/workout.jpg') }}" alt="Large Image"
                    class="w-[calc(100%-1vw)] h-auto object-cover rounded-[1.5rem] mt-14" />

                <div class="flex gap-[1vw] mt-6">
                    <img src="{{ asset('images/HomePage/diet.jpg') }}"
                        class="w-[calc(50%-1vw)] h-[18vw] object-cover rounded-[1.5rem]" />
                    <img src="{{ asset('images/HomePage/journal.jpg') }}"
                        class="w-[calc(50%-1vw)] h-[18vw] object-cover rounded-[1.5rem] object-bottom" />
                </div>
            </div>
        </div>

        <!-- 2. Slide: Our Purpose -->
        <div class="relative mt-48 ml-32">

            <!-- Text -->
            <div class="max-w-[18vw] transform scale-[1.2]">
                <h2 class="font-cardo text-[#b6ad90] text-[47px] mb-10 font-bold"
                    style="text-shadow: 2px 2px 0px rgba(182, 173, 144, 0.4);">
                    Our Purpose
                </h2>
                <p class="font-hk text-[28px] text-[#f5f5f5]">
                    Health is important<br>
                    to us, and our goal is<br>
                    to help people<br>
                    maintain and<br>
                    improve their mental<br>
                    and physical health.
                </p>
            </div>

            <!-- Images -->
            <div class="absolute top-0 left-[45%] -translate-x-[32px] -translate-y-[45px]">
                <img src="{{ asset('images/HomePage/workoutPurpose.png') }}"
                    class="w-[285px] h-[390px] object-cover rounded-[1.5rem]" />
            </div>

            <div class="absolute top-[10rem] left-[74%] -translate-x-[32px] -translate-y-[45px]">
                <img src="{{ asset('images/HomePage/MentalHealthPurpose.jpg') }}"
                    class="w-[285px] h-[390px] object-cover rounded-[1.5rem]" />
            </div>
        </div>

        <!-- 3. Slide: What We Offer -->
        <div class="relative mt-80 w-full flex flex-col items-center">
            <h1 class="font-anton text-[90px] text-[#f5f5f5] mb-24 text-center">
                WHAT WE OFFER?
            </h1>

            <div class="grid grid-cols-3 gap-x-[6vw] gap-y-20 justify-items-center w-full max-w-[1600px]">

                <!-- Row 1 cards -->
                <!-- foreach image, writes this card, insert image and its text -->
                @foreach ([
                    ['img' => 'WokoutPlansOffer.png', 'text' => 'Workout Plans', 'source' => 'workouts'],
                    ['img' => 'DietOffer.jpg', 'text' => 'Healthy receipes', 'source' => 'recipes'],
                    ['img' => 'MentalHealthOffer.jpg', 'text' => 'Mental Health', 'source' => 'MentalHealth']
                ] as $image)
                    <a href={{ $image['source'] }} class="flex flex-col items-center">
                        <img src="{{ asset('images/HomePage/'.$image['img']) }}"
                            class="w-[300px] h-[420px] object-cover rounded-[1.5rem]" />
                        <p class="font-hk text-[28px] text-[#f5f5f5] mt-4 text-center font-semibold">
                            {{ $image['text'] }}
                        </p>
                    </a>
                @endforeach

                <!-- Row 2 cards -->
                <div class="col-span-3 flex justify-center gap-[12vw] mt-20">
                    @foreach ([
                        ['img' => 'large-AdobeStock_334093559.jpeg', 'text' => 'Food Diary', 'source' => 'foodDiary'],
                        ['img' => 'journalOffer.jpg', 'text' => 'Journal', 'source' => 'journal']
                    ] as $image)
                        <a href="#" class="flex flex-col items-center">
                            <img src="{{ asset('images/HomePage/'.$image['img']) }}"
                                class="w-[300px] h-[420px] object-cover rounded-[1.5rem]" />
                            <p class="font-hk text-[28px] text-[#f5f5f5] mt-4 text-center font-semibold">
                                {{ $image['text'] }}
                            </p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

@endsection