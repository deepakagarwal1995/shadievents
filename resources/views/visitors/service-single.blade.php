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
                            <h2 class="title"> Hospitality </h2>
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
                    <div class="col-sm-12 ">
                        <p>"Welcome to Shadi Events, where we transform your wedding dreams into cherished realities, one
                            exquisite detail at a time.
                            Imagine a seamless journey from 'I do' to 'happily ever after,' guided by our team of dedicated
                            professionals who excel in the art of hospitality.
                            RSVP Calling and Management:
                            Leave the logistics to us. Our comprehensive RSVP calling and management services ensure that
                            your guest list is meticulously curated and precisely managed, allowing you to focus on the joy
                            of your impending union.
                            Room Management:
                            From elegant ballrooms to intimate garden settings, we meticulously oversee every aspect of room
                            management to create the perfect ambiance for your celebration. Our attention to detail ensures
                            that every space
                            reects your unique style and vision.
                            Travel Management:
                            Whether your guests are traveling from near or far, we handle all aspects of travel management
                            with nesse and expertise. From accommodations to transportation, we ensure that your guests
                            arrive stress-free and
                            ready to celebrate your love.
                            Vendor Coordination:
                            We understand that every vendor plays a crucial role in bringing your wedding vision to life.
                            Our team coordinates seamlessly with a network of trusted vendors, ensuring that every aspect of
                            your special day exceeds
                            your expectations.
                            Culinary Delights:<br>
                            Indulge in a culinary journey that delights the senses and leaves a lasting impression on your
                            guests. From mouthwatering menus to personalized cocktails, our culinary experts craft an
                            unforgettable dining experience
                            tailored to your tastes.
                            Guest Experience:
                            Your guests are our priority. From warm welcomes to personalized touches, we ensure that every
                            guest feels valued and appreciated, creating a memorable experience for all who attend.
                            At Shadi Events, we don't just plan weddings—we curate unforgettable experiences that celebrate
                            your love story in all its beauty and splendor. Join us, and let your journey to 'happily ever
                            after' begin."</p>

                    </div>


                    <div class="offset-lg-2 col-lg-8 ">
                        <div class="row">
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
                        </div>
                         </div> <div class="row">
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
