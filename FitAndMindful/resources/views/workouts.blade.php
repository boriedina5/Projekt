@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="inline-grid grid-flow-row gap-x-10 gap-y-24 mt-16" style="grid-template-columns: repeat(3, 22rem);">

        @foreach ([
            ['img' => 'workout.jpg', 'source' => '', 'row1' => 'PLAN FOR', 'row2' => 'LOSE WEIGHT', 'animationClass' => ''],
            ['img' => 'workout.jpg', 'source' => '', 'row1' => 'PLAN FOR', 'row2' => 'TONE YOUR BODY', 'animationClass' => ''],
            ['img' => 'workout.jpg', 'source' => '', 'row1' => 'PLAN FOR', 'row2' => 'BUILD MUSCLES', 'animationClass' => ''],
            ['img' => 'workout.jpg', 'source' => '', 'row1' => '', 'row2' => 'MOBILIZATION', 'animationClass' => ''],
            ['img' => 'workout.jpg', 'source' => '', 'row1' => '', 'row2' => 'MORNING STRETCHING', 'animationClass' => ''],
            ['img' => 'workout.jpg', 'source' => '', 'row1' => '', 'row2' => 'DAILY MOVEMENT', 'animationClass' => '']
        ] as $card)
            <div class="bg-[#f5f5f5] w-88 h-88 text-center flex flex-col p-4 rounded-[50px] {{ $card['animationClass'] }}">
                <div class="mb-4">
                    <p class="font-cardo text-2xl text-[#c2c5aa]">{{ $card['row1'] }}</p>
                    <p class="font-cardo text-2xl font-bold text-[#c2c5aa]">{{ $card['row2'] }}</p>
                </div>
                <a href="{{ $card['source'] }}" class="mt-auto mx-auto w-60 aspect-square block">
                    <img src="{{ asset('images/HomePage/'.$card['img']) }}"
                         class="rounded-[1.5rem] w-full h-full object-cover"/>
                </a>
            </div>
        @endforeach

    </div>
</div>

@endsection