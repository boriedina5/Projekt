@extends('layouts.app')

@section('content')
<div class="min-h-screen px-6 py-12 flex justify-center items-center" style="background-color: #656d4a !important;">

    <div class="bg-[#c2c5aa] w-full md:max-w-[70%] rounded-[3rem] p-8 shadow-2xl flex flex-col items-stretch">

        <h1 class="text-2xl font-cardo mt-4 mb-8 text-center text-gray-900 font-bold uppercase tracking-widest">
            {{ isset($journal) ? $journal->date : 'New Journal Entry' }}
        </h1>

        {{-- FŐ FORM --}}
        <form action="{{ isset($journal) ? route('journal.update', $journal->id) : route('journal.store') }}"
              method="POST"
              class="flex flex-col gap-5">

            @csrf
            @if(isset($journal))
                @method('PUT')
            @endif

            @if(!isset($journal))
            <div class="px-2">
                <label class="block font-bold text-[#4a4d3a] mb-1 text-xs uppercase text-center">Select Date</label>
                <input type="date" name="date"
                       class="w-full bg-white border-none rounded-2xl p-3 focus:ring-2 focus:ring-[#656d4a] 
                              text-gray-800 text-center shadow-sm text-sm"
                       required>
            </div>
            @endif

            <div class="px-2 space-y-4">
                <div>
                    <label class="block font-bold text-[#4a4d3a] mb-1 text-xs px-2">3 things you are grateful for:</label>
                    <textarea name="grateful" rows="3"
                              class="w-full bg-white border-none rounded-2xl p-4 focus:ring-2 
                                     focus:ring-[#656d4a] text-gray-800 italic resize-none shadow-sm text-sm"
                              required>{{ $journal->grateful ?? '' }}</textarea>
                </div>

                <div>
                    <label class="block font-bold text-[#4a4d3a] mb-1 text-xs px-2">Positive thing(s) in the day:</label>
                    <textarea name="positive" rows="2"
                              class="w-full bg-white border-none rounded-2xl p-4 focus:ring-2 
                                     focus:ring-[#656d4a] text-gray-800 italic resize-none shadow-sm text-sm"
                              required>{{ $journal->positive ?? '' }}</textarea>
                </div>

                <div>
                    <label class="block font-bold text-[#4a4d3a] mb-1 text-xs px-2">Negative thing(s) in the day:</label>
                    <textarea name="negative" rows="2"
                              class="w-full bg-white border-none rounded-2xl p-4 focus:ring-2 
                                     focus:ring-[#656d4a] text-gray-800 italic resize-none shadow-sm text-sm"
                              required>{{ $journal->negative ?? '' }}</textarea>
                </div>

                <div>
                    <label class="block font-bold text-[#4a4d3a] mb-1 text-xs px-2">Your thoughts:</label>
                    <textarea name="thoughts" rows="2"
                              class="w-full bg-white border-none rounded-2xl p-4 focus:ring-2 
                                     focus:ring-[#656d4a] text-gray-800 resize-none shadow-sm text-sm"
                              required>{{ $journal->thoughts ?? '' }}</textarea>
                </div>
            </div>

            {{-- SAVE + DELETE / CANCEL --}}
            <div class="w-full flex justify-center gap-10 mt-6">

                {{-- SAVE --}}
                <button type="submit" 
                    class="bg-[#656d4a] text-white px-6 py-3 rounded-full font-bold shadow-md 
                           hover:brightness-90 transition">
                    Save
                </button>

                @if(isset($journal))
                    {{-- DELETE (külön form!) --}}
                    </form> {{-- ← Itt zárjuk le a nagy formot, hogy ne legyen nested --}}
                    <form action="{{ route('journal.destroy', $journal->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-[#656d4a] text-white px-6 py-3 rounded-full font-bold shadow-md hover:brightness-90 transition">
                            Delete
                        </button>
                    </form>
                @else
                    {{-- CANCEL --}}
                    </form> {{-- ← új bejegyzésnél itt zárjuk a nagy formot --}}
                    <a href="{{ route('journal.index') }}"
                        class="bg-[#656d4a] text-white px-6 py-3 rounded-full font-bold shadow-md hover:brightness-90 transition">
                        Cancel
                    </a>
                @endif

            </div>

    </div>
</div>
@endsection
