<?php

namespace App\Http\Controllers;

use App\Models\DataPerusahaanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataPerusahaanControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $PATH_FILE_DB = "public/logo/";
    public function index()
    {
        $dataPerusahaan = DataPerusahaanModel::first();
        view()->share('dataPerusahaan',$dataPerusahaan);
        return view('cms.setting.index',['data'=>DataPerusahaanModel::first()]);
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
        $small = $req->file('logo_small');
        $cek = getimagesize($small);
        $big = $req->file('logo_big');
        $cekBig = getimagesize($big);
        
        if($cek[0] != 200 && $cek[1] != 200){
            if($cekBig[0] != 800 && $cekBig[1] != 600){
                return back()->with('fail_big','Size Resolution Should be
                800px x 600px ')->withInput()->with('fail_small','Size Resolution Should be
                200px x 200px ');
            }
        }
        if($cekBig[0] != 800 && $cekBig[1] != 600){
            return back()->with('fail_big','Size Resolution Should be
            800px x 600px ')->withInput();
        }
        
        
        $logo_small = time().'_'. $small->getClientOriginalName();
        $logo_big   =time().'_'. $big->getClientOriginalName();

        $width = str_replace('width="600"','width="100%"',$req->maps);

        DataPerusahaanModel::insert([
            'nm_perusahaan'=>$req->nm_perusahaan,
            'alamat'=>$req->alamat,
            'embeded_maps'=>$req->$width,
            'no_telp'=>$req->no_tlp,
            'no_wa'=>$req->no_wa,
            'email'=>$req->email,
            'hari_operasional'=>$req->hari,
            'jam_operasional'=>$req->jam,
            'logo_small'=>$this->PATH_FILE_DB.$logo_small,
            'logo_big'=>$this->PATH_FILE_DB.$logo_big
        ]);
        Storage::putFileAs($this->PATH_FILE_DB, $small, $logo_small);
        Storage::putFileAs($this->PATH_FILE_DB, $big, $logo_big);
        return redirect('cms/data-perusahaan')->with(['success'=>'Success Adding Data']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        if($req->file('logo_small')){

        $small = $req->file('logo_small');
        $cek = getimagesize($small);
        $big = $req->file('logo_big');
        $cekBig = getimagesize($big);
        
        if($cekBig[0] != 800 && $cekBig[1] != 600){
            return back()->with('fail','Size Resolution Should be
            800px x 600px ')->withInput();
        }
        
        if($cek[0] != 200 && $cek[1] != 200){
            return back()->with('fail','Size Resolution Should be
            200px x 200px ')->withInput();
        }
        $logo_small = time().'_'. $small->getClientOriginalName();
        $logo_big   =time().'_'. $big->getClientOriginalName();
        $width = str_replace('width="600"','width="100%"',$req->maps);
        DataPerusahaanModel::where('id',$id)->update([
            'nm_perusahaan'=>$req->nm_perusahaan,
            'alamat'=>$req->alamat,
            'embeded_maps'=>$width,
            'no_telp'=>$req->no_tlp,
            'no_wa'=>$req->no_wa,
            'email'=>$req->email,
            'hari_operasional'=>$req->hari,
            'jam_operasional'=>$req->jam,
            'logo_small'=>$this->PATH_FILE_DB.$logo_small,
            'logo_big'=>$this->PATH_FILE_DB.$logo_big
        ]);
        Storage::putFileAs($this->PATH_FILE_DB, $small, $logo_small);
        Storage::putFileAs($this->PATH_FILE_DB, $big, $logo_big);
        return redirect('cms/data-perusahaan');
    }else{
        $width = str_replace('width="600"','width="100%"',$req->maps);
        DataPerusahaanModel::where('id',$id)->update([
            'nm_perusahaan'=>$req->nm_perusahaan,
            'alamat'=>$req->alamat,
            'embeded_maps'=>$width,
            'no_telp'=>$req->no_tlp,
            'no_wa'=>$req->no_wa,
            'email'=>$req->email,
            'hari_operasional'=>$req->hari,
            'jam_operasional'=>$req->jam
        ]);
        return redirect('cms/data-perusahaan')->with(['success'=>'Success Updating Data']);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
