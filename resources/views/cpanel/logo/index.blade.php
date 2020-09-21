
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
    {{-- dataTable starts --}}
    <div class="table-responsive">
      <table class="table data-thumb-view" >
        <thead>
          <tr>
            <th></th>
            <th>Image</th>
            <th>Upload</th>
            
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
            
                
           
        <form action="{{url('cpanel/admin/logo')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($logo!=null)
                <tr>
                    <td></td>
                    <td class="product-img"><img src="{{ asset($logo->image) }}" alt="Image" style="width:120px; height:120px;">
                    </td>
                    <td class="product-name">
                        <fieldset class="form-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </fieldset>

                    </td>
                    
                    
                    <td class="product-action">
                        <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                    </td>
                    
                    
                </tr>
            @else
                <tr>
                    <td></td>
                    <td class="product-img"><img src="/" alt="Photo">
                    </td>
                    <td class="product-name">
                        <fieldset class="form-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </fieldset>

                    </td>
                    
                    
                    <td class="product-action">
                        <button type="submit" class="btn btn-primary mr-1 mb-1">Create</button>
                    </td>
                    
                    
                </tr>
            @endif
               
                
        </form>        
        </tbody>
      </table>
    </div>
    {{-- dataTable ends --}}

    

    
    
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
     
        <script src="{{ asset('js/scripts/ui/data-list-view-logo.js') }}"></script>
@endsection
