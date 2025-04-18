@extends('layouts.app')

@section('title')
    Velto | This is example page from Velto.
@endsection

@section('content')

    <section id="examples" class="py-24 bg-gray-50 dark:bg-dark-900">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-8 text-center">
                {{ $title }}
            </h2>

            <div class="grid md:grid-cols-3 gap-6">
            <!-- Example 1 -->
            <div class="bg-white dark:bg-dark-800 rounded-xl shadow p-6 transition hover:shadow-lg">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Landing Page</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                A modern homepage layout with responsive design.
                </p>
                <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">View Demo</a>
            </div>

            <!-- Example 2 -->
            <div class="bg-white dark:bg-dark-800 rounded-xl shadow p-6 transition hover:shadow-lg">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Auth Page</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                Ready-to-use login and register pages with dark mode support.
                </p>
                <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">View Demo</a>
            </div>

            <!-- Example 3 -->
            <div class="bg-white dark:bg-dark-800 rounded-xl shadow p-6 transition hover:shadow-lg">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Dashboard</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                A lightweight and flexible admin dashboard template.
                </p>
                <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">View Demo</a>
            </div>
            </div>
        </div>
    </section>


@endsection