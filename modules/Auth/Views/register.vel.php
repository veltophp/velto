@extends('layouts.guest')

@section('title')
    Register | Axion
@endsection

@section('guest-content')
<div class="min-h-screen flex flex-col md:flex-row bg-white dark:bg-gray-900">

    <!-- Left Side - Branding / Illustration -->
    <div class="md:w-1/2 bg-red-500 md:flex items-center justify-center hidden p-12">
        <div class="max-w-md text-center text-white">
            <div class="flex justify-center mb-8">
                <i class="fas fa-code text-white text-6xl"></i>
            </div>
            <h1 class="text-4xl font-bold mb-4">Hi👋, I'm Axion!</h1>
            <p class="text-xl opacity-90">Streamline your development workflow with VeltoPHP's powerful dashboard</p>
        </div>
    </div>

    <!-- Right Side - Register Form -->
    <div class="md:w-1/2 flex items-center justify-center p-8 md:p-12 lg:p-24">
        <div class="w-full max-w-md mt-12">

            <!-- Logo & Branding -->
            <div class="text-center">
                <a href="{{ route('home') }}">
                    <i class="fas fa-code text-red-600 text-3xl"></i>
                    <span class="text-3xl font-semibold text-gray-800 dark:text-white">
                        Axion<span class="text-red-600">Dashboard</span>
                    </span>
                </a>
            </div>

            <!-- Heading -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Create Account</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-8">Register to access your dashboard</p>
            </div>

            <!-- Flash -->
            <div class="mt-4">@flash_info('#form-register')</div>

            <!-- Register Form -->
            <form id="form-register" action="{{ route('submit.register') }}" method="POST" class="space-y-6">

                {!! csrf_field() !!}

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
                    <input type="text" id="name" name="name"
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 
                           bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-red-500"
                           placeholder="Your full name" required>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email Address</label>
                    <input type="email" id="email" name="email"
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 
                           bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-red-500"
                           placeholder="you@example.com" required>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Password</label>
                    <input type="password" id="password" name="password"
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 
                           bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-red-500"
                           placeholder="••••••••" required>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 
                           bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-red-500"
                           placeholder="••••••••" required>
                </div>

                <div class="pt-4">
                    <button type="submit"
                            class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-3 px-4 
                            rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 
                            transition duration-200">
                        Create Account
                    </button>
                </div>
            </form>

            <!-- Login Link -->
            <div class="mt-8 text-center">
                <p class="text-gray-600 dark:text-gray-400">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-red-600 dark:text-red-400 font-medium hover:underline">Sign in</a>
                </p>
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