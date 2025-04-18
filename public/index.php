<?php

// 1. Composer autoload (wajib, untuk load velto-core)
require __DIR__ . '/../vendor/autoload.php';

// 2. Load core aliases, helpers, dsb. (disatukan dalam core.php)
require __DIR__ . '/../core.php';

// 3. Load env
\Velto\Core\Env::load();

// 4. Define waktu mulai
define('VELTO_START', microtime(true));

// 5. Load routes
require __DIR__ . '/../routes/web.php';

// 6. Exception handler dan jalankan app
set_exception_handler([\Velto\Core\App::class, 'handleException']);
\Velto\Core\App::run();
