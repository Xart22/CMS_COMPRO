<?php

use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\DataPerusahaanControllers;
use App\Http\Controllers\InboxControllers;
use App\Http\Controllers\IntroControllers;
use App\Http\Controllers\PartnerControllers;
use App\Http\Controllers\PopupControllers;
use App\Http\Controllers\ProdukControllers;
use App\Http\Controllers\SliderImageControllers;
use App\Http\Controllers\SocialControllers;
use App\Http\Controllers\TestimoniControllers;
use App\Http\Controllers\web\allControllers;
use App\Models\ProdukModel;
use App\Models\SocialModel;
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


// WEB
Route::get('/', [allControllers::class,'index'])->name('home');
Route::get('/about', [allControllers::class,'about'])->name('about');
Route::get('/product/{id}',[allControllers::class,'showProduk'])->name('produk_view');
Route::get('/contact',[allControllers::class,'contact'])->name('contact_view');
Route::post('/send',[allControllers::class,'send'])->name('send_email');






Route::prefix('/cms')->group(function () {
    //AUTH Manual 
Route::get('/login', [AuthControllers::class,'index'])->name('login');
Route::post('/login',[AuthControllers::class,'create'])->name('auth_login');
Route::get('/logout', [AuthControllers::class,'destroy'])->name('logout');

Route::middleware(['CheckAuth'])->group(function (){

    Route::get('/dashboard',[DashboardControllers::class,'index'])->name('dashboard');


    //Slider FIX
    Route::get('/slider',[SliderImageControllers::class,'index'])->name('slider');
    Route::post('/create/slider',[SliderImageControllers::class,'store'])->name('create_slider');
    Route::get('/preview/slider/{id}',[SliderImageControllers::class,'show'])->name('preview_slider');
    Route::post('/edit/slider/{id}',[SliderImageControllers::class,'update'])->name('edit_slider');
    Route::get('/delete/slider/{id}',[SliderImageControllers::class,'destroy'])->name('delete_slider');

    //Intro FIX
    Route::get('/intro',[IntroControllers::class,'index'])->name('intro');
    Route::post('/create/intro',[IntroControllers::class,'store'])->name('create_intro');
    Route::get('/preview/intro',[IntroControllers::class,'show'])->name('preview_intro');
    Route::post('/edit/intro/{id}',[IntroControllers::class,'update'])->name('edit_intro');

    //Partner FIX
    Route::get('/partner',[PartnerControllers::class,'index'])->name('partner');
    Route::post('/create/partner',[PartnerControllers::class,'store'])->name('create_partner');
    Route::get('/preview/partner',[PartnerControllers::class,'show'])->name('preview_partner');
    Route::post('/edit/partner/{id}',[PartnerControllers::class,'update'])->name('edit_partner');
    Route::get('/delete/partner/{id}',[PartnerControllers::class,'destroy'])->name('delete_partner');


    //Testimoni FIX
    Route::get('/testimoni',[TestimoniControllers::class,'index'])->name('testimoni');
    Route::post('/create/testimoni',[TestimoniControllers::class,'store'])->name('create_testimoni');
    Route::get('/preview/testimoni/{id}',[TestimoniControllers::class,'show'])->name('preview_testimoni');
    Route::post('/edit/testimoni/{id}',[TestimoniControllers::class,'update'])->name('edit_testimoni');
    Route::get('/delete/testimoni/{id}',[TestimoniControllers::class,'destroy'])->name('delete_testimoni');

    //Produk
    Route::get('/produk',[ProdukControllers::class,'index'])->name('produk');
    Route::post('/create/produk',[ProdukControllers::class,'store'])->name('create_produk');
    Route::get('/preview/produk/{id}',[ProdukControllers::class,'show'])->name('preview_produk');
    Route::post('/edit/produk/{id}',[ProdukControllers::class,'update'])->name('edit_produk');
    Route::get('/delete/produk/{id}',[ProdukControllers::class,'destroy'])->name('delete_produk');


    // Pop Up FIX
    Route::get('/popup',[PopupControllers::class,'index'])->name('popup');
    Route::post('/create/popup',[PopupControllers::class,'store'])->name('create_popup');
    Route::post('/edit/popup/{id}',[PopupControllers::class,'update'])->name('edit_popup');

    //Data Perusahaan FIX
    Route::get('/data-perusahaan',[DataPerusahaanControllers::class,'index'])->name('data_perusahaan');
    Route::post('/create/data-perusahaan',[DataPerusahaanControllers::class,'store'])->name('create_data_perusahaan');
    Route::post('/edit/data-perusahaan/{id}',[DataPerusahaanControllers::class,'update'])->name('edit_data_perusahaan');


    //Social
    Route::get('/social',[SocialControllers::class,'index'])->name('social');
    Route::post('/create/social',[SocialControllers::class,'store'])->name('create_social');
    Route::post('/edit/social/{id}',[SocialControllers::class,'update'])->name('edit_social');

    //Inbox
    Route::get('/inbox',[InboxControllers::class,'index'])->name('inbox');
});
});