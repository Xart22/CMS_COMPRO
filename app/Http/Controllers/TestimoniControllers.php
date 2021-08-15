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
        $nm = time().'_'. $img->getClientOriginalName();
        $data= new TestimoniModel;
        $data->nm=$req->nm;
        $data->text=$req->desc;
        $data->star=$req->star;
        $data->negara=$req->negara;
        $data->img=$this->PATH_FILE_DB.$nm;
        $data->save();
        Storage::putFileAs($this->PATH_FILE_DB, $img, $nm);
        return redirect('/testimoni')->with(['success'=>'Success Adding Testimoni']);
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
    public function update(Request $request, $id)
    {
        //
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
