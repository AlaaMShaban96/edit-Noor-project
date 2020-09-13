<?php

namespace App\Http\Controllers\Cpanel\ContectUs\Email;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContectUs\Email\EmailRequest;
use App\Models\Email;

class EmailController extends Controller
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
            ['link'=>"email",'name'=>"Emails"]
        ];
        $email = Email::all();
        return view('cpanel.contectUs.email.index',compact('email','breadcrumbs'));
        // return response([ 'success' => true,compact('email','breadcrumbs')]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cpanel.contectUs.email.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmailRequest $request)
    {
        $email = new Email();
        $email->footer_id = '1';
        // $email->email_type_id = $request->email_type_id;
        $email->email_type_id = '1';
        $email->link = $request->link;
        $email->save();

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
            ['link'=>"email",'name'=>"Emails"]
        ];
        $email = Email::find($id);
        return view('cpanel.contectUs.email.edit', compact('email','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmailRequest $request, $id)
    {
        //
        $email = Email::find($id);
        $email->footer_id = '1';
        // $email->email_type_id = $request->email_type_id;
        $email->email_type_id = '1';
        $email->link = $request->link;
        $email->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $email = Email::find($id);
        $email->delete();

        return redirect('cpanel/admin/email');
    }
}
