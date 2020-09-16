<?php

namespace App\Http\Controllers\Cpanel\Slider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\SliderUpdateRequest;
use App\Http\Requests\Slider\SliderRequest;
use App\Models\Slide;
use App\Models\SlideTranslation;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        
        $breadcrumbs = [
            ['link'=>"/cpanel/admin/",'name'=>"Home"],
            ['name'=>"Slider"]
        ];
        $slideTranslation=SlideTranslation::all();
        return view('cpanel.slider.index',compact('slideTranslation','breadcrumbs'));
        // return response([ 'success' => true,compact('slideTranslation','breadcrumbs')]); 
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cpanel.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        //
        $slide = new Slide();
        $slide->image = $this->uploadeImage($request);
        $slide->save();

        foreach ($request->language_codes as $key => $code) {   
            $slideTranslation = new SlideTranslation();
            $slideTranslation->slide_id = $slide->id;
            $slideTranslation->language_code = $code;
            $slideTranslation->name = $request->names[$key];
            $slideTranslation->description = $request->descriptions[$key];
            $slideTranslation->save();
        }
        return redirect()->back()->with('message', 'Create Slider  is success');
        // return response(['slide' => $slide,'SlideTranslation' => $slideTranslation]); 
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
    public function edit(Slide $slider)
    {
       
        //
        $breadcrumbs = [
            ['link'=>"/cpanel/admin/",'name'=>"Home"],
            ['link'=>"/cpanel/admin/slider",'name'=>"Slider"],
            ['name'=>"Edit"],
        ];
        
        return view('cpanel.slider.edit', compact('slider','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderUpdateRequest $request,Slide $slider)
    {
        //
      

        if ($request->image == null) {

        }else{
            $slider->image = $this->uploadeImage($request);
            $slider->save();
        }
        foreach ($slider->slideTranslation as $key=> $translation) {
            
            $translation->slide_id = $slider->id;
            $translation->name = $request->names[$key];
            $translation->description = $request->descriptions[$key];
            
            $translation->save();
        }
        return redirect('cpanel/admin/slider')->with('message', 'Update Slider  is success');

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
        $slide = Slide::find($id);

        $slide->slideTranslation()->delete();
        unlink($slide->image);
        $slide->delete();

        return redirect('cpanel/admin/slider')->with('message', 'Delete Slider  is success');

    }

    private function uploadeImage(Request $request)
    {
        
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads/Slider', $imageName, 'public');
    
        return $path;
    }
}
