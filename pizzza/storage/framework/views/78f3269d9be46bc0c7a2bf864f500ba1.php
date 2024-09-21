<?php $__env->startSection('title',$result->nev); ?>
<?php $__env->startSection('content'); ?>
    <div class="container py-3">
        <h1 class="text-center display-5"><?php echo e($result->nev); ?></h1>
        <p><?php echo e($result->feltet); ?></p>
        <?php if($result->akcios == 1): ?>
            <p>ez a pizza most akciós</p>
            <ul>
                <li>24 cm <s><?php echo e($result->ar); ?></s> helyett <span class="text-danger"><?php echo e($result->ar*0.9); ?></span></li>
                <li>22 cm <s><?php echo e($result->ar*1.25); ?></s> helyett <span class="text-danger"><?php echo e($result->ar*0.9*1.25); ?></span></li>
                <li>45 cm <s><?php echo e($result->ar*1.50); ?></s>  helyett <span class="text-danger"><?php echo e($result->ar*0.9*1.5); ?></span></li>
            </ul>
        <?php else: ?>
            <p>ez a pizza nem akciós</p>
            <ul>
                <li>24 cm <?php echo e($result->ar); ?></li>
                <li>22 cm <?php echo e($result->ar*1.25); ?></li>
                <li>45 cm <?php echo e($result->ar*1.50); ?></li>
            </ul>

        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\boton\Desktop\progi\pizzza\pizzza\resources\views/adatlap.blade.php ENDPATH**/ ?>