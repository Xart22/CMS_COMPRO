<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\DataPerusahaanModel;
use App\Models\InboxModel;
use App\Models\IntroModel;
use App\Models\PartnerModel;
use App\Models\PekerjaanModel;
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
        $pekerjaan = PekerjaanModel::get();
        view()->share('produk', $produk);
        return view(
            'web.home',
            [
                'dataPerusahaan' => $dataPerusahaan,
                'slider' => $slider,
                'intro' => $intro,
                'partner' => $partner,
                'testimoni' => $testi,
                'popup' => $popup,
                'social' => $social,
                'pekerjaan'=> $pekerjaan

            ]
        );
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
        view()->share('produk', $produk);


        return view(
            'web.about',
            [
                'dataPerusahaan' => $dataPerusahaan,
                'slider' => $slider,
                'intro' => $intro,
                'partner' => $partner,
                'testimoni' => $testi,
                'popup' => $popup,
                'social' => $social
            ]
        );
    }

    public function showPekerjaan($id)
    {   
        $produk = ProdukModel::get();
        view()->share('produk', $produk);
        return view('web.pekerjaan', ['data' => PekerjaanModel::find($id), 'dataPerusahaan' => DataPerusahaanModel::first(), 'social' => SocialModel::first(), 'popup' => PopupModel::first(), 'slider' => SliderModel::get()]);

    }


    public function showProduk($id)
    {
        $produk = ProdukModel::get();
        view()->share('produk', $produk);
        return view('web.produk', ['data' => ProdukModel::find($id), 'dataPerusahaan' => DataPerusahaanModel::first(), 'social' => SocialModel::first(), 'popup' => PopupModel::first(), 'slider' => SliderModel::get()]);
    }

    public function contact()
    {
        $dataPerusahaan = DataPerusahaanModel::first();
        $slider = SliderModel::get();
        $intro = IntroModel::first();
        $partner = PartnerModel::get();
        $testi = TestimoniModel::get();
        $popup = PopupModel::first();
        $social = SocialModel::first();
        $produk = ProdukModel::get();
        view()->share('produk', $produk);


        return view(
            'web.contact',
            [
                'dataPerusahaan' => $dataPerusahaan,
                'slider' => $slider,
                'intro' => $intro,
                'partner' => $partner,
                'testimoni' => $testi,
                'popup' => $popup,
                'social' => $social
            ]
        );
    }

    public function send(Request $req)
    {
        $data = new InboxModel;
        $data->form = $req->form;
        $data->email = $req->email;
        $data->no_telp = $req->tlp;
        $data->message = $req->text;
        $data->save();

        return redirect()->route('home');
    }
}
