<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title', __('Trang chủ')); ?> - <?php echo e(__('Trường Đại học An Giang')); ?></title>
    <meta name="keywords" content="<?php echo e(__('Trường Đại học An Giang')); ?> - <?php echo $__env->yieldContent('title'); ?>" />
    <meta name="description" content="<?php echo e(__('Trường Đại học An Giang')); ?> - <?php echo $__env->yieldContent('description'); ?> ">
    <meta name="keywords" content="<?php echo $__env->yieldContent('title'); ?>"/>
    <meta name="news_keywords" content="<?php echo $__env->yieldContent('title'); ?>"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Phan Minh Trung - trungminhphan@gmail.com" name="author" />
    
    <meta property="fb:app_id" content="131376384294659"/>
    
    <link rel="image_src"  type="image/jpeg"  href="https://www.agu.edu.vn/assets/frontend/2022/images/AGU_THUMBNAIL_600x315.jpg" />
    <meta property="og:title"         content="<?php echo $__env->yieldContent('title', __('Đại học Quốc Gia TPHCM Trường Đại học An Giang ')); ?>" />
    <meta property="og:description"   content="<?php echo $__env->yieldContent('description', __('Đại học Quốc Gia TPHCM Trường Đại học An Giang')); ?>" />
    <meta property="og:site_name" content="www.agu.edu.vn - Trường Đại học An Giang, Đại học Quốc Gia Thành phố Hồ Chí Minh"/>
    <meta property="og:rich_attachment" content="true"/>
    <meta property="og:type" content="article"/>
    <meta property="article:publisher" content="https://www.facebook.com/AGUDHAG/"/>
    <meta property="og:url" itemprop="url" content="<?php echo e(Request::fullUrl()); ?>" />
    
    <meta property="og:image" itemprop="thumbnailUrl" content="https://www.agu.edu.vn/assets/frontend/2022/images/AGU_THUMBNAIL_600x315.jpg" />
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="315"/>
    <meta property="og:image:alt" content="<?php echo $__env->yieldContent('title', 'Trường Đại học An Giang, Đại học Quốc Gia Thành phố Hồ Chí Minh'); ?>"/>
    <meta property="og:type"          content="article website" />
    <meta name="robots" content="noarchive, max-image-preview:large, index"/>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/brand/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/brand/favicon.ico">
    <link id="style" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/css/style.css" rel="stylesheet"> 		
    <link href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/css/plugins.css" rel="stylesheet">	
    <link href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/css/icons.css" rel="stylesheet">
    <!--<link href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" type="text/css" media="all">-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/color-skins/color.css">
    <meta http-equiv="imagetoolbar" content="no">
    <?php $__env->startSection('css'); ?> <?php echo $__env->yieldSection(); ?>
