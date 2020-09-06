<?php

namespace App\Http\Controllers\Website\Home;

use Illuminate\Http\Request;
use App\Models\PostTranslation;
use App\Models\SlideTranslation;
use App\Models\CategoryTranslation;
use App\Http\Controllers\Controller;
use App\Models\OurPartnersTranslation;

class HomeController extends Controller
{
    public function index()
    {
        $categoies= CategoryTranslation::all();
        $sliders  = SlideTranslation::all();
        $posts    = PostTranslation::orderBy('id', 'asc')->take(5)->get();
        $partners = OurPartnersTranslation::all();
        return view('website.home.index',compact('categoies','sliders','posts','partners'));
    }
}
