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
            ['link'=>"cpanel/admin",'name'=>"Home"],
            ['name'=>"Contact Us "],
            ['name'=>"Address"]
        ];

        $address = OurAddressTranslation::all();
        return view('cpanel.contectUs.address.index',compact('address','breadcrumbs'));
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
        if ($request->exists('footer_id')) {

            foreach ($request->name as $key => $value) {
                $address = OurAddressTranslation::find($request->id[$key]);
                $address->language_code = $request->language_code;
                $address->language_code->ourAddress->footer_id = $request->footer_id;
                $address->name = $value;
                $address->save();
            }
            $date='Update Address is success';
        }else {

            foreach ($request->name as $key => $value) {
                if ($value==null) {
                break;
                }
                $address = new OurAddress();
                $address->footer_id = 1;
                $address->save();

                $ourAddressTranslation = new OurAddressTranslation();
                $ourAddressTranslation->language_code = $request->language_code;
                $ourAddressTranslation->our_address_id = $address->id;
                $ourAddressTranslation->name = $value== null?"":$value;
                $ourAddressTranslation->save();
            }

            $date='Create Address is success';
        }

        return redirect()->back()->with('message',$date);
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
    public function destroy()
    {
        OurAddressTranslation::query()->delete();
        OurAddress::query()->delete();

        return redirect('cpanel/admin/address')->with('message','Reset Address is success');
    }
}
