<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SEMAJU</title>
    <link href="{{ asset('assets/images/favicon.ico')}}" rel="icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/tooltipster.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/cubeportfolio.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/revolution/navigation.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/revolution/settings.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    
 
</head>
<body>
<!--PreLoader-->
<div class="loader slow-load">
    <div class="loader-inner">
        <div class="cssload-loader"></div>
    </div>
</div>
<!--PreLoader Ends-->
<!-- header -->
<header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg transparent-bg darkcolor static-nav">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('assets/images/logo.png')}}" alt="logo" class="logo-default" style="width: 200px;">
                <img src="{{ asset('assets/images/logo.png')}}" alt="logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Produk </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <h5 class="dropdown-title bottom10"> General </h5>
                                            <a class="dropdown-item" href="about.html">About Us</a>
                                            <a class="dropdown-item" href="services.html">Services</a>
                                            <a class="dropdown-item" href="services-detail.html">Service Detail</a>
                                            <a class="dropdown-item" href="testimonial.html">Testimonials</a>
                                            <a class="dropdown-item" href="contact.html">Contact Us</a>
                                            <a class="dropdown-item" href="team.html">Our Team</a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <h5 class="dropdown-title opacity-10"> Others </h5>
                                            <a class="dropdown-item" href="gallery.html">Gallery</a>
                                            <a class="dropdown-item" href="gallery-detail.html">Gallery Detail</a>
                                            <a class="dropdown-item" href="pricing.html">Pricing</a>
                                            <a class="dropdown-item" href="404.html">404 Error</a>
                                            <a class="dropdown-item" href="faq.html">FAQ's</a>
                                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <h5 class="dropdown-title bottom10"> Account </h5>
                                            <a class="dropdown-item" href="login.html">Login</a>
                                            <a class="dropdown-item" href="register.html">Register</a>
                                            <a class="dropdown-item" href="forget-password.html">Reset Password</a>
                                            <a class="dropdown-item" href="support.html">Support</a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <h5 class="dropdown-title bottom10"> Shop Pages </h5>
                                            <a class="dropdown-item" href="shop.html">Shop</a>
                                            <a class="dropdown-item" href="shop-detail.html">Shop Detail</a>
                                            <a class="dropdown-item" href="shop-cart.html">Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span class="bg-dark"></span> <span class="bg-dark"></span> <span class="bg-dark"></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu gradient-bg opacity-0">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#sideNavPages1">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages">
                            Produk <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavPages" class="collapse sideNavPages">
                            <ul class="navbar-nav mt-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="team.html">Our Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="services.html">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="services-detail.html">Service Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="testimonial.html">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.html">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery-detail.html">Gallery Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pricing.html">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="faq.html">FAQ's</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="404.html">Error 404</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="coming-soon.html">Coming Soon</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#inner-2">
                                        Account <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <div id="inner-2" class="collapse sideNavPages sideNavPagesInner">
                                        <ul class="navbar-nav mt-2">
                                            <li class="nav-item">
                                                <a class="nav-link" href="login.html">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="register.html">Register</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="forget-password.html">Forget Password</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="support.html">Support</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#inner-1">
                                        Shops <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <div id="inner-1" class="collapse sideNavPages sideNavPagesInner">
                                        <ul class="navbar-nav mt-2">
                                            <li class="nav-item">
                                                <a class="nav-link" href="shop.html">Shop Products</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="shop-detail.html">Shop Detail</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="shop-cart.html">Shop Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
                <p class="whitecolor">&copy; <span id="year"></span> Trax. Made With Love by ThemesIndustry</p>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header -->
<!--Main Slider-->
<section id="main-banner-area" class="position-relative">
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-light" data-alias="classic4export">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_main" class="rev_slider fullwidthabanner" data-version="5.4.1">
            <ul>
                <!-- SLIDE 1 -->
                <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power100.easeInOut" data-easeout="Power100.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="01">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/images/compro3_1920x1280.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-dark text-capitalize font-normal text-center">Welcome</h1>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-dark text-capitalize font-bold text-center">SEMAJU ELANG PUTRA</h1>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1500"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-dark text-capitalize font-xlight text-center">Since 2013</h1>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','60','90']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="text-dark text-capitalize font-normal text-center">Supplying CENTAC part 100% OEM compatible and meet or exceed OEM spesifications</h4>
                    </div>
                </li>
                <!-- SLIDE 2 -->
                <li data-index="rs-02" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="02">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/images/compro5_1920x1280.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-dark text-capitalize font-xlight text-center">SEMAJU</h1>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-dark text-capitalize font-bold text-center">Reduce Cost is OurFocus, Quality is Our Warranty</h1>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1500"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-dark text-capitalize font-xlight text-center">Reduce Maintenance Cost With Good Quality Parts</h1>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','60','90']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="text-dark font-light text-center">~</h4>
                    </div>
                </li>
                <!-- SLIDE 3 -->
                <li data-index="rs-03" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="03">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/images/banner-light1-3.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-dark text-capitalize font-xlight text-center">We Are Here</h1>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-dark text-capitalize font-bold text-center">For Your Needs</h1>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1500"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-dark text-capitalize font-xlight text-center">SEMAJU</h1>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','60','90']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="text-dark font-light text-center">Help Your Business</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <ul class="social-icons-simple revicon">
        <li class="d-table"><a href="javascript:void(0)" class="hover-light"><i class="fab fa-facebook-f"></i></a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="hover-light"><i class="fab fa-twitter"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="hover-light"><i class="fab fa-linkedin-in"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="hover-light"><i class="fab fa-instagram"></i> </a> </li>
    </ul>
</section>
<!--Main Slider ends -->
<!--Some Services-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="services-slider" class="owl-carousel services-slider-light">
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fa fa-phone"></i></span>
                        <h4 class="bottom10"><a href="javascript:void(0)">(+6222) 875 25015</a></h4>
                        <p>We will Help You</p>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fa fa-envelope"></i></span>
                        <h4 class="bottom10"><a href="javascript:void(0)">info@semaju.com</a></h4>
                        <p>Email</p>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fa fa-home"></i></span>
                        <h4 class="bottom10"><a href="javascript:void(0)">Komplek Adipura IV</a></h4>
                        <p>Jl. Pinus IX No.51 RT.005/008 Bandung Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Some Services ends-->
<!--Some Feature -->
<section id="our-feature" class="single-feature padding_bottom padding_top_half mt-n4">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-7 text-sm-left text-center wow fadeInLeft" data-wow-delay="100ms">
                <div class="heading-title mb-6">
                    <h2 class="darkcolor font-normal bottom30"><span class="defaultcolor">PT. SEMAJU ELANG PUTRA </span> Background</h2>
                </div>
                <p class="bottom35">PT. Semaju Elang Putra (SEP) was founded in end of 2013 and was incorporated in the state of Bandung as basic compressor population in industries. Our Company beginning was based on the principle of superior parts replacement for develope air quality for air compressors</p>
                <p class="bottom35">The companie’s was starting with helped one of customer to supplied Cooler CENTAC with high quality performance and more then 30% saving cost from other supplier, started from that, we focus with our motto “Reduce Cost is Our Focus, Quality is Our Warranty“ it words has appriciated by customer to help themselves from dependence from distributor of brand compressors.</p>
                <p class="bottom35">Consumable part is one of costly from compressor, all our customers agreed about that and hope to whom can help reduce the cost while consistence to up hold the princip of quality is our warranty, thats right PT.SEMAJU ELANG PUTRA has coming given solution for customer.</p>
              
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="100ms">
                <div class="image"><img alt="SEO" src="{{ asset('assets/images/awesome-feature.png')}}"></div>
            </div>
        </div>
    </div>
</section>
<!--Some Feature ends-->
<!-- WOrk Process-->
<section id="our-process" class="padding bg-light-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="100ms">
                    <h2 class="font-normal">Our Authorized Parthner</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="process-wrapp">
                <li class="whitecolor wow fadeIn" data-wow-delay="100ms">
                    <span class="pro-step bottom20">LOGO</span>
                    <p class="fontbold bottom25"><h2>IR CENTACT</h2></p>
                    <p class="mt-n2 mt-sm-0">Kami dapat men-supply kebutuhan spare parts CENTAC Impeller, Diffuser, Pinion, Thurst Bearing, Collar Thurst, Balancing Rotor Assy, Probe, Thermostatic Valve dan lain-lain.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                    <span class="pro-step bottom20">LOGO</span>
                    <p class="fontbold bottom25"><h2>KAISHAN</h2></p>
                    <p class="mt-n2 mt-sm-0">Kami adalah Distributor Resmi KAISHAN Air Compressor. Yang dapat menyediakan unit baru, spare parts maupun service. Untuk type unit Kaitec Series, Kaitain Series, LG Series, LGX Series, PM Variable Frequency dan Centrifugal Air Compressors.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="500ms">
                    <span class="pro-step bottom20">LOGO</span>
                    <p class="fontbold bottom25"><h2>Z-Technique</h2></p>
                    <p class="mt-n2 mt-sm-0">NON Refurbished Air End untuk Atlas Copco Z Series Air Compressors. Produk dari AirHire adalah alternative untuk penggantian LP dan HP Element yang harganya sangat tinggi.</p>
                </li>
                
            </ul>
        </div>
    </div>
