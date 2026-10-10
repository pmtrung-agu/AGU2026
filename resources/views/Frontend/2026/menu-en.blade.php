<ul class="horizontalMenu-list">
    <li aria-haspopup="true">
        <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
        <a href="javascript:void(0)">{{ __('Introduction') }} <span class="fe fe-chevron-down"></span></a>
        <div class="horizontal-megamenu clearfix">
                <div class="container">
                    <div class="megamenu-content">
                        <div class="row">
                            <ul class="col-12 col-md-3 link-list">
                                <li class="title">{{ __('An Giang University') }}</li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/about/overview">Overview</a></li>
                                        <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/about/structure-and-organization">Structure and Organization</a></li>
                                        <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/about/president-board">President board</a></li>
                                        
                                        {{-- <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/about/message-from-the-rector">Message from the Rector</a></li> --}}
                                        <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/about/mission-vision-core-value">Mission - Vision - Core value</a></li>
                                        <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/about/quality-asssurance-policy">Quality Assurance Policy</a></li>
                                        <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/news-and-events/strategic-plan">Development Strategies</a></li>
                                        <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/about/brochure">Brochure</a></li>
                            </ul>
                            <ul class="col-12 col-md-3 link-list">
                                <li class="title">{{ __('Brief introduction') }}</li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/about/annual-report">Annual Report</a></li>
                                {{-- <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/about/timeline-of-agu">Timeline of AGU</a></li> --}}
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/about/video">Video</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/about/an-giang-university-song">An Giang University Song</a></li>
                                <li><a href="http://25years.agu.edu.vn" target="_blank">25th Anniversary</a></li>
                                <li><a href="{{ env('APP_URL') }}20years" target="_blank">20th Anniversary</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/news-and-events/gallery">Gallery</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/about/contacts">Contacts</a></li>
                            </ul>
                            <ul class="col-12 col-md-3 link-list">
                                <li class="title">{{ __('Services') }}</li>
                                <li><a href="https://mail.google.com/a/agu.edu.vn" target="_blank">Email</a></li>
                                <li><a href="http://enews.agu.edu.vn/" target="_blank">eNews</a></li>
                                <li><a href="https://regis.agu.edu.vn/" target="_blank">Register Courses</a></li>
                                <li><a href="https://its.agu.edu.vn/" target="_blank">IT Resources</a></li>
                                <li><a href="https://lib1.agu.edu.vn/SitePages/SearchOpac.aspx" target="_blank">Learning resources</a></li>
                                <li><a href="https://ir.vnulib.edu.vn/home" target="_blank">Digital documents</a></li>
                                <li><a href="https://lib.agu.edu.vn/co-so-du-lieu" target="_blank">E-Databases</a></li>
                                {{-- <li><a href="https://docs.agu.edu.vn/tracuucongvan/" target="_blank">Documentary</a></li>
                                <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/gioi-thieu/bieu-mau">Forms</a></li>--}}
                                <li><a href="https://epa.agu.edu.vn/" target="_blank">Laboratory practices and Equipment</a></li>
                                <li><a href="https://cict.agu.edu.vn/danh-ba-dien-thoai" target="_blank">Contacts list</a></li>
                            </ul>
                             @php
                                $menu_tintuc = App\Models\DMThongTin::where('locale', '=', app()->getLocale())->where('thu_tu', '>', 0)->orderBy('thu_tu', 'asc')->get();
                            @endphp
                            <ul class="col-12 col-md-3 link-list">
                                <li class="title">{{ __('News and Events') }}</li>
                               <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/news-and-events/lastest-news">Lastest News</a></li>
                                @foreach($menu_tintuc as $tt)
                                    <li><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/news-and-events/{{ $tt['slug'] }}">{{ $tt['ten'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </li>
    <li aria-haspopup="true">
        <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
        <a href="javascript:void(0)">Training & QA <span class="fe fe-chevron-down m-0"></span></a>
        <ul class="sub-menu">
            <li aria-haspopup="true">
                <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                <a href="javascript:void(0)">Programs and Courses <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="https://pgd.agu.edu.vn" target="_blank">Graduate programs</a></li>
                    <li aria-haspopup="true"><a href="https://aao.agu.edu.vn/?q=content/ct%C4%91t-tr%C3%ACnh-%C4%91%E1%BB%99-%C4%91%E1%BA%A1i-h%E1%BB%8Dc" target="_blank">Undergraduate programs</a></li>
                </ul>
            </li>
            <li aria-haspopup="true">
                <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                <a href="javascript:void(0)">Quality Assurance <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/news-and-events/self-evaluation-report">Self-evaluation Report</a></li>
                    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/news-and-events/training-program-quality-assurement">Training program Quality Assurement</a></li>
                    <li aria-haspopup="true"><a href="https://fms.agu.edu.vn/{{ app()->getLocale() }}" target="_blank">Quality Assurance System</a></li>
                    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/news-and-events/quality-assurance-manual">Quality Assurance Manual</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li aria-haspopup="true"><a href="https://tuyensinh.agu.edu.vn" target="_blank">Admissions</a></li>
    <li aria-haspopup="true">
        <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
        <a href="javascript:void(0)">Research & Cooperation <span class="fe fe-chevron-down m-0"></span></a>
        <ul class="sub-menu">
            <li aria-haspopup="true">
                <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                <a href="javascript:void(0)">Researches <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/news-and-events/research-activity">Research activity</a></li>
                    <li aria-haspopup="true"><a href="https://dspace.agu.edu.vn:8080/handle/AGU_Library/2900" target="_blank">Science technology</a></li>
                    <li aria-haspopup="true"><a href="http://sj.agu.edu.vn/" target="_blank">Journal of science</a></li>
                    <li aria-haspopup="true"><a href="https://rmgo.agu.edu.vn/?q=vi/thong-bao-hoi-thao" target="_blank">Workshops</a></li>
                </ul>
            </li>
            <li aria-haspopup="true">
                <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                <a href="javascript:void(0)">International activity <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/news-and-events/international-relations">International relations</a></li>
                    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/news-and-events/memorandum-of-understanding">Memorandum of Understanding</a></li>
                    <li aria-haspopup="true"><a href="https://sahed.agu.edu.vn/" target="_blank">SAHED Project</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li aria-haspopup="true"><a href="{{ env('APP_URL') }}{{ app()->getLocale() }}/news-and-events/publicity">Publicity</a></li>
    <li aria-haspopup="true"><a href="https://lms.agu.edu.vn" target="_blank">LMS/LCMS</a></li>
</ul>