<?php

namespace App\Http\Controllers\Website\Partner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OurPartnersTranslation;

class PartnerController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners =OurPartnersTranslation::all();
        return view('website.partner.index',compact('partners'));
    }
}
