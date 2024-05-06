@extends('layouts.app', ['title' => 'Our Work | Shadievents'])

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
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
                                <img src="{{ config('app.url') }}/assets/images/Kelsey-Brayden-251-1536x1025.jpg"
                                    class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ config('app.url') }}/assets/images/MN-0512-1536x1024.jpg" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ config('app.url') }}/assets/images/Portraits_JulianaPorter_CatherineRhodesPhotography-383-Edit.jpg"
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
                        <div class="h-100 d-flex">
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

        <div class="kb-row-layout-wrap kb-row-layout-id71_eee3bd-9d alignnone kt-row-has-bg wp-block-kadence-rowlayout">
        </div>
        <section class="ttm-row services-section_1 clearfix">

            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="topse">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--section title-->
                                    <div class="section-title text-center">
                                        <div class="title-header">
                                            <h1 class="wp-block-heading has-large-font-size"><span class="script"><mark
                                                        style="background-color:rgba(0, 0, 0, 0)"
                                                        class="has-inline-color has-gold-color">Creative
                                                        Direction</mark></span></h1>
                                            <p>Guided by our Founder and Creative Director, Kate Turner, all designs begin
                                                in-house. Kate leads color palette curation, event partner collaboration,
                                                vendor selection, and the execution of a seamless, editorial-inspired
                                                design. She’s a ruthless editor, fiercely protecting both the integrity of
                                                your event and ensuring its flawless execution.</p>
                                        </div>
                                        <div class="title-header">

                                            <h2 class="title">FEATURED SERVICES</h2>
                                        </div>
                                    </div><!--section title end-->
                                </div>
                            </div><!--row end-->
                            <!--row-->
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content text-center style2">

                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h6 class="wp-block-heading"
                                                    style="margin-bottom:1em;letter-spacing:0.25em;line-height:1.75;text-transform:uppercase">
                                                    Visual Inspiration</h6>
                                            </div>
                                            <div class="featured-desc">
                                                <p style="    letter-spacing: 0;line-height: 1.5;font-size: 12px;">A look
                                                    book filled with ideas and inspiration on everything from fashion to
                                                    flowers so you can envision every aspect of the weekend.</p>
                                            </div>

                                        </div>
                                    </div><!--featured-icon-box end-->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content text-center style2">

                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h6 class="wp-block-heading"
                                                    style="margin-bottom:1em;letter-spacing:0.25em;line-height:1.75;text-transform:uppercase">
                                                    Visual Inspiration</h6>
                                            </div>
                                            <div class="featured-desc">
                                                <p style="    letter-spacing: 0;line-height: 1.5;font-size: 12px;">A look
                                                    book filled with ideas and inspiration on everything from fashion to
                                                    flowers so you can envision every aspect of the weekend.</p>
                                            </div>

                                        </div>
                                    </div><!--featured-icon-box end-->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content text-center style2">

                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h6 class="wp-block-heading"
                                                    style="margin-bottom:1em;letter-spacing:0.25em;line-height:1.75;text-transform:uppercase">
                                                    Visual Inspiration</h6>
                                            </div>
                                            <div class="featured-desc">
                                                <p style="    letter-spacing: 0;line-height: 1.5;font-size: 12px;">A look
                                                    book filled with ideas and inspiration on everything from fashion to
                                                    flowers so you can envision every aspect of the weekend.</p>
                                            </div>

                                        </div>
                                    </div><!--featured-icon-box end-->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content text-center style2">

                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h6 class="wp-block-heading"
                                                    style="margin-bottom:1em;letter-spacing:0.25em;line-height:1.75;text-transform:uppercase">
                                                    Visual Inspiration</h6>
                                            </div>
                                            <div class="featured-desc">
                                                <p style="    letter-spacing: 0;line-height: 1.5;font-size: 12px;">A look
                                                    book filled with ideas and inspiration on everything from fashion to
                                                    flowers so you can envision every aspect of the weekend.</p>
                                            </div>

                                        </div>
                                    </div><!--featured-icon-box end-->
                                </div>

                                <div class="offset-lg-2 col-lg-8 mt-50 text-center">
                                    <div class="wp-block-group is-layout-constrained wp-container-core-group-layout-20 wp-block-group-is-layout-constrained"
                                        style="padding-top:0px">
                                        <blockquote class="wp-block-quote">
                                            <p>“You have seriously outdone yourselves and exceeded every expectation and
                                                vision I had by a million! I can only imagine the amount of hours and energy
                                                you put into making this day absolutely stunning and smooth-sailing, and for
                                                that I thank you. So many people said – This is so you! – You made all my
                                                dreams come true!”</p>
                                            <cite>– Katherine James, Bride</cite>
                                        </blockquote>
                                    </div>
                                </div>


                            </div><!--row end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--portfolio-section_3 end-->
 <div class="kb-row-layout-wrap kb-row-layout-id71_ed91f3-16 alignnone kt-row-has-bg wp-block-kadence-rowlayout">
        </div>
        <section class="ttm-row services-section_1 clearfix">

            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="topse">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--section title-->
                                    <div class="section-title text-center">
                                        <div class="title-header">
                                            <h1 class="wp-block-heading has-large-font-size"><span class="script"><mark
                                                        style="background-color:rgba(0, 0, 0, 0)"
                                                        class="has-inline-color has-gold-color">Event Production</mark></span></h1>
                                            <p>Our onsite standards are meticulous. We measure each chair and place setting, steam linens to perfection, fold and iron napkins with precision, and hand-check every detail, ensuring flawless execution.</p>
                                        </div>
                                        <div class="title-header">

                                            <h2 class="title">FEATURED SERVICES</h2>
                                        </div>
                                    </div><!--section title end-->
                                </div>
                            </div><!--row end-->
                            <!--row-->
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content text-center style2">

                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h6 class="wp-block-heading"
                                                    style="margin-bottom:1em;letter-spacing:0.25em;line-height:1.75;text-transform:uppercase">
                                                    Visual Inspiration</h6>
                                            </div>
                                            <div class="featured-desc">
                                                <p style="    letter-spacing: 0;line-height: 1.5;font-size: 12px;">A look
                                                    book filled with ideas and inspiration on everything from fashion to
                                                    flowers so you can envision every aspect of the weekend.</p>
                                            </div>

                                        </div>
                                    </div><!--featured-icon-box end-->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content text-center style2">

                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h6 class="wp-block-heading"
                                                    style="margin-bottom:1em;letter-spacing:0.25em;line-height:1.75;text-transform:uppercase">
                                                    Visual Inspiration</h6>
                                            </div>
                                            <div class="featured-desc">
                                                <p style="    letter-spacing: 0;line-height: 1.5;font-size: 12px;">A look
                                                    book filled with ideas and inspiration on everything from fashion to
                                                    flowers so you can envision every aspect of the weekend.</p>
                                            </div>

                                        </div>
                                    </div><!--featured-icon-box end-->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content text-center style2">

                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h6 class="wp-block-heading"
                                                    style="margin-bottom:1em;letter-spacing:0.25em;line-height:1.75;text-transform:uppercase">
                                                    Visual Inspiration</h6>
                                            </div>
                                            <div class="featured-desc">
                                                <p style="    letter-spacing: 0;line-height: 1.5;font-size: 12px;">A look
                                                    book filled with ideas and inspiration on everything from fashion to
                                                    flowers so you can envision every aspect of the weekend.</p>
                                            </div>

                                        </div>
                                    </div><!--featured-icon-box end-->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content text-center style2">

                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h6 class="wp-block-heading"
                                                    style="margin-bottom:1em;letter-spacing:0.25em;line-height:1.75;text-transform:uppercase">
                                                    Visual Inspiration</h6>
                                            </div>
                                            <div class="featured-desc">
                                                <p style="    letter-spacing: 0;line-height: 1.5;font-size: 12px;">A look
                                                    book filled with ideas and inspiration on everything from fashion to
                                                    flowers so you can envision every aspect of the weekend.</p>
                                            </div>

                                        </div>
                                    </div><!--featured-icon-box end-->
                                </div>




                            </div><!--row end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
           <section class="ttm-row home-cta-section bg-img9 ttm-bgcolor-darkgrey clearfix mt-90">
                <div class="container">
                    <!--row-->
                    <div class="row">
                        <div class="col-md-10" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <div class="row-title">
                                <h2 class="wp-block-heading has-medium-font-size"><span class="script">How we do it</span></h2>
                                <div class="section-title">
                                    <div class="title-header">
                                        <h5>EMBRACING A TEAM APPROACH IS ESSENTIAL FOR YOUR EVENT’S SUCCESS. OUR DEDICATED TEAM IS COMPRISED OF FIVE FULL-TIME EXPERTS WITH FREELANCE SPECIALISTS IN EVERY MAJOR MARKETPLACE. OUR SPECIALISTS COLLABORATE TO UPHOLD THE HIGHEST STANDARDS AND DELIVER EXCELLENCE FOR EACH AND EVERY EVENT.</h5>
                                    </div>
                                </div>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-white"
                                    href="#">LEARN MORE</a>
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
