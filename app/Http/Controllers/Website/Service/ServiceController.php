<?php

namespace App\Http\Controllers\Website\Service;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('website.category.index',compact('categories'));
    }
    public function show(SubCategory $subCategory)
    {
       
        return view('website.category.subcategory.item.index',compact('subCategory'));
    }
    public function showSubCategory(Category $category)
    {
        return view('website.category.subcategory.index',compact('category'));
    }
}
