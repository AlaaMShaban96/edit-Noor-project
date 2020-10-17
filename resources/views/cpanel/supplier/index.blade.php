
@extends('cpanel/layouts/contentLayoutMaster')

@section('title', 'Nano Tech')


@section('page-style')
        {{-- Page css files --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css') }}"> --}}
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
    @if(Session::has('message'))
      <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
    {{-- dataTable starts --}}
    <div class="table-responsive">
      <table class="table data-thumb-view" >
        <thead>
          <tr>
            <th></th>
            <th>Image</th>
            <th>NAME</th>
            <th>website </th>
            <th>Facebook</th>
            <th>Twitter</th>
            <th>Linkedin</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($suppliers as $key=>$supplier)
            <tr>
              <td></td>
              <td class="product-img"><img src="{{ asset($supplier->image) }}" alt="Img placeholder" style="width:150px; height:150px;">
              </td>
              <td class="product-name">{{ $supplier->name }}</td>
              <td class="product-name">{{$supplier->website==null ?" not link" :$supplier->website }}</td>
              <td class="product-name">{{$supplier->facebook==null ?" not link" :$supplier->facebook }}</td>
              <td class="product-name">{{$supplier->twitter==null ?" not link" :$supplier->twitter}} </td>
              <td class="product-name">{{$supplier->linkedin==null ?" not link" :$supplier->linkedin }} </td>
             
            
              <td class="product-action">
                <a href='{{url("cpanel/admin/supplier/".$supplier->id."/edit")}}' ><span class="action-edit"  ><i class="feather icon-edit"></i></span></a>
                {{-- <a href='{{url("cpanel/admin/partner")}}' ><span class="fonticon-wrap"><i class="fa fa-spartnerap"></i></span></a> --}}
                <a href="#" onclick="deletee({{$supplier->id}})"><span class="action-delete"><i class="feather icon-trash"></i></span></a>
              </td>
              <form style="display: none" id="delete{{$supplier->id}}" action="{{url('cpanel/admin/supplier/'.$supplier->id)}}" method="post">
                @method('delete')
                @csrf
              {{-- <button  type="submit"></button> --}}
            
            </form>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{-- dataTable ends --}}

    {{-- add new sidebar starts --}}
    <div class="add-new-data-sidebar">
        <form action="{{url('cpanel/admin/supplier')}}" id="CatecoryForm" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <input type="hidden" name="category_id" value="{{$category->id}}"> --}}
            <div class="overlay-bg"></div>
           
            <div class="add-new-data">
                <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                <div>
                    <h4 class="text-uppercase">Supplier</h4>
                </div>
                <div class="hide-data-sidebar">
                    <i class="feather icon-x"></i>
                </div>
                </div>
                <div class="data-items pb-3">
                <div class="data-fields px-2 mt-1">
                    <div class="row">
                    <div class="col-sm-12 data-field-col">
                        <label for="data-name">Name </label>
                        <input type="text" name="name" class="form-control" id="data-name_ar" required='required'>
                    </div>
                    <div class="col-sm-12 data-field-col data-list-upload">
                    <fieldset>
                        <label>Twitter</label>
                        <div class="input-group mb-75">
                          <div class="input-group-prepend">
                            <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                          </div>
                          <input type="url" class="form-control" name="twitter" value=""
                            placeholder="" aria-describedby="basic-addon3">
                        </div>
    
                        <label>Facebook</label>
                        <div class="input-group mb-75">
                          <div class="input-group-prepend">
                            <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                          </div>
                          <input type="url" class="form-control" name="facebook"  value=""
                            placeholder="" aria-describedby="basic-addon4">
                        </div>
                        <label>Linkedin</label>
                        <div class="input-group mb-75">
                          <div class="input-group-prepend">
                            <span class="input-group-text feather icon-linkedin" id="basic-addon5"></span>
                          </div>
                          <input type="url" class="form-control"  name="linkedin" value=""
                            placeholder="" aria-describedby="basic-addon5">
                        </div>
                        <label>Website</label>
                        <div class="input-group mb-75">
                          <div class="input-group-prepend">
                            <span class="input-group-text feather icon-mail" id="basic-addon5"></span>
                          </div>
                          <input type="url" class="form-control" name="website"  value=""
                            placeholder="" aria-describedby="basic-addon5">
                        </div>
                      </fieldset>
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
    {{-- Edit new sidebar starts --}}
    
    
    {{-- add new sidebar ends --}}
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
