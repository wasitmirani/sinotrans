<div class="clearfix"></div>
<ol class="breadcrumb justify-content-lg-start">
<li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
@if(!empty($back_link))
<li class="breadcrumb-item"><a href="#">{{$back_link}}</a></li>
@endif

@if(!empty($active_link))
<li class="breadcrumb-item active" aria-current="page">{{$active_link}}</li>
@endif
</ol>
</div>
