@extends('website.layouts.master')
@section('titel','news')
@section('style')
    <style>
        .post-content-text {
            white-space: nowrap; 
            width: 100%; 
            overflow: hidden;
            text-overflow: ellipsis; 
           
        }
        .image-card-content{
            width: 77%;
            height: 245px;
        }
    </style>

@endsection
@section('content')
<div class="content">
		
    <div class="news-posts">
        <div class="container">
            <div class="row">
            
                        @foreach ($posts as $post)
						<div class="col-md-4 col-sm-6 col-xs-6 shop-item-width">
                            <div class="news-sec">
                            <img class="image-card-content" src="{{asset($post->post->image)}}"  alt="">
                            <div class="detail">
                                <span>{{$post->created_at->diffForHumans()}}</span>
                                <h3>{{$post->titel}}</h3>
                                <p class="post-content-text">{{$post->content }}</p>
                                <a href="{{url("/news/$post->id")}}" class="read-more">read more</a>
                            </div>
                        </div>  
                    </div>  
                        @endforeach
                      
                        
                
                        
                {{-- </div> --}}
                

            </div>
        </div>
    </div>




</div>

@endsection
