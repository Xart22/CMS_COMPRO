@extends('web.layout') @section('title','Contact') @section('header')
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
    <div class="container border p-3">
        <h4 class="mb-1" style="text-align: center">Get Free Quote</h4>
        <form class="row g-3" method="POST" action="{{ route('send_email') }}">
            @csrf
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" class="form-control" name="form" />
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" />
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">No Telpon</label>
                <input type="text" class="form-control" name="tlp" />
            </div>
            <div class="col-12 mt-2">
                <div class="form-floating">
                    <textarea
                        name="text"
                        class="form-control"
                        placeholder="Leave a comment here"
                        id="floatingTextarea2"
                        style="height: 100px"
                    ></textarea>
                </div>
            </div>

            <div class="container p-3">
                <button type="submit" class="btn btn-primary w-100">
                    Send
                </button>
            </div>
        </form>
    </div>
    <div class="container mt-2">{!!$dataPerusahaan->embeded_maps!!}</div>
</section>

@section('script')
<script>
    $(document).ready(() => {
        $("#bg").addClass("bg-navbar-imp");
    });
</script>
@endsection @endsection
