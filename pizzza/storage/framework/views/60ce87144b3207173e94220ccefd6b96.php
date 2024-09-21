

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Queen - <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/mystyle.css')); ?>">
</head>
<body class="bg-primary">
    <div class="container-fluid bg-dark">
        <nav class="container navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="/">Pizza Queen</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Akciós pizzák</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/all">összes pizza</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/rnd">Nem tudok választani</a>
                </li>
            </ul>
        </nav>
    </div>
<?php echo $__env->yieldContent('content'); ?>

<footer>
    <p class="text-center">niga</p>
</footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Bástyai\pizzza\resources\views/layout.blade.php ENDPATH**/ ?>