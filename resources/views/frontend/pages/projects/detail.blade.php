@extends('layouts.frontend.master')
@section('content')

@push('styles')
<style type="text/css">
    .case-study.case-study-2 {
    padding-top: 50px;
    padding-bottom: 100px;
}
.case-item .case-img {
    position: relative;
    overflow: hidden;
    border-radius: 4px;
    height: 184px;
}

</style>
@endpush
<section class="page-title page-title-12 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{$project->thumbnail}}" alt="Background"></div>
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-10 offset-lg-1">
             <div class="title text-center">
                <div class="title-heading">
                   <h1>{{$project->title}} </h1>
                </div>
                <div class="clearfix"></div>
                <ol class="breadcrumb justify-content-center">
                   <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                   <li class="breadcrumb-item"><a href="{{route('projects')}}">case studies</a></li>
                   <li class="breadcrumb-item active" aria-current="page">{{$project->title}}</li>
                </ol>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="case-study case-study-2" id="case-study">
    <div class="container">
       <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-lg-0">
             <div class="sidebar sidebar-case-study">
                <div class="widget widget-categories">
                   <div class="widget-title">
                      <h5>Industries</h5>
                   </div>
                   <div class="widget-content">
                      <ul class="list-unstyled">
                          @foreach ($industries as $item)

                    <li ><a href="{{route('projects',['query'=>$item->slug])}}">{{$item->name}}</a></li>
                          @endforeach

                      </ul>
                   </div>
                </div>
                <div class="widget widget-reservation">
                   <img src="{{$project->thumbnail}}" alt="Background Image">
                   <div class="widget-content">
                      <h5>Services Provided</h5>
                      <p>{{$project->other_details}}</p>
                      <a class="btn btn--transparent btn--inverse btn--block" href="{{route('contact')}}">Contact Us</a>
                   </div>
                </div>
                <div class="widget widget-download">
                   <div class="widget-title">
                      <h5>download</h5>
                   </div>
                   <div class="widget-content">
                      <ul class="list-unstyled">
                         <li><a href="javascript:void(0)"> <span>company profile</span><span class="icon">pdf</span></a></li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-8">
             <div class="case-study-entry">
                <div class="entry-content">
                   <div class="entry-bio">
                      <h5>overview</h5>
                      <p>{{$project->description}}</p>
                   </div>
                   <div class="video bg-overlay bg-overlay-dark" id="video1">
                      <div class="bg-section"><img src="{{$project->thumbnail}}" alt="background"></div>
                      <div class="player"><a class="popup-video" href="https://www.youtube.com/watch?v=iKO3TcdWppg"> <i class="fas fa-play"></i></a></div>
                   </div>
                   <div class="entry-bio">
                      <h5>Services Provided</h5>
                      <p>{{$project->services_provided}}</p>
                   </div>
                   <div class="entry-topics">
                   @foreach ($project->projectSections as $item)
                   <div class="entry-bio entry-topic">
                    <h5>{{$item->title}} </h5>
                        <p>{{$item->description}}</p>
                     </div>
                   @endforeach

                   </div>

                   <div class="case-study case-study-1">
                      <div class="heading">
                         <h4 class="heading-title">case studies </h4>
                      </div>
                      <div class="carousel owl-carousel" data-slide="2" data-slide-rs="2" data-autoplay="false" data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
                        @foreach ($projects as $item)
                        <div class="case-item">
                            <div class="case-item-warp">
                               <div class="case-img"><img src="{{$item->thumbnail}}" alt="{{$item->slug}}"></div>
                               <div class="case-content">
                                  <div class="case-title">
                                     <h4><a href="javascript:void(0)">{{$item->title}}</a></h4>
                                  </div>
                                  <div class="case-cat"><a href="javascript:void(0)">{{$item->destination}}</a></div>
                               </div>
                            </div>
                         </div>
                        @endforeach
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>


@endsection