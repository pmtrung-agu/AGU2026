<?php $__env->startSection('title', __($title)); ?>
<?php $__env->startSection('body'); ?>
<?php if($danhsach): ?>
<section class="sptb mt-9 tin-moi-nhat">
    <div class="container">
        <div class="section-title">
          <h2><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?php echo e(__($title)); ?></h2>
        </div>
        <div class="row">
            <?php $__currentLoopData = $danhsach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tmn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-4 col-md-6">
                    <div class="card overflow-hidden">
                      <div class="item-card7-img pt-5 px-5">
                        <div class="item-card7-imgs">
                          <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('chi-tiet-thong-tin')); ?>/<?php echo e($tmn['slug']); ?>" title="<?php echo e($tmn['ten']); ?>"></a>
                            <?php if(isset($tmn['photos'][0]['aliasname']) && $tmn['photos'][0]['aliasname']): ?>
                              <img width="600" height="220" src="<?php echo e(env('APP_ASSETS')); ?>storage/images/thumb_360x200/<?php echo e($tmn['photos'][0]['aliasname']); ?>" class="cover-image br-7 border" alt="<?php echo e($tmn['ten']); ?>">
                            <?php else: ?>
                                <img width="600" height="220" src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/images/blog/blog-02.jpg" class="cover-image br-7 border" alt="<?php echo e($tmn['ten']); ?>">
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="item-card7-desc">
                          <div class="item-card7-text">
                            <a href="javascript:void(0)" class="text-dark">
                              <h4 class="font-weight-semibold"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('chi-tiet-thong-tin')); ?>/<?php echo e($tmn['slug']); ?>" title="<?php echo e($tmn['ten']); ?>"><?php echo e($tmn['ten']); ?></a></h4>
                            </a>
                          </div>
                          <div class="mb-1">
                            <a class="me-4">
                              <span class="text-date"><i class="fa fa-calendar-o"></i> <?php echo e(App\Http\Controllers\ObjectController::getDate($tmn['date_post'], "d/m/Y")); ?></span>
                            </a>
                            <a class="me-4 float-end">
                              <?php if(isset($tmn['id_sdg_tags']) && $tmn['id_sdg_tags']): ?>
                                  <?php $__currentLoopData = $tmn['id_sdg_tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/2026/images/sdg-tags/<?php echo e($st); ?>_<?php echo e($tmn['locale']); ?>.png" alt="<?php echo e(__($sdg_tags[$st])); ?>" title="<?php echo e(__($sdg_tags[$st])); ?>" style="height: 25px;cursor: pointer;"/>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php endif; ?>
                            </a>
                          </div>
                          <p class="mb-0 text-mo-ta" alt="<?php echo e($tmn['mo_ta']); ?>" title="<?php echo e($tmn['mo_ta']); ?>"><?php echo e(Str::limit($tmn['mo_ta'], 200)); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.2026.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/2026/thong-tin.blade.php ENDPATH**/ ?>