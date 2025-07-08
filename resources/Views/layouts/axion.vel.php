<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="https://res.cloudinary.com/drbowe2hn/image/upload/v1750857194/VeltoPHP2_la6xfv.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @component('axion-navbar')
    @yield('axion-content')
    @component('axion-footer')
    @component('alerts')
</body>
</html>