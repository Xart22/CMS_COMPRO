<?php

namespace App\Http\Controllers;

use App\Models\DataPerusahaanModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.index',['data'=>DataPerusahaanModel::first()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $req->validate([
            'username'=>'required',
            'password'=>'required|min:5|max:12'
        ]);
        $usr = User::where('name',$req->username)->first();
        if (!$usr) {
            return back()->with('fail','Wrong username or password');
        } else {
            $cek = Hash::check($req->password, $usr->password);
            if($cek){
                $req->session()->put('loggedUser',$usr);
               // dd(session());
               date_default_timezone_set('Asia/Jakarta');
               $date = now();
               $update = User::find($usr->id);
               $update->last_login = $date;
               $update->save();
                return redirect('cms/dashboard');
            }else{
               return back()->with('fail','Wrong username or password');
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(Request $req)
    {
        if(session()->has('loggedUser')){
            session()->pull('loggedUser');
            return redirect('/');
        }
    }
}
