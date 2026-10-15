<?php $__env->startSection('title', __('Giới thiệu - Brochure Giới thiệu')); ?>
<?php $__env->startSection('body'); ?>
<div class="sptb mt-9">
    <div class="container">
        <div class="blog-single-details">
            <h3>Brochure</h3>
        </div>
        <?php if(app()->getLocale() == 'vi'): ?>
            
            
            <iframe src="https://drive.google.com/file/d/100QuZV47_SRbIQLm22qvWK-jluqZrFCO/preview" style="width:100%;height:800px;"></iframe>
        <?php else: ?>
            <iframe src="https://drive.google.com/file/d/1OJSKarNjU6e9e0wOrRfKhHm6Ex4LQv8H/preview" style="width:100%;height:800px;"></iframe>
            
            
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Frontend.2026.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/2026/GioiThieu/brochure.blade.php ENDPATH**/ ?>