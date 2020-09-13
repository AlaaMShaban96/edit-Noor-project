@extends('cpanel/layouts/contentLayoutMaster') 

@section('title', 'admin add') 

@section('content')
<!-- users edit start -->
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
            <i class="feather icon-info mr-1 align-middle"></i>
            <span>{{ $error }}</span>
        </div>
    @endforeach
@endif
<section class="users-edit">
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <ul class="nav nav-tabs mb-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account"
              aria-controls="account" role="tab" aria-selected="true">
              <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Informtion </span>
            </a>
          </li>
          
 
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
            <!-- users edit media object start -->
            
            <!-- users edit media object ends -->
            <!-- users edit account form start -->
            
            <form  action="{{url('cpanel/admin/admin-store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-12 col-sm-6">

                  <div class="form-group">
                    <div class="controls">
                      <label>Name </label>
                      <input type="text" name="name" class="form-control" placeholder="Enter  Name"  required
                        data-validation-required-message="This name field is required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>Email </label>
                      <input type="email"  name="email" class="form-control" placeholder="Enter Email" 
                        required data-validation-required-message="This email field is required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Enter Password" 
                        required data-validation-required-message="This email field is required">
                    </div>
                  </div>
             

                </div>
                <div class="col-12 col-sm-6">

                  <div class="form-group">
                    <label>Status </label>
                    <select class="form-control" name="active">
                      <option value="1" selected>Active</option>
                      <option value="0">Blocked</option>
                      
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label><i class="feather icon-lock mr-50 "></i>Permissions</label>
                    <ul class="list-unstyled mb-0">
                      <li class="d-inline-block mr-2">
                        <fieldset>
                          <div class="vs-radio-con">
                            <input type="radio" name="role" checked value="1">
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
                            <input type="radio" name="role" value="2">
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
                  
                  <div class="form-group" style="padding-top: 10px;">
                    <div class="controls">
                      <label>Confirm Password</label>
                      <input type="password" name="passwordConfrim" class="form-control" placeholder="password" 
                        required data-validation-required-message="التاكد  من كلمة السر ">
                    </div>
                  </div>
                  
                    <fieldset class="form-group">
                        <label for="basicInputFile">Upload Photo</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </fieldset>
                
               
                </div>
                
                <button type="submit" class="btn btn-success mr-1 mb-1">Create</button>
                <a href="{{url('cpanel/admin/admin-index')}}" class="btn btn-danger mr-1 mb-1">Cancel</a>
              </div>
              </form>
             <!-- permissions start -->
    
  </div>
</section>
<!-- users edit ends -->
@endsection