
@extends('layouts.frontend.master')


@section('content')


<section class="slider slider-1" id="slider-1">
    <div class="container-fluid pr-0 pl-0">
       <div class="carousel owl-carousel custom-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800" data-slider-id="#custom-carousel">
          <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
             <div class="bg-section"><img src="assets/images/sliders/1.jpg" alt="Background"></div>
             <div class="container">
                <div class="row">
                   <div class="col-12 col-lg-7">
                      <div class="slide-content">
                         <p class="slide-subheadline">Flexibile, Improved And accelerated Solutions</p>
                         <h1 class="slide-headline">full sustainable<br>cargo solutions!</h1>
                         <p class="slide-desc">Representative logistics operator providing full range of service in the sphere of customs clearance and transportation worldwide.</p>
                         <div class="slide-buttons"><a class="btn btn--primary" href="javascript:void(0)">more about us</a><a class="btn btn--white" href="javascript:void(0)">our services</a></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
             <div class="bg-section"><img src="assets/images/sliders/2.jpg" alt="Background"></div>
             <div class="container">
                <div class="row">
                   <div class="col-12 col-lg-7">
                      <div class="slide-content">
                         <p class="slide-subheadline">Flexibile, Improved And accelerated Solutions</p>
                         <h2 class="slide-headline">Air Freight That<br>Saves Your Time!</h2>
                         <p class="slide-desc">Representative logistics operator providing full range of service in the sphere of customs clearance and transportation worldwide.</p>
                         <div class="slide-buttons"><a class="btn btn--primary" href="javascript:void(0)">more about us</a><a class="btn btn--white" href="javascript:void(0)">our services</a></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
             <div class="bg-section"><img src="assets/images/sliders/3.png" alt="Background"></div>
             <div class="container">
                <div class="row">
                   <div class="col-12 col-lg-7">
                      <div class="slide-content">
                         <p class="slide-subheadline">Flexibile, Improved And accelerated Solutions</p>
                         <h2 class="slide-headline">innovation sea<br>transportation!</h2>
                         <p class="slide-desc">Representative logistics operator providing full range of service in the sphere of customs clearance and transportation worldwide.</p>
                         <div class="slide-buttons"><a class="btn btn--primary" href="javascript:void(0)">more about us</a><a class="btn btn--white" href="javascript:void(0)">our services</a></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
             <div class="bg-section"><img src="assets/images/sliders/4.png" alt="Background"></div>
             <div class="container">
                <div class="row">
                   <div class="col-12 col-lg-7">
                      <div class="slide-content">
                         <p class="slide-subheadline">Flexibile, Improved And accelerated Solutions</p>
                         <h2 class="slide-headline">your flexible<br>road directions!</h2>
                         <p class="slide-desc">Representative logistics operator providing full range of service in the sphere of customs clearance and transportation worldwide.</p>
                         <div class="slide-buttons"><a class="btn btn--primary" href="javascript:void(0)">more about us</a><a class="btn btn--white" href="javascript:void(0)">our services</a></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="services-bar" id="servicesBar">
    <div class="container">
       <div class="row no-gutters">
          <div class="col-12 col-md-6 col-lg-3 services-bar-card active">
             <i class="thumb-icon flaticon-004-trailer-1 "></i>
             <div class="thumb-body">
                <p>sustainable </p>
                <h3> <a href="#">Transportation services</a></h3>
             </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 services-bar-card">
            <i class="thumb-icon flaticon-010-cargo"> </i>
            <div class="thumb-body">
               <p>innovative</p>
               <h3> <a href="#">Shipping Agency services</a></h3>
            </div>
         </div>
          <div class="col-12 col-md-6 col-lg-3 services-bar-card">
             <i class="thumb-icon flaticon-032-connection"></i>
             <div class="thumb-body">
                <p>reliable</p>
                <h3> <a href="#">Business commercial</a></h3>
             </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3 services-bar-card">
             <i class="thumb-icon flaticon-033-checklist"></i>
             <div class="thumb-body">
                <p>flexible</p>
                <h3> <a href="#">Custom clearance</a></h3>
             </div>
          </div>

       </div>
    </div>
 </section>

    @component('frontend.components.aboutus')

    @endcomponent

 <section class="cta bg-overlay bg-overlay-dark2" id="cta-1">
    <div class="bg-section"><img src="assets/images/cta/1.png" alt="background"></div>
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-6">
             <div class="heading heading-2 heading-light">
                <p class="heading-subtitle">Dedicated Customer Teams & An Agile Services</p>
                <h2 class="heading-title">Global Logistics Partner To World’s Famous Brands For Over 25 Years!</h2>
             </div>
          </div>
          <div class="col-12 col-lg-6">
             <div class="icon-set">
                <div class="icon-panel"> <i class="icon flaticon-016-payment-terminal"></i><span>transparent pricing</span></div>
                <div class="icon-panel"> <i class="icon flaticon-014-box-3"></i><span>fast, effecient delivery</span></div>
                <div class="icon-panel"> <i class="icon flaticon-001-scale-1"></i><span>warehouse storage</span></div>
             </div>
          </div>
          <div class="col-12">
             <div class="contact-panel">
                <div class="contact-types"> <a class="button quote-btn" href="javascript:void(0)" data-form="quoteFormActive"> <i class="flaticon-020-order"> </i><span>request a quote</span></a><a class="button track-btn active" href="javascript:void(0)" data-form="trackFormActive"> <i class="flaticon-009-shipping-1"> </i><span>track &amp; trace</span></a></div>
                <div class="contact-card">
                   <div class="contact-body trackFormActive">
                      <div class="row">
                         <div class="col-12 col-lg-8">
                            <form class="contactForm quote-form mb-0" method="post" action="assets/php/contact.php">
                               <h5 class="card-heading">personal data</h5>
                               <div class="row">
                                  <div class="col-12 col-md-12 col-lg-4">
                                     <input class="form-control" type="text" name="contact-name" placeholder="Name" required="">
                                  </div>
                                  <div class="col-12 col-md-6 col-lg-4">
                                     <input class="form-control" type="text" name="contact-email" placeholder="Email" required="">
                                  </div>
                                  <div class="col-12 col-md-6 col-lg-4">
                                     <input class="form-control" type="text" name="contact-phone" placeholder="Phone" required="">
                                  </div>
                               </div>
                               <h5 class="card-heading">shipment data</h5>
                               <div class="row">
                                  <div class="col-12 col-lg-4">
                                     <div class="select-container">
                                        <select class="form-control">
                                           <option value="default">freight type</option>
                                           <option value="AL">freight type 1</option>
                                           <option value="AK">freight type 2</option>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="col-12 col-md-6 col-lg-4">
                                     <input class="form-control" type="text" name="contact-city" placeholder="city of departure" required="">
                                  </div>
                                  <div class="col-12 col-md-6 col-lg-4">
                                     <input class="form-control" type="text" name="contact-destination" placeholder="delivery city" required="">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                     <div class="select-container">
                                        <select class="form-control">
                                           <option value="default">incoterms</option>
                                           <option value="AL">incoterms 1</option>
                                           <option value="AK">incoterms 2</option>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="col-12 col-md-2">
                                     <input class="form-control" type="text" name="contact-weight" placeholder="weight" required="">
                                  </div>
                                  <div class="col-12 col-md-2">
                                     <input class="form-control" type="text" name="contact-height" placeholder="height" required="">
                                  </div>
                                  <div class="col-12 col-md-2">
                                     <input class="form-control" type="text" name="contact-width" placeholder="width" required="">
                                  </div>
                                  <div class="col-12 col-md-2">
                                     <input class="form-control" type="text" name="contact-length" placeholder="length" required="">
                                  </div>
                                  <div class="col-12">
                                     <div class="custom-radio-group">
                                        <div class="custom-control custom-radio custom-control-inline">
                                           <input class="custom-control-input" type="radio" id="customRadioInline1" name="customRadioInline1">
                                           <label for="customRadioInline1">fragile</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                           <input class="custom-control-input" type="radio" id="customRadioInline2" name="customRadioInline1">
                                           <label for="customRadioInline2">express delivery</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                           <input class="custom-control-input" type="radio" id="customRadioInline3" name="customRadioInline1">
                                           <label for="customRadioInline3">insurance</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                           <input class="custom-control-input" type="radio" id="customRadioInline4" name="customRadioInline1">
                                           <label for="customRadioInline4">packaging</label>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-12">
                                     <input class="btn btn--secondary btn--block" type="submit" value="Request A Quote">
                                  </div>
                                  <div class="col-12">
                                     <div class="contact-result"></div>
                                  </div>
                               </div>
                            </form>
                            <form class="contactForm track-form mb-0" method="post" action="assets/php/contact.php">
                               <h5 class="card-heading">personal data</h5>
                               <div class="row">
                                  <div class="col-12">
                                     <div class="select-container">
                                        <select class="form-control">
                                           <option value="default">shipment type</option>
                                           <option value="AL">type 1</option>
                                           <option value="AK">type 2</option>
                                        </select>
                                     </div>
                                  </div>
                               </div>
                               <h5 class="card-heading">tracking number</h5>
                               <div class="row">
                                  <div class="col-12">
                                     <textarea class="form-control" name="contact-tracking-number" cols="30" rows="2" placeholder="You can enter up to a maximum of 10 airway bill numbers for tracking." required=""></textarea>
                                  </div>
                                  <div class="col-12">
                                     <div class="custom-radio-group">
                                        <div class="custom-control custom-radio custom-control-inline">
                                           <input class="custom-control-input" type="radio" id="customRadioInline5" name="customRadioInline2">
                                           <label for="customRadioInline5">fragile</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                           <input class="custom-control-input" type="radio" id="customRadioInline6" name="customRadioInline2">
                                           <label for="customRadioInline6">express delivery</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                           <input class="custom-control-input" type="radio" id="customRadioInline7" name="customRadioInline2">
                                           <label for="customRadioInline7">insurance</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                           <input class="custom-control-input" type="radio" id="customRadioInline8" name="customRadioInline2">
                                           <label for="customRadioInline8">packaging</label>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-12">
                                     <input class="btn btn--secondary btn--block" type="submit" value="Track &amp; Trace">
                                  </div>
                               </div>
                            </form>
                         </div>
                         <div class="col-12 col-lg-4">
                            <div class="apply-card widget widget-reservation">
                               <img src="assets/images/contact/1.jpg" alt="Background Image">
                               <div class="widget-content">
                                  <h5>take your carreer to next level</h5>
                                  <p>We pride ourselves on providing the best transport & shipping services available all over the world and there is no one comes close to us. </p>
                                  <a class="btn btn--white" href="javascript:void(0)"><i class="icon-arrow-right"></i>apply now!</a>
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
 <section class="features bg-gray" id="features-1">
    <div class="container">
       <div class="heading heading-4">
          <div class="row">
             <div class="col-12 col-lg-6">
                <p class="heading-subtitle">Safe & Reliable Cargo Solutions! </p>
                <h2 class="heading-title">Managing Logistics For World’s Multinational Companies.</h2>
             </div>
             <div class="col-12 col-lg-6">
                <p class="heading-desc">Our global logistics expertise, advanced supply chain technology & customized logistics solutions will help you analyze, develop and implement successful supply chain management strategies from end-to-end.</p>
                <div class="actions-container">
                   <a class="btn btn-transparent" href="javascript:void(0)">pricing & plans </a>
                   <div class="employee-info">
                      <div class="employee-img"> <img src="assets/images/testimonial/5.jpg" alt="image"></div>
                      <div class="employee-body">
                         <h6>(002) 01061245741</h6>
                         <p>Sales Representative</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class=" col-sm-6 col-md-6 col-lg-4">
             <div class="feature-panel bg-white">
                <div class="feature-icon"><i class="flaticon-035-plane"></i></div>
                <div class="feature-content">
                   <i class="flaticon-035-plane"></i>
                   <h4>air freight<br>services</h4>
                   <p>We can provide with the comprehensive service in the sphere of urgent, valuable, fragile or any cargoes conscientious accelerated delivery by air.</p>
                   <a href="javascript:void(0)"><i class="icon-arrow-right"></i> read more</a>
                </div>
             </div>
          </div>
          <div class=" col-sm-6 col-md-6 col-lg-4">
             <div class="feature-panel bg-white">
                <div class="feature-icon"><i class="flaticon-010-cargo"></i></div>
                <div class="feature-content">
                   <i class="flaticon-010-cargo"></i>
                   <h4>ocean freight<br>services</h4>
                   <p>We provides with the types of basic conditions International sea transportation is implemented by our partners’ the largest ocean carriers.</p>
                   <a href="javascript:void(0)"><i class="icon-arrow-right"></i> read more</a>
                </div>
             </div>
          </div>
          <div class=" col-sm-6 col-md-6 col-lg-4">
             <div class="feature-panel bg-white">
                <div class="feature-icon"><i class="flaticon-004-trailer-1"></i></div>
                <div class="feature-content">
                   <i class="flaticon-004-trailer-1"></i>
                   <h4>road freight<br>services</h4>
                   <p>We provides a wide range of transportation services including quality international road transportation of cargoes &amp; goods arriving from the ports</p>
                   <a href="javascript:void(0)"><i class="icon-arrow-right"></i> read more</a>
                </div>
             </div>
          </div>
       </div>
       <div class="more-features">
          <p>Logistic & Transport Solutions Saves Your Time. <a href="javascript:void(0)">Find your solution </a></p>
       </div>
    </div>
 </section>
 <section class="cta cta-3 bg-theme" id="cta-3">
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-5">
             <div class="heading heading-2 heading-light">
                <p class="heading-subtitle">Directions, That Matter!</p>
                <h2 class="heading-title">Digital Freight That Saves Your Time!</h2>
             </div>
          </div>
          <div class="col-12 col-lg-6 offset-lg-1">
             <div class="prief-set">
                <p>We pride ourselves on providing the best transport and shipping services available allover the world. Our skilled personnel, utilising communications, tracking and processing software, combined with decades of experience! Through integrated supply chain solutions, {{config('app.name')}} drives sustainable competitive advantages to some of Australia's largest companies.</p>
                <ul class="advantages-list">
                   <li><i class="fas fa-check-circle"></i> Quality Control System</li>
                   <li><i class="fas fa-check-circle"></i> Unrivalled workmanship</li>
                   <li><i class="fas fa-check-circle"></i> 100% Satisfaction Guarantee</li>
                   <li><i class="fas fa-check-circle"></i> Accurate Testing Processes</li>
                   <li><i class="fas fa-check-circle"></i> Highly Professional Staff</li>
                   <li><i class="fas fa-check-circle"></i> Professional and Qualified</li>
                </ul>
             </div>
          </div>
       </div>
       <div class="action-panels">
          <div class="row no-gutters">
             <div class="col-12 col-lg-6">
                <div class="action-panel">
                   <div class="action-panel-img">
                      <div class="bg-section"><img src="assets/images/cta/2.jpg" alt="image"></div>
                   </div>
                   <div class="action-panel-content">
                      <div class="panel-icon"><i class="flaticon-015-scale"></i></div>
                      <div class="panel-heading">
                         <h3>Affordable Price, Certified Forwarders</h3>
                      </div>
                      <a href="javascript:void(0)"><i class="icon-arrow-right"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-12 col-lg-6">
                <div class="action-panel">
                   <div class="action-panel-img">
                      <div class="bg-section"><img src="assets/images/cta/3.jpg" alt="Image"></div>
                   </div>
                   <div class="action-panel-content inverted">
                      <div class="panel-icon"><i class="flaticon-017-pallet"></i></div>
                      <div class="panel-heading">
                         <h3>Affordable Price, Certified Forwarders</h3>
                      </div>
                      <a href="javascript:void(0)"><i class="icon-arrow-right"></i></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="cases-clients bg-parllax" id="cases-clients-1">
    <div class="cases-standard">
       <div class="container">
          <div class="heading text-center">
             <p class="heading-subtitle">Explore Recent Works</p>
             <h2 class="heading-title">featured projects</h2>
          </div>
          <div class="row">
             <div class="col-12">
                <div class="carousel owl-carousel carousel-navs carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="30" data-loop="true" data-speed="3000">
                   <div class="case-item">
                      <div class="case-item-warp">
                         <div class="case-img"><img src="assets/images/work/full/1.jpg" alt="work Item Image"></div>
                         <div class="case-content">
                            <div class="case-title">
                               <h4><a href="case-study-single.html">floride chemical factory</a></h4>
                            </div>
                            <div class="case-cat"><a href="javascript:void(0)">analytics</a><a href="javascript:void(0)">optimization</a></div>
                            <div class="case-desc">
                               <p>We understand that data is the greatest asset when it comes to analyzing and optimizing your supply chain performance.</p>
                            </div>
                            <div class="case-more"><a href="case-study-single.html"><i class="icon-arrow-right"></i> explore case study</a></div>
                         </div>
                      </div>
                   </div>
                   <div class="case-item">
                      <div class="case-item-warp">
                         <div class="case-img"><img src="assets/images/work/full/2.jpg" alt="work Item Image"></div>
                         <div class="case-content">
                            <div class="case-title">
                               <h4><a href="case-study-single.html">warehouse inventory</a></h4>
                            </div>
                            <div class="case-cat"><a href="javascript:void(0)">warehousing</a><a href="javascript:void(0)">distrbution</a></div>
                            <div class="case-desc">
                               <p>Cost savings is crucial, innovative technology minimizes your overall spend by utilizing an schedule.</p>
                            </div>
                            <div class="case-more"><a href="case-study-single.html"><i class="icon-arrow-right"></i> explore case study</a></div>
                         </div>
                      </div>
                   </div>
                   <div class="case-item">
                      <div class="case-item-warp">
                         <div class="case-img"><img src="assets/images/work/full/3.jpg" alt="work Item Image"></div>
                         <div class="case-content">
                            <div class="case-title">
                               <h4><a href="case-study-single.html">Minimize Manufacturing</a></h4>
                            </div>
                            <div class="case-cat"><a href="javascript:void(0)">logistics</a><a href="javascript:void(0)">analytics</a></div>
                            <div class="case-desc">
                               <p>Our Group has been building relationships and projects that last. Serving an impressive list of long-term.</p>
                            </div>
                            <div class="case-more"><a href="case-study-single.html"><i class="icon-arrow-right"></i> explore case study</a></div>
                         </div>
                      </div>
                   </div>
                   <div class="case-item">
                      <div class="case-item-warp">
                         <div class="case-img"><img src="assets/images/work/full/1.jpg" alt="work Item Image"></div>
                         <div class="case-content">
                            <div class="case-title">
                               <h4><a href="case-study-single.html">floride chemical factory</a></h4>
                            </div>
                            <div class="case-cat"><a href="javascript:void(0)">analytics</a><a href="javascript:void(0)">optimization</a></div>
                            <div class="case-desc">
                               <p>We understand that data is the greatest asset when it comes to analyzing and optimizing your supply chain performance.</p>
                            </div>
                            <div class="case-more"><a href="case-study-single.html"><i class="icon-arrow-right"></i> explore case study</a></div>
                         </div>
                      </div>
                   </div>
                   <div class="case-item">
                      <div class="case-item-warp">
                         <div class="case-img"><img src="assets/images/work/full/2.jpg" alt="work Item Image"></div>
                         <div class="case-content">
                            <div class="case-title">
                               <h4><a href="case-study-single.html">warehouse inventory</a></h4>
                            </div>
                            <div class="case-cat"><a href="javascript:void(0)">warehousing</a><a href="javascript:void(0)">distrbution</a></div>
                            <div class="case-desc">
                               <p>Cost savings is crucial, innovative technology minimizes your overall spend by utilizing an schedule.</p>
                            </div>
                            <div class="case-more"><a href="case-study-single.html"><i class="icon-arrow-right"></i> explore case study</a></div>
                         </div>
                      </div>
                   </div>
                   <div class="case-item">
                      <div class="case-item-warp">
                         <div class="case-img"><img src="assets/images/work/full/3.jpg" alt="work Item Image"></div>
                         <div class="case-content">
                            <div class="case-title">
                               <h4><a href="case-study-single.html">Minimize Manufacturing</a></h4>
                            </div>
                            <div class="case-cat"><a href="javascript:void(0)">logistics</a><a href="javascript:void(0)">analytics</a></div>
                            <div class="case-desc">
                               <p>Our Group has been building relationships and projects that last. Serving an impressive list of long-term.</p>
                            </div>
                            <div class="case-more"><a href="case-study-single.html"><i class="icon-arrow-right"></i> explore case study</a></div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="clients clients-carousel clients-1 pt-0">
       <div class="container">
          <div class="row">
             <div class="col-12 col-lg-8 offset-lg-2">
                <div class="heading heading-5 text-center">
                   <p class="heading-subtitle">join us today</p>
                   <h2 class="heading-title">our partners</h2>
                   <p class="heading-desc">Our skilled personnel, utilising the latest communications, tracking and processing software, combined with decades of experience! Through integrated supply chain solutions, {{config('app.name')}} drives sustainable competitive advantages to some of Australia's largest companies.</p>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-12">
                <div class="carousel owl-carousel" data-slide="6" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="3000">
                   <div class="client"><img src="assets/images/clients/1.png" alt="client"></div>
                   <div class="client"><img src="assets/images/clients/2.png" alt="client"></div>
                   <div class="client"><img src="assets/images/clients/3.png" alt="client"></div>
                   <div class="client"><img src="assets/images/clients/4.png" alt="client"></div>
                   <div class="client"><img src="assets/images/clients/5.png" alt="client"></div>
                   <div class="client"><img src="assets/images/clients/6.png" alt="client"></div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="testimonial testimonial-3 bg-overlay bg-overlay-theme">
    <div class="bg-section"> <img src="assets/images/background/1.jpg" alt="background-img"></div>
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-6">
             <div class="heading heading-light heading-6">
                <p class="heading-subtitle">what our clients say!</p>
                <h2 class="heading-title">
                   Individually Assess <br>Each Plan And Offer <br>Optimal Solutions!
                </h2>
                <p class="heading-desc">Serving an impressive list of long-term clients with experience and expertise in multiple industries.</p>
                <a class="btn btn--transparent btn--inverse" href="javascript:void(0)">our services</a>
             </div>
          </div>
          <div class="col-12 col-lg-6">
             <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="40" data-loop="true" data-speed="800">
                <div class="testimonial-panel">
                   <div class="testimonial-panel-warp">
                      <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                      <div class="testimonial-body">
                         <div class="testimonial-img"><img src="assets/images/testimonial/3.jpg" alt="Testimonial Author"></div>
                         <div class="testimonial-content">
                            <div class="testimonial-rating"><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                            <p>{{config('app.name')}} Logistics International customer service is some of the best we have ever had with ocean we like to ship as much as possible with you all.</p>
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
                            <p>{{config('app.name')}} Logistics International customer service is some of the best we have ever had with ocean we like to ship as much as possible with you all.</p>
                            <div class="testimonial-meta">
                               <h4>James Wane</h4>
                               <p>James Wane</p>
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
                            <p>{{config('app.name')}} Logistics International customer service is some of the best we have ever had with ocean we like to ship as much as possible with you all.</p>
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
       </div>
    </div>
 </section>
 <section class="blog blog-grid" id="blog-1">
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-6 offset-lg-3">
             <div class="heading heading-7 text-center">
                <p class="heading-subtitle">insight and trends</p>
                <h2 class="heading-title">recent articles</h2>
                <p class="heading-desc">Follow our latest news and thoughts which focuses exclusively on insight, industry trends, top news headlines.</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class=" col-12 col-md-6 col-lg-4">
             <div class="blog-entry">
                <div class="entry-img"><a href="blog-single.html"><img src="assets/images/blog/grid/1.jpg" alt="Importers achieve cost savings through the First Sale rule!"></a></div>
                <div class="entry-content">
                   <div class="entry-category"><a href="javascript:void(0)">cargo</a><a href="javascript:void(0)">insights</a></div>
                   <div class="entry-title">
                      <h4><a href="blog-single.html">Importers achieve cost savings through the First Sale rule!</a></h4>
                   </div>
                   <div class="entry-date"><span class="month">jan 20</span><span class="date">2021</span></div>
                   <div class="entry-bio">
                      <p>The trade war currently ensuing between the nations around the globe, fiercely with China, shows no signs of the first set of tariffs levied against solar...</p>
                   </div>
                   <div class="entry-more"> <a href="javascript:void(0)">Read more</a></div>
                </div>
             </div>
          </div>
          <div class=" col-12 col-md-6 col-lg-4">
             <div class="blog-entry">
                <div class="entry-img"><a href="blog-single.html"><img src="assets/images/blog/grid/2.jpg" alt="Cargo flow through better supply chain visibility, control."></a></div>
                <div class="entry-content">
                   <div class="entry-category"><a href="javascript:void(0)">warehouse</a><a href="javascript:void(0)">construction</a></div>
                   <div class="entry-title">
                      <h4><a href="blog-single.html">Cargo flow through better supply chain visibility, control.</a></h4>
                   </div>
                   <div class="entry-date"><span class="month">jan 23</span><span class="date">2021</span></div>
                   <div class="entry-bio">
                      <p>Global provider connected products for consumers, and enterprises worldwide, supply chain control is everything, provide visibility and traceability needed for...</p>
                   </div>
                   <div class="entry-more"> <a href="javascript:void(0)">Read more</a></div>
                </div>
             </div>
          </div>
          <div class=" col-12 col-md-6 col-lg-4">
             <div class="blog-entry">
                <div class="entry-img"><a href="blog-single.html"><img src="assets/images/blog/grid/3.jpg" alt="Importance of specialized focus in Projects, Oil &amp; Gas Logistics?"></a></div>
                <div class="entry-content">
                   <div class="entry-category"><a href="javascript:void(0)">logistics</a><a href="javascript:void(0)">distrbution</a></div>
                   <div class="entry-title">
                      <h4><a href="blog-single.html">Importance of specialized focus in Projects, Oil &amp; Gas Logistics?</a></h4>
                   </div>
                   <div class="entry-date"><span class="month">jan 24</span><span class="date">2021</span></div>
                   <div class="entry-bio">
                      <p>Our team provides skilled &amp; experienced managers who know the intricacies of this vertical and focus on providing solutions in Oil &amp; Gas sector...</p>
                   </div>
                   <div class="entry-more"> <a href="javascript:void(0)">Read more</a></div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="map map-3" id="map-1">
    <iframe class="map-gray map-gray" src="../maps/embed.html?q=Pioneer%20Works&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near" width="600" height="450" style="border:0"> </iframe>
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-4">
             <div class="accordion accordion-4" id="accordion01">
                <h4 class="panel">global locations</h4>
                <div class="card">
                   <div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-1">Pakistan office</a></div>
                   <div class="collapse show" id="collapse01-1" data-parent="#accordion01">
                      <div class="card-body">
                         <ul class="list-unstyled info">
                            <li><span class="fas fa-map-marker-alt"></span><a href="javascript:void(0)"> 3rd Floor, Bahria Complex 3, Lalazar, MT Khan Road, Service Road, Naval Officers Residential Estate 1 Naval Officers Colony, Karachi, Karachi City, Sindh.</a></li>
                            <li><span class="fas fa-envelope"></span><a href="#"><span class="__cf_email__" data-cfemail="cb8ebabea2bfaa8bfca4b9a4a4ade5a8a4a6">[email&#160;protected]</span></a></li>
                            <li><span class="fas fa-phone-alt"></span><a href="tel:+92021 35642730">+92(021) 35642730</a></li>
                         </ul>
                      </div>
                   </div>
                </div>
                <div class="card">
                   <div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-2">China office</a></div>
                   <div class="collapse" id="collapse01-2" data-parent="#accordion01">
                      <div class="card-body">
                         <ul class="list-unstyled info">
                            <li><span class="fas fa-map-marker-alt"></span><a href="javascript:void(0)">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></li>
                            <li><span class="fas fa-envelope"></span><a href="#"><span class="__cf_email__" data-cfemail="b5f0c4c0dcc1d4f582dac7dadad39bd6dad8">[email&#160;protected]</span></a></li>
                            <li><span class="fas fa-phone-alt"></span><a href="tel:01061245741">(002) 01061245741</a></li>
                         </ul>
                      </div>
                   </div>
                </div>

             </div>
          </div>
       </div>
    </div>
 </section>

@endsection
