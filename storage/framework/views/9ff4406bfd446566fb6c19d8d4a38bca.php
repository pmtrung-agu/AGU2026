
<?php $__env->startSection('title', __('Chỉnh sửa Translate')); ?>
<?php $__env->startSection('body'); ?>
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h3 class="m-t-0"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/translate" class="btn btn-primary"><i class="fa fa-reply-all"></i></a> <?php echo e(__('Chỉnh sửa Translate List')); ?></h3>
            <form action="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/translate/update" method="post" id="dinhkemform" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="form-body">
                    <hr />
                    <?php if($errors->any()): ?>
                        <div class="alert alert-success">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="form-group row">
                        <label class="control-label col-md-2 text-right p-t-10"><?php echo e(__('KEY')); ?></label>
                        <div class="col-md-10">
                            <input type="text" id="key" name="key" class="form-control" placeholder="<?php echo e(__('KEY')); ?>" value="<?php echo e(old('key') != null ? old('key') : $key); ?>" required />
                            <input type="hidden" id="old_key" name="old_key" class="form-control" placeholder="<?php echo e(__('KEY')); ?>" value="<?php echo e($key); ?>" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2 text-right p-t-10"><?php echo e(__('VALUE')); ?></label>
                        <div class="col-md-10">
                            <input type="text" id="value" name="value" class="form-control" placeholder="<?php echo e(__('VALUE')); ?>" value="<?php echo e(old('value') != null ? old('value') : $value); ?>" required />
                        </div>
                    </div>
                </div>
                 <div class="form-actions">
                    <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/translate" class="btn btn-light"><i class="fa fa-reply-all"></i> <?php echo e(__('Trở về')); ?></a>
                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> <?php echo e(__('Cập nhật')); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Admin/Translate/edit.blade.php ENDPATH**/ ?>