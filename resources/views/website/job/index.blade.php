@extends('website.layouts.master')
@section('titel','job')
@section('content')
<div class="news-posts">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                    @foreach ($jobs as $job)
                        @foreach ($job->JobTranslation as $job)
                        <div class="news-sec">
                            
                            <div class="detail text-center ">
                            
                                <h3>{{$job->name}}</h3>
                                <p>{{$job->description}}</p>
                                <p>
                                    <a href="{{url("/job/".$job->Job->id."/apply?title=".$job->name)}}" class="btn btn-primary btn-sm">Apply</a>
                                    <a href="{{url("/job/".$job->Job->id."/detils")}}" class="btn btn-default btn-sm">show detils</a>
                                </p>
                            </div>
                        </div> 
                        @endforeach
                    @endforeach
                   
                    {{-- <div class="news-sec">
                        
                        <div class="detail">
                        
                            <h3>titel job</h3>
                            <p>Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.  sed quia qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omniillo inventore.</p>
                            <p>
                                <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                <button type="button" class="btn btn-default btn-sm">Small button</button>
                              </p>
                        </div>
                    </div>
                    <div class="news-sec">
                        
                        <div class="detail">
                        
                            <h3>titel job</h3>
                            <p>Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.  sed quia qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omniillo inventore.</p>
                            <p>
                                <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                <button type="button" class="btn btn-default btn-sm">Small button</button>
                              </p>
                        </div>
                    </div> --}}
                    
                    
                    
                    
                    
            
        
                    
            </div>
            <div class="col-md-3"></div>
            

        </div>
    </div>
</div>

@endsection