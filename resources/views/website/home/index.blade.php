@extends('website.layouts.master')
@section('titel','Home')
    
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
    <div class="link"><img class="time-tab" src="website/images/timetable-menu-dark-blue.png" alt=""></div>
    
    </li>
    </ul>
    </div>
</div>
    
    
    
       <!--Start Banner-->
    
       <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>	<!-- SLIDE  -->
    
                    @foreach ($sliders as $slide)
                    @if ($slide->language_code='en')
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">
            
                        <img src="{{$slide->slide->image}}" alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                
                
                        <div class="tp-caption customin customout rs-parallaxlevel-0"
                            data-x="right"
                            data-y="188"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="700"
                            data-start="1200"
                            data-easing="Power3.easeInOut"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 4;"><img style="border-bottom:solid 6px #3c763d;" src="website/images/slides/transprint-bg.png" alt="" >
                
                        </div>
                
                
                        <div class="tp-caption title-bold tp-resizeme rs-parallaxlevel-0 fade start"
                            data-x="670"
                            data-y="218"
                            data-speed="1000"
                            data-start="1800"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-endspeed="300"
                            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                            {{$slide->name}}
                        </div>
                
                        <div class="tp-caption small-title tp-resizeme rs-parallaxlevel-0 fade start"
                            data-x="670"
                            data-y="255"
                            data-speed="1000"
                            data-start="1800"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-endspeed="300"
                            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                            
                        </div>
                
                        <div class="tp-caption paragraph tp-resizeme rs-parallaxlevel-0 fade start"
                            data-x="670"
                            data-y="325"
                            data-speed="1000"
                            data-start="1800"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.05"
                            data-endelementdelay="0.1"
                            data-endspeed="300"
                            style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                            <div style="text-align:left;">
                                {{$slide->description}}       
                            </div>
                        </div>
                
                
                        <div class="tp-caption banner-button tp-resizeme rs-parallaxlevel-0  fade start"
                            data-x="670"
                            data-y="402"
                            data-speed="1000"
                            data-start="1800"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.05"
                            data-endelementdelay="0.1"
                            data-endspeed="300"
                            style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; border-radius: 5px;"><div style="text-align:left; background:#525866; border-radius: 5px;">

                            </div>
                        </div>
                
                    </li>
                    @endif
                    @endforeach
    
    
          </ul>
        <div class="tp-bannertimer"></div>	</div>
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
                    <p>text text text text </p>
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
                                        <img src="{{$category->category->image}}" alt="">
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


       <!--End Welcome-->
    
    
    
       <!--Start Specialists-->
       {{-- <div class="meet-specialists">
               <div class="container">
    
    
                <div class="row">
                <div class="col-md-12">
                <div class="main-title">
                    <h2><span>Meet Our</span> Specialists</h2>
                    <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut volutpat eros  adipiscing nonummy.</p>
                </div>
                </div>
                </div>
    
                <div id="demo">
            <div class="container">
                <div class="row">
                    <div class="span12">
    
                  <div id="owl-demo4" class="owl-carousel">
    
                    <div class="post item">
    
                            <div class="gallery-sec">
                                <div class="website/image-hover img-layer-slide-left-right">
                                <img src="website/images/team-member1.jpg" alt="">
                                <div class="layer">
                                        <a href="#."><i class="icon-euro"></i></a>
                                        <a href="#."><i class="icon-yen"></i></a>
                                        <a href="#."><i class="icon-caddieshoppingstreamline"></i></a>
                                     </div>
                                </div>
                            </div>
    
                        <div class="detail">
                            <h6>Dr. Andrew Bert</h6>
                            <span>Outpatient Surgery</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo.</p>
                            <a href="team-member-detail.html">- View Profile</a>
                        </div>
    
                    </div>
                    <div class="post item">
    
                        <div class="gallery-sec">
                                <div class="website/image-hover img-layer-slide-left-right">
                                <img src="website/images/team-member2.jpg" alt="">
                                <div class="layer">
                                        <a href="#."><i class="icon-euro"></i></a>
                                        <a href="#."><i class="icon-yen"></i></a>
                                        <a href="#."><i class="icon-caddieshoppingstreamline"></i></a>
                                     </div>
                                </div>
                            </div>
    
                        <div class="detail">
                            <h6>Dr. Sara Stefon</h6>
                            <span>Cardiologist</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo.</p>
                            <a href="team-member-detail.html">- View Profile</a>
                        </div>
    
                    </div>
                    <div class="post item">
    
                        <div class="gallery-sec">
                                <div class="website/image-hover img-layer-slide-left-right">
                                <img src="website/images/team-member3.jpg" alt="">
                                <div class="layer">
                                        <a href="#."><i class="icon-euro"></i></a>
                                        <a href="#."><i class="icon-yen"></i></a>
                                        <a href="#."><i class="icon-caddieshoppingstreamline"></i></a>
                                     </div>
                                </div>
                            </div>
    
                        <div class="detail">
                            <h6>Dr. Wahab Apple</h6>
                            <span>Heart Specialist</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo.</p>
                            <a href="team-member-detail.html">- View Profile</a>
                        </div>
    
                    </div>
    
                    <div class="post item">
    
                        <div class="gallery-sec">
                                <div class="image-hover img-layer-slide-left-right">
                                <img src="website/images/team-member4.jpg" alt="">
                                <div class="layer">
                                        <a href="#."><i class="icon-euro"></i></a>
                                        <a href="#."><i class="icon-yen"></i></a>
                                        <a href="#."><i class="icon-caddieshoppingstreamline"></i></a>
                                     </div>
                                </div>
                            </div>
    
                        <div class="detail">
                            <h6>Dr. Mecan smith</h6>
                            <span>Heart Specialist</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo.</p>
                            <a href="team-member-detail.html">- View Profile</a>
                        </div>
    
                    </div>
    
                    <div class="post item">
    
                            <div class="gallery-sec">
                                <div class="website/image-hover img-layer-slide-left-right">
                                <img src="website/images/team-member5.jpg" alt="">
                                <div class="layer">
                                        <a href="#."><i class="icon-euro"></i></a>
                                        <a href="#."><i class="icon-yen"></i></a>
                                        <a href="#."><i class="icon-caddieshoppingstreamline"></i></a>
                                     </div>
                                </div>
                            </div>
    
                        <div class="detail">
                            <h6>Dr. Jack Bravo</h6>
                            <span>Heart Specialist</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo.</p>
                            <a href="team-member-detail.html">- View Profile</a>
                        </div>
    
                    </div>
    
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
       </div> --}}
       <!--End Specialists-->
    
    
       <!--Start Latest News-->
       <div class="latest-news dark-back">
               <div class="container">
    
                <div class="row">
                <div class="col-md-12">
                <div class="main-title">
                    <h2>
                        <span>Latest News from</span>
                         Noor AL-Amana
                    </h2>
                    <p>text text text text </p>
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
                            <img class="lazyOwl" src="{{$post->post->image}}" alt="">
                            <div class="detail">
                                <img height="188px" src="images/news-dr1.jpg" alt="">
                                <h4><a href="news-detail.html">{{$post->title}}</a></h4>
                                <p>{{$post->content}}</p>
                                <span><i class="icon-clock3"></i> Apr 22, 2016</span>
                                {{-- <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 5 Comments</a></span> --}}
                            </div>
                        </div>
                    @endif
                    @endforeach
                   
                    {{-- <div class="post item">
                        <img class="lazyOwl" src="website/images/news-img2.jpg" alt="">
                        <div class="detail">
                            <img src="website/images/news-dr2.jpg" alt="">
                            <h4><a href="news-detail.html">Laboratory Tests</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                            <span><i class="icon-clock3"></i> Apr 09, 2016</span>
                            <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 3 Comments</a></span>
                        </div>
                    </div>
    
                    <div class="post item">
                        <img class="lazyOwl" src="website/images/news-img3.jpg" alt="">
                        <div class="detail">
                            <img src="images/news-dr1.jpg" alt="">
                            <h4><a href="news-detail.html">Research Center</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                            <span><i class="icon-clock3"></i> Mar 28, 2016</span>
                            <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 0 Comments</a></span>
                        </div>
                    </div>
    
                    <div class="post item">
                        <img class="lazyOwl" src="website/images/news-img4.jpg" alt="">
                        <div class="detail">
                            <img src="website/images/news-dr2.jpg" alt="">
                            <h4><a href="news-detail.html">Child Birth</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                            <span><i class="icon-clock3"></i> Mar 15, 2016</span>
                            <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 0 Comments</a></span>
                        </div>
                    </div>
    
                    <div class="post item">
                        <img class="lazyOwl" src="website/images/news-img5.jpg" alt="">
                        <div class="detail">
                            <img src="website/images/news-dr2.jpg" alt="">
                            <h4><a href="news-detail.html">Special Treatment</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                            <span><i class="icon-clock3"></i> Mar 04, 2016</span>
                            <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 11 Comments</a></span>
                        </div>
                    </div> --}}
    
                  </div>
    
                </div>
              </div>
            </div>
    
        </div>
    
    
    
            </div>
       </div>
       <!--End Latest News-->
    
    
       <!--Start Testimonials-->
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
                            <img src="{{$partner->ourPartners->image}}" alt="">
                            <div class="height10"></div>
                            <span class="name">{{$partner->name}}</span>
                            <span class="patient">{{$partner->description}}</span>
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
              <a href="#"><img src="{{$supplier->image}}"></a>
             </div>
          @endforeach
        
      </section>
     </div>
 </div>
    </div>
@endsection