<ul class="horizontalMenu-list">
    <li aria-haspopup="true">
        <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
        <a href="javascript:void(0)">{{ __('Giới thiệu') }} <span class="fe fe-chevron-down"></span></a>
        <div class="horizontal-megamenu clearfix">
                <div class="container">
                    <div class="megamenu-content">
                        <div class="row">
                            <ul class="col-12 col-md-3 link-list">
                                <li class="title">{{ __('Trường Đại học An Giang') }}</li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/tong-quan-ve-truong-dai-hoc-an-giang">Tổng quan về Trường Đại học An Giang</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/so-do-to-chuc">Sơ đồ tổ chức</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/dang-uy">Đảng ủy</a></li>
                                {{-- -<li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/hoi-dong-truong">Hội đồng trường</a></li> --}}
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/ban-giam-hieu">Ban Giám hiệu</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/hoi-dong-khoa-hoc">Hội đồng Khoa học</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/su-mang-tam-nhin-gia-tri-cot-loi">Sứ mạng - Tầm nhìn - Giá trị cốt lõi - Triết lý giáo dục - Bản sắc người học</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/chinh-sach-dam-bao-chat-luong-phuong-cham-hoat-dong">Chính sách đảm bảo chất lượng - Phương châm hoạt động</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/ke-hoach-chien-luoc">Kế hoạch chiến lược</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/brochure">Brochure</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/nhan-dien-thuong-hieu">Nhận diện thương hiệu</a></li>
                            </ul>
                            <ul class="col-12 col-md-3 link-list">
                                <li class="title">{{ __('Thông tin chung') }}</li>
                                <li><a href="https://25years.agu.edu.vn/" target="_blank">Kỷ niệm 25 năm thành lập Trường</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/logo-ky-niem-25-nam-thanh-lap-truong">Logo kỷ niệm 25 năm thành lập Trường</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/bao-cao-thuong-nien">Báo cáo thường niên</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/dai-hoc-an-giang-theo-dong-thoi-gian">Trường ĐHAG theo dòng thời gian</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/video-gioi-thieu">Video giới thiệu về Trường ĐHAG</a></li>
                                <li><a href="{{ env('APP_URL') }}20years" target="_blanks">20 năm Trường Đại học An Giang</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/bai-hat-dhag-truong-chung-toi">Bài hát “ĐHAG Trường Chúng Tôi”</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/dhag-qua-goc-nhin-flycam">Trường ĐHAG qua góc nhìn Flycam</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/hinh-anh-hoat-dong">Thư viện ảnh</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/van-ban-quan-ly-dieu-hanh">Văn bản Quản lý - Điều hành</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/phat-trien-ben-vung">Phát triển bền vững</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/lien-he">Liên hệ</a></li>
                            </ul>
                            <ul class="col-12 col-md-3 link-list">
                                <li class="title">{{ __('Các dịch vụ') }}</li>
                                <li><a href="https://mail.google.com/a/agu.edu.vn" target="_blank">Thư điện tử</a></li>
                                <li><a href="http://enews.agu.edu.vn/" target="_blank">e-News</a></li>
                                <li><a href="http://regis.agu.edu.vn/" target="_blank">Đăng ký học phần</a></li>
                                <li><a href="https://its.agu.edu.vn/" target="_blank">Tài nguyên CNTT</a></li>
                                <li><a href="https://opac.vnulib.edu.vn/" target="_blank">Học liệu</a></li>
                                <li><a href="https://ir.vnulib.edu.vn/home" target="_blank">Tài liệu số</a></li>
                                <li><a href="https://lib.agu.edu.vn/co-so-du-lieu" target="_blank">Cơ sở dữ liệu</a></li>
                                {{--  <li><a href="https://docs.agu.edu.vn/tracuucongvan/" target="_blank">Công văn</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/bieu-mau">Các biểu mẫu</a></li> --}}
                                <li><a href="https://epa.agu.edu.vn/" target="_blank">Khu Thí nghiệm - Thực hành</a></li>
                                <li><a href="https://cict.agu.edu.vn/danh-ba-dien-thoai" target="_blank">Danh bạ điện thoại</a></li>
                            </ul>
                             @php
                                $menu_tintuc = App\Models\DMThongTin::where('locale', '=', app()->getLocale())->where('thu_tu', '>', 0)->orderBy('thu_tu', 'asc')->get();
                            @endphp
                            <ul class="col-12 col-md-3 link-list">
                                <li class="title">{{ __('Tin tức - Sự kiện') }}</li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/tin-moi-nhat">Tin mới nhất</a></li>
                                @foreach($menu_tintuc as $tt)
                                    <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/{{ $tt['slug'] }}">{{ $tt['ten'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </li>
    <li aria-haspopup="true">
        <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
        <a href="javascript:void(0)">Đào tạo & ĐBCL <span class="fe fe-chevron-down m-0"></span></a>
        <ul class="sub-menu">
            <li aria-haspopup="true">
                <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                <a href="javascript:void(0)">Đào tạo <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="https://pgd.agu.edu.vn" target="_blank">Trình độ sau đại học</a></li>
                    <li aria-haspopup="true"><a href="https://aao.agu.edu.vn/?q=content/ct%C4%91t-tr%C3%ACnh-%C4%91%E1%BB%99-%C4%91%E1%BA%A1i-h%E1%BB%8Dc" target="_blank">Trình độ đại học</a></li>
                </ul>
            </li>
            <li aria-haspopup="true">
                <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                <a href="javascript:void(0)">Đảm bảo Chất lượng <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/tu-danh-gia-co-so-giao-duc">Tự đánh giá Cơ sở Giáo dục</a></li>
                    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/tu-danh-gia-chuong-trinh-dao-tao">Tự đánh giá Chương trình Đào tạo</a></li>
                    <li aria-haspopup="true"><a href="https://fms.agu.edu.vn/{{ app()->getLocale() }}" target="_blank">Hệ thống quản lý CSDL ĐBCL </a></li>
                    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/so-tay-dam-bao-chat-luong">Sổ tay Đảm bảo Chất lượng</a></li>
                    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/giay-chung-nhan-dam-bao-chat-luong">Giấy chứng nhận Đảm bảo Chất lượng</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li aria-haspopup="true"><a href="https://tuyensinh.agu.edu.vn" target="_blank">Tuyển sinh</a></li>
    <li aria-haspopup="true">
        <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
        <a href="javascript:void(0)">NCKH&QHĐN <span class="fe fe-chevron-down m-0"></span></a>
        <ul class="sub-menu">
            <li aria-haspopup="true">
                <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                <a href="javascript:void(0)">Nghiên cứu Khoa học <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/nghien-cuu-khoa-hoc">Hoạt động Nghiên cứu Khoa học</a></li>
                    {{-- <li aria-haspopup="true"><a href="https://dspace.agu.edu.vn/handle/agu_library/5442" target="_blank">Công trình khoa học</a></li> --}}
                    <li aria-haspopup="true"><a href="http://sj.agu.edu.vn/" target="_blank">Tạp chí khoa học</a></li>
                    <li aria-haspopup="true"><a href="https://rmgo.agu.edu.vn" target="_blank">Hội nghị - Hội thảo</a></li>
                </ul>
            </li>
            <li aria-haspopup="true">
                <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                <a href="javascript:void(0)">Quan hệ Đối ngoại <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/hop-tac-quoc-te">Hợp tác Quốc tế</a></li>
                    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/doi-tac-ban-ghi-nho">Đối tác - Bản ghi nhớ</a></li>
                    <li aria-haspopup="true"><a href="https://sahed.agu.edu.vn/" target="_blank">Dự án SAHED</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li aria-haspopup="true">
        <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
        <a href="javascript:void(0)" class="active">Quy chế công khai <span class="fe fe-chevron-down"></span></a>
        <ul class="sub-menu">
            <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/quy-che-cong-khai-ve-dao-tao">Quy chế công khai về Đào tạo</a></li>
            <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/quy-che-cong-khai-ve-co-so-vat-chat">Quy chế công khai về Cơ sở vật chất</a></li>
            <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/quy-che-cong-khai-ve-tai-chinh">Quy chế công khai về Tài chính</a></li>
        </ul>
    </li>
    <li aria-haspopup="true"><a href="https://lms.agu.edu.vn" target="_blank">LMS/LCMS</a></li>
</ul>
{{-- 
<li aria-haspopup="true" class="p-0 mt-1">
<span>
    <a class="btn btn-primary" href="course-posts.html">Register Now</a>
</span>
</li> --}}