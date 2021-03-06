@extends('web.layout') @section('title','Home') @section('content')
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
<!--Some Services-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="services-slider" class="owl-carousel services-slider-light">
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fa fa-phone"></i></span>
                        <h4 class="bottom10"><a href="javascript:void(0)">{{$dataPerusahaan->no_telp}}</a></h4>
                        <p>We will Help You</p>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fa fa-envelope"></i></span>
                        <h4 class="bottom10"><a href="javascript:void(0)">{{$dataPerusahaan->email}}</a></h4>
                        <p>Email</p>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fa fa-home"></i></span>
                        <h4 class="bottom10"><a href="javascript:void(0)">{{$dataPerusahaan->nm_perusahaan}}</a></h4>
                        <p>{{$dataPerusahaan->alamat}}</p>
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
                    <h2 class="darkcolor font-normal bottom30"><span class="defaultcolor">{{$dataPerusahaan->nm_perusahaan}} </span> Background</h2>
                </div>
                @if($intro)
                <p class="bottom35">{{$intro->paragraf_1}}</p>
                <p class="bottom35">{{$intro->paragraf_2}}</p>
                <p class="bottom35">{{$intro->paragraf_3}}</p>
                @endif
              
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="100ms">
                <div class="image"><img alt="{{$dataPerusahaan->nm_perusahaan}}" src="/semaju/storage/app/{{$dataPerusahaan->logo_big }}"></div>
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
                    <h2 class="font-normal">Our Authorized Partner</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="process-wrapp">
                @foreach($partner as $part)
                <li class="whitecolor wow fadeIn" data-wow-delay="100ms">
                    <img src="/semaju/storage/app/{{$part->logo_partner}}" width="80" class="rounded-circle" alt="" srcset="">
                    <p class="fontbold bottom25"><h4>{{$part->nm_partner}}</h4></p>
                    <p class="mt-n2 mt-sm-0">{{$part->desc}}</p>
                </li>
                @endforeach
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
                    <span class="count_nums font-light" data-to="{{$dataPerusahaan->start_from}}" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">Since We Started</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p class="whitecolor top20 bottom20 font-light title">{{$dataPerusahaan->text_start}}</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor top10 bottom10">
                    <span class="count_nums font-light" data-to="{{$dataPerusahaan->project}}" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">Projects Completed</h3>
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
                        @foreach($produk as $pro)
                        <div class="item">
                                <div class="team-box">
                                        <div class="image">
                                            <img src="/semaju/storage/app/{{$pro->img_big_1}}" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h4 class="darkcolor">{{$pro->nm_prodok}} </h4>
                                            <p>Click for info</p>
                                            <ul class="social-icons-simple">
                                                <li><a class="facebook" href="{{route('produk_view',$pro->id)}}"><i class="fab fa-facebook-f"></i> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>
                        @endforeach

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
                    <span class="defaultcolor">{{$dataPerusahaan->nm_perusahaan}}</span>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme no-dots" id="price-slider">
            @foreach($pekerjaan as $pekerja)
            <div class="item">
                <div class="col-md-12">
                    @if($pekerja->discount)
                    <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="100ms" data-sale="{{$pekerja->discount}}">
                        @else
                        <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="100ms" data-sale="60">
                        @endif
                        <h3 class="font-light darkcolor">{{$pekerja->nm_pekerjaan}}</h3>
                        <p class="bottom30">{{$pekerja->desc}}</p>
                        <a class="button" href="{{route('pekerjaan_view',$pekerja->id)}}">detail</a>
                    </div>
                </div>
            </div>
            @endforeach
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
            @foreach($testimoni as $testi)
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="/semaju/storage/app/{{$testi->img}}" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">{{$testi->nm}}</a></h4>
                        <p>{{$testi->negara}}</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">{{$testi->text}}</p>
                        <span class="d-inline-block test-star">
                            @for ($i = 0; $i < $testi->star; $i++)

                            <i class="fas fa-star"></i>

                            @endfor
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--Testimonials Ends-->
<!-- Contact US -->
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
<!-- Contact US ends -->
@section('script')
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
</script>
@endsection
@endsection