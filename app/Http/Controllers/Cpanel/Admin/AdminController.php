<?php

namespace App\Http\Controllers\Cpanel\Admin;

use App\Models\Role;
use App\Models\Admin;
use App\Models\AdminRole;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\AdminRequest;

class AdminController extends Controller
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

        return view('cpanel.admin.index', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //   
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('cpanel.admin.create', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        $request->validate([
            "email" => "unique:admins,email",
        ]);
        if ($request->password == $request->passwordConfrim) {
            if ($request->image!=null) {
                Admin::create([
                    'name' => $request->name, 
                    
                    'email' => $request->email, 
                    
                    'password' => Hash::make($request->password) ,
    
                    'active' => $request->active,
                    
                    
                    'image' => $this->uploadeImage($request),
    
                ])->roles()->attach($request->role);
            }else {
                Admin::create([
                    'name' => $request->name, 
                    
                    'email' => $request->email, 
                    
                    'password' => Hash::make($request->password) ,
    
                    'active' => $request->active,
                    
    
                ])->roles()->attach($request->role);
            }
        }else {
            dd('not same things');
        }
       
        dd('done');
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
    public function update(AdminRequest $request, $id)
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

        $path ="storage/". $request->file('image')->storeAs('uploads/Admin', $imageName, 'public');
    
        return $path;
    }
}
