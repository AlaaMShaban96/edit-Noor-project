
@extends('cpanel/layouts/contentLayoutMaster')

@section('title', 'Thumb View')

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
    <div class="action-btns d-none">
      <div class="btn-dropdown mr-1 mb-1">
        <div class="btn-group dropdown actions-dropodown">
          <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Actions
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
            <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
            <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
            <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
          </div>
        
        </div>
      </div>
    </div>
    
    {{-- dataTable starts --}}
    <div class="table-responsive">
      <table class="table data-thumb-view">
        <thead>
          <tr>
            <th></th>
            <th>Image</th>
            <th>NAME</th>
            <th>CATEGORY</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
         

           
            <tr>
              <td></td>
              <td class="product-img"><img src="{{ asset($category->category->image) }}" alt="Img placeholder">
              </td>
              <td class="product-name">{{ $category->name }}</td>
              <td class="product-category">{{ $category->description }}</td>
              {{-- <td>
                <div class="progress progress-bar-{{ $arr[array_rand($arr)] }}">
                  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100"
                    style="width:{{ $product["popularity"] }}%"></div>
                </div>
              </td> --}}
              {{-- <td>
                <div class="chip chip-{{$color}}">
                  <div class="chip-body">
                    <div class="chip-text">{{ $product["order_status"]}}</div>
                  </div>
                </div>
              </td> --}}
              {{-- <td class="product-price">{{ $product["price"] }}</td> --}}
              <td class="product-action">
                <span class="action-edit"><i class="feather icon-edit"></i></span>
                <span class="action-delete"><i class="feather icon-trash"></i></span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{-- dataTable ends --}}

    {{-- add new sidebar starts --}}
    <div class="add-new-data-sidebar">
        <form action="{{url('cpanel/admin/category')}}" method="post" enctype="multipart/form-data">
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
                        <label for="data-name">Name Arbic</label>
                        <input type="checkbox" id="vehicle1" name="language_codes[]" value="ar" checked>
                        <input type="text" name="names[]" class="form-control" id="data-name">
                        <label for="data-name">Description Arbic</label>
                        <textarea name="descriptions[]" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-sm-12 data-field-col">
                        <label for="data-name">Name Englash</label>
                        <input type="checkbox" id="vehicle1" name="language_codes[]" value="en" checked>
                        <input type="text" name="names[]" class="form-control" id="data-name">
                        <label for="data-name">Description Englash</label>
                        <textarea name="descriptions[]" id="" cols="30" rows="10"></textarea>
                    </div>
                    {{-- <div class="col-sm-12 data-field-col">
                        <label for="data-category"> Category </label>
                        <select class="form-control" id="data-category">
                        <option>Audio</option>
                        <option>Computers</option>
                        <option>Fitness</option>
                        <option>Appliance</option>
                        </select>
                    </div> --}}
                    {{-- <div class="col-sm-12 data-field-col">
                        <label for="data-status">Order Status</label>
                        <select class="form-control" id="data-status">
                        <option>Pending</option>
                        <option>Canceled</option>
                        <option>Delivered</option>
                        <option>On Hold</option>
                        </select>
                    </div> --}}
                    {{-- <div class="col-sm-12 data-field-col">
                        <label for="data-price">Price</label>
                        <input type="text" class="form-control" id="data-price">
                    </div> --}}
                    <div class="col-sm-12 data-field-col data-list-upload">
                        <label for="data-name">Uplade Photo </label>
                        <input type="file" name="image" id="">
                    </div>
                    </div>
                </div>
                </div>
                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                <div class="add-data-btn">
                    <button class="btn btn-primary">Add Data</button>
                </div>
                <div class="cancel-data-btn">
                    <button class="btn btn-outline-danger">Cancel</button>
                </div>
                </div>
            </div>
        </form>
    </div>
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
        <script src="{{ asset('js/scripts/ui/data-list-view.js') }}"></script>
@endsection
