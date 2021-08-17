<?php

namespace App\Http\Controllers;

use App\Models\DataPerusahaanModel;
use App\Models\SocialModel;
use Illuminate\Http\Request;

class SocialControllers extends Controller
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
        return view('cms.social.social',['data'=>SocialModel::first()]);
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
        $data = new SocialModel;
        $data->facebook = $req->fb;
        $data->twiter = $req->tw;
        $data->instagram = $req->ig;
        $data->linkedin = $req->li;
        $data->save();
        return redirect('cms/social')->with(['success'=>'Success Adding Social Media']);

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
        $data = SocialModel::find($id);
        $data->facebook = $req->fb;
        $data->twiter = $req->tw;
        $data->instagram = $req->ig;
        $data->linkedin = $req->li;
        $data->save();
        return redirect('cms/social')->with(['success'=>'Success Updating Social Media']);

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
