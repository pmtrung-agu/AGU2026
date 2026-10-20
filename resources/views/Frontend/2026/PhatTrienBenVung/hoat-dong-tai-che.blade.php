<h3>{{ __($title_page) }}</h3>
@if(app()->getLocale() == 'vi')
<ul style="list-style: square; margin-left:30px;">
    <li>Giảm thiểu rác thải nhựa trong văn phòng: Hạn chế sử dụng băng rôn, dụng cụ ăn uống bằng nhựa sử dụng một lần;</li>
    <li>Tích cực tái chế rác thải bằng cách phân loại rác thải tại nguồn;</li>
    <li>Khuyến khích sử dụng túi vải thay cho túi ni lông, bình giữ nhiệt thay cho chai nước nhựa dùng một lần hoặc ly nhựa dùng một lần;</li>
    <li>Tiết kiệm giấy in, ưu tiên in bằng giấy 1 mặt cho các văn bản chỉ dùng để đọc, tham khảo; dùng giấy một mặt trong ghi chép cá nhân;</li>
    <li>Hạn chế những văn phòng phẩm không cần thiết và ưu tiên sử dụng văn phòng phẩm bằng giấy thay cho cặp nhựa, bìa nhựa;</li>
    <li>Ưu tiên đóng gói bằng vật liệu có thể tái chế được;</li>
    <li>Tích cực triển khai các hoạt động tái chế với quy mô toàn trường, các chương trình đổi rác lấy cây xanh,…</li>
</ul>
@endif
@if(app()->getLocale() == 'en')
<ul style="list-style: square; margin-left:30px;">
<li>Reduce plastic waste in the office: Avoid using plastic banners and single-use utensils.</li>
    <li>Actively sort and recycle waste at its source.</li>
    <li>Opt for fabric bags, thermos flasks, and reusable cups instead of single-use plastics.</li>
    <li>Conserve paper by printing one-sided for reading materials; use one side for personal notes.</li>
    <li>Minimize unnecessary office supplies, favoring paper-based items over plastic.</li>
    <li>Choose recyclable packaging materials.</li>
    <li>Implement campus-wide recycling initiatives, such as waste-for-green programs and tree-planting drives.</li>
</ul>
@endif
<h3>{{ __('Một số hình ảnh') }}</h3>

<div class="row">
    <div class="col-md-12">
         <div class="row task-widget" id="gallery"> 
            @for($i=1; $i<=3;$i++)
            <div class="col-xl-3 col-md-12">
                <div class="card">
                    <div class="item-card">
                        <div class="item-card-desc">
                            <a href="{{ env('APP_URL') }}assets/frontend/2026/images/phattrienbenvung/{{ $slug }}/h{{ $i }}.jpg" alt="{{ $title_page }}" title="{{ $title_page }}"></a>
                            <div class="item-card-img">
                                <img src="{{ env('APP_URL') }}assets/frontend/2026/images/phattrienbenvung/{{ $slug }}/h{{ $i }}.jpg" alt="{{ $title_page }}" title="{{ $title_page }}" class="">
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>


