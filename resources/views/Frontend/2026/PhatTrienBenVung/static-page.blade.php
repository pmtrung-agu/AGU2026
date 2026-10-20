@extends('Frontend.2026.PhatTrienBenVung.layout')
@section('title', __($title_page) . ' - ' .  __('Trang Thông tin về Phát triển bền vững Trường Đại học An Giang'))
@section('css')
<link rel="stylesheet" type="text/css" href="{{ env('APP_URL') }}assets/frontend/2026/plugins/photobox/photobox.css" />
<link rel="stylesheet" type="text/css" href="{{ env('APP_URL') }}assets/frontend/2026/plugins/photobox/photobox.ie.css" />
@endsection

@section('body')
<style>
    h4 {
        color: #00964b !important;font-weight: bold !important;
    }
    .image-wrapper img {
        max-height: 250px !important;
    }
    h3 {
        font-size: 25px;
        color: #00964b; line-height: 50px;
    }
    ul li {
        font-weight: 300;
        text-align: justify; line-height: 28px;
    }
</style>
<section class="sptb mt-9">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                @include('Frontend.2026.PhatTrienBenVung.'.$slug)
            </div>
            <div class="col-12 col-md-4">
                @include('Frontend.2026.PhatTrienBenVung.widget-right-menu')
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="{{ env('APP_URL') }}assets/frontend/2026/plugins/photobox/jquery.photobox.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            $('#gallery').photobox('a',{time: 0});
        });
    </script>
@endsection