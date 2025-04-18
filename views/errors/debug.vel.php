<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $code ?> Error</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .code-editor {
            background: #1e1e1e;
            color: #d4d4d4;
            font-family: 'Courier New', monospace;
        }

        .code-editor .line-number {
            color: #6a9955;
            user-select: none;
            padding-right: 1rem;
        }

        .code-editor .highlight {
            background-color: #2d2d30;
            color: #c586c0;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 font-sans min-h-screen flex flex-col items-center justify-center">
    <div class="bg-white p-8 max-w-5xl w-full mb-4">
        <h1 class="text-4xl font-bold text-red-600 mb-4"><?= $code ?> Error</h1>
        <p class="text-lg mb-2 font-medium"><?= $message ?></p>

        <?php if (!empty($file)): ?>
            <p class="text-sm text-gray-600 mb-4">In <code class="text-blue-600"><?= $file ?></code> on line <strong><?= $line ?></strong></p>
        <?php endif; ?>

        <?php if (!empty($trace)): ?>
            <div class="code-editor p-4 overflow-x-auto text-sm leading-relaxed mt-4">
                <?php
                foreach ($trace as $i => $t) {
                    $function = $t['function'] ?? '[unknown]';
                    $fileTrace = $t['file'] ?? '[internal]';
                    $lineTrace = $t['line'] ?? '??';
                    echo "<div><span class='line-number'>#" . ($i + 1) . "</span> at <span class='highlight'>{$function}()</span> in <span>{$fileTrace}</span>:<strong>{$lineTrace}</strong></div>";
                }
                ?>
            </div>
        <?php endif; ?>
    </div>

    <footer class="text-center text-gray-500 text-sm py-4">
        Powered by <span class="text-blue-600">Velto PHP Framework</span>
    </footer>
</body>
</html>
