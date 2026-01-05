@extends('layouts.navDropdown')

@section('content')

<div class="flex mt-8 px-16 gap-8 items-start">

    <!-- Left: Logo + Text -->
    <div class="flex flex-col items-start">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/FiT&Mindful logo.png') }}" alt="Logo" class="w-[28vw] max-w-[160px] aspect-square object-contain" />
            <h1 class="font-semibold text-[#c2c5aa] text-[clamp(18px,5vw,25.7px)] leading-tight">Fit&Mindful</h1>
        </div>

        <div class="mt-4 max-w-[75vw] text-[#c2c5aa] ml-16 text-center flex flex-col gap-4">
            <h2 class="text-[96px] font-bold leading-tight">Be your best</h2>
            <p class="text-[24px] leading-relaxed">App for your physical and mental<br>health</p>
            <button class="bg-white text-[#000] rounded-xl text-[16px] px-6 py-3 self-center">Sign in</button>
        </div>
    </div>

<!-- Right: Images -->
    <div class="flex flex-col gap-4 mt-4">
        <!-- Top large image -->
        <img src="{{ asset('images/workout.jpg') }}" alt="Large Image" class="w-[28vw] h-[28vw] object-cover rounded-lg" />
        
        <!-- Bottom row: two smaller images -->
        <div class="flex gap-4">
            <img src="{{ asset('images/diet.jpg') }}" alt="Small Image 1" class="w-[13.8vw] h-[13.8vw] object-cover rounded-lg" />
            <img src="{{ asset('images/journal.jpg') }}" alt="Small Image 2" class="w-[13.8vw] h-[13.8vw] object-cover rounded-lg" />
        </div>
    </div>

</div>




</div>






@endsection

