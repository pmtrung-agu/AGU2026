@extends('Frontend.2026.layout')
@section('body')
@include('Frontend.2026.widget_banner')
    <section class="thong-tin-tuyen-sinh-home">
      <div class="cover-image sptb bg-background-color text-white" data-bs-image-src="{{ env('APP_ASSETS') }}assets/frontend/2026/images/banners/banner3.jpg" style="background: url(&quot;{{ env('APP_ASSETS') }}assets/frontend/2026/images/banners/banner3.jpg&quot;) center center;">
        <div class="content-text mb-0">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="section-title pb-4">
                  <h2><i class="fa fa-graduation-cap" aria-hidden="true"></i> Thông tin tuyển sinh 2026</h2>
                </div>
                <ul class="list-style fs-18 text-white student-feature-icons">
                  <li class="py-2">
                    <a href="">
                        <i class="fe fe-check me-3"></i> [TT Tin học và Ngoại ngữ] Thông báo chiêu sinh các lớp ôn thi chứng chỉ tiếng Anh trình độ B1 ngày 05/10/2026 và 26/10/20126
                    </a>
                  </li>
                  <li class="py-2">
                    <a href="">
                        <i class="fe fe-check me-3"></i> [TT Tin học và Ngoại ngữ] Thông báo chiêu sinh các lớp ôn thi chứng chỉ tiếng Anh trình độ B1 ngày 05/10/2026 và 26/10/20126
                    </a>
                  </li>
                  <li class="py-2">
                    <a href="">
                        <i class="fe fe-check me-3"></i> [TT Tin học và Ngoại ngữ] Thông báo chiêu sinh các lớp ôn thi chứng chỉ tiếng Anh trình độ B1 ngày 05/10/2026 và 26/10/20126
                    </a>
                  </li>
                  <li class="py-2">
                    <a href="">
                        <i class="fe fe-check me-3"></i> [TT Tin học và Ngoại ngữ] Thông báo chiêu sinh các lớp ôn thi chứng chỉ tiếng Anh trình độ B1 ngày 05/10/2026 và 26/10/20126
                    </a>
                  </li>
                                  </ul>
                <div class="mt-6 text-right">
                  <a class="btn btn-secondary" href="https://tuyensinh.agu.edu.vn" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i> Xem tất cả</a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section-->
    @if($tin_moi_nhat && count($tin_moi_nhat) > 0)
    <section class="sptb tin-moi-nhat">
      <div class="container">
        <div class="section-title">
          <h2><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tin mới nhất</h2>
        </div>
        <div class="panel panel-primary">
          <div class="">
            <div class="tabs-menu ">
              <!-- Tabs -->
              <ul class="nav panel-tabs eductaional-tabs mb-6">
                <li class="">
                  <a href="#tab1" class="active show" data-bs-toggle="tab"><i class="fa fa-list-alt" aria-hidden="true"></i> Tất cả</a>
                </li>
                {{-- <li>
                  <a href="#tab2" data-bs-toggle="tab" class=""><i class="fa fa-desktop" aria-hidden="true"></i> Hoạt động đào tạo</a>
                </li>- --}}
                <li>
                  <a href="#tab3" data-bs-toggle="tab" class=""><i class="fa fa-cogs" aria-hidden="true"></i> Tin tức - Sự kiện</a>
                </li>
                <li>
                  <a href="#tab4" data-bs-toggle="tab" class=""><i class="fa fa-bell" aria-hidden="true"></i> Thông báo</a>
                </li>
                <li>
                  <a href="#tab5" data-bs-toggle="tab" class=""><i class="fa fa-tags" aria-hidden="true"></i> Quy chế công khai</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="panel-body p-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab1">
                <div class="row">
                  @foreach($tin_moi_nhat as $tmn)
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
              {{-- <div class="tab-pane" id="tab2">
                <div class="row">
                </div>
              </div>
              - --}}
              <div class="tab-pane" id="tab3">
                <div class="row">
                 @foreach($tin_moi_nhat as $tmn)
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
                          <p class="mb-0 text-mo-ta" alt="{{ $tmn['mo_ta'] }}" title="{{ $tmn['mo_ta'] }}">{{ Str::limit($tmn['mo_ta'], 150) }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="tab-pane" id="tab4">
                <div class="row">
                 @foreach($tin_moi_nhat as $tmn)
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
                          <p class="mb-0 text-mo-ta" alt="{{ $tmn['mo_ta'] }}" title="{{ $tmn['mo_ta'] }}">{{ Str::limit($tmn['mo_ta'], 150) }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-6 text-right">
          @if(app()->getLocale() == 'vi')
            <a class="btn btn-secondary" href="{{ env('APP_URL') }}{{ app()->getLocale() }}/tin-tuc-su-kien/tin-moi-nhat"><i class="fa fa-paper-plane" aria-hidden="true"></i> Xem tất cả</a>
          @else
            <a class="btn btn-secondary" href="{{ env('APP_URL') }}{{ app()->getLocale() }}/news-and-events"><i class="fa fa-paper-plane" aria-hidden="true"></i> Xem tất cả</a>
          @endif
        </div>
      </div>
    </section>
    <!--/Section-->
    @endif
    <!--Section-->
    <section class="sptb position-relative cover-image bg-background" data-bs-image-src="{{ env('APP_ASSETS') }}assets/frontend/2026/images/banners/pattern3.png" style="background: url('{{ env('APP_ASSETS') }}assets/frontend/2026/images/patterns/agu.png') center center;">
      <div class="container">
        <div class="section-title">
          <h2 class="position-relative" style="color:#000000"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Lịch công tác</h2>
        </div>
        <div class="row">
          <div class="col-md-12">
              <span class="loading bg-orange"><i class="uni-repeat-2"></i> Đang tải, vui lòng chờ</span>
              <div class="col-sm-12 col-md-12" id="calendar"></div>
              <br />
              <div class="col-sm-12 col-md-12">
                  <p><a class="btn btn-secondary" href="https://calendar.google.com/calendar/u/0/r?cid=agu.edu.vn_qf2qof63stvjftctim9u8clh6c@group.calendar.google.com" target="_blank"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Xem thêm </a></p>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!--/Section-->
@endsection