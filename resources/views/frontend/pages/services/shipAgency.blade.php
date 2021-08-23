
@extends('layouts.frontend.master')

@section('content')
@push('styles')
<style type="text/css">
#wrapperParallax {
    position: relative;
    z-index: 1060;
    min-height: 86vh;
}
 .case-study.case-study-2 {
    padding-top: 5px;
    padding-bottom: 100px;
}
</style>
@endpush
<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title" style="padding-top: 42px;">
    <div class="bg-section"><img src="{{asset('assets/images/page-titles/15.jpg')}}" alt="Background"></div>
    <div class="container">
    <div class="row">
       <div class="col-12 col-lg-6">
          <div class="title text-lg-left">
             <div class="title-sub-heading">
                <p>Dedicated Customer Teams &amp; An Agile Services</p>
             </div>
             <div class="title-heading">
                <h1>Ship Agency Service</h1>
             </div>
             @component('frontend.components.Breadcam',
             ['back_link'=>'Services','back_url'=>route('services.all'),'active_link'=>'Ship Agency Service'])
             @endcomponent
          </div>
       </div>
    </div>
    </div>
 </section>

 <section class="service-single case-study case-study-2 pb-70" id="service-single">
    <div class="container">
       <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-lg-0">
             <div class="sidebar sidebar-case-study">
                <div class="widget widget-categories">
                   <div class="widget-title">
                      <h5> services</h5>
                   </div>
                   <div class="widget-content">
                      <ul class="list-unstyled">
                        @component('frontend.components.servicesList')

                        @endcomponent
                      </ul>
                   </div>
                </div>


             </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-8">
             <div class="case-study-entry">
                <div class="entry-content">
                   <div class="entry-bio">
                      <h5>Ship Agency Service</h5>
                      <p>Working with us vessel principals and service providers means benefitting from our flexible, fully integrated multi-model logistic solutions and quick transit times.</p>
                      <p>Our experienced and dedicated team provides outstanding handling of all types of cargos including heavy lifts and oversized project cargos, as well as communication and knowledge of ports and compliance requirements at all Pakistani ports. Our success has always been our ability to anticipate and adapt and therefore keep our pace with our customers’ needs and demands.</p>

                   </div>



                   <div class="entry-why">
                      <div class="entry-bio">
                         <h6>Our services include</h6>

                      </div>
                      <div class="row">
                        @component('frontend.components.pointsList',['title'=>'Conventional shipping'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Crew Change'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Provisions'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Ship Spares'])
                              @endcomponent
                      </div>
                     </div>


                </div>
             </div>
          </div>
       </div>
    </div>

 </section>

 @endsection
