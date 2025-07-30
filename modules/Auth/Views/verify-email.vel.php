@extends('layouts.guest')

@section('title')
    Email Verification | Axion
@endsection

@section('guest-content')
<div class="min-h-screen flex flex-col md:flex-row bg-white dark:bg-gray-900">

    <!-- Left Side - Branding -->
    <div class="md:w-1/2 bg-red-500 md:flex items-center justify-center hidden p-12">
        <div class="max-w-md text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Hi👋, I'm Axion!</h1>
            <p class="text-xl opacity-90">Streamline your development workflow with VeltoPHP's powerful dashboard</p>
        </div>
    </div>

    <!-- Right Side - Verification Form -->
    <div class="md:w-1/2 flex items-center justify-center p-8 md:p-12 lg:p-24">
        <div class="w-full max-w-md mt-12">

            <!-- Branding -->
            <div class="text-center">
                <a href="{{ route('home') }}">
                    <span class="text-3xl font-semibold text-gray-800 dark:text-white">
                        Axion<span class="text-red-600">Dashboard</span>
                    </span>
                </a>
            </div>

            <!-- Heading -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Verify Your Email</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    We have sent a verification email to: 
                    <span class="font-medium text-red-500 underline">{{ session()->email }}</span><br>
                    Please enter the 5-digit code below to verify your email.
                </p>
            </div>

            <!-- Flash -->
            <div class="mt-4">@flash_info('#form-verify-email')</div>

            <!-- Verification Form -->
            <form id="form-verify-email" action="{{ route('submit.verify.email') }}" method="POST" class="space-y-6">
                {!! csrf_field() !!}
                <div>
                    <label for="code" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Verification Code
                    </label>

                    <div class="flex space-x-2 justify-center">
                        @for ($i = 0; $i < 5; $i++)
                            <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                   class="w-12 h-12 text-center text-xl rounded-lg border border-gray-300 dark:border-gray-600 
                                   bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-none focus:ring-2 
                                   focus:ring-red-500 transition"
                                   oninput="handleCodeInput(this, {{ $i }})"
                                   id="digit-{{ $i }}">
                        @endfor
                    </div>

                    <input type="hidden" name="code" id="code" required>
                </div>

                <script>
                    function handleCodeInput(el, index) {
                        const boxes = document.querySelectorAll('[id^="digit-"]');
                        const nextBox = boxes[index + 1];

                        if (el.value.length === 1 && nextBox) {
                            nextBox.focus();
                        }

                        const combined = Array.from(boxes).map(box => box.value).join('');
                        document.getElementById('code').value = combined;
                    }
                </script>

                <div class="pt-4">
                    <button type="submit"
                            class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-3 px-4 
                            rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 
                            transition duration-200">
                        Verify Email
                    </button>
                </div>
            </form>

            <!-- Resend Code -->
            <div class="mt-6 text-center">
                <form action="{{ route('resend.code') }}" method="POST">
                    {!! csrf_field() !!}
                    <button type="submit" class="text-sm text-red-600 dark:text-red-400 hover:underline">
                        Resend Code
                    </button>
                </form>
            </div>

            <!-- Footer -->
            <div class="mt-8 border-t border-gray-200 dark:border-gray-700 pt-6">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400">
                    &copy; {{ date('Y') }} VeltoPHP. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
