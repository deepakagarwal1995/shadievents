@extends('layouts.app', ['title' => 'Our Work | Shadievents'])

@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row"
        style="    background-image: url({{ config('app.url') }}/assets/images/services-hero-1536x200.jpg);">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title"> Intimate
                                    Ballroom Affair </h2>
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
                        <div class="kt-inside-inner-col">
                            <div class="wp-block-kadence-column kadence-column1576_7c0b68-c5">
                                <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:0.5em">Intimate
                                    Ballroom Affair</h2>
                                <p class="has-text-align-center has-gold-color has-text-color"
                                    style="letter-spacing:0.25em;text-transform:uppercase">SABRINA + BRAD<br>THE RITZ
                                    CARLTON</p>
                                <h6 class="wp-block-heading has-text-align-center"
                                    style="margin-bottom:0.5em;letter-spacing:0.25em;text-transform:uppercase">PHOTOGRAPHY
                                    |<mark style="background-color:rgba(0, 0, 0, 0)"
                                        class="has-inline-color has-gold-color"> MIKE CASSIMATIS PHOTOGRAPHY</mark> </h6>
                            </div>
                        </div>
                    </div>


  </div>
 <div class="row" style="    margin-top: -25px;">
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6 p-1">
                        <a data-gal="prettyPhoto[gallery1]" title="Marketing Strategy"
                            href="{{ config('app.url') }}/assets/images/SBB-83-1536x2048.jpg" data-rel="prettyPhoto"
                            tabindex="0">
                            <img class="img-fluid" src="{{ config('app.url') }}/assets/images/SBB-83-1536x2048.jpg"
                                alt="image">
                        </a>
                        <!--featured-imagebox-portfolio-->

                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6 p-1">
                        <a data-gal="prettyPhoto[gallery1]" title="Marketing Strategy"
                            href="{{ config('app.url') }}/assets/images/SBB-83-1536x2048.jpg" data-rel="prettyPhoto"
                            tabindex="0">
                            <img class="img-fluid" src="{{ config('app.url') }}/assets/images/SBB-83-1536x2048.jpg"
                                alt="image">
                        </a>
                        <!--featured-imagebox-portfolio-->

                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6 p-1">
                        <a data-gal="prettyPhoto[gallery1]" title="Marketing Strategy"
                            href="{{ config('app.url') }}/assets/images/SBB-83-1536x2048.jpg" data-rel="prettyPhoto"
                            tabindex="0">
                            <img class="img-fluid" src="{{ config('app.url') }}/assets/images/SBB-83-1536x2048.jpg"
                                alt="image">
                        </a>
                        <!--featured-imagebox-portfolio-->

                    </div>



                </div><!--row end-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-60 mb-20">
<h2 class="wp-block-heading has-small-font-size" ><span class="script"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-gold-color">Let’s make it happen.</mark></span></h2>
<p>We’re just a click away.</p>
<div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-layout-2 wp-block-buttons-is-layout-flex" style="margin-top:2rem">
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="{{route('contact')}}">Inquire Now</a></div>
</div>
</div>
                    </div>
                </div>
            </div>
        </section>
        <!--portfolio-section_3 end-->


    </div><!-- site-main end -->
@endsection
