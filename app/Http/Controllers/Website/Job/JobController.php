<?php

namespace App\Http\Controllers\Website\Job;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $jobs= Job::all();
        return view('website.job.index',compact('jobs'));
    }
    public function apply(Job $job)
    {
        return view('website.job.apply',compact('job'));
    }
    public function detils(Job $job)
    {
        return view('website.job.detils',compact('job'));
    }
}
