
@extends('layouts.frontend.master')
@section('content')


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
        @component('frontend.components.Breadcam',['back_link'=>'Company','active_link'=>'Services'])

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
                          <h5>transport services</h5>
                       </div>
                       <div class="widget-content">
                          <ul class="list-unstyled">
                             <li><a href="javascript:void(0)">warehouse</a></li>
                             <li><a href="javascript:void(0)">air freight</a></li>
                             <li><a href="javascript:void(0)">ocean freight</a></li>
                             <li><a href="javascript:void(0)">road freight</a></li>
                             <li><a href="javascript:void(0)">supply chain</a></li>
                             <li><a href="javascript:void(0)">packaging</a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="widget widget-reservation">
                       <img src="assets/images/blog/sidebar/reservation.jpg" alt="Background Image">
                       <div class="widget-content">
                          <h5>Dedicated Customer Teams & Agile Services</h5>
                          <p>Our worldwide presence ensures the timeliness, cost efficiency compliance adherence required to ensure your production timelines are met.</p>
                          <a class="btn btn--transparent btn--inverse btn--block" href="javascript:void(0)">Schedule An Appointment</a>
                       </div>
                    </div>

                 </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-8">
                 <div class="case-study-entry">
                    <div class="entry-content">
                       <div class="entry-bio">
                          <h5>Services</h5>
                          <p class="text-justify">Sinotrans Logistics Pakistan is a holistic logistic solutions provider, aiming to provide door to-door services to meet every one of our customers’ logistical needs; All as part of the group recognized worldwide for its portfolio of high-profile clients, projects and offering 360-degree services. Our extensive network of cargo agents expertly handles air and ocean cargo in one seamless transaction. Our range of services includes.</p>

                       </div>
                       <div class="entry-bio entry-bio-2">
                          <h5>stats &amp; charts </h5>
                          <div class="row">
                             <div class="col-12 col-lg-6">
                                <p>Our mix of company-owned and contractor assets allows us to retain optimal levels of control whilst expanding our reach to over 96% of towns in Australia. With 40 years of LTL experience, we are now a trusted LTL freight provider for shippers of all sizes and commodity types.</p>
                                <p>
                                   Our LTL service extends to all states and territories, and includes multiple per-week services to places many others only serve occasionally, including Darwin, Alice Springs, Newman, Mt. Isa, Launceston and Burnie.
                                </p>
                                <p>
                                   We pride ourselves on providing the best transport and shipping services currently available in Australia. Our skilled personnel, utilising the latest communications, tracking and processing software, combined with decades of experience, ensure all freight is are shipped.
                                </p>
                             </div>
                             <div class="col-12 col-lg-6"> <img class="entry-chart" src="assets/images/chart/chart-2.png" alt="Chart image"></div>
                          </div>
                       </div>
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
                       <div class="accordion accordion-2" id="accordion01">
                          <div class="heading">
                             <h4 class="heading-title">key benefits</h4>
                          </div>
                          <div class="card">
                             <div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-1">Which Plan Is Right For Me? </a></div>
                             <div class="collapse" id="collapse01-1" data-parent="#accordion01">
                                <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to provide sensitive information online.</div>
                             </div>
                          </div>
                          <div class="card">
                             <div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-2">Do I have to commit to a contract? </a></div>
                             <div class="collapse" id="collapse01-2" data-parent="#accordion01">
                                <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to provide sensitive information online.</div>
                             </div>
                          </div>
                          <div class="card active-acc">
                             <div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-3">What Payment Methods Are Available? </a></div>
                             <div class="collapse show" id="collapse01-3" data-parent="#accordion01">
                                <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to provide sensitive information online.</div>
                             </div>
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
