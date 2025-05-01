@extends('layouts.app')

@section('title')
    Velto PHP Framework | Fast & Minimalist RVC-Powered Web Development
@endsection

@section('content')

    <!-- Animated Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center px-6 pt-36 md:pt-16 overflow-hidden">
        <!-- Background gradient circles -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-64 -left-64 w-[800px] h-[800px] bg-gradient-to-br from-red-500/10 to-transparent rounded-full filter blur-3xl opacity-40 dark:opacity-30 animate-float-slow"></div>
            <div class="absolute -bottom-96 -right-64 w-[900px] h-[900px] bg-gradient-to-tl from-blue-500/10 to-transparent rounded-full filter blur-3xl opacity-40 dark:opacity-30 animate-float-slower"></div>
        </div>
        
        <div class="relative z-10 text-center max-w-5xl">
            <!-- Animated logo/badge -->
            <div class="relative mx-auto w-28 h-28 mb-8 group">
                <div class="absolute inset-0 bg-gradient-to-r from-red-500 via-purple-500 to-blue-500 rounded-2xl shadow-2xl transform group-hover:rotate-6 transition duration-500"></div>
                <div class="absolute inset-1 bg-white dark:bg-dark-800 rounded-xl shadow-inner flex items-center justify-center transform group-hover:-rotate-3 transition duration-500">
                    <span class="font-mono font-bold text-3xl bg-gradient-to-r from-red-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">.vel</span>
                </div>
            </div>
            
            <h1 class="text-5xl sm:text-7xl font-extrabold mb-6 bg-gradient-to-r from-red-600 via-purple-600 to-blue-600 bg-clip-text text-transparent">
                <!-- this varibale come from HomeController -->
                {{ $title }}
            </h1>
            
            <p class="text-xl sm:text-2xl text-gray-600 dark:text-gray-300 mb-10 max-w-3xl mx-auto leading-relaxed">
                The <span class="font-semibold text-red-500 dark:text-red-400">lightweight</span> PHP framework with <span class="font-semibold text-purple-500 dark:text-purple-400">RVC architecture</span> — perfect for modern static web projects</span>
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="relative px-8 py-4 bg-gradient-to-r from-red-600 to-blue-600 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 overflow-hidden group">
                    <span class="relative z-10 flex items-center justify-center">
                        Get Started <i class="fas fa-arrow-right ml-3 transition-transform group-hover:translate-x-1"></i>
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-red-700 to-blue-700 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </a>
                <a href="https://github.com/veltophp/velto" target="_blank" class="px-8 py-4 bg-white dark:bg-dark-700 border border-gray-200 dark:border-dark-600 font-medium rounded-lg shadow-sm hover:shadow-md transition-all hover:-translate-y-1">
                    <i class="fab fa-github mr-3"></i> Star on GitHub
                </a>
            </div>
            
            <!-- Stats bar -->
            <div class="mt-16 p-6 bg-white dark:bg-dark-800/50 backdrop-blur-sm rounded-xl border border-gray-200 dark:border-dark-700 shadow-sm max-w-2xl mx-auto">
                <div class="flex flex-wrap justify-center gap-6 text-center">
                    <div class="px-4">
                        <div class="text-3xl font-bold text-green-500 dark:text-green-400">&lt;1Mb</div>
                        <div class="text-gray-500 dark:text-gray-400 text-sm">Lightweight</div>
                    </div>
                    <div class="px-4">
                        <div class="text-3xl font-bold text-purple-500 dark:text-purple-400">&lt;10ms</div>
                        <div class="text-gray-500 dark:text-gray-400 text-sm">Overhead</div>
                    </div>
                    <div class="px-4">
                        <div class="text-3xl font-bold text-blue-500 dark:text-blue-400">6</div>
                        <div class="text-gray-500 dark:text-gray-400 text-sm">Core Files</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection