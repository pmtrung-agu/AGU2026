@extends('Frontend.2026.layout')
@section('title', __('Giới thiệu - Nhiện diện thương hiệu'))
@section('css')
    <style>
        p {
            font-size: 18px !important;
            text-align: justify;
        }
    </style>
@endsection
@section('body')
<section class="sptb mt-9" style="background: #fffae4;">
    <div class="container">
        <div class="blog-single-details">
            <h3 style="font-weight:bold;text-align:center;">BỘ NHẬN DIỆN THƯƠNG HIỆU</h3>
            <h5 style="text-align:center;font-weight:bold;">Lời nói đầu</h5>
            <p>Giá trị của thương hiệu Trường Đại học An Giang đã được vun đắp qua nhiều thế hệ lãnh đạo, cán bộ, thầy cô giáo và sinh viên của Trường.</p>
            <p>Hệ thống nhận diện thương hiệu là công cụ hữu ích để thể hiện giá trị cốt lõi của Trường. Thông qua việc chuẩn hóa, thống nhất hình ảnh và thông tin của Trường với các tổ chức, đơn vị, cá nhân trong và ngoài nước. Phát huy và khai thác thương hiệu của Trường là nỗ lực của tất cả người học, giảng viên, cán bộ, công chức, viên chức của Trường nhằm nâng cao niềm tự hào và sức mạnh tập thể, giá trị truyền thống của nhà Trường.</p>
            <p>Bộ nhận diện thương hiệu hỗ trợ các đơn vị, cá nhân trong và ngoài Trường nhận diện, sử dụng đúng các loại hình, cách thức mà Trường xây dựng để tiếp cận với xã hội như: Logo, danh thiếp, phong bì, mẫu quảng cáo, các vật phẩm và ấn phẩm hỗ trợ quảng cáo, các loại ấn phẩm văn phòng v...v</p>
            <p style="text-align: center">
                <a href="{{ env('APP_URL') }}download/BỘ NHẬN DIỆN THƯƠNG HIỆU TRƯỜNG ĐẠI HỌC AN GIANG - ĐHQG TPHCM.pdf" download class="btn btn-primary" style="background:#0064b4;collor:#fff;"><i class="fa fa-download"></i> TẢI BỘ NHẬN DẠNG THƯƠNG HIỆU</a>
                <a href="{{ env('APP_URL') }}download/MAU POWPOER POINT THUYET TRINH.pptx" download class="btn btn-primary;" style="background:#be352d;color:#fff;"><i class="fa fa-file-powerpoint-o"></i> TẢI MẪU POWPER POINT THUYẾT TRÌNH</a>
                <a href="{{ env('APP_URL') }}download/LOGO TRƯỜNG ĐẠI HỌC AN GIANG.png" download class="btn btn-primary;" style="background:#ffea00;color:#0066b3;"><i class="fa fa-image"></i> TẢI LOGO TRƯỜNG ĐẠI HỌC AN GIANG</a>
            </p>
        </div>
    </div>
</section>
{{-- -
<div class="page-default typo-dark;" style="background: #bae0ff;">
    <div class="container">
        <div class="blog-single-details">
            <h4 style="font-weight:bold;text-align:center;">CÁC YẾU TỐ TẠO NÊN BỘ NHẬN DIỆN THƯƠNG HIỆU GỒM CÓ</h4>
            <h5 style="text-align:center;font-weight:bold;">Chuẩn hóa logo</h5>
            
            
        </div>
    </div>
</div>
 --}}
@endsection
