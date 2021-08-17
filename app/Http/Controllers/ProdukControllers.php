<?php

namespace App\Http\Controllers;

use App\Models\DataPerusahaanModel;
use App\Models\PopupModel;
use App\Models\ProdukModel;
use App\Models\SocialModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProdukControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $PATH_FILE_DB = "public/produk/";
    public function index()
    {
        $dataPerusahaan = DataPerusahaanModel::first();
        view()->share('dataPerusahaan',$dataPerusahaan);
        return view('cms.produk.produk',['data'=>ProdukModel::get()]);
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
        
        $valid= $req->file('img');

        if(count($valid) > 3){
            return back()->with('fail','Maximum upload of 3 photos')->withInput();
        }
        $get = ProdukModel::where('nm_produk',$req->nm_produk)->first();
        if(!empty($get)){
            return back()->with('nm','Name Produk Already Exist')->withInput();
        }

        date_default_timezone_set('Asia/Jakarta');
        $data = new ProdukModel;
        $data->nm_produk = $req->nm_produk;
        $data->spec = $req->spec;
        $data->desc=$req->desc;
        $data->save();


        for ($i=0; $i <count($req->img) ; $i++) { 
            $img = $req->file('img');
            $cek = getimagesize($img[$i]);
            
            if($cek[0] != 400 && $cek[1] != 400){
                return back()->with('fail','Size Resolution Should be
                400px x 400px ')->withInput();
            }
            $nm = time().'_'. $img[$i]->getClientOriginalName();

            DB::table('produk')->where('id',$data->id)->update([
                'img_big_'.$i+1=>$this->PATH_FILE_DB.$nm
            ]);
            Storage::putFileAs($this->PATH_FILE_DB, $img[$i], $nm);
        }
        return redirect('/cms/produk')->with(['success'=>'Success Adding Product']);;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = ProdukModel::get();
        view()->share('produk',$produk);
        return view('cms.preview.preview-produk',['data'=>ProdukModel::find($id),'dataPerusahaan'=>DataPerusahaanModel::first(),'social'=>SocialModel::first(),'popup'=>PopupModel::first()]);
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
        
        if(!empty($req->file('img'))){
            $valid= $req->file('img');

        if(count($valid) > 3){
            return back()->with('fail','Maximum upload of 3 photos')->withInput();
        }

        date_default_timezone_set('Asia/Jakarta');
        $data = ProdukModel::find($id);
        $data->nm_produk = $req->nm_produk;
        $data->spec = $req->spec;
        $data->desc=$req->desc;
        $data->save();


        for ($i=0; $i <count($req->img) ; $i++) { 
            $img = $req->file('img');
            $cek = getimagesize($img[$i]);
            
            if($cek[0] != 400 && $cek[1] != 400){
                return back()->with('modal_fail','Size Resolution Should be
                400px x 400px ')->withInput();
            }
            $get = ProdukModel::where('nm_partner',$req->nm_partner)->first();
            if(!empty($get)){
                return back()->with('nm','Name Produk Already Exist')->withInput();
            }
            $nm = time().'_'. $img[$i]->getClientOriginalName();

            DB::table('produk')->where('id',$req->id)->update([
                'img_big_'.$i+1=>$this->PATH_FILE_DB.$nm
            ]);
            Storage::putFileAs($this->PATH_FILE_DB, $img[$i], $nm);
        }
        return redirect('/cms/produk')->with(['success'=>'Success Updating Product']);

        }else{
            date_default_timezone_set('Asia/Jakarta');
            $data = ProdukModel::find($id);
            $data->nm_produk = $req->nm_produk;
            $data->spec = $req->spec;
            $data->desc=$req->desc;
            $data->save();
            return redirect('/cms/produk')->with(['success'=>'Success Updating Product']);
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
        ProdukModel::where('id',$id)->delete();
        return redirect('cms/produk')->with(['success'=>'Success Deleting Product']);;
    }
}
