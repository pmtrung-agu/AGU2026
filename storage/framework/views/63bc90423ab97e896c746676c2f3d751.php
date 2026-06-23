<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(__("ĐẠI HỌC QUỐC GIA TPHCM TRƯỜNG ĐẠI HỌC AN GIANG")); ?> - <?php echo e(__("AGU")); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="<?php echo e(__("ĐẠI HỌC QUỐC GIA TPHCM TRƯỜNG ĐẠI HỌC AN GIANG")); ?> - <?php echo e(__("AGU")); ?>" name="description" />
        <meta content="Phan Minh Trung - trungminhphan@gmail.com" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo e(env('APP_URL')); ?>assets/backend/images/favicon.ico">
        <?php $__env->startSection('css'); ?> <?php echo $__env->yieldSection(); ?>
        <!-- App css -->
        <link href="<?php echo e(env('APP_URL')); ?>assets/backend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(env('APP_URL')); ?>assets/backend/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(env('APP_URL')); ?>assets/backend/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(env('APP_URL')); ?>assets/backend/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- Navigation Bar-->
        <header id="topnav" style="background-color:#0072c6;">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">
                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown d-none d-lg-block">
                            <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo e(env('APP_URL')); ?>assets/backend/images/flags/<?php echo e(app()->getLocale()); ?>.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle"><?php echo e($arr_lang[app()->getLocale()]); ?> <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <?php $__currentLoopData = $arr_lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $klang => $vlang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $id = isset($id) ? $id : App\Http\Controllers\ObjectController::Id();
                                    $link = route(\Illuminate\Support\Facades\Route::currentRouteName(), array($klang, $id));
                                ?>
                                    <a href="<?php echo e($link); ?>" class="dropdown-item notify-item">
                                        <img src="<?php echo e(env('APP_URL')); ?>assets/backend/images/flags/<?php echo e($klang); ?>.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle"><?php echo e($vlang); ?></span>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo e(env('APP_URL')); ?>assets/backend/images/logo-sm.png" alt="<?php echo e(Session::get('user.name')); ?>" alt="<?php echo e(Session::get('user.username')); ?>" class="rounded-circle">
                                <span class="pro-user-name ml-1"><?php echo e(Session::get('user.username')); ?><i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
                                <?php if(Session::get('user.roles') && in_array('Admin', Session::get('user.roles'))): ?>
                                <a href="<?php echo e(env('APP_URL') . app()->getLocale()); ?>/admin/user" class="dropdown-item notify-item">
                                    <i class="fe-user"></i> <span><?php echo e(__("Accounts")); ?></span>
                                </a>
                                <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/translate" class="dropdown-item notify-item">
                                    <i class="fas fa-language"></i> <span><?php echo e(__('Translate')); ?></span>
                                </a>
                                <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/translate-path" class="dropdown-item notify-item">
                                    <i class="fas fa-code-branch"></i> <span><?php echo e(__('Translate Path')); ?></span>
                                </a>
                                <?php endif; ?>
                                <a href="<?php echo e(env('APP_URL') . app()->getLocale()); ?>/auth/logout" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i> <span><?php echo e(__("Logout")); ?></span>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="<?php echo e(env('APP_URL')); ?>admin" class="logo text-center">
                            <span class="logo-lg">
                                <img src="<?php echo e(env('APP_URL')); ?>assets/backend/images/logo_<?php echo e(app()->getLocale()); ?>.jpg" title="<?php echo e(__("ĐẠI HỌC QUỐC GIA TPHCM TRƯỜNG ĐẠI HỌC AN GIANG")); ?> - <?php echo e(__("AGU")); ?>" height="40">
                            </span>
                            <span class="logo-sm">
                                <img src="<?php echo e(env('APP_URL')); ?>assets/backend/images/logo-sm.png" alt="" height="26">
                            </span>
                        </a>
                    </div>
                </div> <!-- end container-fluid-->
            </div>
            <!-- end Topbar -->
            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <?php if(App\Http\Controllers\UserController::is_roles('Admin,Manager,Updater')): ?>
                            <li>
                                <a href="<?php echo e(env('APP_URL') . app()->getLocale()); ?>/admin/banner"><i class="far fa-images"></i> <?php echo e(__('Banner')); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(env('APP_URL') . app()->getLocale()); ?>/admin/danh-muc-thong-tin"><i class="fas fa-tags"></i> <?php echo e(__('Danh mục Thông tin')); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(env('APP_URL') . app()->getLocale()); ?>/admin/thong-tin"><i class="fas fa-tasks"></i> <?php echo e(__('Bài viết')); ?></a>
                            </li>
                            <?php endif; ?>
                            
                            <li class="has-submenu">
                                <a href="<?php echo e(env('APP_URL') . app()->getLocale()); ?>/admin/tuyen-sinh"><i class="fas fa-graduation-cap"></i> <?php echo e(__('Tuyển sinh')); ?> <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <?php if(App\Http\Controllers\UserController::is_roles('Admin,Manager,Updater,Consulter')): ?>
                                    <li><a href="<?php echo e(env('APP_URL'). app()->getLocale()); ?>/admin/tuyen-sinh/thong-tin">Thông tin Tuyển sinh</a></li>
                                    <li><a href="<?php echo e(env('APP_URL'). app()->getLocale()); ?>/admin/tuyen-sinh/tu-van">Tư vấn Tuyển sinh</a></li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                            
                        </ul>
                        <!-- End navigation menu -->
                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="wrapper">
            <div class="container-fluid">
                <!-- start page title -->
                <?php $__env->startSection('body'); ?> <?php echo $__env->yieldSection(); ?>
            </div>
        </div>
        <!-- end wrapper -->
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
          <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        &copy; 2022 <?php echo e(__('Đại học Quốc gia TPHCM Trường Đại học An Giang')); ?>

                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
        <!-- Vendor js -->
        <script src="<?php echo e(env('APP_URL')); ?>assets/backend/js/vendor.min.js"></script>
        <?php $__env->startSection('js'); ?> <?php echo $__env->yieldSection(); ?>
        <!-- App js -->
        <script src="<?php echo e(env('APP_URL')); ?>assets/backend/js/app.min.js"></script>
    </body>
</html>
<?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Admin/layout.blade.php ENDPATH**/ ?>