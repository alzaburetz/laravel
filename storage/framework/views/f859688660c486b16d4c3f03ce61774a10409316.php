

<?php $__env->startSection('content'); ?>
<?php if(count($authors) > 0): ?>
<?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container">

        <a class="btn btn-dark" href="/authors/<?php echo e($author->author_id); ?>"><?php echo e($author->name); ?></a>
        <p></p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    <div class="alert-danger">
        NO AUTHORS <a href="/">GO BACk</a>
    </div>
    <?php endif; ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>