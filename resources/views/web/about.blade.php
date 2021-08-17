@extends('web/layout') @section('title','About') @section('header')
@section('content')

<div class="container" style="margin-top: 25rem">
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
    <div class="container">
        <div class="row d-flex align-items-center">
            <div
                class="
                    col-lg-6 col-md-7 col-sm-7
                    text-sm-left text-center
                    wow
                    fadeInLeft
                "
                data-wow-delay="100ms"
            >
                <div class="heading-title mb-6">
                    <h2 class="darkcolor font-normal bottom30">
                        <span class="defaultcolor"
                            >{{$dataPerusahaan->nm_perusahaan}}
                        </span>
                        Background
                    </h2>
                </div>
                <p class="bottom35">{{$intro->paragraf_1}}</p>
                <p class="bottom35">{{$intro->paragraf_2}}</p>
                <p class="bottom35">{{$intro->paragraf_3}}</p>
            </div>
            <div
                class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight"
                data-wow-delay="100ms"
            >
                <div class="image">
                    <img
                        alt="SEO"
                        src="{{ asset('assets/images/awesome-feature.png') }}"
                    />
                </div>
            </div>
        </div>
    </div>
</section>
@section('script')
<script>
    $(document).ready(() => {
        $("#bg").addClass("bg-navbar-imp");
    });
</script>
@endsection @endsection
