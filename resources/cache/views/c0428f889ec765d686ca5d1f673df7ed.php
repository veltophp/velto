<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo \Velto\Core\View\View::yieldSection('title', '' ?? ''); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php echo \Velto\Core\View\View::yieldSection('guest-content', '' ?? ''); ?>
    <?php \Velto\Core\View\View::component('alerts'); ?>
</body>
</html>