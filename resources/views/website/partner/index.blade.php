@extends('website.layouts.master')
@section('titel','partner')
    
@section('content')
                 
<div class="content">



    <div class="services-content">
      <div class="container">

        <div class="row">
          <div class="col-md-12">
            <div class="main-title">
              <h2 class="text-center"><span>Our</span> Partners</h2>
            </div>
          </div>
        </div>

        <div class="row">
          @foreach ($partners as $partner)
              <div class="col-md-4">
                <div class="serv-sec">
                  <a href="{{url("partner/$partner->id")}}">
                    <img class="banner-img" src="{{ asset($partner->ourPartners->image)}}" alt="" lazy="loadoing">
                  </a>
                </div>
              </div>
          @endforeach
       

          {{-- <div class="col-md-4">
            <div class="serv-sec">
              <img class="banner-img" src="website/images/service-two-img4.jpg" alt="">
              <div class="detail">
                <h5>Heart Specialist</h5>

              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="serv-sec">
              <img class="banner-img" src="website/images/service-two-img5.jpg" alt="">
              <div class="detail">
                <h5>Laboratory Tests</h5>

              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="serv-sec">
              <img class="banner-img" src="website/images/service-two-img6.jpg" alt="">
              <div class="detail">
                <h5>Operation Theater</h5>

              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="serv-sec">
              <img class="banner-img" src="website/images/service-two-img2.jpg" alt="">
              <div class="detail">
                <h5>ICU Department</h5>

              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="serv-sec">
              <img class="banner-img" src="website/images/service-two-img3.jpg" alt="">
              <div class="detail">
                <h5>Liposuction Department</h5>

              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="serv-sec">
              <img class="banner-img" src="website/images/service-two-img7.jpg" alt="">
              <div class="detail">
                <h5>Baby Birth</h5>

              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="serv-sec">
              <img class="banner-img" src="website/images/service-two-img8.jpg" alt="">
              <div class="detail">
                <h5>Eye Specialist</h5>

              </div>
            </div>
          </div> --}}



        </div>


      </div>
    </div>


  </div>

@endsection

