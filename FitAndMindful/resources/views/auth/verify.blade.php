@extends('layouts.app')

@section('content')

    <div class="flex flex-col gap-6 items-center justify-center text-center">

        <h1 class="text-[45px] font-cardo text-[#c2c5aa] mb-10">
            Verify Your Email
        </h1>

        <p class="text-[22px] font-hk text-[#c2c5aa] max-w-[40rem]">
            Before proceeding, please check your email for a verification link.
        </p>

        @if (session('resent'))
            <div class="bg-[#f5f5f5] text-[#656d4a] px-8 py-4 rounded-[30px] font-hk text-[18px]">
                A fresh verification link has been sent to your email address.
            </div>
        @endif

        <p class="text-[20px] font-hk text-[#c2c5aa]">
            If you did not receive the email
        </p>

        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf

            <button type="submit" class="bg-[#f5f5f5] text-[#656d4a] rounded-[50px] text-[24px] px-10 py-3 font-cardo">
                Send Another Verification Email
            </button>
        </form>

    </div>

@endsection