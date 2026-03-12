@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-6 items-center justify-between">
        @csrf

        <h1 class="text-[45px] font-cardo text-[#c2c5aa] mb-10">Registration</h1>

        <!-- Name -->
        <div class="flex flex-col items-center w-[40rem]">
            <input id="name" type="text" name="name" placeholder="Username" value="{{ old('name') }}" required
                autocomplete="name" autofocus
                class="rounded-[50px] text-[#c2c5aa] placeholder-[#c2c5aa] text-[20px] border px-8 py-5 font-hk w-full @error('name') border-red-500 @enderror">

            @error('name')
                <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div class="flex flex-col items-center w-[40rem]">
            <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required
                autocomplete="email"
                class="rounded-[50px] text-[#c2c5aa] placeholder-[#c2c5aa] text-[20px] border px-8 py-5 font-hk w-full @error('email') border-red-500 @enderror">

            @error('email')
                <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="flex flex-col items-center w-[40rem]">
            <input id="password" type="password" name="password" placeholder="Password" required autocomplete="new-password"
                class="rounded-[50px] text-[#c2c5aa] placeholder-[#c2c5aa] text-[20px] border px-8 py-5 font-hk w-full @error('password') border-red-500 @enderror">

            @error('password')
                <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password Confirmation -->
        <div class="flex flex-col items-center w-[40rem]">
            <input id="password-confirm" type="password" name="password_confirmation" placeholder="Password Confirmation"
                required autocomplete="new-password"
                class="rounded-[50px] text-[#c2c5aa] placeholder-[#c2c5aa] text-[20px] border px-8 py-5 font-hk w-full">
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="bg-[#f5f5f5] text-[#656d4a] rounded-[50px] text-[28px] px-12 py-4 self-center font-cardo">
            Registration
        </button>

        <p class="text-[26px] font-hk text-[#c2c5aa] mb-10">
            You already have an account?
            <a href="{{ route('login') }}" class="underline">Sign In</a>
        </p>

    </form>
@endsection