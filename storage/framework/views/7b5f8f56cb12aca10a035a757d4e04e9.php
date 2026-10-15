
<?php $__env->startSection('body'); ?>
<?php echo $__env->make('Frontend.2026.widget_banner', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <section class="thong-tin-tuyen-sinh-home">
      <div class="cover-image sptb bg-background-color text-white" data-bs-image-src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/banners/banner3.jpg" style="background: url(&quot;<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/banners/banner3.jpg&quot;) center center;">
        <div class="content-text mb-0">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="section-title pb-4">
                  <h2><i class="fa fa-graduation-cap" aria-hidden="true"></i> Thông tin tuyển sinh 2026</h2>
                </div>
                <?php if($thong_tin_tuyen_sinh): ?>
                <ul class="list-style fs-16 text-white student-feature-icons">
                  <?php $__currentLoopData = $thong_tin_tuyen_sinh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="py-2"><i class="fe fe-check me-3" style="float:left;"></i> <a href="https://tuyensinh.agu.edu.vn/tin-tuc/<?php echo e($ts['slug']); ?>" target="_blank"><?php echo e($ts['title']); ?></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                <div class="mt-6 text-right">
                  <a class="btn btn-secondary" href="https://tuyensinh.agu.edu.vn" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i> Xem tất cả</a>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section-->
    <?php if($tin_moi_nhat && count($tin_moi_nhat) > 0): ?>
    <section class="sptb tin-moi-nhat">
      <div class="container">
        <div class="section-title">
          <h2><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tin mới nhất</h2>
        </div>
        <div class="panel panel-primary">
          <div class="">
            <div class="tabs-menu ">
              <!-- Tabs -->
              <ul class="nav panel-tabs eductaional-tabs mb-6">
                <li class="">
                  <a href="#tab1" class="active show" data-bs-toggle="tab"><i class="fa fa-list-alt" aria-hidden="true"></i> Tất cả</a>
                </li>
                
                <li>
                  <a href="#tab3" data-bs-toggle="tab" class=""><i class="fa fa-cogs" aria-hidden="true"></i> Tin tức - Sự kiện</a>
                </li>
                <li>
                  <a href="#tab4" data-bs-toggle="tab" class=""><i class="fa fa-bell" aria-hidden="true"></i> Thông báo</a>
                </li>
                <li>
                  <a href="#tab5" data-bs-toggle="tab" class=""><i class="fa fa-tags" aria-hidden="true"></i> Quy chế công khai</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="panel-body p-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab1">
                <div class="row">
                  <?php $__currentLoopData = $tin_moi_nhat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tmn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
              
              <div class="tab-pane" id="tab3">
                <div class="row">
                 <?php $__currentLoopData = $tin_moi_nhat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tmn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                          <p class="mb-0 text-mo-ta" alt="<?php echo e($tmn['mo_ta']); ?>" title="<?php echo e($tmn['mo_ta']); ?>"><?php echo e(Str::limit($tmn['mo_ta'], 150)); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
              <div class="tab-pane" id="tab4">
                <div class="row">
                 <?php $__currentLoopData = $tin_moi_nhat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tmn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                          <p class="mb-0 text-mo-ta" alt="<?php echo e($tmn['mo_ta']); ?>" title="<?php echo e($tmn['mo_ta']); ?>"><?php echo e(Str::limit($tmn['mo_ta'], 150)); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-6 text-right">
          <?php if(app()->getLocale() == 'vi'): ?>
            <a class="btn btn-secondary" href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/tin-tuc-su-kien/tin-moi-nhat"><i class="fa fa-paper-plane" aria-hidden="true"></i> Xem tất cả</a>
          <?php else: ?>
            <a class="btn btn-secondary" href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/news-and-events"><i class="fa fa-paper-plane" aria-hidden="true"></i> Xem tất cả</a>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <!--/Section-->
    <?php endif; ?>
    <!--Section-->
    <section class="sptb position-relative cover-image bg-background" data-bs-image-src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/banners/pattern3.png" style="background: url('<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/patterns/agu.png') center center;">
      <div class="container">
        <div class="section-title">
          <h2 class="position-relative" style="color:#000000"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Lịch công tác</h2>
        </div>
        <div class="row">
          <div class="col-md-12">
              <span class="loading bg-orange"><i class="uni-repeat-2"></i> Đang tải, vui lòng chờ</span>
              <div class="col-sm-12 col-md-12" id="calendar"></div>
              <br />
              <div class="col-sm-12 col-md-12">
                  <p><a class="btn btn-secondary" href="https://calendar.google.com/calendar/u/0/r?cid=agu.edu.vn_qf2qof63stvjftctim9u8clh6c@group.calendar.google.com" target="_blank"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Xem thêm </a></p>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!--/Section-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.2026.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/2026/index.blade.php ENDPATH**/ ?>