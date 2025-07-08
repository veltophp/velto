<nav class="fixed top-0 w-full bg-white/80 backdrop-blur-sm border-b border-red-100 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <i class="fas fa-code text-red-600 text-2xl"></i>
                    <img src="https://res.cloudinary.com/drbowe2hn/image/upload/v1750857194/VeltoPHP2_la6xfv.png"
                         alt="VeltoPHP Logo"
                         class="h-8 w-8 object-contain" />
                    <span class="text-xl font-thin text-gray-900">Velto<span class="text-red-500">PHP</span></span>
                </a>
            </div>

            <!-- Desktop Nav -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{route('documentation')}}" class="text-gray-600 hover:text-red-500 transition-colors font-light">Documentation</a>
                <a href="{{route('community')}}" class="text-gray-600 hover:text-red-500 transition-colors font-light">Community</a>
                @if (env('AUTH_LOGIN'))
                    @if(Auth::user())
                        <a href="{{ route('axion.dashboard') }}" class="text-gray-600 hover:text-red-500 transition-colors font-light">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('axion.dashboard') }}" class="text-gray-600 hover:text-red-500 transition-colors font-light">
                            Login
                        </a>
                    @endif
                @endif
            </div>

            <!-- Mobile Toggle Button -->
            <div class="md:hidden flex items-center">
                <button id="nav-toggle" class="text-gray-700 hover:text-red-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="nav-menu" class="md:hidden hidden px-4 pb-4">
        <a href="{{route('documentation')}}" class="block py-2 text-gray-600 hover:text-red-500 font-light">Documentation</a>
        <a href="{{route('community')}}" class="block py-2 text-gray-600 hover:text-red-500 font-light">Community</a>
        @if (env('AUTH_LOGIN'))
            <div class="border-t border-red-500 pt-2 mt-2">
                @if(Auth::user())
                    <a href="{{ route('axion.dashboard') }}" class="block py-2 text-gray-600 hover:text-red-500 font-light">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('axion.dashboard') }}" class="block py-2 text-gray-600 hover:text-red-500 font-light">
                        Login
                    </a>
                @endif
            </div>
        @endif
    </div>    
</nav>

<script>
    // Toggle mobile nav
    document.getElementById('nav-toggle').addEventListener('click', function () {
        const menu = document.getElementById('nav-menu');
        menu.classList.toggle('hidden');
    });
</script>
