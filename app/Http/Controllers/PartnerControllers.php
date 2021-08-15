<?php

namespace App\Http\Controllers;

use App\Models\PartnerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $PATH_FILE_DB = "public/partner/";
    public function index()
    {
        return view('cms.partner.partner',['data'=>PartnerModel::get()]);
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
        $img = $req->file('logo');
        $cek = getimagesize($img);
        
        if($cek[0] != 200 && $cek[1] != 200){
            return back()->with('fail','Size Resolution Should be
            200 x 200 ')->withInput();
        }
        $get = PartnerModel::where('nm_partner',$req->nm_partner)->first();
        if(!empty($get)){
            return back()->with('nm','Name Partner Already Exist')->withInput();
        }
        $nm = time().'_'. $img->getClientOriginalName();
        $data= new PartnerModel();
        $data->nm_partner=$req->nm_partner;
        $data->desc=$req->desc;
        $data->logo_partner=$this->PATH_FILE_DB.$nm;
        $data->save();
        Storage::putFileAs($this->PATH_FILE_DB, $img, $nm);
        return redirect('cms/partner')->with(['success'=>'Success Adding Partner']);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('cms.preview.preview-partner',['data'=>PartnerModel::get()]);
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
        $get = PartnerModel::where('nm_partner',$req->nm_partner)->first();
        if(!empty($get)){
            if($get->id == $id && $get->nm_partner == $req->nm_partner){
                if(!empty($req->file('logo'))){
                $img = $req->file('logo');
                $nm = time().'_'. $img->getClientOriginalName();
                $cek = getimagesize($img);
                }else{
                $data = PartnerModel::find($id);
                $data->nm_partner=$req->nm_partner;
                $data->desc=$req->desc;
                $data->save();
                return redirect('cms/partner')->with(['success'=>'Success Updating Partner']);
                }
        
                if($cek[0] != 200 && $cek[1] != 200){
                    return back()->with('modal_file','Size Resolution Should be
                    200 x 200 ')->withInput()->with('modalId',$id);
                }
                $data = PartnerModel::find($id);
                $data->nm_partner=$req->nm_partner;
                $data->desc=$req->desc;
                $data->logo_partner=$this->PATH_FILE_DB.$nm;
                $data->save();
                Storage::putFileAs($this->PATH_FILE_DB, $img, $nm);
                return redirect('cms/partner')->with(['success'=>'Success Updating Partner']);
            }else{
                return back()->with('nm_update','Name Partner Already Exist')->withInput()->with('modal',$id); 
            }
        }else{
            if(!empty($req->file('logo'))){
                $img = $req->file('logo');
                $nm = time().'_'. $img->getClientOriginalName();
                $cek = getimagesize($img);
                }else{
                $data = PartnerModel::find($id);
                $data->nm_partner=$req->nm_partner;
                $data->desc=$req->desc;
                $data->save();
                return redirect('cms/partner')->with(['success'=>'Success Updating Partner']);
                }
        
                if($cek[0] != 200 && $cek[1] != 200){
                    return back()->with('modal_file','Size Resolution Should be
                    200 x 200 ')->withInput()->with('modalId',$id);
                }
                $data = PartnerModel::find($id);
                $data->nm_partner=$req->nm_partner;
                $data->desc=$req->desc;
                $data->logo_partner=$this->PATH_FILE_DB.$nm;
                $data->save();
                Storage::putFileAs($this->PATH_FILE_DB, $img, $nm);
                return redirect('cms/partner')->with(['success'=>'Success Updating Partner']);
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
        PartnerModel::where('id',$id)->delete();
        return redirect('cms/partner')->with(['success'=>'Success Deleting Partner']);;
    }
}
