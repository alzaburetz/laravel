<?php $__env->startSection('content'); ?>
            <a href="/json_" class="btn btn-dark">This button will return json</a>
            <a href="/authors" class="btn btn-dark">Authors of items</a>
            <?php if(!Auth::guest()): ?>

                <p></p>
                <a href="/logonly/32">Holy link</a>
            <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>