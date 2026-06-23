<?php $__env->startSection('title', __('Giới thiệu - Tổ chức bộ máy')); ?>
<?php $__env->startSection('body'); ?>
<div class="page-default typo-dark">
    <div class="container">
        <div class="blog-single-details">
            <h4>Sơ đồ Tổ chức</h4>
            <p class="text-center">
                <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/images/gioithieu/co-cau-to-chuc-vi.jpg" alt="Trường Đại học An Giang" align="center" style="width:100%;">
            </p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/GioiThieu/so-do-to-chuc.blade.php ENDPATH**/ ?>