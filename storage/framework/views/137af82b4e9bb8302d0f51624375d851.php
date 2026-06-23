<?php $__env->startSection('title', __('Giới thiệu - Ban Giám hiệu')); ?>
<?php $__env->startSection('body'); ?>
<section class="bg-grey typo-dark">
    <div class="container">
        <div class="row">
            <!-- Title -->
            <div class="col-sm-12">
                <div class="title-container">
                    <div class="title-wrap">
                        <h3 class="title">Ban Giám hiệu</h3>
                        <span class="separator line-separator"></span>
                    </div>
                </div>
            </div><!-- Title -->
        </div><!-- Row -->
        
        <div class="row border-style">
            <div class="col-sm-3">
            </div><!-- Column -->
            <div class="col-sm-6">
                <!-- Member Wrap -->
                <div class="member-wrap">
                    <!-- Member Image Wrap -->
                    <div class="member-img-wrap">
                        <img width="600" height="500" src="<?php echo e(env('APP_URL')); ?>assets/frontend/images/teacher/thay_tri.png" alt="Member" class="img-responsive">
                    </div>
                    <!-- Member detail Wrapper -->
                    <div class="member-detail-wrap bg-white">
                        <h5 class="member-name"><strong>TS. Nguyễn Hữu Trí</strong></h5>
                        <h5>Phó Hiệu Trưởng (Phụ trách)</h5>
                        <h5>Email: <a href="mailto:nhtri@agu.edu.vn">nhtri@agu.edu.vn</a></h5>
                        <h5>Điện thoại: <a href="mailto:+84 296 6256565">+84 296 6256565 ext 1888</a></h5>
                        
                    </div><!-- Member detail Wrapper -->
                </div><!-- Member Wrap -->
            </div><!-- Column -->
            <div class="col-sm-3">
            </div><!-- Column -->
        </div><!-- Row -->
        <br /><br />
        <div class="row border-style">
            <div class="col-sm-3">
            </div><!-- Column -->
            <div class="col-sm-6">
                <!-- Member Wrap -->
                <div class="member-wrap">
                    <!-- Member Image Wrap -->
                    <div class="member-img-wrap">
                        <img width="600" height="500" src="<?php echo e(env('APP_URL')); ?>assets/frontend/images/teacher/npthao.png" alt="Member" class="img-responsive">
                    </div>
                    <!-- Member detail Wrapper -->
                    <div class="member-detail-wrap bg-white">
                        <h5 class="member-name"><strong>TS. Nguyễn Phương Thảo</strong></h5>
                        <h5>Phó Hiệu Trưởng</h5>
                        <h5>Email: <a href="mailto:npthao@agu.edu.vn">npthao@agu.edu.vn</a></h5>
                        <h5>Điện thoại: <a href="mailto:+84 296 6256565">+84 296 6256565 ext 1666</a></h5>
                    </div><!-- Member detail Wrapper -->
                </div><!-- Member Wrap -->
            </div><!-- Column -->
            <div class="col-sm-3">
            </div><!-- Column -->
        </div>
    </div><!-- Container -->
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/GioiThieu/ban-giam-hieu.blade.php ENDPATH**/ ?>