@extends('Frontend.2026.layout')
@section('title', __('Giới thiệu - Brochure Giới thiệu'))
@section('body')
<section class="sptb mt-9">
    <div class="container">
        <div class="blog-single-details">
            <h3>Brochure</h3>
        </div>
        @if(app()->getLocale() == 'vi')
            {{-- <iframe src="https://drive.google.com/file/d/1Vsw3O-_a01hVIK2Xo3vnlQixwod1-P16/preview" style="width:100%;height:800px;"></iframe> --}}
            {{-- -<iframe src="https://drive.google.com/file/d/1Jll2yUIAV6b7PCh2YtGxpHm5DzDowWVx/preview" style="width:100%;height:800px;"></iframe> --}}
            <iframe src="https://drive.google.com/file/d/100QuZV47_SRbIQLm22qvWK-jluqZrFCO/preview" style="width:100%;height:800px;"></iframe>
        @else
            <iframe src="https://drive.google.com/file/d/1OJSKarNjU6e9e0wOrRfKhHm6Ex4LQv8H/preview" style="width:100%;height:800px;"></iframe>
            {{-- -<iframe src="https://drive.google.com/file/d/1Jll2yUIAV6b7PCh2YtGxpHm5DzDowWVx/preview" style="width:100%;height:800px;"></iframe> --}}
            {{-- -<iframe src="https://drive.google.com/file/d/1CWicfKySeo_EsWDIlJRRGHYhIfiRymSc/preview" style="width:100%;height:800px;"></iframe> --}}
        @endif
    </div>
</section>
@endsection

