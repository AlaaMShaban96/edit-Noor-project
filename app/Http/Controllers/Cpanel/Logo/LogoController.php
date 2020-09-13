<?php

namespace App\Http\Controllers\Cpanel\Logo;

use App\Models\Logo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Logo\LogoRequest;

class LogoController extends Controller
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
            ['link'=>"dashboard",'name'=>"Contact Us "],
            ['link'=>"logo",'name'=>"Logo"]
        ];
        $logo = Logo::orderBy('id')->first();
      
        return view('cpanel.logo.index',compact('logo','breadcrumbs'));
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
    public function store(LogoRequest $request)
    {
        $logo=Logo::orderBy('id')->first();
        
        $logo==null?Logo::create(['image'=>$this->uploadeImage($request)]): $logo->image=$this->uploadeImage($request);$logo->save();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    private function uploadeImage(Request $request)
    {
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads/items', $imageName, 'public');
    
        return $path;
    }
}
