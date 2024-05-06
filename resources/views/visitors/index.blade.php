@extends('layouts.app', ['title' =>'Wedding Planner in Agra | Shadievents'])

@section('headerTop')
 <div class="kb-row-layout-wrap kb-row-layout-id2_97e2e6-e4 alignnone wp-block-kadence-rowlayout" id="home_hero">
            <div class="kb-blocks-bg-video-container"><video class="kb-blocks-bg-video" id="bg-row-video-2_97e2e6-e4"
                    playsinline="" muted="" loop=""
                    src="{{ config('app.url') }}/assets/video/Website-promo-SE5-sm.mp4"
                    autoplay=""></video></div>
            <div
                class="kt-row-column-wrap kt-has-1-columns kt-row-layout-equal kt-tab-layout-inherit kt-mobile-layout-row kt-row-valign-top">
                <div class="wp-block-kadence-column kadence-column2_c3cb86-9a inner-column-1">
                    <div class="kt-inside-inner-col">
                        <h4 class="kt-adv-heading2_ea1f4d-ee wp-block-kadence-advancedheading" data-aos="fade">
                            Innovative Wedding Planning + Remarkable Design
                        </h4>
                        <div style="height:19vw" aria-hidden="true" class="wp-block-spacer"></div>
                        <div class="wp-block-kadence-image kb-image2_4b8530-6e aos-init" data-aos="fade">
                            <figure class="aligncenter size-large is-resized image-is-svg"><img loading="lazy"
                                    decoding="async"
                                    src="{{ config('app.url') }}/assets/images/white-logo-lg.png"
                                    alt="" class="kb-img wp-image-115" style="    max-width: 100%;width: 521px;height: auto;"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
