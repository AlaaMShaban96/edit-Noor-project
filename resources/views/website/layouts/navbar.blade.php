@php
    $categories=App\Models\CategoryTranslation::all();
@endphp
<div id="wrap">
    <!--Start PreLoader-->
    <div id="preloader">
         <div id="status">&nbsp;</div>
 
         <div class="loader">
             <img src="website/images/favicon-medical.png"/>
             <br/>
             <span></span>
             <span></span>
             <span></span>
         </div>
     </div>
     <!--End PreLoader-->
 
 
    <!--Start Top Bar-->
    <div class="top-bar">
            <div class="container">
             <div class="row">
 
                 <div class="col-md-5">
                     <span >MedicalGuide Come to Expect the Best in Town.</span>
                 </div>
 
                 <div class="col-md-7">
 
 
 
 
 
                     <div class="get-touch">
 
                         <ul>
                         <li><a><i class="icon-phone4"></i>+218 21 340 7995</a></li>
                         <li><span><i class="icon-location"></i> Al-Sheikh St,Al-Noflieen,Tripoli-Libya</span></li>
 
                         </ul>
 
                         <ul  class="social-icons">
                             <li><a href="#." class=""><i class=""></i>عربي</a></li>
                         <li><a href="#." class="fb"><i class="icon-euro"></i> </a></li>
                         <li><a href="#." class="tw"><i class="icon-yen"></i> </a></li>
 
                         </ul>
 
                     </div>
                 </div>
 
             </div>
         </div>
    </div>
    <!--Top Bar End-->
 
 
    <!--Start Header-->
 
    <header class="header">
         <div class="container">
 
 
         <div class="row">
 
             <div class="col-md-3">
                 <a href="website/images/favicon-medical.png" class="logo"><img src="website/images/logo.png" alt=""></a>
             </div>
             
             <div class="col-md-9">
 
 
                 <nav class="menu-2">
                 <ul class="nav wtf-menu">
                     <li class="item-select parent"><a href="{{ url('/home') }}">Home</a>
 
                     </li>
 
                     <li class="parent"><a href="{{ url('/about-us') }}">About Us</a>
     
                     </li>

                     <li>
                         <a href="{{ url('/Category') }}">category</a>
						<ul class="submenu">
                            @foreach ($categories as $category)
                            @if ($category->language_code=='en')
                            <li> 
                                <a href="">{{$category->name}}</a>
                                <ul class="submenu">
                                    @foreach ($category->category->items as $item)
                                        <li> <a href="">{{$item->id}}</a> </li>
                                    @endforeach
                                </ul> 
                            </li>   
                            @endif
                            
                            @endforeach
                        
                        {{-- <li> 
                            <a href="">Home Page 2</a> 
                        </li>
                        <li> 
                            <a href="">Home Page 3</a>
                         </li> --}}
					</ul>
					</li>
 
                     <li><a href="{{ url('/news') }}">News</a></li>
 
                  
 
                     <li class="parent"><a href="{{ url('/job') }}">Jobs</a>
                 
                     </li>
 
                     <li><a href="{{ url('/partner') }}">Partners</a></li>
 
                     <li class="parent"><a href="{{ url('/contectUs') }}">Contact Us</a>
                 
                     </li>
 
                 </ul>  
                 </nav>
 
             </div>
 
         </div>
 
 
         </div>
     </header>
    <!--End Header-->
 
 
     <!-- Mobile Menu Start -->
     <div class="container">
     <div id="page">
             <header class="header">
                 <a href="#menu"></a>
 
             </header>
 
             <nav id="menu">
                 <ul>
                     <li class="select"><a href="#.">Home</a>
                         
                     </li>
                     <li><a href="#.">About us</a>
                         
                     </li>
                     <li><a href="#.">Category</a>
                         
                     </li>
 
                     <li><a href="procedures.html">Partners</a></li>
 
                     <li><a href="#.">News</a> </li>
 
 
                     <li><a href="#.">Jobs</a>
                         
                     </li>
 
                   
 
                     <li><a href="#.">Contact Us</a>
                         
                     </li>
 
                 </ul>
 
 
             </nav>
         </div>
         </div>
     <!-- Mobile Menu End -->