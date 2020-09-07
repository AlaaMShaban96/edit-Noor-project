@extends('cpanel/layouts/contentLayoutMaster') 

@section('title', 'job') 

@section('content')
    <div class="row">
        <div class="col-12" wfd-id="108">
            <div class="card" wfd-id="109">
                <div class="card-header" wfd-id="139">
                    <h4 class="card-title">Multiple Column</h4>
                </div>
                <div class="card-content" wfd-id="110">
                    <div class="card-body" wfd-id="111">
                        <form class="form" wfd-id="112">
                            <div class="form-body" wfd-id="113">
                                <div class="row" wfd-id="114">
                                    <div class="col-md-6 col-12" wfd-id="136">
                                        <div class="form-label-group" wfd-id="137">
                                            <input type="text" id="first-name-column" class="form-control" placeholder="title" name="fname-column" wfd-id="548">
                                            <label for="first-name-column" wfd-id="138">tilte</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12" wfd-id="133">
                                        <div class="form-label-group" wfd-id="134">
                                            <input type="text" id="last-name-column" class="form-control" placeholder="description" name="lname-column" wfd-id="547">
                                            <label for="last-name-column" wfd-id="135"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12" wfd-id="130">
                                        <div class="form-label-group" wfd-id="131">
                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column" wfd-id="546">
                                            <label for="city-column" wfd-id="132">City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12" wfd-id="127">
                                        <div class="form-label-group" wfd-id="128">
                                            <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country" wfd-id="545">
                                            <label for="country-floating" wfd-id="129">Country</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12" wfd-id="124">
                                        <div class="form-label-group" wfd-id="125">
                                            <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Company" wfd-id="544">
                                            <label for="company-column" wfd-id="126">Company</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12" wfd-id="121">
                                        <div class="form-label-group" wfd-id="122">
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email" wfd-id="543">
                                            <label for="email-id-column" wfd-id="123">Email</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-12" wfd-id="116">
                    <fieldset class="checkbox">
                      <div class="vs-checkbox-con vs-checkbox-primary" wfd-id="117">
                        <input type="checkbox" wfd-id="542">
                        <span class="vs-checkbox" wfd-id="119">
                          <span class="vs-checkbox--check" wfd-id="120">
                            <i class="vs-icon feather icon-check"></i>
                          </span>
                        </span>
                        <span class="" wfd-id="118">Remember me</span>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-12" wfd-id="115">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light" wfd-id="583">Submit</button>
                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light" wfd-id="582">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="mb-0">Dispatched Orders</h4>
                </div>
                <div class="card-content">
                  <div class="table-responsive mt-1">
                    <table class="table table-hover-animation mb-0">
                      <thead>
                        <tr>
                          <th>title</th>
                          <th>description</th>
                          <th>responsibility</th>
                          <th>qualifica</th>
                          <th>rxprience</th>
                          <th>skills</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>121</td>
                          <td><i class="fa fa-circle font-small-3 text-success mr-50"></i>roma roam</td>
                          <td>
                           
                          </td>
                          <td></td>
                          <td>
                          
                          </td>
                          <td></td>
                         
                        </tr>
                 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection