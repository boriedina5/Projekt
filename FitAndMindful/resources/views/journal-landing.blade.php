@extends('layouts.app')

@section('content')
<div class="w-full flex flex-col items-center justify-start text-center px-6 py-20"
     style="background-color: #656d4a !important; min-height: 80vh;">

    <h1 class="text-white font-cardo text-2xl md:text-3xl max-w-2xl leading-snug uppercase tracking-wider mt-10">
        Monitor your emotional state daily so you can be more conscious and better understand what’s happening within you
    </h1>

    <a href="{{ route('login') }}"
       class="mt-6 bg-[#f4f4f4] text-gray-800 font-bold px-12 py-3 rounded-full shadow-sm hover:bg-white transition flex items-center justify-center min-w-[160px]">
        SIGN IN
    </a>

</div>
@endsection
