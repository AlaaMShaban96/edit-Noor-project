@extends('website.layouts.master')
@section('titel','About')
    
@section('content')
<div class="content">
   
   
    <!--Start Welcome-->
     <div class="welcome-three">
         <div class="container">
             
             <div class="row">
             <div class="col-md-12">
                 <div class="main-title">
                     <h2><span>Welcome to</span>Noor Al-Amana Company </h2>
                     <p>Since 2018, Noor Al-Amana Company (NA) is one of well-established Healthcare distribution companies in Libya.
                         • Noor Al-Amana Company (NA) is a subsidiary of DAWADI GROUP Holding Company, one of the pioneer of General Trading in LIBYA since 40 years.
                         • Healthcare is a strategic sector Therefore , we are daily working to supply the Libyan Hospitals, Pharmacies and patients with High Quality, Safe and Efficient products manufactured by Lead Pharmaceutical companies with whom we established a long and add valuable partnership.</p>
                 </div>
             </div>
             </div>
             
             <div class="welcome-detail">
                 <div class="row">
                     
                    
                     <div class="col-md-7">
                         <div class="detail">
                             
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                             <ul>
                                 <li><i class="icon-checkmark"></i><span>Sed do Lorem ipsum dolor sit amet consectetur.</span></li>
                                 <li><i class="icon-checkmark"></i><span>If you need a Heart Specialist.</span></li>
                                 <li><i class="icon-checkmark"></i><span>Sed do Lorem ipsum dolor sit amet consectetur.</span></li>
                                 <li><i class="icon-checkmark"></i><span>If you need a Heart Specialist.</span></li>
                                 <li><i class="icon-checkmark"></i><span>Sed do Lorem ipsum dolor sit amet consectetur.</span></li>
                             </ul>
                             
                         </div>
                     </div>
                     
                     
                      <div class="col-md-5">
                         <img src="images/img.jpg" alt="">
                     </div>
                     
                     
                     
                 </div>
             </div>
             
         </div>
     </div>
    <!--End Welcome-->
    
    
    
    <!--Start Pie Chart-->
    <section class="piechart-section dark-back" id="pie-charts">
             <div class="container">
                 
                 <div class="row">
                 <div class="col-md-12">
                     <div class="main-title">
                         <h2><span>Successful</span> Fatality Cases</h2>
                         <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut volutpat eros  adipiscing nonummy.</p>
                     </div>
                 </div>
                 </div>
                 
                 <div class="text-center">
                 <span class="chart first" data-percent="95">
                     <span class="percent">95</span>
                 <span class="year">2010</span>
                 <canvas height="181" width="181"></canvas></span>
                 
            
                 <span class="chart" data-percent="90">
                     <span class="percent">90</span>
                     <span class="year">2018</span>
                 <canvas height="181" width="181"></canvas></span>
                 <span class="chart" data-percent="75">
                     <span class="percent">75</span>
                     <span class="year">2019</span>
                 <canvas height="181" width="181"></canvas></span>
                 <span class="chart" data-percent="95">
                     <span class="percent">95</span>
                     <span class="year">2020</span>
                 <canvas height="181" width="181"></canvas></span>
                 </div>
                 
             </div>
         </section>
    <!--End Pie Chart-->
    
    
    <!--Start Our Hospital-->
    <div class="hospital">
    <div class="container">
         
         
         
        <div class="row">
          <div class="col-md-6">
                 <div class="row">
         <div class="col-md-12">
             <div class="main-title">
             <h2><span>Our</span>Vision
             </h2>
             <p>Lorem ipsum dolor sit amet, adipiscing elit Donec nec eros eget.</p>
             </div>
         </div>
         </div>		
             <div id="hospital">
 
 
             <div class="span12">
             <div id="services-slide" class="owl-carousel">
 
             <div class="item"><img src="images/service-two-img1.jpg" alt=""></div>
             <div class="item"><img src="images/service-two-img2.jpg" alt=""></div>
             <div class="item"><img src="images/service-two-img3.jpg" alt=""></div>
 
             </div>
             </div>
 
 
             </div>
                         
          </div>
          
          <div class="col-md-6">
          <div class="why-choose-us">
             <div class="row">
             <div class="col-md-12">
                 <div class="main-title">
                 <h2><span>Why Choose</span> Medical</h2>
                 <p>Lorem ipsum dolor sit amet, adipiscing elit Donec nec eros eget.</p>
                 </div>
             </div>
             </div>
         
             <ul id="why-choose" class="why-choose">
   <li class="open">
     <div class="link"><i class="icon-first-aid-box"></i>Our Vision<i class="icon-chevron-down"></i></div>
     <ul class="submenu" style=" display:block;">
       <li>
       <p>To be pioneer and leader in distribution, by building long-standing relationships with our partners and customers by providing Pharmaceutical, healthcare, and Medical Devices products of highest standards and quality in Libya and Africa.
 <br/><br/>
 
       </li>
     </ul>
   </li>
   
   <li>
     <div class="link"><i class="icon-heart-beat"></i>Our Mission<i class="icon-chevron-down"></i></div>
     <ul class="submenu">
       <li>
       <p> To support the Libyan Economy , mainly in Health Care Sector and start up the Pharmaceuticals & Medical Devices industry field.
 <br/><br/>
 To provide the Libyan market with all Efficient and High Quality distribution of Pharmaceutical, healthcare, and Medical supply products with a Commitment to quality health care. We value the long-term relation with our partners and Customers.</p>
       </li>
     </ul>
   </li>
  
 </ul>
          </div>
          </div>
          
         </div>
     </div>
     </div>
    <!--End Our Hospital-->
    
      
    </div>

@endsection