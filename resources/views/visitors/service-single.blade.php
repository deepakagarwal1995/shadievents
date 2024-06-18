@extends('layouts.app', ['title' => $title, 'ogimage' => Voyager::image($service->mainImage), 'descr' => $service->meta])

@section('head')
    <meta name="page_content" content="{{ $service->title }} | {{ $service->subtitle }}" />
    <style>
        .portfolio-section_3 a {
            color: #ad8400;
        }

        .portfolio-section_3 h3 {
            font-size: 25px;
        }

        .portfolio-section_3 h2 {
            font-size: 30px;
        }

        .portfolio-section_3 h4 {
            font-size: 20px;
        }
    </style>
    <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Service",
  "name": "{{$service->title}}",
  "image": "{{Voyager::image($service->mainImage)}}",
  "description": "{{$service->meta}}",
  "brand": {
    "@type": "Brand",
    "name": "Shadi Events"
  },

  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "288",
    "reviewCount": "18"
  },
   "review": [
  ]
}
</script>
@endsection

@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row"
        style="    background-image: url({{ config('app.url') }}/assets/images/services-hero-1536x200.jpg);">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h1 class="title"> {{ $service->title }} </h1>
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
                    {{-- <div class="col-sm-12 text-center" style="margin-bottom: 22px;">
                        <a href="#0">
                            <img class="img-fluid" src="{{ config('app.url') }}/assets/images/Wedfraftt.jpg"
                                style="max-height: 55px;margin-right: 10px;">
                        </a>
                        <a href="#0">
                            <img class="img-fluid" src="{{ config('app.url') }}/assets/images/logoonestory.jpg"
                                style="max-height: 55px;">
                        </a>

                    </div> --}}

                    <div class="col-sm-12 ">

                        {!! $service->descr !!}

                    </div>


                    <div class="offset-lg-1 col-lg-10 ">
                        <div class="row">
                            @foreach (json_decode($service->gallery, true) as $image)
                                <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6 p-1">
                                    <a data-gal="prettyPhoto[gallery1]" title="{{ $service->title }}"
                                        href="{{ Voyager::image($image) }}" data-rel="prettyPhoto" tabindex="0">
                                        <img class="img-fluid" src="{{ Voyager::image($image) }}"
                                            alt="{{ $service->title }}">
                                    </a>
                                    <!--featured-imagebox-portfolio-->

                                </div>
                            @endforeach


                        </div><!--row end-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-60 mb-20">
                            <h2 class="wp-block-heading has-small-font-size"><span class="script"><mark
                                        style="background-color:rgba(0, 0, 0, 0)"
                                        class="has-inline-color has-gold-color">Let’s make it happen.</mark></span>
                            </h2>
                            <p>We’re just a click away.</p>
                            <div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-layout-2 wp-block-buttons-is-layout-flex"
                                style="margin-top:2rem">
                                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"
                                        href="{{ route('contact') }}">Inquire Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--portfolio-section_3 end-->


    </div><!-- site-main end -->
@endsection
