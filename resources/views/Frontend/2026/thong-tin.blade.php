@extends('Frontend.2026.layout')
@section('title', __($title))
@section('body')
@if($danhsach)
<section class="sptb mt-9 tin-moi-nhat">
    <div class="container">
        <div class="section-title">
          <h2><i class="fa fa-newspaper-o" aria-hidden="true"></i> {{ __($title) }}</h2>
        </div>
        <div class="row">
            @foreach($danhsach as $tmn)
                <div class="col-xl-4 col-md-6">
                    <div class="card overflow-hidden">
                      <div class="item-card7-img pt-5 px-5">
                        <div class="item-card7-imgs">
                          <a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/{{ __('chi-tiet-thong-tin') }}/{{ $tmn['slug'] }}" title="{{ $tmn['ten'] }}"></a>
                            @if(isset($tmn['photos'][0]['aliasname']) && $tmn['photos'][0]['aliasname'])
                              <img width="600" height="220" src="{{ env('APP_ASSETS') }}storage/images/thumb_360x200/{{ $tmn['photos'][0]['aliasname'] }}" class="cover-image br-7 border" alt="{{ $tmn['ten'] }}">
                            @else
                                <img width="600" height="220" src="{{ env('APP_ASSETS') }}assets/frontend/images/blog/blog-02.jpg" class="cover-image br-7 border" alt="{{ $tmn['ten'] }}">
                            @endif
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="item-card7-desc">
                          <div class="item-card7-text">
                            <a href="javascript:void(0)" class="text-dark">
                              <h4 class="font-weight-semibold"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/{{ __('chi-tiet-thong-tin') }}/{{ $tmn['slug'] }}" title="{{ $tmn['ten'] }}">{{ $tmn['ten'] }}</a></h4>
                            </a>
                          </div>
                          <div class="mb-1">
                            <a class="me-4">
                              <span class="text-date"><i class="fa fa-calendar-o"></i> {{ App\Http\Controllers\ObjectController::getDate($tmn['date_post'], "d/m/Y") }}</span>
                            </a>
                            <a class="me-4 float-end">
                              @if(isset($tmn['id_sdg_tags']) && $tmn['id_sdg_tags'])
                                  @foreach($tmn['id_sdg_tags'] as $st)
                                      <img src="{{ env('APP_URL') }}assets/frontend/2026/images/sdg-tags/{{ $st }}_{{ $tmn['locale'] }}.png" alt="{{ __($sdg_tags[$st]) }}" title="{{ __($sdg_tags[$st]) }}" style="height: 25px;cursor: pointer;"/>
                                  @endforeach
                              @endif
                            </a>
                          </div>
                          <p class="mb-0 text-mo-ta" alt="{{ $tmn['mo_ta'] }}" title="{{ $tmn['mo_ta'] }}">{{ Str::limit($tmn['mo_ta'], 200) }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
            @endforeach
        </div>
    </div>
</section>

@endif


@endsection
