@extends('Frontend.2026.layout')
@section('title', $ds['ten'])
@section('description', $ds['mo_ta'])
@if(isset($ds['photos'][0]['aliasname']) && $ds['photos'][0]['aliasname'])
    @section('image', env('APP_URL') . "storage/images/thumb_360x200/".$ds['photos'][0]['aliasname'])
@else
    @section('image', env('APP_URL') . "assets/frontend/images/blog/blog-02.jpg")
@endif
@section('css')
<style>
    .container .chi-tiet-tin-tuc p, .container .chi-tiet-tin-tuc * span{
        font-family: "Be Vietnam Pro", sans-serif !important;
        font-weight: 300;
    }
    .title-tin-lien-quan {
        font-size: 18px; text-align: justify;
        font-weight: 350;line-height:22px;
    }
    .mo-ta-tin-lien-quan {
        text-align: justify; font-weight: 300; line-height: 20px;
    }
</style>
@endsection
@section('body')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=131376384294659&autoLogAppEvents=1" nonce="xz8OBKsp"></script>
<section class="sptb mt-9">
    <div class="container">
        <div class="row chi-tiet-tin-tuc">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <h3 class="card-title">{{ $ds['ten'] }}</h3>
                <i class="fe fe-calendar me-2 text-primary"></i> {{ App\Http\Controllers\ObjectController::getDate($ds['date_post'],"d/m/Y H:i") }}
                @if($ds['id_cat'])
                     @foreach($ds['id_cat'] as $c)
                        @php
                            $cat = App\Models\DMThongTin::find($c);
                            if(app()->getLocale() == 'vi') $taxonomy = 'tin-tuc-su-kien';
                            else $taxonomy = 'news-and-events';
                        @endphp
                        <i class="fa fa-tags"></i> <a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/{{ $taxonomy }}/{{ $cat['slug'] }}">{{ $cat['ten'] }}</a>
                    @endforeach
                @endif
                @php
                    $views = App\Models\Views::where('path','=',Request::path())->count();
                @endphp
                @if($views)
                    <i class="fa fa-eye"></i> {{ $views }}
                @endif
                <div class="fb-like" data-href="{{ Request::fullUrl() }}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                 @if(isset($ds['id_sdg_tags']) && $ds['id_sdg_tags'])
                <div class="row">
                    <div class="col-12 text-right" style="padding-right:20px;">
                        @foreach($ds['id_sdg_tags'] as $st)
                            <img src="{{ env('APP_URL') }}assets/frontend/images/sdg-tags/{{ $st }}_{{ $ds['locale'] }}.png" alt="{{ __($sdg_tags[$st]) }}" title="{{ __($sdg_tags[$st]) }}" style="height: 50px;cursor: pointer;"/>
                        @endforeach
                    </div>
                </div>
                @endif
                <p style="padding-top:20px;"> {{ $ds['mo_ta'] }}</p>
                {!! $ds['noi_dung'] !!}
                @if($ds['photos'])
                    <p><h4><i class="fa fa-image"></i> Hình ảnh</h4></p>
                    <div class="row task-widget"> 
                        @foreach($ds['photos'] as $h)
                        <div class="col-xl-3 col-md-12">
                            <div class="card">
                                <div class="item-card">
                                    <div class="item-card-desc">
                                        <a href="{{ env('APP_URL') }}storage/images/origin/{{ $h['aliasname'] }}"></a>
                                        <div class="item-card-img">
                                            <img src="{{ env('APP_URL') }}storage/images/thumb_360x200/{{ $h['aliasname'] }}" alt="{{ $h['title'] }}" title="{{ $h['title'] }}" class="">
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @endif
                 @if($ds['attachments'])
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <h3><i class="fa fa-file"></i> {{ __('Đính kèm') }}</h3>
                        <hr />
                        <table class="table table-border table-striped table-sm">
                            <thead>
                                <tr>
                                  <th class="text-center">STT</th>
                                  <th>Nội dung</th>
                                  <th class="text-center">Tải về</th>
                                </tr>
                          </thead>
                            <tbody>
                            @foreach($ds['attachments'] as $key => $dk)
                                <tr>
                                    <td class="text-center">{{ $key+1 }}</td>
                                    <td>
                                        <a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/xem-truc-tuyen/thong-tin/{{ $ds['_id'] }}/{{ $key }}" onClick="return false;" class="view_online">
                                            {{ $dk['title'] }}
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tai-ve/thong-tin/{{ $ds['_id'] }}/{{ $key }}">
                                            <i class="fas fa-download" style="font-size:20px;font-weight:bold;"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                @php
                    $widget_tintuc = App\Models\DMThongTin::where('locale','=',app()->getLocale())->where('thu_tu', '>', 0)->get();
                @endphp
                @if($widget_tintuc)
                <div class="card">
                    <div class="card-header"><h3 class="card-title"><i class="fa fa-tags"></i> </i>{{ __('Tin tức - Sự kiện') }}</h3></div>
                    <div class="card-body">
                        <div class="list-catergory">
                            <div class="item-list">
                                <ul class="list-group mb-0">
                                    @foreach($widget_tintuc as $tt)
                                    <li class="list-group-item pt-0">
                                        <a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/{{ $taxonomy }}/{{ $tt['slug'] }}" class="text-default-dark fs-14 font-weight-300">
                                            <i class="fe fe-chevron-right"></i> {{ $tt['ten'] }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @php
                    $widget_tintucmoi = App\Models\ThongTin::where('locale','=',app()->getLocale())->where('_id', '<>', $ds['_id'])->orderBy('date_post', 'desc')->take(6)->get();
                    if(app()->getLocale() == 'vi') $detail_taxonomy = 'chi-tiet-thong-tin';
                    else $detail_taxonomy = 'detail-news-and-events';
                @endphp
                @if($widget_tintucmoi)
                <div class="card">
                    <div class="card-header"><h3 class="card-title"><i class="fa fa-newspaper-o"></i> {{ __('Tin tức mới') }}</h3></div>
                    <div class="card-body">
                        <div class="list-catergory1">
                            <div class="item-list">
                                <ul class="list-group mb-0">
                                    @foreach($widget_tintucmoi as $ttm)
                                    <li class="list-group-item d-flex border-bottom-0 pt-0">
                                        @if(isset($ttm['photos'][0]['aliasname']) && $ttm['photos'][0]['aliasname'])
                                            <img src="{{ env('APP_URL') }}storage/images/thumb_360x200/{{ $ttm['photos'][0]['aliasname'] }}" width="60" height="60" alt="{{ $ttm['ten'] }}" title="{{ $ttm['ten'] }}" class="avatar br-7 avatar-lg me-3 my-auto">
                                        @else
                                            <img src="{{ env('APP_URL') }}assets/frontend/images/default/thumb_agu.jpg" width="60" height="60" alt="{{ $ttm['ten'] }}" title="{{ $ttm['ten'] }}" class="avatar br-7 avatar-lg me-3 my-auto">
                                        @endif
                                        <a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/{{ $detail_taxonomy }}/{{ $ttm['slug'] }}" class="text-default fs-16 font-weight-300" style="text-algin:justify;" alt="{{$ttm['ten']}}" title="{{ $ttm['ten'] }}">{{ Str::limit($ttm['ten'],50) }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

@if($tin_lien_quan && count($tin_lien_quan) > 0)
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title">
            <h3><i class="fa fa-newspaper-o"></i> {{ __('Tin liên quan') }}</h3>
        </div>
        <div id="defaultCarousel" class="owl-carousel Card-owlcarousel client-carousel owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-1568px, 0px, 0px); transition: 0.25s; width: 4704px;">
                    @foreach($tin_lien_quan as $tmn)
                    <div class="owl-item cloned" style="width: 392px;">
                        <div class="item">
                            <div class="card mb-0">
                                <div class="card-body p-4">
                                    <div class="item7-card-img">
                                        <a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/chi-tiet-thong-tin/{{ $tmn['slug'] }}"></a>
                                        @if(isset($tmn['photos'][0]['aliasname']) && $tmn['photos'][0]['aliasname'])
                                            <img src="{{ env('APP_ASSETS') }}storage/images/thumb_360x200/{{ $tmn['photos'][0]['aliasname'] }}" class="cover-image br-7 mb-4 border" alt="{{ $tmn['ten'] }}">
                                        @else
                                            <img src="{{ env('APP_ASSETS') }}assets/frontend/2026/images/default_tin_tuc.jpg" class="cover-image br-7 mb-4 border" alt="{{ $tmn['ten'] }}">
                                        @endif
                                    </div>
                                    <div class="item7-card-desc d-flex mb-2">
                                        <a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/chi-tiet-thong-tin/{{ $tmn['slug'] }}"><i class="fe fe-calendar me-2"></i> {{ App\Http\Controllers\ObjectController::getDate($tmn['date_post'],"d/m/Y H:i") }}</a>
                                        {{-- <div class="ms-auto">
                                            <a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/chi-tiet-thong-tin/{{ $tmn['slug'] }}"><i class="fe fe-message-circle me-2"></i>4 Comments</a>
                                        </div>- --}}
                                    </div>
                                    <a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/chi-tiet-thong-tin/{{ $tmn['slug'] }}">
                                        <h4 class="font-weight-semibold mb-2 mt-3 title-tin-lien-quan">{{ $tmn['ten'] }}</h4>
                                    </a>
                                    <p class="mb-4 mo-ta-tin-lien-quan">{{ $tmn['mo_ta'] }}</p>
                                    <a class="btn btn-primary" href="{{ env('APP_URL') }}{{ app()->getLocale() }}/chi-tiet-thong-tin/{{ $tmn['slug'] }}">{{ __('Xem thêm') }} <i class="fe fe-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
            </div>
        </div>
    </div>
</section>

@endif
<div id="xemdinhkem" class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width:95%;">
        <div class="modal-content" style="height:800px !important;">
            <div class="modal-header">
                <h4 class="modal-title" id="myExtraLargeModalLabel">{{ __("Xem chi tiết đính kèm") }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="chitiet" class="modal-body" style="height:700px; overflow:hidden;">
                Xin chào
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript">
        jQuery(document).ready(function(){
            $(".view_online").click(function(){
                var href = $(this).attr("href");
                $("#xemdinhkem").modal('show');
                $.get(href, function(html_view){
                    $("#chitiet").html(html_view);
                });
            });
        });
    </script>
@endsection