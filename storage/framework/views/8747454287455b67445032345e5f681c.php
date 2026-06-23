<?php $__env->startSection('title', __('Trang chủ')); ?>
<?php $__env->startSection('css'); ?>
    <style>
        ul.list-news-home-ts {
            list-style-type: square;
            padding: 20px 30px 20px 30px;
            font-size: 18px;
        }
        ul.list-news-home-ts li{
            padding: 3px;
        }
        #daycounter-hero {
            width: 500px;
            position: absolute;
            right: 100px;
            top: 490px;
        }
        #home-new {
            margin-top: 0px !important;
        }
        @media screen and (max-width: 640px) {
            #daycounter-hero {
                width: 100%;
                top: 290px;
                left:0px;
                font-size: 15px !important;
                background: #007326 !important;
                margin-top: -15px;
            }

            .countdown-section  {
                padding: 18px 0px 18px 0px;
                font-size: 18px;
                width: 25%;

            }
            .countdown-amount{
                font-size: 20px !important;
                padding: 0px;
                line-height: 20px;
            }
            #home-new {
                margin-top: 10px !important;
            }
        }
        @media screen and (max-width: 430px) {
            #daycounter-hero {
                margin-top: -10px;
            }
            #home-new {
                margin-top: -10px !important;
            }
        }
        
        @media screen and (min-width: 1920px) {
            .tp-revslider-mainul {
                min-height: 700px !important;
            }
            #daycounter-hero {
                top: 700px;
                right: 400px;
                font-size: 50px !important;
            } 
            #home-new {
                margin-top: 160px !important;
            }
            .countdown-amount{
                font-size: 50px !important;
                padding: 0px;
                line-height: 30px;
            }
            
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<?php echo $__env->make('Frontend.widget_banner', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="typo-dark" id="home-new">
    <div class="container">
        <?php if($thong_tin_tuyen_sinh && count($thong_tin_tuyen_sinh) > 0): ?>
        <div class="row">
            <div class="col-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="font-size:22px;font-weight:bold;"><i class="glyphicon glyphicon glyphicon-education"></i> <?php echo e(__('Thông tin Tuyển sinh 2026')); ?></h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-news-home-ts">
                            <?php $__currentLoopData = $thong_tin_tuyen_sinh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="https://tuyensinh.agu.edu.vn/tin-tuc/<?php echo e($ts['slug']); ?>" target="_blank"><?php echo e($ts['title']); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <a href="https://tuyensinh.agu.edu.vn" class="btn btn-primary pull-right"><i class="uni-paper-plane"></i> <?php echo e(__('Xem thêm')); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="row">
        <?php if($tin_moi_nhat && count($tin_moi_nhat) > 0): ?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title" style="font-size:22px;font-weight:bold;"><i class="uni-globe"></i> <?php echo e(__('Tin mới nhất')); ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
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
                                    <h5><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('chi-tiet-thong-tin')); ?>/<?php echo e($tmn['slug']); ?>" title="<?php echo e($tmn['ten']); ?>"><?php echo e($tmn['ten']); ?></a></h5>
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
                                    <a class="btn" href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e(__('chi-tiet-thong-tin')); ?>/<?php echo e($tmn['slug']); ?>"><?php echo e(__('Xem thêm')); ?></a>
                                </div><!-- Blog Detail Wrapper -->
                            </div><!-- Blog Wrapper -->
                        </div><!-- Column -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <?php if(app()->getLocale() == 'vi'): ?>
                                <p><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/tin-tuc-su-kien/tin-moi-nhat" class="btn btn-primary bg-pink"><i class="uni-paper-plane"></i> <?php echo e(__('Xem tất cả')); ?></a></p>
                            <?php else: ?>
                                <p><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/news-and-events" class="btn btn-primary bg-pink"><i class="uni-paper-plane"></i> <?php echo e(__('Xem tất cả')); ?></a></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        </div>
        
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"  style="font-size:22px;font-weight:bold;"><i class="uni-calendar-4"></i> <?php echo e(__('Lịch công tác')); ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <span class="loading bg-orange"><i class="uni-repeat-2"></i> <?php echo e(__('Đang tải, vui lòng chờ')); ?></span>
                        <div class="col-sm-12 col-md-12" id="calendar"></div>
                        <br />
                        <div class="col-sm-12 col-md-12">
                            <p><a class="ghost-button" href="https://calendar.google.com/calendar/u/0/r?cid=agu.edu.vn_qf2qof63stvjftctim9u8clh6c@group.calendar.google.com" target="_blank"><i class="uni-align-right"></i> <?php echo e(__('Xem thêm')); ?> </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container -->
</section><!-- Section -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    jQuery(document).ready(function(){
        var load = 0;
        $(window).scroll(function() {
          if($(window).scrollTop() + $(window).height() >= $(document).height()-300 && load ==0){
            $("#calendar").html('<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;hl=vi&amp;bgcolor=%23FFFFFF&amp;src=agu.edu.vn_qf2qof63stvjftctim9u8clh6c%40group.calendar.google.com&amp;color=%23853104&amp;ctz=Asia%2FSaigon" style="border-width:0" width="100%" height="350" frameborder="0" scrolling="no"></iframe>');
            load = 1;
            setInterval(function () {
                $(".loading").hide();
            }, 3000);
          }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/index.blade.php ENDPATH**/ ?>