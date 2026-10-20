{{-- -<aside class="sidebar">
    <div class="widget">
        <h5 class="widget-title" style="font-size:20px;">{{ __('Phát triển bền vững') }}<span></span></h5>
        <ul class="go-widget">
            <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/{{ __('phat-trien-ben-vung') }}">{{ __('Trang chủ PTBV') }}</a></li>
            <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/{{ __('phat-trien-ben-vung') }}/tin-tuc-su-kien">{{ __('Tin tức sự kiện') }}</a></li>
           
        </ul>
    </div>
</aside>
 --}}
<div class="card">
    <div class="card-header"><h3 class="card-title"><i class="fa fa-tags"></i> </i>{{ __('Tin tức - Sự kiện') }}</h3></div>
    <div class="card-body">
        <div class="list-catergory">
            <div class="item-list">
                <ul class="list-group mb-0">
                    <li class="list-group-item pt-0"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/{{ __('phat-trien-ben-vung') }}" class="text-default-dark fs-14 font-weight-300"><i class="fe fe-chevron-right"></i> {{ __('Trang chủ PTBV') }}</a></li>
                    <li class="list-group-item pt-0"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/{{ __('phat-trien-ben-vung') }}/tin-tuc-su-kien" class="text-default-dark fs-14 font-weight-300"><i class="fe fe-chevron-right"></i> {{ __('Tin tức sự kiện') }}</a></li>
                     @foreach($arr_page as $p_key => $p_value)
                        <li class="list-group-item pt-0">
                            <a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/{{ __('phat-trien-ben-vung') }}/{{ $p_key }}" class="text-default-dark fs-14 font-weight-300"><i class="fe fe-chevron-right"></i> {{ __($p_value) }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>