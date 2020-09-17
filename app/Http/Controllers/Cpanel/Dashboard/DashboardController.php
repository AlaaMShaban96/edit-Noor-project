<?php

namespace App\Http\Controllers\Cpanel\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\OurPartners;
use App\Models\Supplier;
use App\Models\Post;
use App\Models\Job;
use App\Models\RecruitmentForm;
class DashboardController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins  = Admin::all()->count();
        $categoies = Category::all()->count();
        $partners = OurPartners::all()->count();
        $suppliers = Supplier::all()->count();
        $posts = Post::all()->count();
        $jobs = Job::all()->count();
        $recruitmentForm = RecruitmentForm::all()->count();
        
        return view('cpanel.dashboard.index',compact('admins','categoies','partners','suppliers','posts','jobs','recruitmentForm'));
    }
    
}

