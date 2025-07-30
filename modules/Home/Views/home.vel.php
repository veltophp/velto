@extends('layouts.app')

@section('title')
VeltoPHP 2.0 | Lightweight HMVC PHP Framework
@endsection

@section('app-content')
<div class="flex flex-col justify-between items-center min-h-screen">
    <main class="py-10 max-w-7xl mx-auto px-4 md:px-2 mt-24">
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
            {{-- Documentation Card --}}
            <a href="https://veltophp.com/docs" class="gradient-border flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6  border  transition duration-300 hover:text-black hover:border-red-400 focus:outline-none focus-visible:ring-red-600 md:row-span-3 lg:p-10 lg:pb-10">
                <div class="relative hidden md:flex w-full flex-1 items-stretch">
                    <img src="https://res.cloudinary.com/drbowe2hn/image/upload/v1753779176/VELTO-CODING_el3kyh.png" alt="VeltoPHP repository preview"
                        class="aspect-video h-full w-full flex-1 rounded-[10px] object-cover object-top" />
                </div>

                <div class="relative flex items-center gap-6 lg:items-end">
                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100">
                            <i class="fas fa-book text-red-500 text-xl"></i>
                        </div>

                        <div class="pt-3 sm:pt-5 lg:pt-0">
                            <h2 class="text-xl font-semibold text-black">Documentation</h2>
                            <p class="mt-4 /relaxed">
                                Everything you need to know about VeltoPHP: installation, routing, HMVC modules,
                                migrations, and more. Jump in and start shipping faster!
                            </p>
                        </div>
                    </div>

                    <i class="fas fa-arrow-right text-red-500 text-lg"></i>
                </div>
            </a>
            {{-- Quick Start Card --}}
            <div class="flex items-start gap-4 rounded-lg bg-white p-6  border  transition duration-300 hover:text-black hover:border-red-400 focus:outline-none focus-visible:ring-red-600 lg:pb-10">
                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100">
                    <i class="fas fa-rocket text-red-500 text-xl"></i>
                </div>

                <div class="pt-3">
                    <h2 class="text-xl font-semibold text-black">Great things start from small beginnings.</h2>
                    <p class="mt-4 /relaxed">
                        VeltoPHP's lightweight core and CLI scaffolding let you move from idea to prototype in
                        minutes.
                    </p>

                    <div class="mt-4">
                        <span class="/relaxed">Install with Composer:</span>
                        <p class=" leading-relaxed rounded-md py-3 px-4 mt-2 bg-[#272822] text-[#F8F8F2] font-mono shadow-inner">
                            <code class="text-green-400 font-medium">composer create-project veltophp/velto my-velto</code>
                        </p>
                    </div>                        
                </div>
            </div>
            {{-- Contact Card --}}
            <a href="mailto:dev@veltophp.com"
                class="gradient-border flex items-start gap-4 rounded-lg bg-white p-6  border  transition duration-300 hover:text-black hover:border-red-400 focus:outline-none focus-visible:ring-red-600 lg:pb-10">
                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100">
                    <i class="fas fa-envelope text-red-500 text-xl"></i>
                </div>

                <div class="pt-3">
                    <h2 class="text-xl font-semibold text-black">Connect and contribute with us.</h2>
                    <p class="mt-4 /relaxed">
                        Have questions, bug reports, or want to contribute? Drop us an email—we'd love to hear
                        from you!
                    </p>
                </div>
                <i class="fas fa-arrow-right text-red-500 text-lg self-center"></i>
            </a>
            {{-- Community Card --}}
            <a href="https://veltophp.com/community"
                class="gradient-border flex items-start gap-4 rounded-lg bg-white p-6  border  transition duration-300 hover:text-black hover:border-red-400 focus:outline-none focus-visible:ring-red-600 lg:pb-10">
                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100">
                    <i class="fas fa-users text-red-500 text-xl"></i>
                </div>

                <div class="pt-3">
                    <h2 class="text-xl font-semibold text-black">Join Our Community Forum.</h2>
                    <p class="mt-4 /relaxed">
                        Connect with other VeltoPHP developers, share ideas, ask questions, and help build the ecosystem together.
                    </p>
                </div>
                <i class="fas fa-arrow-right text-red-500 text-lg self-center"></i>
            </a>

        </div>
    </main>
</div>
@endsection