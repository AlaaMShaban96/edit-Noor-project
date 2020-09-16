@extends('cpanel/layouts/contentLayoutMaster') 

@section('title', 'Nano Tech') 



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
            <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">

              <!-- users edit account form start -->
              <form action="{{url('cpanel/admin/address')}}"  method="post">
                @csrf
                <input type="hidden" name="language_code" value="en">
                <div class="row">
                  <div class="col-12 col-sm-6">
                    @forelse ($address as $key=> $address)
                    <input type="hidden" name="id[]" value="{{$address->id}}">
                    <input type="hidden" name="footer_id" value="1">
                      <div class="form-group">
                        <div class="controls">
                          <label>address {{$key}}</label>
                          <input type="text" class="form-control" name="name[]" value="{{$address->name}}" placeholder="Enter Your Business Address"  
                            data-validation-required-message="This username field is required">
                        </div>
                      </div> 
                    @empty    
                        <div class="form-group">
                          <div class="controls">
                            <label>Address One</label>
                            <input type="text" class="form-control" name="name[]"   placeholder="Enter Your Business Address" data-validation-required-message="This username field is required">
                          </div>
                        </div>                 
                          <div class="form-group">
                              <div class="controls">
                                <label>Address Two</label>
                                <input type="text" class="form-control" name="name[]"  placeholder="Enter Your Business Address" data-validation-required-message="This username field is required">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="controls">
                                <label>Address Three</label>
                                <input type="text" class="form-control" name="name[]"  placeholder="Enter Your Business Address" data-validation-required-message="This username field is required">
                              </div>
                            </div>
          
                        </div>
                       
                      @endforelse
                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-center mt-1 ">
                        <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save</button>
                        <button type="reset" onclick="deletee()" class="btn btn-outline-warning">Reset</button>
                  </div>  
                </div>
              <!-- users edit account form start -->
             
                
              </form>
              <!-- users edit account form ends -->
            </div>
       
        </div>
      </div>
    </div>
  </section>
  <form style="display: none" id="delete" action="{{url('cpanel/admin/address')}}" method="post">
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