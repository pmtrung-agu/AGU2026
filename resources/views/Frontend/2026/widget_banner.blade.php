@php
$banner = App\Models\Banner::where('locale','=',app()->getLocale())
    ->where('status', '=', 1)->where('trang_chu', '=', 1)
    ->orderBy('order','asc')->orderBy('updated_at', 'desc')->get();
@endphp

@if($banner && count($banner) > 0)
<section class="home-slider">
    <div class="owl-carousel testimonial-owl-carousel-home owl-theme">
        @foreach($banner as $b)
        @if(isset($b['photos'][0]['aliasname']) && $b['photos'][0]['aliasname'])
        <div class="item">
            @if(isset($b['url']) && $b['url'])  <a href="{{ $b['url'] }}" style="width:auto !important; height:auto !important;"> @endif
            <img src="{{ env('APP_URL') }}storage/images/origin/{{ $b['photos'][0]['aliasname'] }}" alt="" style="width:100%;">
            @if(isset($b['url']) && $b['url'])  </a> @endif
        </div>
        @endif
        @endforeach        
    </div>
</section>
@endif