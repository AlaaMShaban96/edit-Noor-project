<?php

namespace App\Http\Controllers\Website\News;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\PostTranslation;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=PostTranslation::all();
        return view('website.news.index',compact('posts'));
    }
    public function show(PostTranslation $post)
    {
        return view('website.news.show',compact('post'));
    }
}
