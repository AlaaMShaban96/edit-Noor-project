@extends('website.layouts.master')
@section('titel','News')

@section('content')
<div class="content">
		
    <div class="news-posts">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 col-xs-6">
                        <div class="news-sec">
                            <img src="{{asset($post->post->image)}}" style="width: 50%;" alt="">
                            <div class="detail">
                                <span>{{$post->created_at->diffForHumans()}}</span>
                                <h3>{{$post->titel}}</h3>
                                <p class="post-content-text">{{$post->content }}</p>
                            </div>
                        </div>  
 
                </div>
                

            </div>
        </div>
    </div>




</div>

@endsection
