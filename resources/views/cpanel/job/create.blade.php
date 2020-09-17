@extends('cpanel/layouts/contentLayoutMaster') 

@section('title', 'Nano Tech') 

@section('content')

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
            <i class="feather icon-info mr-1 align-middle"></i>
            <span>{{ $error }}</span>
        </div>
    @endforeach
@endif
    <div class="row">
        <div class="col-12" wfd-id="108">
            <div class="card" wfd-id="109">
                <div class="card-header" wfd-id="139">
                    <h4 class="card-title">Jobs application </h4>
                </div>
                <div class="card-content" wfd-id="110">
                    <div class="card-body" wfd-id="111">
                        <form class="form" wfd-id="112" action="{{route('job.store')}}" method="post">
                            @csrf
                            <div class="form-body" wfd-id="113">
                                
                                    
                                    <div class="row" wfd-id="114">
                                       
                                        <div class="col-md-6 col-12" wfd-id="133">
                                            <div class="form-label-group" wfd-id="134">
                                                <textarea  id="last-name-column" class="form-control"  placeholder="Name" name="name[]" wfd-id="547" required></textarea>
                                                <label for="last-name-column" wfd-id="135">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" wfd-id="133">
                                            <div class="form-label-group" wfd-id="134">
                                                <textarea  id="last-name-column" class="form-control"  placeholder="description" name="description[]" wfd-id="547" required></textarea>
                                                <label for="last-name-column" wfd-id="135">description</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" wfd-id="130">
                                            <div class="form-label-group" wfd-id="131">
                                                <textarea  id="responsibility-column" class="form-control" placeholder="responsibility" name="responsibility[]" wfd-id="546" required></textarea>
                                            <label for="responsibility-column" wfd-id="132">responsibility</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" wfd-id="127">
                                            <div class="form-label-group" wfd-id="128">
                                                <textarea   id="qualification-floating" class="form-control" placeholder="qualification"  name="qualification[]" wfd-id="545" required></textarea>
                                                <label for="qualification-floating" wfd-id="129">qualification</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" wfd-id="124">
                                            <div class="form-label-group" wfd-id="125">
                                                <textarea    id="experience-column" class="form-control" placeholder="experience"  name="experience[]" wfd-id="544" required></textarea>
                                                <label for="experience-column" wfd-id="126">experience</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" wfd-id="121">
                                            <div class="form-label-group" wfd-id="122">
                                                <textarea    id="skills-column" class="form-control"  placeholder="skills" name="skills[]" wfd-id="544" required></textarea>

                                                <label for="skills-column" wfd-id="123">skills</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" wfd-id="121">
                                            <div class="form-group">
                                                <label><i class="feather icon-lock mr-50 "></i>language</label>
                                                <ul class="list-unstyled mb-0">
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="language_code[]" checked value="en">
                                                        <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                        </span>
                                                    Englash
                                                    </div>
                                                    </fieldset>
                                                </li>
                                                {{-- <li class="d-inline-block mr-2">
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
                                            --}}
                            
                                                </ul>
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
        
    </div>
@endsection