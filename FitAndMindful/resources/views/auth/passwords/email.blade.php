@extends('layouts.app')

@section('content')

    <div class="flex flex-col gap-6 items-center justify-center text-center">

        <h1 class="text-[45px] font-cardo text-[#c2c5aa] mb-10">
            Reset Password
        </h1>

        @if (session('status'))
            <div class="bg-green-200 text-green-800 rounded-[20px] px-6 py-4 text-[18px] mb-6 max-w-[40rem]">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-6 items-center">
            @csrf

            <!-- Email Input -->
            <input id="email" type="email" name="email" placeholder="Email Address"
                class="rounded-[50px] text-[#c2c5aa] placeholder-[#c2c5aa] text-[20px] border px-8 py-5 font-hk w-[40rem]"
                value="{{ old('email') }}" required autofocus>


            <p class="text-[22px] font-hk text-[#c2c5aa] max-w-[40rem] mb-6">
                Enter your email address and we will send you a password reset link.
            </p>

            <!-- Error Message -->
            @error('email')
                <span class="text-red-500 text-[18px] font-hk">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <!-- Submit Button -->
            <button type="submit"
                class="bg-[#f5f5f5] text-[#656d4a] rounded-[50px] text-[28px] px-12 py-4 self-center font-cardo">
                Send Password Reset Link
            </button>

        </form>

    </div>

@endsection