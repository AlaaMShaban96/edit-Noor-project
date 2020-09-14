@extends('website.layouts.master')
@section('titel','job')
    
@section('content')
  
   <!--Start Banner-->
   
   <div class="sub-banner">
   
    <img class="banner-img" src="{{asset('website/images/sub-banner.jpg')}}" alt="">
 <div class="detail">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 
                 <div class="paging">
                     <h2>Appointment</h2>
                 </div>
                 
             </div>
         </div>
     </div>
 </div>

</div>	

<!--End Banner-->

 @foreach ($job->JobTranslation as $job)

<!-- container job -->
 <div class="container"  style="padding-top: 50px;padding-bottom: 50px;">
     <div class="row"style="border: solid 2px rgba(0,0,0,0.05); padding: 20px;"   >
         <h2 class="text-center">{{$job->name}} </h2>
     </div>
     <div class="row" style="padding-top: 20px;padding-bottom:20px;
     border-bottom: solid 1px #dedede;">
         <div class="col-md-12">
             <br>
             <h3> <b>description job</b> </h3>
             <br>
            <p>{{$job->description}}</p>
            </div>
     </div>
     <div class="row" style="padding-top: 20px;padding-bottom:20px;
     border-bottom: solid 1px #dedede;">
         <div class="col-md-12">
             <br>
             <h3> <b>respondibility </b> </h3>
             <br>
             <p>{{$job->respondibility}}</p>
        </div>
     </div>
     <div class="row" style="padding-top: 20px;padding-bottom:20px;
     border-bottom: solid 1px #dedede;">
         <div class="col-md-12">
             <br>
             <h3> <b>qualification  job</b> </h3>
             <br>
             <p>{{$job->qualification}}</p>

            </div>
     </div>
     <div class="row" style="padding-top: 20px;padding-bottom:20px;
     border-bottom: solid 1px #dedede;">
         <div class="col-md-12">
             <br>
             <h3> <b>experience job</b> </h3>
             <br>
             <p>{{$job->experience}}</p>

            </div>
     </div>
     <div class="row" style="padding-top: 20px;
     ">
         <div class="col-md-12">
             <br>
             <h3> <b>skiles job</b> </h3>
             <br>
             <p>{{$job->skiles}}</p>

            </div>
     </div>
     <div class="row " style="padding-top: 20px;">
         
         <a href="{{url("/job/".$job->Job->id."/apply")}}" name="job app" class="btn btn-success col-md-12">submit</a>

     </div>
    
 </div>

@endforeach
<!-- end contaner -->
@endsection