</section>
<!--WOrk Process ends-->
<!-- Mobile Apps -->

<!--Mobile Apps ends-->
<!-- Counters -->
<section id="bg-counters" class="padding bg-counters parallax">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor  top10 bottom10">
                    <span class="count_nums font-light" data-to="2013" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">Since We Started</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p class="whitecolor top20 bottom20 font-light title">To be able to provide services with the best quality and price, in this case our priority is our goal. In the field of Air Compressors and Air Dryer Units, Spare parts and Service.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor top10 bottom10">
                    <span class="count_nums font-light" data-to="999" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">Since We Started</h3>
            </div>
        </div>
    </div>
</section>
<!-- Counters ends-->
<!-- Our Team-->
<section id="our-team" class="padding_top half-section-alt teams-border">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="heading-title heading_space wow fadeInUp" data-wow-delay="100ms">
                    <span class="defaultcolor text-center text-md-left">Karena Anda Kami Hadir</span>
                    <h2 class="darkcolor font-normal text-center text-md-left">Produk</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="heading_space mt-n3 mt-sm-0 text-center text-md-left">Untuk dapat memberikan layanan dengan kualitas dan harga terbaik, dalam hal ini menjadi prioritas tujuan kami. Dalam bidang Air Compressors dan Air Dryer Unit, Spare parts dan Service.</p>
            </div>
        </div>
        <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div id="partners-slider" class="owl-carousel">
                        <div class="item">
                                <div class="team-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/team-1.jpg')}}" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h4 class="darkcolor">Air Filter ELement </h4>
                                            <p>Click for info</p>
                                            <ul class="social-icons-simple">
                                                <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>
                        <div class="item">
                                <div class="team-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/team-2.jpg')}}" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h4 class="darkcolor">Air Cooler Elliot Compressor</h4>
                                            <p>Click for info</p>
                                            <ul class="social-icons-simple">
                                                <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>
                        <div class="item">
                                <div class="team-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/team-3.jpg')}}" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h4 class="darkcolor">Centac Cooler</h4>
                                            <p>Click for info</p>
                                            <ul class="social-icons-simple">
                                                <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>
                        
                        <div class="item">
                                <div class="team-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/team-4.jpg')}}" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h4 class="darkcolor">Repair Centac Cooler (Retubing)</h4>
                                            <p>Click for info</p>
                                            <ul class="social-icons-simple">
                                                <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>

                        <div class="item">
                                <div class="team-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/team-3.jpg')}}" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h4 class="darkcolor">Centac Cooler</h4>
                                            <p>Click for info</p>
                                            <ul class="social-icons-simple">
                                                <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
</section>
<!-- Our Team ends-->

<!--Pricing Start-->
<section id="pricing" class="padding bglight">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title darkcolor wow fadeInUp" data-wow-delay="100ms">
                    <span class="defaultcolor">PT. SEMAJU ELANG PUTRA </span>
                    <h2 class="font-normal bottom40"> INFORMASI </h2>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme no-dots" id="price-slider">
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="100ms" data-sale="60">
                        <h3 class="font-light darkcolor">ReTubing</h3>
                        <p class="bottom30">Untuk perbaikan penggantian Cooler CENTAC kami lakukan Re-Tubing. Kami menyediakan produk tubing ORIGINAL dari EUROPE, dengan material Cooper dan CuNi rendah CTD dan kualitas tinggi.</p>
                        <a class="button" href="javascript:void(0)">detail...</a>
                    </div>
                </div>
            </div>
            <div class="item">
                    <div class="col-md-12">
                        <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="100ms" data-sale="60">
                            <h3 class="font-light darkcolor">Refurbished</h3>
                            <p class="bottom30">Untuk Anda yang memiliki banyak waktu Refurbished adalah solusi terbaik untuk menekan biaya. Karena AirEnd akan kami kirim ke pusat AirHire untuk kami lakukan perbaikan dengan hati-hati dan terukur.</p>
                            <a class="button" href="javascript:void(0)">detail...</a>
                        </div>
                    </div>
            </div>
            <div class="item">
                        <div class="col-md-12">
                            <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="100ms" data-sale="60">
                                <h3 class="font-light darkcolor">Overhaul</h3>
                                <p class="bottom30">Kami dapat melaksanakan Service Overhaul Screw Air Compressors maupun Centrifugal Air Compressors. Di kerjakan oleh Tehnisi yang handal dan terpercaya sesuai ahlinya.</p>
                                <a class="button" href="javascript:void(0)">detail...</a>
                            </div>
                        </div>
            </div>
        
        </div>
    </div>
