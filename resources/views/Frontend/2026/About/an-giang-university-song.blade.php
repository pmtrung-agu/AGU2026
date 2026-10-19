@extends('Frontend.2026.layout')
@section('title', __('About - An  Giang University Song'))
@section('body')
<section class="sptb mt-9">
    <div class="container">
        <div class="page-default typo-dark">
            <div class="container">
                <div class="blog-single-details">
                    <h4>An  Giang University Song</h4>
                    <p class="text-center">
                        <video controls poster="{{ env('APP_URL') }}assets/frontend/2026/images/poster.png" style="width:100%">
                            <source src="{{ env('APP_URL') }}assets/frontend/2026/videos/agu_song.webm" type="video/mp4">
                        </video>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
