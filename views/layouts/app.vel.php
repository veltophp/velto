<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'VeltoPHP Framework | Fast & Minimalist RVC-Powered Web Development.')</title>
    <link rel="icon" href="https://res.cloudinary.com/dmnble1qr/image/upload/v1744859332/velto_zfond5.png" type="image/png">
    <meta name="description" content="Velto is a lightweight PHP framework built with the RVC (Route-View-Controller) pattern. Ideal for building fast, static, and simple web applications — no database required.">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @css_link
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="/assets/js/dark-thema.js" defer></script>
    <!-- watch auto reload -->
    <script src="/assets/js/watch.js"></script>
    <!-- aditional script   -->
    <script src="/assets/js/script.js" defer></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    },
                    colors: {
                        dark: {
                            50: '#f9fafb',
                            100: '#f3f4f6',
                            200: '#e5e7eb',
                            300: '#d1d5db',
                            400: '#9ca3af',
                            500: '#6b7280',
                            600: '#4b5563',
                            700: '#374151',
                            800: '#1f2937',
                            900: '#111827',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-gray-50 to-white text-gray-800 font-sans antialiased dark:bg-gradient-to-br dark:from-dark-900 dark:to-dark-800 dark:text-gray-200 transition-colors duration-300">
    @include('components.dark-button')
    <!-- Header/Navigation -->
    @include('components.header')
    <!-- main content -->
    @yield('content')
    <!-- Footer -->
    @include('components.footer')
    @include('components.session-notif')
</body>
</html>