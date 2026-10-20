<?php $__env->startSection('title', __('Trang Thông tin về Phát triển bền vững Trường Đại học An Giang')); ?>
<?php $__env->startSection('body'); ?>
<style>
    h5.student-name {
        font-size: 20px;
    }
    a:hover {
        color: #00bb62 !important;
        font-weight:bold;
    }
    .phat-trien-ben-vung h3 {
        font-size: 28px; font-weight: bold;color:#00964b;
        text-align: center;
        padding: 0px 0px 30px 0px;
    }
    .phat-trien-ben-vung h4 a {
        font-size: 18px; font-weight: 300 !important;
        color: #0064b4;
    }
    .news-wrap .news-content {
        padding: 0px;
    }
    .news-wrap .news-content h5 {
        font-size: 16px;
    }
</style>
<?php
$banner = App\Models\Banner::where('status' , '=', 1)->where('phat_trien_ben_vung', '=', 1)
        ->orderBy('order','asc')->orderBy('updated_at', 'asc')->get();
?>
<?php if($banner && count($banner) > 0): ?>
<section class="home-slider">
    <div class="owl-carousel testimonial-owl-carousel-home owl-theme">
        <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(isset($b['photos'][0]['aliasname']) && $b['photos'][0]['aliasname']): ?>
        <div class="item">
            <?php if(isset($b['url']) && $b['url']): ?>  <a href="<?php echo e($b['url']); ?>" style="width:auto !important; height:auto !important;"> <?php endif; ?>
                <img src="<?php echo e(env('APP_URL')); ?>storage/images/origin/<?php echo e($b['photos'][0]['aliasname']); ?>" alt="<?php echo e($b['photos'][0]['title']); ?>" title="<?php echo e($b['photos'][0]['title']); ?>" style="width:100%;">
            <?php if(isset($b['url']) && $b['url']): ?>  </a> <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
    </div>
