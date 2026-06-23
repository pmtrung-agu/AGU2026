<?php $__env->startSection('title', __('Danh mục Thông tin')); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="row">
    <div class="col-12 card-box">
        <h3 class="m-t-0"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/danh-muc-thong-tin/add" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> <?php echo e(__('Thêm mới')); ?></a> <?php echo e(__('Danh mục Danh mục Thông tin')); ?></h3>
        <hr />
        <table class="table table-border table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th><?php echo e(__('STT')); ?></th>
                    <th><?php echo e(__('Tên')); ?></th>
                    <th><?php echo e(__('thứ tự')); ?></th>
                    <th>#</th>
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
                        <td><?php echo e($ds['ten']); ?></td>
                        <td class="text-center"><?php echo e($ds['thu_tu']); ?></td>
                        <td class="text-center">
                            <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/danh-muc-thong-tin/delete/<?php echo e($ds['_id']); ?>" onclick="return confirm('Chắc chắc xóa?')"><i class="fas fa-trash text-danger"></i></a>&nbsp;
                            <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/danh-muc-thong-tin/edit/<?php echo e($ds['_id']); ?>"><i class="fas fa-pencil-alt"></i></a>
                        </td>
                        <?php $__currentLoopData = $arr_lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $klang => $vlang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($klang != app()->getLocale()): ?>
                        <?php
                            $lang = $ds['locale'];
                            $id_path = App\Http\Controllers\ObjectController::ObjectId($ds['_id']);
                            $transpath = App\Models\TranslatePath::where("id_".$lang,"=",$id_path)->where('collection','=','dm_thong_tin')->first();
                        ?>
                            <td class="text-center text-middle">
                                <?php if($transpath && isset($transpath['id_'.$klang])): ?>
                                    <a href="<?php echo e(env('APP_URL')); ?><?php echo e($klang); ?>/admin/danh-muc-thong-tin/edit/<?php echo e($transpath["id_$klang"]); ?>?trans_id=<?php echo e($ds['_id']); ?>&trans_lang=<?php echo e(app()->getLocale()); ?>">
                                        <img src="<?php echo e(env('APP_URL')); ?>assets/backend/images/flags/<?php echo e($klang); ?>.jpg" alt="" class="flag-icon">
                                    </a>
                                <?php else: ?>
                                <a href="<?php echo e(env('APP_URL')); ?><?php echo e($klang); ?>/admin/danh-muc-thong-tin/add?trans_id=<?php echo e($ds['_id']); ?>&trans_lang=<?php echo e(app()->getLocale()); ?>">
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
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(env('APP_URL')); ?>assets/backend/libs/jquery-toast/jquery.toast.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
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

<?php echo $__env->make('Admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Admin/DMThongTin/list.blade.php ENDPATH**/ ?>