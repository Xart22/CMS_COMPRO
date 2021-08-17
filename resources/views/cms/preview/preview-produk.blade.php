@extends('web.layout') @section('title','Produk') @section('header')
<link
    rel="stylesheet"
    type="text/css"
    href="{{ asset('assets/css/jquery.spzoom.css') }}"
/>

@endsection @section('content')

<div class="container" style="margin-top: 18rem">
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
                            <a href="javascript:void(0)">Komplek Adipura IV</a>
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
                                src="/sumaju/storage/app/{{$data->img_big_1}}"
                                width="500"
                                height="500"
                                alt="Daisy on the Ohoopee"
                            />
                        </span>
                    </div>
                    <div class="carousel-item">
                        <span class="zoom" id="ex1">
                            <img
                                src="/sumaju/storage/app/{{$data->img_big_1}}"
                                width="500"
                                height="500"
                                alt="Daisy on the Ohoopee"
                            />
                        </span>
                    </div>
                    <div class="carousel-item">
                        <span class="zoom" id="ex1">
                            <img
                                src="/sumaju/storage/app/{{$data->img_big_1}}"
                                width="500"
                                height="500"
                                alt="Daisy on the Ohoopee"
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
                    href="https://api.whatsapp.com/send?phone=6281319378284&amp;text=Halo%20Semaju,%20Boleh%20kami%20dibantu"
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
    responClass(s);
    s.addListener(responClass);
</script>
@endsection @endsection
