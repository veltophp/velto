<?php
use Velto\Core\Session\Session;

$messages = Session::getFlash('_error_alert');

if (!$messages) return;
?>

<style>
#velto-error-toast {
    position: fixed;
    top: 20px;
    right: -400px;
    z-index: 9999;
    transition: right 0.5s ease;
}
#velto-error-toast.show {
    right: 20px;
}
</style>

<div id="velto-error-toast" class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded shadow-lg max-w-sm w-full">
    <?php if (is_array($messages)): ?>
        <ul class="text-sm space-y-1">
            <?php foreach ($messages as $msg): ?>
                <?php
                    if (is_string($msg)) {
                        $text = $msg;
                    } elseif (is_array($msg)) {
                        $text = $msg['text'] ?? $msg[0] ?? json_encode($msg);
                    } else {
                        $text = json_encode($msg);
                    }
                ?>
                <li><span class="mr-1">❌</span><?= htmlspecialchars($text) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <?= htmlspecialchars($messages) ?>
    <?php endif; ?>
</div>

<script>
    const errorToast = document.getElementById('velto-error-toast');
    if (errorToast) {
        setTimeout(() => errorToast.classList.add('show'), 100);
        setTimeout(() => errorToast.classList.remove('show'), 3000);
    }
</script>
