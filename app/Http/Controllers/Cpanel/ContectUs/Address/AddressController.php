<?php

namespace App\Http\Controllers\Cpanel\ContectUs\Address;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContectUs\Address\AddressRequest;
use App\Models\OurAddress;
use App\Models\OurAddressTranslation;

class AddressController extends Controller
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
            ['link'=>"dashboard",'name'=>"Home"],
            ['link'=>"dashboard",'name'=>"Contact Us "],
            ['link'=>"address",'name'=>"Address"]
        ];

        $ourAddressTranslation = OurAddressTranslation::all();
        return view('cpanel.contectUs.address.index',compact('ourAddressTranslation','breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpanel.contectUs.address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddressRequest $request)
    {
        $address = new OurAddress();
        $address->footer_id = 1;
        $address->save();

        $ourAddressTranslation = new OurAddressTranslation();
        $ourAddressTranslation->our_address_id = $address->id;
        $ourAddressTranslation->language_code = "en";
        $ourAddressTranslation->name = $request->name;
        $ourAddressTranslation->save();

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
        $breadcrumbs = [
            ['link'=>"dashboard",'name'=>"Home"],
            ['link'=>"dashboard",'name'=>"Contact Us "],
            ['link'=>"address",'name'=>"Address"]
        ];
        $ourAddress = OurAddress::find($id);
        return view('cpanel.contectUs.address.edit', compact('ourAddress','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddressRequest $request,OurAddress $address)
    {
       
       foreach ($address->ourAddressTranslation as $key=> $translation) {
           $translation->name = $request->name[$key];
           $translation->save();
       }
       return redirect('cpanel/admin/address');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurAddress $address)
    {
        $address->ourAddressTranslation()->delete();
        $address->delete();

        return redirect('cpanel/admin/address');
    }
}
