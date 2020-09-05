<?php

namespace App\Http\Controllers\Cpanel\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('cpanel.dashboard.index', [
            'pageConfigs' => $pageConfigs
        ]);
    }
    
}

