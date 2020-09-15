
@extends('cpanel/layouts/contentLayoutMaster')

@section('title', 'Category')

@section('vendor-style')
        {{-- vendor files --}}
        {{-- <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css') }}"> --}}
@endsection
@section('page-style')
     <link rel="stylesheet" href="{{ asset('css/pages/data-list-view.css') }}">
@endsection
@section('content')
{{-- Data list view starts --}}
<section id="data-thumb-view" class="data-thumb-view-header">
    <div class="action-btns d-none">
      <div class="btn-dropdown mr-1 mb-1">
      </div>
    </div>
    @if ($errors->any())
      @foreach ($errors->all() as $error)
       <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
            <i class="feather icon-info mr-1 align-middle"></i>
            <span>{{ $error }}</span>
        </div>
      @endforeach
    @endif
    {{-- dataTable starts --}}
    <div class="table-responsive">
      <table class="table data-thumb-view" >
        <thead>
          <tr>
            <th></th>
            <th>Image</th>
            <th>NAME</th>
            {{-- <th>CATEGORY</th> --}}
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $key=>$category)
         

           @if ($category->language_code=='en')
               
          
            <tr>
              <td></td>
              <td class="product-img"><img src="{{ asset($category->category->image) }}" alt="Img placeholder">
              </td>
              <td class="product-name">{{ $category->name }}</td>
              {{-- <td class="product-category">{{ $category->description }}</td> --}}
            
              <td class="product-action">
                <a href='{{url("cpanel/admin/category/".$category->category->id."/edit")}}' ><span class="action-edit"  ><i class="feather icon-edit"></i></span></a>
                <a href='{{url("cpanel/admin/subcategory/".$category->category->id."/category")}}' ><span class="fonticon-wrap"><i class="fa fa-sitemap"></i></span></a>
                <a href="#" onclick="deletee({{$category->category->id}})"><span class="action-delete"><i class="feather icon-trash"></i></span></a>
              </td>
              <form style="display: none" id="delete{{$category->category->id}}" action="{{url('cpanel/admin/category/'.$category->category->id)}}" method="post">
                @method('delete')
                @csrf
              {{-- <button  type="submit"></button> --}}
            
            </form>
            </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    </div>
    {{-- dataTable ends --}}

    {{-- add new sidebar starts --}}
    <div class="add-new-data-sidebar">
        <form action="{{url('cpanel/admin/category')}}" id="CatecoryForm" method="post" enctype="multipart/form-data">
            @csrf
            <div class="overlay-bg"></div>
            <div class="add-new-data">
                <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                <div>
                    <h4 class="text-uppercase">Category</h4>
                </div>
                <div class="hide-data-sidebar">
                    <i class="feather icon-x"></i>
                </div>
                </div>
                <div class="data-items pb-3">
                <div class="data-fields px-2 mt-1">
                    <div class="row">
                    
                    <div class="col-sm-12 data-field-col">
                        <label for="data-name">Name Englash</label>
                        <input type="checkbox" id="vehicle1" name="language_codes[]" value="en" checked>
                        <input type="text" name="names[]" class="form-control" id="data-name_en" required='required'>
                        <label for="data-name">Description Englash</label>
                        <textarea name="descriptions[]" id="data-description_en" cols="30" rows="10" required='required'></textarea>
                    </div>
                    <div class="col-sm-12 data-field-col data-list-upload">
                     
                        <fieldset class="form-group">
                            <label for="basicInputFile">Upload Photo</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </fieldset>
                    
                    </div>
                    </div>
                </div>
                </div>
                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                <div class="add-data-btn">
                    <button class="btn btn-primary" id="buttonType">Add Data</button>
                </div>
                {{-- <div class="cancel-data-btn">
                    <button class="btn btn-outline-danger">Cancel</button>
                </div> --}}
                </div>
            </div>
        </form>
    </div>
  
  </section>
  {{-- Data list view end --}}
@endsection
@section('vendor-script')
{{-- vendor js files --}}
        <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/datatables.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script>
        
          function deletee(id) {
              
              document.getElementById("delete"+id).submit();
          }
      </script>
        <script src="{{ asset('js/scripts/ui/data-list-view.js') }}"></script>
@endsection
