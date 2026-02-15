@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-6 items-center justify-between ">
        @csrf

        <h1 class="text-[45px] font-cardo text-[#c2c5aa] mb-10">Sign In</h1>
        <!-- Email -->
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
            class="rounded-[50px] text-[#c2c5aa] placeholder-[#c2c5aa] text-[20px] border px-8 py-5 font-hk w-[40rem]"
            required>
        <!-- Password -->
        <input type="password" name="password" placeholder="Password"
            class="rounded-[50px] text-[#c2c5aa] placeholder-[#c2c5aa] text-[20px] border px-8 py-5 font-hk w-[40rem]"
            required>
        <!-- Submit Button -->
        <button type="submit"
            class="bg-[#f5f5f5] text-[#656d4a] rounded-[50px] text-[28px] px-12 py-4 self-center font-cardo">
            Sign In
        </button>
        <p class="text-[26px] font-hk text-[#c2c5aa] mb-10">
            You don't have an account?
            <a href="{{ route('register') }}" class="underline">Register</a>
        </p>
    </form>

@endsection