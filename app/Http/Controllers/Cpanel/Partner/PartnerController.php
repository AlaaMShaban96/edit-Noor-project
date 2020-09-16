<?php

namespace App\Http\Controllers\Cpanel\Partner;

use App\Models\OurPartners;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OurPartnersTranslation;
use App\Http\Requests\Partner\PartnerRequest;

class PartnerController extends Controller
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
            ['name'=>"Partner "] 
        ];
        $partners= OurPartnersTranslation::all();
        return view('cpanel.partner.index', compact('partners','breadcrumbs'));

        
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
    public function store(PartnerRequest $request)
    {
        $partner = new OurPartners();  
        $partner->image=$request->image!=null?$this->uploadeImage($request):'';
        $partner->save();

        foreach ($request->language_codes as $key => $code) {
            
            $translation=new OurPartnersTranslation();
            $translation->our_partners_id=$partner->id;
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
    public function edit(OurPartners $partner)
    {
        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"], 
            ['name'=>"Partners "],
            ['name'=>"Edit "]
        ];
        return view('cpanel.partner.edit', compact('partner','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PartnerRequest $request, OurPartners $partner)
    {
        
        if ($request->image != null) {

            $partner->image=$this->uploadeImage($request);
            $partner->save();
            
        }
      
    

        foreach ($partner->ourPartnersTranslation as $key=> $translation) {
            
            $translation->our_partners_id=$partner->id;
            $translation->name=$request->names[$key];
            $translation->description=$request->descriptions[$key];
            
            $translation->save();
        }
       
       return redirect('cpanel/admin/partner');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurPartners $partner)
    {
        $partner->ourPartnersTranslation()->delete();
        unlink($partner->image);
        $partner->delete();

        return redirect('cpanel/admin/partner');
    }
    private function uploadeImage(Request $request)
    {
        
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads/partner', $imageName, 'public');
    
        return $path;
    }
}
