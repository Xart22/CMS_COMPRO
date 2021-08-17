<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\DataPerusahaanModel;
use App\Models\IntroModel;
use App\Models\PartnerModel;
use App\Models\PopupModel;
use App\Models\ProdukModel;
use App\Models\SliderModel;
use App\Models\SocialModel;
use App\Models\TestimoniModel;
use Illuminate\Http\Request;

class allControllers extends Controller
{
    public function index()
    {
        $dataPerusahaan = DataPerusahaanModel::first();
        $slider = SliderModel::get();
        $intro = IntroModel::first();
        $partner = PartnerModel::get();
        $testi = TestimoniModel::get();
        $popup = PopupModel::first();
        $social = SocialModel::first();
        $produk = ProdukModel::get();
        view()->share('produk',$produk);
        return view('web.home',
        ['dataPerusahaan'=>$dataPerusahaan,
         'slider'=>$slider,
         'intro'=>$intro,
         'partner'=>$partner,
         'testimoni'=>$testi,
         'popup'=>$popup,
         'social'=>$social]);
    }

    public function about()
    {
        $dataPerusahaan = DataPerusahaanModel::first();
        $slider = SliderModel::get();
        $intro = IntroModel::first();
        $partner = PartnerModel::get();
        $testi = TestimoniModel::get();
        $popup = PopupModel::first();
        $social = SocialModel::first();
        $produk = ProdukModel::get();
        view()->share('produk',$produk);


        return view('web.about',
        ['dataPerusahaan'=>$dataPerusahaan,
         'slider'=>$slider,
         'intro'=>$intro,
         'partner'=>$partner,
         'testimoni'=>$testi,
         'popup'=>$popup,
         'social'=>$social]);
    }


    public function showProduk($id)
    {
        $produk = ProdukModel::get();
        view()->share('produk',$produk);
        return view('web.produk',['data'=>ProdukModel::find($id),'dataPerusahaan'=>DataPerusahaanModel::first(),'social'=>SocialModel::first(),'popup'=>PopupModel::first()]);
    }



}
