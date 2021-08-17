@extends('web/layout') @section('title','Home') @section('content')
<!--Main Slider-->
<section id="main-banner-area" class="position-relative">
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-light" data-alias="classic4export">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_main" class="rev_slider fullwidthabanner" data-version="5.4.1">
            <ul>
                @foreach($slider as $slid)
                <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power100.easeInOut" data-easeout="Power100.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="01">
                    <!-- MAIN IMAGE -->
                    <img src="/sumaju/storage/app/{{ $slid->img}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
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
                        <h4 class="bottom10"><a href="javascript:void(0)">Komplek Adipura IV</a></h4>
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
                <p class="bottom35">{{$intro->paragraf_1}}</p>
                <p class="bottom35">{{$intro->paragraf_2}}</p>
                <p class="bottom35">{{$intro->paragraf_3}}</p>
              
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="100ms">
                <div class="image"><img alt="SEO" src="{{ asset('assets/images/awesome-feature.png')}}"></div>
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
                    <h2 class="font-normal">Our Authorized Parthner</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="process-wrapp">
                @foreach($partner as $part)
                <li class="whitecolor wow fadeIn" data-wow-delay="100ms">
                    <img src="/sumaju/storage/app/{{$part->logo_partner}}" width="200" class="rounded-circle" alt="" srcset="">
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
                    <span class="count_nums font-light" data-to="2013" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">Since We Started</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p class="whitecolor top20 bottom20 font-light title">To be able to provide services with the best quality and price, in this case our priority is our goal. In the field of Air Compressors and Air Dryer Units, Spare parts and Service.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor top10 bottom10">
                    <span class="count_nums font-light" data-to="999" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">Since We Started</h3>
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
                        <div class="item">
                                <div class="team-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/team-1.jpg')}}" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h4 class="darkcolor">Air Filter ELement </h4>
                                            <p>Click for info</p>
                                            <ul class="social-icons-simple">
                                                <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>
                        <div class="item">
                                <div class="team-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/team-2.jpg')}}" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h4 class="darkcolor">Air Cooler Elliot Compressor</h4>
                                            <p>Click for info</p>
                                            <ul class="social-icons-simple">
                                                <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>
                        <div class="item">
                                <div class="team-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/team-3.jpg')}}" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h4 class="darkcolor">Centac Cooler</h4>
                                            <p>Click for info</p>
                                            <ul class="social-icons-simple">
                                                <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>
                        
                        <div class="item">
                                <div class="team-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/team-4.jpg')}}" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h4 class="darkcolor">Repair Centac Cooler (Retubing)</h4>
                                            <p>Click for info</p>
                                            <ul class="social-icons-simple">
                                                <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>

                        <div class="item">
                                <div class="team-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/team-3.jpg')}}" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h4 class="darkcolor">Centac Cooler</h4>
                                            <p>Click for info</p>
                                            <ul class="social-icons-simple">
                                                <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>

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
                    <span class="defaultcolor">PT. SEMAJU ELANG PUTRA </span>
                    <h2 class="font-normal bottom40"> INFORMASI </h2>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme no-dots" id="price-slider">
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="100ms" data-sale="60">
                        <h3 class="font-light darkcolor">ReTubing</h3>
                        <p class="bottom30">Untuk perbaikan penggantian Cooler CENTAC kami lakukan Re-Tubing. Kami menyediakan produk tubing ORIGINAL dari EUROPE, dengan material Cooper dan CuNi rendah CTD dan kualitas tinggi.</p>
                        <a class="button" href="javascript:void(0)">detail...</a>
                    </div>
                </div>
            </div>
            <div class="item">
                    <div class="col-md-12">
                        <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="100ms" data-sale="60">
                            <h3 class="font-light darkcolor">Refurbished</h3>
                            <p class="bottom30">Untuk Anda yang memiliki banyak waktu Refurbished adalah solusi terbaik untuk menekan biaya. Karena AirEnd akan kami kirim ke pusat AirHire untuk kami lakukan perbaikan dengan hati-hati dan terukur.</p>
                            <a class="button" href="javascript:void(0)">detail...</a>
                        </div>
                    </div>
            </div>
            <div class="item">
                        <div class="col-md-12">
                            <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="100ms" data-sale="60">
                                <h3 class="font-light darkcolor">Overhaul</h3>
                                <p class="bottom30">Kami dapat melaksanakan Service Overhaul Screw Air Compressors maupun Centrifugal Air Compressors. Di kerjakan oleh Tehnisi yang handal dan terpercaya sesuai ahlinya.</p>
                                <a class="button" href="javascript:void(0)">detail...</a>
                            </div>
                        </div>
            </div>
        
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
                            <img src="/sumaju/storage/app/{{$testi->img}}" alt="">
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
<section id="stayconnect" class="bglight position-relative">
    <div class="container">
        <div class="contactus-wrapp">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title wow fadeInUp text-center text-md-left" data-wow-delay="100ms">
                        <h3 class="darkcolor bottom20">Stay Connected</h3>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="result"></div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="userName" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Name" required id="userName" name="userName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="companyName" class="d-none"></label>
                                    <input class="form-control" type="tel" placeholder="Company"  id="companyName" name="companyName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email" required id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="button gradient-btn w-100" id="submit_btn">subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
@endsection
@endsection