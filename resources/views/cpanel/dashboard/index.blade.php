
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
                    <h2 class="text-bold-700 mt-1 mb-25">{{ $admins }}</h2>
                    <p class="mb-0">Admins</p>
                </div>
              </div>
            </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                  <div class="card-header d-flex flex-column align-items-start pb-0">
                      <div class="avatar bg-rgba-primary p-50 m-0">
                          <div class="avatar-content">
                              <i class="feather icon-folder text-primary font-medium-5"></i>
                          </div>
                      </div>
                      <h2 class="text-bold-700 mt-1 mb-25">{{ $categoies }}</h2>
                      <p class="mb-0">Category</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                  <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-user text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">{{ $partners }}</h2>
                        <p class="mb-0">Partners</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                      <div class="card-header d-flex flex-column align-items-start pb-0">
                          <div class="avatar bg-rgba-primary p-50 m-0">
                              <div class="avatar-content">
                                  <i class="feather icon-user text-primary font-medium-5"></i>
                              </div>
                          </div>
                          <h2 class="text-bold-700 mt-1 mb-25">{{ $suppliers }}</h2>
                          <p class="mb-0">Supplier</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-edit text-primary font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1 mb-25">{{ $posts }}</h2>
                            <p class="mb-0">Post</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                          <div class="card-header d-flex flex-column align-items-start pb-0">
                              <div class="avatar bg-rgba-primary p-50 m-0">
                                  <div class="avatar-content">
                                      <i class="feather icon-briefcase text-primary font-medium-5"></i>
                                  </div>
                              </div>
                              <h2 class="text-bold-700 mt-1 mb-25">{{ $jobs }}</h2>
                              <p class="mb-0">Jobs</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                          <div class="card-header d-flex flex-column align-items-start pb-0">
                              <div class="avatar bg-rgba-primary p-50 m-0">
                                  <div class="avatar-content">
                                      <i class="feather icon-briefcase text-primary font-medium-5"></i>
                                  </div>
                              </div>
                              <h2 class="text-bold-700 mt-1 mb-25">{{ $recruitmentForm }}</h2>
                              <p class="mb-0">Jobs Applicants</p>
                          </div>
                        </div>
                      </div>
        </div>
        
</section>
  @endsection


