@extends('cpanel/layouts/contentLayoutMaster') 

@section('title', 'Phone') 



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
  
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social"
                aria-controls="social" role="tab" aria-selected="false">
                <i class="feather icon-share-2 mr-25"></i><span class="d-none d-sm-block">التواصل الاجتماعي </span>
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
       
            <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
              <!-- users edit socail form start -->
              <form novalidate>
                <div class="row">
                  <div class="col-12 col-sm-6">
  
                    <fieldset>
                      <label>Twitter</label>
                      <div class="input-group mb-75">
                        <div class="input-group-prepend">
                          <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                        </div>
                        <input type="text" class="form-control" value="https://www.twitter.com/adoptionism744"
                          placeholder="https://www.twitter.com/" aria-describedby="basic-addon3">
                      </div>
  
                      <label>Facebook</label>
                      <div class="input-group mb-75">
                        <div class="input-group-prepend">
                          <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                        </div>
                        <input type="text" class="form-control" value="https://www.facebook.com/adoptionism664"
                          placeholder="https://www.facebook.com/" aria-describedby="basic-addon4">
                      </div>
                      <label>Instagram</label>
                      <div class="input-group mb-75">
                        <div class="input-group-prepend">
                          <span class="input-group-text feather icon-instagram" id="basic-addon5"></span>
                        </div>
                        <input type="text" class="form-control" value="https://www.instagram.com/adopt-ionism744"
                          placeholder="https://www.instagram.com/" aria-describedby="basic-addon5">
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-12 col-sm-6">
                    <label>Github</label>
                    <div class="input-group mb-75">
                      <div class="input-group-prepend">
                        <span class="input-group-text feather icon-github" id="basic-addon9"></span>
                      </div>
                      <input type="text" class="form-control" value="https://www.github.com/madop818"
                        placeholder="https://www.github.com/" aria-describedby="basic-addon9">
                    </div>
                    <label>Codepen</label>
                    <div class="input-group mb-75">
                      <div class="input-group-prepend">
                        <span class="input-group-text feather icon-codepen" id="basic-addon12"></span>
                      </div>
                      <input type="text" class="form-control" value="https://www.codepen.com/adoptism243"
                        placeholder="https://www.codepen.com/" aria-describedby="basic-addon12">
                    </div>
                    <label>Slack</label>
                    <div class="input-group mb-75">
                      <div class="input-group-prepend">
                        <span class="input-group-text feather icon-slack" id="basic-addon11"></span>
                      </div>
                      <input type="text" class="form-control" value="@adoptionism744" placeholder="https://www.slack.com/"
                        aria-describedby="basic-addon11">
                    </div>
                  </div>
                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                      Changes</button>
                    <button type="reset" class="btn btn-outline-warning">Reset</button>
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