</head>
<body>
<div class="horizontalMenucontainer">
    <div class="top-header">
        <div class="row">
            <div class="col-12 col-md-8" style="text-align:left;">
                <i class="fa fa-envelope"></i> webmaster@agu.edu.vn
                &nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-phone"></i> +84 296 6256565 ext 1900
            </div>
            <div class="col-12 col-md-3">
                <form action="" class="form-group home-search">
                  <div class="input-group">
                    <input type="text" name="" id="" class="form-control" placeholder="Tìm kiếm nội dung">
                    <span class="input-group-btn">
                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </form>
            </div>
            <?php
                $path = App\Http\Controllers\TranslatePathController::getPath(Request::path());
                $locale = app()->getLocale();
                
                if($path) {
                    if($locale == 'vi'){
                        $path_vi = env('APP_URL') . Request::path();
                        $path_en = env('APP_URL') . $path;
                    } else {
                        $path_en = env('APP_URL') . Request::path();
                        $path_vi = env('APP_URL') . $path;
                    }
                } else {
                    $path_vi = env('APP_URL') . 'vi';
                    $path_en = env('APP_URL') . 'en';
                }

                if($locale == 'vi'){ 
                    $path_searh = env('APP_URL') . 'vi/tim-kiem';
                } else {
                    $path_searh = env('APP_URL') . 'en/search';
                }
            ?>
            <div class="col-12 col-md-1" style="text-align:center;">
                <ul class="languages-block">
                    <li><a href="<?php echo e($path_en); ?>" title="<?php echo e(__('English')); ?>">EN</a></li> | 
                    <li><a href="<?php echo e($path_vi); ?>" title="<?php echo e(__('Tiếng Việt')); ?>">VI</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="global-loader" style="display: none;">
        <img src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/loader.svg" class="loader-img" alt="img">
    </div>
    <div class="sticky sticky-pin" style="margin-bottom: 0px;">
        <div class="horizontal-header clearfix ">
            <div class="container">
                <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                <span class="smllogo">
                    <img src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/brand/logo_<?php echo e(app()->getLocale()); ?>_white.png" width="250" alt="img">
                </span>
                <span class="smllogo-white">
                    <img src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/brand/logo_<?php echo e(app()->getLocale()); ?>_white.png" width="250" alt="img">
                </span>
                <a href="tel:245-6325-3256" class="callusbtn"><i class="icon icon-phone" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="jumps-prevent" style="padding-top: 0px;"></div>
    <!-- /Mobile Header -->
    <!--Horizontal-main -->
    <div id="sticky-wrapper" class="sticky-wrapper" style="height: 80.7812px;">
        <div class="horizontal-main header-style1  bg-dark-transparent clearfix" style="width: 1277px;">
        <div class="horizontal-mainwrapper container clearfix">
            <div class="desktoplogo">
            <a href="<?php echo e(env('APP_URL')); ?>">
                <img src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/brand/logo_<?php echo e(app()->getLocale()); ?>.png" class="header-dark" alt="Trường Đại học An Giang" style="width:300px;">
                <img src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/brand/logo_<?php echo e(app()->getLocale()); ?>.png" class="header-brand-img header-white" alt="Trường Đại học An Giang"  style="width:300px;">
            </a>
            </div>
            <div class="desktoplogo-1">
            <a href="<?php echo e(env('APP_URL')); ?>">
                <img src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/brand/logo_<?php echo e(app()->getLocale()); ?>.png" class="header-dark" alt="img"  style="width:300px;">
                <img src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/brand/logo_<?php echo e(app()->getLocale()); ?>.png" class="header-brand-img header-white" alt="logo"  style="width:300px;">
            </a>
            </div>
            <nav class="horizontalMenu clearfix d-md-flex">
            <div class="horizontal-overlapbg"></div>
              
              <?php echo $__env->make('Frontend.2026.menu-'.app()->getLocale(), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </nav>
        </div>
      </div>
    </div>
    <?php $__env->startSection('body'); ?> <?php echo $__env->yieldSection(); ?>
    
     <!--Footer Section-->
    <footer class="bg-agu-blue footer-agu">
      <div class="footer-main footer-main1">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <img src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/brand/logo_<?php echo e(app()->getLocale()); ?>_white.png" class="w-auto border-0" alt="img">
                      <ul class="list-unstyled mb-0 mt-4">
                        <li>Địa chỉ: số 18, đường Ung Văn Khiêm, phường Long Xuyên, tỉnh An Giang</li>
                        <li>Điện thoại: <a href="tel:+84 2963.945454">+84 2963.945454</a></li>
                        <li>Email: <a href="mailto:webmaster@agu.edu.vn">webmaster@agu.edu.vn</a></li>
                        <li>Fax:<a href="tel:+84 296 3842560"> +84 296 3842560</a></li>
                      </ul>
                      <ul class="list-unstyled list-inline mt-5 mb-lg-0 mb-5">
                        <li class="list-inline-item"><a class="social-icons btn-sm rgba-white-slight waves-effect waves-light"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icons btn-sm rgba-white-slight waves-effect waves-light"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="social-icons btn-sm rgba-white-slight waves-effect waves-light"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a class="social-icons btn-sm rgba-white-slight waves-effect waves-light"><i class="fa fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a class="social-icons btn-sm rgba-white-slight waves-effect waves-light"><i class="fa fa-github"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                      <h6 class="font-weight-normal text-white">Các Khoa - Bộ môn</h6>
                        <ul class="list-unstyled mb-5 mb-lg-0">
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Khoa Nông nghiệp - TNTN</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Khoa Kinh tế - QTKD</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Khoa Công nghệ Thông tin</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Khoa KT-CN-MT</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Khoa Sư phạm</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Khoa Luật - KHCT</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Khoa Ngoại ngữ</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Khoa Du lịch - VHNT</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Bộ môn Giáo dục Thể chất</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Bộ môn Giáo dục Quốc phòng</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12">
                      <h6 class="font-weight-normal text-white">Đơn vị Chức năng</h6>
                        <ul class="list-unstyled mb-5 mb-lg-0">
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Phòng Khảo thí và ĐBCL</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Phòng Quan hệ đối ngoại</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Phòng Khoa học và Công nghệ</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Phòng Hành chính - Tổng hợp</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Phòng Tố chức - Chính trị</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Phòng Công tác sinh viên</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Phòng Quản trị - Thiết bị</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Phòng Kế hoạch - Tài vụ</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Thư viện</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Trung tâm BDNG và PTKN</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12">
                      <h6 class="font-weight-normal text-white">Đơn vị Chức năng - Tổ chức Chính trị Xã hội</h6>
                        <ul class="list-unstyled mb-5 mb-lg-0">
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Trung tâm Tin học và Ngoại ngữ</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Viện Biến đổi Khí hậu</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Trung tâm Dịch vụ Ký túc xá</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Trường PT Thực hành Sư phạm</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Đảng ủy</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Công đoàn</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Đoàn Thanh niên</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Hội Sinh viên</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Cựu sinh viên</a></li>
                          <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Hội Cựu giáo chức</a></li>
                        </ul>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="py-3 bg-dark">
        <div class="container">
          <div class="row d-flex">
            <div class="col-lg-12 col-sm-12  mt-2 mb-2 text-center text-white">
              © <span id="year">2026 </span><a href="https://www.agu.edu.vn" class="fs-16"> Trường Đại học An Giang </a>| Phát triển bởi <a href="https://citfl.agu.edu.vn/" target="_blank" class="fs-16"> Trung tâm Tin học và Ngoại ngữ Trường Đại học An Giang  </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--Footer Section-->
</div>  
      
    <!-- Back to top -->
    <a href="#top" id="back-to-top" style="display: none;">
    <i class="fa fa-long-arrow-up"></i>
    </a>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/js/jquery.min.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/bootstrap/js/popper.min.js"></script>    
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/js/jquery.sparkline.min.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/js/circle-progress.min.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/jquery-bar-rating/jquery.barrating.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/jquery-bar-rating/js/rating.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/counters/counterup.min.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/counters/waypoints.min.js"></script>   
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/counters/numeric-counter.js"></script>  
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/owl-carousel/owl.carousel.js"></script>  
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/horizontal-menu/horizontal-menu.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/js/sticky.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/js/jquery.touchSwipe.min.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/select2/select2.full.min.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/js/select2.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/jquery.flexdatalist/jquery.flexdatalist.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/jquery.flexdatalist/data-list.js"></script>    
    <!--<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/pscrollbar/pscrollbar.js"></script> -->
    <!--<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/cookie/jquery.ihavecookies.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/plugins/cookie/cookie.js"></script>-->
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/js/owl-carousel.js"></script>    
    <!--<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/switcher/js/switcher.js"></script>    -->
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/js/themeColors.js"></script>   
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/js/switcher-styles.js"></script>
    <script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/js/custom.js"></script>
    <?php $__env->startSection('js'); ?> <?php echo $__env->yieldSection(); ?>
</body>
</html><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/2026/layout.blade.php ENDPATH**/ ?>