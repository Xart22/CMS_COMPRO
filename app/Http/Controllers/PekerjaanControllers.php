<?php

namespace App\Http\Controllers;

use App\Models\DataPerusahaanModel;
use App\Models\ImgPekerjaanModel;
use App\Models\PekerjaanModel;
use App\Models\PopupModel;
use App\Models\ProdukModel;
use App\Models\SocialModel;
use App\Models\TextPekerjaanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PekerjaanControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $PATH_FILE_DB = "public/pekerjaan/";
    public function index()
    {
        return view('cms.pekerjaan.pekerjaan', ['dataPerusahaan' => DataPerusahaanModel::first(), 'pekerjaans' => PekerjaanModel::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        date_default_timezone_set('Asia/Jakarta');
        $cek = PekerjaanModel::where('nm_pekerjaan', $req->nm)->first();

        if (!empty($cek)) {
            return back()->with('nm', 'Name Pekerjaan Already Exist')->withInput();
        }


        $data = new PekerjaanModel;
        $data->nm_pekerjaan = $req->nm;
        $data->desc = $req->desc;
        $data->feature = $req->feature;
        $data->discount = $req->discount;
        $data->save();

        for ($i=0; $i <count($req->img) ; $i++) { 
            $img = $req->file('img');
            $cek = getimagesize($img[$i]);
            
            if($cek[0] != 400 && $cek[1] != 400){
                PekerjaanModel::where('id',$data->id)->delete();
                return back()->with('fail','Size Resolution Should be
                400px x 400px ')->withInput();
            }
            $nm = time().'_'. $img[$i]->getClientOriginalName();
            ImgPekerjaanModel::insert([
                'img_pekerjaan'=>$this->PATH_FILE_DB.$nm,
                'pekerjaan_model_id'=>$data->id
            ]);
            Storage::putFileAs($this->PATH_FILE_DB, $img[$i], $nm);
        }

        for ($i = 0; $i < count($req->paragraf); $i++) {
            $p = ['p' => $req->paragraf[$i], 'pekerjaan_model_id' => $data->id];
            TextPekerjaanModel::insert($p);
        }
        return redirect('/cms/pekerjaan')->with(['success' => 'Success Adding Pekerjaan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cms.preview.preview-pekerjaan', [
            'data' => PekerjaanModel::with('texts', 'imgs')->find($id),
            'dataPerusahaan' => DataPerusahaanModel::first(),
            'produk' => ProdukModel::get(),
            'social' => SocialModel::first(),
            'popup' => PopupModel::first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('cms.pekerjaan.edit', ['dataPerusahaan' => DataPerusahaanModel::first(), 'pekerjaan' => PekerjaanModel::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {   
        date_default_timezone_set('Asia/Jakarta');
        $getId= PekerjaanModel::with('texts', 'imgs')->find($id);
        $imgName =[];
        $textName=[];
        foreach($getId->imgs as $img){
            array_push($imgName,'img_'.$img->id);
        }
        foreach ($getId->texts as $text){
            array_push($textName,'p_'.$text->id);
        }


        $cek = PekerjaanModel::where('nm_pekerjaan', $req->nm)->first();

        if (!empty($cek) && $cek->id != $id) {
            return back()->with('nm', 'Name Pekerjaan Already Exist')->withInput();
        }


        $data = PekerjaanModel::find($id);
        $data->nm_pekerjaan = $req->nm;
        $data->desc = $req->desc;
        $data->feature = $req->feature;
        $data->discount = $req->discount;
        $data->save();

        foreach($imgName as $img){
            if ($req[$img]) {
                
                if(getimagesize($req[$img])[0] != 400 && getimagesize($req[$img])[0] != 400){
                    return back()->with('upload','Size Resolution Should be
                    400px x 400px ')->withInput();
                }
                $nm = time().'_'. $req[$img]->getClientOriginalName();
                ImgPekerjaanModel::where('id',str_replace('img_','',$img))->update([
                    'img_pekerjaan'=>$this->PATH_FILE_DB.$nm
                ]);
                Storage::putFileAs($this->PATH_FILE_DB, $req[$img], $nm);
            }
        }

        foreach($textName as $text){
            if ($req[$text]) {
                TextPekerjaanModel::where('id',str_replace('p_','',$text))->update([
                    'p'=>$req[$text]
                ]);
            }
        }
        return redirect('/cms/pekerjaan')->with(['success' => 'Success Update Pekerjaan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PekerjaanModel::where('id',$id)->delete();
        TextPekerjaanModel::where('pekerjaan_model_id',$id)->delete();
        ImgPekerjaanModel::where('pekerjaan_model_id',$id)->delete();
        return redirect('/cms/pekerjaan')->with(['success' => 'Success Delete Pekerjaan']);
    }
}