</section>
<!--Pricing ends-->

<!-- Testimonials -->
<section id="our-testimonial" class="bglight padding_bottom">
    <div class="parallax page-header testimonial-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 col-md-12 text-center text-lg-right">
                    <div class="heading-title wow fadeInUp padding_testi" data-wow-delay="100ms">
                        <span class="blackcolor">Kepuasan Anda</span>
                        <h2 class="blackcolor font-normal">Prioritas Kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="owl-carousel" id="testimonial-slider">
            <!--item 1-->
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="{{ asset('assets/images/testimonial-1.jpg')}}" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">John Smith</a></h4>
                        <p>UPWORK, New York</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">We have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we boast a years and years of service.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
            <!--item 2-->
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="{{ asset('assets/images/testimonial-2.jpg')}}" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">Hayden Wood</a></h4>
                        <p>FIVERR, Italy</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">Trax’s customer testimonial page is another beauty. Its simple design focuses on videos and standout quotes from customers. This approach is clean, straightforward, text that can be overwhelming and easy to skip.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="far fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
            <!--item 3-->
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="{{ asset('assets/images/testimonial-3.jpg')}}" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">Kevin Miller</a></h4>
                        <p>ENVATO, Australia</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">Trax is a company that provides tools to help professional event planning and execution, and their customers are very happy folks! The thing I love about their customer testimonial page provides content formats.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
            <!--item 4-->
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="{{ asset('assets/images/testimonial-4.jpg')}}" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">Alina Johanson</a></h4>
                        <p>INTEL, Sidney</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">Startup Institute is a career accelerator that allows professionals to learn new skills, take their careers in a different direction, and pursue a career they are passionate about that have completed the program.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="far fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonials Ends-->
<!-- Contact US -->
<section id="stayconnect" class="bglight position-relative">
    <div class="container">
        <div class="contactus-wrapp">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title wow fadeInUp text-center text-md-left" data-wow-delay="100ms">
                        <h3 class="darkcolor bottom20">Stay Connected</h3>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="result"></div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="userName" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Name" required id="userName" name="userName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="companyName" class="d-none"></label>
                                    <input class="form-control" type="tel" placeholder="Company"  id="companyName" name="companyName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email" required id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="button gradient-btn w-100" id="submit_btn">subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US ends -->
<!--Site Footer Here-->
<footer id="site-footer" class="bg-light-dark padding_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <a href="index.html" class="footer_logo bottom25"><img src="{{ asset('assets/images/logo-transparent.png')}}" alt="MegaOne"></a>
                    <p class="whitecolor bottom25">KOMPLEK BANDUNG INTEN</p>
                    <p class="whitecolor bottom25">Jl. Inten Raya No.1, Kec. Rancasari, Bandung 40292</p>
                    <div class="d-table w-100 address-item whitecolor bottom25">
                        <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                        <p class="d-table-cell align-middle bottom0">
                                +62 8199-8198-900 <a class="d-block" href="mailto:web@support.com">agung25th@semaju.com</a>
                        </p>
                    </div>
                    <ul class="social-icons white wow fadeInUp" data-wow-delay="100ms">
                        <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                        <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                        <li><a href="javascript:void(0)" class="linkedin"><i class="fab fa-linkedin-in"></i> </a> </li>
                        <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Latest News</h3>
                    <ul class="latest_news whitecolor">
                        <li> <a href="#.">Info 1 </a> <span class="date defaultcolor">15 March 2019</span> </li>
                        <li> <a href="#.">Info 2 </a> <span class="date defaultcolor">15 March 2019</span> </li>
                        <li> <a href="#.">Info 3 </a> <span class="date defaultcolor">15 March 2019</span> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20 pl-0 pl-lg-5">
                    <h3 class="whitecolor bottom25">SUPPORT BY</h3>
                    <ul class="links">
                        <li><a href="index.html">AirComp-Parts.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Business hours</h3>
                    <p class="whitecolor bottom25">Our support available to help you</p>
                    <ul class="hours_links whitecolor">
                        <li><span>Monday-Friday:</span> <span>8.00-17.00</span></li>
                        <li><span>Saturday:</span> <span>09:00-21:00</span></li>
                        <li><span>Calendar Events:</span> <span>8-Hour Shift</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section id="stayconnect11" class="bglight position-relative">
            <div class="container">
                    <div id="map"></div>
            </div>
        </section>

    <div class="floatwa">
            <a href="https://api.whatsapp.com/send?phone=6281319378284&amp;text=Halo%20Semaju,%20Boleh%20kami%20dibantu" target="_blank"><div class="tombolwa">KAMI VIA WHATSAPP</div></a></div>

