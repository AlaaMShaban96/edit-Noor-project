<?php

namespace App\Http\Controllers\Cpanel\Items;

use App\Models\Item;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\ItemTranslation;
use App\Http\Controllers\Controller;
use App\Http\Requests\Item\ItemRequest;

class ItemController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SubCategory $subcategory)
    {
        $breadcrumbs = [
            ['link'=>"/cpanel/admin/",'name'=>"Home"],
            ['link'=>"/cpanel/admin/category",'name'=>"Category "],
            ['link'=>"/cpanel/admin/subcategory/".$subcategory->category->id."/category",'name'=>"Sub Categor "],
            ['name'=>"Items "],
        ];
        $ids=array();
        foreach ($subcategory->items as  $item) {
            array_push($ids,$item->id );
        }
        // dd($ids);
        $items=ItemTranslation::whereIn('item_id',$ids)->get();
        return view('cpanel.item.index', compact('items','breadcrumbs','subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Category::all();
        return view('item.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
        
        $item = new Item();
        $item->admin_id = auth('admin')->user()->id;
        $item->sub_category_id = $request->sub_category_id;
        if ($request->image != null) {
            $item->image=$this->uploadeImage( $request);
        }
        $item->save();
        foreach ($request->language_codes as $key => $code) {
            
            $translation=new ItemTranslation();
            $translation->item_id=$item->id;
            $translation->name=$request->names[$key];
            $translation->language_code=$code;
            $translation->save();
        }
       return redirect()->back()->with('message', 'Create Item  is success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $breadcrumbs = [
            ['name'=>"Home"],
            ['name'=>"Categories "],
            ['name'=>"Sub Categor "],
            ['name'=>"Items "],
            ['name'=>"Edit "],
        ];
        return view('cpanel.item.edit', compact('item','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemRequest $request, Item $item)
    {
      
        if ($request->image != null) {
            unlink($item->image);
            $item->image=$this->uploadeImage( $request);
            $item->save();
        }
        $item->sub_category_id = $request->sub_category_id;
        

        foreach ($item->itemTranslation as $key=> $translation) {
            
            $translation->item_id=$item->id;
            $translation->name=$request->names[$key];
            $translation->save();
        }
        return redirect('cpanel/admin/item/'.$item->sub_category_id.'/subcategory')->with('message', 'Update Item  is success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $sub_category_id=$item->sub_category_id;
        $item->itemTranslation()->delete();
        $item->image==null?"":unlink($item->image);
        $item->delete();
        return redirect('cpanel/admin/item/'.$sub_category_id.'/subcategory')->with('message', 'Update Item  is success');
    }
    private function uploadeImage(Request $request)
    {
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads/items', $imageName, 'public');
    
        return $path;
    }
}
