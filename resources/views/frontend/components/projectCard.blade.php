<div class="case-item">
    <div class="case-item-warp">
       <div class="case-img"><img src="assets/images/work/full/1.jpg" alt="work Item Image"></div>
       <div class="case-content">
          <div class="case-title">
             <h4><a href="">{{$project->title}}</a></h4>
          </div>
          <div class="case-cat"><a href="javascript:void(0)">{{$project->industry->name}}</a></div>
          <div class="case-desc">
             <p>
                {{$project->short_description}}
             </p>
          </div>
          <div class="case-more"><a href="{{route('project.detail',['slug'=>$project->slug])}}"><i class="icon-arrow-right"></i> explore case study</a></div>
       </div>
    </div>
 </div>
