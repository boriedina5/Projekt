@extends('layouts.app')

@section('content')
<div class="min-h-screen px-6 py-12 flex justify-center items-center" style="background-color: #656d4a !important;">

    <div class="bg-[#c2c5aa] w-full max-w-[45rem] rounded-[1.5rem] p-8 shadow-2xl flex flex-col items-stretch">

        <h1 class="text-2xl font-cardo mt-4 mb-8 text-center text-gray-900 font-bold uppercase tracking-widest">
            {{ isset($journal) ? $journal->date : 'New Journal Entry' }}
        </h1>

        {{-- Globális hibaüzenet blokk (opcionális, ha az összes hibát egy helyen is látni akarod) --}}
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-lg text-sm">
                <strong>Oops</strong> Please correct the following errors.
            </div>
        @endif

        <form action="{{ isset($journal) ? route('journal.update', $journal->id) : route('journal.store') }}"
              method="POST"
              class="flex flex-col gap-5">

            @csrf
            @if(isset($journal)) @method('PUT') @endif

            {{-- Dátum választó --}}
            @if(!isset($journal))
            <div class="px-2">
                <label class="block font-bold text-[#4a4d3a] mb-1 text-xs uppercase text-center">Select Date</label>
                <input type="date" name="date" value="{{ old('date') }}"
                       class="w-full bg-white border-none rounded-2xl p-3 focus:ring-2 focus:ring-[#656d4a] 
                              text-gray-800 text-center shadow-sm text-sm @error('date') ring-2 ring-red-500 @enderror">
                @error('date') <span class="text-red-600 text-xs mt-1 block text-center">{{ $message }}</span> @enderror
            </div>
            @endif

            <div class="px-2 space-y-4">
                {{-- Grateful mező --}}
                <div>
                    <label class="block font-bold text-[#4a4d3a] mb-1 text-xs px-2">3 things you are grateful for:</label>
                    <textarea name="grateful" rows="3"
                              class="w-full bg-white border-none rounded-2xl p-4 focus:ring-2 focus:ring-[#656d4a] 
                                     text-gray-800 italic resize-none shadow-sm text-sm @error('grateful') ring-2 ring-red-500 @enderror"
                    >{{ old('grateful', $journal->grateful ?? '') }}</textarea>
                    @error('grateful') <span class="text-red-600 text-xs mt-1 px-2 block">{{ $message }}</span> @enderror
                </div>

                {{-- Positive mező --}}
                <div>
                    <label class="block font-bold text-[#4a4d3a] mb-1 text-xs px-2">Positive thing(s) in the day:</label>
                    <textarea name="positive" rows="2"
                              class="w-full bg-white border-none rounded-2xl p-4 focus:ring-2 focus:ring-[#656d4a] 
                                     text-gray-800 italic resize-none shadow-sm text-sm @error('positive') ring-2 ring-red-500 @enderror"
                    >{{ old('positive', $journal->positive ?? '') }}</textarea>
                    @error('positive') <span class="text-red-600 text-xs mt-1 px-2 block">{{ $message }}</span> @enderror
                </div>

                {{-- Negative mező --}}
                <div>
                    <label class="block font-bold text-[#4a4d3a] mb-1 text-xs px-2">Negative thing(s) in the day:</label>
                    <textarea name="negative" rows="2"
                              class="w-full bg-white border-none rounded-2xl p-4 focus:ring-2 focus:ring-[#656d4a] 
                                     text-gray-800 italic resize-none shadow-sm text-sm @error('negative') ring-2 ring-red-500 @enderror"
                    >{{ old('negative', $journal->negative ?? '') }}</textarea>
                    @error('negative') <span class="text-red-600 text-xs mt-1 px-2 block">{{ $message }}</span> @enderror
                </div>

                {{-- Thoughts mező --}}
                <div>
                    <label class="block font-bold text-[#4a4d3a] mb-1 text-xs px-2">Your thoughts:</label>
                    <textarea name="thoughts"
                              class="w-full h-40 bg-white border-none rounded-2xl p-4 focus:ring-2 focus:ring-[#656d4a] 
                                     text-gray-800 resize-none shadow-sm text-sm @error('thoughts') ring-2 ring-red-500 @enderror"
                    >{{ old('thoughts', $journal->thoughts ?? '') }}</textarea>
                    @error('thoughts') <span class="text-red-600 text-xs mt-1 px-2 block">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="w-full flex justify-center items-center gap-6 mt-6">
                <button type="submit" class="bg-[#656d4a] text-white px-6 py-3 rounded-full font-bold shadow-md hover:brightness-90 transition">
                    Save
                </button>
        </form>

        @if(isset($journal))
            <form action="{{ route('journal.delete', $journal->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-[#656d4a] text-white px-6 py-3 rounded-full font-bold shadow-md hover:brightness-90 transition">
                    Delete
                </button>
            </form>
        @else
            <a href="{{ route('journal') }}" class="bg-[#656d4a] text-white px-6 py-3 rounded-full font-bold shadow-md hover:brightness-90 transition text-center flex items-center justify-center">
                Delete
            </a>
        @endif
            </div>
    </div>
</div>
@endsection