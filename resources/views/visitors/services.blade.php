@extends('layouts.app', ['title' => $title])

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "ItemList",
    "url": "https://www.shadievents.com/services",
    "numberOfItems": "5",
    "name": "Wedding Management Services",
    "description": "Experience seamless wedding planning with Shaadi Events. Our expert team specializes in comprehensive wedding management services, including venue selection, decoration, catering, and entertainment.",
    "itemListElement": [
         @foreach ($services as $row)
        {
            "@type": "ListItem",
            "position": 1,
            "item": {
                "@type": "Service",
                "image": "{{ Voyager::image($row->mainImage) }}",
                "url": "{{route('service',$row->slug)}}",
                "name": "{{$row->title}}"
            }
        }
        @if (!$loop->last),@endif
        @endforeach
    ]
}
</script>


@endsection

@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row"
        style="    background-image: url({{ config('app.url') }}/assets/images/tenured-tips-hero-scaled.jpg);">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title"> SERVICES </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title end-->


    <!--site-main start-->
    <div class="site-main">

     <section class="ttm-row portfolio-section_3 clearfix">
                <div class="container">
                    <!--row-->
                    <div class="row d-flex justify-content-center">
                         <div class="col-sm-12 text-center">

                                         <h1 class="page-title">Wedding with our expert services</h1>
                                         <h6 class="page-subtitle">unlimited ways to make <span class="text-cursive-1">your </span> wedding grand and seamless</h6>
                                             </div>




 @foreach ($services as $row)
                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                            <!--featured-imagebox-portfolio-->
                            <div class="featured-imagebox featured-imagebox-portfolio style2">
                                <div class="ttm-box-view-content-inner">
                                    <!--featured-thumbnail-->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ Voyager::image( thumbnail($row->mainImage,'medium') ) }}" alt="{{$row->title}}">
                                    </div> <!--featured-thumbnail end-->
                                    <div class="ttm-media-link">

                                        <a href="{{route('service',$row->slug)}}" class="ttm_link" tabindex="0">
                                           {{$row->title}}</a>
                                    </div>
                                </div>
                                <div class="featured-content featured-content-portfolio">

                                    <div class="featured-title">
                                       <h5><a href="{{route('service',$row->slug)}}">{{$row->title}}</a></h5>
                                       <p class="t-cursive">{{$row->subtitle}} </p>
                                    </div>
                                </div>
                            </div><!--featured-imagebox-portfolio end-->
                        </div>

                       @endforeach





                    </div><!--row end-->
                </div>
            </section>
        <!--portfolio-section_3-->
        <section class="ttm-row portfolio-section_3 clearfix">
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h6 class="page-subtitle" style="    line-height: 1.2;"><span class="text-cursive-1">We craft
                                beautiful Parties </span></h6>

                        <h1 class="page-title">AND THAT’S JUST THE BEGINNING</h1>

                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 mt-25">
                        <div class="owl-carousel">
                            <div class="item">
                                <img src="{{ config('app.url') }}/assets/images/141701139_3321772617928757_314765771726344711_n.jpg"
                                    class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ config('app.url') }}/assets/images/165137325_3481385385300812_4387629160610638140_n.jpg" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ config('app.url') }}/assets/images/D1010130.jpg"
                                    class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ config('app.url') }}/assets/images/1360558329101_n-1-min.jpg"
                                    class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ config('app.url') }}/assets/images/202468771_3731315330307815_7994710674440928600_n.jpg"
                                    class="img-fluid">
                            </div>

                        </div>

                        <!--featured-imagebox-portfolio-->

                    </div>




                </div><!--row end-->
            </div>
        </section>

 <section class="ttm-row about-section_1 clearfix kb-row-layout-id71_e8d40d-75">
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <!--ttm_single_image-wrapper-->
                        <div class="h-100 d-flex res-991-pt-40">
                            <img class="img-fluid" src="{{ config('app.url') }}/assets/images/the-experience-script.svg"
                                title="single-img-two" alt="single-img-two"
                                style="height: 150px;margin: auto;display: block;">
                        </div><!--ttm_single_image-wrapper end-->
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="pl-20 pt-20 res-991-pt-40 res-991-pl-0">
                            <!--section title-->
                            <div class="section-title clearfix">
                                <div class="title-header">

                                    <h2 class="title">EVERY LAST DETAIL</h2>
                                </div>
                                <div class="title-desc">
                                    <h6 class="wp-block-heading"
                                        style="margin-bottom:2em;letter-spacing:0.25em;line-height:2.8;text-transform:uppercase">
                                        WE EXCEL AT REDEFINING THE EXTRAORDINARY. LIMITING OUR CLIENT BOOK TO <strong>SIX
                                            COUPLES</strong> EACH YEAR ALLOWS US TO POUR THOUSANDS OF HOURS INTO EVERY EVENT
                                        WE TAKE ON. OUR PERSONALIZED APPROACH MAKES SPACE FOR US TO FORM A DEEPER CONNECTION
                                        WITH OUR CLIENTS. THIS GIVES US THE TOOLS TO CRAFT A TRULY REMARKABLE EXPERIENCE
                                        UNLIKE ANYTHING YOU’VE EVER SEEN BEFORE.</h6>
                                </div>
                            </div><!--section title end-->



                        </div>
                    </div>
                </div><!--row end-->
            </div>
        </section>


            <section class="ttm-row home-cta-section bg-img9 ttm-bgcolor-darkgrey clearfix mt-0 process">
                <div class="container">
                    <!--row-->
                    <div class="row">
                        <div class="col-md-10" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <div class="row-title">
                                <h2 class="wp-block-heading has-medium-font-size"><span class="script">How we do it</span></h2>
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>Embracing A Team Approach Is Essential For Your Event’s Success. Our Dedicated Team Is Comprised Of Five Full-time Experts With Freelance Specialists In Every Major Marketplace. Our Specialists Collaborate To Uphold The Highest Standards And Deliver Excellence For Each And Every Event</h3>
                                    </div>
                                </div>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-white"
                                    href="{{route('contact')}}">Get In Touch</a>
                            </div>
                        </div>
                    </div> <!--row end-->
                </div>
            </section>

    </div><!-- site-main end -->
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
autoplay:true,
autoplayTimeout:3500,pagination: false, nav: false,
  dots: false,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1,
                    margin: 50,
                    center: true,
                    stagePadding: 250
                }
            }
        })
    </script>
@endsection
