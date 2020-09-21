@extends('cpanel/layouts/contentLayoutMaster') 

@section('title', 'Edit') 



@section('content')
<!-- users edit start -->
<section class="users-edit">
    <div class="card">
      <div class="card-content">
        <div class="card-body">
          
          <div class="tab-content">
          
            <div class="tab-pane active" id="social" aria-labelledby="social-tab" role="tabpanel">
              <!-- users edit socail form start -->
              <form novalidate action='{{url("cpanel/admin/supplier/$supplier->id")}}' id="CatecoryForm" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-12 col-sm-6">
  
                    <fieldset>
                      <label>Name</label>
                      <div class="input-group mb-75">
                        <div class="col-sm-12 data-field-col">
                            <input type="text" name="name" class="form-control" value="{{$supplier->name}}" id="data-name_ar" required='required'>
                        </div>
                        </div>
                      <label>Twitter</label>
                      <div class="input-group mb-75">
                        <div class="input-group-prepend">
                          <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                        </div>
                        <input type="url" class="form-control" name="twitter" value="{{$supplier->twitter}}" 
                          placeholder="" aria-describedby="basic-addon3">
                      </div>
  
                      <label>Facebook</label>
                      <div class="input-group mb-75">
                        <div class="input-group-prepend">
                          <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                        </div>
                        <input type="url" class="form-control" name="facebook"  value="{{$supplier->facebook}}" 
                          placeholder="" aria-describedby="basic-addon4">
                      </div>
                      <label>Linkedin</label>
                      <div class="input-group mb-75">
                        <div class="input-group-prepend">
                          <span class="input-group-text feather icon-linkedin" id="basic-addon5"></span>
                        </div>
                        <input type="url" class="form-control" name="linkedin" value="{{$supplier->linkedin}}" 
                          placeholder="" aria-describedby="basic-addon5">
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-12 col-sm-6">
                    <label>Website</label>
                    <div class="input-group mb-75">
                      <div class="input-group-prepend">
                        <span class="input-group-text feather icon-mail" id="basic-addon5"></span>
                      </div>
                      <input type="url" class="form-control" name="website" value="{{$supplier->website}}" 
                        placeholder="" aria-describedby="basic-addon5">
                    </div>
                   
                    <label for="basicInputFile">Upload Photo</label>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                  </div>
                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Update
                      Changes</button>
                      <a href="{{url('cpanel/admin/supplier')}}" class="btn btn-danger mr-1 mb-1">Cancel</a>
                    </div>
                </div>
              </form>
              <!-- users edit socail form ends -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection