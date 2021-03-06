
@extends('cpanel/layouts/contentLayoutMaster')

@section('title', 'Nano Tech')

@section('vendor-style')
        {{-- vendor files --}}
        <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css') }}">
@endsection
@section('page-style')
        {{-- Page css files --}}
        <link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pages/data-list-view.css') }}">
@endsection
@section('content')
{{-- Data list view starts --}}
<section id="data-thumb-view" class="data-thumb-view-header">
    
    
    {{-- dataTable starts --}}
    
    
          
         

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
            <i class="feather icon-info mr-1 align-middle"></i>
            <span>{{ $error }}</span>
        </div>
    @endforeach
@endif


<section id="basic-horizontal-layouts">
    <form action="{{url('cpanel/admin/category/'.$category->id)}}" id="CatecoryForm" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row match-height">
            @foreach ($category->categoryTranslation as $category)
                @switch($category->language_code)
                    @case('ar')
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Arabic Form</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-sm-12 data-field-col">
                                                        <label for="data-name">Name Arabic</label>
                                                        <input type="checkbox" id="vehicle" name="language_codes[]" value="{{$category->language_code}}" checked>
                                                        <input type="text" name="names[]" class="form-control" id="data-name_ar" value="{{$category->name}}">
                                                        <div class="card-body">
                                                            <p>Description Arabic</p>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <fieldset class="form-group">
                                                                        <textarea class="form-control"name="descriptions[]" id="basicTextarea" rows="3" placeholder="Textarea">{{$category->description}}</textarea>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @break
                    @case('en')
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Einglish </h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-sm-12 data-field-col">
                                                        <label for="data-name">Name Einglish</label>
                                                        <input type="checkbox" id="vehicle" name="language_codes[]" value="{{$category->language_code}}" checked>
                                                        <input type="text" name="names[]" class="form-control" id="data-name_ar" value="{{$category->name}}">
                                                        {{-- <label for="data-name">Description Arbic</label> --}}
                                                        <div class="card-body">
                                                            <p>Description Einglish</p>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <fieldset class="form-group">
                                                                        <textarea class="form-control"name="descriptions[]" id="basicTextarea" rows="3" placeholder="Textarea">{{$category->description}}</textarea>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @break
                    @default
                        
                @endswitch                    
            @endforeach
        </div> 
        <div class="col-lg-6 col-md-12">
            <fieldset class="form-group">
                <label for="basicInputFile">Upload Photo</label>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </fieldset>
        </div>
        <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
        <a href="{{url('cpanel/admin/category')}}" class="btn btn-danger mr-1 mb-1">Cancel</a>
    </form>
</section>
            
   
  </section>
  {{-- Data list view end --}}
@endsection

@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset('js/scripts/ui/data-list-view.js') }}"></script>
@endsection
