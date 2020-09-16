<?php

namespace App\Http\Controllers\Cpanel\Profile;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\AdminRequest;
use App\Http\Requests\Profile\ProfileRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('cpanel.profile.index', [
            'pageConfigs' => $pageConfigs
        ]);
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
    public function update(AdminRequest $request,Admin $admin)
    {
        $validator=[
            'error'=>'Enter Sane Password'
        ];
       
        if ($request->password == $request->passwordConfrim) {
            
                
                    $admin->name = $request->name; 
                    
                    $admin->email = $request->email; 
                    
                    $admin->password =$request->password==$admin->password? $admin->password : Hash::make($request->password) ;
    
                    $admin->active = $request->active;

                    $request->image!=null? $admin->image = $this->uploadeImage($request):'';
               
                    $admin->roles()->attach($request->role);
                    $admin->save();

           
        }else {
            return redirect()->back()->withErrors($validator);
        }
       return redirect()->back()->with('message', 'Update Your Informtion');;
        // return redirect('cpanel/admin/admin-index');
    }
    private function uploadeImage(Request $request)
    {
        
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads/Admin', $imageName, 'public');
    
        return $path;
    }

}
