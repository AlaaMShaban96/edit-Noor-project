@extends('website.layouts.master')
@section('titel','job')
    
@section('content')
<div class="content">
   
   
  
    <div class="container" style="padding-bottom: 50px; padding-top: 50px;">
             <div class="container">
              
              <div class="row">
              <div class="col-md-12">
              <div class="main-title text-center">
                  <h2>لتقديكم للوظيفة </h2>
                  <p>يرجاء تعبية جميع البيانات بشكل صحيح !</p>
              </div>
              </div>
              </div>
              
              <div class="row">
                  <div class="col-md-2" ></div>
                  <div class="col-md-8" >
                      
                      
              <div class="appointment-form" style=" border: solid 2px rgba(0,0,0,0.05); padding: 20px;">
                  
                  <div class="form">
                  
               <section class="bgcolor-a">
                 <p class="error" id="error" style="display:none;"></p>
                <p class="success" id="success" style="display:none;"></p>
      
            <form name="appointment_form" id="appointment_form" method="post" action="#" onSubmit="return false">
              <span class="input input--kohana" style="width: 100%;">
                  <input class="input__field input__field--kohana" type="text" id="input-29" name="input-29" />
                  <label class="input__label input__label--kohana" for="input-29">
                      <i class="icon-user6 icon icon--kohana"></i>
                      <span class="input__label-content input__label-content--kohana">الاسم </span>
                  </label>
              </span>
                  <span class="input input--kohana " style="width: 100%;">
                      <input class="input__field input__field--kohana" type="text" id="input-30" name="input-30"/>
                      <label class="input__label input__label--kohana" for="input-30">
                          <i class="icon-dollar icon icon--kohana"></i>
                          <span class="input__label-content input__label-content--kohana">البريد الالكتروني </span>
                      </label>
                  </span>
  
                  <span class="input input--kohana last" style="width: 100%;">
                      <input class="input__field input__field--kohana" type="text" id="input-31" name="input-31"/>
                      <label class="input__label input__label--kohana" for="input-31">
                          <i class="icon-phone5 icon icon--kohana"></i>
                          <span class="input__label-content input__label-content--kohana">رقم الهاتف </span>
                      </label>
                  </span>
                  <span class="input input--kohana last" style="width: 100%;">
                      <input class="input__field input__field--kohana" type="text" id="input-31" name="input-31"/>
                      <label class="input__label input__label--kohana" for="input-31">
                          <i class="icon-location icon icon--kohana"></i>
                          <span class="input__label-content input__label-content--kohana">العنوان </span>
                      </label>
                  </span>
                  <span class="input input--kohana last" style="width: 100%;">
                      <select class='input__field input__field--kohana'id="input-31" name="input-31"  name='genderroma' style="color: black;">
                         
                          <option  > طرابلس </option>
                          <option >مصراته </option>
                          <option >بنغازي </option>
                      </select>
                      
                      
                      <label class="input__label input__label--kohana" for="input-31">
                          <i class="icon-location icon icon--kohana"></i>
                          <span class="input__label-content input__label-content--kohana">المدينة </span>
                      </label>
                  </span>
                  <br>
                  <span class="input input--kohana" style="width: 100%;">
                      <input class="input__field input__field--kohana" type="text" id="datepicker"  id="input-85" name="input-85" placeholder="تاريخ الميلاد " onClick="removeChecks();" name="datepicker" />
                      <label class="input__label input__label--kohana" for="input-85">
                          <i class="icon icon icon--kohana"></i>
                          <span class="input__label-content input__label-content--kohana" >التاريخ </span>
                      </label>	
                  </span>
              
  
                  <span class="input input--kohana" style="border :2px dashed #000000; height: 80px;width: 100%;" >
                     
  
                     <div class="file-upload-wrapper" >
                     
                       <input type="file" id="input-file-now-custom-2" class="file-upload" placeholder="CV "
                       data-height="2500" />
                      </div>
                  </span>
                  <input name="submit_appointment" type="submit" value="تقديم"  style="width: 100%;" onClick="validateAppointment();">
                          
                          
              </form>
                  
              </section>
              
              
      
  
     
      
                  </div>
                  
              </div>
              
                  </div>
                  <div class="col-md-2" ></div>
              </div>
              
              
          </div>
     
    
     
     </div>
     <!--End Content-->
     
     
     
     
     <!--Start Footer-->
     <footer class="footer" id="footer">
             <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="emergency">
                          <i class="icon-phone5"></i>
                          <span class="text">For emergency cases</span>
                          <span class="number">1-300-400-8211</span>
                          <img src="images/emergency-divider.png" alt="">
                      </div>
                  </div>
              </div>
              
              
              <div class="main-footer">
                  <div class="row">
                      
                      <div class="col-md-3">
                          
                          <div class="useful-links">
                              <div class="title">
                                  <h5>Medical guide</h5>
                              </div>
                              
                              <div class="detail">
                                  <ul>
                                      
                                      <li><a href="#.">Home</a></li>
                                      <li><a href="#.">About Us</a></li>
                                      <li><a href="#.">Services</a></li>
                                      <li><a href="#.">Departments</a></li>
                                      <li><a href="#.">Timetable</a></li>
                                      <li><a href="#.">Why Us</a></li>
                                      <li><a href="#.">Specilaties</a></li>
                                      <li><a href="#.">Contact Us</a></li>
                                      <li><a href="#.">Events</a></li>
                                      
                                  </ul>
                              </div>
                              
                          </div>
                          
                      </div>
                      <div class="col-md-3">
                          
                          
                              <div class="title">
                                  <h5>LATEST TWEETS</h5>
                              </div>
                              
                              <div class="detail">
                                  
                                  <div class="tweets">
                                      
                                      <div class="icon">
                                          <i class="icon-yen"></i>
                                      </div>
                                      
                                      <div class="text">
                                          <p><a href="#.">@Rotography</a> Please kindly use Support Forum: <a href="#.">Medical.co.uk</a></p>
                                          <span>3 days ago</span>
                                      </div>
                                      
                                  </div>
                                  
                                  <div class="tweets">
                                      
                                      <div class="icon">
                                          <i class="icon-yen"></i>
                                      </div>
                                      
                                      <div class="text">
                                          <p>A quick launcher for WordPress dashboard <a href="#.">@Medical</a></p>
                                          <span>about a week ago</span>
                                      </div>
                                      
                                  </div>
                                  
                              </div>
                              
                          
                          
                      </div>
                      <div class="col-md-3">
                          
                          <div class="newsletter">
                              <div class="title">
                                  <h5>NEWSLETTER</h5>
                              </div>
                              
                              <div class="detail">
                                  
                                      <div class="signup-text">
                                          <i class="icon-dollar"></i>
                                          <span>Sign up with your name and email to get updates fresh updates.</span>
                                      </div>
                                      
                                      <div class="form">
                                      <p class="subscribe_success" id="subscribe_success" style="display:none;"></p>
                                      <p class="subscribe_error" id="subscribe_error" style="display:none;"></p>
                                      
                                      <form name="subscribe_form" id="subscribe_form" method="post" action="#" onSubmit="return false">
                                          <input type="text" data-delay="300" placeholder="Your Name" name="subscribe_name" id="subscribe_name" onKeyPress="removeChecks();" class="input" >
                                          <input type="text" data-delay="300" placeholder="Email Address" name="subscribe_email" id="subscribe_email" onKeyPress="removeChecks();" class="input" >
                                          <input name="Subscribe" type="submit" value="Subscribe" onClick="validateSubscription();">
                                      </form>
                                      </div>
                                      
                                  </div>
                              
                              
                          </div>
                          
                      </div>
                      <div class="col-md-3">
                          
                          <div class="get-touch">
                              <div class="title">
                                  <h5>GET IN TOUCH</h5>
                              </div>
                              
                              <div class="detail">
                                  <div class="get-touch">
                                      
                                      
                                      <span class="text">Medical Bibendum auctor, to consequat ipsum, nec sagittis sem</span>
                                      
                                      
                                      <ul>
                                          <li><i class="icon-location"></i> <span>Medical Ltd, Manhattan 1258, New York, USA Lahore</span></li>
                                          <li><i class="icon-phone4"></i> <span>(+1) 234 567 8901</span></li>
                                          <li><a href="#."><i class="icon-dollar"></i> <span>hello@medical-guide.com</span></a></li>
                                      </ul> 
                                      
                                  </div>
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
                          <span class="copyrights">Copyright &copy; 2015 Medical Guide. All right reserved.</span>
                      </div>
                      
                      <div class="col-md-6">
                          <div class="social-icons">
                              <a href="#." class="fb"><i class="icon-euro"></i></a>
                              <a href="#." class="tw"><i class="icon-yen"></i></a>
                              <a href="#." class="gp"><i class="icon-google-plus"></i></a>
                              <a href="#." class="vimeo"><i class="icon-vimeo4"></i></a>
                          </div>
                      </div>
                      
                  </div>
              </div>
              
          </div>
          
     </footer>
     <!--End Footer-->
  
  
  
  
    </div>
@endsection

