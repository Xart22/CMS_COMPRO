<?php

namespace App\Http\Controllers;

use App\Models\DataPerusahaanModel;
use App\Models\PopupModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PopupControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $PATH_FILE_DB = "public/popup/";
    public function index()
    {
        $dataPerusahaan = DataPerusahaanModel::first();
        view()->share('dataPerusahaan',$dataPerusahaan);
        return view('cms.popup.popup',['data'=>PopupModel::first()]);
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
        $img = $req->file('img');
        
        $cek = getimagesize($img);
        
        if($cek[0] != 1280 && $cek[1] != 800){
            return back()->with('fail','Size Resolution Should be
            1280px x 800px')->withInput();
        }
        $nm = time().'_'. $img->getClientOriginalName();
        $data= new PopupModel;
        $data->img=$this->PATH_FILE_DB.$nm;
        $data->save();
        Storage::putFileAs($this->PATH_FILE_DB, $img, $nm);
        return redirect('cms/popup')->with(['success'=>'Success Adding Pop UP']);
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
        
        date_default_timezone_set('Asia/Jakarta');
        $img = $req->file('img');
        $cek = getimagesize($img);
        
        if($cek[0] != 1280 && $cek[1] != 800){
            return back()->with('fail','Size Resolution Should be
            1280px x 800px')->withInput();
        }
        $nm = time().'_'. $img->getClientOriginalName();
        $data=PopupModel::find($id);
        $data->img=$this->PATH_FILE_DB.$nm;
        $data->save();
        Storage::putFileAs($this->PATH_FILE_DB, $img, $nm);
        return redirect('cms/popup')->with(['success'=>'Success Adding Pop UP']);
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
