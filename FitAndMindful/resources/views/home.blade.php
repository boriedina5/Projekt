@extends('layouts.navDropdown')

@section('content')

    <div class="mr-20 ml-10 mb-36">

        <div class="flex items-start justify-between">
            <!-- Left: Logo + Text -->
            <div class="flex flex-col items-start">
                <div class="flex items-center">
                    <img src="{{ asset('images/Icons/FiT&Mindful logo.png') }}" alt="Logo" class="w-[28vw] max-w-[250px]" />
                    <h1 class="text-[#c2c5aa] text-[25.7px] font-anton transform scale-[1.2]">FIT&MINDFUL</h1>
                </div>

                <div class="w-[55vw]">
                    <div class="text-[#c2c5aa] text-center flex flex-col w-full">
                        <h1 class="text-[96px] font-anton italic text-[#f5f5f5] transform scale-y-[1.3] scale-x-[1.3]">BE YOUR BEST</h1>
                        <p class="text-[24px] text-[#b6ad90] font-cardo font-bold mb-10 ml-2 w-full transform scale-y-[1.4] scale-x-[1.4]">APP FOR YOUR PHYSICAL MENTAL<br>HEALTH</p>
                        <button class="bg-[#f5f5f5] text-[#656d4a] rounded-[50px] text-[16px] px-16 py-6 self-center font-semibold">SIGN IN</button>
                    </div>
                </div>
            </div>

            <!-- Right: Images -->
            <div class="flex flex-col mr-2">
                <img src="{{ asset('images/HomPage/workout.jpg') }}" alt="Large Image"
                    class="w-[calc(100%-1vw)] h-auto object-cover rounded-[1.5rem] mt-14" />

                <div class="mt-6"></div>

                <div class="flex gap-[1vw]">
                    <img src="{{ asset('images/HomPage/diet.jpg') }}"
                        class="w-[calc(50%-1vw)] h-[18vw] object-cover rounded-[1.5rem]" />
                    <img src="{{ asset('images/HomPage/journal.jpg') }}"
                        class="w-[calc(50%-1vw)] h-[18vw] object-cover rounded-[1.5rem] object-bottom" />
                </div>
            </div>
        </div>

        <div class="relative mt-48 ml-32">
            <div class="max-w-[18vw] transform scale-[1.2]">
                <h2 class="font-cardo text-[#b6ad90] text-[47px] mb-10 font-bold"
                    style="text-shadow: 2px 2px 0px rgba(182, 173, 144, 0.4);">Our Purpose</h2>
                <p class="font-hk text-[28px] text-[#f5f5f5]">
                    Health is important<br>to us, and our goal is<br>to help people<br>maintain and<br>improve their mental<br>and physical health.
                </p>
            </div>

            <div class="absolute top-0 left-[45%]">
                <img src="{{ asset('images/HomPage/workoutPurpose.png') }}"
                    class="w-[220px] h-[300px] object-cover rounded-[1.5rem] trasnforom scale-[1.3]"/>
            </div>

            <div class="absolute top-0 left-[74%] mt-40">
                <img src="{{ asset('images/HomPage/MentalHealthPurpose.jpg') }}"
                    class="w-[220px] h-[300px] object-cover rounded-[1.5rem] trasnform scale-[1.3]" />
            </div>
        </div>

    <div class="relative mt-80 w-full flex flex-col items-center">
        <!-- Centered H1 -->
        <h1 class="font-anton text-[90px] text-[#f5f5f5] mb-24 text-center">WHAT WE OFFER?</h1>

        <!-- Images Grid -->
        <div class="grid grid-cols-3 gap-x-[6vw] gap-y-20 justify-items-center w-full max-w-[1600px]">
            <!-- First row: 3 images -->
            <a href="#" class="flex flex-col items-center transform scale-[1.2]">
                <img src="{{ asset('images/HomPage/WokoutPlansOffer.png') }}" class="w-[250px] h-[350px] object-cover rounded-[1.5rem]" />
                <p class="font-hk text-[28px] text-[#f5f5f5] mt-4 text-center font-semibold">Workout Plans</p>
            </a>

            <a href="#" class="flex flex-col items-center transform scale-[1.2]">
                <img src="{{ asset('images/HomPage/DietOffer.jpg') }}" class="w-[250px] h-[350px] object-cover rounded-[1.5rem]" />
                <p class="font-hk text-[28px] text-[#f5f5f5] mt-4 text-center font-semibold">Healthy receipes</p>
            </a>

            <a href="#" class="flex flex-col items-center transform scale-[1.2]">
                <img src="{{ asset('images/HomPage/MentalHealthOffer.jpg') }}" class="w-[250px] h-[350px] object-cover rounded-[1.5rem]" />
                <p class="font-hk text-[28px] text-[#f5f5f5] mt-4 text-center font-semibold">Mental Health</p>
            </a>

            <!-- Second row: 2 images centered -->
            <div class="col-span-3 flex justify-center gap-[12vw] mt-20">
                <a href="#" class="flex flex-col items-center transform scale-[1.2]">
                    <img src="{{ asset('images/HomPage/large-AdobeStock_334093559.jpeg') }}" class="w-[250px] h-[350px] object-cover rounded-[1.5rem]" />
                    <p class="font-hk text-[28px] text-[#f5f5f5] mt-4 text-center font-semibold">Food Diary</p>
                </a>

                <a href="#" class="flex flex-col items-center transform scale-[1.2]">
                    <img src="{{ asset('images/HomPage/journalOffer.jpg') }}" class="w-[250px] h-[350px] object-cover rounded-[1.5rem]" />
                    <p class="font-hk text-[28px] text-[#f5f5f5] mt-4 text-center font-semibold">Journal</p>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
