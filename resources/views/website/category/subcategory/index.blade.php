@extends('website.layouts.master')
@section('titel','category')

@section('style')
<style>
	
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

        <div class="col-md-8">
			<div class="row">

					
						@foreach ($category->subCategories as $subcategory)
						

								@foreach ($subcategory->subCategoryTranslation as $subcategory)

											<div class="col-md-3 col-sm-6 col-xs-6 shop-item-width" style="margin-top: 50PX;">
												<a href="{{url('/category/subcategory/'.$subcategory->subCategory->id)}}">
													<div class="single-item-Wrapper">
														<div class="shop-img-item">
															<img src="{{asset($subcategory->subcategory->image)}}" alt="{{$subcategory->subcategory->image}}" lazy="loadoing">
														</div>
														<div class="single-Text-item">
															<span> {{$subcategory->name}}</span>
														</div>
                                                    </div>
                                                </a>
											</div>
										
								@endforeach
								
						
						@endforeach
					

					 <!-- single-item-Wrapper-->
					
			</div>

        </div>
      </div>
    </div>
    <!--End Content-->
    @endsection
@section('script')


	
@endsection