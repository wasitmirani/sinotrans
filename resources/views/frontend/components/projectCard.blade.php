
@push('styles')
<style type="text/css">
.cases-standard .carousel-navs .owl-nav .owl-prev {
    left: -45px;
    display: none;
}
.cases-standard .carousel-navs .owl-nav .owl-next {
    right: -45px;
    display: none;

}
</style>

@endpush
<div class="case-item ">
    <div class="case-item-warp">
       <div class="case-img">
           <img src="{{$project->thumbnail}}" alt="{{$project->slug}}" style="    height: 212px;
           "></div>
       <div class="case-content">
          <div class="case-title">
             <span><a href="{{route('project.detail',['slug'=>$project->slug])}}">{{$project->title}}</a></span>
          </div>
          <div class="case-cat">
              <a href="{{route('projects',['query'=>$project->industry->slug])}}">
                <span class="text-dark">
                    {{$project->industry->name}}
                </span>
                </a></div>
                <div class="case-cat">
                    <a href="javascript:void(0)">{{$project->destination}}</a>
                </div>
          <div class="case-desc">
             <p>
                {{ Str::limit($project->short_description,120,"...")}}
             </p>
          </div>
          <div class="case-more"><a href="{{route('project.detail',['slug'=>$project->slug])}}"><i class="icon-arrow-right"></i> explore case study</a></div>
       </div>
    </div>
 </div>
