
@extends('layouts.frontend.master')

@section('content')
@push('styles')
<style type="text/css">
#wrapperParallax {
    position: relative;
    z-index: 1060;
    min-height: 50vh;
}
 .case-study.case-study-2 {
    padding-top: 40px !important;
    padding-bottom: 30px !important;
}
.case-study.case-study-2 {
    padding-top: 40px !important;
    padding-bottom: 30px !important;
}
</style>
@endpush
<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/images/page-titles/5.jpg')}}" alt="Background"></div>
    <div class="container">
    <div class="row">
       <div class="col-12 col-lg-6">
          <div class="title text-lg-left">
             <div class="title-sub-heading">
                <p>Dedicated Customer Teams &amp; An Agile Services</p>
             </div>
             <div class="title-heading">
                <h1>Road Transport  Service</h1>
             </div>
             @component('frontend.components.Breadcam',
             ['back_link'=>'Services','back_url'=>route('services.all'),'active_link'=>'Road Transport Service'])
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
                          <h5>Road Transport</h5>
                          <p>
                            Having a world of experience as road logistics specialists, combined with an efficient transport network, is what makes Sinotrans a major global intermodal player. The company offers effective and reliable transportation solutions, ranging from containerized breakbulk and heavy lift, full truckload, and less than truckload movements.
                          </p>
                          <p>
                            Furthermore, with a proprietary fleet of specialized extendable trailers for heavy and oversized movement, Sinotrans ensures that even the heaviest cargo can be moved quickly and safely, regardless of its dimension and bulk. In addition, having an in-house workshop and maintenance experts allows on-location repairs and maintenance services, significantly reducing lead time and extending adaptability when needed.
                          </p>

                       </div>



                       <div class="entry-why">
                          <div class="entry-bio">
                             <h6>Our services include</h6>

                          </div>
                          <div class="row">
                              @component('frontend.components.pointsList',['title'=>'Containerized'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Break Bulk'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Heavy Lift/Over-Dimension'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Full Truck Load '])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Less Than Truck Load'])
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
