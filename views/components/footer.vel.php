    <footer class="py-12 px-6 bg-white dark:bg-dark-900 border-t border-gray-200 dark:border-dark-700">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <div class="w-6 h-6 bg-gradient-to-r from-red-500 to-blue-500 rounded-md"></div>
                    <span class="text-lg font-bold bg-gradient-to-r from-red-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">Velto</span>
                </div>
                <div class="flex space-x-6">
                    <a href="https://github.com/veltophp/velto" target="_blank" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="https://instagram.com/veltophp" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="mailto:dev@veltophp.com" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <i class="fas fa-envelope text-xl"></i>
                    </a>
                </div>
            </div>
            <div class="mt-8 text-center text-sm text-gray-500 dark:text-gray-400">
                <p>Released under the MIT License. Built with ❤️ for developers who value simplicity.</p>
                <p class="mt-2">© 2025 Velto. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <p class="text-center my-4 text-xs text-gray-400">
        Process at <?php echo number_format((microtime(true) - VELTO_START), 4); ?>s
    </p>