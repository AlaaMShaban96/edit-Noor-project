<?php

namespace App\Http\Controllers\Cpanel\RecruitmentForm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RecruitmentForm;

class RecruitmentFormController extends Controller
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

        return view('cpanel.recruitmentForm.index', [
            'pageConfigs' => $pageConfigs
        ]);
    }

}
