@php
    $Footer_gallery = \App\Models\Footer_gallery::orderBy('order', 'ASC')->skip(0)->take(5)->get();
@endphp




<footer class="footer widget-footer clearfix bg-black">
    <div class="first-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="first-footer-inner">
                        <div class="footer-logo">
                            <img id="footer-logo-img" class="img-center"
                                src="{{ config('app.url') }}/assets/images/white-logo-lg.png" alt="">
                        </div>
                        <div class="row no-gutters footer-box">
                            <div class="col-md-4 widget-area">
                                <div class="featured-box">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>ShadiEvents</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Agra, Jaipur, Delhi, Vrindavan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 widget-area">
                                <div class="featured-box">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Talk To Expert</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p><a style="color: #fff;" href="tel:08868899888">8868899888</a> or <a
                                                    style="color: #fff;" href="tel:07500466141">7500466141</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 widget-area">
                                <div class="featured-box">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Email Us</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p><a style="color: #fff;"
                                                    href="mailto:shadievents8@gmail.com">shadievents8@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters mt-50">
                            <div class="col-md-12">
                                <div class="widget_media_gallery">

                                    @foreach ($Footer_gallery as $row)



                                        <figure class="gallery-item">
                                            <div class="ttm-box-view-overlay">
                                                <img class="img-fluid" src="{{ Voyager::image( thumbnail($row->image,'medium') ) }}"
                                                    alt="Gallery" title="gallery-img">
                                                <div class="ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="gallery"
                                                        data-rel="prettyPhoto"
                                                        href="{{ Voyager::image( $row->image ) }}">
                                                        <i class="ti ti-search"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                    @endforeach



                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-footer-text">
        <div class="container">
            <div class="row copyright">
                <div class="col-md-4">
                    <div class="social-icons circle social-hover">
                        <ul class="list-inline">
                            <li class="social-facebook">
                                <a class="tooltip-top" target="_blank"
                                    href="https://www.facebook.com/shadievents.tcom" data-tooltip="Facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="social-twitter">
                                <a class="tooltip-top" target="_blank" href="https://www.instagram.com/shadieventss/"
                                    data-tooltip="Instagram">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="social-flickr">
                                <a class=" tooltip-top" target="_blank"
                                    href="https://api.whatsapp.com/send?phone=918868899888&text=Hello,%20I%20have%20a%20question"
                                    data-tooltip="Whatsapp">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="social-linkedin">
                                <a class=" tooltip-top" target="_blank"
                                    href="https://www.linkedin.com/in/cp-sharma-04b71211a/" data-tooltip="LinkedIn">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="text-md-right mt-20 text-center">
                        <span style="    color: #999292;">© 2024 Shadievents | All rights reserved | Designed and Developed by &nbsp;<a
                                href="https://svtindia.in/" target="_blank">SVT India.</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->


<!--back-to-top start-->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
