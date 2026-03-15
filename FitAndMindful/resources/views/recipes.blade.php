@extends('layouts.app')

@section('content')

<div class="flex justify-center min-h-screen py-16">
    <div class="flex flex-col gap-10 w-full max-w-3xl px-4">

        <!--'img' - alapveten a public mappát használja-->
        @foreach ([
            ['id' => '','img' => 'wholemeal-pita-bread.png', 'title' => 'WHOLEMEAL PITA BREAD', 'subtitle' => 'Nutritional values in 4 pieces', 'kcal' => '?', 'carb' => '?', 'protein' => '?', 'fats' => '?', 'ingredients' => [], 'instructions' => [] ],
            ['img' => 'riceCakeBars.png', 'title' => 'RICE CALKE BARS', 'subtitle' => 'Nutritional values in 1 portion', 'kcal' => '?', 'carb' => '?', 'protein' => '?', 'fats' => '?'],
            ['img' => 'CreamOfCelery Soup.jpg', 'title' => 'CREAM OF CELERY SOUP', 'subtitle' => 'Nutritional values for 4 days', 'kcal' => '?', 'carb' => '?', 'protein' => '?', 'fats' => '?'],
            ['img' => 'AppleSliceswithPeanutButter&Cinnamon.jpg', 'title' => 'APPLE SLICES WITH PEANUT BUTTER & CINNAMON', 'subtitle' => 'Nutritional values', 'kcal' => '?', 'carb' => '?', 'protein' => '?', 'fats' => '?'],
            ['img' => 'CottageCheese&Berries.jpeg', 'title' => 'COTTAGE CHEESE & BERRIES', 'subtitle' => 'Nutritional values', 'kcal' => '?', 'carb' => '?', 'protein' => '?', 'fats' => '?'],
            ['img' => 'HardBoiledEggs.jpg', 'title' => 'HARD-BOILED EGGS', 'subtitle' => 'Nutritional values', 'kcal' => '?', 'carb' => '?', 'protein' => '?', 'fats' => '?'],
            ['img' => 'Quinoa&ChickpeaSalad.jpg', 'title' => 'QUINOA & CHICKPEA SALAD', 'subtitle' => 'Nutritional values', 'kcal' => '?', 'carb' => '?', 'protein' => '?', 'fats' => '?'],
            ['img' => 'TurkeyandVeggieWrap(Whole Wheat).jpg', 'title' => 'TURKEY AND VEGGIE WRAP (WHOLE WHEAT)', 'subtitle' => 'Nutritional values', 'kcal' => '?', 'carb' => '?', 'protein' => '?', 'fats' => '?'],
            ['img' => 'SimpleLentilSoup.jpg', 'title' => 'SIMPLE LENTIL SOUP', 'subtitle' => 'Nutritional values', 'kcal' => '?', 'carb' => '?', 'protein' => '?', 'fats' => '?'],
            ['img' => 'BakedSalmonwithRoastedAsparagus&Sweet Potato.jpg', 'title' => 'BAKED SALMON WITH ROASTED ASPARAGUS & SWEET POTATO', 'subtitle' => 'Nutritional values', 'kcal' => '?', 'carb' => '?', 'protein' => '?', 'fats' => '?'],
            ['img' => 'ChickenBreastStirFrywithBrownRice.jpg', 'title' => 'CHICKEN BREAST STIR-FRY WITH BROWN RICE', 'subtitle' => 'Nutritional values', 'kcal' => '?', 'carb' => '?', 'protein' => '?', 'fats' => '?'],
            ['img' => 'TurkeyChili(Bean-Based).jpg', 'title' => 'TURKEY CHILI (BEAN-BASED)', 'subtitle' => 'Nutritional values', 'kcal' => '?', 'carb' => '?', 'protein' => '?', 'fats' => '?'],
        ] as $card)
        <a href="{{ route('recipe.show', ['name' => Str::slug($card['title'])]) }}">
            <div class="bg-[#f5f5f5] rounded-[50px] p-8 flex flex-row items-center justify-between shadow-sm">
                
                <div class="flex-1 pr-6">
                    <h2 class="font-cardo text-2xl font-bold text-[#000000] uppercase mb-1">
                        {{ $card['title'] }}
                    </h2>
                    
                    <p class="font-cardo text-lg text-[#000000] font-bold border-b border-[#c2c5aa] inline-block mb-4">
                        {{ $card['subtitle'] }}
                    </p>

                    <div class="font-cardo text-[#000000] text-lg space-y-1">
                        <p><strong>Kcal:</strong> {{ $card['kcal'] }}</p>
                        <p><strong>Carb:</strong> {{ $card['carb'] }}</p>
                        <p><strong>Protein:</strong> {{ $card['protein'] }}</p>
                        <p><strong>Fats:</strong> {{ $card['fats'] }}</p>
                    </div>

                    <div class="mt-6 opacity-20">
                        <svg class="w-8 h-8 fill-current text-[#c2c5aa]" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                    </div>
                </div>

                <div class="w-48 h-48 shrink-0">
                    <img src="{{ asset('images/ReceipetPictures/'.$card['img']) }}" 
                         class="rounded-[1.5rem] w-full h-full object-cover shadow-md"/>
                </div>

            </div>
        </a>
        @endforeach

    </div>
</div>

@endsection