
<?php $__env->startSection('title', __('Tư vấn Tuyển sinh')); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/magnific-popup/magnific-popup.css"/>
    <link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/select2/select2.min.css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<?php
    $arr_traloi = array(2 => 'Thông tin trả lời', 0 => 'Chưa trả lời',1 => 'Đã trả lời');
    $arr_congbo = array(2 => 'Thông tin Công bố', 0 => 'Chưa Công bố', 1 => 'Đã Công bố');
?>
<div class="row">
    <div class="col-12 card-box">
        <h3 class="m-t-0"><i class="fas fa-user-graduate text-primary"></i> <?php echo e(__('Tư vấn Tuyển sinh')); ?></h3>
        <form method="GET" action="<?php echo e(env('APP_URL') . app()->getLocale()); ?>/admin/tuyen-sinh/tu-van">
            <div class="row form-group">
                <div class="col-12 col-md-3">
                    <input type="text" name="keywords" id="keywords" value="<?php echo e($keywords); ?>" placeholder="Tìm Tên" class="form-control">
                </div>
                <div class="col-12 col-md-3">
                    <select name="id_cat" class="form-control select2">
                        <option value=""><?php echo e(__('Chọn chuyên mục')); ?></option>
                        <?php $__currentLoopData = $arr_cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cat['id']); ?>" <?php if($id_cat == $cat['id']): ?> selected <?php endif; ?>><?php echo e($cat['title']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-12 col-md-2">
                    <select name="tra_loi" class="form-control select2">
                        <?php $__currentLoopData = $arr_traloi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ktl => $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($ktl); ?>" <?php if($tra_loi == $ktl): ?> selected <?php endif; ?>><?php echo e($tl); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-12 col-md-2">
                    <select name="cong_bo" class="form-control select2">
                        <?php $__currentLoopData = $arr_congbo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kcb => $cb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($kcb); ?>" <?php if($cong_bo == $kcb): ?> selected <?php endif; ?>><?php echo e($cb); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-12 col-md-2">
                    <button type="submit" name="submit" value="Search" class="btn btn-primary"><i class="fa fa-search"></i> <?php echo e(__('Tìm')); ?></button>
                </div>
            </div>
        </form>
        <hr />
        <?php if($danhsach): ?>
        <table class="table table-border table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th><?php echo e(__('STT')); ?></th>
                    <th><?php echo e(__('Nội dung')); ?></th>
                    <th><?php echo e(__('Trả lời')); ?></th>
                    <th><?php echo e(__('Public')); ?></th>
                    <th style="width:55px;">#</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $danhsach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="max-height:30px !important; overflow:hidden !important;">
                    <td class="text-center"><?php echo e($key+1); ?></td>
                    <td><?php echo $ds['noi_dung']; ?></td>
                    <td>
                        <?php if($ds['tra_loi']): ?>
                            <?php echo $ds['tra_loi']; ?>

                        <?php else: ?> 
                        <div class="text-center">
                            <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/tuyen-sinh/tu-van/edit/<?php echo e($ds['_id']); ?>"><strong>TRẢ LỜI</strong></a>
                        </div>
                        <?php endif; ?>
                    </td>
                    <td class="text-center">
                        <?php if($ds['status'] == 1): ?> <i class="fas fa-check-circle text-primary"></i>
                            <?php else: ?> <i class="fab fa-bandcamp"></i>
                        <?php endif; ?>
                    </td>
                    <td class="text-center">
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/tuyen-sinh/tu-van/delete/<?php echo e($ds['_id']); ?>" onclick="return confirm('Chắc chắc xóa?')"><i class="fas fa-trash text-danger"></i></a>&nbsp;
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/tuyen-sinh/tu-van/edit/<?php echo e($ds['_id']); ?>"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
            <?php if(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING']): ?>
                <?php echo e($danhsach->withPath(env('APP_URL') . app()->getLocale() . '/admin/tuyen-sinh/tu-van?' . $_SERVER['QUERY_STRING'])); ?>

            <?php else: ?> 
                <?php echo e($danhsach->withPath(env('APP_URL') . app()->getLocale() . '/admin/tuyen-sinh/tu-van')); ?>

            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(env('APP_URL')); ?>assets/backend/libs/jquery-toast/jquery.toast.min.js"></script>
    <script src="<?php echo e(env('APP_URL')); ?>assets/backend/libs/select2/select2.min.js" type="text/javascript"></script>
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
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Admin/TuyenSinh/tu-van.blade.php ENDPATH**/ ?>