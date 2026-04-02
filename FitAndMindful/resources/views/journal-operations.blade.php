@extends('layouts.app')

@section('content')

<div class="flex justify-center mt-16 mb-24">

    <div class="w-full max-w-4xl">

        <!-- Modul címe – FEHÉR -->
       <h1 class="text-4xl font-cardo font-bold text-center !text-white mb-20">
        {{ $module['title'] }}
        </h1>

    </div>

</div>

<!-- A GRIDET KIVISSZÜK A SZŰK WRAPPERBŐL -->
<div class="flex justify-center">
    <div class="grid grid-cols-1 gap-[10rem] w-full max-w-4xl">

        @foreach ($module['weeks'] as $week)
            <div class="bg-white border-2 border-[#6b4e71] rounded-[1.5rem] p-10 shadow-md">

                <!-- Alcím középre igazítva -->
                <h2 class="text-3xl font-cardo font-bold text-black mb-2 text-center">
                    {{ $week['title'] }}
                </h2>

                <!-- Hét száma középre igazítva -->
                <p class="text-xl font-cardo text-black mb-6 text-center">
                    {{ $week['week'] }}
                </p>

                <!-- Tartalom balra igazítva -->
                @foreach ($week['content'] as $paragraph)
                    <p class="text-lg leading-relaxed text-black mb-4">
                        {{ $paragraph }}
                    </p>
                @endforeach

            </div>
        @endforeach

    </div>
</div>

@endsection
