<?php

namespace App\Http\Controllers\Cpanel\Admin;

use App\Models\Role;
use App\Models\Admin;
use App\Models\AdminRole;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\AdminRequest;
use App\Http\Requests\Admin\AdminUpdateRequest;

class AdminController extends Controller
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
            ['name'=>"Admin"],
            ['name'=>"View"],
        ];
        $admins=Admin::all();
        return view('cpanel.admin.index',compact('breadcrumbs','admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumbs = [
            ['name'=>"Home"], 
            ['name'=>"Admin "],
            ['name'=>"Add "],
           
        ];

        return view('cpanel.admin.create',compact('breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
  
                Admin::create([
                    'name' => $request->name,   
                    'email' => $request->email, 
                    'password' => Hash::make($request->password) ,
                    'active' => $request->active,
                    'image' => $request->image!=null?$this->uploadeImage($request):'',
                ])->roles()->attach($request->role);
            
        return redirect('cpanel/admin/admin-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        $breadcrumbs = [
            ['name'=>"Home"],
            ['name'=>"Admin"],
            ['name'=>"Edit"]
        ];
        return view('cpanel.admin.edit',compact('breadcrumbs','admin'));
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
                    
                    $admin->password = Hash::make($request->password) ;
    
                    $admin->active = $request->active;

                    $request->image!=null? $admin->image = $this->uploadeImage($request):'';
               
                    $admin->roles()->detach();
                    $admin->roles()->attach($request->role);
                    $admin->save();
       
        return redirect('cpanel/admin/admin-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->image==null?"" : unlink($admin->image);
        $admin->delete();

        return redirect('cpanel/admin/admin-index')->with('message', 'Delet Admin is success');
    }
    private function uploadeImage(Request $request)
    {
        
        $imageName = time().".png";

        $path ="storage/". $request->file('image')->storeAs('uploads/Admin', $imageName, 'public');
    
        return $path;
    }
}
