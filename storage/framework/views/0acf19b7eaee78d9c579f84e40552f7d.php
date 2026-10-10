<?php
$banner = App\Models\Banner::where('locale','=',app()->getLocale())
    ->where('status', '=', 1)->where('trang_chu', '=', 1)
    ->orderBy('order','asc')->orderBy('updated_at', 'desc')->get();
?>

<?php if($banner && count($banner) > 0): ?>
<section class="home-slider">
    <div class="owl-carousel testimonial-owl-carousel-home owl-theme">
        <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(isset($b['photos'][0]['aliasname']) && $b['photos'][0]['aliasname']): ?>
        <div class="item">
            <?php if(isset($b['url']) && $b['url']): ?>  <a href="<?php echo e($b['url']); ?>" style="width:auto !important; height:auto !important;"> <?php endif; ?>
            <img src="<?php echo e(env('APP_URL')); ?>storage/images/origin/<?php echo e($b['photos'][0]['aliasname']); ?>" alt="" style="width:100%;">
            <?php if(isset($b['url']) && $b['url']): ?>  </a> <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
    </div>
</section>
<?php endif; ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/2026/widget_banner.blade.php ENDPATH**/ ?>