<!-- JavaScript to hide success/fail message after 5 seconds -->
@php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'success') {
        echo '
        <div id="notification" class="fixed top-4 right-4 z-50 transition-all duration-500 ease-in-out transform translate-x-full">
            <div class="bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg flex items-center space-x-4 animate-fade-in">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <div>
                    <p class="font-semibold">Success!</p>
                    <p class="text-sm">Your message has been sent successfully.</p>
                </div>
                <button onclick="hideNotification()" class="ml-4 text-white hover:text-green-200">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        ';
    } elseif ($_GET['status'] == 'fail') {
        echo '
        <div id="notification" class="fixed top-4 right-4 z-50 transition-all duration-500 ease-in-out transform translate-x-full">
            <div class="bg-red-500 text-white px-6 py-4 rounded-lg shadow-lg flex items-center space-x-4 animate-fade-in">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div>
                    <p class="font-semibold">Error!</p>
                    <p class="text-sm">Failed to send message. Please try again.</p>
                </div>
                <button onclick="hideNotification()" class="ml-4 text-white hover:text-red-200">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        ';
    }
}
@endphp

<script>
// Show notification with slide-in animation
document.addEventListener('DOMContentLoaded', function() {
    const notification = document.getElementById('notification');
    if (notification) {
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
            notification.classList.add('translate-x-0');
        }, 100);
        
        // Auto-hide after 5 seconds
        setTimeout(hideNotification, 5000);
    }
});

function hideNotification() {
    const notification = document.getElementById('notification');
    if (notification) {
        notification.classList.add('translate-x-full');
        notification.classList.remove('translate-x-0');
        
        // Remove from DOM after animation completes
        setTimeout(() => {
            notification.remove();
        }, 500);
    }
}
</script>

<style>
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
.animate-fade-in {
    animation: fadeIn 0.3s ease-in-out;
}
</style>