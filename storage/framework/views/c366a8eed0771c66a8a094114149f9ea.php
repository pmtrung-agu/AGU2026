<?php
$banner = App\Models\Banner::where('locale','=',app()->getLocale())
    ->where('status', '=', 1)->where('trang_chu', '=', 1)
    ->orderBy('order','asc')->orderBy('updated_at', 'desc')->get();
?>
<?php if($banner && count($banner) > 0): ?>
<div class="rs-container light rev_slider_wrapper">
    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"delay": 9000, "gridwidth": 1170, "gridheight": 500}'>
        <ul>
        <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(isset($b['photos'][0]['aliasname']) && $b['photos'][0]['aliasname']): ?>
            <li data-transition="fade" class="typo-dark heavy">
                <?php if(isset($b['url']) && $b['url']): ?>  <a href="<?php echo e($b['url']); ?>" style="width:auto !important; height:auto !important;"> <?php endif; ?>
                <img src="<?php echo e(env('APP_URL')); ?>storage/images/origin/<?php echo e($b['photos'][0]['aliasname']); ?>"
                    alt="<?php echo e(__($b['title'])); ?>"
                    title="<?php echo e(__($b['title'])); ?>"
                    data-bgposition="center center"
                    data-bgfit="cover"
                    data-bgrepeat="no-repeat"
                    class="rev-slidebg" style="width: 100% !important;">
                <?php if(isset($b['url']) && $b['url']): ?>  </a> <?php endif; ?>
            </li>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div><!-- Home Slider -->
<?php endif; ?>
<?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/widget_banner.blade.php ENDPATH**/ ?>