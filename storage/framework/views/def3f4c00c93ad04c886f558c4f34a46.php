<?php $__env->startSection('title', __('Thông tin')); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/magnific-popup/magnific-popup.css"/>
    <link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/select2/select2.min.css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="row">
    <div class="col-12 card-box">
        <h3 class="m-t-0"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/thong-tin/add" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> <?php echo e(__('Thêm mới')); ?></a> <?php echo e(__('Thông tin')); ?></h3>
        <hr />
        <form method="GET" action="<?php echo e(env('APP_URL') . app()->getLocale()); ?>/admin/thong-tin">
            <div class="row form-group">
                <div class="col-12 col-md-4">
                    <input type="text" name="keywords" id="keywords" value="<?php echo e($keywords); ?>" placeholder="Tìm Tên" class="form-control">
                </div>
                <div class="col-12 col-md-4">
                    <select name="id_cat" class="form-control select2">
                        <option value=""><?php echo e(__('Danh mục thông tin')); ?></option>
                        <?php $__currentLoopData = $dmthongtin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($tt['_id']); ?>" <?php if($id_cat == $tt['_id']): ?> selected <?php endif; ?>><?php echo e($tt['ten']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-12 col-md-2">
                    <button type="submit" name="submit" value="Search" class="btn btn-primary"><i class="fa fa-search"></i> <?php echo e(__('Tìm')); ?></button>
                </div>
            </div>
        </form>
        <?php if($danhsach): ?>
        <table class="table table-border table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th><?php echo e(__('STT')); ?></th>
                    <th><?php echo e(__('Hình')); ?></th>
                    <th><?php echo e(__('Tên')); ?></th>
                    <th><?php echo e(__('Danh mục')); ?></th>
                    <th style="width:55px;">#</th>
                    <?php $__currentLoopData = $arr_lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $klang => $vlang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($klang != app()->getLocale()): ?>
                            <th><img src="<?php echo e(env('APP_URL')); ?>assets/backend/images/flags/<?php echo e($klang); ?>.jpg" alt="" class="flag-icon"></th>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $danhsach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($key+1); ?></td>
                    <td class="text-center">
                        <?php if(isset($ds['photos'][0]['aliasname']) && $ds['photos'][0]['aliasname']): ?>
                        <a href="<?php echo e(env('APP_URL')); ?>storage/images/origin/<?php echo e($ds['photos'][0]['aliasname']); ?>" class="image-popup">
                            <img src="<?php echo e(env('APP_URL')); ?>storage/images/thumb_50/<?php echo e($ds['photos'][0]['aliasname']); ?>" title="<?php echo e($ds['ho_ten']); ?>" alt="<?php echo e($ds['ho_ten']); ?>" style="height:30px;">
                        </a>
                        <?php else: ?>
                            <?php echo e(__('NO PIC')); ?>

                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/<?php if(app()->getLocale() == 'vi'): ?><?php echo e('chi-tiet-thong-tin'); ?><?php else: ?><?php echo e(('detail-news-and-events')); ?><?php endif; ?>/<?php echo e($ds['slug']); ?>" target="_blank"><strong><?php echo e($ds['ten']); ?></strong></a>
                        <span class="badge badge-info"><small><?php echo e(App\Http\Controllers\ObjectController::getDate($ds['date_post'],"d/m/Y H:i")); ?></small></span>
                    </td>
                    <td class="text-center">
                        <?php if($ds['id_cat']): ?>
                        <div class="btn-group mb-2 dropleft" style="margin:0px !important;">
                            <button class="btn btn-info btn-sm waves-effect waves-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="line-height:12px;">
                                <i class="mdi mdi-chevron-left"></i> <?php echo e(__('Danh mục')); ?> <span class="badge badge-danger"><?php echo e(count($ds['id_cat'])); ?></span>
                            </button>
                            <div class="dropdown-menu">
                                <?php $__currentLoopData = $ds['id_cat']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $c = App\Models\DMThongTin::find($cat);
                                    ?>
                                    <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/thong-tin?id_cat=<?php echo e($cat); ?>" class="dropdown-item"><i class="fa fa-tag text-primary"></i> <?php echo e($c['ten']); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php else: ?>
                            <?php echo e(__('Không danh mục')); ?>

                        <?php endif; ?>
                    </td>
                    <td class="text-center">
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/thong-tin/delete/<?php echo e($ds['_id']); ?>" onclick="return confirm('Chắc chắc xóa?')"><i class="fas fa-trash text-danger"></i></a>&nbsp;
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/thong-tin/edit/<?php echo e($ds['_id']); ?>"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                    <?php $__currentLoopData = $arr_lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $klang => $vlang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($klang != app()->getLocale()): ?>
                        <?php
                            $lang = $ds['locale'];
                            $id_path = App\Http\Controllers\ObjectController::ObjectId($ds['_id']);
                            $transpath = App\Models\TranslatePath::where("id_".$lang,"=",$id_path)->where('collection','=','thong_tin')->first();
                        ?>
                            <td class="text-center text-middle">
                                <?php if($transpath && isset($transpath['id_'.$klang])): ?>
                                    <a href="<?php echo e(env('APP_URL')); ?><?php echo e($klang); ?>/admin/thong-tin/edit/<?php echo e($transpath["id_$klang"]); ?>?trans_id=<?php echo e($ds['_id']); ?>&trans_lang=<?php echo e(app()->getLocale()); ?>">
                                        <img src="<?php echo e(env('APP_URL')); ?>assets/backend/images/flags/<?php echo e($klang); ?>.jpg" alt="" class="flag-icon">
                                    </a>
                                <?php else: ?>
                                <a href="<?php echo e(env('APP_URL')); ?><?php echo e($klang); ?>/admin/thong-tin/add?trans_id=<?php echo e($ds['_id']); ?>&trans_lang=<?php echo e(app()->getLocale()); ?>">
                                    <img src="<?php echo e(env('APP_URL')); ?>assets/backend/images/flags/<?php echo e($klang); ?>_black.jpg" alt="" class="flag-icon">
                                </a>
                                <?php endif; ?>
                            </td>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
            <?php if(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING']): ?>
                <?php echo e($danhsach->withPath(env('APP_URL') . app()->getLocale() . '/admin/thong-tin?' . $_SERVER['QUERY_STRING'])); ?>

            <?php else: ?>
                <?php echo e($danhsach->withPath(env('APP_URL') . app()->getLocale() . '/admin/thong-tin?')); ?>

            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(env('APP_URL')); ?>assets/backend/libs/jquery-toast/jquery.toast.min.js"></script>
    <script type="text/javascript" src="<?php echo e(env('APP_URL')); ?>assets/backend/libs/isotope/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo e(env('APP_URL')); ?>assets/backend/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo e(env('APP_URL')); ?>assets/backend/libs/select2/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".select2").select2();
            <?php if(Session::get('msg') != null && Session::get('msg')): ?>
            $.toast({
                heading:"Thông báo",
                text:"<?php echo e(Session::get('msg')); ?>",
                loaderBg:"#3b98b5",icon:"info", hideAfter:3e3,stack:1,position:"top-right"
            });
            <?php endif; ?>
            $('.image-popup').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-fade',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Admin/ThongTin/list.blade.php ENDPATH**/ ?>