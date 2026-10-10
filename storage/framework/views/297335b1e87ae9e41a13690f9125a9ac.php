<ul class="horizontalMenu-list">
    <li aria-haspopup="true">
        <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
        <a href="javascript:void(0)"><?php echo e(__('Introduction')); ?> <span class="fe fe-chevron-down"></span></a>
        <div class="horizontal-megamenu clearfix">
                <div class="container">
                    <div class="megamenu-content">
                        <div class="row">
                            <ul class="col-12 col-md-3 link-list">
                                <li class="title"><?php echo e(__('An Giang University')); ?></li>
                                <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/about/overview">Overview</a></li>
                                        <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/about/structure-and-organization">Structure and Organization</a></li>
                                        <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/about/president-board">President board</a></li>
                                        
                                        
                                        <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/about/mission-vision-core-value">Mission - Vision - Core value</a></li>
                                        <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/about/quality-asssurance-policy">Quality Assurance Policy</a></li>
                                        <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/news-and-events/strategic-plan">Development Strategies</a></li>
                                        <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/about/brochure">Brochure</a></li>
                            </ul>
                            <ul class="col-12 col-md-3 link-list">
                                <li class="title"><?php echo e(__('Brief introduction')); ?></li>
                                <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/about/annual-report">Annual Report</a></li>
                                
                                <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/about/video">Video</a></li>
                                <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/about/an-giang-university-song">An Giang University Song</a></li>
                                <li><a href="http://25years.agu.edu.vn" target="_blank">25th Anniversary</a></li>
                                <li><a href="<?php echo e(env('APP_URL')); ?>20years" target="_blank">20th Anniversary</a></li>
                                <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/news-and-events/gallery">Gallery</a></li>
                                <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/about/contacts">Contacts</a></li>
                            </ul>
                            <ul class="col-12 col-md-3 link-list">
                                <li class="title"><?php echo e(__('Services')); ?></li>
                                <li><a href="https://mail.google.com/a/agu.edu.vn" target="_blank">Email</a></li>
                                <li><a href="http://enews.agu.edu.vn/" target="_blank">eNews</a></li>
                                <li><a href="https://regis.agu.edu.vn/" target="_blank">Register Courses</a></li>
                                <li><a href="https://its.agu.edu.vn/" target="_blank">IT Resources</a></li>
                                <li><a href="https://lib1.agu.edu.vn/SitePages/SearchOpac.aspx" target="_blank">Learning resources</a></li>
                                <li><a href="https://ir.vnulib.edu.vn/home" target="_blank">Digital documents</a></li>
                                <li><a href="https://lib.agu.edu.vn/co-so-du-lieu" target="_blank">E-Databases</a></li>
                                
                                <li><a href="https://epa.agu.edu.vn/" target="_blank">Laboratory practices and Equipment</a></li>
                                <li><a href="https://cict.agu.edu.vn/danh-ba-dien-thoai" target="_blank">Contacts list</a></li>
                            </ul>
                             <?php
                                $menu_tintuc = App\Models\DMThongTin::where('locale', '=', app()->getLocale())->where('thu_tu', '>', 0)->orderBy('thu_tu', 'asc')->get();
                            ?>
                            <ul class="col-12 col-md-3 link-list">
                                <li class="title"><?php echo e(__('News and Events')); ?></li>
                               <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/news-and-events/lastest-news">Lastest News</a></li>
                                <?php $__currentLoopData = $menu_tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/news-and-events/<?php echo e($tt['slug']); ?>"><?php echo e($tt['ten']); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </li>
    <li aria-haspopup="true">
        <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
        <a href="javascript:void(0)">Training & QA <span class="fe fe-chevron-down m-0"></span></a>
        <ul class="sub-menu">
            <li aria-haspopup="true">
                <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                <a href="javascript:void(0)">Programs and Courses <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="https://pgd.agu.edu.vn" target="_blank">Graduate programs</a></li>
                    <li aria-haspopup="true"><a href="https://aao.agu.edu.vn/?q=content/ct%C4%91t-tr%C3%ACnh-%C4%91%E1%BB%99-%C4%91%E1%BA%A1i-h%E1%BB%8Dc" target="_blank">Undergraduate programs</a></li>
                </ul>
            </li>
            <li aria-haspopup="true">
                <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                <a href="javascript:void(0)">Quality Assurance <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/news-and-events/self-evaluation-report">Self-evaluation Report</a></li>
                    <li aria-haspopup="true"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/news-and-events/training-program-quality-assurement">Training program Quality Assurement</a></li>
                    <li aria-haspopup="true"><a href="https://fms.agu.edu.vn/<?php echo e(app()->getLocale()); ?>" target="_blank">Quality Assurance System</a></li>
                    <li aria-haspopup="true"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/news-and-events/quality-assurance-manual">Quality Assurance Manual</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li aria-haspopup="true"><a href="https://tuyensinh.agu.edu.vn" target="_blank">Admissions</a></li>
    <li aria-haspopup="true">
        <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
        <a href="javascript:void(0)">Research & Cooperation <span class="fe fe-chevron-down m-0"></span></a>
        <ul class="sub-menu">
            <li aria-haspopup="true">
                <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                <a href="javascript:void(0)">Researches <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/news-and-events/research-activity">Research activity</a></li>
                    <li aria-haspopup="true"><a href="https://dspace.agu.edu.vn:8080/handle/AGU_Library/2900" target="_blank">Science technology</a></li>
                    <li aria-haspopup="true"><a href="http://sj.agu.edu.vn/" target="_blank">Journal of science</a></li>
                    <li aria-haspopup="true"><a href="https://rmgo.agu.edu.vn/?q=vi/thong-bao-hoi-thao" target="_blank">Workshops</a></li>
                </ul>
            </li>
            <li aria-haspopup="true">
                <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                <a href="javascript:void(0)">International activity <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/news-and-events/international-relations">International relations</a></li>
                    <li aria-haspopup="true"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/news-and-events/memorandum-of-understanding">Memorandum of Understanding</a></li>
                    <li aria-haspopup="true"><a href="https://sahed.agu.edu.vn/" target="_blank">SAHED Project</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li aria-haspopup="true"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/news-and-events/publicity">Publicity</a></li>
    <li aria-haspopup="true"><a href="https://lms.agu.edu.vn" target="_blank">LMS/LCMS</a></li>
</ul><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/2026/menu-en.blade.php ENDPATH**/ ?>