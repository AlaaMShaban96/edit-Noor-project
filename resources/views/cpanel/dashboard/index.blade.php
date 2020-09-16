
@extends('cpanel/layouts/contentLayoutMaster')

@section('title', 'Dashboard')

{{-- @section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset('vendors/css/charts/apexcharts.css') }}">
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset('css/pages/dashboard-analytics.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pages/card-analytics.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/tour/tour.css') }}">
  @endsection --}}

  @section('content')
  <section id="dashboard-analytics">
        <div class="row">
   
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-primary p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-users text-primary font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1 mb-25">1</h2>
                    <p class="mb-0">عدد الموظفين </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                  <div class="card-header d-flex flex-column align-items-start pb-0">
                      <div class="avatar bg-rgba-primary p-50 m-0">
                          <div class="avatar-content">
                              <i class="feather icon-users text-primary font-medium-5"></i>
                          </div>
                      </div>
                      <h2 class="text-bold-700 mt-1 mb-25">1</h2>
                      <p class="mb-0">عدد الوظائف الشاغرة </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                  <div class="card-header d-flex flex-column align-items-start pb-0">
                      <div class="avatar bg-rgba-primary p-50 m-0">
                          <div class="avatar-content">
                              <i class="feather icon-users text-primary font-medium-5"></i>
                          </div>
                      </div>
                      <h2 class="text-bold-700 mt-1 mb-25">1</h2>
                      <p class="mb-0">عددد المتقدمين </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                  <div class="card-header d-flex flex-column align-items-start pb-0">
                      <div class="avatar bg-rgba-primary p-50 m-0">
                          <div class="avatar-content">
                              <i class="feather icon-users text-primary font-medium-5"></i>
                          </div>
                      </div>
                      <h2 class="text-bold-700 mt-1 mb-25">1</h2>
                      <p class="mb-0">عددcategory</p>
                  </div>
                </div>
              </div>

        </div>
        
</section>
  @endsection


