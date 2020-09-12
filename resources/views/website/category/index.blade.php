@extends('website.layouts.master')
@section('titel','service')
@section('style')
<style>
    .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
           float: left;
    }

   
        .col-xs-6 {
            width: 50%;
        }
        @media (max-width: 375px) {
        .col-xs-6 {
            width: 100%;
        }
        
    } 
      .defult{
		  display: none;
	  }
    
</style>
@endsection  
@section('content')

<div class="content">
		
    <div class="news-posts">
        <div class="container">
            <div class="row">
                  <div class="col-md-4 col-xs-6">
                    <div class="categories">
                        <h6 class="bar-title">Categories</h6>
                        <ul>
                            <li><a href="#." onclick="openPage('x')"><i class="icon-chevron-small-right"></i> Facelift</a></li>
                            <li><a href="#." onclick="openPage('y')"><i class="icon-chevron-small-right"></i> Dental</a></li>
                            <li><a href="#." onclick="openPage('Home')"><i class="icon-chevron-small-right"></i> Tummy Tuck</a></li>
                            <li><a href="#." onclick="openPage('Home')"><i class="icon-chevron-small-right"></i> Colonoscopy</a></li>
                            <li><a href="#." onclick="openPage('Home')"><i class="icon-chevron-small-right"></i> Heart Patient</a></li>
                            <li><a href="#." onclick="openPage('Home')"><i class="icon-chevron-small-right"></i> Chin Implant</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-xs-6" style="margin-top: 104px;">
                        
                        <div class="row">
							<div id="x" class="defult">
								<div class="col-md-3 col-sm-6 col-xs-6 shop-item-width">
									<div class="single-item-Wrapper">
										<div class="shop-img-item">
											<img src="website/images/cart-img2.jpg" alt="image">
										</div>
										<div class="single-Text-item">
											<h5> Allergy </h5>
										</div>
									</div> <!-- /.single-item-Wrapper-->
								</div>
								 <!-- /.single-item-Wrapper-->
								<div class="col-md-3 col-sm-6 col-xs-6 shop-item-width">
									<div class="single-item-Wrapper">
										<div class="shop-img-item">
											<img src="website/images/cart-img2.jpg" alt="image">
										</div>
										<div class="single-Text-item">
											<h5> Allergy </h5>
										</div>
									</div> <!-- /.single-item-Wrapper-->
								</div>
								 <!-- /.single-item-Wrapper-->
								<div class="col-md-3 col-sm-6 col-xs-6 shop-item-width">
									<div class="single-item-Wrapper">
										<div class="shop-img-item">
											<img src="website/images/cart-img2.jpg" alt="image">
										</div>
										<div class="single-Text-item">
											<h5> Allergy </h5>
										</div>
									</div> <!-- /.single-item-Wrapper-->
								</div>
								 <!-- /.single-item-Wrapper-->
                            </div>
							<div id="y" class="defult">
								<div class="col-md-3 col-sm-6 col-xs-6 shop-item-width">
									<div class="single-item-Wrapper">
										<div class="shop-img-item">
											<img src="website/images/cart-img2.jpg" alt="image">
										</div>
										<div class="single-Text-item">
											<h5> Allergy </h5>
										</div>
									</div> <!-- /.single-item-Wrapper-->
								</div>
							
                            </div>
                         
                        </div>
                </div>
             
              
            </div>
        </div>
    </div>




</div>
@endsection
@section('script')

<script>
	var lastPage="";
	
	function openPage(pageName) {
  
  lastPage==""?"": document.getElementById(lastPage).style.display = "none";
  document.getElementById(pageName).style.display = "block"
  lastPage=pageName;
}
</script>
@endsection
