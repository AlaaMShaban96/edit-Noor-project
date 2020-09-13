@extends('website.layouts.master')
@section('titel','contectUs')
    
@section('content')
    <div class="content">
    
    
    
        <div class="contact-us">
                <div class="container">
                
                <div class="row">
                    <div class="col-md-12">
                    
                    <div class="our-location">
                    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.4851002213218!2d13.223439084815261!3d32.88534028093956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9c82e032f72bd93!2z2YbZiNixINin2YTYp9mF2KfZhtipINmE2KfYs9iq2YrYsdin2K8g2KfZhNin2K_ZiNmK2Kkg2YjYp9mE2YXYs9iq2YTYstmF2KfYqiDYp9mE2LfYqNmK2Kk!5e0!3m2!1sar!2sly!4v1600014190225!5m2!1sar!2sly" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                            
                    </div>
                    
                    </div>
                </div>
                
            </div>
            
            
            <div class="leave-msg dark-back">
                <div class="container">
                
                <div class="rox">
                    <div class="col-md-7">
                        
                        <div class="main-title">
                            <h2>Don’t Hesitate To
                                Contact With Us For Any
                                Kind Of Information</h2>
                        </div>
                        
                        <div class="form">
                    <div class="row">
                                        <p class="success" id="success" style="display:none;"></p>
                                        <p class="error" id="error" style="display:none;"></p>
                    <form name="contact_form" id="contact_form" method="post" action="#" onSubmit="return false">
                        <div class="col-md-4"><input type="text" data-delay="300" placeholder="Your full name" name="contact_name" id="contact_name" class="input"></div>
                        <div class="col-md-4"><input type="text" data-delay="300" placeholder="E-mail Address" name="contact_email" id="contact_email" class="input"></div>
                        <div class="col-md-4"><input type="text" data-delay="300" placeholder="Subject" name="contact_subject" id="contact_subject" class="input"></div>
                        <div class="col-md-12"><textarea data-delay="500" class="required valid" placeholder="Message" name="message" id="message"></textarea></div>
                        <div class="col-md-3"><input name=" " type="submit" value="submit" onClick="validateContact();"></div>
                        </form>
                        
                    </div>
                </div>
    
                        
                    </div>
                    
                    <div class="col-md-5">
                        
                        <div class="contact-get">
                        <div class="main-title">
                            <h2><span>GET IN</span> Touch</h2>
                        </div>
                        
                        <div class="get-in-touch">
                        <div class="detail">
                            <span><b>Phone:</b> 1.800.555.6789</span>
                            <span><b>Email:</b> <a href="#.">support@medical.com</a></span>
                            <span><b>Address:</b> 12345 North Main Street, New York, NY</span>
                        </div>
                        
                        <div class="social-icons">
                                <a href="#." class="fb"><i class="icon-euro"></i></a>
                                <a href="#." class="tw"><i class="icon-yen"></i></a>
               
                        </div>
                        </div>
                        </div>
                        
                    </div>
                    
                </div>
    
                </div>
            </div>
            
        </div>
        
        
    </div>
@endsection
