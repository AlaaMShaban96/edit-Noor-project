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
															<img src="{{asset($subCategory->subCategory->image)}}" alt="image">
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