@extends('layouts.app')

@section('content')
{{-- Külső konténer --}}
<div class="flex flex-col justify-center items-center min-h-screen px-4 py-12">
    
    {{-- FEHÉR RECEPT KÁRTYA (DIV) --}}
    <div class="bg-[#f5f5f5] w-full max-w-3xl rounded-[30px] p-8 md:p-12 shadow-lg relative">
        
        <div class="flex flex-col md:flex-row justify-between items-start gap-8">
            <div class="flex-1">
                {{-- Főcím --}}
                <h1 class="font-cardo text-3xl font-bold text-black uppercase mb-6 leading-tight">
                    {{ $recipe->name }}
                </h1>

                {{-- Tápértékek --}}
                <div class="mb-8">
                    <h3 class="font-bold border-b border-black inline-block mb-3 text-lg text-black">
                        Nutritional values
                    </h3>
                    <div class="font-cardo text-lg space-y-1 text-black">
                        <p><strong>Kcal:</strong> {{ $recipe->recipe_kcal }}</p>
                        <p><strong>Carb:</strong> {{ $recipe->recipe_ch }}g</p>
                        <p><strong>Protein:</strong> {{ $recipe->recipe_protein }}g</p>
                        <p><strong>Fats:</strong> {{ $recipe->recipe_fat }}g</p>
                    </div>
                </div>

                {{-- Hozzávalók --}}
                <div class="mb-8">
                    <h3 class="font-bold border-b border-black inline-block mb-3 text-lg text-black">Ingredients</h3>
                    <ul class="list-disc list-inside space-y-1 font-cardo text-lg text-black">
                        @foreach($recipe->ingredients as $ingredient)
                            <li>{{ $ingredient->pivot->amount }} {{ $ingredient->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Recept képe --}}
            <div class="w-full md:w-64 h-64 shrink-0">
                <img src="{{ asset('images/ReceipetPictures/' . Str::slug($recipe->name) . '.png') }}" 
                     class="w-full h-full object-cover rounded-[25px] shadow-sm border border-gray-200" 
                     alt="{{ $recipe->name }}">
            </div>
        </div>

        {{-- Elkészítés --}}
        <div class="mt-4">
            <h3 class="font-bold border-b border-black inline-block mb-4 text-lg text-black">How to make it?</h3>
            <div class="font-cardo text-lg leading-relaxed text-justify whitespace-pre-line text-black">
                {{ $recipe->recipe_description }}
            </div>
        </div>

        {{-- Kedvenc (Like) gomb a kártya bal sarkában --}}
        <div class="mt-8">
            <button class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                <svg class="w-10 h-10 fill-current" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- VISSZALÉPŐ GOMB - A kártya alatt 20px-re (mt-5) --}}
    <div class="w-full max-w-3xl flex justify-end mt-5">
        <a href="{{ route('recipes') }}"
        class="w-12 h-12 flex items-center justify-center rounded-full bg-white shadow-md border border-gray-200 hover:bg-gray-100 transition">
            <svg class="w-7 h-7" fill="none" stroke="#c2c5aa" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
    </div>

</div>
@endsection