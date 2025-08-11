<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\BannerAdsModel;
use App\Models\Backend\BannerSlideModel;

class HomeController extends Controller
{
    //
     public function index()
    {
        //  $slide = BannerSlideModel::where('status','on')->orderBy('id','desc')->get();
        $ads = BannerAdsModel::where('status','on')->orderBy('id','desc')->get();

         return view('home', compact('ads'));
    }
}
