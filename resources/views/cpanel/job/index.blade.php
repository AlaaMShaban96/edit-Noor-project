
@extends('cpanel/layouts/contentLayoutMaster')

@section('title', 'Nano Tech')


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
    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
    {{-- dataTable starts --}}
    <div class="table-responsive">
      <table class="table data-thumb-view" >
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>description</th>
            <th>responsibility</th>
            <th>qualification</th>
            <th>experience</th>
            <th>skills</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)
                <tr>
                    <td class="product-img">
                        {{$job->job->id}}
                    </td>
                    <td class="product-img">
                        {{$job->name}}
                    </td>
                    <td class="product-img">
                        {{$job->description}}
                    </td>
                    <td class="product-img">
                        {{$job->responsibility}}
                    </td>
                    <td class="product-img">
                        {{$job->qualification}}
                    </td>
                    <td class="product-img">
                        {{$job->experience}}
                    </td>
                    <td class="product-img">
                        {{$job->skills}}
                    </td>
                    <td class="product-action">
                        <a href='{{url("cpanel/admin/job/".$job->job->id."/edit")}}' ><span class="action-edit"  ><i class="feather icon-edit"></i></span></a>
                        <a href="#" onclick="deletee({{$job->job->id}})"><span class="action-delete"><i class="feather icon-trash"></i></span></a>
                    </td>
                    <form style="display: none" id="delete{{$job->job->id}}" action="{{url('cpanel/admin/job/'.$job->job->id)}}" method="post">
                        @method('delete')
                        @csrf
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
