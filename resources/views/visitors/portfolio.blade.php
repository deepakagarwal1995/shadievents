@extends('layouts.app', ['title' =>'Our Work | Shadievents'])

@section('content')

        <!--page-title-->
        <div class="ttm-page-title-row" style="    background-image: url({{ config('app.url') }}/assets/images/tenured-tips-hero-scaled.jpg);">
            <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title"> Portfolio </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--page-title end-->


        <!--site-main start-->
        <div class="site-main">


            <!--portfolio-section_3-->
            <section class="ttm-row portfolio-section_3 clearfix">
                <div class="container">
                    <!--row-->
                    <div class="row">
                         <div class="col-sm-12 text-center">

                                         <h1 class="page-title">It’s all in the details</h1>
                                         <h6 class="page-subtitle">unlimited ways to make <span class="text-cursive-1">your </span> wedding grand and seamless</h6>
                                             </div>




                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                            <!--featured-imagebox-portfolio-->
                            <div class="featured-imagebox featured-imagebox-portfolio style2">
                                <div class="ttm-box-view-content-inner">
                                    <!--featured-thumbnail-->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ config('app.url') }}/assets/images/SBB-83-1536x2048.jpg" alt="image">
                                    </div> <!--featured-thumbnail end-->
                                    <div class="ttm-media-link">

                                        <a href="{{route('portfolio-single')}}" class="ttm_link" tabindex="0">
                                           Sabrina + Brad</a>
                                    </div>
                                </div>
                                <div class="featured-content featured-content-portfolio">

                                    <div class="featured-title">
                                       <h5><a href="{{route('portfolio-single')}}">INTIMATE BALLROOM AFFAIR</a></h5>
                                       <p class="t-cursive">as seen in The Knot </p>
                                    </div>
                                </div>
                            </div><!--featured-imagebox-portfolio end-->
                        </div>

                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                            <!--featured-imagebox-portfolio-->
                            <div class="featured-imagebox featured-imagebox-portfolio style2">
                                <div class="ttm-box-view-content-inner">
                                    <!--featured-thumbnail-->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ config('app.url') }}/assets/images/MariaAli0594-3-1366x2048.jpg" alt="image">
                                    </div> <!--featured-thumbnail end-->
                                    <div class="ttm-media-link">

                                        <a href="{{route('portfolio-single')}}" class="ttm_link" tabindex="0">
                                           Sabrina + Brad</a>
                                    </div>
                                </div>
                                <div class="featured-content featured-content-portfolio">

                                    <div class="featured-title">
                                       <h5><a href="#">INTIMATE BALLROOM AFFAIR</a></h5>
                                       <p class="t-cursive">as seen in The Knot </p>
                                    </div>
                                </div>
                            </div><!--featured-imagebox-portfolio end-->
                        </div>
                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                            <!--featured-imagebox-portfolio-->
                            <div class="featured-imagebox featured-imagebox-portfolio style2">
                                <div class="ttm-box-view-content-inner">
                                    <!--featured-thumbnail-->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ config('app.url') }}/assets/images/Hannah_Wyatt_W0593-1536x2048.jpg" alt="image">
                                    </div> <!--featured-thumbnail end-->
                                    <div class="ttm-media-link">

                                        <a href="{{route('portfolio-single')}}" class="ttm_link" tabindex="0">
                                           Sabrina + Brad</a>
                                    </div>
                                </div>
                                <div class="featured-content featured-content-portfolio">

                                    <div class="featured-title">
                                       <h5><a href="#">INTIMATE BALLROOM AFFAIR</a></h5>
                                       <p class="t-cursive">as seen in The Knot </p>
                                    </div>
                                </div>
                            </div><!--featured-imagebox-portfolio end-->
                        </div>

                           <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                            <!--featured-imagebox-portfolio-->
                            <div class="featured-imagebox featured-imagebox-portfolio style2">
                                <div class="ttm-box-view-content-inner">
                                    <!--featured-thumbnail-->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ config('app.url') }}/assets/images/SBB-83-1536x2048.jpg" alt="image">
                                    </div> <!--featured-thumbnail end-->
                                    <div class="ttm-media-link">

                                        <a href="{{route('portfolio-single')}}" class="ttm_link" tabindex="0">
                                           Sabrina + Brad</a>
                                    </div>
                                </div>
                                <div class="featured-content featured-content-portfolio">

                                    <div class="featured-title">
                                       <h5><a href="#">VIBRANT & MOODY MATRIMONY</a></h5>
                                       <p class="t-cursive">as seen in The Knot </p>
                                    </div>
                                </div>
                            </div><!--featured-imagebox-portfolio end-->
                        </div>

                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                            <!--featured-imagebox-portfolio-->
                            <div class="featured-imagebox featured-imagebox-portfolio style2">
                                <div class="ttm-box-view-content-inner">
                                    <!--featured-thumbnail-->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ config('app.url') }}/assets/images/MariaAli0594-3-1366x2048.jpg" alt="image">
                                    </div> <!--featured-thumbnail end-->
                                    <div class="ttm-media-link">

                                        <a href="{{route('portfolio-single')}}" class="ttm_link" tabindex="0">
                                           Sabrina + Brad</a>
                                    </div>
                                </div>
                                <div class="featured-content featured-content-portfolio">

                                    <div class="featured-title">
                                       <h5><a href="#">OVERWATER ELEGANCE</a></h5>

                                    </div>
                                </div>
                            </div><!--featured-imagebox-portfolio end-->
                        </div>
                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                            <!--featured-imagebox-portfolio-->
                            <div class="featured-imagebox featured-imagebox-portfolio style2">
                                <div class="ttm-box-view-content-inner">
                                    <!--featured-thumbnail-->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ config('app.url') }}/assets/images/Hannah_Wyatt_W0593-1536x2048.jpg" alt="image">
                                    </div> <!--featured-thumbnail end-->
                                    <div class="ttm-media-link">

                                        <a href="{{route('portfolio-single')}}" class="ttm_link" tabindex="0">
                                           Sabrina + Brad</a>
                                    </div>
                                </div>
                                <div class="featured-content featured-content-portfolio">

                                    <div class="featured-title">
                                       <h5><a href="#">SEASIDE SOIRÉE</a></h5>
                                       <p class="t-cursive">as seen in The Knot </p>
                                    </div>
                                </div>
                            </div><!--featured-imagebox-portfolio end-->
                        </div>

                    </div><!--row end-->
                </div>
            </section>
            <!--portfolio-section_3 end-->


        </div><!-- site-main end -->

@endsection
