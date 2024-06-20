@extends('layouts.app', ['title' =>'CP Sharma || Top Rated Wedding Planner In Agra, Mathura'])

@section('head')
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "CP Sharma",
  "url": "https://www.shadievents.com/meet-top-wedding-planner-agra",
  "image": "https://shadievents.com/assets/images/cp-sharma.jpg",
  "sameAs": [
    "https://www.facebook.com/cp.sharma.7",
    "https://www.instagram.com/panditcp",
    "https://www.linkedin.com/in/cp-sharma-04b71211a/"
  ],
  "jobTitle": "Founder",
  "worksFor": {
    "@type": "Organization",
    "name": "Shadi Events"
  }
}
</script>

@endsection
@section('content')
<style>
    @media (max-width: 991px) {
    .cps h3 {
        font-size: 25px;
        line-height: 30px;
    }
}
</style>
        <!--page-title-->
        <div class="ttm-page-title-row" style="    background-image: url({{ config('app.url') }}/assets/images/tenured-tips-hero-scaled.jpg);">
            <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title"> MEET THE SE. </h2>
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
                              <h1 class="wp-block-heading has-large-font-size"><span class="script"><mark
                                                        style="background-color:rgba(0, 0, 0, 0)"
                                                        class="has-inline-color has-gold-color">We are your</mark></span></h1>


                                         <h3 class="page-title">LUXURY HOSPITALITY EXPERTS</h3>
                                         <h6 class="page-subtitle">EXTRAORDINARY EXPERIENCES CRAFTED BY EXTRAORDINARY PEOPLE.</h6>

                                         <p class="mt-25">
                                            We consider it an honor to devote our expertise to your wedding. Immersing ourselves in the creation, planning, and execution of every aspect of your wedding weekend, we apply the refined and perfected rules of entertaining that we’ve honed over the past decade. Our commitment to a limited number of events allows us the opportunity to develop a deeper, more personal connection with you.
                                         </p>
                                         <p class="mt-15">
                                            To foster this bond, here’s a glimpse into each of our lives, inviting you to feel a part of our world too.
                                         </p>
                                             </div>






                    </div><!--row end-->
                </div>
            </section>

            <section class="ttm-row team-member-section_1 clearfix" style="    background: #eceae6;">
                <div class="container">
                    <!-- row -->


                    <div class="row">
                         <div class="col-sm-12 text-center">
                              <h1 class="wp-block-heading has-large-font-size"><span class="script"><mark
                                                        style="background-color:rgba(0, 0, 0, 0)"
                                                        class="has-inline-color has-gold-color">Meet Our Founder</mark></span></h1>




                                             </div>



                        <div class="col-lg-5 d-flex">
                           <div class="featured-imagebox featured-imagebox-team style1 my-auto">
                                <div class="ttm-box-view-overlay">
                                    <!--featured-thumbnail-->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ config('app.url') }}/assets/images/cp-sharma.jpg" alt="Pandit CP Sharma" style="object-position: top;">
                                    </div><!--featured-thumbnail end-->
                                </div>
                                <div class="featured-content box-shadow">
                                    <p class="category">Founder & Wedding Designer</p>
                                    <div class="featured-title">
                                        <h5><a href="#">Pandit CP Sharma</a></h5>
                                    </div>

                                </div>
                            </div><!--featured-imagebox-team end-->
                        </div>
                        <div class="col-lg-7" data-aos="fade" data-aos-duration="1000" data-aos-delay="500"
                            data-aos-easing="ease-in-out">
                            <div class="pl-25 res-991-pl-0 pt-55 res-991-pt-50 pb-15   ">
                                <!--section title-->

                                <div class="title-header mb-25 res-991-mb-0 cps">
                                    <h3 class="title">About CP Sharma</h3>
                                </div>




                                <div class="pt-5">
                                    <p>CP Sharma is a <a href="https://shadievents.com/meet-top-wedding-planner-agra" style="color: #ad8400;">top-rated wedding planner in Agra</a> who is the CEO and Founder of Shadi Events. They have been revolutionizing the wedding planning industry since 2013. As an experienced wedding designer, CP Sharma combines creativity and precision to craft unforgettable wedding experiences.</p>

<p>Apart from expertise in wedding planning, CP Sharma has diverse skills which include graphic designing, fashion photography and video editing. These additional talents make him the top wedding planner in Agra, Jaipur, Delhi, and Vrindavan. so every wedding he designs becomes special.</p>

<p>Shadi Events is the <a href="https://shadievents.com" style="color: #ad8400;">best event management company in Agra</a> and many couples have chosen CP Sharma to create a wonderful wedding experience for them. When you work with CP Sharma to plan your wedding you will know that your wedding will be expertly planned and will provide you with priceless memories that will last a lifetime.
</p>
                                </div>



                        </div>

                    </div>


                    </div><!--row end-->
                </div>
            </section>

            <!--portfolio-section_3 end-->


        </div><!-- site-main end -->

@endsection
