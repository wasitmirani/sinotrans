<div class="case-item">
    <div class="case-item-warp">
       <div class="case-img">
           <img src="{{$project->thumbnail}}" alt="{{$project->slug}}" style="    height: 212px;
           "></div>
       <div class="case-content">
          <div class="case-title">
             <span><a href="{{route('project.detail',['slug'=>$project->slug])}}">{{$project->title}}</a></span>
          </div>
          <div class="case-cat">
              <a href="{{route('project.detail',['slug'=>$project->slug])}}">
                <span class="text-dark">
                    {{$project->industry->name}}
                </span>
                </a></div>
          <div class="case-desc">
             <p>
                {{$project->short_description}}
             </p>
          </div>
          <div class="case-more"><a href="{{route('project.detail',['slug'=>$project->slug])}}"><i class="icon-arrow-right"></i> explore case study</a></div>
       </div>
    </div>
 </div>
