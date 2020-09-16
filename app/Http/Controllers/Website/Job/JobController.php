<?php

namespace App\Http\Controllers\Website\Job;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\EmailRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public $email="ala96ala96@gmail.com";
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
    public function apply(Request $request , Job $job)
    {
        $title=$request->title;
        return view('website.job.apply',compact('job','title'));
    }
    public function detils(Job $job)
    {
        
        return view('website.job.detils',compact('job'));
    }
    public function sendCv(EmailRequest $request)
    {
        $email=$this->email;
        $title=$request->title;
        $cv_path=$this->uploadeImage($request);
        Mail::send("emails.sendCv",compact('request'), function($message) use ($email,$title,$cv_path )   {

            $message->to($email)->subject("job".$title);
            $message->to($email)->attach(public_path($cv_path), [
                'as' => 'cv.pdf',
                'mime' => 'application/pdf',], public_path('website/images/favicon-medical.png'), [
                    'as' => 'logo.png']);     
            });
                
           
            return redirect()->back()->with('message', 'CV was sent successfully');
    }
    private function uploadeImage(Request $request)
    {
        
        $imageName = time().".png";

        $path ="storage/". $request->file('cv')->storeAs('uploads/Cvs', $imageName, 'public');
    
        return $path;
    }
}
