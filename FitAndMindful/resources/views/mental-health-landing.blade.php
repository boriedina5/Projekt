@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="inline-grid grid-flow-row gap-x-10 gap-y-24 mt-16" style="grid-template-columns: repeat(2, 22rem);">

        @foreach ([
            ['img' => 'selfAssessment.jpg', 'route' => route('modules.show', 'self-assessment'), 'row1' => '', 'row2' => 'SELF-ASSESSMENT', 'cardClasses' => '', 'imgClasses' => ''],
            ['img' => 'positivity.jpg', 'route' => '', 'row1' => '', 'row2' => 'POSITIVITY', 'cardClasses' => '', 'imgClasses' => 'blur-sm'],
            ['img' => 'emIn.jpg', 'route' => '', 'row1' => '', 'row2' => "EMOTIONAL\nINTELLIGENCE", 'cardClasses' => '', 'imgClasses' => 'blur-sm'],
            ['img' => 'selfReflection.jpg', 'route' => '', 'row1' => '', 'row2' => 'SELF-REFLECTION', 'cardClasses' => '', 'imgClasses' => 'blur-sm'],
            ['img' => 'mindfulness.jpg', 'route' => '', 'row1' => '', 'row2' => 'MINDFULNESS', 'cardClasses' => '', 'imgClasses' => 'blur-sm']
        ] as $card)


            <div class="bg-[#f5f5f5] w-88 h-88 text-center flex flex-col p-4 rounded-[50px]  {{ $card['cardClasses'] }}">
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