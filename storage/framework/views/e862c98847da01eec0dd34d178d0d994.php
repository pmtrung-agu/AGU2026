<?php $__env->startSection('title', __('Thêm mới BANNER')); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/magnific-popup/magnific-popup.css"/>
    <link href="<?php echo e(env('APP_URL')); ?>assets/backend/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="row">
  <div class="col-12">
        <div class="card-box">
            <h3 class="m-t-0"><a href="<?php echo e(env('APP_URl')); ?><?php echo e(app()->getLocale()); ?>/admin/banner" class="btn btn-primary"><i class="mdi mdi-reply-all"></i></a> Thêm mới BANNER</h3>
            <form action="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/banner/create" method="post" id="dinhkemform" enctype="multipart/form-data">
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="control-label col-md-2 text-right p-t-10"><?php echo e(__('Tiêu đề')); ?></label>
                                <div class="col-md-10">
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Tiêu đề" value="<?php echo e(old('title')); ?>" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-md-2 text-right p-t-10"><?php echo e(__('Mô tả')); ?></label>
                        <div class="col-md-10">
                            <input type="text" name="url" value="<?php echo e(old('url')); ?>" placeholder="URL" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2 text-right p-t-10"><?php echo e(__('Thứ tự')); ?></label>
                        <div class="col-md-1">
                            <input type="number" name="thutu" id="thutu" value="<?php echo e(old('thutu') != null ? old('thutu') : 0); ?>" placeholder="Thứ tự" class="form-control">
                        </div>
                        <div class="col-md-2 switchery-demo">
                            <b><?php echo e(__('Tình trạng')); ?>: </b>
                            <input type="checkbox" name="status" id="status" class="js-switch" data-plugin="switchery" data-color="#009efb" value="1"/>
                        </div>
                        <div class="col-md-2 switchery-demo">
                            <b><?php echo e(__('Trang chủ')); ?>: </b>
                            <input type="checkbox" name="trang_chu" id="trang_chu" class="js-switch" data-plugin="switchery" data-color="#009efb" value="1"/>
                        </div>
                        <div class="col-md-2 switchery-demo">
                            <b><?php echo e(__('Tuyển sinh')); ?>: </b>
                            <input type="checkbox" name="tuyen_sinh" id="tuyen_sinh" class="js-switch" data-plugin="switchery" data-color="#009efb" value="1"/>
                        </div>
                        <div class="col-md-3 switchery-demo">
                            <b><?php echo e(__('Phát triển bền vững')); ?>: </b>
                            <input type="checkbox" name="phat_trien_ben_vung" id="phat_trien_ben_vung" class="js-switch" data-plugin="switchery" data-color="#009efb" value="1"/>
                        </div>
                    </div>
                    <div class="progress m-b-20" id="progressbar">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="control-label col-md-2 text-right p-t-10"><?php echo e(__('Hình ảnh')); ?></label>
                                <div class="col-md-2">
                                    <label class="btn btn-danger">
                                        <input type="file" name="hinhanh_files[]" class="hinhanh_files btn btn-primary" multiple accept="image/png, image/jpeg, image/jpg, image/gif" placeholder="Chọn hình ảnh" style="display:none;" />
                                    <i class="fa fa-images"></i> <?php echo e(__('Hình ảnh')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="list_hinhanh">
                        <?php if(old('hinhanh_aliasname')): ?>
                            <?php $__currentLoopData = old('hinhanh_aliasname'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-6 col-md-4 items draggable-element text-center">
                                    <input type="hidden" name="hinhanh_aliasname[]" value="<?php echo e(old('hinhanh_aliasname')[$k]); ?>" readonly/>
                                    <input type="hidden" name="hinhanh_filename[]" class="form-control" value="<?php echo e(old('hinhanh_filename')[$k]); ?>" />
                                    <a href="<?php echo e(env('APP_URL')); ?>storage/images/origin/<?php echo e(old('hinhanh_aliasname')[$k]); ?>" class="image-popup">
                                    <div class="portfolio-masonry-box">
                                      <div class="portfolio-masonry-img">
                                        <img src="<?php echo e(env('APP_URL')); ?>storage/images/thumb_360x200/<?php echo e(old('hinhanh_aliasname')[$k]); ?>" class="thumb-img img-fluid" alt="work-thumbnail">
                                      </div>
                                      <div class="portfolio-masonry-detail">
                                        <p><?php echo e(old('hinhanh_filename')[$k]); ?></p>
                                      </div>
                                    </div>
                                    </a>
                                    <a href="<?php echo e(env('APP_URL')); ?>image/delete/<?php echo e(old('hinhanh_aliasname')[$k]); ?>" onclick="return false;" class="btn btn-danger btn-sm delete_file" style="position:absolute;top:40px;right:30px;">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <input type="text" name="hinhanh_title[]" class="form-control" value="<?php echo e(old('hinhanh_title')[$k]); ?>" />
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
               </div>
               <div class="form-actions">
                    <a href="<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/admin/banner" class="btn btn-light"><i class="fa fa-reply-all"></i> <?php echo e(__('Trở về')); ?></a>
                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> <?php echo e(__('Cập nhật')); ?></button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(env('APP_URL')); ?>assets/backend/libs/select2/select2.min.js" type="text/javascript"></script>
    <script src="<?php echo e(env('APP_URL')); ?>assets/backend/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo e(env('APP_URL')); ?>assets/backend/js/drag-arrange.min.js" type="text/javascript"></script>
    <script src="<?php echo e(env('APP_URL')); ?>assets/backend/libs/switchery/switchery.min.js"></script>
    <script src="<?php echo e(env('APP_URL')); ?>assets/backend/js/script.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            upload_files("<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/file/uploads");
            upload_hinhanh("<?php echo e(env('APP_URL')); ?><?php echo e(app()->getLocale()); ?>/image/uploads");
            delete_file();$(".select2").select2();
            $("#progressbar").hide();
            $('.js-switch').each(function() {
                new Switchery($(this)[0], $(this).data());
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Admin/Banner/add.blade.php ENDPATH**/ ?>