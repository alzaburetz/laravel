

<?php $__env->startSection('content'); ?>
<h2>The url is <?php echo e($url); ?></h2>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>