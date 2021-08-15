<?php

namespace App\Http\Controllers;

use App\Models\SliderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderImageControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $PATH_FILE_DB = "public/slider/";
    public function index()
    {
        return view('cms.slider.slider',['data'=>SliderModel::get()]);
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
        
        if($cek[0] != 1920 && $cek[1] != 1280){
            return back()->with('fail','Size Resolution Should be
            1920px x 1280px ')->withInput();
        }
        $nm = time().'_'. $img->getClientOriginalName();
        $get = SliderModel::get();
        $data= new SliderModel;
        $data->position='Position '.count($get)+1;
        $data->text1=$req->field_1;
        $data->text2=$req->field_2;
        $data->text3=$req->field_3;
        $data->text4=$req->field_4;
        $data->img=$this->PATH_FILE_DB.$nm;
        $data->save();
        Storage::putFileAs($this->PATH_FILE_DB, $img, $nm);
        return redirect('cms/slider')->with(['success'=>'Success Adding Slider']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cms.preview.preview-slider',['data'=>SliderModel::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req, $id)
    {


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
        
        if($cek[0] != 1920 && $cek[1] != 1280){
            return back()->with('modal','Size Resolution Should be
            1920px x 1280px')->with('modalId',$id);
        }
        $nm = time().'_'. $img->getClientOriginalName();
         $data = SliderModel::find($id);
         $data->text1 = $req->field_1;
         $data->text2 = $req->field_2;
         $data->text3 = $req->field_3;
         $data->text4 = $req->field_4;
         $data->img=$this->PATH_FILE_DB.$nm;
         $data->save();
         Storage::putFileAs($this->PATH_FILE_DB, $img, $nm);
         return redirect('cms/slider')->with(['success'=>'Success Updating Slider']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SliderModel::where('id',$id)->delete();
        $get = SliderModel::get();
        if(count($get)<1){
            return redirect('cms/slider');
        }else{
            $c = 1;
            foreach($get as $data){
                $data->position = 'Positon '.$c;
                $data->save();
                $c++;
            }
            return redirect('cms/slider')->with(['success'=>'Success Deleting Slider']);;
        }
    }
}
