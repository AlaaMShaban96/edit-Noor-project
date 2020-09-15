
@extends('cpanel/layouts/contentLayoutMaster')

@section('title', 'Admin')

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
            <th>STATUS</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($admins as $key=>$admin)
          
            <tr>
              <td></td>
              <td class="product-img"><img src="{{ asset($admin->image) }}" alt="Img placeholder">
              </td>
              <td class="product-name">{{ $admin->name }}</td>
              <td class="product-name"><div class='chip chip-{{$admin->active == 0 ?"danger" :"success" }}'><div class="chip-body"><div class="chip-text">{{$admin->active == 0 ?" not active" :"active" }} </div></div></div></td>
            
              <td class="product-action">
                <a href='{{url("cpanel/admin/admin-edit/".$admin->id."/edit")}}' ><span class="action-edit"  ><i class="feather icon-edit"></i></span></a>
                <a href="#" onclick="deletee({{$admin->id}})"><span class="action-delete"><i class="feather icon-trash"></i></span></a>
              </td>
              <form style="display: none" id="delete{{$admin->id}}" action="{{url('cpanel/admin/admin/'.$admin->id)}}" method="post">
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
        <script src="{{ asset('js/scripts/ui/data-list-view-logo.js') }}"></script>
@endsection
