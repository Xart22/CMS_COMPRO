<?php

namespace App\Http\Controllers;

use App\Models\DataPerusahaanModel;
use App\Models\IntroModel;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class IntroControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPerusahaan = DataPerusahaanModel::first();
        view()->share('dataPerusahaan',$dataPerusahaan);
        return view('cms.intro.intro',['data'=>IntroModel::first()]);
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
        IntroModel::insert([
           'paragraf_1'=>$req->p_1,
           'paragraf_2'=>$req->p_2,
           'paragraf_3'=>$req->p_3,
           'paragraf_4'=>$req->p_4,
        ]);
        return redirect('cms/intro')->with(['success'=>'Success Adding Intro']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        return view('cms.preview.preview-intro',['data'=>IntroModel::first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
       $intro = IntroModel::find($id);
       $intro->paragraf_1 = $req->p_1;
       $intro->paragraf_2 = $req->p_2;
       $intro->paragraf_3 = $req->p_3;
       $intro->paragraf_4 = $req->p_4;
       $intro->save();
       return redirect('cms/intro')->with(['success'=>'Success Updating Intro']);;
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
