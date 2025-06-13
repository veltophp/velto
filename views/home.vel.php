@extends('layouts.app')

@section('title')
    Welcome to VeltoPHP – Minimalist PHP Framework for Rapid Web Development
@endsection

@section('content')
    <div class="container mx-auto px-4 py-36 max-w-6xl text-center">
        <!-- Hero Section -->
        <div class="mb-24">
            <h1 class="text-5xl font-light text-gray-900 dark:text-gray-100 mb-6 leading-tight">
                Build Web Apps <span class="font-medium text-red-500">Faster</span> with VeltoPHP
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto mb-8">
                A blazing fast, minimalist PHP framework using a modern <strong class="font-medium text-gray-800 dark:text-white">RVC / MVC architecture</strong>.
            </p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="#" class="px-6 py-3 rounded-full text-white bg-gradient-to-r from-red-500 to-purple-600 font-medium hover:scale-105 transition-transform shadow-md">
                    Documentation
                </a>
                <a href="https://github.com/veltophp" target="_blank" class="px-6 py-3 rounded-full border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-colors">
                    <i class="fab fa-github mr-2"></i> View on GitHub
                </a>
            </div>
        </div>

        <!-- Features Section -->
        <div class="py-20 border-t border-gray-200 dark:border-gray-700">
            <h2 class="text-2xl font-light text-gray-900 dark:text-white mb-12">Why Choose <span class="text-red-600 dark:text-red-500">VeltoPHP</span>?</h2>
            <div class="grid md:grid-cols-3 gap-12 text-center">
                <div>
                    <div class="mb-4 text-red-500 dark:text-red-400">
                        <i class="fas fa-rocket text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800 dark:text-gray-100 mb-2">Ultra Lightweight</h3>
                    <p class="text-gray-600 dark:text-gray-400">Velto's core is under 1MB – no unnecessary bloat, just performance.</p>
                </div>
                <div>
                    <div class="mb-4 text-purple-500 dark:text-purple-400">
                        <i class="fas fa-cube text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800 dark:text-gray-100 mb-2">Modern RVC Pattern</h3>
                    <p class="text-gray-600 dark:text-gray-400">Controller-free, component-based structure that simplifies everything.</p>
                </div>
                <div>
                    <div class="mb-4 text-blue-500 dark:text-blue-400">
                        <i class="fas fa-puzzle-piece text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800 dark:text-gray-100 mb-2">Extend with Axion</h3>
                    <p class="text-gray-600 dark:text-gray-400">Need MVC and admin panel? Axion is here when you need more.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
