@extends('cpanel/layouts/contentLayoutMaster') 

@section('title', 'Email') 



@section('content')
<!-- users edit start -->
<section class="users-edit">
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
    <div class="card">
      <div class="card-content">
        <div class="card-body">
          <div class="tab-content">
          
            <div class="tab-pane active" id="social" aria-labelledby="social-tab" role="tabpanel">
              <!-- users edit socail form start -->
              <form action="{{url('cpanel/admin/email')}}"  method="post">
                @csrf
                <div class="row">
                  <div class="col-12 col-sm-6">
   
                    <fieldset>

                      @forelse ($emails as $email)
                      <input type="hidden" name="footer_id" value="1">
                      <input type="hidden" name="id[]" value="{{$email->id}}">
                          <label>{{$email->emailType->name}}</label>
                          <div class="input-group mb-75">
                            <div class="input-group-prepend">
                              <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                            </div>
                            <input type="text" class="form-control" name="link[]" value="{{$email->link}}" placeholder="https://www.twitter.com/" aria-describedby="basic-addon3">
                            <input type="hidden" name="email_type_id[]" value="{{$email->email_type_id}}">
                          </div>
                      @empty
                      <input type="hidden" name="footer_id" value="1">
                            <label>Email</label>
                            <div class="input-group mb-75">
                              <div class="input-group-prepend">
                                <span class="input-group-text feather icon-email" id="basic-addon3"></span>
                              </div>
                              <input type="text" class="form-control" name="link[]" value="" placeholder="https://www.twitter.com/" aria-describedby="basic-addon3">
                              <input type="hidden" name="email_type_id[]" value="2">
                            </div>
                            <label>Facebook</label>
                              <div class="input-group mb-75">
                                <div class="input-group-prepend">
                                  <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                                </div>
                                <input type="text" class="form-control" name="link[]" value="" placeholder="https://www.facebook.com/" aria-describedby="basic-addon4">
                                <input type="hidden" name="email_type_id[]" value="1">
                              </div>
                           
                            <label>LinkedIn</label>
                            <div class="input-group mb-75">
                              <div class="input-group-prepend">
                                <span class="input-group-text feather icon-linkedin" id="basic-addon5"></span>
                              </div>
                              <input type="text" class="form-control" name="link[]" value=""  placeholder="https://www.instagram.com/" aria-describedby="basic-addon5">
                              <input type="hidden" name="email_type_id[]" value="3">
                            </div>
                      @endforelse


                    
                    </fieldset>
                  </div>
                  {{-- <div class="col-12 col-sm-6">
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
                  </div> --}}
                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                      Changes</button>
                    <button type="reset" onclick="deletee()" class="btn btn-outline-warning">Reset</button>
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
  <form style="display: none" id="delete" action="{{url('cpanel/admin/email')}}" method="post">
    @method('delete')
    @csrf
  {{-- <button  type="submit"></button> --}}

</form>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script>
        
          function deletee() {
              
              document.getElementById("delete").submit();
          }
      </script>
@endsection