@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="inline-grid grid-flow-row gap-x-10 gap-y-24 mt-16" style="grid-template-columns: repeat(3, 22rem);">

        @foreach ([
            ['img' => 'loseWeight.jpg', 'route' => '', 'row1' => 'PLAN FOR', 'row2' => 'LOSE WEIGHT', 'cardClasses' => '', 'imgClasses' => ''],
            ['img' => 'toneYourBody.jpeg', 'route' => '', 'row1' => 'PLAN FOR', 'row2' => 'TONE YOUR BODY', 'cardClasses' => '', 'imgClasses' => ''],
            ['img' => 'buildMuscles.jpg', 'route' => '', 'row1' => 'PLAN FOR', 'row2' => 'BUILD MUSCLES', 'cardClasses' => '', 'imgClasses' => ''],
            ['img' => 'mobilization.jpg', 'route' => '', 'row1' => '', 'row2' => 'MOBILIZATION', 'cardClasses' => '', 'imgClasses' => ''],
            ['img' => 'morningStretch.jpg', 'route' => '', 'row1' => '', 'row2' => "MORNING\nSTRETCHING", 'cardClasses' => '', 'imgClasses' => ''],
            ['img' => 'dailyMovement.jpg', 'route' => '', 'row1' => '', 'row2' => 'DAILY MOVEMENT', 'cardClasses' => '', 'imgClasses' => 'blur-sm']
        ] as $card)

            <div class="bg-[#f5f5f5] w-88 h-88 text-center flex flex-col p-4 rounded-[50px] {{ $card['cardClasses'] }}">
                <div class="mb-4">
                    <p class="font-cardo text-3xl text-[#c2c5aa]">{{ $card['row1'] }}</p>
                    <p class="font-cardo text-3xl font-bold text-[#c2c5aa] whitespace-pre-line">{{ $card['row2'] }}</p>
                </div>
                
                <a href="{{ $card['route'] }}" class="mt-auto mx-auto w-60 aspect-square block mb-4">
                    <img src="{{ asset('images/Workouts/PlansCover/'.$card['img']) }}"
                         class="rounded-[1.5rem] w-full h-full object-cover {{ $card['imgClasses'] }}"/>
                </a>
            </div>
        @endforeach

    </div>
</div>

@endsection