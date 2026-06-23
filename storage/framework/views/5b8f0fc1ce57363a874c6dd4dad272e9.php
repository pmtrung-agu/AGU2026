<?php $__env->startSection('title', __('Banner')); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="row">
    <div class="col-12 card-box">
        <h3 class="m-t-0"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/banner/add" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> <?php echo e(__('Thêm mới')); ?></a> <?php echo e(__('BANNER')); ?></h3>
        <?php if($danhsach): ?>
        <table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><?php echo e(__('STT')); ?></th>
                    <th><?php echo e(__('HÌNH')); ?></th>
                    <th><?php echo e(__('Title')); ?></th>
                    <th><?php echo e(__('Tình trạng')); ?></th>
                    <th><?php echo e(__('Thứ tự')); ?></th>
                    <th><?php echo e(__('Trang chủ')); ?></th>
                    <th><?php echo e(__('Tuyển sinh')); ?></th>
                    <th><?php echo e(__('PTBV')); ?></th>
                    <th class="text-center">#</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $danhsach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $ds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e(($k+1)); ?></td>
                        <td class="text-center">
                            <?php if(isset($ds['photos'][0]['aliasname']) && $ds['photos'][0]['aliasname']): ?>
                                <img src="<?php echo e(env('APP_URL')); ?>storage/images/thumb_360x200/<?php echo e($ds['photos'][0]['aliasname']); ?>" height="20">
                            <?php else: ?>
                                <?php echo e(__('NO IMAGE')); ?>

                            <?php endif; ?>
                        </td>
                        <td><?php echo e($ds['title']); ?></td>
                        <td class="text-center">
                            <?php if($ds['status'] == 1): ?>
                                <i class="fas fa-check-circle text-primary"></i>
                            <?php else: ?>
                                <i class="fas fa-circle text-default"></i>
                            <?php endif; ?>
                        </td>
                        <td class="text-center"><?php echo e($ds['order']); ?></td>
                        <td class="text-center">
                            <?php if($ds['trang_chu'] == 1): ?>
                                <i class="fas fa-check-circle text-primary"></i>
                            <?php else: ?>
                                <i class="fas fa-circle text-default"></i>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <?php if($ds['tuyen_sinh'] == 1): ?>
                                <i class="fas fa-check-circle text-primary"></i>
                            <?php else: ?>
                                <i class="fas fa-circle text-default"></i>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <?php if($ds['phat_trien_ben_vung'] == 1): ?>
                                <i class="fas fa-check-circle text-primary"></i>
                            <?php else: ?>
                                <i class="fas fa-circle text-default"></i>
                            <?php endif; ?>
                        </td>
                       <td class="text-center">
                            <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/banner/delete/<?php echo e($ds['_id']); ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash text-danger"></i></a>
                            <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/banner/edit/<?php echo e($ds['_id']); ?>"><i class="fas fa-pencil-alt"></i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(env('APP_URL')); ?>assets/backend/libs/select2/select2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".select2").select2();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Admin/Banner/list.blade.php ENDPATH**/ ?>