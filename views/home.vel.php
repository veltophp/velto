@extends('layouts.app')

@section('title')
    Velto | A super lightweight PHP Framework with RVC pattern.
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
                <a href="#get-started" class="relative px-8 py-4 bg-gradient-to-r from-red-600 to-blue-600 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 overflow-hidden group">
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
                        <div class="text-3xl font-bold text-red-500 dark:text-red-400"> >1Mb </div>
                        <div class="text-gray-500 dark:text-gray-400 text-sm">Minified</div>
                    </div>
                    <div class="px-4">
                        <div class="text-3xl font-bold text-purple-500 dark:text-purple-400">0.03ms</div>
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

    <!-- Features Grid Section -->
    <section id="features" class="py-20 px-6 bg-gray-50 dark:bg-dark-900">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded-full text-sm font-medium mb-4">WHY VELTO?</span>
                <h2 class="text-4xl font-bold dark:text-white mb-4">Modern Development Experience</h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">Designed for developers who value simplicity without sacrificing power</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white dark:bg-dark-800 p-8 rounded-2xl border border-gray-100 dark:border-dark-700 shadow-sm hover:shadow-md transition-all hover:-translate-y-2">
                    <div class="w-14 h-14 bg-red-100 dark:bg-red-900/20 rounded-xl flex items-center justify-center mb-6 text-red-500 dark:text-red-400 text-2xl">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold dark:text-white mb-3">Blazing Fast</h3>
                    <p class="text-gray-600 dark:text-gray-400">Optimized for performance with minimal overhead. No complex abstractions slowing you down.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white dark:bg-dark-800 p-8 rounded-2xl border border-gray-100 dark:border-dark-700 shadow-sm hover:shadow-md transition-all hover:-translate-y-2">
                    <div class="w-14 h-14 bg-purple-100 dark:bg-purple-900/20 rounded-xl flex items-center justify-center mb-6 text-purple-500 dark:text-purple-400 text-2xl">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold dark:text-white mb-3">Simple RVC Pattern</h3>
                    <p class="text-gray-600 dark:text-gray-400">Route → View → Controller. A streamlined approach that's easy to understand and extend.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white dark:bg-dark-800 p-8 rounded-2xl border border-gray-100 dark:border-dark-700 shadow-sm hover:shadow-md transition-all hover:-translate-y-2">
                    <div class="w-14 h-14 bg-blue-100 dark:bg-blue-900/20 rounded-xl flex items-center justify-center mb-6 text-blue-500 dark:text-blue-400 text-2xl">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-xl font-bold dark:text-white mb-3">Zero Configuration</h3>
                    <p class="text-gray-600 dark:text-gray-400">Get started immediately with sensible defaults and no complex setup required.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="bg-white dark:bg-dark-800 p-8 rounded-2xl border border-gray-100 dark:border-dark-700 shadow-sm hover:shadow-md transition-all hover:-translate-y-2">
                    <div class="w-14 h-14 bg-green-100 dark:bg-green-900/20 rounded-xl flex items-center justify-center mb-6 text-green-500 dark:text-green-400 text-2xl">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold dark:text-white mb-3">Built for Modern Web</h3>
                    <p class="text-gray-600 dark:text-gray-400">Perfect for SPAs, APIs, and static sites with clean, modern PHP practices.</p>
                </div>
                
                <!-- Feature 5 -->
                <div class="bg-white dark:bg-dark-800 p-8 rounded-2xl border border-gray-100 dark:border-dark-700 shadow-sm hover:shadow-md transition-all hover:-translate-y-2">
                    <div class="w-14 h-14 bg-yellow-100 dark:bg-yellow-900/20 rounded-xl flex items-center justify-center mb-6 text-yellow-500 dark:text-yellow-400 text-2xl">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold dark:text-white mb-3">Secure by Default</h3>
                    <p class="text-gray-600 dark:text-gray-400">Built-in protections against common vulnerabilities with simple configuration.</p>
                </div>
                
                <!-- Feature 6 -->
                <div class="bg-white dark:bg-dark-800 p-8 rounded-2xl border border-gray-100 dark:border-dark-700 shadow-sm hover:shadow-md transition-all hover:-translate-y-2">
                    <div class="w-14 h-14 bg-pink-100 dark:bg-pink-900/20 rounded-xl flex items-center justify-center mb-6 text-pink-500 dark:text-pink-400 text-2xl">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-xl font-bold dark:text-white mb-3">Ready to Scale</h3>
                    <p class="text-gray-600 dark:text-gray-400">Start small and grow when needed without framework limitations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- RVC Pattern Visual Explanation -->
    <section id="rvc-pattern" class="py-20 px-6 bg-white dark:bg-dark-900">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm font-medium mb-4">ARCHITECTURE</span>
                <h2 class="text-4xl font-bold dark:text-white mb-4">The RVC Pattern Explained</h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">A streamlined approach that keeps your code organized and efficient</p>
            </div>
            
            <div class="relative">
                <!-- Connection lines (desktop only) -->
                <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-red-500 via-purple-500 to-blue-500 -translate-y-1/2 z-0"></div>
                <div class="hidden lg:block absolute top-1/2 left-1/3 w-2 h-16 bg-purple-500 -translate-y-1/2 -translate-x-1/2 z-0"></div>
                <div class="hidden lg:block absolute top-1/2 right-1/3 w-2 h-16 bg-purple-500 -translate-y-1/2 translate-x-1/2 z-0"></div>
                
                <div class="relative grid lg:grid-cols-3 gap-8 z-10">
                    <!-- Route -->
                    <div class="bg-white dark:bg-dark-800 p-8 rounded-2xl border border-gray-100 dark:border-dark-700 shadow-lg text-center">
                        <div class="w-20 h-20 bg-red-100 dark:bg-red-900/20 rounded-2xl flex items-center justify-center mx-auto mb-6 text-red-500 dark:text-red-400 text-3xl">
                            <i class="fas fa-route"></i>
                        </div>
                        <h3 class="text-2xl font-bold dark:text-white mb-3">Route</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Simple URL routing that maps directly to your controllers
                        </p>
                        <div class="bg-gray-50 dark:bg-dark-700 rounded-lg p-4 text-left font-mono text-sm">
                            <span class="text-red-400">Route::get</span>('<span class="text-blue-400">/about</span>', '<span class="text-purple-400">AboutController</span>@about');
                        </div>
                    </div>
                    
                    <!-- Controller -->
                    <div class="bg-white dark:bg-dark-800 p-8 rounded-2xl border border-gray-100 dark:border-dark-700 shadow-lg text-center lg:transform lg:-translate-y-8">
                        <div class="w-20 h-20 bg-purple-100 dark:bg-purple-900/20 rounded-2xl flex items-center justify-center mx-auto mb-6 text-purple-500 dark:text-purple-400 text-3xl">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3 class="text-2xl font-bold dark:text-white mb-3">Controller</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Clean PHP classes that handle your application logic
                        </p>
                        <div class="bg-gray-50 dark:bg-dark-700 rounded-lg p-4 text-left font-mono text-sm">
                            <span class="text-blue-400">class</span> AboutController {<br>
                            &nbsp;&nbsp;<span class="text-blue-400">public function</span> about() {<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-400">return</span> view(<span class="text-green-400">'about'</span>);<br>
                            &nbsp;&nbsp;}<br>
                            }
                        </div>
                    </div>
                    
                    <!-- View -->
                    <div class="bg-white dark:bg-dark-800 p-8 rounded-2xl border border-gray-100 dark:border-dark-700 shadow-lg text-center">
                        <div class="w-20 h-20 bg-blue-100 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center mx-auto mb-6 text-blue-500 dark:text-blue-400 text-3xl">
                            <i class="fas fa-file-code"></i>
                        </div>
                        <h3 class="text-2xl font-bold dark:text-white mb-3">View</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Lightweight templating using .vel.php extensions, powered by Velto.
                        </p>
                        <div class="bg-gray-50 dark:bg-dark-700 rounded-lg p-4 text-left font-mono text-sm">
                            &lt;<span class="text-red-400">h1</span>&gt;About Us&lt;/<span class="text-red-400">h1</span>&gt;<br>
                            &lt;<span class="text-red-400">p</span>&gt; Some text about &lt;/<span class="text-red-400">p</span>&gt;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases Section -->
    <section class="py-20 px-6 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-dark-900 dark:to-dark-950">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium mb-4">USE CASES</span>
                <h2 class="text-4xl font-bold dark:text-white mb-4">Perfect For These Projects</h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">Velto shines in these scenarios where simplicity matters</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Use Case 1 -->
                <div class="bg-white dark:bg-dark-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all">
                    <div class="h-3 bg-gradient-to-r from-red-500 to-purple-500"></div>
                    <div class="p-8">
                        <div class="w-12 h-12 bg-red-100 dark:bg-red-900/20 rounded-lg flex items-center justify-center mb-4 text-red-500 dark:text-red-400 text-xl">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="text-xl font-bold dark:text-white mb-3">Portfolio Websites</h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            Quickly build beautiful portfolio sites with clean routing and easy content management.
                        </p>
                    </div>
                </div>
                
                <!-- Use Case 2 -->
                <div class="bg-white dark:bg-dark-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all">
                    <div class="h-3 bg-gradient-to-r from-purple-500 to-blue-500"></div>
                    <div class="p-8">
                        <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/20 rounded-lg flex items-center justify-center mb-4 text-purple-500 dark:text-purple-400 text-xl">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3 class="text-xl font-bold dark:text-white mb-3">Marketing Pages</h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            Create landing pages and marketing sites with organized code that's easy to maintain.
                        </p>
                    </div>
                </div>
                
                <!-- Use Case 3 -->
                <div class="bg-white dark:bg-dark-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all">
                    <div class="h-3 bg-gradient-to-r from-blue-500 to-green-500"></div>
                    <div class="p-8">
                        <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/20 rounded-lg flex items-center justify-center mb-4 text-blue-500 dark:text-blue-400 text-xl">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3 class="text-xl font-bold dark:text-white mb-3">Microservices</h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            Build lightweight API endpoints and microservices without unnecessary bloat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Code Example Section -->
    <section id="get-started" class="py-20 px-6 bg-white dark:bg-dark-950">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-400 rounded-full text-sm font-medium mb-4">GET STARTED</span>
                <h2 class="text-4xl font-bold dark:text-gray-800 mb-4">Install in Seconds</h2>
                <p class="text-xl text-gray-600 dark:text-gray-600 max-w-3xl mx-auto">Get up and running with just a few commands</p>
            </div>
            
            <div class="bg-gray-800 dark:bg-dark-800 rounded-xl shadow-xl overflow-hidden">
                <div class="flex items-center px-6 py-3 bg-gray-900 dark:bg-dark-900 border-b border-gray-700 dark:border-dark-700">
                    <div class="flex space-x-2 mr-4">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="text-gray-400 text-sm font-mono">terminal</div>
                </div>
                <div class="p-6">
                    <pre class="text-gray-200 overflow-x-auto font-mono text-sm">
                        <code class="language-bash">
