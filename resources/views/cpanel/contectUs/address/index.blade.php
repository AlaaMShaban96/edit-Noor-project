@extends('cpanel/layouts/contentLayoutMaster') 

@section('title', 'Nano Tech') 



@section('content')
<!-- users edit start -->
<section class="users-edit">
    <div class="card">
      <div class="card-content">
        <div class="card-body">
          
          <div class="tab-content">
            <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">

              <!-- users edit account form start -->
              <form novalidate>
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <div class="controls">
                        <label> Address 1 </label>
                        <input type="text" class="form-control" placeholder="Username" value="adoptionism744" required
                          data-validation-required-message="This username field is required">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                          <label> Address 2 </label>
                          <input type="text" class="form-control" placeholder="Username" value="adoptionism744" required
                            data-validation-required-message="This username field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                          <label> Address 3 </label>
                          <input type="text" class="form-control" placeholder="Username" value="adoptionism744" required
                            data-validation-required-message="This username field is required">
                        </div>
                      </div>
    
                  </div>
                  
           
                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                      Changes</button>
                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                  </div>
                </div>
              </form>
              <!-- users edit account form ends -->
            </div>
       
        </div>
      </div>
    </div>
  </section>
@endsection