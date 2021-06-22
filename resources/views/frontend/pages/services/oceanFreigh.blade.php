
@extends('layouts.frontend.master')

@section('content')
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
                <h1>Ocean Freigh Service</h1>
             </div>
             @component('frontend.components.Breadcam',
             ['back_link'=>'Services','back_url'=>route('services.all'),'active_link'=>'Ocean Freigh Service'])
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
                          <h5>Ocean Freight</h5>
                          <p>We work with leading carriers and use an expanding network of agents, partners, as well as our own offices around the world.  This enables us to give you global service backed by the extensive expertise of our local teams.</p>
                          <p>Working with us means benefitting from our flexible, fully integrated multi-model logistic solutions, competitive rates and quick transit times. Our all-inclusive ocean freight service utilizes the most efficient routes to ensure your cargo reaches its destination safely and on time.</p>
                          <p>We also provide full cargo routing proposals, including advice on cargo stowage, and securing for out of gauge, heavy and otherwise ‘exceptional’ cargoes. We also offer comprehensive route surveys for complex movements where necessary. </p>
                       </div>



                       <div class="entry-why">
                          <div class="entry-bio">
                             <h6>Our services include</h6>

                          </div>
                          <div class="row">
                              @component('frontend.components.pointsList',['title'=>'Conventional shipping'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Ro-Ro services worldwide'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'FCL/LCL Service'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Heavy Lift and Oversized Cargo'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Stevedoring Services'])
                              @endcomponent
                              @component('frontend.components.pointsList',['title'=>'Potline Giver Service'])
                              @endcomponent
                          </div>
                         </div>


                    </div>
                 </div>
              </div>
           </div>
        </div>
      </div>
     </section>

@endsection
