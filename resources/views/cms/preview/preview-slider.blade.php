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
        <!-- header -->
        <!-- header -->
        <!--Main Slider-->
        <section id="main-banner-area" class="position-relative">
            <div
                id="revo_main_wrapper"
                class="
                    rev_slider_wrapper
                    fullwidthbanner-container
                    m-0
                    p-0
                    bg-light
                "
                data-alias="classic4export"
            >
                <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
                <div
                    id="rev_main"
                    class="rev_slider fullwidthabanner"
                    data-version="5.4.1"
                >
                    <ul>
                        <!-- SLIDE 1 -->
                        <li
                            data-index="rs-01"
                            data-transition="fade"
                            data-slotamount="default"
                            data-easein="Power100.easeInOut"
                            data-easeout="Power100.easeInOut"
                            data-masterspeed="2000"
                            data-fsmasterspeed="1500"
                            data-param1="01"
                        >
                            <!-- MAIN IMAGE -->
                            <img
                                src="/semaju/storage/app/{{$data->img}}"
                                alt=""
                                data-bgposition="center center"
                                data-bgfit="cover"
                                data-bgrepeat="no-repeat"
                                data-bgparallax="10"
                                class="rev-slidebg"
                                data-no-retina
                            />
                            <!-- LAYER NR. 1 -->
                            <div
                                class="tp-caption tp-resizeme"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-130','-130','-110','-80']"
                                data-width="none"
                                data-height="none"
                                data-type="text"
                                data-textAlign="['center','center','center','center']"
                                data-responsive_offset="on"
                                data-start="1000"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            >
                                <h1
                                    class="
                                        text-dark text-capitalize
                                        font-normal
                                        text-center
                                    "
                                >
                                    {{$data->text1}}
                                </h1>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div
                                class="tp-caption tp-resizeme"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-70','-70','-50','-20']"
                                data-width="none"
                                data-height="none"
                                data-type="text"
                                data-textAlign="['center','center','center','center']"
                                data-responsive_offset="on"
                                data-start="1000"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            >
                                <h1
                                    class="
                                        text-dark text-capitalize
                                        font-bold
                                        text-center
                                    "
                                >
                                    {{$data->text2}}
                                </h1>
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div
                                class="tp-caption tp-resizeme"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-10','-10','10','40']"
                                data-width="none"
                                data-height="none"
                                data-type="text"
                                data-textAlign="['center','center','center','center']"
                                data-responsive_offset="on"
                                data-start="1500"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            >
                                <h1
                                    class="
                                        text-dark text-capitalize
                                        font-xlight
                                        text-center
                                    "
                                >
                                    {{$data->text3}}
                                </h1>
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div
                                class="tp-caption tp-resizeme"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['40','40','60','90']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text"
                                data-textAlign="['center','center','center','center']"
                                data-responsive_offset="on"
                                data-start="2000"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            >
                                <h4
                                    class="
                                        text-dark text-capitalize
                                        font-normal
                                        text-center
                                    "
                                >
                                    {{$data->text4}}
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="social-icons-simple revicon">
                <li class="d-table">
                    <a href="javascript:void(0)" class="hover-light"
                        ><i class="fab fa-facebook-f"></i
                    ></a>
                </li>
                <li class="d-table">
                    <a href="javascript:void(0)" class="hover-light"
                        ><i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="d-table">
                    <a href="javascript:void(0)" class="hover-light"
                        ><i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
                <li class="d-table">
                    <a href="javascript:void(0)" class="hover-light"
                        ><i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </section>
        <!--Main Slider ends -->

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
