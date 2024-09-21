<?php $__env->startSection('title','akciós pizzak'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container py-3">
        <h1 class="text-center display-5">akcios pizzak</h1>
        <div class="row">
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <h2><a href="/adatlap/<?php echo e($row->id); ?>"><?php echo e($row->nev); ?></a></h2>
                <p><?php echo e($row->feltet); ?></p>
                <p>Akciós ár (24 cm)
                    <br>
                    <s><?php echo e($row->ar); ?></s> helyett
                     <span class="text-danger"><b><?php echo e($row->ar*0.9); ?></b></span>
                </p>
                <p class="text-end">
                    <a href="/all">További méretek</a>
                </p>
                <hr>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\boton\Desktop\progi\pizzza\pizzza\resources\views/welcome.blade.php ENDPATH**/ ?>