@extends('Frontend.2026.layout')
@section('title', __('Giới thiệu - Báo cáo Thường niên'))
@section('body')
<section class="sptb mt-9">
    <div class="container">
        <h3>Báo cáo thường niên</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-none bg-transparent">
                    <div class="card-body items-gallery p-0">
                        <div class="items-blog-tab text-center">
                            <div class="items-blog-tab-heading row">
                                <div class="col-12">
                                    <ul class="nav items-blog-tab-menu">
                                        <li><a href="#tab-5" data-bs-toggle="tab" class="active show">2024</a></li>
                                        <li><a href="#tab-4" data-bs-toggle="tab" class="">2019</a></li>
                                        <li><a href="#tab-3" data-bs-toggle="tab" class="">2017-2018</a></li>
                                        <li><a href="#tab-2" data-bs-toggle="tab" class="">2016</a></li>
                                        <li><a href="#tab-1" data-bs-toggle="tab" class="">2015</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content p-0">
                                <div class="tab-pane active" id="tab-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <iframe src="https://drive.google.com/file/d/1QHrzcrxXS32IUwBvdpJcQHCRrmDmWccb/preview" style="width:100%;height:800px;"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <iframe src="https://drive.google.com/file/d/1s1wy7n2QjDO1ITJmabIWDRIVziCC1X6x/preview" style="width:100%;height:800px;"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <iframe src="https://drive.google.com/file/d/1CxdjV1QIr7JauA3f9suxKBj-6UsfIxQZ/preview" style="width:100%;height:800px;"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <iframe src="https://drive.google.com/file/d/1IwODiA5o4spGUkfSJVgibymY4zKtRsKG/preview" style="width:100%;height:800px;"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-1">
                                    <div class="row">
                                        <div class="col-12">
                                            <iframe src="https://drive.google.com/file/d/1BhJKdp53wr8ER6Y41AAnRmwd3yfqzwj-/preview" style="width:100%;height:800px;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
