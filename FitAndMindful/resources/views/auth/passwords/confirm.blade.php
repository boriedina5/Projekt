@extends('layouts.app')

@section('content')

    <div class="flex flex-col gap-6 items-center justify-center text-center">

        <h1 class="text-[45px] font-cardo text-[#c2c5aa] mb-10">
            Confirm Password
        </h1>

        <p class="text-[22px] font-hk text-[#c2c5aa] max-w-[40rem] mb-6">
            Please confirm your password before continuing.
        </p>

        <form method="POST" action="{{ route('password.confirm') }}" class="flex flex-col gap-6 items-center">
            @csrf

            <!-- Password Input -->
            <input id="password" type="password" name="password" placeholder="Password"
                class="rounded-[50px] text-[#c2c5aa] placeholder-[#c2c5aa] text-[20px] border px-8 py-5 font-hk w-[40rem]"
                required>

            <!-- Error message -->
            @error('password')
                <span class="text-red-500 text-[18px] font-hk">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <!-- Submit Button -->
            <button type="submit"
                class="bg-[#f5f5f5] text-[#656d4a] rounded-[50px] text-[28px] px-12 py-4 self-center font-cardo">
                Confirm Password
            </button>

            <!-- Forgot Password Link -->
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="underline text-[20px] font-hk text-[#c2c5aa]">
                    Forgot Your Password?
                </a>
            @endif
        </form>

    </div>

@endsection