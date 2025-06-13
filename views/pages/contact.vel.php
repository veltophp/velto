@extends('layouts.app')

@section('title')
    Velto | Contact VeltoPHP
@endsection

@section('content')
    <section class="min-h-screen flex items-center justify-center dark:bg-dark-900 bg-white my-32 md:my-16 px-6">

        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            <!-- Left Column - Contact Info -->
            <div class="space-y-10">
                <div>
                    <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                        Get in Touch
                    </h1>
                    <p class="text-lg text-gray-500 dark:text-gray-300">
                        Need help or want to connect? We’re here to support your journey with VeltoPHP.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div>
                            <h3 class="font-medium text-gray-900 dark:text-white">Email Us</h3>
                            <p class="text-gray-500 dark:text-gray-400">hello@veltophp.com</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div>
                            <h3 class="font-medium text-gray-900 dark:text-white">Community</h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                Follow us on <a href="https://instagram.com/veltophp" class="underline">@veltophp</a>
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div>
                            <h3 class="font-medium text-gray-900 dark:text-white">Office</h3>
                            <p class="text-gray-500 dark:text-gray-400">Bali, Indonesia</p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-3">Why Contact Us?</h3>
                    <ul class="space-y-3 text-gray-500 dark:text-gray-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span>Technical support for implementation</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span>Enterprise solutions and consulting</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span>Partnership opportunities</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Column - Contact Form -->
            <div class="w-full">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Send us a message</h2>
                <div>@flash_errors</div>
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                    {!! csrf_field() !!}
                    <div>
                        <label for="name" class="block text-sm font-normal text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
                        <input type="text" name="name" id="name" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                            placeholder="John Doe">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-normal text-gray-700 dark:text-gray-300 mb-1">Email Address</label>
                        <input type="email" name="email" id="email" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                            placeholder="you@example.com">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-normal text-gray-700 dark:text-gray-300 mb-1">Your Message</label>
                        <textarea name="message" id="message" rows="5" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-dark-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                            placeholder="How can we help you?"></textarea>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full px-6 py-3 rounded-lg text-white font-medium bg-gradient-to-r from-red-500 to-purple-600 hover:shadow-lg hover:-translate-y-0.5 transition-transform">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
