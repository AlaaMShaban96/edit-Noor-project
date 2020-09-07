<?php

namespace App\Http\Controllers\Website\ContectUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContectUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('website.contectUs.index');
    }
}
