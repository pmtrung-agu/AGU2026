<?php $__env->startSection('title', __('Chỉnh sửa Danh mục Thông tin')); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h3 class="m-t-0"><a href="<?php echo e(env('APP_URl')); ?><?php echo e(app()->getLocale()); ?>/admin/danh-muc-thong-tin" class="btn btn-primary btn-sm"><i class="mdi mdi-reply-all"></i> <?php echo e(__('Trở về')); ?></a> <?php echo e(__('Chỉnh sửa Danh mục Thông tin')); ?></h3>
            <form action="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/danh-muc-thong-tin/update" method="post" id="dinhkemform" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="id" id="id" value="<?php echo e($ds['_id']); ?>" placeholder="">
                <input type="hidden" name="trans_id" id="trans_id" value="<?php echo e($trans_id); ?>" placeholder="">
                <input type="hidden" name="trans_lang" id="trans_lang" value="<?php echo e($trans_lang); ?>" placeholder="">
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
                        <label class="control-label col-md-2 text-right p-t-10"><?php echo e(__('Tên')); ?></label>
                        <div class="col-md-10">
                            <input type="text" id="ten" name="ten" class="form-control" placeholder="<?php echo e(__('Tên')); ?>" value="<?php echo e(old('ten') != null ? old('ten') : $ds['ten']); ?>" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2 text-right p-t-10"><?php echo e(__('Slug')); ?></label>
                        <div class="col-md-10">
                            <input type="text" id="slug" name="slug" class="form-control" placeholder="<?php echo e(__('Slug')); ?>" value="<?php echo e(old('slug') != null ? old('slug') : $ds['slug']); ?>" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2 text-right p-t-10"><?php echo e(__('Thứ tự')); ?></label>
                        <div class="col-md-4">
                            <input type="number" id="thu_tu" name="thu_tu" class="form-control" placeholder="<?php echo e(__('Thứ tự')); ?>" value="<?php echo e(old('thu_tu') != null ? old('thu_tu') : $ds['thu_tu']); ?>" required />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/danh-muc-thong-tin" class="btn btn-light"><i class="fa fa-reply-all"></i> Trở về</a>
                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#ten").change(function(){
                var ten = $(this).val();
                var path = "<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/slug/"+ten;
                $.get(path, function(slug){ $("#slug").val(slug); });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Admin/DMThongTin/edit.blade.php ENDPATH**/ ?>