<?php

namespace App\Http\Controllers\Cpanel\Profile;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\AdminRequest;
use App\Http\Requests\Profile\ProfileRequest;
use App\Http\Requests\Admin\AdminUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = [
            ['name'=>"Home"],
            ['name'=>"Profile"],
        ];
        return view('cpanel.profile.index',compact('breadcrumbs'));
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
    public function update(AdminUpdateRequest $request,Admin $admin)
    {
       
    
        $admin->name = $request->name; 
        
        // $admin->email = $request->email; 
        
        $ $admin->password = Hash::make($request->password) ;

        $admin->active = $request->active;

        $request->image!=null? $admin->image = $this->uploadeImage($request):'';
    
        $admin->roles()->detach();
        $admin->roles()->attach($request->role);
        $admin->save();

       return redirect()->back()->with('message', 'Update Your Informtion');;
    
    }
    private function uploadeImage(Request $request)
    {
        
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads/Admin', $imageName, 'public');
    
        return $path;
    }

}
