
<!DOCTYPE html>
<html lang="en">
    <!--
    VeltoPHP Framework
    -----------------
    VeltoPHP is a lightweight, fast, and minimalist PHP framework designed
    for building modern static and dynamic web projects with simplicity
    and efficiency in mind.

    Official Website: https://veltophp.com
    License: MIT License - You are free to use, modify, and distribute
    the software under the terms of the MIT license.

    Maintained by: veltophp Team
    Contact Email: dev@veltophp.com
    Instagram: https://instagram.com/veltophp

    Thank you for using VeltoPHP! For documentation, tutorials, and
    community support, please visit our website.
    -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'VeltoPHP Framework | Fast & Minimalist RVC-Powered Web Development.')</title>
    <link rel="icon" href="https://res.cloudinary.com/drbowe2hn/image/upload/v1749287950/FAVICON_cfszfv.png" type="image/png">
    <meta name="description" content="Velto is a lightweight PHP framework built with the RVC (Route-View-Controller) pattern. Ideal for building fast, static, and simple web applications — no database required.">
    <!-- change CSS on .env -->
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-white text-gray-800 font-sans antialiased dark:bg-dark-800 dark:text-gray-200">
    @include('components.dark-button')
    <!-- Header/Navigation -->
    @include('components.navbar')
    <!-- main content -->
    @yield('content')
    <!-- Footer -->
    @include('components.footer')
</body>
</html>