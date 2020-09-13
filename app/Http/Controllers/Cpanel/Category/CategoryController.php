<?php

namespace App\Http\Controllers\Cpanel\Category;

use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $breadcrumbs = [
            ['link'=>"dashboard",'name'=>"Home"],
            ['name'=>"Categories "]
        ];
        $categories=CategoryTranslation::all();
        return view('cpanel.category.index',compact('categories','breadcrumbs'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
  
        
        $category = new Category();
        $category->admin_id = 1;
        if ($category->image != null){
            $category->image=$this->uploadeImage($request);
        }
        $category->save();

        foreach ($request->language_codes as $key => $code) {
            
            $translation=new CategoryTranslation();
            $translation->category_id=$category->id;
            $translation->name=$request->names[$key];
            $translation->description=$request->descriptions[$key];
            $translation->language_code=$code;
            $translation->save();
        }
       
       return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // return $category->categoryTranslation;
        return view('cpanel.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"], 
            ['name'=>"Categories "],
            ['name'=>"Edit "]
        ];
        return view('cpanel.category.edit', compact('category','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request , Category $category)
    {
        
      
        if ($request->image != null) {
            $category->image=$this->uploadeImage($request);
            $category->save();
        }
        foreach ($category->categoryTranslation as $key=> $translation) {
            
            $translation->category_id=$category->id;
            $translation->name=$request->names[$key];
            $translation->description=$request->descriptions[$key];
            
            $translation->save();
        }
       return redirect('cpanel/admin/category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->categoryTranslation()->delete();
        $category->image==null?"" : unlink($category->image);
        $category->delete();

        return redirect('cpanel/admin/category');

    }
    private function uploadeImage(Request $request)
    {
        
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads/Category', $imageName, 'public');
    
        return $path;
    }
}
