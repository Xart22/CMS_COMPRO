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
    <div class="container mb-3" style="border-bottom: 1px solid black">
        <h1 style="text-align: center; text-transform: uppercase">
            {{$data->nm_pekerjaan}}
        </h1>
    </div>
    <div class="container">
        @foreach($data->texts as $text)
        <p class="bottom35">{!!$text->p!!}</p>
        @endforeach
    </div>
    <div class="container d-flex justify-content-between">
        @foreach($data->imgs as $img)
        <img
            src="/semaju/storage/app/{{$img->img_pekerjaan}}"
            alt="{{$data->nm_pekerjaan}}"
            class="img-thumbnail"
            width="35%"
        />
        @endforeach
    </div>
    <div class="container mt-3">
        <h3 style="text-align: center">Feature And Benefits</h3>
        <span
            style="
                word-wrap: break-word; /* IE 5.5-7 */
                white-space: -moz-pre-wrap; /* Firefox 1.0-2.0 */
                white-space: pre-wrap; /* current browsers */
            "
            >{{$data->feature}}</span
        >
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
