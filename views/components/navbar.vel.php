<header class="py-4 px-6 sm:px-12 fixed w-full top-0 z-40 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-700 shadow-sm transition-colors duration-300">
    <div class="max-w-6xl mx-auto flex justify-between items-center">
        <div class="flex items-center">
            <a href="{{route('home')}}">
                <img src="https://res.cloudinary.com/drbowe2hn/image/upload/v1749287349/1_jtxhky.png" alt="Velto Logo"
                class="w-24 h-12 object-contain"
                loading="lazy"
                width="96" height="48">
            </a>
        </div>

        <nav class="hidden md:flex space-x-6 items-center" id="desktop-nav">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-red-600 dark:text-gray-300 dark:hover:text-red-500 transition-colors @active('/', 'font-semibold')">Home</a>
            {{-- <a href="{{ route('blog') }}" class="text-gray-700 hover:text-red-600 dark:text-gray-300 dark:hover:text-red-500 transition-colors @active('/blog', 'font-semibold')">Blog</a> --}}
            <a href="{{ route('contact') }}" class="text-gray-700 hover:text-red-600 dark:text-gray-300 dark:hover:text-red-500 transition-colors @active('/contact', 'font-semibold')">Contact</a>

            {{-- @if(Auth::user())
                <a href="{{ route('dashboard') }}" class="ml-4 px-4 py-2 border border-gray-300 text-red-600 rounded-lg hover:bg-gray-100 dark:border-gray-500 dark:text-red-500 dark:hover:bg-gray-700 transition-colors duration-200">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="ml-4 px-4 py-2 border border-gray-300 text-red-600 rounded-lg hover:bg-gray-100 dark:border-gray-500 dark:text-red-500 dark:hover:bg-gray-700 transition-colors duration-200">
                    Login
                </a>
            @endif --}}
        </nav>

        <button id="mobile-menu-toggle" class="md:hidden text-gray-700 dark:text-gray-300 focus:outline-none">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </div>

    <div id="mobile-menu" class="md:hidden hidden mt-4 px-0 pb-6 bg-white dark:bg-gray-900 rounded-lg transition-all duration-300">
        <nav class="flex flex-col divide-y divide-gray-200 dark:divide-gray-700" id="mobile-nav">
            <a href="{{ route('home') }}" class="py-3 text-base font-medium text-gray-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 transition">Home</a>
            {{-- <a href="{{ route('blog') }}" class="py-3 text-base font-medium text-gray-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 transition">Blog</a> --}}
            <a href="{{ route('contact') }}" class="py-3 text-base font-medium text-gray-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 transition">Contact</a>
    
            {{-- @if(Auth::user())
                <div class="pt-4">
                    <a href="{{ route('dashboard') }}" class="w-full inline-flex items-center justify-center px-4 py-3 rounded-md bg-red-600 text-white font-semibold shadow hover:bg-red-700 dark:bg-red-500 dark:hover:bg-red-600 transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5.121 17.804A13.937 13.937 0 0112 15c2.403 0 4.65.634 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Dashboard
                    </a>
                </div>
            @else
                <div class="pt-4">
                    <a href="{{ route('login') }}" class="w-full inline-flex items-center justify-center px-4 py-3 rounded-md bg-blue-600 text-white font-semibold shadow hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M15 12H3m6-6l-6 6 6 6M21 3v18"/>
                        </svg>
                        Login
                    </a>
                </div>
            @endif --}}
        </nav>
    </div>    

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.getElementById('mobile-menu-toggle');
            const menu = document.getElementById('mobile-menu');

            if (toggle && menu) {
                toggle.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });
            }
        });
    </script>
</header>
