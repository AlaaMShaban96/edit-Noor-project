@extends('cpanel/layouts/contentLayoutMaster') 

@section('title', 'Profile') 
@section('vendor-style')
        <!-- vendor css files -->
        <link rel='stylesheet' href="{{ asset('vendors/css/forms/select/select2.min.css') }}">
        <link rel='stylesheet' href="{{ asset('vendors/css/pickers/pickadate/pickadate.css') }}">
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset('css/plugins/extensions/noui-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/core/colors/palette-noui.css') }}">
@endsection
@section('content')
<section id="page-account-settings">
  @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
            <i class="feather icon-info mr-1 align-middle"></i>
            <span>{{ $error }}</span>
        </div>
    @endforeach
@endif
@if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif
    <div class="row">
      <!-- left menu section -->
      <div class="col-md-3 mb-2 mb-md-0">
        <ul class="nav nav-pills flex-column mt-md-0 mt-1">
          <li class="nav-item">
            <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
              href="#account-vertical-general" aria-expanded="true">
              <i class="feather icon-globe mr-50 font-medium-3"></i>
              General
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
              href="#account-vertical-password" aria-expanded="false">
              <i class="feather icon-lock mr-50 font-medium-3"></i>
              Change Password
            </a>
          </li>
          
       
          
         
        </ul>
      </div>
      <!-- right content section -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                  aria-labelledby="account-pill-general" aria-expanded="true">
                  <form  action="{{url('cpanel/admin/profile-update/'.auth('admin')->user()->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="media">
                    <a href="javascript: void(0);">
                      <img src="{{ asset(auth('admin')->user()->image==null?'images/portrait/small/avatar-s-12.jpg':auth('admin')->user()->image) }}" class="rounded mr-75"
                        alt="profile image" height="64" width="64">
                    </a>
                    <div class="media-body mt-75">
                      <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                        <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                          for="account-upload">Upload new photo</label>
                        <input type="file"  name="image" id="account-upload" hidden>
                        {{-- <button class="btn btn-sm btn-outline-warning ml-50">Reset</button> --}}
                      </div>
                      <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                          size of
                          800kB</small></p>
                    </div>
                  </div>
                  <hr>
                 
                    <div class="row">
                      <div class="col-12 col-sm-6">
      
                        <div class="form-group">
                          <div class="controls">
                            <label>Name </label>
                            <input type="text" name="name" value="{{auth('admin')->user()->name}}" class="form-control" placeholder="Enter  Name"  required
                              data-validation-required-message="This name field is required">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="controls">
                            <label>Email </label>
                            <input type="email"  name="email" value="{{auth('admin')->user()->email}}" class="form-control" placeholder="Enter Email" 
                              required data-validation-required-message="This email field is required">
                          </div>
                        </div>
                        <div class="form-group" style="display: none;">
                          <div class="controls">
                            <label>Password</label>
                            <input type="password" name="password" value="{{auth('admin')->user()->password}}" class="form-control" placeholder="Enter Password" 
                              required data-validation-required-message="This email field is required">
                          </div>
                        </div>
                   
      
                      </div>
                      <div class="col-12 col-sm-6">
      
                        <div class="form-group">
                          <label>Status </label>
                          <select class="form-control" name="active">
                            <option value="1" {{auth('admin')->user()->active==1?'selected':''}}>Active</option>
                            <option value="0" {{auth('admin')->user()->active==0?'selected':''}}>Blocked</option>
                            
                          </select>
                        </div>
                       
                        <div class="form-group">
                          <label><i class="feather icon-lock mr-50 "></i>Permissions</label>
                          <ul class="list-unstyled mb-0">
                            <li class="d-inline-block mr-2">
                              <fieldset>
                                <div class="vs-radio-con">
                                  <input type="radio" name="role" {{auth('admin')->user()->roles->first->get()->name =='Super'?'checked':''}}  value="1">
                                  <span class="vs-radio">
                                    <span class="vs-radio--border"></span>
                                    <span class="vs-radio--circle"></span>
                                  </span>
                                 Super Admin 
                                </div>
                              </fieldset>
                            </li>
                            <li class="d-inline-block mr-2">
                              <fieldset>
                                <div class="vs-radio-con">
                                  <input type="radio" name="role" {{auth('admin')->user()->roles->first->get()->name =='Editer'?'checked':''}} value="2">
                                  <span class="vs-radio">
                                    <span class="vs-radio--border"></span>
                                    <span class="vs-radio--circle"></span>
                                  </span>
                                  Editor
                                </div>
                              </fieldset>
                            </li>
                        
      
                          </ul>
                        </div>
                        
                        <div class="form-group" style="display: none;">
                          <div class="controls">
                            <label>Confirm Password</label>
                            <input type="password" name="passwordConfrim" value="{{auth('admin')->user()->password}}" class="form-control" placeholder="password" 
                               data-validation-required-message="التاكد  من كلمة السر ">
                          </div>
                        </div>
                        
                          {{-- <fieldset class="form-group">
                              <label for="basicInputFile">Upload Photo</label>
                              <div class="custom-file">
                                  <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                              </div>
                          </fieldset> --}}
                      
                     
                      </div>
                      
                      <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                      <a href="{{url('cpanel/admin/')}}" class="btn btn-danger mr-1 mb-1">Cancel</a>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                  aria-labelledby="account-pill-password" aria-expanded="false">
                  <form  action="{{url('cpanel/admin/profile-update/'.auth('admin')->user()->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="form-group" style="display: none;">

                          <input type="text" name="name" value="{{auth('admin')->user()->name}}">
                          <input type="text" name="email" value="{{auth('admin')->user()->email}}">

                          <select class="form-control" name="active">
                            <option value="1" {{auth('admin')->user()->active==1?'selected':''}}>Active</option>
                            <option value="0" {{auth('admin')->user()->active==0?'selected':''}}>Blocked</option>
                            
                          </select>

                          <input type="radio" name="role" {{auth('admin')->user()->roles->first->get()->name =='Super'?'checked':''}}  value="1">
                          <input type="radio" name="role" {{auth('admin')->user()->roles->first->get()->name =='Editer'?'checked':''}} value="2">

                      </div>
                      {{-- <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-old-password">Old Password</label>
                            <input type="password" class="form-control" id="account-old-password" required
                              placeholder="Old Password"
                              data-validation-required-message="This old password field is required">
                          </div>
                        </div>
                      </div> --}}
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-new-password">New Password</label>
                            <input type="password" name="password" id="account-new-password" class="form-control"
                              placeholder="New Password" required
                              data-validation-required-message="The password field is required" minlength="6">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-retype-new-password">Retype New
                              Password</label>
                            <input type="password" name="passwordConfrim" class="form-control" required
                              id="account-retype-new-password" data-validation-match-match="password"
                              placeholder="New Password"
                              data-validation-required-message="The Confirm password field is required" minlength="6">
                          </div>
                        </div>
                      </div>
                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                          changes</button>
                        <button type="reset" class="btn btn-outline-warning">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
               
               
               
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
        <script src="{{ asset('vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('vendors/js/pickers/pickadate/picker.js') }}"></script>
        <script src="{{ asset('vendors/js/pickers/pickadate/picker.date.js') }}"></script>
        <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset('js/scripts/pages/account-setting.js') }}"></script>
@endsection