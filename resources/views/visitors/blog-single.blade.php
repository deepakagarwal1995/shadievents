@extends('layouts.app', ['title' =>$post->seo_title,'descr' =>$post->meta_description,'ogimage' =>Voyager::image($post->image),'keywords'=>$post->meta_keywords])

@section('content')
@php
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$cpurl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

@endphp
<style>
    .ttm-box-desc-text {
    height: auto;
    overflow: hidden;
}.post .ttm-post-featured img {
    height: auto;}
   .ttm-box-desc-text a{
            color: #ad8400;
    }
   .ttm-box-desc-text img {
    height: auto;
    margin: auto;
    margin-bottom: 10px;
    display: block;
}
</style>
        <!--page-title-->
        <div class="ttm-page-title-row" style="    background-image: url({{ Voyager::image($post->image) }});">
            <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">{{ $post->title }}</h2>
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
                            <!-- post -->
                            <article class="post ttm-blog-single clearfix">
                                <!-- post-featured-wrapper -->
                                <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                    <div class="ttm-post-featured">
                                        <img class="img-fluid" src="{{ Voyager::image($post->image) }}" alt="img">
                                    </div>
                                </div><!-- post-featured-wrapper end -->
                                <!-- ttm-blog-classic-content -->
                                <div class="ttm-blog-single-content">
                                    <div class="ttm-post-entry-header">
                                        <div class="post-meta">


                                            <span class="ttm-meta-line tags-links"><i class="fa fa-calendar"></i> {{date('F j, Y',strtotime($post->created_at))}}</span>
                                        </div>
                                    </div>
                                    <div class="entry-content mt-10">
                                        <div class="ttm-box-desc-text">

                                           {!! $post->body !!}
                                            <div class="social-media-block mt-30 res-991-mt-40">
                                                <div class="d-sm-flex justify-content-between">
                                                    <div class="ttm-social-share-wrapper">
                                                        <ul class="social-icons">

                                <li>
                                    <a class="facebook" target="_blank" href="https://www.facebook.com/sharer.php?u={{ $cpurl }}&display=popup"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter" target="_blank" href="https://twitter.com/intent/tweet?url={{ $cpurl }}&via=ShozaniaShoes"><i class="fa fa-twitter"></i></a>
                                </li>
                               <li>
                                    <a class="pinterest" target="_blank" href="https://web.whatsapp.com/send?text={{ $cpurl }}"><i class="fa fa-whatsapp"></i></a>
                                </li>
                                <li>
                                    <a class="linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{ $cpurl }}&title={{ $post->title }}"><i class="fa fa-linkedin"></i></a>
                                </li>



                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- ttm-blog-classic-content end -->
                            </article><!-- post end -->
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
                                            <a href="{{route('blog',$row->slug)}}">{{$row->title}}</a>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </aside>

                        </div>
                    </div><!-- row end -->
                </div>
            </div>
</div>


@endsection
