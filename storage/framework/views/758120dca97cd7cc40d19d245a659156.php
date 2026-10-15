<?php $__env->startSection('title', __('Giới thiệu - Đảng ủy')); ?>
<?php $__env->startSection('body'); ?>
<?php
    //Danh sách 2020 - 2025
    /*$danhsach = array(
        array('Trần Văn Đạt', 'Bí thư Đảng ủy'),
        array('Võ Văn Thắng','Phó Bí thư Đảng ủy'),
        array('Hồ Nhã Phong','UV Ban Thường vụ'),
        array('Nguyễn Hữu Trí','Ủy viên'),
        array('Nguyễn Trần Nhẫn Tánh','Ủy viên'),
        array('Trần Lê Đăng Phương','Ủy viên'),
        array('Phan Trung Dũng','Ủy viên'),
        array('Trần Thanh Hải','Ủy viên'),
        array('Trần Minh Tâm','Ủy viên'),
        array('Nguyễn Thị Ngọc Thơ','Ủy viên'),
        array('Phan Minh Trí','Ủy viên'),
        array('Đoàn Thanh Nghị','Ủy viên'),
        array('Nguyễn Phương Thảo','Ủy viên'),
    );*/
    //Danh sach 2025 - 2030 
    $danhsach = array(
        array('Trần Văn Đạt', 'Bí thư Đảng ủy'),
        array('Nguyễn Hữu Trí','Ủy viên Ban Thường vụ'),
        array('Trần Lê Đăng Phương','Ủy viên Ban Thường vụ'),
        array('Nguyễn Phương Thảo','Ủy viên Ban Thường vụ'),
        array('Phan Trung Dũng','Ủy viên'),
        array('Phan Thị Thanh Huyền','Ủy viên'),
        array('Nguyễn Thị Thanh Loan','Ủy viên'),
        array('Nguyễn Thị Thảo Linh','Ủy viên'),
        array('Nguyễn Văn Mện','Ủy viên'),
        array('Đoàn Thanh Nghị','Ủy viên'),
        array('Hồ Nhã Phong','Ủy viên'),
        array('Nguyễn Thị Ngọc Thơ','Ủy viên'),
        array('Trần Trung Quốc','Ủy viên'),
    );
?>
<section class="sptb mt-9">
    <div class="container">
        <div class="blog-single-details">
            <h3>Đảng ủy</h3>
            
            <p class="font-17">Ngày 29/06/2025, Đại hội đại biểu Đảng bộ Trường Đại học An Giang lần thứ VII, nhiệm kỳ 2025 – 2030 đã bầu 13 đồng chí vào Ban Chấp hành Đảng bộ.</p>
            <p class="text-center">
                <img src="<?php echo e(env('APP_URL')); ?>assets/frontend/2026/images/gioithieu/dang-uy-3.jpg" alt="Trường Đại học An Giang" align="center" style="max-width:100%;">
            </p>
            
            <br /><br />
            <h3 class="text-center">Ban Chấp hành Đảng bộ</h3>
            <hr />
            <table class="table table-border table-bordered table-hovered table-striped">
                <thead>
                    <tr>
                        <th width="50">STT</th>
                        <th>Họ tên</th>
                        <th>Chức vụ</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $danhsach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ks => $ds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($ks+1); ?></td>
                    <td><?php echo e($ds[0]); ?></td>
                    <td><?php echo e($ds[1]); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.2026.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Lara_Projects\AGU2026\resources\views/Frontend/2026/GioiThieu/dang-uy.blade.php ENDPATH**/ ?>