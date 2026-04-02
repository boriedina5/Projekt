@extends('layouts.app')

@section('content')
<h1 class="text-center text-5xl font-bold text-[#f5f5f5] font-cardo 
           mt-8 sm:mt-12 lg:mt-12 mb-12" 
    style="text-shadow: 2px 2px 0px #7a866f">
    {{ $category->name }}
</h1>

{{-- Difficulty selection --}}
@if(!isset($selectedDifficulty))
    <div class="flex flex-col items-center 
                gap-3 sm:gap-4 lg:gap-4 mt-6 sm:mt-8">
        @foreach($difficulties as $diff)
            <a href="{{ route('plan.select', [
                    'categoryName' => $category->name,
                    'selectedDifficulty' => $diff
                ]) }}">
                <button class="bg-[#f5f5f5] text-[#c2c5aa] rounded-[50px] 
                               text-lg sm:text-2xl lg:text-2xl 
                               px-12 sm:px-16 lg:px-16 
                               py-4 sm:py-6 lg:py-6 
                               w-[70vw] sm:w-[50vw] lg:w-[50vw] 
                               self-center font-semibold mb-6 sm:mb-8 lg:mb-8">
                    {{ strtoupper($diff) }}
                </button>
            </a>
        @endforeach
    </div>
@endif

{{-- Version selection --}}
@if(isset($selectedDifficulty) && count($versions) > 1)
    <div class="flex flex-col items-center 
                gap-3 sm:gap-4 lg:gap-4 mt-6 sm:mt-8">
        @foreach($versions as $version)
            <a href="{{ route('plan.exercises', [
                    'categoryName' => $category->name,
                    'selectedDifficulty' => $selectedDifficulty,
                    'versionName' => $version
                ]) }}">
                <button class="bg-[#f5f5f5] text-[#c2c5aa] rounded-[50px] 
                               text-lg sm:text-2xl lg:text-2xl 
                               px-12 sm:px-16 lg:px-16 
                               py-4 sm:py-6 lg:py-6 
                               w-[70vw] sm:w-[50vw] lg:w-[50vw] 
                               self-center font-semibold mb-6 sm:mb-8 lg:mb-8">
                    {{ $version }}
                </button>
            </a>
        @endforeach
    </div>
@endif

<div class="w-full flex justify-center mt-5">
    <a href="{{ route('workouts.index') }}" class="bg-[#f5f5f5] rounded-full p-6">
        <svg class="w-8 h-8 text-[#c2c5aa] scale-150" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
        </svg>
    </a>
</div>
@endsection