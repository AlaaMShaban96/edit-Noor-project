@php
    $footer=App\Models\Footer::find(1);
@endphp
   <!--Start Footer-->
    <footer class="footer" id="footer">
    <div class="container">



     <div class="main-footer">
         <div class="row">
             <div class="col-md-4">

                 <div class="get-touch">
                     <div class="title">
                         <h5>About Us</h5>
                     </div>

                     <div class="detail">
                         <div class="get-touch">


                             <span class="text">Noor Al-Amana - NA
                                 Pharmaceuticals & Medical Devices l.t.d .</span>


                             <ul>
                                 <li><i class="icon-location"></i> <span>{{$footer->ourAddress()->first()->ourAddressTranslation()->first()->name}} </span></li>
                                 <li><i class="icon-phone4"></i> <span>+{{$footer->phoneNumber()->first()->phone}}</span></li>
                                 <li><a href="#."><i class="icon-dollar"></i> <span>{{$footer->email()->where('email_type_id',2)->first()->link}}</span></a></li>
                             </ul>

                         </div>
                     </div>

                 </div>

             </div>
             <div class="col-md-4">

                 <div class="useful-links">
                     <div class="title">
                         <h5>Medical guide</h5>
                     </div>

                     <div class="detail">
                         <ul>
                           
                            @forelse ($footer->ourAddress as $address)
                            <li><a href="#."> {{$address->ourAddressTranslation()->first()->name}}</a></li> 
                            @empty
                                <li><a href="#."> Tripoli</a></li>
                                <li><a href="#.">Misrata</a></li>
                                <li><a href="#.">Banghazi</a></li>
                                <li><a href="#.">AL-Zawyah</a></li>
                            @endforelse
                            


                         </ul>
                     </div>

                 </div>

             </div>

             <div class="col-md-4">

                 <div class="newsletter">
                   
                     <div class="detail">

                             <div class="signup-text">
                                 <span>Noor Al-Amana - NA <br> Pharmaceuticals &amp; Medical Devices l.t.d .</span>
                             </div>

                             <div class="form">
                             <p class="subscribe_success" id="subscribe_success" style="display:none;"></p>
                             <p class="subscribe_error" id="subscribe_error" style="display:none;"></p>

                             </div>

                    </div>


                 </div>

             </div>


         </div>
     

 </div> 

 <div class="footer-bottom">
     <div class="container">
         <div class="row">

             <div class="col-md-6">
                 <span class="copyrights">Copyright &copy; <script>document.write(new Date().getFullYear());</script>  Noor Al-Amana. All right reserved <a href="{{ URL::to('http://www.nano-tech.ly') }}" target="__blink" style="color: #fff;"><b>Nano tech </b></a></span>
             </div>

             <div class="col-md-6">
                 <div class="social-icons">
                     <a href="{{$footer->email()->where('email_type_id',1)->first()==null?"":$footer->email()->where('email_type_id',1)->first()->link}}" class="fb"><i class="icon-euro"></i></a>
                     <a href="{{$footer->email()->where('email_type_id',4)->first()==null?"":$footer->email()->where('email_type_id',1)->first()->link}}" class="tw"><i class="icon-yen"></i></a>


                 </div>
             </div>

         </div>
     </div>

 </div>

</footer>
<!--End Footer-->
<!--End Footer-->