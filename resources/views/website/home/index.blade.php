@extends('website.layouts.master')
@section('titel','Home')
@section('style')
<style>
      .post-content-text {
            white-space: nowrap; 
            width: 100%; 
            overflow: hidden;
            text-overflow: ellipsis; 
           
        }
      .post-content-text-partner {
            white-space: nowrap; 
            width: 100%; 
            overflow: hidden;
            text-overflow: ellipsis; 
           
        }
</style>
@endsection
@section('content')
    

<div class="container">
    <div class="time-table-sec">
    <ul id="accordion2" class="accordion2">
    <li>
    <ul class="submenu time-table">
    <li class="tit"><h5>Working Time</h5></li>
    <li><span class="day">Monday - Friday</span> <span class="divider">-</span> <span class="time">8.00 - 16.00</span></li>
    <li><span class="day">Saturday</span> <span class="divider">-</span> <span class="time">9.15 - 17.00</span></li>
    <li><span class="day">Sunday</span> <span class="divider">-</span> <span class="time">9.45 - 15.00</span></li>
    </ul>
    <div class="link"><img class="time-tab" src="website/images/timetable-menu-dark-blue.png" alt="" lazy="loadoing"></div>
    
    </li>
    </ul>
    </div>
</div>
    
    
    
       <!--Start Banner-->
    
       <div class="tp-banner-container">
            <div class="tp-banner jumbotron" >
                <ul>	<!-- SLIDE  -->
    
                    @foreach ($sliders as $slide)
                    @if ($slide->language_code='en')
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">
            
                        <img src="{{asset($slide->slide->image)}}" alt="" lazy="loadoing" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="range range-fix">
                            <div class="col-xs-12 col-md-4 cell-xl-preffix-0" style="background-color:#ffff;">
                              <h1 style="color: #3a539b; font-size:1em;">{{$slide->name}}  </h1>
                              <p class="big">{{$slide->description}} </p>
                            </div>
                          </div>
                      
                   
                       
                
                        
                      
                
                
                
                    </li>
                    @endif
                    @endforeach
    
    
          </ul>
        <dipost-content-textv class="tp-bannertimer"></div>	</div>
    </div>
    
       <!--End Banner-->
    
    
    
    
    
    
    
    
       <!--Start Content-->
       <div class="content">
    
    
       <!--Start Welcome-->
<div class="welcome dark-back">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title">
                    <h2><span>Welcome to</span> Noor AL-Amana</h2>
                    {{--         --}}
                </div>
            </div>
        </div>
    
        <div id="tabbed-nav">
            <ul>
                @foreach ($categoies as $category)

                @if ($category->language_code='en')

                <li><a>{{$category->name}}</a></li>
            
                @endif
                    
                @endforeach
            </ul>
            <div>
                @foreach ($categoies as $category)
                    @if ($category->language_code='en')
                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="welcome-serv-img">
                                        <img src="{{asset($category->category->image)}}" alt="" lazy="loadoing" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="detail">
                                        <h4>{{$category->name}}</h4>
                                        <p>{{$category->description}}</p>
                                        <a href="{{url("/category/".$category->category->id)}}">Show Sub Category </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                @endforeach 
            </div>
        </div>
    </div>
</div>


    
    
       <!--Start Latest News-->
       <div class="latest-news dark-back" style="padding-top: 0px;">
               <div class="container">
    
                <div class="row">
                <div class="col-md-12">
                <div class="main-title">
                    <h2>
                        <span>Latest News from</span>
                         Noor AL-Amana
                    </h2>
                  
                </div>
                </div>
                </div>
    
    
    
    
                <div id="latest-news">
            <div class="container">
              <div class="row">
                <div class="span12">
    
                  <div id="owl-demo" class="owl-carousel">
                    @foreach ($posts as $post)
                    @if ($post->post->type=='News')
                        <div class="post item">
                            <img class="lazyOwl" src="{{asset($post->post->image)}}" alt="" lazy="loadoing">
                            <div class="detail">
                                <img height="188px" src="images/news-dr1.jpg" alt="">
                                <h4><a href="{{url("/news/$post->id")}}">{{$post->title}}</a></h4>
                                <p class="post-content-text">{{$post->content}}</p>
                                <span><i class="icon-clock3"></i>{{$post->created_at->diffForHumans()}}</span>
                                {{-- <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 5 Comments</a></span> --}}
                            </div>
                        </div>
                    @endif
                    @endforeach
                   
              
                  </div>
    
                </div>
              </div>
            </div>
    
        </div>
    
    
    
            </div>
       </div>
       <!--End Latest News-->
    
    
       <!--Start Testimonials-->

       @if ($partners->first() !=null)
       <div class="patients-testi dark-testi">
           <div class="container">
    
            <div class="row">
            <div class="col-md-12">
            <div class="main-title main-title2">
                <h2>Our Partners </h2>
            </div>
            </div>
            </div>
    
            <div id="testimonials">
          <div class="container">
            <div class="row">
    
              <div class="col-md-12">
              <div class="span12">
    
                <div id="owl-demo2" class="owl-carousel">
    
                    @foreach ($partners as $partner)
                        <div class="testi-sec">
                            <img src="{{asset($partner->ourPartners->image)}}" alt="" lazy="loadoing">
                            <div class="height10"></div>
                            <span class="name">{{$partner->name}}</span>
                            <p class="post-content-text-partner patient">{{$partner->description}}</p>
                            <div class="height30"></div>    
                        </div>
                    @endforeach

                </div>
    
              </div>
              </div>
    
            </div>
          </div>
        </div>
    
        </div>
       </div>
       @endif
    
       <!--End Testimonials-->
    
       </div>
    
       <!--End Content-->
       <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="row" >
            <div class=col-md-12>
                <h2 class="text-center">Our Suppliers    </h2>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
      <section class="customer-logos slider">
          @foreach ($suppliers as $supplier)
          <div class="slide">
              <a href="#"><img src="{{asset($supplier->image)}}" lazy="loadoing"></a>
             </div>
          @endforeach
        
      </section>
     </div>
 </div>
    </div>
@endsection