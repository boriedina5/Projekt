@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-6 items-center justify-between">
        @csrf

        <h1 class="text-[45px] font-cardo text-[#c2c5aa] mb-10">Sign In</h1>

        <!-- Email -->
        <div class="flex flex-col items-center w-[40rem]">
            <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required
                autocomplete="email" autofocus
                class="rounded-[50px] text-[#c2c5aa] placeholder-[#c2c5aa] text-[20px] border px-8 py-5 font-hk w-full @error('email') border-red-500 @enderror">

            @error('email')
                <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="flex flex-col items-center w-[40rem]">
            <input id="password" type="password" name="password" placeholder="Password" required
                autocomplete="current-password"
                class="rounded-[50px] text-[#c2c5aa] placeholder-[#c2c5aa] text-[20px] border px-8 py-5 font-hk w-full @error('password') border-red-500 @enderror">

            @error('password')
                <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
            @enderror
        </div>

        <!-- Forgot password -->
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-[#c2c5aa] underline text-[18px] font-hk">
                Forgot your password?
            </a>
        @endif

        <!-- Submit Button -->
        <button type="submit"
            class="bg-[#f5f5f5] text-[#656d4a] rounded-[50px] text-[28px] px-12 py-4 self-center font-cardo">
            Sign In
        </button>

        <!-- Remember Me -->
        <div class="flex items-center gap-3 text-[#c2c5aa] font-hk text-[18px]">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Remember Me</label>
        </div>

        <!-- Register link -->
        <p class="text-[26px] font-hk text-[#c2c5aa] mb-10">
            You don't have an account?
            <a href="{{ route('register') }}" class="underline">Register</a>
        </p>

    </form>

@endsection