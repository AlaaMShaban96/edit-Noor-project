@extends('website.layouts.master')
@section('titel','partner')

@section('content')
<div class="content">
		
    <div class="news-posts">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 col-xs-6">
                        <div class="news-sec">
                            <img src="{{asset($partner->ourPartners->image)}}" style="width: 50%;" alt="">
                            <div class="detail">
                                <h3>{{$partner->name}}</h3>
                                <p class="post-content-text">{{$partner->description }}</p>
                            </div>
                        </div>  
 
                </div>
                

            </div>
        </div>
    </div>




</div>

@endsection
