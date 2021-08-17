<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="images/favicon.ico" type="image/ico" />

        <title>SEMAJU ELANG PUTRA | @yield('title')</title>

        <!-- Bootstrap -->
        <link
            href="{{
                asset('assets/cms/vendors/bootstrap/dist/css/bootstrap.min.css')
            }}"
            rel="stylesheet"
        />
        <!-- Font Awesome -->
        <link
            href="{{
                asset(
                    'assets/cms/vendors/font-awesome/css/font-awesome.min.css'
                )
            }}"
            rel="stylesheet"
        />
        <!-- NProgress -->
        <link
            href="{{ asset('assets/cms/vendors/nprogress/nprogress.css') }}"
            rel="stylesheet"
        />
        <!-- iCheck -->
        <link
            href="{{ asset('assets/cms/vendors/iCheck/skins/flat/green.css') }}"
            rel="stylesheet"
        />

        <!-- bootstrap-progressbar -->
        <link
            href="{{
                asset(
                    'assets/cms/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'
                )
            }}"
            rel="stylesheet"
        />
        <!-- JQVMap -->
        <link
            href="{{ asset('assets/cms/vendors/jqvmap/dist/jqvmap.min.css') }}"
            rel="stylesheet"
        />
        <!-- bootstrap-daterangepicker -->
        <link
            href="{{
                asset(
                    'assets/cms/vendors/bootstrap-daterangepicker/daterangepicker.css'
                )
            }}"
            rel="stylesheet"
        />

        <!-- Custom Theme Style -->
        <link
            href="{{ asset('assets/cms/build/css/custom.min.css') }}"
            rel="stylesheet"
        />
        @yield('header')
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0">
                            <a href="index.html" class="site_title"
                                ><i class="fa fa-paw"></i>
                                <span>Gentelella Alela!</span></a
                            >
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img
                                    src="{{
                                        asset('assets/cms/images/img.jpg')
                                    }}"
                                    alt="..."
                                    class="img-circle profile_img"
                                />
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>John Doe</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div
                            id="sidebar-menu"
                            class="main_menu_side hidden-print main_menu"
                        >
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li>
                                        <a
                                            ><i class="fa fa-home"></i>Home
                                            <span
                                                class="fa fa-chevron-down"
                                            ></span
                                        ></a>
                                        <ul class="nav child_menu">
                                            <li class="current-page">
                                                <a href="{{ route('slider') }}"
                                                    >Slider Image</a
                                                >
                                            </li>
                                            <li class="">
                                                <a href="{{ route('intro') }}"
                                                    >Intro</a
                                                >
                                            </li>
                                            <li class="">
                                                <a href="{{ route('partner') }}"
                                                    >Partner</a
                                                >
                                            </li>
                                            <li class="">
                                                <a href="{{ route('produk') }}"
                                                    >Produk</a
                                                >
                                            </li>
                                            <li class="">
                                                <a
                                                    href="{{
                                                        route('testimoni')
                                                    }}"
                                                    >Testimoni</a
                                                >
                                            </li>
                                            <li class="">
                                                <a href="{{ route('popup') }}"
                                                    >Pop Up News</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu_section">
                                <h3>Setting</h3>
                                <ul class="nav side-menu">
                                    <li>
                                        <a
                                            ><i class="fa fa-bug"></i>
                                            Data Perusahaan
                                            <span
                                                class="fa fa-chevron-down"
                                            ></span
                                        ></a>
                                        <ul class="nav child_menu">
                                            <li>
                                                <a
                                                    href="{{
                                                        route('data_perusahaan')
                                                    }}"
                                                    >Infromasi Perusahaan</a
                                                >
                                            </li>
                                            <li>
                                                <a href="{{ route('social') }}"
                                                    >Social Media</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Settings"
                            >
                                <span
                                    class="glyphicon glyphicon-cog"
                                    aria-hidden="true"
                                ></span>
                            </a>
                            <a
                                data-toggle="tooltip"
                                data-placement="top"
                                title="FullScreen"
                            >
                                <span
                                    class="glyphicon glyphicon-fullscreen"
                                    aria-hidden="true"
                                ></span>
                            </a>
                            <a
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Lock"
                            >
                                <span
                                    class="glyphicon glyphicon-eye-close"
                                    aria-hidden="true"
                                ></span>
                            </a>
                            <a
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Logout"
                                href="login.html"
                            >
                                <span
                                    class="glyphicon glyphicon-off"
                                    aria-hidden="true"
                                ></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <nav class="nav navbar-nav">
                            <ul class="navbar-right">
                                <li
                                    class="nav-item dropdown open"
                                    style="padding-left: 15px"
                                >
                                    <a
                                        href="javascript:;"
                                        class="user-profile dropdown-toggle"
                                        aria-haspopup="true"
                                        id="navbarDropdown"
                                        data-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        <img
                                            src="{{
                                                asset(
                                                    'assets/cms/images/img.jpg'
                                                )
                                            }}"
                                            alt=""
                                        />John Doe
                                    </a>
                                    <div
                                        class="
                                            dropdown-menu dropdown-usermenu
                                            pull-right
                                        "
                                        aria-labelledby="navbarDropdown"
                                    >
                                        <a
                                            class="dropdown-item"
                                            href="javascript:;"
                                        >
                                            Change Password</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="login.html"
                                            ><i
                                                class="
                                                    fa fa-sign-out
                                                    pull-right
                                                "
                                            ></i>
                                            Log Out</a
                                        >
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">@yield('content')</div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by
                        <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{
                asset('assets/cms/vendors/jquery/dist/jquery.min.js')
            }}"></script>
        <!-- Bootstrap -->
        <script src="{{
                asset(
                    'assets/cms/vendors/bootstrap/dist/js/bootstrap.bundle.min.js'
                )
            }}"></script>
        <!-- FastClick -->
        <script src="{{
                asset('assets/cms/vendors/fastclick/lib/fastclick.js')
            }}"></script>
        <!-- NProgress -->
        <script src="{{
                asset('assets/cms/vendors/nprogress/nprogress.js')
            }}"></script>
        <!-- Chart.js -->
        <script src="{{
                asset('assets/cms/vendors/Chart.js/dist/Chart.min.js')
            }}"></script>
        <!-- gauge.js -->
        <script src="{{
                asset('assets/cms/vendors/gauge.js/dist/gauge.min.js')
            }}"></script>
        <!-- bootstrap-progressbar -->
        <script src="{{
                asset(
                    'assets/cms/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js'
                )
            }}"></script>
        <!-- iCheck -->
        <script src="{{
                asset('assets/cms/vendors/iCheck/icheck.min.js')
            }}"></script>
        <!-- Skycons -->
        <script src="{{
                asset('assets/cms/vendors/skycons/skycons.js')
            }}"></script>
        <!-- Flot -->
        <script src="{{
                asset('assets/cms/vendors/Flot/jquery.flot.js')
            }}"></script>
        <script src="{{
                asset('assets/cms/vendors/Flot/jquery.flot.pie.js')
            }}"></script>
        <script src="{{
                asset('assets/cms/vendors/Flot/jquery.flot.time.js')
            }}"></script>
        <script src="{{
                asset('assets/cms/vendors/Flot/jquery.flot.stack.js')
            }}"></script>
        <script src="{{
                asset('assets/cms/vendors/Flot/jquery.flot.resize.js')
            }}"></script>
        <!-- Flot plugins -->
        <script src="{{
                asset(
                    'assets/cms/vendors/flot.orderbars/js/jquery.flot.orderBars.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'assets/cms/vendors/flot-spline/js/jquery.flot.spline.min.js'
                )
            }}"></script>
        <script src="{{
                asset('assets/cms/vendors/flot.curvedlines/curvedLines.js')
            }}"></script>
        <!-- DateJS -->
        <script src="{{
                asset('assets/cms/vendors/DateJS/build/date.js')
            }}"></script>
        <!-- JQVMap -->
        <script src="{{
                asset('assets/cms/vendors/jqvmap/dist/jquery.vmap.js')
            }}"></script>
        <script src="{{
                asset(
                    'assets/cms/vendors/jqvmap/dist/maps/jquery.vmap.world.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'assets/cms/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js'
                )
            }}"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="{{
                asset('assets/cms/vendors/moment/min/moment.min.js')
            }}"></script>
        <script src="{{
                asset(
                    'assets/cms/vendors/bootstrap-daterangepicker/daterangepicker.js'
                )
            }}"></script>

        <!-- Custom Theme Scripts -->
        <script src="{{ asset('assets/cms/build/js/custom.min.js') }}"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"
        ></script>
        @yield('script')
    </body>
</html>
