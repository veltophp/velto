<footer class="py-12 px-6 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center space-x-3 mb-6 md:mb-0">
                <a href="{{route('home')}}">
                    <img src="https://res.cloudinary.com/drbowe2hn/image/upload/v1749287349/1_jtxhky.png" alt="Velto Logo"
                    class="w-24 h-16 object-contain"
                    loading="lazy"
                    width="96" height="48">
                </a>
            </div>

            <div class="flex space-x-6">
                <a href="https://github.com/veltophp/velto" target="_blank" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors">
                    <i class="fab fa-github text-xl"></i>
                </a>
                <a href="https://instagram.com/veltophp" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
                <a href="mailto:dev@veltophp.com" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors">
                    <i class="fas fa-envelope text-xl"></i>
                </a>
            </div>
        </div>

        <div class="mt-8 text-center text-sm text-gray-500 dark:text-gray-400 leading-relaxed">
            <p>Released under the MIT License. Built with ❤️ for developers who value simplicity.</p>
            <p class="mt-2">© 2025 Velto. All rights reserved.</p>
        </div>
    </div>
</footer>

<p class="text-center my-4 text-xs text-gray-400 dark:text-gray-500">
    Process at <?php echo number_format((microtime(true) - VELTO_START), 4); ?>s
</p>