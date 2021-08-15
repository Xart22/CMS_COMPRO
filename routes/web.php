<?php

use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\DataPerusahaanControllers;
use App\Http\Controllers\IntroControllers;
use App\Http\Controllers\PartnerControllers;
use App\Http\Controllers\SliderImageControllers;
use App\Http\Controllers\TestimoniControllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('web.index');
});



//AUTH Manual 
Route::get('/login', [AuthControllers::class,'index'])->name('login');
Route::post('/login',[AuthControllers::class,'create'])->name('auth_login');

Route::prefix('/cms')->group(function () {
    Route::get('/dashboard',[DashboardControllers::class,'index'])->name('dashboard');


    //Slider Done
    Route::get('/slider',[SliderImageControllers::class,'index'])->name('slider');
    Route::post('/create/slider',[SliderImageControllers::class,'store'])->name('create_slider');
    Route::get('/preview/slider/{id}',[SliderImageControllers::class,'show'])->name('preview_slider');
    Route::post('/edit/slider/{id}',[SliderImageControllers::class,'update'])->name('edit_slider');
    Route::get('/delete/slider/{id}',[SliderImageControllers::class,'destroy'])->name('delete_slider');

    //Intro
    Route::get('/intro',[IntroControllers::class,'index'])->name('intro');
    Route::post('/create/intro',[IntroControllers::class,'store'])->name('create_intro');
    Route::get('/preview/intro',[IntroControllers::class,'show'])->name('preview_intro');
    Route::post('/edit/intro/{id}',[IntroControllers::class,'update'])->name('edit_intro');

    //Partner
    Route::get('/partner',[PartnerControllers::class,'index'])->name('partner');
    Route::post('/create/partner',[PartnerControllers::class,'store'])->name('create_partner');
    Route::get('/preview/partner',[PartnerControllers::class,'show'])->name('preview_partner');
    Route::post('/edit/partner/{id}',[PartnerControllers::class,'update'])->name('edit_partner');
    Route::get('/delete/partner/{id}',[PartnerControllers::class,'destroy'])->name('delete_partner');

    //Produk

    //Testimoni
    Route::get('/testimoni',[TestimoniControllers::class,'index'])->name('testimoni');
    Route::post('/create/testimoni',[TestimoniControllers::class,'store'])->name('create_testimoni');

    //Data Perusahaan
    Route::get('/data-perusahaan',[DataPerusahaanControllers::class,'index'])->name('data_perusahaan');
    Route::post('/create/data-perusahaan',[DataPerusahaanControllers::class,'store'])->name('create_data_perusahaan');
    Route::post('/edit/data-perusahaan/{id}',[DataPerusahaanControllers::class,'update'])->name('edit_data_perusahaan');

});