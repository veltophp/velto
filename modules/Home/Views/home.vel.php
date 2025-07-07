@extends('layouts.app')

@section('title')
    Welcome to VeltoPHP V2.0
@endsection

@section('app-content')
<div class="min-h-screen font-thin mb-24">
    <div class="pt-32 pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="text-center font-light text-sm text-gray-700 dark:text-gray-300 py-6 px-4">
                    <span class="italic">Bug report, contribution, or donation</span> — email us at 
                    <a href="mailto:dev@veltophp.com" class="underline text-red-600 dark:text-red-400 hover:text-red-500">dev@veltophp.com</a>
                </div> 
                <h1 class="text-5xl md:text-6xl font-thin text-gray-900 mb-4">
                    Welcome to 
                    <span class="relative text-red-500 ml-2 inline-block">
                        VeltoPHP
                        <span class="absolute -top-2 -right-4 text-sm text-red-500 font-light">V2</span>
                    </span>
                </h1>                
                <p class="text-gray-600 font-light mb-12 max-w-4xl mx-auto">
                    {{$message}}
                </p>                                
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-thin text-gray-900 mb-4">Built for Modern Development</h2>
            <p class="text-gray-600 font-light">Everything you need to build amazing applications</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group">
                <div class="bg-white/60 backdrop-blur-sm rounded-2xl border border-red-100 p-8 hover:border-red-200 transition-all">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-red-200 transition-colors">
                        <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-light text-gray-900 mb-3">Light and Efficient</h3>
                    <p class="text-gray-600 font-light">VeltoPHP keeps things simple, so your apps stay fast and responsive.</p>
                </div>
            </div>
        
            <div class="group">
                <div class="bg-white/60 backdrop-blur-sm rounded-2xl border border-red-100 p-8 hover:border-red-200 transition-all">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-red-200 transition-colors">
                        <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-light text-gray-900 mb-3">Clean Structure</h3>
                    <p class="text-gray-600 font-light">Organized using a simple HMVC pattern that’s easy to learn and maintain.</p>
                </div>
            </div>
        
            <div class="group">
                <div class="bg-white/60 backdrop-blur-sm rounded-2xl border border-red-100 p-8 hover:border-red-200 transition-all">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-red-200 transition-colors">
                        <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-light text-gray-900 mb-3">Secure by Default</h3>
                    <p class="text-gray-600 font-light">Basic security features are already included to help you build safely.</p>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection