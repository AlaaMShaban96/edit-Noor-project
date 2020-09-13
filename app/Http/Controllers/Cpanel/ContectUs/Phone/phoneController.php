<?php

namespace App\Http\Controllers\Cpanel\ContectUs\Phone;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContectUs\Phone\PhoneRequest;
use App\Models\PhoneNumber;

class phoneController extends Controller
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
            ['link'=>"phone",'name'=>"Phone"]
        ];
        $phone = PhoneNumber::all();
        return view('cpanel.contectUs.phone.index',compact('phone','breadcrumbs'));
        // return response([ 'success' => true,compact('phone','breadcrumbs')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cpanel.contectUs.phone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhoneRequest $request)
    {
        //
        $phoneNumber = new PhoneNumber();
        $phoneNumber->footer_id = '1';
        $phoneNumber->phone = $request->phone;
        $phoneNumber->save();

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
        $breadcrumbs = [
            ['link'=>"dashboard",'name'=>"Home"],
            ['link'=>"phone",'name'=>"Phone"]
        ];
        $phoneNumber = PhoneNumber::find($id);
        return view('cpanel.contectUs.phone.edit', compact('phoneNumber','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PhoneRequest $request, $id)
    {
        
        $phoneNumber = PhoneNumber::find($id);
        $phoneNumber->phone = $request->phone;
        $phoneNumber->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phoneNumber = PhoneNumber::find($id);
        $phoneNumber->delete();

        return redirect('cpanel/admin/phone');
    }
}
