@extends('cpanel/layouts/contentLayoutMaster') 

@section('title', 'job') 

@section('content')
    <div class="row">
        <div class="col-12" wfd-id="108">
            <div class="card" wfd-id="109">
                <div class="card-header" wfd-id="139">
                    <h4 class="card-title">Jobs application </h4>
                </div>
                <div class="card-content" wfd-id="110">
                    <div class="card-body" wfd-id="111">
                        <form class="form" wfd-id="112">
                            <div class="form-body" wfd-id="113">
                                <div class="row" wfd-id="114">
                                    <div class="col-md-6 col-12" wfd-id="136">
                                        <div class="form-label-group" wfd-id="137">
                                            <textarea  id="Tilte-column" class="Tilte-control" placeholder="title" name="Tilte-column" wfd-id="548" required></textarea>
                                            <label for="first-name-column" wfd-id="138">Tilte</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12" wfd-id="133">
                                        <div class="form-label-group" wfd-id="134">
                                            <textarea  id="last-name-column" class="form-control" placeholder="description" name="lname-column" wfd-id="547" required></textarea>
                                            <label for="last-name-column" wfd-id="135">description</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12" wfd-id="130">
                                        <div class="form-label-group" wfd-id="131">
                                            <textarea  id="responsibility-column" class="form-control" placeholder="responsibility" name="responsibilitycolumn" wfd-id="546" required></textarea>
                                         <label for="responsibility-column" wfd-id="132">responsibility</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12" wfd-id="127">
                                        <div class="form-label-group" wfd-id="128">
                                            <textarea   id="qualification-floating" class="form-control" name="qualification-floating" placeholder="qualification" wfd-id="545" required></textarea>
                                            <label for="qualification-floating" wfd-id="129">qualification</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12" wfd-id="124">
                                        <div class="form-label-group" wfd-id="125">
                                            <textarea    id="experience-column" class="form-control" name="experience-column" placeholder="experience" wfd-id="544" required></textarea>
                                            <label for="experience-column" wfd-id="126">experience</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12" wfd-id="121">
                                        <div class="form-label-group" wfd-id="122">
                                            <textarea    id="skills-column" class="form-control" name="skills-column" placeholder="skills" wfd-id="544" required></textarea>

                                            <label for="skills-column" wfd-id="123">skills</label>
                                        </div>
                                    </div>
    
                  <div class="col-12" wfd-id="115">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light" wfd-id="583">save</button>
                                        {{-- <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light" wfd-id="582">Reset</button> --}}
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
                          <th>title job </th>
                          <th>description</th>
                          <th>responsibility</th>
                          <th>qualification</th>
                          <th>experience</th>
                          <th>skills</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>121</td>
                          <td><i class="fa fa-circle font-small-3 text-success mr-50"></i>roma roam</td>
                          <td>
                           
                          </td>
                          <td></td>
                          <td> </td>
                          <td></td>
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