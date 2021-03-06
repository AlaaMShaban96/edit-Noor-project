@extends('website.layouts.master')
@section('titel','About')

@section('content')

<!--Start Banner-->

<div class="sub-banner">

  <img class="banner-img" src="website/images/about2.jpg" alt="" lazy="loadoing">
  <div class="detail">
    <div class="container">
      <div class="row">
        <div class="col-md-12">


        </div>
      </div>
    </div>
  </div>

</div>

<!--End Banner-->



<!--Start Content-->
<div class="content">


  <!--Start Welcome-->
  <div class="welcome-three">
    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="main-title" style="padding:20px; border: solid 2px rgba(0,0,0,0.05);">
            <h2 style="margin-bottom: 20px; "><span>About Us</span></h2>

            <p style="font-family: 'Lato', sans-serif;
                     font-weight: 400;
                     line-height: 28px;
                     font-size: 16px;
                     color:#7a7a7a;padding-bottom: 125px;"> Since 2018, Noor Al-Amana Company (NA) is one of
              well-established
              Healthcare distribution companies in Libya.<br>
              • Noor Al-Amana Company (NA) is a subsidiary of <a href="http://dawadigroup.com/" target="_blank"
                style="color:black;"><b>DAWADI GROUP</b></a> Holding Company, one of the pioneer of General Trading in
              LIBYA since 40 years.<br>


              • Healthcare is a strategic sector Therefore , we are daily working to
              supply the Libyan Hospitals, Pharmacies and patients with High Quality,
              Safe and Efficient products manufactured by Lead Pharmaceutical
              companies with whom we established a long and add valuable partnership.



            </p>
          </div>
        </div>
        <div class="col-md-6" style="padding: 10px; border: solid 2px rgba(0,0,0,0.05); ">
          <img src="website/images/img.jpg" alt="" lazy="loadoing">
        </div>
      </div>


    </div>
    <!--End Welcome-->


    <!--End Pie Chart-->

    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="main-title text-center">
            <h2><span>read my story </span></h2>
            <span class="" style="display: inline-block;
           width: 61px;
           border-bottom: solid 2px #3a539b;
           padding-top: 10px;"></span>
          
          </div>
        </div>
      </div>

     

    </div>
    <!--Start Our Hospital-->
    <div class="hospital">
      <div class="container">



        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12" style="border: solid 2px rgba(0,0,0,0.05);padding-bottom: 50px;">
                <div class="main-title">
                  <h2 style="    font-size: 40px;
         line-height: 50px;
         font-weight: 600;"><span>Our</span>Vision
                  </h2>
                  <p style="font-family: 'Lato', sans-serif;
         font-weight: 400;
         line-height: 28px;
         font-size: 16px;margin-bottom: 40px;
 color: #7a7a7a; ">To be pioneer and leader in distribution, by building long-standing relationships with our partners
                    and customers by providing Pharmaceutical, healthcare, and Medical Devices products of highest
                    standards and quality in Libya and Africa.</p>
                </div>
              </div>
            </div>


          </div>

          <div class="col-md-6">
            <div class="why-choose-us">
              <div class="row">
                <div class="col-md-12">
                  <div class="main-title">
                    <h2 style="    font-size: 40px;
             line-height: 50px;
             font-weight: 600;"><span>Why Choose</span> Medical</h2>
                    <p>• To support the Libyan Economy , mainly in Health Care Sector and start up the Pharmaceuticals &
                      Medical Devices industry field. <br>
                      • To provide the Libyan market with all Efficient and High Quality distribution of Pharmaceutical,
                      healthcare, and Medical supply products with a Commitment to quality health care. <br>We value the
                      long-term relation with our partners and Customers.</p>
                  </div>
                </div>
              </div>


            </div>
          </div>

        </div>
      </div>
    </div>
    <!--End Our Hospital-->


  </div>
  <!--End Content-->

 
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="main-title text-center">
            <h2><span>Our Suppliers</span></h2>
            <span class="" style="display: inline-block;
           width: 61px;
           border-bottom: solid 2px #3a539b;
           padding-top: 10px;"></span>
            <p class="text-center">Meet Our Suppliers</p>
          </div>
        </div>
      </div>

     

    </div>
 
  <section class="home-two-experts-section">
    <div class="container">
 

      <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="row">
          <div class="col-md-12">
            <section class="customer-logos slider">
              @foreach ($partners as $partner)
                <div class="slide"><a href="#"><img src="{{asset($partner->ourPartners->image)}} " lazy="loadoing"></a> </div>  
              @endforeach
              
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>


  @endsection
