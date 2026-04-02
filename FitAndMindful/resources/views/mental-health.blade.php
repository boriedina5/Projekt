@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="inline-grid grid-flow-row gap-x-10 gap-y-24 mt-16" style="grid-template-columns: repeat(2, 22rem);">

        @foreach ([
    ['img' => 'selfAssessment.jpg', 'route' => route('modules.show', 'self-assessment'), 'row1' => '', 'row2' => 'SELF-ASSESSMENT', 'cardClasses' => '', 'imgClasses' => ''],
    ['img' => 'positivity.jpg', 'route' => route('modules.show', 'positivity'), 'row1' => '', 'row2' => 'POSITIVITY', 'cardClasses' => '', 'imgClasses' => ''],
    ['img' => 'emIn.jpg', 'route' => route('modules.show', 'emotional intelligence'), 'row1' => '', 'row2' => "EMOTIONAL\nINTELLIGENCE", 'cardClasses' => '', 'imgClasses' => ''],
    ['img' => 'selfReflection.jpg', 'route' => route('modules.show', 'self reflection'), 'row1' => '', 'row2' => 'SELF-REFLECTION', 'cardClasses' => '', 'imgClasses' => ''],
    ['img' => 'mindfulness.jpg', 'route' => route('modules.show', 'mindfulness'), 'row1' => '', 'row2' => 'MINDFULNESS', 'cardClasses' => '', 'imgClasses' => '']
    ] as $card)


            <div class="bg-[#f5f5f5] w-88 h-88 text-center flex flex-col p-4 rounded-[50px] {{ $card['cardClasses'] }}">
                <div class="mb-4 min-h-[4.5rem]">
                    <p class="font-cardo text-3xl text-[#c2c5aa]">{{ $card['row1'] }}</p>
                    <p class="font-cardo text-3xl font-bold text-[#c2c5aa] whitespace-pre-line">{{ $card['row2'] }}</p>
                </div>

                <a href="{{ $card['route'] }}" class="mt-auto mx-auto w-60 aspect-square block mb-4">
                    <img src="{{ asset('images/MentalHealth/'.$card['img']) }}"
                         class="rounded-[1.5rem] w-full h-full object-cover {{ $card['imgClasses'] }}"/>
                </a>
            </div>
        @endforeach

    </div>
</div>

@endsection
