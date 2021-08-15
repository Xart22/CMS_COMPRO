<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>SEMAJU</title>
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
    </head>
    <body>
        <!--PreLoader-->
        <div class="loader slow-load">
            <div class="loader-inner">
                <div class="cssload-loader"></div>
            </div>
        </div>
        <!--PreLoader Ends-->
        <section id="our-testimonial" class="bglight padding_bottom">
            <div class="parallax page-header testimonial-bg">
                <div class="container">
                    <div class="row">
                        <div
                            class="
                                col-lg-6
                                offset-lg-6
                                col-md-12
                                text-center text-lg-right
                            "
                        >
                            <div
                                class="heading-title wow fadeInUp padding_testi"
                                data-wow-delay="100ms"
                            >
                                <span class="blackcolor">Kepuasan Anda</span>
                                <h2 class="blackcolor font-normal">
                                    Prioritas Kami
                                </h2>
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
                                    <img
                                        src="/sumaju/storage/app/{{$data->img}}"
                                        alt=""
                                    />
                                </div>
                                <h4 class="defaultcolor font-light top15">
                                    <a href="#.">{{$data->nm}}</a>
                                </h4>
                                <p>{{$data->negara}}</p>
                            </div>
                            <div
                                class="
                                    col-lg-6
                                    offset-lg-2
                                    col-md-10
                                    offset-md-1
                                    text-lg-left text-center
                                "
                            >
                                <p class="bottom15 top90">
                                    {{$data->text}}
                                </p>
                                <span class="d-inline-block test-star">
                                    @for ($i = 0; $i < $data->star; $i++)

                                    <i class="fas fa-star"></i>

                                    @endfor
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonials Ends-->

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
            }</style
        ><br />
        <script>
            //<![CDATA[
            setTimeout(function () {
                document.getElementById("popbox").classList.remove("hide");
                document.body.className += " flowbox";
            }, 5000);
            function removeClassonBody() {
                var element = document.body;
                element.className = element.className.replace(
                    /\bflowbox\b/g,
                    ""
                );
            }
            //]]>

            function initMap() {
                // The location of Uluru
                const uluru = { lat: -25.344, lng: 131.036 };
                // The map, centered at Uluru
                const map = new google.maps.Map(
                    document.getElementById("map"),
                    {
                        zoom: 4,
                        center: uluru,
                    }
                );
                // The marker, positioned at Uluru
                const marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                });
            }
        </script>
        <br />

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
    </body>
</html>
