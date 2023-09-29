<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KBS Corporate University</title>
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
		<link rel="shortcut icon" href="<?php echo e(asset('assets/landing/img/favicon.png')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('assets/landing/css/plugins.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('assets/landing/css/style.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('assets/landing/css/colors/red.css')); ?>">
		<link rel="preload" href="<?php echo e(asset('assets/landing/css/fonts/urbanist.css')); ?>" as="style" onload="this.rel='stylesheet'">
    </head>

    <body>
        <div class="content-wrapper">
            <header class="wrapper bg-soft-primary">

                
                <?php if($nav == "verse-1"): ?>
                    <?php echo $__env->make('landing/nav-verse-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                    <?php echo $__env->make('landing/nav-verse-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

            </header>
            <!-- /header -->

            
            <?php echo $__env->yieldContent('landing/content'); ?>

        </div>
        <!-- /.content-wrapper -->

        <?php echo $__env->make('landing/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        
        <script src="<?php echo e(asset('assets/landing/js/plugins.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/landing/js/theme.js')); ?>"></script>
    </body>

</html><?php /**PATH T:\Clone KBS CORPU\kbs-corpu\resources\views/landing/master.blade.php ENDPATH**/ ?>