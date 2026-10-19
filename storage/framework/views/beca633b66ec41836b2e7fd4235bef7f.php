<?php $__env->startSection('title', __('Giới thiệu - Bài hát Đại Học An Giang Trường Chúng Tôi')); ?>
<?php $__env->startSection('body'); ?>
<section class="sptb mt-9">
    <div class="container">
        <div class="blog-single-details">
            <h4>Bài hát "Đại Học An Giang Trường Chúng Tôi"</h4>
             <p class="text-center">
                <video controls poster="<?php echo e(env('APP_URL')); ?>assets/frontend/2026/images/poster.png" style="width:100%">
                    <source src="<?php echo e(env('APP_URL')); ?>assets/frontend/2026/videos/agu_song.webm" type="video/mp4">
                </video>
            </p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.2026.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/2026/GioiThieu/bai-hat-dhag-truong-chung-toi.blade.php ENDPATH**/ ?>