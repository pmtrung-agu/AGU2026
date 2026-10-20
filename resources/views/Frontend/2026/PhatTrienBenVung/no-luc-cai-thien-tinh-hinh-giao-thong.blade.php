<h4>{{ __($title_page) }}</h4>
@if(app()->getLocale() == 'vi')
<ul style="list-style: square; margin-left:30px;">
    <li>Khuyến khích cán bộ, giảng viên, nhân viên và sinh viên sử dụng các phương tiện giao thông công cộng trong di chuyển nội thành, nội tỉnh và khi đi công tác.</li>
    <li>Khuyến khích mọi người sử dụng phương tiện giao thông bằng điện thay cho bằng xăng hoặc dầu.</li>
</ul>
@endif
@if(app()->getLocale() == 'en')
<ul style="list-style: square; margin-left:30px;">
    <li>Encourage public transportation use for local, provincial, and work-related travel.</li>
    <li>Promote electric vehicles over gasoline or diesel options</li>
</ul>
@endif
<h4>{{ __('Một số hình ảnh') }}</h4>

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

