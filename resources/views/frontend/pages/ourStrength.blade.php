


@extends('layouts.frontend.master')
@section('content')

<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/images/page-titles/9.png')}}" alt="Background"></div>
    <div class="container">
    <div class="row">
    <div class="col-12 col-lg-6">
    <div class="title text-lg-left">
    <div class="title-sub-heading">
    {{-- <p>Dedicated Customer Teams &amp; An Agile Services</p> --}}
    </div>
    <div class="title-heading">
    <h1> Our Strength</h1>
    </div>
        @component('frontend.components.Breadcam',[ 'active_link'=>'Why Sinotrans'])
        @endcomponent

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




                       <div class="entry-why">
                          <div class="entry-bio">
                             <h6>What Gives Us Our Strength?</h6>

                          </div>
                          <div class="row">
                              @component('frontend.components.pointsList',['col'=>12,'title'=>'Sinotrans Group’s global footprint, knowledge and impeccable reputation'])
                              @endcomponent
                              @component('frontend.components.pointsList',['col'=>12,'title'=>'Our ability to provide a one window solution and manage all operations in house, keeping a high service level'])
                              @endcomponent
                              @component('frontend.components.pointsList',['col'=>12,'title'=>'Extensive experience with project operations'])
                              @endcomponent
                              @component('frontend.components.pointsList',['col'=>12,'title'=>'Unmatched local team and partners, including our teams from China'])
                              @endcomponent
                              @component('frontend.components.pointsList',['col'=>12,'title'=>'Our proprietary team of highly experienced drivers and modern equipment'])
                              @endcomponent
                              @component('frontend.components.pointsList',['col'=>12,'title'=>'Strong customer service orientation '])
                              @endcomponent
                              @component('frontend.components.pointsList',['col'=>12,'title'=>'Well versed in policies & regulations'])
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
