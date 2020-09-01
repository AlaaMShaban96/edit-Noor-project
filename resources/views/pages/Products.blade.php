
@extends('layouts/contentLayoutMaster')

@section('title', 'Thumb View')

@section('content')
{{-- Data list view starts --}}
<section id="data-thumb-view" class="data-thumb-view-header">
    <div class="action-btns d-none">
      <div class="btn-dropdown mr-1 mb-1">
        <div class="btn-group dropdown actions-dropodown">
          <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           الاجراء
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>حذف</a>
            <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
          
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
            <th>الصوره </th>
            <th>العنوان </th>
            
            <th>النص </th>
           
          </tr>
        </thead>
        <tbody>
        
           
            <tr>
              <td></td>
              <td class="product-img"><img src="" alt="Img placeholder">
              </td>
              <td class="product-name"></td>
              <td class="product-category"></td>
              <td>
                <div class="progress progress-bar-">
                  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100"
                    style="width:%"></div>
                </div>
              </td>
              <td>
                <div class="chip chip-">
                  <div class="chip-body">
                    <div class="chip-text"></div>
                  </div>
                </div>
              </td>
              <td class="product-price"></td>
              <td class="product-action">
                <span class="action-edit"><i class="feather icon-edit"></i></span>
                <span class="action-delete"><i class="feather icon-trash"></i></span>
              </td>
            </tr>
         
        </tbody>
      </table>
    </div>
    {{-- dataTable ends --}}

    {{-- add new sidebar starts --}}
    <div class="add-new-data-sidebar">
      <div class="overlay-bg"></div>
      <div class="add-new-data">
        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
          <div>
            <h4 class="text-uppercase">Thumb View Data</h4>
          </div>
          <div class="hide-data-sidebar">
            <i class="feather icon-x"></i>
          </div>
        </div>
        <div class="data-items pb-3">
          <div class="data-fields px-2 mt-1">
            <div class="row">
              <div class="col-sm-12 data-field-col">
                <label for="data-name"></label>
                <input type="text" class="form-control" id="data-name" placeholder="عربي">
                <input type="text" class="form-control" id="data-name" placeholder="English">
              </div>
          
              
              <div class="col-sm-12 data-field-col">
                <label for="data-des"> النص </label>
                <input type="text" class="form-control" id="data-des" placeholder="عربي">
                <input type="text" class="form-control" id="data-des" placeholder="English">
              </div>
              <div class="col-sm-12 data-field-col data-list-upload">
                <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                  <div class="dz-message">تحميل الصوره</div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
          <div class="add-data-btn">
            <button class="btn btn-primary">حفظ </button>
          </div>
          <div class="cancel-data-btn">
            <button class="btn btn-outline-danger">إلغاء</button>
          </div>
        </div>
      </div>
    </div>
    {{-- add new sidebar ends --}}
  </section>
  {{-- Data list view end --}}
@endsection
