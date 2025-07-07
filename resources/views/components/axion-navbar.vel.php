<nav class="bg-white sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            {{-- Logo & Left Menu --}}
            <div class="flex items-center space-x-8">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <i class="fas fa-code text-red-600 text-2xl"></i>
                    <img src="https://res.cloudinary.com/drbowe2hn/image/upload/v1750857194/VeltoPHP2_la6xfv.png"
                         alt="VeltoPHP Logo"
                         class="h-10 w-10 object-contain" />
                </a>

                <div class="hidden sm:flex space-x-6">
                    <a href="{{ route('axion.dashboard') }}"
                       class="@active('/axion', 'border-red-500') inline-flex items-center px-1 pt-1 border-b-2  text-gray-700 hover:text-red-600 hover:border-red-400">
                        Dashboard
                    </a>
                    <a href="{{ route('axion.example.page') }}"
                       class="@active('/axion/example-page', 'border-red-500') inline-flex items-center px-1 pt-1 border-b-2  text-gray-500 hover:text-red-600 hover:border-red-400">
                        Example Page
                    </a>
                </div>
            </div>

            {{-- Right Menu (User/Auth) --}}
            <div class="hidden sm:flex items-center space-x-4">
                <a href="{{ route('axion.profile') }}"
                    class="@active('/axion/profile', 'border-red-500') inline-flex items-center px-1 pt-1 border-b-2 text-gray-800 hover:text-red-600 hover:border-red-400">
                    {{ Auth::user()->name }}
                </a>
            </div>
        </div>
    </div>
</nav>
