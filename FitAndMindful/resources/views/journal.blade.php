@extends('layouts.app')

@section('content')
<div class="min-h-screen px-6 py-12" style="background-color: #656d4a !important;">

    {{-- Új bejegyzés gomb: Tökéletesen középre igazított "+" jellel --}}
    <div class="flex justify-center mb-12">
        <a href="{{ route('journal.create') }}"
           class="w-16 h-16 flex items-center justify-center bg-white/30 rounded-full border-2 border-white/20 hover:bg-white/40 transition shadow-sm group">
            <span class="text-4xl text-white/80 font-light leading-none" style="margin-top: -4px;">+</span>
        </a>
    </div>

    {{-- Journals felirat és elválasztó vonal --}}
    <div class="max-w-6xl mx-auto mb-10">
        <h1 class="text-white font-cardo text-2xl mb-2 ml-2">Journals</h1>
        <hr class="border-white/50">
    </div>

    {{-- Kártyák: Változatlanul hagyva --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        @foreach($journals as $journal)
            <a href="{{ route('journal.edit', $journal->id) }}"
               class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition flex flex-col items-center">
                <p class="font-cardo text-xl text-black mb-4">{{ $journal->date }}</p>
                <svg class="w-10 h-10 text-[#8a9a5b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15.232 5.232l3.536 3.536M4 20h4l10-10-4-4L4 16v4z"/>
                </svg>
            </a>
        @endforeach
    </div>

</div>
@endsection