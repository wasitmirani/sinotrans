
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
    padding-top: 40px;
    padding-bottom: 100px;
}
</style>
@endpush
<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title" style="padding-top: 42px;">
    <div class="bg-section"><img src="{{asset('assets/images/page-titles/3.jpg')}}" alt="Background"></div>
    <div class="container">
    <div class="row">
       <div class="col-12 col-lg-6">
          <div class="title text-lg-left">
             <div class="title-sub-heading">
                {{-- <p>Dedicated Customer Teams &amp; An Agile Services</p> --}}
             </div>
             <div class="title-heading">
                <h1>Warehouse Service</h1>
             </div>
             @component('frontend.components.Breadcam',
             ['back_link'=>'Services','back_url'=>route('services.all'),'active_link'=>'Warehouse Service'])
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
                      <h5>Warehouse Service</h5>
                      <p>When it comes to the movement of goods across suppliers, vendors, and customers, efficiency and traceability are of vital importance.</p>
                      <p>That’s why our flexible warehousing and distribution solutions offer real-time cargo track and trace along with dedicated, shared, and refer warehousing and distribution facilities. In addition, all our warehouses are equipped with leading edge warehouse management systems, making it easier for real time cargo track and trace.</p>

                   </div>



                   <div class="entry-why">
                      <div class="entry-bio">
                         <h6>Our services include</h6>

                      </div>
                      <div class="row">
                        @component('frontend.components.pointsList',['title'=>'Palletized'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Open Storage'])
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