# Install via Composer
<span class="text-green-400">composer</span> create-project veltophp/velto my-project

# Navigate to project
<span class="text-green-400">cd</span> my-project

# Run update
<span class="text-green-400">composer</span> update

# Start development server
<span class="text-green-400">php</span> velto start
                        </code>
                    </pre>
                </div>
            </div>
            
            <div class="mt-12 grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 dark:bg-dark-800 p-8 rounded-xl border border-gray-200 dark:border-dark-700">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/20 rounded-lg flex items-center justify-center mb-4 text-blue-500 dark:text-blue-400 text-xl">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="text-xl font-bold dark:text-white mb-3">Documentation</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Explore our comprehensive guides and API references
                    </p>
                    <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 font-medium">
                        Read Docs <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 dark:bg-dark-800 p-8 rounded-xl border border-gray-200 dark:border-dark-700">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/20 rounded-lg flex items-center justify-center mb-4 text-purple-500 dark:text-purple-400 text-xl">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold dark:text-white mb-3">Examples</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Learn from practical examples and starter templates
                    </p>
                    <a href="#" class="inline-flex items-center text-purple-600 hover:text-purple-800 dark:text-purple-400 dark:hover:text-purple-300 font-medium">
                        View Examples <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-20 px-6 bg-gradient-to-r from-red-600 via-purple-600 to-blue-600 text-white">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6">Ready to Build Something Amazing?</h2>
            <p class="text-xl opacity-90 mb-8">
                Join developers who value simplicity and performance in their PHP projects
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#get-started" class="px-8 py-4 bg-white text-gray-900 font-medium rounded-lg shadow-lg hover:bg-gray-100 transition transform hover:-translate-y-1 flex items-center justify-center">
                    <i class="fas fa-play-circle mr-3"></i> Get Started Now
                </a>
                <a href="https://github.com/veltophp/velto" target="_blank" class="px-8 py-4 bg-black/20 border border-white/20 font-medium rounded-lg hover:bg-black/30 transition transform hover:-translate-y-1 flex items-center justify-center">
                    <i class="fab fa-github mr-3"></i> GitHub Repository
                </a>
            </div>
        </div>
    </section>

@endsection