</footer>

<br />
<br />
<script
src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
async
></script>
<style>

#map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}

.floatwa {
position:fixed;
bottom:0px;
right: 0px;
background-color:#ffffff;
width:100%;
z-index:1000;
padding:2px;
margin:auto;
text-align:center;
float:none;
box-shadow: 0px -2px 10px #c0c0c0;
}
.tombolwa {
border: 1px #56aa71 solid;
background-color:#2f7e49;
width:90%;
padding:4px;
text-align:center;
margin:0;
border-radius: 5px;
margin:auto;
text-align:center;
float:none;
}
.floatwa a{
color:white;
}

.hide{display:none;visibility:hidden;}
.popbox{position:fixed;top:0;left:0;bottom:0;width:100%;z-index:1000000;}
.pop-content{width:850px;height:450px;display:block;position:absolute;top:50%;left:50%;margin:-225px 0 0 -425px;z-index:2;box-shadow:0 3px 20px 0 rgba(0,0,0,.5);}

 

.popcontent{width:100%;height:100%;display:block;background:#fff;border-radius:5px;overflow:hidden}
.pop-overlay{position:absolute;top:0;left:0;bottom:0;width:100%;z-index:1;background:rgba(0,0,0,.7)}
.popbox-close-button{position:absolute;width:28px;height:28px;line-height:28px;text-align:center;top:-14px;right:-14px;background-color:#fff;box-shadow:0 -1px 1px 0 rgba(0,0,0,.2);border:none;border-radius:50%;cursor:pointer;font-size:34px;font-weight:lighter;padding:0}
.popcontent img{width:100%;height:100%;display:block}
.flowbox{position:relative;overflow:hidden}
@media screen and (max-width:840px){.pop-content{width:90%;height:auto;top:20%;margin:0 0 0 -45%}
.popcontent img{height:auto}
}
</style><br />
	<div class="popbox hide" id="popbox">	  <div aria-label='Close' class="pop-overlay" onclick='document.getElementById("popbox").style.display="none";removeClassonBody();'/>	  <div class="pop-content">		<a href="#" target="_blank" rel="noopener noreferrer" title="box"><br />
		  <div class="popcontent">			<img src="https://2.bp.blogspot.com/-7F4VzqkZlPs/XM5pUu8SZQI/AAAAAAAAALA/JXUpgu3KsVsF9a0qhxEcHcRVdsvzY6PogCLcBGAs/s1600/20190505_113756.jpg" alt="banner" width="850" height="450"/><br />
		  </div>		</a><br />
		<button aria-label='Close' class='popbox-close-button' onclick='document.getElementById("popbox").style.display="none";removeClassonBody();'>×</button><br />
	  </div>	</div><script>
//<![CDATA[
setTimeout(function(){
 document.getElementById('popbox').classList.remove('hide');
 document.body.className+=" flowbox"
 }, 5000);
function removeClassonBody(){var element=document.body;element.className=element.className.replace(/\bflowbox\b/g,"")}
//]]>

function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.036 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}
</script><br />


<!--Footer ends-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<!--Bootstrap Core-->
<script src="{{ asset('assets/js/propper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<!--to view items on reach-->
<script src="{{ asset('assets/js/jquery.appear.js')}}"></script>
<!--Owl Slider-->
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<!--number counters-->
<script src="{{ asset('assets/js/jquery-countTo.js')}}"></script>
<!--Parallax Background-->
<script src="{{ asset('assets/js/parallaxie.js')}}"></script>
<!--Cubefolio Gallery-->
<script src="{{ asset('assets/js/jquery.cubeportfolio.min.js')}}"></script>
<!--Fancybox js-->
<script src="{{ asset('assets/js/jquery.fancybox.min.js')}}"></script>
<!--tooltip js-->
<script src="{{ asset('assets/js/tooltipster.min.js')}}"></script>
<!--wow js-->
<script src="{{ asset('assets/js/wow.js')}}"></script>
<!--Revolution SLider-->
<script src="{{ asset('assets/js/revolution/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('assets/js/revolution/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="{{ asset('assets/js/revolution/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{ asset('assets/js/revolution/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/revolution/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{ asset('assets/js/revolution/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ asset('assets/js/revolution/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{ asset('assets/js/revolution/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ asset('assets/js/revolution/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset('assets/js/revolution/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ asset('assets/js/revolution/extensions/revolution.extension.video.min.js')}}"></script>
<!--custom functions and script-->
<script src="{{ asset('assets/js/functions.js')}}"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"
></script>
</body>
</html>