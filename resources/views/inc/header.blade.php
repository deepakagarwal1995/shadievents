 <header id="masthead" class="header ttm-header-style-03">
            <!--top_bar-->

            <!--site-header-menu-->
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <!--site-navigation -->
                                <div class="site-navigation">
                                    <!-- site-branding -->
                                    <div class="site-branding">
                                        <a class="home-link" href="{{url('/')}}" title="Shadievents" rel="home">
                                            <img id="logo-img" class="img-center" src="{{ config('app.url') }}/assets/images/gold-logo-sm.png"
                                                alt="logo-img">
                                        </a>
                                    </div><!-- site-branding end -->
                                    <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                        <span class="menubar-box">
                                            <span class="menubar-inner"></span>
                                        </span>
                                    </div>
                                    <!-- menu -->
                                    <nav class="main-menu menu-mobile ml-auto" id="menu">
                                        <ul class="menu">
                                            <!-- <li class="mega-menu-item active">
                                        <a href="#" class="mega-menu-link">Home</a>
                                        <ul class="mega-submenu">
                                            <li><a href="index.html">Home Wedding</a></li>
                                            <li><a href="home-photography.html">Home Photography</a></li>
                                            <li><a href="home-invitation.html">Home Invitation</a></li>
                                            <li><a href="wedding-planner.html">Wedding Planner</a></li>
                                            <li class="active"><a href="home-catering.html">Home Catering</a></li>
                                            <li class="mega-menu-item">
                                                <a href="#" class="mega-menu-link">Header Styles</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="header-classic.html">Header Classic</a></li>
                                                    <li><a href="index.html">Header Overlay</a></li>
                                                    <li><a href="header-center-logo.html">Header Center Logo</a></li>
                                                    <li><a href="header-infostack.html">Header Infostack</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->




                                            <li><a href="{{route('portfolio')}}">PORTFOLIO</a></li>
                                            <li class="logo-after-this"><a href="{{route('services')}}">SERVICES</a></li>
                                            <li><a href="{{route('meet')}}">MEET THE CO.</a></li>
                                            <li><a href="{{route('contact')}}">CONTACT US</a></li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--site-header-menu end-->
        </header><!--header end-->
