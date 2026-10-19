@extends('Frontend.2026.layout')
@section('title', __('Giới thiệu - Giới thiệu về Trường Đại học An Giang trên VTV3'))
@section('body')
<section class="sptb mt-9">
    <div class="container">
        <div class="page-default typo-dark">
            <div class="container">
                <div class="blog-single-details">
                    <h4>ĐHAG qua góc nhìn Flycam</h4>
                    <p class="text-center">
                        <video controls poster="{{ env('APP_URL') }}assets/frontend/2026/images/poster.png" style="width:100%">
                            <source src="{{ env('APP_URL') }}assets/frontend/2026/videos/agu_flycam.mp4" type="video/mp4">
                        </video>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
