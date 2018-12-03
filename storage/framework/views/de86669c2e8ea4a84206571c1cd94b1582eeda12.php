

<?php $__env->startSection('content'); ?>
<?php if(count($items) > 0): ?>
<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container">
        <p class="card list-group-item"><?php echo e($item->item); ?></p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
<div class="container">
    <p class="alert-danger">NO ITEMS<a href="/authors"> GO BACK</a></p>
</div>
    <?php endif; ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>