<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\DataPerusahaanModel;
use App\Models\IntroModel;
use App\Models\PartnerModel;
use App\Models\PopupModel;
use App\Models\SliderModel;
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


        return view('web.index',
        ['dataPerusahaan'=>$dataPerusahaan,
         'slider'=>$slider,
         'intro'=>$intro,
         'partner'=>$partner,
         'testimoni'=>$testi,
         'popup'=>$popup]);
    }
}
