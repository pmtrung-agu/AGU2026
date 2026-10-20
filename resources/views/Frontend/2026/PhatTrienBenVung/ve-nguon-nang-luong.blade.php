<h3>{{ __($title_page) }}</h3>
@if(app()->getLocale() == 'vi')
<ul style="list-style: square; margin-left:30px;">
    <li>Các thiết bị sử dụng điện cần được tắt hoặc ngắt nguồn điện sau khi sử dụng xong;</li>
    <li>Khi rời khỏi lớp học hoặc phòng làm việc sau một ngày, cần chủ động kiểm tra để tắt tất cả các thiết bị dùng điện, cúp cầu dao điện (áp dụng với những thiết bị không cần duy trì điện qua đêm);</li>
    <li>Ưu tiên sử dụng các thiết bị có chức năng tiết kiệm điện;</li>
    <li>Mở cửa sổ thay vì sử dụng máy điều hòa nhiệt độ vào mùa hè, kết hợp mở cửa sổ với trồng cây xanh trong văn phòng;</li>
    <li>Ưu tiên sử dụng ánh sáng tự nhiên trong xây dựng và thiết kế nội thất văn phòng kết hợp với việc lắp đặt các cửa sổ lớn để tận dụng triệt để nguồn ánh sáng và gió tự nhiên;</li>
    <li>Hướng đến sử dụng nguồn năng lượng có thể tái tạo.</li>
</ul>
@endif
@if(app()->getLocale() == 'en')
<ul style="list-style: square; margin-left:30px;">
    <li>Turn off or unplug electrical equipment after use;</li>
    <li>Ensure all devices are turned if leaving the room last, except for those requiring continuous overnight power.</li>
    <li>Prioritize energy-efficient devices.</li>
    <li>Use windows and plants to reduce air conditioning.</li>
    <li>Maximize natural light and ventilation in office design.</li>
    <li>Strive for renewable energy sources.</li>
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
