<?php $__env->startSection('title', $ds['ten']); ?>
<?php $__env->startSection('description', $ds['mo_ta']); ?>
<?php if(isset($ds['photos'][0]['aliasname']) && $ds['photos'][0]['aliasname']): ?>
    <?php $__env->startSection('image', env('APP_URL') . "storage/images/thumb_360x200/".$ds['photos'][0]['aliasname']); ?>
<?php else: ?>
    <?php $__env->startSection('image', env('APP_URL') . "assets/frontend/images/blog/blog-02.jpg"); ?>
<?php endif; ?>
<?php $__env->startSection('body'); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=131376384294659&autoLogAppEvents=1" nonce="xz8OBKsp"></script>
<div class="page-default typo-dark">
    <div class="container">
        <div class="blog-single-details">
        <div class="row">
            <div class="col-12 col-md-9">
                <h4><?php echo e($ds['ten']); ?></h4>
                <ul class="blog-meta">
                    <li><i class="fa fa-calendar-o"></i> <?php echo e(App\Http\Controllers\ObjectController::getDate($ds['date_post'],"d/m/Y H:i")); ?>

                    </li>
                    <?php if($ds['id_cat']): ?>
                    <li>
                        <?php $__currentLoopData = $ds['id_cat']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $cat = App\Models\DMThongTin::find($c);
                                if(app()->getLocale() == 'vi') $taxonomy = 'tin-tuc-su-kien';
                                else $taxonomy = 'news-and-events';
                            ?>
                            <i class="fa fa-tags"></i> <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e($taxonomy); ?>/<?php echo e($cat['slug']); ?>"><?php echo e($cat['ten']); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </li>
                    <?php endif; ?>
                    <?php
                        $views = App\Models\Views::where('path','=',Request::path())->count();
                    ?>
                    <?php if($views): ?>
                        <li><i class="fa fa-eye"></i> <?php echo e($views); ?></li>
                    <?php endif; ?>
                    <li style="line-height:35px;">
                        <div class="fb-like" data-href="<?php echo e(Request::fullUrl()); ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                    </li>
                </ul>
                <?php if(isset($ds['id_sdg_tags']) && $ds['id_sdg_tags']): ?>
                <div class="row">
                    <div class="col-12 text-right" style="padding-right:20px;">
                        <?php $__currentLoopData = $ds['id_sdg_tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/images/sdg-tags/<?php echo e($st); ?>_<?php echo e($ds['locale']); ?>.png" alt="<?php echo e(__($sdg_tags[$st])); ?>" title="<?php echo e(__($sdg_tags[$st])); ?>" style="height: 50px;cursor: pointer;"/>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>
                <p> <?php echo e($ds['mo_ta']); ?></p>
                <?php echo $ds['noi_dung']; ?>

                <?php if($ds['photos']): ?>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <h5><i class="uni-camera-2"></i> <?php echo e(__('HÌNH ẢNH')); ?></h5>
                        <hr />
                        <br />
                        <div class="isotope-grid grid-three-column has-gutter-space" data-gutter="20" data-columns="3">
                            <div class="grid-sizer"></div>
                            <?php $__currentLoopData = $ds['photos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="image-wrapper">
                                    <!-- IMAGE -->
                                    <img src="<?php echo e(env('APP_URL')); ?>storage/images/thumb_360x200/<?php echo e($h['aliasname']); ?>" title="<?php echo e($h['title']); ?>" alt="<?php echo e($h['title']); ?>">
                                    <!-- Gallery Btns Wrapper -->
                                    <div class="gallery-detail btns-wrapper">
                                        <a href="<?php echo e(env('APP_URL')); ?>storage/images/origin/<?php echo e($h['aliasname']); ?>" data-rel="prettyPhoto[portfolio]" title="<?php echo e($h['title']); ?>" class="btn uni-full-screen"></a>
                                    </div><!-- Gallery Btns Wrapper -->
                                </div><!-- Image Wrapper -->
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($ds['attachments']): ?>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <h5><i class="uni-file-zip"></i> <?php echo e(__('ĐÍNH KÈM')); ?></h5>
                        <hr />
                        <table class="table table-border table-striped table-sm">
                            <thead>
                                <tr>
                                  <th class="text-center">STT</th>
                                  <th>Nội dung</th>
                                  <th class="text-center">Tải về</th>
                                </tr>
                          </thead>
                            <tbody>
                            <?php $__currentLoopData = $ds['attachments']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($key+1); ?></td>
                                    <td>
                                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/xem-truc-tuyen/thong-tin/<?php echo e($ds['_id']); ?>/<?php echo e($key); ?>" onClick="return false;" class="view_online">
                                            <?php echo e($dk['title']); ?>

                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/tai-ve/thong-tin/<?php echo e($ds['_id']); ?>/<?php echo e($key); ?>">
                                            <i class="uni-download-fromcloud" style="font-size:20px;font-weight:bold;"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-3">
                <?php
                    $widget_tintuc = App\Models\DMThongTin::where('locale','=',app()->getLocale())->where('thu_tu', '>', 0)->get();
                ?>
                <?php if($widget_tintuc): ?>
                <div class="widget">
                    <h5 class="widget-title"><?php echo e(__('Tin tức - Sự kiện')); ?><span></span></h5>
                    <ul class="go-widget">
                        <?php $__currentLoopData = $widget_tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e($taxonomy); ?>/<?php echo e($tt['slug']); ?>"><?php echo e($tt['ten']); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php
                    $widget_tintucmoi = App\Models\ThongTin::where('locale','=',app()->getLocale())->where('_id', '<>', $ds['_id'])->orderBy('date_post', 'desc')->take(6)->get();
                    if(app()->getLocale() == 'vi') $detail_taxonomy = 'chi-tiet-thong-tin';
                    else $detail_taxonomy = 'detail-news-and-events';
                ?>
                <?php if($widget_tintucmoi): ?>
                <div class="widget">
                    <h5 class="widget-title"><?php echo e(__('Tin tức mới')); ?><span></span></h5>
                    <ul class="thumbnail-widget">
                        <?php $__currentLoopData = $widget_tintucmoi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ttm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div class="thumb-wrap">
                                <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e($detail_taxonomy); ?>/<?php echo e($ttm['slug']); ?>">
                                    <?php if(isset($ttm['photos'][0]['aliasname']) && $ttm['photos'][0]['aliasname']): ?>
                                        <img src="<?php echo e(env('APP_URL')); ?>storage/images/thumb_50/<?php echo e($ttm['photos'][0]['aliasname']); ?>" width="60" height="60" alt="<?php echo e($ttm['ten']); ?>" title="<?php echo e($ttm['ten']); ?>">
                                    <?php else: ?>
                                        <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/images/default/thumb_agu.jpg" width="60" height="60" alt="<?php echo e($ttm['ten']); ?>" title="<?php echo e($ttm['ten']); ?>">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="thumb-content">
                                <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e($detail_taxonomy); ?>/<?php echo e($ttm['slug']); ?>" alt="<?php echo e($ttm['ten']); ?>" title="<?php echo e($ttm['ten']); ?>"><?php echo e(Str::limit($ttm['ten'],50)); ?></a><span><?php echo e(App\Http\Controllers\ObjectController::getDate($ttm['date_post'], "d/m/Y H:i")); ?></span>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </div>
</div>
<?php if($tin_lien_quan && count($tin_lien_quan) > 0): ?>
<section class="bg-grey">
    <div class="container">
        <div class="row m-t-30">
            <div class="col-md-12">
                <h5><i class="uni-cursor-click2"></i> <?php echo e(__('TIN LIÊN QUAN')); ?></h5>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel dots-inline"
                        data-animatein=""
                        data-animateout=""
                        data-items="1"
                        data-loop="true"
                        data-merge="true"
                        data-nav="true"
                        data-dots="true"
                        data-stagepadding=""
                        data-margin="30"
                        data-mobile="1"
                        data-tablet="3"
                        data-desktopsmall="3"
                        data-desktop="3"
                        data-autoplay="false"
                        data-delay="3000"
                        data-navigation="true">
                    <?php $__currentLoopData = $tin_lien_quan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tmn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
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
                                <h5><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/chi-tiet-thong-tin/<?php echo e($tmn['slug']); ?>"><?php echo e($tmn['ten']); ?></a></h5>
                                <ul class="blog-meta">
                                    <li><i class="fa fa-calendar-o"></i> <?php echo e(App\Http\Controllers\ObjectController::getDate($tmn['date_post'],"d/m/Y H:i")); ?></li>
                                    
                                </ul><!-- Blog Meta -->
                                <p class="mo_ta"><?php echo e($tmn['mo_ta']); ?></p>
                                <a class="btn" href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/chi-tiet-thong-tin/<?php echo e($tmn['slug']); ?>"><?php echo e(__('Xem thêm')); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
<div id="xemdinhkem" class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width:95%;">
        <div class="modal-content" style="height:800px !important;">
            <div class="modal-header">
                <h4 class="modal-title" id="myExtraLargeModalLabel"><?php echo e(__("Xem chi tiết đính kèm")); ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="chitiet" class="modal-body" style="height:700px; overflow:hidden;">
                Xin chào
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            $(".view_online").click(function(){
                var href = $(this).attr("href");
                $("#xemdinhkem").modal('show');
                $.get(href, function(html_view){
                    $("#chitiet").html(html_view);
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/thong-tin-chi-tiet.blade.php ENDPATH**/ ?>