@extends('layouts.frontend.master')
@section('content')


<section class="page-title page-title-12 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="assets/images/page-titles/4.jpg" alt="Background"></div>
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-10 offset-lg-1">
             <div class="title text-center">
                <div class="title-heading">
                   <h1>{{$project->title}} </h1>
                </div>
                <div class="clearfix"></div>
                <ol class="breadcrumb justify-content-center">
                   <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                   <li class="breadcrumb-item"><a href="{{route('projects')}}">case studies</a></li>
                   <li class="breadcrumb-item active" aria-current="page">{{$project->title}}</li>
                </ol>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="case-study case-study-2" id="case-study">
    <div class="container">
       <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-lg-0">
             <div class="sidebar sidebar-case-study">
                <div class="widget widget-categories">
                   <div class="widget-title">
                      <h5>Our Services</h5>
                   </div>
                   <div class="widget-content">
                      <ul class="list-unstyled">
                        @component('frontend.components.servicesList')

                        @endcomponent
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
                <div class="widget widget-download">
                   <div class="widget-title">
                      <h5>download</h5>
                   </div>
                   <div class="widget-content">
                      <ul class="list-unstyled">
                         <li><a href="javascript:void(0)"> <span>company report 2019</span><span class="icon">pdf</span></a></li>
                         <li><a href="javascript:void(0)"> <span>company brochure</span><span class="icon">pdf</span></a></li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-8">
             <div class="case-study-entry">
                <div class="entry-content">
                   <div class="entry-bio">
                      <h5>overview</h5>
                      <p>Our airfreight staff attaches great importance to customizing the booking process for our customers. That’s why we strive to find the air freight solution that best suits your needs. We’ll ask you when the freight is available, what the required delivery date is, and if there’s potential to save on time or cost. Your answers to these and other questions help us decide if you should book the air freight as direct. We'll also see if our sea-air service is a better solution for you. We have more than twenty years of experience. During that time, we’ve become expert in freight transportation by air and all its related services. We work closely with all major airlines around the world. Ongoing negotiations ensure that we always have the cargo space we need and the ability to offer you competitive rates - even during the high season.Where possible, we’ll erect and dismantle Unit Load Devices (ULDs), reducing significantly the risk of damage to your shipment and saving you time and expense. We can do this because many of our freight stations have their own ground transportation at or around the airport. </p>
                   </div>
                   <div class="video bg-overlay bg-overlay-dark" id="video1">
                      <div class="bg-section"><img src="assets/images/video/1.jpg" alt="background"></div>
                      <div class="player"><a class="popup-video" href="../watch-1.html?v=7e90gBu4pas"> <i class="fas fa-play"></i></a></div>
                   </div>
                   <div class="entry-bio">
                      <p>We pride ourselves on providing the best transport and shipping services currently available in Australia. Our skilled personnel, utilising the latest communications, tracking and processing software, combined with decades of experience, ensure all freight is are shipped, trans-shipped and delivered as safely, securely, and promptly as possible.</p>
                   </div>
                   <div class="entry-topics">
                      <div class="entry-bio entry-topic">
                         <h5>the challenge </h5>
                         <p>With manufacturing and distribution channels in literally every major market around the globe, and competing in an industry that is understandably zealous about supply chain management, was seeking a logistics partner capable of performing on a truly global scale. The service partner envisioned would not only be required </p>
                      </div>
                      <div class="entry-bio entry-topic">
                         <h5>the solution</h5>
                         <p>Such a commitment from a company of size and complexity, to globally integrate logistics in every geographic theater, spoke volumes of the organization’s commitment to managing business costs.</p>
                      </div>
                      <div class="entry-bio entry-topic">
                         <h5>the result </h5>
                         <p>People are the engine of success. Global Project Leader Export/Import stated, people at every level recognize the value of a partnership and the importance of working collaboratively. Working as one team, we’ve been able to focus on attacking costs, improving customer service, and managing continuous improvement across all aspects </p>
                      </div>
                   </div>
                   <img class="entry-chart" src="assets/images/chart/Chart-Card.jpg" alt="Chart-Img">
                   <div class="testimonial bg-overlay bg-overlay-theme">
                      <div class="bg-section"><img src="assets/images/background/1.jpg" alt="Background"></div>
                      <div class="heading">
                         <h4 class="heading-title">testimonials</h4>
                      </div>
                      <div class="carousel owl-carousel carousel-dots" data-slide="1.2" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="50" data-loop="true" data-speed="800">
                         <div class="testimonial-panel">
                            <div class="testimonial-panel-warp">
                               <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                               <div class="testimonial-body">
                                  <div class="testimonial-img"><img src="assets/images/testimonial/3.jpg" alt="Testimonial Author"></div>
                                  <div class="testimonial-content">
                                     <div class="testimonial-rating"><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                     <p>Equita Logistics International customer service is some of the best we have ever had with ocean forwarders we like to ship as much as possible with you all.</p>
                                     <div class="testimonial-meta">
                                        <h4>John R Peter</h4>
                                        <p>movein</p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="testimonial-panel">
                            <div class="testimonial-panel-warp">
                               <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                               <div class="testimonial-body">
                                  <div class="testimonial-img"><img src="assets/images/testimonial/4.jpg" alt="Testimonial Author"></div>
                                  <div class="testimonial-content">
                                     <div class="testimonial-rating"><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                     <p>Equita Logistics International customer service is some of the best we have ever had with ocean forwarders we like to ship as much as possible with you all.</p>
                                     <div class="testimonial-meta">
                                        <h4>James Wane</h4>
                                        <p>Aleko Company</p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="testimonial-panel">
                            <div class="testimonial-panel-warp">
                               <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                               <div class="testimonial-body">
                                  <div class="testimonial-img"><img src="assets/images/testimonial/3.jpg" alt="Testimonial Author"></div>
                                  <div class="testimonial-content">
                                     <div class="testimonial-rating"><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                     <p>Equita Logistics International customer service is some of the best we have ever had with ocean forwarders we like to ship as much as possible with you all.</p>
                                     <div class="testimonial-meta">
                                        <h4>Marko Smith</h4>
                                        <p>Aify Agency</p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="testimonial-panel">
                            <div class="testimonial-panel-warp">
                               <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                               <div class="testimonial-body">
                                  <div class="testimonial-img"><img src="assets/images/testimonial/4.jpg" alt="Testimonial Author"></div>
                                  <div class="testimonial-content">
                                     <div class="testimonial-rating"><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                     <p>Equita Logistics International customer service is some of the best we have ever had with ocean forwarders we like to ship as much as possible with you all.</p>
                                     <div class="testimonial-meta">
                                        <h4>Marko Smith</h4>
                                        <p>Aify Agency</p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="testimonial-panel">
                            <div class="testimonial-panel-warp">
                               <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                               <div class="testimonial-body">
                                  <div class="testimonial-img"><img src="assets/images/testimonial/3.jpg" alt="Testimonial Author"></div>
                                  <div class="testimonial-content">
                                     <div class="testimonial-rating"><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                     <p>Equita Logistics International customer service is some of the best we have ever had with ocean forwarders we like to ship as much as possible with you all.</p>
                                     <div class="testimonial-meta">
                                        <h4>Marko Smith</h4>
                                        <p>Aify Agency</p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="testimonial-panel">
                            <div class="testimonial-panel-warp">
                               <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                               <div class="testimonial-body">
                                  <div class="testimonial-img"><img src="assets/images/testimonial/4.jpg" alt="Testimonial Author"></div>
                                  <div class="testimonial-content">
                                     <div class="testimonial-rating"><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                     <p>Equita Logistics International customer service is some of the best we have ever had with ocean forwarders we like to ship as much as possible with you all.</p>
                                     <div class="testimonial-meta">
                                        <h4>Marko Smith</h4>
                                        <p>Aify Agency</p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="accordion accordion-1" id="accordion01">
                      <div class="heading">
                         <h4 class="heading-title">key benefits</h4>
                      </div>
                      <div class="card">
                         <div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-1">Which Plan Is Right For Me? </a></div>
                         <div class="collapse" id="collapse01-1" data-parent="#accordion01">
                            <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to provide sensitive information online.</div>
                         </div>
                      </div>
                      <div class="card active-acc">
                         <div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-2">Do I have to commit to a contract? </a></div>
                         <div class="collapse show" id="collapse01-2" data-parent="#accordion01">
                            <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to provide sensitive information online.</div>
                         </div>
                      </div>
                      <div class="card">
                         <div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-3">What Payment Methods Are Available? </a></div>
                         <div class="collapse" id="collapse01-3" data-parent="#accordion01">
                            <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to provide sensitive information online.</div>
                         </div>
                      </div>
                   </div>
                   <div class="case-study case-study-1">
                      <div class="heading">
                         <h4 class="heading-title">case studies </h4>
                      </div>
                      <div class="carousel owl-carousel" data-slide="2" data-slide-rs="2" data-autoplay="false" data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
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
