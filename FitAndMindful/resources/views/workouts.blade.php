@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="grid 
                gap-x-4 sm:gap-x-6 lg:gap-x-8   <!-- responsive horizontal gap -->
                gap-y-16 mt-16
                grid-cols-1 sm:grid-cols-2 lg:grid-cols-3
                justify-items-center">

        @foreach($categories as $category)
            @php
                $meta = $categoryMeta[$category->name] ?? [];
            @endphp

            <!-- Entire card as link -->
            <a href="{{ route('plan.select', ['categoryName' => $category->name]) }}"
               class="block w-72 h-72 sm:w-80 sm:h-80 lg:w-[22rem] lg:h-[22rem]">
                <div class="bg-[#f5f5f5] flex flex-col justify-between p-4 rounded-[50px] h-full">

                    <!-- Text section -->
                    <div class="text-center space-y-1">
                        @if(!empty($meta['row1']))
                            <p class="font-cardo text-2xl sm:text-2xl lg:text-3xl text-[#c2c5aa]">
                                {{ $meta['row1'] }}
                            </p>
                        @endif
                        <p class="font-cardo font-bold text-2xl sm:text-2xl lg:text-3xl text-[#c2c5aa]">
                            {{ strtoupper($category->name) }}
                        </p>
                    </div>

                    <!-- Image section (scaled proportionally) -->
                    <div class="mx-auto w-[70%] aspect-square">
                        <img src="{{ asset('images/Workouts/PlansCover/' . ($meta['img'] ?? 'default.jpg')) }}"
                             class="rounded-[1.5rem] w-full h-full object-cover" />
                    </div>

                </div>
            </a>

        @endforeach

    </div>
</div>
@endsection