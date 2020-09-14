@extends('website.layouts.master')
@section('titel','category')

@section('style')
	<style>
		  .defult{
		  display: none;
	  }
	  .procedures {
    		padding:  0px;
		}
	</style>
@endsection
@section('content')


<!--Start Content-->
<div class="content" style="margin-bottom: 50px;" >
  <div class="procedures">
    <div class="container" style="margin-bottom: 4%;">

      <div class="row">
        <div class="col-md-4">

          <div class="procedures-links">
           
            <ul id="procedures-links" class="accordion">
				@foreach ($categories as $category)

					@foreach ($category->categoryTranslation as $category)
						<li>
							<div class="link" onclick="openPage({{$category->category->id}})" > {{$category->name}}<i class="icon-chevron-down"></i></div>
					  	</li>
					@endforeach
					
				@endforeach
             
              {{-- <li class="open">
                <div class="link">Cancer<i class="icon-chevron-down"></i></div>
                <ul class="submenu" style="display:block;">
                  <li><a href="#">Cell Death Research</a></li>
                  <li class="item-seclect"><a href="#">Cancer Center</a></li>
                  <li><a href="#">Brain Cancer</a></li>
                  <li><a href="#">Tumor Microenvironment</a></li>
                  <li><a href="#">Breast Cancer</a></li>
                  <li><a href="#">Childhood Cancers</a></li>
                  <li><a href="#">Endocrine Cancers</a></li>
                  <li><a href="#">Skin Cancer</a></li>
                  <li><a href="#">Male Cancers</a></li>
                </ul>
              </li>
              <li>
                <div class="link">Children's Health<i class="icon-chevron-down"></i></div>
                <ul class="submenu">
                  <li><a href="#">Skin Care</a></li>
                  <li><a href="#">Face Care</a></li>
                  <li><a href="#">Hair Care</a></li>
                  <li><a href="#">Health Care</a></li>
                  <li><a href="#">Body Care</a></li>
                  <li><a href="#">Arm Care</a></li>
                  <li><a href="#">Chest Care</a></li>
                </ul>
              </li>
              <li>
                <div class="link">Department One<i class="icon-chevron-down"></i></div>
                <ul class="submenu">
                  <li><a href="#">Department One</a></li>
                  <li><a href="#">Department Two</a></li>
                  <li><a href="#">Department Three</a></li>
                  <li><a href="#">Department Four</a></li>
                  <li><a href="#">Department Five</a></li>
                  <li><a href="#">Department Six</a></li>
                  <li><a href="#">Department Seven</a></li>
                </ul>
              </li>
              <li>
                <div class="link">Department Two<i class="icon-chevron-down"></i></div>
                <ul class="submenu">
                  <li><a href="#">Department One</a></li>
                  <li><a href="#">Department Two</a></li>
                  <li><a href="#">Department Three</a></li>
                  <li><a href="#">Department Four</a></li>
                  <li><a href="#">Department Five</a></li>
                </ul>
              </li> --}}

            </ul>

          </div>


        </div>



        <div class="col-md-8">
			<div class="row">
				@foreach ($categories as $category)
					<div id="{{$category->id}}" class="defult">
						@foreach ($category->subCategories as $subCategory)
						

								@foreach ($subCategory->subCategoryTranslation as $subCategory)

											<div class="col-md-3 col-sm-6 col-xs-6 shop-item-width" style="margin-top: 50PX;">
												<a href="{{url('/category/subcategory/'.$subCategory->subCategory->id)}}">
													<div class="single-item-Wrapper">
														<div class="shop-img-item">
															<img src="{{$subCategory->subCategory->image}}" alt="image">
														</div>
														<div class="single-Text-item">
															<span> {{$subCategory->name}}</span>
														</div>
													</div>
												</a>	
											</div>
										
								@endforeach
								
						
						@endforeach
					</div>	
				@endforeach
					 <!-- single-item-Wrapper-->
					
			</div>

        </div>
      </div>
    </div>
    <!--End Content-->
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