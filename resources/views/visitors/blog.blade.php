@extends('layouts.app', ['title' =>$title])

@section('content')

        <!--page-title-->
        <div class="ttm-page-title-row" style="    background-image: url({{ config('app.url') }}/assets/images/tenured-tips-hero-scaled.jpg);">
            <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title"> Our Blogs </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--page-title end-->


        <!--site-main start-->
        <div class="site-main">

            <div class="ttm-row sidebar ttm-sidebar-right ttm-bgcolor-white overflow-hidden clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-9 content-area">
                            <div class="row">
                         @foreach ($posts as $row)
                        <div class="col-lg-6">
                            <article class="post ttm-blog-classic clearfix">
                                <!-- post-featured-wrapper -->
                                <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                    <div class="ttm-post-featured">
                                        <img class="img-fluid" src="{{ Voyager::image( thumbnail($row->image,'medium') ) }}" alt="{{$row->title}}">
                                    </div>
                                </div><!-- post-featured-wrapper end -->
                                <!-- ttm-blog-classic-content -->
                                <div class="ttm-blog-classic-content">
                                    <div class="ttm-post-entry-header">
                                        <header class="entry-header">
                                            <div class="ttm-blogbox-cat">
                                                <span class="ttm-meta-line cat-links">
                                                    <i class="themifyicon themifyicon ti-calendar"></i>
                                                    <a href="{{route('blogSingle',$row->slug)}}">{{date('F j, Y',strtotime($row->created_at))}}</a>
                                                </span>
                                            </div>
                                            <h2 class="entry-title">
                                                <a href="{{route('blogSingle',$row->slug)}}">{{$row->title}}</a>
                                            </h2>
                                        </header>
                                    </div>
                                    <div class="entry-content">
                                        <div class="ttm-box-desc-text">
                                            <p>{{$row->excerpt}}</p>
                                        </div>
                                    </div>

                                </div><!-- ttm-blog-classic-content end -->
                            </article>
                            <!--featured-imagebox-blog-->

                        </div>

                       @endforeach
                    </div><!--row end-->
                    </div>

                   <div class="col-lg-3 widget-area sidebar-right widget_border">


                            <aside class="widget widget-recent-post with-title">
                                <h3 class="widget-title">Featured Posted</h3>
                                <ul class="widget-post ttm-recent-post-list">
                                     @foreach ($featured as $row)
                                    <li>
                                        <a href="blog-single-simple.html"><img src="{{ Voyager::image( thumbnail($row->image,'medium') ) }}" alt="{{$row->title}}"></a>
                                        <div class="post-detail">
                                            <span class="post-date"><i class="fa fa-calendar"></i>{{date('F j, Y',strtotime($row->created_at))}}</span>
                                            <a href="{{route('blogSingle',$row->slug)}}">{{$row->title}}</a>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </aside>

                        </div>
                    </div><!-- row end -->
                </div>
            </div>

        </div><!-- site-main end -->

@endsection
