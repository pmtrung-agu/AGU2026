<!DOCTYPE html>
<html>
    <head>
        <!-- Basic -->
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
        
        <link rel="image_src"  type="image/jpeg"  href="https://www.agu.edu.vn/assets/frontend/images/AGU_THUMBNAIL_600x315.jpg" />
        <meta property="og:title"         content="<?php echo $__env->yieldContent('title', __('Đại học Quốc Gia TPHCM Trường Đại học An Giang ')); ?>" />
        <meta property="og:description"   content="<?php echo $__env->yieldContent('description', __('Đại học Quốc Gia TPHCM Trường Đại học An Giang')); ?>" />
        <meta property="og:site_name" content="www.agu.edu.vn - Trường Đại học An Giang, Đại học Quốc Gia Thành phố Hồ Chí Minh"/>
        <meta property="og:rich_attachment" content="true"/>
        <meta property="og:type" content="article"/>
        <meta property="article:publisher" content="https://www.facebook.com/AGUDHAG/"/>
        <meta property="og:url" itemprop="url" content="<?php echo e(Request::fullUrl()); ?>" />
        
        <meta property="og:image" itemprop="thumbnailUrl" content="https://www.agu.edu.vn/assets/frontend/images/AGU_THUMBNAIL_600x315.jpg" />
        <meta property="og:image:width" content="600"/>
        <meta property="og:image:height" content="315"/>
        <meta property="og:image:alt" content="<?php echo $__env->yieldContent('title', 'Trường Đại học An Giang, Đại học Quốc Gia Thành phố Hồ Chí Minh'); ?>"/>
        <meta property="og:type"          content="article website" />
        <meta name="robots" content="noarchive, max-image-preview:large, index"/>
                
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/images/favicon.ico">
        <!-- Web Fonts  -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
        <!-- Lib CSS -->
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/css/lib/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/css/lib/animate.min.css">
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/css/lib/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/css/lib/icons.css">
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/css/lib/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/css/lib/prettyPhoto.css">
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/css/lib/menu.css">
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/css/lib/timeline.css">
        <!-- Revolution CSS -->
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/revolution/css/settings.css">
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/revolution/css/layers.css">
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/revolution/css/navigation.css">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/css/theme.css">
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/css/theme-responsive.css">
        <!--[if IE]>
            <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/css/ie.css">
        <![endif]-->
        <!-- Head Libs -->
        
        <!-- Skins CSS -->
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/css/skins/default.css">
        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/css/custom.css">
        <?php $__env->startSection('css'); ?> <?php echo $__env->yieldSection(); ?>
    </head>
<body>

<!-- Page Loader -->
<div id="pageloader">
    <div class="loader-inner">
        <img src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/images/preloader.gif" alt="Trường Đại học An Giang">
    </div>
</div><!-- Page Loader -->
<!-- Back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- Header Begins -->
<header id="header" class="default-header colored flat-menu">
    <div class="header-top">
        <div class="container">
            <nav>
                <ul class="nav nav-pills nav-top">
                    <li class="phone">
                        <span><i class="fa fa-envelope"></i>webmaster@agu.edu.vn</span>
                    </li>
                    <li class="phone">
                        <span><i class="fa fa-phone"></i>+84 296 6256565 ext 1900</span>
                    </li>
                </ul>
            </nav>
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
            <ul class="social-icons color">
                <li class="digg"><a title="<?php echo e(__('English')); ?>" href="<?php echo e($path_en); ?>">digg</a></li>
                <li class="dribbble"><a href="<?php echo e($path_vi); ?>" title="<?php echo e(__('Tiếng Việt')); ?>">Facebook</a></li>
            </ul>
            <div class="search">
                <form id="searchForm" action="<?php echo e($path_searh); ?>" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control search" value="<?php echo e(Request::input('q')); ?>" name="q" id="q" placeholder="<?php echo e(__('Tìm kiếm')); ?>" required>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                        </span>				
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="logo">
            <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>">
                <img alt="<?php echo e(__('Trường Đại học An Giang')); ?>" title="<?php echo e(__('Trường Đại học An Giang')); ?>" width="300" height="43" data-sticky-width="280" data-sticky-height="40" src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/images/logo_<?php echo e(app()->getLocale()); ?>.png">
            </a>
        </div>
        <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse"><i class="fa fa-bars"></i></button>
    </div>
    <div class="navbar-collapse nav-main-collapse collapse">
        <div class="container">
            <nav class="nav-main mega-menu">
                <?php echo $__env->make('Frontend.menu_'.app()->getLocale(), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </nav>
        </div>
    </div>
</header><!-- Header Ends -->
<!-- Page Main -->
<div role="main" class="main">
    <?php $__env->startSection('body'); ?> <?php echo $__env->yieldSection(); ?>
</div><!-- Page Main -->
<!-- Footer -->
<footer id="footer" class="footer-1" style="background:#2196f3;">
    <!-- Footer Copyright -->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <!-- Copy Right Logo -->
                <div class="col-md-3">
                    <a class="logo" href="https://vnuhcm.edu.vn/" target="_blank" style="float:left;margin-right:20px;">
                        <img src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/images/logo_vnu.png" width="145" height="90" class="img-responsive" alt="<?php echo e(__('Trường Đại học Quốc Gia TPHCM')); ?>">
                    </a>
                    <a class="logo" href="<?php echo e(env('APP_URL')); ?>">
                        <img src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/images/footer_logo.png" width="90" height="90"  class="img-responsive" alt="<?php echo e(__('Trường Đại học An Giang')); ?>">
                    </a>
                </div><!-- Copy Right Logo -->
                <!-- Copy Right Content -->
                <div class="col-md-8">
                    <p>
                        <?php echo e(__('Địa chỉ: số 18, đường Ung Văn Khiêm, phường Long Xuyên, tỉnh An Giang')); ?><br>
                        <?php echo e(__('Điện thoại')); ?>: +84 296 6256565 ext 1900&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <a href="mailto:webmaster@agu.edu.vn">webmaster@agu.edu.vn</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e(__('Fax')); ?>: +84 296 3842560<br>
                        © Copyright 2017. <?php echo e(__('Trường Đại học An Giang')); ?>. | <?php echo e(__('Phát triển bởi')); ?> <a href="http://cict.agu.edu.vn" title="<?php echo e(__('Trung tâm Tin học Trường Đại học An Giang')); ?>"><?php echo e(__('Trung tâm Tin học Trường Đại học An Giang')); ?></a>
                    </p>
                </div><!-- Copy Right Content -->
                <!-- Copy Right Content -->
            </div><!-- Footer Copyright -->
        </div><!-- Footer Copyright container -->
    </div><!-- Footer Copyright -->
</footer>
<!-- Footer -->

<!-- library -->
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/jquery.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/bootstrap.min.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/bootstrapValidator.min.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/jquery.appear.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/jquery.easing.min.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/owl.carousel.min.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/countdown.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/counter.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/isotope.pkgd.min.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/jquery.easypiechart.min.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/jquery.mb.YTPlayer.min.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/jquery.prettyPhoto.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/jquery.stellar.min.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/menu.js"></script>

<!-- Revolution Js -->
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/theme-rs.js"></script>

<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/modernizr.js"></script>
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/lib/modernizr.js"></script>
<!-- Theme Base, Components and Settings -->
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/theme.js"></script>

<!-- Theme Custom -->
<script src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/js/custom.js"></script>
<?php $__env->startSection('js'); ?> <?php echo $__env->yieldSection(); ?>
</body>
</html>
<?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/layout.blade.php ENDPATH**/ ?>