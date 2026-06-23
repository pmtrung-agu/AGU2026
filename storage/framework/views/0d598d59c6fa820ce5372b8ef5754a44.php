
<?php $__env->startSection('title', __("Home")); ?>
<?php $__env->startSection('body'); ?>
<div class="row">
    <div class="col-12">
        <div class="card-box text-center">
            <img src="<?php echo e(env('APP_URL')); ?>assets/backend/images/cover.png" alt="" align="center" style="width:100%; max-width: 700px;">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Admin/index.blade.php ENDPATH**/ ?>