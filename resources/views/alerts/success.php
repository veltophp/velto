<?php
use Velto\Core\Session\Session;

$message = Session::getFlash('_success_alert');

if (!$message) return;
?>

<style>
#velto-toast {
    position: fixed;
    top: 20px;
    right: -400px;
    z-index: 9999;
    transition: right 0.5s ease;
}

#velto-toast.show {
    right: 20px;
}
</style>

<div id="velto-toast" class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded shadow-lg max-w-sm w-full flex items-start space-x-2">
    <span class="text-lg">✅</span>
    <div><?= htmlspecialchars($message) ?></div>
</div>

<script>
    const toast = document.getElementById('velto-toast');
    if (toast) {
        setTimeout(() => toast.classList.add('show'), 100);      
        setTimeout(() => toast.classList.remove('show'), 3000);  
    }
</script>
