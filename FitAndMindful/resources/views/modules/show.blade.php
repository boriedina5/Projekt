@extends('layouts.app')

@section('content')

<div class="flex justify-center mt-16 mb-24">
    <div class="w-full max-w-4xl">
        <h1 class="text-4xl font-cardo font-bold text-center text-white mb-20 
                drop-shadow-[0_4px_10px_rgba(0,0,0,0.5)]">
            {{ $module['title'] }}
        </h1>
    </div>
</div>

<div class="flex justify-center">
    <!-- RELATIVE: a gomb ehhez fog igazodni -->
    <div class="grid grid-cols-1 gap-[10rem] w-full max-w-4xl relative">

        @foreach ($module['weeks'] as $week)
            <div class="bg-white border-2 border-[#6b4e71] rounded-3xl p-10 shadow-md">
                <h2 class="text-3xl font-cardo font-bold text-black mb-2 text-center">
                    {{ $week['title'] }}
                </h2>

                <p class="text-xl font-cardo text-black mb-6 text-center">
                    {{ $week['week'] }}
                </p>

                @foreach ($week['content'] as $paragraph)
                    <p class="text-lg leading-relaxed text-black mb-4">
                        {{ $paragraph }}
                    </p>
                @endforeach
            </div>
        @endforeach

        <!-- A GOMB  -->
        <a href="{{ route('mental-health') }}"
   class="absolute -bottom-24 right-2
          w-12 h-12 flex items-center justify-center 
          rounded-full bg-white shadow-md border border-gray-200 
          hover:bg-gray-100 transition">
    <svg class="w-7 h-7" fill="none" stroke="#c2c5aa" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
    </svg>
</a>


    </div>
</div>

@endsection
