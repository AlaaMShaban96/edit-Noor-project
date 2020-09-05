@extends('cpanel/layouts/contentLayoutMaster') 

@section('title', 'address') 



@section('content')
<!-- users edit start -->
<section class="users-edit">
    <div class="card">
      <div class="card-content">
        <div class="card-body">
          <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account"
                aria-controls="account" role="tab" aria-selected="true">
                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">الفروع </span>
              </a>
            </li>

          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">

              <!-- users edit account form start -->
              <form novalidate>
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <div class="controls">
                        <label>الفرع الاول</label>
                        <input type="text" class="form-control" placeholder="Username" value="adoptionism744" required
                          data-validation-required-message="This username field is required">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                          <label>الفرع الاول </label>
                          <input type="text" class="form-control" placeholder="Username" value="adoptionism744" required
                            data-validation-required-message="This username field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                          <label>الفرع الاول </label>
                          <input type="text" class="form-control" placeholder="Username" value="adoptionism744" required
                            data-validation-required-message="This username field is required">
                        </div>
                      </div>
    
                  </div>
                  <div class="col-12 col-sm-6">
  
                    <div class="form-group">
                        <div class="controls">
                          <label>First branch </label>
                          <input type="text" class="form-control" placeholder="Username" value="adoptionism744" required
                            data-validation-required-message="This username field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                          <label>two </label>
                          <input type="text" class="form-control" placeholder="Username" value="adoptionism744" required
                            data-validation-required-message="This username field is required">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                          <label>tree </label>
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