@section('content')
        <!-- HERO SECTION -->

        <!-- hero section end -->


        <!--site-main start-->
        <div class="site-main">

            <section class="ttm-row contact-section clearfix pt-85 ">
                <div class="container">
                    <!--row-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-9" data-aos="fade" data-aos-duration="1000" data-aos-delay="500"
                                    data-aos-easing="ease-in-out">
                                    <div class="pr-75 res-991-pr-0 res-991-pt-60">
                                        <!--section title-->
                                        <div class="section-title">
                                            <div class="title-header">
                                                <h2 class="title">CRAFTING LUXURY EVENTS ACROSS THE WORLD FOR OVER
                                                    FIFTEEN YEARS.</h2>
                                            </div>
                                            <div class="title-desc">
                                                <h6 class="mt-5">AVAILABLE ANYWHERE THE PARTY TAKES YOU.</h6>
                                                <p></p>
                                                <h6>BASED IN THE MIDWEST.</h6>

                                            </div>
                                        </div><!--section title end-->
                                    </div>
                                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                        <img loading="lazy" decoding="async" width="1024" height="683"
                                            src="{{ config('app.url') }}/assets/images/1-web-photo.jpg" alt="" class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="col-lg-3">

                                    <div
                                        class="ttm_single_image-wrapper text-lg-right text-center res-991-pt-70 res-991-pb-60">
                                        <div data-aos="fade-down" data-aos-duration="1000"
                                            data-aos-easing="ease-in-out">
                                            <img loading="lazy" decoding="async" class="img-fluid"
                                                src="{{ config('app.url') }}/assets/images/2-web-photo.jpg" alt="single_01">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--row end-->
                </div>
            </section>

            <section class="ttm-row testimonial-section bg-img12 ttm-bg ttm-bgimage-yes clearfix">
                <div class="container">
                    <!--row-->
                    <div class="row">
                        <div class="col-lg-12" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <!--section title-->
                            <div class="section-title title-style-center_text pr-75 res-991-pr-0 pl-75 res-991-pl-0">
                                <div class="title-header mb-25">
                                    <h2 class="title">BIG MOMENTS REQUIRE BIG PLANS.</h2>
                                </div>
                                <h6>WHETHER IT’S A SNOWY CELEBRATION IN VAIL, A TEQUILA-FUELED DANCE FLOOR IN CABO, OR A
                                    FULLY CUSTOM TENT ERECTED AT THEIR
                                    HOME, OUR CLIENTS TRUST US TO CONSISTENTLY EXCEED EXPECTATIONS EACH AND EVERY TIME.
                                </h6>

                                <h6>BOASTING A COMBINED THIRTY YEARS OF EXPERIENCE IN EVENT PLANNING, KATE + COMPANY HAS
                                    THE EXPERTISE IN THE HOW AND IN THE
                                    WHERE. WE’LL ELEVATE YOUR EVENT BEYOND YOUR WILDEST DREAMS. SETTING THE TONE WITH
                                    YOUR INVITATIONS THROUGH THE VERY LAST
                                    DANCE, OUR FIRM ENSURES EVERY ASPECT IS BRILLIANTLY DESIGNED AND FLAWLESSLY
                                    EXECUTED.</h6>
                                <h6>IN TURN, YOU SHINE AS THE IMPECCABLE HOST.</h6>
                            </div><!--section title end-->
                        </div>
                    </div><!--row end-->

                </div>
            </section>


            <section class="ttm-row about-section clearfix p-0" style="    background-color: #eceae6;">
                <div class="container-fluid">
                    <!--row-->
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <!--ttm_single_image-wrapper-->
                            <div class="ttm_single_image-wrapper">
                                <img class="img-fluid" src="{{ config('app.url') }}/assets/images/3-web-photo.jpg" title="single-img-four"
                                    alt="single-img-four">
                            </div><!--ttm_single_image-wrapper end-->
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="pt-55 pb-55 pl-50 pr-50 res-991-pt-25 res-991-pb-25 res-991-pl-15 res-991-pr-15  "
                                data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <!--section title-->
                                <h2 class="wp-block-heading has-medium-font-size"><span class="script"><mark
                                            style="background-color:rgba(0, 0, 0, 0)"
                                            class="has-inline-color has-gold-color">Who we are</mark></span></h2>
                                <div class="title-header mb-25">
                                    <h3 class="title">EXECUTIVE LEVEL<br>
                                        EVENT PRODUCERS.</h3>
                                </div>




                                <div class="pt-5">
                                    <p>Since our inception in 2012, we have been at the forefront of delivering
                                        ultra-luxurious wedding planning and design
                                        services to a global clientele. Our expertise has shown us that love knows no
                                        geographical limits, and our services
                                        are crafted to embody this boundless spirit.</p>
                                    <p>We excel in embracing sophisticated challenges, whether it’s orchestrating a
                                        lavish destination wedding or
                                        transforming spaces into realms of opulence. As visionaries in grandeur and
                                        masters of logistics, we redefine the
                                        possibilities for your exclusive wedding weekend.</p>
                                    <p>With a network of the finest partners worldwide, we are not just dreamers but
                                        also creators of your most extravagant
                                        dreams, ensuring every detail reflects the pinnacle of luxury and elegance.</p>
                                </div>
                                <div class="pt-5">
                                    <a class="wp-block-button__link wp-element-button" href="#">Meet The Team</a>
                                </div>
                            </div>
                        </div>
                    </div><!--row end-->
                </div>
            </section>

            <section class="ttm-row contact-section clearfix pt-85 ">
                <div class="container">
                    <!--row-->

                    <div class="row">
                        <div class="col-lg-4" data-aos="fade" data-aos-duration="1000" data-aos-delay="500"
                            data-aos-easing="ease-in-out">
                            <div class="pr-25 res-991-pl-0 ">
                                <!--section title-->
                                <h2 class="wp-block-heading has-medium-font-size"><span class="script"><mark
                                            style="background-color:rgba(0, 0, 0, 0)"
                                            class="has-inline-color has-gold-color">What we do</mark></span></h2>
                                <div class="title-header mb-25">
                                    <h3 class="title">YOUR GATEWAY TO AMAZING EVENTS AND EXPERIENCES.</h3>
                                </div>




                                <div class="pt-5">
                                    <p>With a global reputation, we connect you with top-tier vendors known for
                                        exceptional quality and service. We take a
                                        personalized approach to every event ensuring yours is expertly tailored to you.
                                        Whether it’s a standalone venue or a
                                        tent concept, we’ve got you covered.</p>
                                </div>
                                <div class="pt-5">
                                    <a class="wp-block-button__link wp-element-button" href="#">OUR SERVICES</a>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">

                            </div>
                        </div>
                        <div class="col-lg-8" data-aos="fade-down" data-aos-duration="1000"
                            data-aos-easing="ease-in-out">

                            <img loading="lazy" decoding="async" src="{{ config('app.url') }}/assets/images/A42I1951.jpg" alt=""
                                class="img-fluid w-100">
                        </div>
                    </div>

                </div>
            </section>

            <section class="ttm-row contact-section clearfix pt-85 ">
                <div class="container">
                    <!--row-->

                    <div class="row">
                        <div class="col-lg-5">
                            <div class="ttm_single_image-wrapper-2" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-easing="ease-in-out">
                                <img loading="lazy" decoding="async" src="{{ config('app.url') }}/assets/images/RAJU0080.jpg" alt=""
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-lg-7" data-aos="fade" data-aos-duration="1000" data-aos-delay="500"
                            data-aos-easing="ease-in-out">
                            <div class="pl-25 res-991-pl-0 pt-55 res-991-pt-15 pb-15   ">
                                <!--section title-->
                                <h2 class="wp-block-heading has-medium-font-size"><span class="script"><mark
                                            style="background-color:rgba(0, 0, 0, 0)"
                                            class="has-inline-color has-gold-color">What you get
                                        </mark></span></h2>
                                <div class="title-header mb-25">
                                    <h3 class="title">YOUR VISION,
                                        FLAWLESSLY EXECUTED.</h3>
                                </div>




                                <div class="pt-5">
                                    <p>Your occasion demands far more than meticulously arranged linens and exquisitely
                                        arranged florals. It calls for a team
                                        deeply committed to the nuances, engaging in profound dialogues, and fostering
                                        unforgettable relationships.</p>
                                    <p>We invite you to discover how our productions are tailored distinctively to each
                                        of our discerning clients.</p>
                                </div>
                                <div class="pt-5">
                                    <a class="wp-block-button__link wp-element-button" href="#">VIEW PORTFOLIO</a>
                                </div>
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
                                <h2 class="wp-block-heading has-medium-font-size"><span class="script">Our Process</span></h2>
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>Our focus on precision and bespoke systems ensures your event’s success under our expert
                                            guidance. At Kate + Co, experience personalized advice, honest insights, and a delightful approach.</h3>
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


        <!--footer start-->

        <!--back-to-top end-->

@endsection
