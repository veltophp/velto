<div class="text-center mt-auto py-6">
    <div class="font-light text-sm text-gray-500">
        Running on PHP <span class="text-red-600"><?php echo htmlspecialchars((string)(phpversion()), ENT_QUOTES, 'UTF-8'); ?></span> | VeltoPHP V2.0<br>
        Page generated in <span class="text-blue-600"><?php echo htmlspecialchars((string)(number_format((microtime(true) - VELTO_START) * 1000, 2)), ENT_QUOTES, 'UTF-8'); ?></span> ms
    </div>
</div>
