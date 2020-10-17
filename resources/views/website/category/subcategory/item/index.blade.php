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
<div class="content" style="margin-bottom: 50px;">
  <div class="procedures">
    <div class="container" style="margin-bottom: 4%;">
      <div class="row">
        <div class="col-md-8">
			<div class="row">
				@foreach ($subCategory->items as $item)
					@foreach ($item->itemTranslation as $item)
						<div class="col-md-3 col-sm-6 col-xs-6 shop-item-width" style="margin-top: 50PX;">
							<div class="single-item-Wrapper">
								<div class="shop-img-item">
									<img src="{{asset($item->item->image)}}" alt="{{$item->item->image}}" lazy="loadoing">
								</div>
								<div class="single-Text-item">
									<span> {{$item->name}}</span>
								</div>
							</div>
						</div>
					@endforeach
				@endforeach
			</div>
        </div>
      </div>
    </div>
    <!--End Content-->
    @endsection
@section('script')


@endsection