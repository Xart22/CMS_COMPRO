<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>{{$dataPerusahaan->nm_perusahaan}} | @yield('title')</title>
        <link href="{{ asset('assets/images/favicon.ico') }}" rel="icon" />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/bootstrap.min.css') }}"
        />
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/animate.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/owl.carousel.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/jquery.fancybox.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/tooltipster.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/cubeportfolio.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/revolution/navigation.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/revolution/settings.css') }}"
        />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

        @yield('header')
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
            <nav
                class="
                    navbar navbar-expand-lg
                    transparent-bg
                    darkcolor
                    static-nav
                    bg-navbar-imp
                "
            >
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img
                            src="https://www.alurgerak.id/semaju/storage/app/{{ $dataPerusahaan->logo_small}}"
                            alt="logo"
                            class="logo-default"
                        />
                        <img
                            src="https://www.alurgerak.id/semaju/storage/app/{{ $dataPerusahaan->logo_big}}"
                            alt="logo"
                            class="logo-scrolled"
                        />
                    </a>
                    <span
                        style="
                            color: white;
                            text-transform: capitalize;
                            font-weight: bolder;
                            font-size: medium;
                            margin-left: 20px;
                        "
                        > {{$dataPerusahaan->nm_perusahaan}}</span
                    >
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    style="color: white"
                                    href="{{ route('home') }}"
                                    >Home</a
                                >
                            </li>

                            <li class="nav-item dropdown position-relative">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"> Products </a>
                                <div class="dropdown-menu">
                                    @foreach($produk as $pro)
                                    <a class="dropdown-item" href="{{route('produk_view',$pro->id)}}">{{$pro->nm_produk}}</a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    style="color: white"
                                    href="{{ route('about') }}"
                                    >About</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    style="color: white"
                                    href="{{route('contact_view')}}"
                                    >Contact</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <!--side menu open button-->
                <a
                    href="javascript:void(0)"
                    class="d-inline-block sidemenu_btn"
                    id="sidemenu_toggle"
                >
                    <span class="bg-dark"></span> <span class="bg-dark"></span>
                    <span class="bg-dark"></span>
                </a>
            </nav>
            <!-- side menu -->
            <div class="side-menu gradient-bg opacity-0">
                <div class="overlay"></div>
                <div class="inner-wrapper">
                    <span
                        class="btn-close btn-close-no-padding"
                        id="btn_sideNavClose"
                        ><i></i><i></i
                    ></span>
                    <nav class="side-nav w-100">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}"
                                    >Home</a
                                >
                            </li>
                            <!-- Produk -->
                            <li class="nav-item">
                                <a
                                    class="nav-link collapsePagesSideMenu"
                                    data-toggle="collapse"
                                    href="#sideNavPages"
                                >
                                    Produk <i class="fas fa-chevron-down"></i>
                                </a>
                                <div
                                    id="sideNavPages"
                                    class="collapse sideNavPages"
                                >
                                    <ul class="navbar-nav mt-2">
                                        @foreach($produk as $pro)
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('produk_view',$pro->id)}}"
                                                >{{$pro->nm_produk}}</a
                                            >
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="gallery.html"
                                    >About</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"href="{{route('contact_view')}}"
                                    >Contact</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"href="{{route('dashboard')}}"
                                    >Login</a
                                >
                            </li>
                        </ul>
                    </nav>
                    <div class="side-footer w-100">
                        <ul class="social-icons-simple white top40">
                            <li>
                                <a href="{{$social->facebook}}"
                                    ><i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$social->twiter}}"
                                    ><i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$social->instagram}})"
                                    ><i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                        <p class="whitecolor">
                            <a href="https://www.alurgerak.id/"> www.alurgerak.id</a>
                        </p>
                    </div>
                </div>
            </div>
            <div id="close_side_menu" class="tooltip"></div>
            <!-- End side menu -->
        </header>
        <!-- header -->
        @yield('content')
        <!--Site Footer Here-->
        <footer id="site-footer" class="bg-light-dark padding_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_panel padding_bottom_half bottom20">
                            <a href="{{route('home')}}" class="footer_logo bottom25"
                                ><img
                                    src="/semaju/storage/app/{{
                                        $dataPerusahaan->logo_small
                                    }}"
                                    alt="{{$dataPerusahaan->nm_perusahaan}}"
                            /></a>
                            <p class="whitecolor bottom25">
                                {{$dataPerusahaan->alamat}}
                            </p>
                            <div
                                class="
                                    d-table
                                    w-100
                                    address-item
                                    whitecolor
                                    bottom25
                                "
                            >
                                <span class="d-table-cell align-middle"
                                    ><i class="fas fa-mobile-alt"></i
                                ></span>
                                <p class="d-table-cell align-middle bottom0">
                                    {{$dataPerusahaan->no_telp}}
                                    <a
                                        class="d-block"
                                        href="mailto:{{$dataPerusahaan->email}}"
                                        >{{$dataPerusahaan->email}}</a
                                    >
                                </p>
                            </div>
                            <ul
                                class="social-icons white wow fadeInUp"
                                data-wow-delay="100ms"
                            >
                                <li>
                                    <a
                                        href="{{$social->facebook}}"
                                        class="facebook"
                                        ><i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$social->twiter}}" class="twitter"
                                        ><i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="{{$social->linkedin}}"
                                        class="linkedin"
                                        ><i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$social->instagram}}" class="insta"
                                        ><i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_panel padding_bottom_half bottom20">
                            <h3 class="whitecolor bottom25">Useful Links</h3>
                            <ul class="latest_news whitecolor">
                                <li>
                                    <a href="{{route('home')}}"> 
                                    <span class="date defaultcolor"
                                        >Home</span</a>
                                    
                                </li>
                                <li>
                                    <a href="#.">
                                    <span class="date defaultcolor"
                                        >Products</span
                                    > </a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}">
                                    <span class="date defaultcolor"
                                        >About</span
                                    ></a>
                                </li>
                                <li>
                                    <a href="{{route('contact_view')}}">
                                    <span class="date defaultcolor"
                                        >Contact</span</a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div
                            class="
                                footer_panel
                                padding_bottom_half
                                bottom20
                                pl-0 pl-lg-5
                            "
                        >
                            <h3 class="whitecolor bottom25">SUPPORT BY</h3>
                            <ul class="links">
                                <li>
                                    <a href="https://aircomparts.com/"
                                        >AirCompParts.com</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_panel padding_bottom_half bottom20">
                            <h3 class="whitecolor bottom25">Business hours</h3>
                            <p class="whitecolor bottom25">
                                Our support available to help you
                            </p>
                            <ul class="hours_links whitecolor">
                                <li>
                                    <span
                                        >{{$dataPerusahaan->hari_operasional}}</span
                                    >
                                    <span
                                        >{{$dataPerusahaan->jam_operasional}}</span
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="floatwa">
                <a
                    href="https://api.whatsapp.com/send?phone={{$dataPerusahaan->no_wa}}&amp;text={{$social->text_wa}}"
                    target="_blank"
                    ><div class="tombolwa">KAMI VIA WHATSAPP</div></a
                >
            </div>
        </footer>

        <br />
        <br />
        <style>
            #map {
                height: 400px;
                /* The height is 400 pixels */
                width: 100%;
                /* The width is the width of the web page */
            }

            .floatwa {
                position: fixed;
                bottom: 0px;
                right: 0px;
                background-color: #ffffff;
                width: 100%;
                z-index: 1000;
                padding: 2px;
                margin: auto;
                text-align: center;
                float: none;
                box-shadow: 0px -2px 10px #c0c0c0;
            }
            .tombolwa {
                border: 1px #56aa71 solid;
                background-color: #2f7e49;
                width: 90%;
                padding: 4px;
                text-align: center;
                margin: 0;
                border-radius: 5px;
                margin: auto;
                text-align: center;
                float: none;
            }
            .floatwa a {
                color: white;
            }

            .hide {
                display: none;
                visibility: hidden;
            }
            .popbox {
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                width: 100%;
                z-index: 1000000;
            }
            .pop-content {
                width: 850px;
                height: 450px;
                display: block;
                position: absolute;
                top: 50%;
                left: 50%;
                margin: -225px 0 0 -425px;
                z-index: 2;
                box-shadow: 0 3px 20px 0 rgba(0, 0, 0, 0.5);
            }

            .popcontent {
                width: 100%;
                height: 100%;
                display: block;
                background: #fff;
                border-radius: 5px;
                overflow: hidden;
            }
            .pop-overlay {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                width: 100%;
                z-index: 1;
                background: rgba(0, 0, 0, 0.7);
            }
            .popbox-close-button {
                position: absolute;
                width: 28px;
                height: 28px;
                line-height: 28px;
                text-align: center;
                top: -14px;
                right: -14px;
                background-color: #fff;
                box-shadow: 0 -1px 1px 0 rgba(0, 0, 0, 0.2);
                border: none;
                border-radius: 50%;
                cursor: pointer;
                font-size: 34px;
                font-weight: lighter;
                padding: 0;
            }
            .popcontent img {
                width: 100%;
                height: 100%;
                display: block;
            }
            .flowbox {
                position: relative;
                overflow: hidden;
            }
            @media screen and (max-width: 840px) {
                .pop-content {
                    width: 90%;
                    height: auto;
                    top: 20%;
                    margin: 0 0 0 -45%;
                }
                .popcontent img {
                    height: auto;
                }
            }
        </style>

        <br />
        @if($popup)
        <div class="popbox hide" id="popbox">	  <div aria-label='Close' class="pop-overlay" onclick='document.getElementById("popbox").style.display="none";removeClassonBody();'/>	  <div class="pop-content">		<a href="#" target="_blank" rel="noopener noreferrer" title="box"><br />
            <div class="popcontent">			<img src="/semaju/storage/app/{{$popup->img}}" alt="banner" width="850" height="450"/><br />
            </div>		</a><br />
          <button aria-label='Close' class='popbox-close-button' onclick='document.getElementById("popbox").style.display="none";removeClassonBody();'>×</button><br />
        </div>	</div>@endif
        <!--Footer ends-->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
        <!--Bootstrap Core-->
        <script src="{{ asset('assets/js/propper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!--to view items on reach-->
        <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
        <!--Owl Slider-->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <!--number counters-->
        <script src="{{ asset('assets/js/jquery-countTo.js') }}"></script>
        <!--Parallax Background-->
        <script src="{{ asset('assets/js/parallaxie.js') }}"></script>
        <!--Cubefolio Gallery-->
        <script src="{{
                asset('assets/js/jquery.cubeportfolio.min.js')
            }}"></script>
        <!--Fancybox js-->
        <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
        <!--tooltip js-->
        <script src="{{ asset('assets/js/tooltipster.min.js') }}"></script>
        <!--wow js-->
        <script src="{{ asset('assets/js/wow.js') }}"></script>
        <!--Revolution SLider-->
        <script src="{{
                asset('assets/js/revolution/jquery.themepunch.tools.min.js')
            }}"></script>
        <script src="{{
                asset(
                    'assets/js/revolution/jquery.themepunch.revolution.min.js'
                )
            }}"></script>
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
        <script src="{{
                asset(
                    'assets/js/revolution/extensions/revolution.extension.actions.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'assets/js/revolution/extensions/revolution.extension.carousel.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'assets/js/revolution/extensions/revolution.extension.kenburn.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'assets/js/revolution/extensions/revolution.extension.layeranimation.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'assets/js/revolution/extensions/revolution.extension.migration.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'assets/js/revolution/extensions/revolution.extension.navigation.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'assets/js/revolution/extensions/revolution.extension.parallax.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'assets/js/revolution/extensions/revolution.extension.slideanims.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'assets/js/revolution/extensions/revolution.extension.video.min.js'
                )
            }}"></script>
        <!--custom functions and script-->
        <script src="{{ asset('assets/js/functions.js') }}"></script>
        @yield('script')
    </body>
</html>