</section>
<?php endif; ?>
<section class="sptb phat-trien-ben-vung">
    <div class="container">
        <div class="row">
            <div class="col-12"><h3>Quy tắc về Bảo vệ Môi trường và Phát triển Bền vững tại Trường Đại học An Giang</h3></div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="card overflow-hidden gallery-item">
                    <div class="card-body">
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/ve-nguon-nang-luong">
                            <div class="gallery-card">
                                <div class="gallery-card-desc">
                                    <div class="gallery-card">
                                        <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/2026/images/phattrienbenvung/h1.jpg" alt="Về nguồn năng lượng" title="Về nguồn năng lượng" class="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="text-center mt-5">
                            <h4><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/ve-nguon-nang-luong">Về nguồn năng lượng</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="card overflow-hidden gallery-item">
                    <div class="card-body">
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/ve-nguon-nuoc">
                            <div class="gallery-card">
                                <div class="gallery-card-desc">
                                    <div class="gallery-card">
                                        <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/2026/images/phattrienbenvung/h2.jpg" alt="Về nguồn nước" title="Về nguồn nước" class="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="text-center mt-5">
                            <h4><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/ve-nguon-nuoc">Về nguồn nước</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="card overflow-hidden gallery-item">
                    <div class="card-body">
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/hoat-dong-tai-che">
                            <div class="gallery-card">
                                <div class="gallery-card-desc">
                                    <div class="gallery-card">
                                        <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/2026/images/phattrienbenvung/h3.jpg" alt="Hoạt động Tái chế" title="Hoạt động Tái chế" class="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="text-center mt-5">
                            <h4><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/hoat-dong-tai-che">Hoạt động Tái chế</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="card overflow-hidden gallery-item">
                    <div class="card-body">
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/no-luc-cai-thien-tinh-hinh-giao-thong">
                            <div class="gallery-card">
                                <div class="gallery-card-desc">
                                    <div class="gallery-card">
                                        <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/2026/images/phattrienbenvung/h3.jpg" alt="Nỗ lực cải thiện tình hình giao thông" title="Nỗ lực cải thiện tình hình giao thông" class="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="text-center mt-5">
                            <h4><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/no-luc-cai-thien-tinh-hinh-giao-thong">Nỗ lực cải thiện tình hình giao thông</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sptb phat-trien-ben-vung" style="background:#ffff99;margin-top:-50px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3><?php echo e(__('Các hoạt động Phát triển bền vững tại Trường Đại học An Giang')); ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="card overflow-hidden gallery-item">
                    <div class="card-body">
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(APP()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/tai-su-dung-tai-lieu-giao-trinh">
                            <div class="gallery-card">
                                <div class="gallery-card-desc">
                                    <div class="gallery-card">
                                        <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/2026/images/phattrienbenvung/h5.jpg" alt="Tái sử dụng tài liệu giáo trình" title="Tái sử dụng tài liệu giáo trình" class="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="text-center mt-5">
                            <h4><a href="<?php echo e(env('APP_URL')); ?><?php echo e(APP()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/tai-su-dung-tai-lieu-giao-trinh">Tái sử dụng tài liệu giáo trình</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="card overflow-hidden gallery-item">
                    <div class="card-body">
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/hoat-dong-trao-doi-sach">
                            <div class="gallery-card">
                                <div class="gallery-card-desc">
                                    <div class="gallery-card">
                                        <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/2026/images/phattrienbenvung/h6.jpg" alt="Hoạt động trao đổi sách" title="Hoạt động trao đổi sách" class="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="text-center mt-5">
                            <h4><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/hoat-dong-trao-doi-sach">Hoạt động trao đổi sách</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="card overflow-hidden gallery-item">
                    <div class="card-body">
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/thu-nhan-pin-da-su-dung">
                            <div class="gallery-card">
                                <div class="gallery-card-desc">
                                    <div class="gallery-card">
                                        <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/2026/images/phattrienbenvung/h7.jpg" alt="Thu nhận Pin đã sử dụng" title="Thu nhận Pin đã sử dụng" class="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="text-center mt-5">
                            <h4><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/thu-nhan-pin-da-su-dung">Thu nhận Pin đã sử dụng</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 col-md-3">
                <div class="card overflow-hidden gallery-item">
                    <div class="card-body">
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/tao-san-pham-handmake-tu-vat-lieu-tai-che">
                            <div class="gallery-card">
                                <div class="gallery-card-desc">
                                    <div class="gallery-card">
                                        <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/2026/images/phattrienbenvung/h8.jpg" alt="Tạo sản phẩm handmade từ vật liệu tái chế" title="Tạo sản phẩm handmade từ vật liệu tái chế" class="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="text-center mt-5">
                            <h4><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/tao-san-pham-handmake-tu-vat-lieu-tai-che">Tạo sản phẩm handmade từ vật liệu tái chế</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if($tin_moi_nhat && $tin_moi_nhat->count() > 0): ?>
<section class="sptb mt-9">
    <div class="container">
        <section class="typo-dark">
            <div class="container">
                <div class="row">
                    <!-- Title -->
                    <div class="col-sm-12">
                        <div class="title-container">
                            <div class="title-wrap">
                                <h3 class="title"><?php echo e(__('Tin tức – Sự kiện về phát triển bền vững')); ?></h3>
                                <span class="separator line-separator"></span>
                            </div>
                        </div>
                    </div><!-- Title -->
                </div><!-- Row -->
                <div class="row">
                    <?php if($tin_moi_nhat && count($tin_moi_nhat) > 0): ?>
                        <?php $__currentLoopData = $tin_moi_nhat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tmn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Item Begins -->
                            <div class="col-sm-4">
                                <!-- Blog Grid Wrapper -->
                                <div class="blog-wrap">
                                    <!-- Blog Image Wrapper -->
                                    <div class="blog-img-wrap">
                                        <?php if(isset($tmn['photos'][0]['aliasname']) && $tmn['photos'][0]['aliasname']): ?>
                                            <img width="600" height="220" src="<?php echo e(env('APP_ASSETS')); ?>storage/images/thumb_360x200/<?php echo e($tmn['photos'][0]['aliasname']); ?>" class="img-responsive" alt="<?php echo e($tmn['ten']); ?>">
                                        <?php else: ?>
                                            <img width="600" height="220" src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/images/blog/blog-02.jpg" class="img-responsive" alt="<?php echo e($tmn['ten']); ?>">
                                        <?php endif; ?>
                                    </div><!-- Blog Wraper -->
                                    <!-- Blog Detail Wrapper -->
                                    <div class="blog-details">
                                        <h5><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/<?php echo e($tmn['slug']); ?>" title="<?php echo e($tmn['ten']); ?>"><?php echo e($tmn['ten']); ?></a></h5>
                                        <ul class="blog-meta">
                                            <li><i class="fa fa-calendar-o"></i> <?php echo e(App\Http\Controllers\ObjectController::getDate($tmn['date_post'], "d/m/Y")); ?></li>
                                            <li>
                                                <?php if(isset($tmn['id_sdg_tags']) && $tmn['id_sdg_tags']): ?>
                                                    <?php $__currentLoopData = $tmn['id_sdg_tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/images/sdg-tags/<?php echo e($st); ?>_<?php echo e($tmn['locale']); ?>.png" alt="<?php echo e(__($sdg_tags[$st])); ?>" title="<?php echo e(__($sdg_tags[$st])); ?>" style="height: 25px;cursor: pointer;"/>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </li>
                                        </ul><!-- Blog Meta -->
                                        <p class="mo_ta"><?php echo e($tmn['mo_ta']); ?></p>
                                        <a class="btn" href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/<?php echo e($tmn['slug']); ?>"><?php echo e(__('Xem thêm')); ?></a>
                                    </div><!-- Blog Detail Wrapper -->
                                </div><!-- Blog Wrapper -->
                            </div><!-- Column -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <br />
                <div class="row">
                    <div class="col-12 text-right">
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('phat-trien-ben-vung')); ?>/tin-tuc-su-kien" class="btn btn-primary bg-pink"><?php echo e(__('Xem tất cả')); ?></a>
                    </div>
                </div>

            </div><!-- Container -->
        </section><!-- Section -->
    </div>
</section>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.2026.PhatTrienBenVung.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/2026/PhatTrienBenVung/index.blade.php ENDPATH**/ ?>