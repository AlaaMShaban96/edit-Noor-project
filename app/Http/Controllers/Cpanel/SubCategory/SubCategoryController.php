<?php

namespace App\Http\Controllers\Cpanel\SubCategory;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategoryTranslation;
use App\Http\Requests\SubCategory\SubCategoryRequest;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],
            ['name'=>"Categories "],
            ['name'=>"Sub Category "],
        ];
        $ids=array();
        foreach ($category->subCategories as  $subCategory) {
            array_push($ids,$subCategory->id );
        }
        // dd($ids);
        $subCategories=SubCategoryTranslation::whereIn('sub_category_id',$ids)->get();
        return view('cpanel.subcategory.index', compact('subCategories','breadcrumbs','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryRequest $request)
    {
        $subCategory = new SubCategory();
        $subCategory->admin_id = 1;
        $subCategory->category_id = $request->category_id;
        if ($request->image != null) {
            $subCategory->image=$this->uploadeImage( $request);
        }
        $subCategory->save();
        foreach ($request->language_codes as $key => $code) {
            
            $translation=new SubCategoryTranslation();
            $translation->sub_category_id=$subCategory->id;
            $translation->name=$request->names[$key];
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
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategory)
    {
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],
            ['name'=>"Categories "],
            ['name'=>"Sub Categor "],
            ['name'=>"Edit "],
        ];
        return view('cpanel.subcategory.edit', compact('subcategory','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubCategoryRequest $request, SubCategory $subcategory)
    {
        if ($request->image != null) {
            $subcategory->image==null?"":unlink($subcategory->image);
            $subcategory->image=$this->uploadeImage( $request);
            $subcategory->save();
        }
        $subcategory->category_id = $request->category_id;
        

        foreach ($subcategory->subCategoryTranslation as $key=> $translation) {
            
            $translation->sub_category_id=$subcategory->id;
            $translation->name=$request->names[$key];
            $translation->save();
        }
        return redirect('cpanel/admin/subcategory/'.$subcategory->category_id.'/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subcategory)
    {
        $category_id=$subcategory->category_id;
        $subcategory->subCategoryTranslation()->delete();
        unlink($subcategory->image);
        $subcategory->delete();
        return redirect('cpanel/admin/subcategory/'.$category_id.'/category');
    }
    private function uploadeImage(Request $request)
    {
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads/SubCategory', $imageName, 'public');
    
        return $path;
    }
}
