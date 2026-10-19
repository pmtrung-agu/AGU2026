@extends('frontend.2026.layout')
@section('title', __('About - AGU Overview on VTV3'))
@section('body')
<section class="sptb mt-9">
    <div class="container">
        <div class="page-default typo-dark">
            <div class="container">
                <div class="blog-single-details">
                    <h4>AGU Overview</h4>
                    <p class="text-center">
                        <video controls poster="{{ env('APP_URL') }}assets/frontend/2026/images/poster.png" style="width:100%">
                            <source src="{{ env('APP_URL') }}assets/frontend/2026/videos/AGU_OVERVIEW-ENG.mp4" type="video/mp4">
                        </video>
                    </p>
                    <hr />
                    <h4>AGU Overview on VTV3</h4>
                    <p class="text-center">
                        <video controls poster="{{ env('APP_URL') }}assets/frontend/2026/images/poster.png" style="width:100%">
                            <source src="{{ env('APP_URL') }}assets/frontend/2026/videos/agu_vtv3.mp4" type="video/mp4">
                        </video>
                    </p>
                    <hr />
                    <h4>AGU 20th Anniversary</h4>
                    <p class="text-center">
                        <video controls poster="{{ env('APP_URL') }}assets/frontend/2026/images/poster.png" style="width:100%">
                            <source src="{{ env('APP_URL') }}assets/frontend/2026/videos/agu_20nam.mp4" type="video/mp4">
                        </video>
                    </p>
                    <hr />
                    <h4>AGU 15th Anniversary</h4>
                    <p class="text-center">
                        <video controls poster="{{ env('APP_URL') }}assets/frontend/2026/images/poster.png" style="width:100%">
                            <source src="{{ env('APP_URL') }}assets/frontend/2026/videos/agu_15nam.mp4" type="video/mp4">
                        </video>
                    </p>
                    <hr />
                    <h4>AGU Overview</h4>
                    <p class="text-center">
                        <video controls poster="{{ env('APP_URL') }}assets/frontend/2026/images/poster.png" style="width:100%">
                            <source src="{{ env('APP_URL') }}assets/frontend/2026/videos/agu_gioithieu.mp4" type="video/mp4">
                        </video>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
