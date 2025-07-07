<nav class="fixed top-0 w-full bg-white/80 backdrop-blur-sm border-b border-red-100 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-3">
                <a href="<?php echo htmlspecialchars((string)(route('home')), ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center space-x-2">
                    <i class="fas fa-code text-red-600 text-2xl"></i>
                    <img src="https://res.cloudinary.com/drbowe2hn/image/upload/v1750857194/VeltoPHP2_la6xfv.png"
                         alt="VeltoPHP Logo"
                         class="h-8 w-8 object-contain" />
                    <span class="text-xl font-thin text-gray-900">Velto<span class="text-red-500">PHP</span> </span>
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#" class="text-gray-600 hover:text-red-500 transition-colors font-light">Documentation</a>
                <a href="#" class="text-gray-600 hover:text-red-500 transition-colors font-light">Community</a>
                <?php if (Auth::user()): ?>
                    <a href="<?php echo htmlspecialchars((string)(route('axion.dashboard')), ENT_QUOTES, 'UTF-8'); ?>" class="text-gray-600 hover:text-red-500 transition-colors font-light">
                        Dashboard
                    </a>
                <?php else: ?>
                    <a href="<?php echo htmlspecialchars((string)(route('axion.dashboard')), ENT_QUOTES, 'UTF-8'); ?>" class="text-gray-600 hover:text-red-500 transition-colors font-light">
                        Login | Register
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
