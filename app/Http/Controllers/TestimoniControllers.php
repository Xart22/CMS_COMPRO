<?php

namespace App\Http\Controllers;

use App\Models\TestimoniModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $PATH_FILE_DB = "public/testimoni/";
    public function index()
    {
        return view('cms.testimoni.testimoni',['data'=>TestimoniModel::get()]);
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
        
        if($cek[0] != 200 && $cek[1] != 200){
            return back()->with('fail','Size Resolution Should be
            200px x 200px')->withInput();
        }

        $get = TestimoniModel::where('nm',$req->nm)->first();
        if(!empty($get)){
            return back()->with('nm','Name Client Already Exist')->withInput();
        }
        $nm = time().'_'. $img->getClientOriginalName();
        $data= new TestimoniModel;
        $data->nm=$req->nm;
        $data->text=$req->desc;
        $data->star=$req->star;
        $data->negara=$req->negara;
        $data->img=$this->PATH_FILE_DB.$nm;
        $data->save();
        Storage::putFileAs($this->PATH_FILE_DB, $img, $nm);
        return redirect('cms/testimoni')->with(['success'=>'Success Adding Testimoni']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cms.preview.preview-testimoni',['data'=>TestimoniModel::find($id)]);
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
        $get = TestimoniModel::where('nm',$req->nm)->first();
        if(!empty($get)){
            if($get->id == $id && $get->nm == $req->nm){
                if(!empty($req->file('logo'))){
                $img = $req->file('logo');
                $nm = time().'_'. $img->getClientOriginalName();
                $cek = getimagesize($img);
                if($cek[0] != 200 && $cek[1] != 200){
                    return back()->with('modal_file','Size Resolution Should be
                    200 x 200 ')->withInput()->with('modalId',$id);
                }
                $data = TestimoniModel::find($id);
                $data->nm=$req->nm;
                $data->negara=$req->negara;
                $data->text=$req->desc;
                $data->star=$req->star;
                $data->img=$this->PATH_FILE_DB.$nm;
                $data->save();
                Storage::putFileAs($this->PATH_FILE_DB, $img, $nm);
                return redirect('cms/testimoni')->with(['success'=>'Success Updating Client']);
            }else{
                    $data = TestimoniModel::find($id);
                    $data->nm=$req->nm;
                    $data->negara=$req->negara;
                    $data->text=$req->desc;
                    $data->star=$req->star;
                    $data->save();
                    return redirect('cms/testimoni')->with(['success'=>'Success Updating Client']);

                }
            }else{
                return back()->with('nm_update','Name Client Already Exist')->withInput()->with('modalId',$id);
            }
            }else{
                if(!empty($req->file('logo'))){
                    $img = $req->file('logo');
                    $nm = time().'_'. $img->getClientOriginalName();
                    $cek = getimagesize($img);
                    if($cek[0] != 200 && $cek[1] != 200){
                        return back()->with('modal_file','Size Resolution Should be
                        200 x 200 ')->withInput()->with('modalId',$id);
                    }
                    $data = TestimoniModel::find($id);
                    $data->nm=$req->nm;
                    $data->negara=$req->negara;
                    $data->text=$req->desc;
                    $data->star=$req->star;
                    $data->img=$this->PATH_FILE_DB.$nm;
                    $data->save();
                    Storage::putFileAs($this->PATH_FILE_DB, $img, $nm);
                    return redirect('cms/testimoni')->with(['success'=>'Success Updating Client']);
                }else{
                        $data = TestimoniModel::find($id);
                        $data->nm=$req->nm;
                        $data->negara=$req->negara;
                        $data->text=$req->desc;
                        $data->star=$req->star;
                        $data->save();
                        return redirect('cms/testimoni')->with(['success'=>'Success Updating Client']);
    
                    }
                
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
        TestimoniModel::where('id',$id)->delete();
        return redirect('cms/testimoni')->with(['success'=>'Success Deleting Client']);;
    }
}
