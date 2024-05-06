@extends('layouts.app', ['title' =>'Our Work | Shadievents'])

@section('content')

        <!--page-title-->
        <div class="ttm-page-title-row" style="    background-image: url({{ config('app.url') }}/assets/images/tenured-tips-hero-scaled.jpg);">
            <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title"> CONTACT US </h2>
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
           <section class="ttm-row pt-0 pb-0 res-991-pt-0 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mt_60 res-767-mt-30">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="ttm-bgcolor-white p-35 pb-25 box-shadow">
                                            <h5>Address One</h5>
                                            <p>4578 Heverly Rd Crooklyn New York 12345 United States.</p>
                                            <div class="ttm-horizontal_sep width-100 mb-20"></div>
                                            <a class="ttm-btn-color-skincolor" href="#">View On Google Map</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="ttm-bgcolor-skincolor p-35 pb-25 box-shadow">
                                            <h5>Address Two</h5>
                                            <p>4578 Heverly Rd Crooklyn New York 12345 United States.</p>
                                            <div class="ttm-horizontal_sep width-100 mb-20"></div>
                                            <a class="ttm-btn-color-white" href="#">View On Google Map</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="ttm-bgcolor-white p-35 pb-25 box-shadow">
                                            <h5>Email & Office Hours</h5>
                                            <p>Mon – Sat: 9.00am to 7.00pm<br>Sunday: Closed</p>
                                            <div class="ttm-horizontal_sep width-100 mb-20"></div>
                                            <a class="ttm-btn-color-skincolor" href="#">wedco@wedding.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!---contact-us-section-->
            <section class="ttm-row contact-us-section bg-layer-equal-height clearfix">
                <div class="container">
                    <!--row-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row no-gutters">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="ttm-col-bgcolor-yes ttm-bg">
                                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                        <div class="layer-content">
                                            <!-- section title -->
                                            <div class="section-title without-seperator">
                                                <div class="title-header">
                                                    <h5>Wedding Attend</h5>
                                                    <h2 class="title">It’s Your Turn</h2>
                                                </div>
                                            </div><!-- section title end -->
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <!-- featured-icon-box -->
                                            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style8">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                                        <i class="ti ti-location-pin"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5>Location</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>4578 Beverly Rd<br>Brooklyn NewYork</p>
                                                    </div>
                                                </div>
                                            </div><!-- featured-icon-box end -->
                                            <!-- featured-icon-box -->
                                            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style8">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                                        <i class="ti ti-files"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5>Call Or Email</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>+ (123) 456 7890<br>info@wedding.com</p>
                                                    </div>
                                                </div>
                                            </div><!-- featured-icon-box end -->
                                            <!-- featured-icon-box -->
                                            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style8">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                                        <i class="ti ti-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5>Office Hours</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>Mon – Sat: 9.00am to 7.00pm<br>Sunday: Closed</p>
                                                    </div>
                                                </div>
                                            </div><!-- featured-icon-box end -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="border pt-35 pr-30 pb-40 pl-30">
                                        <h5>Do You Have Any Questions?</h5>
                                        <form id="contactform" class="contactform wrap-form pt-5 clearfix" method="post" novalidate="novalidate" action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name*" required="required"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="address" type="text" value="" placeholder="Your Email*" required="required"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone" required="required"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="phone" type="text" value="" placeholder="your-event" required="required"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <label>
                                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Subject" required="required"></span>
                                            </label>
                                            <label>
                                                <span class="text-input"><textarea name="message" rows="4" placeholder="Your Messages" required="required"></textarea></span>
                                            </label>
                                            <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor w-100" type="submit">Send A Message!</button>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- row end -->
                        </div>
                    </div>
                </div>
            </section>
            <!--contact-us-section end-->


            <!--google_map-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56778.82235299726!2d77.89286322167972!3d27.197905800000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397477999b41bab1%3A0xe4b7705834dd87ad!2sShadi%20Events!5e0!3m2!1sen!2sin!4v1715000591636!5m2!1sen!2sin" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!--portfolio-section_3 end-->


        </div><!-- site-main end -->

@endsection
