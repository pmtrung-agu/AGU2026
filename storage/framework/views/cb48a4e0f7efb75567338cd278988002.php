<?php $__env->startSection('title', $ds['ten']); ?>
<?php $__env->startSection('description', $ds['mo_ta']); ?>
<?php if(isset($ds['photos'][0]['aliasname']) && $ds['photos'][0]['aliasname']): ?>
    <?php $__env->startSection('image', env('APP_URL') . "storage/images/thumb_360x200/".$ds['photos'][0]['aliasname']); ?>
<?php else: ?>
    <?php $__env->startSection('image', env('APP_URL') . "assets/frontend/images/blog/blog-02.jpg"); ?>
<?php endif; ?>
<?php $__env->startSection('css'); ?>
<style>
    .container .chi-tiet-tin-tuc p, .container .chi-tiet-tin-tuc * span{
        font-family: "Be Vietnam Pro", sans-serif !important;
        font-weight: 300;
    }
    .title-tin-lien-quan {
        font-size: 18px; text-align: justify;
        font-weight: 350;line-height:22px;
    }
    .mo-ta-tin-lien-quan {
        text-align: justify; font-weight: 300; line-height: 20px;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=131376384294659&autoLogAppEvents=1" nonce="xz8OBKsp"></script>
<section class="sptb mt-9">
    <div class="container">
        <div class="row chi-tiet-tin-tuc">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <h3 class="card-title"><?php echo e($ds['ten']); ?></h3>
                <i class="fe fe-calendar me-2 text-primary"></i> <?php echo e(App\Http\Controllers\ObjectController::getDate($ds['date_post'],"d/m/Y H:i")); ?>

                <?php if($ds['id_cat']): ?>
                     <?php $__currentLoopData = $ds['id_cat']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $cat = App\Models\DMThongTin::find($c);
                            if(app()->getLocale() == 'vi') $taxonomy = 'tin-tuc-su-kien';
                            else $taxonomy = 'news-and-events';
                        ?>
                        <i class="fa fa-tags"></i> <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e($taxonomy); ?>/<?php echo e($cat['slug']); ?>"><?php echo e($cat['ten']); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <?php
                    $views = App\Models\Views::where('path','=',Request::path())->count();
                ?>
                <?php if($views): ?>
                    <i class="fa fa-eye"></i> <?php echo e($views); ?>

                <?php endif; ?>
                <div class="fb-like" data-href="<?php echo e(Request::fullUrl()); ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                 <?php if(isset($ds['id_sdg_tags']) && $ds['id_sdg_tags']): ?>
                <div class="row">
                    <div class="col-12 text-right" style="padding-right:20px;">
                        <?php $__currentLoopData = $ds['id_sdg_tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/images/sdg-tags/<?php echo e($st); ?>_<?php echo e($ds['locale']); ?>.png" alt="<?php echo e(__($sdg_tags[$st])); ?>" title="<?php echo e(__($sdg_tags[$st])); ?>" style="height: 50px;cursor: pointer;"/>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>
                <p style="padding-top:20px;"> <?php echo e($ds['mo_ta']); ?></p>
                <?php echo $ds['noi_dung']; ?>

                <?php if($ds['photos']): ?>
                    <p><h4><i class="fa fa-image"></i> Hình ảnh</h4></p>
                    <div class="row task-widget"> 
                        <?php $__currentLoopData = $ds['photos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-3 col-md-12">
                            <div class="card">
                                <div class="item-card">
                                    <div class="item-card-desc">
                                        <a href="<?php echo e(env('APP_URL')); ?>storage/images/origin/<?php echo e($h['aliasname']); ?>"></a>
                                        <div class="item-card-img">
                                            <img src="<?php echo e(env('APP_URL')); ?>storage/images/thumb_360x200/<?php echo e($h['aliasname']); ?>" alt="<?php echo e($h['title']); ?>" title="<?php echo e($h['title']); ?>" class="">
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                 <?php if($ds['attachments']): ?>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <h3><i class="fa fa-file"></i> <?php echo e(__('Đính kèm')); ?></h3>
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
                                            <i class="fas fa-download" style="font-size:20px;font-weight:bold;"></i>
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
            <div class="col-xl-4 col-lg-4 col-md-12">
                <?php
                    $widget_tintuc = App\Models\DMThongTin::where('locale','=',app()->getLocale())->where('thu_tu', '>', 0)->get();
                ?>
                <?php if($widget_tintuc): ?>
                <div class="card">
                    <div class="card-header"><h3 class="card-title"><i class="fa fa-tags"></i> </i><?php echo e(__('Tin tức - Sự kiện')); ?></h3></div>
                    <div class="card-body">
                        <div class="list-catergory">
                            <div class="item-list">
                                <ul class="list-group mb-0">
                                    <?php $__currentLoopData = $widget_tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item pt-0">
                                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e($taxonomy); ?>/<?php echo e($tt['slug']); ?>" class="text-default-dark fs-14 font-weight-300">
                                            <i class="fe fe-chevron-right"></i> <?php echo e($tt['ten']); ?>

                                        </a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php
                    $widget_tintucmoi = App\Models\ThongTin::where('locale','=',app()->getLocale())->where('_id', '<>', $ds['_id'])->orderBy('date_post', 'desc')->take(6)->get();
                    if(app()->getLocale() == 'vi') $detail_taxonomy = 'chi-tiet-thong-tin';
                    else $detail_taxonomy = 'detail-news-and-events';
                ?>
                <?php if($widget_tintucmoi): ?>
                <div class="card">
                    <div class="card-header"><h3 class="card-title"><i class="fa fa-newspaper-o"></i> <?php echo e(__('Tin tức mới')); ?></h3></div>
                    <div class="card-body">
                        <div class="list-catergory1">
                            <div class="item-list">
                                <ul class="list-group mb-0">
                                    <?php $__currentLoopData = $widget_tintucmoi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ttm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item d-flex border-bottom-0 pt-0">
                                        <?php if(isset($ttm['photos'][0]['aliasname']) && $ttm['photos'][0]['aliasname']): ?>
                                            <img src="<?php echo e(env('APP_URL')); ?>storage/images/thumb_360x200/<?php echo e($ttm['photos'][0]['aliasname']); ?>" width="60" height="60" alt="<?php echo e($ttm['ten']); ?>" title="<?php echo e($ttm['ten']); ?>" class="avatar br-7 avatar-lg me-3 my-auto">
                                        <?php else: ?>
                                            <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/images/default/thumb_agu.jpg" width="60" height="60" alt="<?php echo e($ttm['ten']); ?>" title="<?php echo e($ttm['ten']); ?>" class="avatar br-7 avatar-lg me-3 my-auto">
                                        <?php endif; ?>
                                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php echo e($detail_taxonomy); ?>/<?php echo e($ttm['slug']); ?>" class="text-default fs-16 font-weight-300" style="text-algin:justify;" alt="<?php echo e($ttm['ten']); ?>" title="<?php echo e($ttm['ten']); ?>"><?php echo e(Str::limit($ttm['ten'],50)); ?></a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if($tin_lien_quan && count($tin_lien_quan) > 0): ?>
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title">
            <h3><i class="fa fa-newspaper-o"></i> <?php echo e(__('Tin liên quan')); ?></h3>
        </div>
        <div id="defaultCarousel" class="owl-carousel Card-owlcarousel client-carousel owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-1568px, 0px, 0px); transition: 0.25s; width: 4704px;">
                    <?php $__currentLoopData = $tin_lien_quan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tmn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="owl-item cloned" style="width: 392px;">
                        <div class="item">
                            <div class="card mb-0">
                                <div class="card-body p-4">
                                    <div class="item7-card-img">
                                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/chi-tiet-thong-tin/<?php echo e($tmn['slug']); ?>"></a>
                                        <?php if(isset($tmn['photos'][0]['aliasname']) && $tmn['photos'][0]['aliasname']): ?>
                                            <img src="<?php echo e(env('APP_ASSETS')); ?>storage/images/thumb_360x200/<?php echo e($tmn['photos'][0]['aliasname']); ?>" class="cover-image br-7 mb-4 border" alt="<?php echo e($tmn['ten']); ?>">
                                        <?php else: ?>
                                            <img src="<?php echo e(env('APP_ASSETS')); ?>assets/frontend/2026/images/default_tin_tuc.jpg" class="cover-image br-7 mb-4 border" alt="<?php echo e($tmn['ten']); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="item7-card-desc d-flex mb-2">
                                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/chi-tiet-thong-tin/<?php echo e($tmn['slug']); ?>"><i class="fe fe-calendar me-2"></i> <?php echo e(App\Http\Controllers\ObjectController::getDate($tmn['date_post'],"d/m/Y H:i")); ?></a>
                                        
                                    </div>
                                    <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/chi-tiet-thong-tin/<?php echo e($tmn['slug']); ?>">
                                        <h4 class="font-weight-semibold mb-2 mt-3 title-tin-lien-quan"><?php echo e($tmn['ten']); ?></h4>
                                    </a>
                                    <p class="mb-4 mo-ta-tin-lien-quan"><?php echo e($tmn['mo_ta']); ?></p>
                                    <a class="btn btn-primary" href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/chi-tiet-thong-tin/<?php echo e($tmn['slug']); ?>"><?php echo e(__('Xem thêm')); ?> <i class="fe fe-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
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
<?php echo $__env->make('Frontend.2026.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/2026/thong-tin-chi-tiet.blade.php ENDPATH**/ ?>