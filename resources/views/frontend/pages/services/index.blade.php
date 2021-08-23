
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
    padding-top: 1px;
    padding-bottom: 100px;
}
</style>
@endpush
<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/images/page-titles/1.png')}}" alt="Background"></div>
    <div class="container">
    <div class="row">
    <div class="col-12 col-lg-6">
    <div class="title text-lg-left">
    <div class="title-sub-heading">
    <p>Dedicated Customer Teams &amp; An Agile Services</p>
    </div>
    <div class="title-heading">
    <h1>Services</h1>
    </div>
        @component('frontend.components.Breadcam',[ 'active_link'=>'Services'])

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
                          <h5>services</h5>
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
                          <h5>Services</h5>
                          <p class="text-justify">Sinotrans Logistics Pakistan is a holistic logistic solutions provider, aiming to provide door to-door services to meet every one of our customers’ logistical needs; All as part of the group recognized  for its portfolio of high-profile clients, projects and offering 360-degree services. Our extensive network of cargo agents expertly handles air and ocean cargo in one seamless transaction. Our range of services includes.</p>

                       </div>
                       <section class="features" id="features-1" style="padding-top: 0px;padding-bottom: 0px;">

                           <div class="heading heading-4">
                            <div class="row">
                                <div class=" col-sm-10 col-md-10 col-lg-6">
                                  @component('frontend.components.serviceCard',
                                  [
                                      'icon'=>'flaticon-010-cargo',
                                      'name'=>'ocean freigh',
                                      'link'=>route('services.ocean.freigh'),
                                      'short_description'=>'We work with leading carriers and use an expanding network of agents, partners, as well as our own offices around the world.  This enables us to give you global service backed by the extensive expertise of our local teams.'
                                  ])
                                  @endcomponent
                                </div>
                                <div class=" col-sm-10 col-md-10 col-lg-6">
                                    @component('frontend.components.serviceCard',
                                    [
                                        'icon'=>'flaticon-010-cargo',
                                        'name'=>'Ship Agency',
                                        'link'=>route('services.ship.agency'),
                                        'short_description'=>'Working with us vessel principals and service providers means benefitting from our flexible, fully integrated multi-model logistic solutions and quick transit times.'
                                    ])
                                    @endcomponent
                                </div>

                                <div class=" col-sm-10 col-md-10 col-lg-6">
                                    @component('frontend.components.serviceCard',
                                    [
                                        'icon'=>'flaticon-033-checklist',
                                        'name'=>'Custom Clearance',
                                        'link'=>route('services.custom.clearance'),
                                        'short_description'=>'We work with leading carriers and use an expanding network of agents, partners, as well as our own offices around the world.  This enables us to give you global service backed by the extensive expertise of our local teams.'
                                    ])
                                    @endcomponent
                                </div>
                                <div class=" col-sm-10 col-md-10 col-lg-6">
                                    @component('frontend.components.serviceCard',
                                    [
                                        'icon'=>'flaticon-004-trailer-1',
                                        'name'=>'Road Transport ',
                                        'link'=>route('services.road.transport'),
                                        'short_description'=>'Our experience as a road logistics specialist, in combination with an efficient transport network is what makes us a major global intermodal player.'
                                    ])
                                    @endcomponent
                                </div>
                                <div class=" col-sm-10 col-md-10 col-lg-6">
                                    @component('frontend.components.serviceCard',
                                    [
                                        'icon'=>'flaticon-002-warehouse',
                                        'name'=>'Warehousing',
                                        'link'=>route('services.ware.house'),
                                        'short_description'=>'When it comes to the movement of goods across suppliers, vendors, and customers, efficiency and traceability are of vital importance. That’s why our flexible warehousing and distribution solutions offer real-time cargo track and trace along with dedicated, shared, and refer warehousing and distribution facilities.'
                                    ])
                                    @endcomponent
                                </div>


                            </div>
                           </div>

                       </section>
                       <div class="entry-bio enty-bio-3">
                          <h5>Life At Sinotrans</h5>
                          <p class="text-justify">At Sinotrans Pakistan, our commitment to creating a diverse and inclusive workplace, as well as provide handsomely for our people, means they not only work, but have the opportunity to learn and grow with us as well. At Sinotrans Pakistan we aim to change lives we strongly believe in the constant growth of each individual.</p>
                       </div>

                       <div class="entry-why">
                          <div class="entry-bio">
                            <h5>Embracing Innovation</h5>
                            <p class="text-justify">At Sinotrans, we are leaders when it comes to driving change and reinvention, thanks to our proud history of innovation. We believe adaptability is vital in this industry, particularly due to ever changing market needs. These are qualities we believe are essential in those who seek to become a part of the Sinotrans Pakistan family. It also means we’re excited to embrace fresh ideas, particularly as we scale up our ability to collaborate and share knowledge across the organization.</p>
                          </div>

                       </div>

                       <div class="entry-why">
                        <div class="entry-bio">
                          <h5> Diversity &amp; Inclusion</h5>
                          <p class="text-justify">
                            Another vital aspect of our culture is building an environment where everyone can feel at home: Our work is not simply across continents, it is across genders, generations, cultures, sexual orientations, religions, disabilities and perspectives. Diversity is one of our greatest strengths and is why we succeed as one global team. We want to encourage innovation and empower our teams to share new ways of thinking, making the most of our diverse talents.
                            But it’s also about feeling involved and encouraged to be yourself.
                            We believe the combination of these factors help drive better performance, a more collaborative spirit and increased adaptability. That's why we've inclusion is an important element of our leadership agenda and why we encouraging everyone across the organization to contribute as often as possible.
                          </p>
                        </div>

                     </div>
                     <div class="entry-why">
                        <div class="entry-bio">
                          <h5>Thriving Together</h5>
                          <p class="text-justify">Our people benefit not just from having access to the latest tools and equipment or working on some of the country’s largest and most exciting project, but from being a part of our environment of enablement: We promote from within, purely on merit, offering all our family members the opportunity to learn, grow and partake in our burgeoning successes and achievements.</p>
                        </div>

                     </div>

                       <div class="case-study case-study-1">
                          <div class="heading">
                             <h4 class="heading-title">case studies </h4>
                          </div>
                          <div class="carousel owl-carousel" data-slide="2" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
                             <div class="case-item">
                                <div class="case-item-warp">
                                   <div class="case-img"><img src="assets/images/work/grid/1.jpg" alt="work Item Image"></div>
                                   <div class="case-content">
                                      <div class="case-title">
                                         <h4><a href="case-study-single.html">floride chemical factory</a></h4>
                                      </div>
                                      <div class="case-cat"><a href="javascript:void(0)">analytics</a><a href="javascript:void(0)">optimization</a></div>
                                   </div>
                                </div>
                             </div>
                             <div class="case-item">
                                <div class="case-item-warp">
                                   <div class="case-img"><img src="assets/images/work/grid/2.jpg" alt="work Item Image"></div>
                                   <div class="case-content">
                                      <div class="case-title">
                                         <h4><a href="case-study-single.html">warehouse inventory</a></h4>
                                      </div>
                                      <div class="case-cat"><a href="javascript:void(0)">warehousing</a><a href="javascript:void(0)">distrbution</a></div>
                                   </div>
                                </div>
                             </div>
                             <div class="case-item">
                                <div class="case-item-warp">
                                   <div class="case-img"><img src="assets/images/work/grid/3.jpg" alt="work Item Image"></div>
                                   <div class="case-content">
                                      <div class="case-title">
                                         <h4><a href="case-study-single.html">Minimize Manufacturing</a></h4>
                                      </div>
                                      <div class="case-cat"><a href="javascript:void(0)">logistics</a><a href="javascript:void(0)">analytics</a></div>
                                   </div>
                                </div>
                             </div>
                             <div class="case-item">
                                <div class="case-item-warp">
                                   <div class="case-img"><img src="assets/images/work/grid/4.jpg" alt="work Item Image"></div>
                                   <div class="case-content">
                                      <div class="case-title">
                                         <h4><a href="case-study-single.html">floride chemical factory</a></h4>
                                      </div>
                                      <div class="case-cat"><a href="javascript:void(0)">analytics</a><a href="javascript:void(0)">optimization</a></div>
                                   </div>
                                </div>
                             </div>
                             <div class="case-item">
                                <div class="case-item-warp">
                                   <div class="case-img"><img src="assets/images/work/grid/5.jpg" alt="work Item Image"></div>
                                   <div class="case-content">
                                      <div class="case-title">
                                         <h4><a href="case-study-single.html">warehouse inventory</a></h4>
                                      </div>
                                      <div class="case-cat"><a href="javascript:void(0)">warehousing</a><a href="javascript:void(0)">distrbution</a></div>
                                   </div>
                                </div>
                             </div>
                             <div class="case-item">
                                <div class="case-item-warp">
                                   <div class="case-img"><img src="assets/images/work/grid/6.jpg" alt="work Item Image"></div>
                                   <div class="case-content">
                                      <div class="case-title">
                                         <h4><a href="case-study-single.html">Minimize Manufacturing</a></h4>
                                      </div>
                                      <div class="case-cat"><a href="javascript:void(0)">logistics</a><a href="javascript:void(0)">analytics</a></div>
                                   </div>
                                </div>
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
