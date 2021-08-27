@extends('web.layout') @section('title','Products') @section('header')
<link
    rel="stylesheet"
    type="text/css"
    href="{{ asset('assets/css/jquery.spzoom.css') }}"
/>

@endsection @section('content')
<!--Main Slider-->
<section id="main-banner-area" class="position-relative">
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-light" data-alias="classic4export">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_main" class="rev_slider fullwidthabanner" data-version="5.4.1">
            <ul>
                @foreach($slider as $slid)
                <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power100.easeInOut" data-easeout="Power100.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="01">
                    <!-- MAIN IMAGE -->
                    <img src="/semaju/storage/app/{{ $slid->img}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-dark text-capitalize font-normal text-center">{{ $slid->text1}}</h1>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-dark text-capitalize font-bold text-center">{{ $slid->text2}}</h1>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1500"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-dark text-capitalize font-xlight text-center">{{ $slid->text3}}</h1>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','60','90']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="text-dark text-capitalize font-normal text-center">{{ $slid->text4}}</h4>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <ul class="social-icons-simple revicon">
        <li class="d-table"><a href="{{$social->facebook}}" class="hover-light"><i class="fab fa-facebook-f"></i></a> </li>
        <li class="d-table"><a href="{{$social->twiter}}" class="hover-light"><i class="fab fa-twitter"></i> </a> </li>
        <li class="d-table"><a href="{{$social->lingkedin}}" class="hover-light"><i class="fab fa-linkedin-in"></i> </a> </li>
        <li class="d-table"><a href="{{$social->instagram}}" class="hover-light"><i class="fab fa-instagram"></i> </a> </li>
    </ul>
</section>
<!--Main Slider ends -->
    <div class="row">
        <div class="col-md-12">
            <div
                id="services-slider"
                class="owl-carousel services-slider-light"
            >
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"
                            ><i class="fa fa-phone"></i
                        ></span>
                        <h4 class="bottom10">
                            <a
                                href="javascript:void(0)"
                                >{{$dataPerusahaan->no_telp}}</a
                            >
                        </h4>
                        <p>We will Help You</p>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"
                            ><i class="fa fa-envelope"></i
                        ></span>
                        <h4 class="bottom10">
                            <a
                                href="javascript:void(0)"
                                >{{$dataPerusahaan->email}}</a
                            >
                        </h4>
                        <p>Email</p>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fa fa-home"></i></span>
                        <h4 class="bottom10">
                            <a
                                href="javascript:void(0)"
                                >{{$dataPerusahaan->nm_perusahaan}}</a
                            >
                        </h4>
                        <p>{{$dataPerusahaan->alamat}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section
    id="our-feature"
    class="single-feature padding_bottom padding_top_half mt-n4"
>
    <div class="container mb-5" style="border-bottom: 1px solid black">
        <h1 style="text-align: center; text-transform: uppercase">
            {{$data->nm_produk}}
        </h1>
    </div>

    <div class="container d-flex" id="contentProduk">
        <div class="container">
            <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-ride="carousel"
            >
                <ol class="carousel-indicators">
                    <li
                        data-target="#carouselExampleIndicators"
                        data-slide-to="0"
                        class="active"
                    ></li>
                    <li
                        data-target="#carouselExampleIndicators"
                        data-slide-to="1"
                    ></li>
                    <li
                        data-target="#carouselExampleIndicators"
                        data-slide-to="2"
                    ></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <span class="zoom" id="ex1">
                            <img
                                src="/semaju/storage/app/{{$data->img_big_1}}"
                                width="500"
                                height="500"
                                alt="{{$data->nm_produk}}"
                            />
                        </span>
                    </div>
                    <div class="carousel-item">
                        <span class="zoom" id="ex1">
                            <img
                                src="/semaju/storage/app/{{$data->img_big_1}}"
                                width="500"
                                height="500"
                                alt="{{$data->nm_produk}}"
                            />
                        </span>
                    </div>
                    <div class="carousel-item">
                        <span class="zoom" id="ex1">
                            <img
                                src="/semaju/storage/app/{{$data->img_big_1}}"
                                width="500"
                                height="500"
                                alt="{{$data->nm_produk}}"
                            />
                        </span>
                    </div>
                </div>
                <a
                    class="carousel-control-prev"
                    href="#carouselExampleIndicators"
                    role="button"
                    data-slide="prev"
                >
                    <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a
                    class="carousel-control-next"
                    href="#carouselExampleIndicators"
                    role="button"
                    data-slide="next"
                >
                    <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="box-spec">
                <h4 style="text-transform: uppercase">Specification :</h4>
                <br />
                <span
                    style="
                        word-wrap: break-word; /* IE 5.5-7 */
                        white-space: -moz-pre-wrap; /* Firefox 1.0-2.0 */
                        white-space: pre-wrap; /* current browsers */
                    "
                    id="spec"
                    >{{$data->spec}}</span
                >
            </div>
            <div class="box-desc mt-5">
                <h4 style="text-transform: uppercase">Description :</h4>
                <br />
                <span
                    style="
                        word-wrap: break-word; /* IE 5.5-7 */
                        white-space: -moz-pre-wrap; /* Firefox 1.0-2.0 */
                        white-space: pre-wrap; /* current browsers */
                    "
                    id="desc"
                    >{{$data->desc}}</span
                >
            </div>
            <div class="mt-5">
                <a
                    href="https://api.whatsapp.com/send?phone={{$dataPerusahaan->no_wa}}&amp;text=Halo Minta Info untuk Produk {{$data->nm_produk}}"
                >
                    <button type="button" class="btn btn-success">
                        Click Me To Get More Info
                    </button></a
                >
            </div>
        </div>
    </div>
</section>
@section('script')

<script
    type="text/javascript"
    src="{{ asset('assets/js/jquery.zoom.js') }}"
></script>
<script>
    $(document).ready(() => {
        $("#bg").addClass("bg-navbar-imp");
        $("#ex1").zoom();
        const box = document.getElementById("spec");
        const text = box.innerText.trim();
        box.innerHTML = text;
        const desc = document.getElementById("desc");
        const aw = box.innerText.trim();
        desc.innerHTML = aw;
    });

    function responClass(s) {
        if (s.matches) {
            $("#contentProduk").addClass("flex-column");
        } else {
            $("#contentProduk").removeClass("flex-column");
        }
    }

    var s = window.matchMedia("(max-width: 375px)");
    responClass(s); // Call listener function at run time
    s.addListener(responClass); // Attach listener function on state changes
</script>
@endsection @endsection
