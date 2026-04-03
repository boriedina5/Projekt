@extends('layouts.app')

@section('content')
    {{-- Hide navbar and footer --}}
    @php $hideNavbar = true; @endphp
    @php $hideFooter = true; @endphp

    {{-- Pass PHP variables to JavaScript --}}
    <script>
        window.exercises = {!! json_encode($exercises) !!}; // List of exercises
        window.mainUrl = {!! json_encode(route('workouts.index')) !!}; // Workouts url to return to
        window.planSets = {!! json_encode($plan->sets ?? 1) !!}; // Total sets in this plan
        window.currentPlanId = {!! json_encode($plan->id ?? null) !!}; // Current plan ID
        window.previousUrl = {!! json_encode(url()->previous()) !!}; // URL user came from
    </script>

    {{-- Plan overview content --}}
    <div class="planContent">

        {{-- Exercise list header --}}
        <h1 class="text-center text-5xl font-bold text-[#f5f5f5] font-cardo 
                   mt-6 sm:mt-12 lg:mt-12 mb-4" style="text-shadow: 2px 2px 0px #7a866f">
            {{ $category->name }} - {{ $plan->difficulty }}
            @if ($plan->version !== "Guest")
                - {{ $plan->version }} {{-- Show plan version if not Guest --}}
            @endif
        </h1>

        {{-- Display sets or duration --}}
        <p class="text-center text-2xl text-[#f5f5f5] font-hk mb-12">
            @if($plan->sets && $plan->sets > 0)
                Sets: {{ $plan->sets }}
            @elseif($plan->duration && $plan->duration !== '0')
                {{ $plan->duration }}
            @endif
        </p>

        {{-- Plan container with exercises --}}
        <div class="bg-[#c2c5aa] rounded-[20px] p-6 w-[90vw] sm:w-[70vw] lg:w-[50vw] mx-auto mb-8">
            @foreach($exercises as $exercise)
                {{-- Each exercise row --}}
                <div class="flex items-center mb-4 p-3">
                    @if(str_ends_with($exercise->img, '.mp4'))
                        {{-- Video player --}}
                        <video class="w-20 h-20 rounded-lg mr-4 object-cover" muted loop autoplay playsinline>
                            <source src="{{ asset($exercise->img) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @else
                        {{-- Image display --}}
                        <img src="{{ asset($exercise->img) }}" class="w-20 h-20 rounded-lg mr-4 object-cover bg-white" />
                    @endif

                    {{-- Exercise name and quantity --}}
                    <div>
                        <p class="font-hk text-1xl text-black">{{ $exercise->exercise_name }}</p>
                        @if($exercise->quantity)
                            <p class="font-hk text-1xl text-black">
                                {{ $exercise->formatted_quantity }}
                            </p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Navigation buttons --}}
        <div class="w-[90vw] sm:w-[70vw] lg:w-[50vw] mx-auto flex items-center justify-between mt-5 sm:mt-8 lg:mt-5">
            {{-- Back button --}}
            <a href="{{ url()->previous() }}" class="bg-[#f5f5f5] rounded-full p-5 sm:p-6">
                <svg class="w-8 h-8 text-[#c2c5aa] scale-150" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
                </svg>
            </a>

            {{-- Start exercise button --}}
            <button id="startExercise"
                class="bg-[#f5f5f5] rounded-[50px] p-5 sm:p-6 px-12 sm:px-16 text-hk text-[#656d4a] text-1xl">
                Start
            </button>

            <div class="w-16"></div> {{-- Spacer --}}
        </div>
    </div>

    {{-- Exercise player screen --}}
    <div id="exercisePlayer" class="hidden text-center text-[#f5f5f5] mt-8 sm:mt-12 lg:mt-12">
        <div class="flex flex-col items-center">
            {{-- Exercise image --}}
            <img id="exerciseImage" src="" class="w-80 h-80 rounded-[20px] mb-4 hidden" />

            {{-- Exercise video --}}
            <video id="exerciseVideo" class="w-80 h-80 rounded-[20px] mb-4 hidden" muted loop autoplay playsinline>
                <source id="exerciseVideoSource" src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            {{-- Exercise name and quantity --}}
            <p id="exerciseName" class="text-2xl mb-2"></p>
            <p id="exerciseQuantity" class="text-xl mb-4"></p>
            <p id="exerciseSetCounter" class="text-xl mb-8 font-hk">Set 1/{{ $plan->sets ?? 1 }}</p>

            {{-- Abort and Next buttons --}}
            <div class="w-full flex justify-center items-center gap-6">
                {{-- Abort button --}}
                <button id="abortExerciseBtn" class="bg-[#f5f5f5] rounded-full p-6">
                    <svg class="w-8 h-8 text-red-500 scale-150" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                {{-- Next exercise button --}}
                <button id="nextStepBtn" class="bg-[#f5f5f5] rounded-full p-6">
                    <svg class="w-8 h-8 text-[#c2c5aa] scale-150" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Rest screen --}}
    <div id="restScreen" class="hidden text-center text-[#f5f5f5] mt-8 sm:mt-12 lg:mt-12">
        <div class="flex flex-col items-center">
            <img src="{{ asset('images\Workouts\Exercieses\rest.png') }}" class="h-80 mb-4" />
            <div class="text-black mb-2 p-8 sm:p-10 px-20 sm:px-40 bg-[#f5f5f5] rounded-lg">
                {{-- Countdown timer --}}
                <p id="restTimer" class="font-hk text-3xl">00:30</p>
            </div>
            <p id="restSetCounter" class="text-xl mb-2 font-hk">Set 1/{{ $plan->sets ?? 1 }}</p>
        </div>
    </div>

    {{-- Finish screen --}}
    <div id="finishScreen" class="hidden text-center text-white mt-8 sm:mt-12 lg:mt-12">
        <div class="flex flex-col items-center">
            <img src="{{ asset('images\Workouts\Exercieses\finish.png') }}" class="h-80 scale-150 rounded-lg" />
        </div>
    </div>

    {{-- Abort modal --}}
    <div id="abortModal" class="hidden fixed inset-0 bg-black/60 flex items-center justify-center z-50">
        <div class="bg-[#c2c5aa] rounded-2xl p-8 w-[80%] max-w-md text-center shadow-lg">

            <p class="text-xl font-hk text-[#656d4a] mb-6">
                End workout and return?
            </p>

            {{-- Cancel or confirm abort --}}
            <div class="flex justify-center gap-6">
                <button id="cancelAbort" type="button" class="px-6 py-3 rounded-full bg-[#7a866f] text-white">
                    Stay
                </button>

                <button id="confirmAbort" type="button" class="px-6 py-3 rounded-full bg-red-500 text-white">
                    Exit
                </button>
            </div>
        </div>
    </div>

    @vite('resources/js/exercisePlayer.ts')
@endsection