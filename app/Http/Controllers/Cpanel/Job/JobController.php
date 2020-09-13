<?php

namespace App\Http\Controllers\Cpanel\Job;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Job\JobRequest;
use App\Models\Job;
use App\Models\JobTranslation;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $breadcrumbs = [
            ['link'=>"dashboard",'name'=>"Home"],
            ['link'=>"job",'name'=>"Job"]
        ];
        $jobs = JobTranslation::all();
        return view('cpanel.job.index',compact('jobs','breadcrumbs'));
        // return response([ 'success' => true,compact('jobTranslation','breadcrumbs')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumbs = [
            ['link'=>"dashboard",'name'=>"Home"],
            ['name'=>"Job"],
            ['name'=>"Add"],
        ];
       
        return view('cpanel.job.create',compact('breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
       
        //
        $job = new Job();
        // $job->admin_id = auth('admin')->user()->id;
        $job->admin_id = 1;
        $job->our_address_id = 1;
        // $job->our_address_id = $request->our_address_id;
        // $job->gender = $request->gender;
      
        $job->save();
                                                
        foreach ($request->language_code as $key => $code) {   
            $jobTranslation = new JobTranslation();
            $jobTranslation->job_id = $job->id;
            $jobTranslation->language_code = $code;
            $jobTranslation->name = $request->name[$key];
            $jobTranslation->description = $request->description[$key];
            $jobTranslation->responsibility = $request->responsibility[$key];
            $jobTranslation->qualification = $request->qualification[$key];
            $jobTranslation->experience = $request->experience[$key];
            $jobTranslation->skills = $request->skills[$key];
            $jobTranslation->save();
        }
        return redirect()->back();
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
    public function edit(Job $job)
    {
        //
        $breadcrumbs = [
            ['link'=>"dashboard",'name'=>"Home"],
            ['name'=>"Job"],
            ['name'=>"Edit"]
        ];
        return view('cpanel.job.edit', compact('job','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, Job $job)
    {
        //
       
        // $job->admin_id = auth('admin')->user()->id;
        $job->admin_id = 1;
        $job->our_address_id = 1;
        // $job->our_address_id = $request->our_address_id;
        $job->gender = $request->gender;
        $job->save();
   
       foreach ($job->JobTranslation as $key=> $translation) {
           $translation->name = $request->name[$key];
           $translation->description = $request->description[$key];
           $translation->responsibility = $request->responsibility[$key];
           $translation->qualification = $request->qualification[$key];
           $translation->experience = $request->experience[$key];
           $translation->skills = $request->skills[$key];
           $translation->save();
       }
       return redirect('cpanel/admin/job');
       // return response()->json($translation);
       // return response(['slide' => $slide,'SlideTranslation' => $translation]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
        $job->JobTranslation()->delete();
        $job->delete();

        return redirect('cpanel/admin/job');
    }
}
