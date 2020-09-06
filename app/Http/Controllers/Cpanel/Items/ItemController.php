<?php

namespace App\Http\Controllers\Cpanel\Items;

use App\Models\Item;
use App\Models\Category;
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
    public function index(Category $category)
    {
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],
            ['name'=>"Categories "],
            ['name'=>"Items "],
        ];
        $ids=array();
        foreach ($category->items as  $item) {
            array_push($ids,$item->id );
        }
        // dd($ids);
        $items=ItemTranslation::whereIn('item_id',$ids)->get();
        return view('cpanel.item.index', compact('items','breadcrumbs','category'));
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
        $item->admin_id = 1;
        $item->category_id = $request->category_id;
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
       return redirect()->back();
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
            ['link'=>"dashboard-analytics",'name'=>"Home"],
            ['name'=>"Categories "],
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
        $item->category_id = $request->category_id;
        

        foreach ($item->itemTranslation as $key=> $translation) {
            
            $translation->item_id=$item->id;
            $translation->name=$request->names[$key];
            $translation->save();
        }
        return redirect('cpanel/admin/item/'.$item->category_id.'/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $category_id=$item->category_id;
        $item->itemTranslation()->delete();
        unlink($item->image);
        $item->delete();
        return redirect('cpanel/admin/item/'.$category_id.'/category');
    }
    private function uploadeImage(Request $request)
    {
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads/items', $imageName, 'public');
    
        return $path;
    }
}
