<?php

namespace App\Http\Controllers\Cpanel\Supplier;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\SupplierRequest;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],
            ['name'=>"Supplier "],
        ];
        $suppliers=Supplier::all();
        return view('cpanel.supplier.index',compact('suppliers','breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierRequest $request)
    {

        Supplier::create([
            "name"=>$request->name,
            "facebook"=>$request->facebook,
            "website"=>$request->website,
            "twitter"=>$request->twitter,
            "linkedin"=>$request->linkedin,
            "image"=>$request->image==null?"":$this->uploadeImage($request),
        ]);
        
       return redirect('cpanel/admin/supplier');
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
    public function edit(Supplier $supplier)
    {
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"],
            ['name'=>"Supplier "],
            ['name'=>"Edit "],
        ];
       
        return view('cpanel.supplier.edit',compact('supplier','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SupplierRequest $request, Supplier $supplier)
    {
        $supplier->name=$request->name;
        $supplier->twitter=$request->twitter;
        $supplier->facebook=$request->facebook;
        $supplier->linkedin=$request->linkedin;
        $supplier->website=$request->website;
        $supplier->image=$request->image==null?$supplier->image:$this->uploadeImage($request);
        $supplier->save();
        return redirect('cpanel/admin/supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {

        unlink($supplier->image);
        $supplier->delete();
        return redirect('cpanel/admin/supplier');
    }
    private function uploadeImage(Request $request)
    {
        
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads/Category', $imageName, 'public');
    
        return $path;
    }
}
