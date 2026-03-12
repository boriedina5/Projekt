@extends('layouts.app')

@section('content')

<div class="flex flex-col gap-6 items-center justify-center text-center">

    <h1 class="text-[45px] font-cardo text-[#c2c5aa] mb-10">
        Reset Password
    </h1>

    <p class="text-[22px] font-hk text-[#c2c5aa] max-w-[40rem] mb-6">
        Enter your email and choose a new password.
    </p>

    <form method="POST" action="{{ route('password.update') }}" class="flex flex-col gap-6 items-center">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <!-- Email -->
        <input id="email" type="email" name="email" placeholder="Email Address"
            class="rounded-[50px] text-[#c2c5aa] placeholder-[#c2c5aa] text-[20px] border px-8 py-5 font-hk w-[40rem]"
            value="{{ $email ?? old('email') }}" required autofocus>

        @error('email')
            <span class="text-red-500 text-[18px] font-hk">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <!-- Password -->
        <input id="password" type="password" name="password" placeholder="New Password"
            class="rounded-[50px] text-[#c2c5aa] placeholder-[#c2c5aa] text-[20px] border px-8 py-5 font-hk w-[40rem]" required>

        @error('password')
            <span class="text-red-500 text-[18px] font-hk">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <!-- Confirm Password -->
        <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password"
            class="rounded-[50px] text-[#c2c5aa] placeholder-[#c2c5aa] text-[20px] border px-8 py-5 font-hk w-[40rem]" required>

        <!-- Submit -->
        <button type="submit"
            class="bg-[#f5f5f5] text-[#656d4a] rounded-[50px] text-[28px] px-12 py-4 self-center font-cardo">
            Reset Password
        </button>

    </form>

</div>

@endsection