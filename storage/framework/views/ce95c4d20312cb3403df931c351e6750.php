<?php $__env->startSection('title', __('Thêm mới Danh mục Thông Tin')); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h3 class="m-t-0"><a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/danh-muc-thong-tin" class="btn btn-primary"><i class="mdi mdi-reply-all"></i></a> <?php echo e(__('Thêm mới Danh mục Thông Tin')); ?></h3>
            <form action="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/danh-muc-thong-tin/create" method="post" id="dinhkemform" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

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
                            <input type="text" id="ten" name="ten" class="form-control" placeholder="<?php echo e(__('Tên')); ?>" value="<?php echo e(old('ten')); ?>" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2 text-right p-t-10"><?php echo e(__('Slug')); ?></label>
                        <div class="col-md-10">
                            <input type="text" id="slug" name="slug" class="form-control" placeholder="<?php echo e(__('Slug')); ?>" value="<?php echo e(old('slug')); ?>" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2 text-right p-t-10"><?php echo e(__('Thuộc cấp trên')); ?></label>
                        <div class="col-md-6">
                            <select name="id_parent" id="id_parent"  class="form-control select2">
                                <option value="">Thuộc Danh mục thông tin</option>
                                <?php if($parents): ?>
                                    <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($p['_id']); ?>" <?php if($p['_id'] == old('id_parent')): ?> selected <?php endif; ?>><?php echo e($p['ten']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <label class="control-label col-md-2 text-right p-t-10"><?php echo e(__('Thứ tự')); ?></label>
                        <div class="col-md-2">
                            <input type="number" id="thu_tu" name="thu_tu" class="form-control" placeholder="<?php echo e(__('Thứ tự')); ?>" value="<?php echo e(old('thu_tu') != null ? old('thu_tu') : 0); ?>" required />
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
    <script src="<?php echo e(env('APP_URL')); ?>assets/backend/libs/select2/select2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".select2").select2();
            $("#ten").change(function(){
                var ten = $(this).val();
                var path = "<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/slug/"+ten;
                $.get(path, function(slug){ $("#slug").val(slug); });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Admin/DMThongTin/add.blade.php ENDPATH**/ ?>