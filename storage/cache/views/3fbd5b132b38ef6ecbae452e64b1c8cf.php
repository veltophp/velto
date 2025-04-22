<?php \Velto\Core\View::setLayout('layouts.app'); ?>

<?php \Velto\Core\View::startSection('title'); ?>
    Velto | This is example page from Velto.
<?php \Velto\Core\View::endSection(); ?>

<?php \Velto\Core\View::startSection('content'); ?>

    <section id="examples" class="py-24 bg-gray-50 dark:bg-dark-900 mt-12">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-8 text-center">
                <?= htmlspecialchars($title, ENT_QUOTES, "UTF-8") ?>
            </h2>

            <div class="grid md:grid-cols-1">
            <!-- Example 1 -->
                <div class="bg-white dark:bg-dark-800 rounded-xl shadow p-6 transition hover:shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Example Page</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                        A modern homepage layout with responsive design.
                    </p>
                    <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">View Demo</a>
                </div>
            </div>
        </div>
    </section>


<?php \Velto\Core\View::endSection(); ?>