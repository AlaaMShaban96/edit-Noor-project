@php
    $categories=App\Models\CategoryTranslation::all();
  
    $logo=App\Models\Logo::all();
    $footer=App\Models\Footer::all()->first();

@endphp
<div id="wrap">
    <!--Start PreLoader-->
    <div id="preloader">
         <div id="status">&nbsp;</div>
 
         <div class="loader">
             <img style="margin-bottom: 20px " src="{{asset('website/images/favicon-medical.png')}}"/>
             
            
         </div>
     </div>
     <!--End PreLoader-->
 
   
    <!--Start Top Bar-->
    <div class="top-bar">
            <div class="container">
             <div class="row">
 
                 <div class="col-md-5">
                     <span >NA - Noor Al-Amana Pharmaceuticals &amp; Medical Supplies l.t.d  </span>
                 </div>
 
                 <div class="col-md-7">
 
                     <div class="get-touch">
 
                         <ul>
                            <li>
                                <a>
                                <i class="icon-phone4"></i>
                                    @if($footer->phoneNumber->isEmpty())
                                    +{{"218 21 340 7995"}}
                                    @else
                                    +{{ $footer->phoneNumber()->first()->phone}}
                                    @endif
                                </a>
                            </li>
                            <li>
                                <span>
                                    <i class="icon-location"></i>
                                    @if($footer->ourAddress->isEmpty())
                                    Al-sheikh St, Al-Noflieen, Tripoli-Libya
                                    @else
                                    {{$footer->ourAddress()->first()->ourAddressTranslation()->first()->name}}
                                    @endif
                                </span>
                            </li>
 
                         </ul>
 
                         <ul  class="social-icons">
                         
                         <li><a href="#." class="fb"><i class="icon-euro"></i> </a></li>
                         
                         @auth('admin')
                         <li><a href="{{url('cpanel/admin/')}}" class=""><i class=""></i>Cpanel</a></li>  
                         <li><a href="{{url('cpanel/admin/logout')}}" class=""><i class=""></i>logout</a></li>  
                         @endauth
                         
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
                 <a href="website/images/favicon-medical.png" class="logo"><img src="{{asset($logo->first()==null?'website/images/logo.png':$logo->first()->image)}}" alt=""></a>
             </div>
             
             <div class="col-md-9">
 
 
                 <nav class="menu-2">
                 <ul class="nav wtf-menu">
                     <li class=" parent {{ (\Request::route()->getName() == 'website.home.index') ? 'item-select' : '' }}"><a href="{{ url('/') }}">Home</a>
 
                     </li>
 
                     <li class="parent  {{ (\Request::route()->getName() == 'website.about.index') ? 'item-select' : '' }}"><a href="{{ route('website.about.index')}}">About Us</a>
     
                     </li>

                     <li class="parent  {{ (\Request::route()->getName() == 'website.category.index') ? 'item-select' : '' }}"> 
                         <a href="{{ url('/category') }}">category</a>
						<ul class="submenu">
                            @foreach ($categories as $category)
                                @if ($category->language_code=='en')
                                    <li> 
                                        <a href="{{url("/category/".$category->category->id)}}">{{$category->name}}</a>
                                        <ul class="submenu">
                                            @foreach ($category->category->subCategories as $subCategories)
                                                @foreach ($subCategories->subCategoryTranslation as $subCategory)
                                                    <li> <a href="{{url('/category/subcategory/'.$subCategory->subCategory->id)}}">{{$subCategory->name}}</a> </li>
                                                @endforeach
                                            
                                            @endforeach
                                        </ul> 
                                    </li>   
                                @endif
                            
                            @endforeach
                        
                      
					</ul>
					</li>
 
                     <li class="parent  {{ (\Request::route()->getName() == 'website.news.index') ? 'item-select' : '' }}" ><a href="{{ url('/news') }}">News</a></li>
 
                  
 
                     <li class="parent  {{ (\Request::route()->getName() == 'website.job.index') ? 'item-select' : '' }}" ><a href="{{ url('/job') }}">Jobs</a>
                 
                     </li>
 
                     <li class="parent  {{ (\Request::route()->getName() == 'website.partner.index') ? 'item-select' : '' }}" ><a href="{{ url('/partner') }}">Partners</a></li>
 
                     <li class="parent  {{ (\Request::route()->getName() == 'website.contectUs.index') ? 'item-select' : '' }}" ><a href="{{ route('website.contectUs.index') }}">Contact Us</a>
                 
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