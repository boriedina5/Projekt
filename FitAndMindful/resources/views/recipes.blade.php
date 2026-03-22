@extends('layouts.app')
@section('content')
<div class="flex justify-center min-h-screen py-16">
    <div class="flex flex-col gap-10 w-full max-w-3xl px-4">

        @foreach ($recipes as $recipe)
        <a href="{{ route('recipe.show', ['name' => Str::slug($recipe->name)]) }}">
            <div class="bg-[#f5f5f5] rounded-[50px] p-8 flex flex-row items-center justify-between shadow-sm">
                
                <div class="flex-1 pr-6">
                    <h2 class="font-cardo text-2xl font-bold text-[#000000] uppercase mb-1">
                        {{ $recipe->name }}
                    </h2>
                    
                    <p class="font-cardo text-lg text-[#000000] font-bold border-b border-[#c2c5aa] inline-block mb-4">
                        Nutritional values
                    </p>

                    <div class="font-cardo text-[#000000] text-lg space-y-1">
                        <p><strong>Kcal:</strong> {{ $recipe->recipe_kcal }}</p>
                        <p><strong>Carb:</strong> {{ $recipe->recipe_ch }}g</p>
                        <p><strong>Protein:</strong> {{ $recipe->recipe_protein }}g</p>
                        <p><strong>Fats:</strong> {{ $recipe->recipe_fat }}g</p>
                    </div>

                    <div class="mt-6 opacity-20">
                        <svg class="w-8 h-8 fill-current text-[#c2c5aa]" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                    </div>
                </div>

                <div class="w-48 h-48 shrink-0">
                    {{-- A kép nevét generáljuk a recept nevéből --}}
                    <img src="{{ asset('images/ReceipetPictures/' . Str::slug($recipe->name) . '.png') }}" 
                         class="rounded-[1.5rem] w-full h-full object-cover shadow-md"
                         alt="{{ $recipe->name }}"/>
                </div>

            </div>
        </a>
        @endforeach

    </div>
</div>
@endsection