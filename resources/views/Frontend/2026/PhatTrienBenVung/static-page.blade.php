@extends('Frontend.2026.PhatTrienBenVung.layout')
@section('title', __($title_page) . ' - ' .  __('Trang Thông tin về Phát triển bền vững Trường Đại học An Giang'))
@section('body')
<style>
    h4 {
        color: #00bb62 !important;font-weight: bold !important;
    }
    .image-wrapper img {
        max-height: 250px !important;
    }
</style>
<section class="sptb mt-9">
    <div class="container">
        <div class="page-default typo-dark">
            <div class="container">
                <div class="blog-single-details">
                    <div class="row">
                        <div class="col-12 col-md-9">
                            @include('Frontend.2026.PhatTrienBenVung.'.$slug)
                        </div>
                        <div class="col-12 col-md-3">
                            @include('Frontend.2026.PhatTrienBenVung.widget-right-menu')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
