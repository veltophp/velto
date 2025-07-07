<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $code ?> Error</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/atom-one-dark.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans min-h-screen flex flex-col">

    <div class="py-12 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl font-bold">
                <span class="px-3 py-1 rounded"><?= $code ?>!</span>
            </h1>
            <div class="mt-8 text-2xl text-red-500"><?= $message ?></div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto w-full px-2 py-8 error-container">
        <?php if (!empty($file)): ?>
        <div class="mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    Source Error
                </h2>
            </div>

            <div class="code-block mb-4">
                <div class="p-4 text-gray-400 text-sm">
                    <span class="text-red-500"><?= $file ?></span> on line <span class="text-yellow-400"><?= $line ?></span>
                </div>
                <div class="p-0 overflow-x-auto text-sm py-6">
                    <?php if (file_exists($file)): ?>
                        <?php 
                        $fileContent = file($file);
                        $startLine = max(0, $line - 7);
                        $endLine = min(count($fileContent), $line + 5);
                        ?>
                        <pre><code class="language-php"><?php
                        for ($i = $startLine; $i < $endLine; $i++) {
                            $lineNum = $i + 1;
                            $lineContent = htmlspecialchars($fileContent[$i]);
                            $highlight = ($lineNum == $line) ? 'error-line' : '';
                            echo "<div class='code-line {$highlight}'><span class='line-number'>{$lineNum}</span><span class='line-content'>{$lineContent}</span></div>";
                        }
                        ?></code></pre>
                    <?php else: ?>
                        <div class="text-gray-400 italic">Source file not available</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if (!empty($trace)): ?>
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
                Stack Trace
            </h2>
            
            <div class="bg-gray-800 rounded-lg overflow-hidden text-xs">
                <?php foreach ($trace as $i => $t): ?>
                    <?php
                    $function = $t['function'] ?? '[unknown]';
                    $class = $t['class'] ?? '';
                    $type = $t['type'] ?? '';
                    $fileTrace = $t['file'] ?? '[internal]';
                    $lineTrace = $t['line'] ?? '??';
                    $args = !empty($t['args']) ? json_encode($t['args'], JSON_PRETTY_PRINT) : '[]';
                    ?>
                    <div class="stack-trace border-b border-gray-700 last:border-0">
                        <div class="p-4 hover:bg-gray-750 cursor-pointer" onclick="toggleTraceDetails(this)">
                            <div class="flex justify-between items-center">
                                <div class="font-mono">
                                    <span class="text-gray-400">#<?= $i ?></span>
                                    <?php if ($class): ?>
                                        <span class="text-purple-400"><?= $class ?></span><span class="text-gray-500"><?= $type ?></span>
                                    <?php endif; ?>
                                    <span class="text-yellow-400"><?= $function ?></span>(
                                    <span class="text-gray-400"><?= $args ? '...' : '' ?></span>)
                                </div>
                                <div class="text-sm text-gray-400">
                                    <?php if ($fileTrace !== '[internal]'): ?>
                                        <?= $fileTrace ?>:<?= $lineTrace ?>
                                    <?php else: ?>
                                        [internal function]
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="trace-details hidden px-4 pb-4 bg-gray-750">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h3 class="text-sm font-semibold mb-2 text-gray-400">Arguments</h3>
                                    <pre class="bg-gray-900 p-3 rounded text-xs overflow-x-auto"><code class="language-json"><?= htmlspecialchars($args) ?></code></pre>
                                </div>
                                <?php if ($fileTrace !== '[internal]' && file_exists($fileTrace)): ?>
                                <div>
                                    <h3 class="text-sm font-semibold mb-2 text-gray-400">Source</h3>
                                    <div class="bg-gray-900 p-3 rounded text-xs overflow-x-auto max-h-40 overflow-y-auto">
                                        <?php
                                        $traceFileContent = file($fileTrace);
                                        $traceStartLine = max(0, $lineTrace - 3);
                                        $traceEndLine = min(count($traceFileContent), $lineTrace + 2);
                                        ?>
                                        <pre><code class="language-php"><?php
                                        for ($i = $traceStartLine; $i < $traceEndLine; $i++) {
                                            $traceLineNum = $i + 1;
                                            $traceLineContent = htmlspecialchars($traceFileContent[$i]);
                                            $highlight = ($traceLineNum == $lineTrace) ? 'error-line' : '';
                                            echo "<div class='code-line {$highlight}'><span class='line-number'>{$traceLineNum}</span><span class='line-content'>{$traceLineContent}</span></div>";
                                        }
                                        ?></code></pre>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if (!empty($exception)): ?>
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                Exception Details
            </h2>
            <div class="bg-gray-800 rounded-lg p-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <h3 class="text-sm font-semibold mb-2 text-gray-400">Class</h3>
                        <div class="bg-gray-900 p-3 rounded font-mono text-purple-400">
                            <?= get_class($exception) ?>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold mb-2 text-gray-400">Code</h3>
                        <div class="bg-gray-900 p-3 rounded font-mono text-yellow-400">
                            <?= $exception->getCode() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <footer class="bg-gray-800 py-4 px-6 mt-auto">
        <div class="max-w-7xl mx-auto text-center text-gray-400 text-sm">
            <div class="flex justify-center items-center space-x-4">
                <span>VeltoPHP V2.0 Framework</span>
                <span class="opacity-50">•</span>
                <span>PHP <?= phpversion() ?></span>
                <span class="opacity-50">•</span>
                <span><?= $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown Server' ?></span>
            </div>
        </div>
    </footer>

    <script>
        // Initialize syntax highlighting
        hljs.highlightAll();
        
        // Toggle stack trace details
        function toggleTraceDetails(element) {
            const details = element.nextElementSibling;
            details.classList.toggle('hidden');
        }
        
        // Copy error to clipboard
        function copyError() {
            const errorText = `Error: ${document.querySelector('h1').innerText}\n` +
                `File: ${document.querySelector('.code-block .text-red-400').innerText}\n` +
                `Line: ${document.querySelector('.code-block .text-yellow-400').innerText}\n\n` +
                `Stack Trace:\n${Array.from(document.querySelectorAll('.stack-trace')).map(el => 
                    el.querySelector('.font-mono').innerText.replace(/\s+/g, ' ') + ' ' +
                    (el.querySelector('.text-sm') ? el.querySelector('.text-sm').innerText : '')
                ).join('\n')}`;
            
            navigator.clipboard.writeText(errorText).then(() => {
                const btn = document.querySelector('.copy-btn');
                btn.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    Copied!
                `;
                setTimeout(() => {
                    btn.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" />
                            <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z" />
                        </svg>
                        Copy Error
                    `;
                }, 2000);
            });
        }
    </script>
</body>
</html>