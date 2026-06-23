
<?php $__env->startSection('title', 'Translate board'); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(env('ASSETS_URL')); ?>assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="row">
    <div class="col-12 card-box">
        <div class="row">
            <div class="col-12 col-md-8">
                <h3 class="m-t-0"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/translate/add" class="btn btn-info"><i class="fas fa-language"></i> <?php echo e(__('Thêm mới')); ?></a> <?php echo e(__('Translate')); ?> - <?php echo e($arr_lang[app()->getLocale()]); ?></h3>
            </div>
            <div class="col-12 col-md-4 text-right">
                <h3 class="m-t-0">
                <?php $__currentLoopData = $arr_lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang_key => $lang_text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($lang_key != app()->getLocale()): ?>
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e($lang_key); ?>/admin/translate">
                            <img src="<?php echo e(env('APP_ASSETS')); ?>assets/backend/images/flags/<?php echo e($lang_key); ?>.jpg" alt="user-image" class="mr-1" height="18" style="border:1px solid #ccc;"> <span class="align-middle"><?php echo e($arr_lang[$lang_key]); ?> </span>
                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </h3>
            </div>
        </div>
        <hr />
        <form action="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/translate" method="GET" id="articleForm">
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" name="keyword" id="keyword" value="<?php echo e($keyword); ?>" placeholder="<?php echo e(__('Keyword')); ?>" class="form-control">
                </div>
                <div class="col-12 col-md-2">
                    <button type="submit" name="submit" value="OK" class="btn btn-primary"><i class="fa fa-search"></i> <?php echo e(__('Tìm kiếm')); ?></button>
                </div>
            </div>
        </form>
        <?php if($data): ?>
        <table id="datatable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><?php echo e(__('KEY')); ?></th>
                    <th><?php echo e(__('VALUE')); ?></th>
                    <th class="text-center"><?php echo e(__('Hiệu chỉnh')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key); ?></td>
                    <td><?php echo e($value); ?></td>
                    <td class="text-center" width="100">
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/translate/delete/<?php echo e($key); ?>" class="" onclick="return confirm('Chắc chắn xóa?');"><i class="fa fa-trash text-danger"></i> </a>
                        <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/translate/edit/<?php echo e($key); ?>" class=""><i class="fa fa-pencil-alt"></i></a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php else: ?>
        <div class="alert alert-danger">
            <h3><i class="fa fa-search"></i> Kết quả không tìm thấy </h3>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Admin/Translate/index.blade.php ENDPATH**/ ?>