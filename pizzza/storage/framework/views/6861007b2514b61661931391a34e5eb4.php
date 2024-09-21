    
    <?php $__env->startSection('title','összes pizzank'); ?>
    <?php $__env->startSection('content'); ?>
    <div class="container py-3">
        <h1 class="text-center display-5">Összes pizzak</h1>
        <table class="table table-striped">
            <tr>
                <th>nev</th>
                <th>feltetek</th>
                <th>24 cm</th>
                <th>32 cm</th>
                <th>45 cm</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->nev); ?></td>
                <td><?php echo e($row->feltet); ?></td>
                <td><?php if($row->akcios == 1): ?>
                    <span class="text-danger"><?php echo e($row->ar*0.9); ?> Ft</span>
                <?php else: ?>
                    <?php echo e($row->ar); ?> Ft
                <?php endif; ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bástyai\pizzza\resources\views/all.blade.php ENDPATH**/ ?>