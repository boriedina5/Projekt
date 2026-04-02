@extends('layouts.app')

@section('content')
    @php $hideNavbar = true; @endphp
    @php $hideFooter = true; @endphp
    <script>
        window.exercises = {!! json_encode($exercises) !!};
        window.mainUrl = {!! json_encode(route('workouts.index')) !!};
        window.planSets = {!! json_encode($plan->sets ?? 1) !!};
        window.currentPlanId = {!! json_encode($plan->id ?? null) !!};
    </script>

    <div class="planContent">

        {{-- Exercise list --}}
        <h1 class="text-center text-5xl font-bold text-[#f5f5f5] font-cardo 
                       mt-6 sm:mt-12 lg:mt-12 mb-4" style="text-shadow: 2px 2px 0px #7a866f">
            {{ $category->name }} - {{ $plan->difficulty }}
            @if ($plan->version !== "Guest")
                - {{ $plan->version }}
            @endif
        </h1>
        <p class="text-center text-2xl text-[#f5f5f5] font-hk mb-12">
            @if($plan->sets && $plan->sets > 0)
                Sets: {{ $plan->sets }}
            @elseif($plan->duration && $plan->duration !== '0')
                {{ $plan->duration }}
            @endif
        </p>

        {{-- Plan container --}}
        <div class="bg-[#c2c5aa] rounded-[20px] p-6 
                        w-[90vw] sm:w-[70vw] lg:w-[50vw] mx-auto mb-8">
            @foreach($exercises as $exercise)
                <div class="flex items-center mb-4 p-3">
                    @if(str_ends_with($exercise->img, '.mp4'))
                        <video class="w-20 h-20 rounded-lg mr-4 object-cover" muted loop autoplay playsinline>
                            <source src="{{ asset($exercise->img) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @else
                        <img src="{{ asset($exercise->img) }}" class="w-20 h-20 rounded-lg mr-4 object-cover bg-white" />
                    @endif
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

        {{-- Buttons --}}
        <div class="w-[90vw] sm:w-[70vw] lg:w-[50vw] mx-auto flex items-center justify-between mt-5 sm:mt-8 lg:mt-5">
            <a href="{{ url()->previous() }}" class="bg-[#f5f5f5] rounded-full p-5 sm:p-6">
                <svg class="w-8 h-8 text-[#c2c5aa] scale-150" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <button id="startExercise"
                class="bg-[#f5f5f5] rounded-[50px] p-5 sm:p-6 px-12 sm:px-16 text-hk text-[#656d4a] text-1xl">
                Start
            </button>

            <div class="w-16"></div>
        </div>
    </div>

    {{-- Exercise Player --}}
    <div id="exercisePlayer" class="hidden text-center text-[#f5f5f5] mt-8 sm:mt-12 lg:mt-12">
        <div class="flex flex-col items-center">
            <img id="exerciseImage" src="" class="w-80 h-80 rounded-[20px] mb-4 hidden" />
            <video id="exerciseVideo" class="w-80 h-80 rounded-[20px] mb-4 hidden" muted loop autoplay playsinline>
                <source id="exerciseVideoSource" src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <p id="exerciseName" class="text-2xl mb-2"></p>
            <p id="exerciseQuantity" class="text-xl mb-4"></p>
            <p id="exerciseSetCounter" class="text-xl mb-8 font-hk">Set 1/{{ $plan->sets ?? 1 }}</p>

            <div class="w-full flex justify-center">
                <button id="nextStepButton" class="bg-[#f5f5f5] rounded-full p-6">
                    <svg class="w-8 h-8 text-[#c2c5aa] scale-150" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Rest Screen --}}
    <div id="restScreen" class="hidden text-center text-[#f5f5f5] mt-8 sm:mt-12 lg:mt-12">
        <div class="flex flex-col items-center">
            <img src="{{ asset('images\Workouts\Exercieses\rest.png') }}" class="h-80 mb-4" />
            <div class="text-black mb-2 p-8 sm:p-10 px-20 sm:px-40 bg-[#f5f5f5] rounded-lg">
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

    @vite('resources/js/exercisePlayer.ts')
@endsection