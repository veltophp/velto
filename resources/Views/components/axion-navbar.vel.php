<nav class="bg-white sticky top-0 z-50 border-b border-red-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            {{-- Logo & Left Menu --}}
            <div class="flex items-center space-x-4">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <img src="https://res.cloudinary.com/drbowe2hn/image/upload/v1750857194/VeltoPHP2_la6xfv.png"
                         alt="VeltoPHP Logo"
                         class="h-10 w-10 object-contain" />
                </a>

                {{-- Desktop Left Menu --}}
                <div class="hidden sm:flex space-x-6">
                    <a href="{{ route('axion.dashboard') }}"
                       class="@active('/axion', 'border-red-500') inline-flex items-center px-1 pt-1 border-b-2 text-gray-700 hover:text-red-600 hover:border-red-400">
                        Dashboard
                    </a>

                    @role('admin')
                    <a href="{{ route('veltoadmin') }}"
                       class="@active('/velto/admin', 'border-red-500') inline-flex items-center px-1 pt-1 border-b-2 text-gray-700 hover:text-red-600 hover:border-red-400">
                        Admin
                    </a>
                    @end_role

                    <a href="{{ route('axion.thread') }}"
                       class="@active('/axion/thread', 'border-red-500') inline-flex items-center px-1 pt-1 border-b-2 text-gray-700 hover:text-red-600 hover:border-red-400">
                        Threads
                    </a>
                    <a href="{{ route('axion.activity') }}"
                       class="@active('/axion/activity', 'border-red-500') inline-flex items-center px-1 pt-1 border-b-2 text-gray-700 hover:text-red-600 hover:border-red-400">
                        Activity
                    </a>
                </div>
            </div>

            {{-- Desktop Right Menu --}}
            <div class="hidden sm:flex items-center space-x-4">
                <a href="{{ route('axion.profile') }}"
                   class="@active('/axion/profile', 'border-red-500') inline-flex items-center px-1 pt-1 border-b-2 text-gray-800 hover:text-red-600 hover:border-red-400">
                   {{ Auth::user()->name }}
                </a>
            </div>

            {{-- Mobile Toggle Button --}}
            <div class="sm:hidden flex items-center">
                <button id="nav-toggle-sm" class="text-gray-700 hover:text-red-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="nav-menu-sm" class="sm:hidden hidden px-4 pb-4">
        <a href="{{ route('axion.dashboard') }}"
           class="block py-2 text-gray-700 hover:text-red-600 font-light">Dashboard</a>
           
        @role('admin')
        <a href="{{ route('veltoadmin') }}"
           class="block py-2 text-gray-700 hover:text-red-600 font-light">Admin</a>
        @end_role

        <a href="{{ route('axion.thread') }}"
           class="block py-2 text-gray-700 hover:text-red-600 font-light">Threads</a>

        <a href="{{ route('axion.activity') }}"
           class="block py-2 text-gray-700 hover:text-red-600 font-light">Activity</a>
        {{-- Border Top for separation --}}
        <div class="border-t border-red-500 pt-2 mt-2">
            <a href="{{ route('axion.profile') }}"
               class="block py-2 text-gray-800 hover:text-red-600 font-light">
               {{ Auth::user()->name }}
            </a>
        </div>
    </div>
</nav>

<script>
    // Toggle mobile nav
    document.getElementById('nav-toggle-sm').addEventListener('click', function () {
        const menu = document.getElementById('nav-menu-sm');
        menu.classList.toggle('hidden');
    });
</script>
