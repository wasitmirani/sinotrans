
@extends('layouts.frontend.master')


@section('content')
@push('styles')
<style type="text/css">
.features {
    padding-top: 440px;
    padding-bottom: 35px;
}
.cases-standard .carousel-navs .owl-nav .owl-prev {
    left: -45px;
    display: none;
}
.cases-standard .carousel-navs .owl-nav .owl-next {
    right: -45px;
    display: none;

}
</style>

@endpush
<section class="slider slider-1" id="slider-1">
    <div class="container-fluid pr-0 pl-0">
       <div class="carousel owl-carousel custom-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800" data-slider-id="#custom-carousel">
          <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
             <div class="bg-section"><img src="{{asset('/assets/images/sliders/1.jpg')}}" alt="Background"></div>
             <div class="container">
                <div class="row">
                   <div class="col-12 col-lg-7">
                      <div class="slide-content">
                         <p class="slide-subheadline">Flexibile, Improved And accelerated Solutions</p>
                         <h1 class="slide-headline">full sustainable<br>cargo solutions!</h1>
                         <p class="slide-desc">Representative logistics operator providing full range of service in the sphere of customs clearance and transportation .</p>


                        @component('frontend.components.silderLinks')

                        @endcomponent
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
             <div class="bg-section"><img src="{{asset('assets/images/sliders/2.jpg')}}" alt="Background"></div>
             <div class="container">
                <div class="row">
                   <div class="col-12 col-lg-7">
                      <div class="slide-content">
                         <p class="slide-subheadline">Flexibile, Improved And accelerated Solutions</p>
                         <h2 class="slide-headline">innovation sea<br>transportation!</h2>
                         <p class="slide-desc">Representative logistics operator providing full range of service in the sphere of customs clearance and transportation .</p>
                         @component('frontend.components.silderLinks')

                         @endcomponent
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
             <div class="bg-section"><img src="{{asset('assets/images/sliders/3.jpg')}}" alt="Background"></div>
             <div class="container">
                <div class="row">
                   <div class="col-12 col-lg-7">
                      <div class="slide-content">
                         <p class="slide-subheadline">Flexibile, Improved And accelerated Solutions</p>
                         <h2 class="slide-headline">your flexible<br>road directions!</h2>
                         <p class="slide-desc">Representative logistics operator providing full range of service in the sphere of customs clearance and transportation .</p>
                         @component('frontend.components.silderLinks')

                         @endcomponent
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
                         <p class="slide-desc">Representative logistics operator providing full range of service in the sphere of customs clearance and transportation .</p>
                         @component('frontend.components.silderLinks')

                         @endcomponent
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
            <i class="thumb-icon flaticon-010-cargo"> </i>
            <div class="thumb-body">
               <p>innovative</p>
               <h3> <a href="{{route('services.ocean.freigh')}}">Ocean Freight services</a></h3>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 services-bar-card ">
            <i class="thumb-icon flaticon-010-cargo"> </i>
            <div class="thumb-body">
               <p>innovative</p>
               <h3> <a href="{{route('services.ship.agency')}}">Ship Agency services</a></h3>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 services-bar-card">
            <i class="thumb-icon flaticon-033-checklist"></i>
            <div class="thumb-body">
               <p>flexible</p>
               <h3> <a href="{{route('services.custom.clearance')}}">Custom clearance</a></h3>
            </div>
         </div>
          <div class="col-12 col-md-6 col-lg-3 services-bar-card ">
             <i class="thumb-icon flaticon-004-trailer-1 "></i>
             <div class="thumb-body">
                <p>sustainable </p>
                <h3> <a href="{{route('services.road.transport')}}">Road Transport services</a></h3>
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
                <h2 class="heading-title">Global Logistics Partner To World’s Famous Brands!</h2>
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
                <div class="contact-types">
                    <a class="button quote-btn active" href="javascript:void(0)" data-form="quoteFormActive"> <i class="flaticon-020-order"> </i><span>get in touch</span></a>
                    <a class="button track-btn " href="javascript:void(0)" data-form="trackFormActive"> <i class="flaticon-009-shipping-1"> </i><span>track &amp; trace</span></a></div>
                <div class="contact-card">
                   <div class="contact-body quoteFormActive">
                      <div class="row">
                         <div class="col-12 col-lg-12">

                            @livewire('contactus')

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


                         {{-- <div class="col-12 col-lg-4">
                            <div class="apply-card widget widget-reservation">
                               <img src="assets/images/contact/1.jpg" alt="Background Image">
                               <div class="widget-content">
                                  <h5>take your carreer to next level</h5>
                                  <p>We pride ourselves on providing the best transport & shipping services available all over the world and there is no one comes close to us. </p>
                                  <a class="btn btn--white" href="javascript:void(0)"><i class="icon-arrow-right"></i>apply now!</a>
                               </div>
                            </div>
                         </div> --}}
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
                <h1>Our Services</h1>
             </div>

          </div>
       </div>
       <div class="row">
        <div class="carousel owl-carousel carousel-navs carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="30" data-loop="true" data-speed="3000">
            <div class="case-item">
                <div class="case-item-warp">
            @component('frontend.components.serviceCard',
            [
                'icon'=>'flaticon-010-cargo',
                'name'=>'ocean Freight',
                'link'=>route('services.ocean.freigh'),
                'short_description'=>'We work with leading carriers and use an expanding network of agents, partners, as well as our own offices around the world.  This enables us to give you global service backed by the extensive expertise of our local teams.'
            ])
            @endcomponent
          </div>

            </div>
            <div class="case-item">
                <div class="case-item-warp">
            @component('frontend.components.serviceCard',
            [
                'icon'=>'flaticon-010-cargo',
                'name'=>'ship agency',
                'link'=>route('services.ship.agency'),
                'short_description'=>'Working with us vessel principals and service providers means benefitting from our flexible, fully integrated multi-model logistic solutions and quick transit times.'
            ])
            @endcomponent
          </div>
            </div>
          {{-- CUSTOM CLEARANCE --}}
          <div class="case-item">
            <div class="case-item-warp">
            @component('frontend.components.serviceCard',
            [
                'icon'=>'flaticon-033-checklist',
                'name'=>'custom clearance',
                'link'=>route('services.custom.clearance'),
                'short_description'=>'To ensure timely commitment and safe delivery of the cargo, our top in-house custom clearance department has hands-on experience in handling every aspect of the customs clearance processes, be it communicating with the custom officials or offering consultancy services.'
            ])
            @endcomponent
          </div>
          </div>

          <div class="case-item">
            <div class="case-item-warp">
                @component('frontend.components.serviceCard',
                [
                    'icon'=>'flaticon-004-trailer-1',
                    'name'=>'Road Transport ',
                    'link'=>route('services.road.transport'),
                    'short_description'=>'Our experience as a road logistics specialist, in combination with an efficient transport network is what makes us a major global intermodal player.'
                ])
                @endcomponent
            </div>
          </div>

          <div class="case-item">
            <div class="case-item-warp">
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
       </div>

    </div>
    <div class="more-features mt-4">
        <p>Logistic & Transport Solutions Saves Your Time. <a href="{{route('services.all')}}">Find your solution </a></p>
     </div>
 </section>
 <section class="about about-2 about-5" id="about-5">
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-5">
              @component('frontend.components.whyus')

              @endcomponent

          </div>
          <div class="col-12 col-lg-6 offset-lg-1">
             <div class="about-img abput-img-text">
                <div class="about-img-warp">
                   <div class="bg-section"><img class="img-fluid" src="assets/images/about/2.jpg" alt="about Image"></div>
                </div>
                <div class="about-card">
                   <h6>Flexibile, Improved & Accelerated Solutions!</h6>
                   <p>Providing full range of service in the sphere transportation .</p>
                   <a href="{{route('services.all')}}"><i class="icon-arrow-right"></i> our services</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

 <section class="cta cta-3 bg-theme" id="cta-3">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-12 col-lg-12">
             <div class="heading heading-2 heading-light">
                <p class="heading-subtitle">Directions, That Matter!</p>
                <h2 class="heading-title">What Gives Us Our Strength?</h2>
             </div>
          </div>
          <div class="col-12 col-lg-6 offset-lg-1">
          <div class="prief-set">

            {{-- <p>Sinotrans is the largest integrated logistics integrator in China and has gone on to co-found, along with Transhold Ltd, Sinotrans Logistics Pakistan Pvt. Ltd., a group company of one of Pakistan's oldest & respected international freight forwarding organizations.</p> --}}
          </div>
          </div>
          <div class="col-12 col-lg-10 offset-lg-1">
            <div class="prief-set">
                <ul class="advantages-list">
                   <li><i class="fas fa-check-circle"></i> Sinotrans Group’s global footprint, knowledge and impeccable reputation</li>
                   <li><i class="fas fa-check-circle"></i> Our ability to provide a one window solution and manage all operations in house, keeping a high service level</li>
                   <li><i class="fas fa-check-circle"></i> Extensive experience with project operations</li>
                   <li><i class="fas fa-check-circle"></i> Unmatched local team and partners, including our teams from China</li>
                   <li><i class="fas fa-check-circle"></i> Our proprietary team of highly experienced drivers and modern equipment</li>
                   <li><i class="fas fa-check-circle"></i> Strong customer service orientation</li>
                </ul>
             </div>
          </div>
       </div>
       <div class="action-panels">
          <div class="row no-gutters">
             <div class="col-12 col-lg-6">
                <div class="action-panel">
                   <div class="action-panel-img">
                      <div class="bg-section"><img src="{{asset('assets/images/cta/2.png')}}" alt="image"></div>
                   </div>
                   <div class="action-panel-content">
                      <div class="panel-icon"><i class="flaticon-015-scale"></i></div>
                      <div class="panel-heading">
                         <h3>Lahore Orange Line Metro </h3>
                      </div>
                      <a href="javascript:void(0)"><i class="icon-arrow-right"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-12 col-lg-6">
                <div class="action-panel">
                   <div class="action-panel-img">
                      <div class="bg-section"><img src="{{asset('assets/images/cta/9.png')}}" alt="Image"></div>
                   </div>
                   <div class="action-panel-content inverted">
                      <div class="panel-icon"><i class="flaticon-017-pallet"></i></div>
                      <div class="panel-heading">
                         <h3>China Power Hub Genration Company</h3>
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

                <div class="carousel owl-carousel carousel-navs carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="30" data-loop="true" data-speed="3000">
                    @foreach ($projects as $project)
                        @component('frontend.components.projectCard',['project'=>$project])
                        @endcomponent
                    @endforeach

                </div>

          </div>
       </div>
    </div>
    {{-- <div class="clients clients-carousel clients-1 pt-0">
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
    </div> --}}
 </section>
 <section class="testimonial testimonial-3 bg-overlay bg-overlay-theme">
    <div class="bg-section"> <img src="assets/images/background/2.png" alt="background-img"></div>
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-6">
             <div class="heading heading-light heading-6">
                <p class="heading-subtitle"></p>
                <h2 class="heading-title">
                    Latest Equipment
                </h2>
                <p class="heading-desc">Having proprietary equipment give us huge advantage over other players, reducing dependency on other links in the chain, a value Chinese client particularly appreciate.  It also it allows us to provide an unmatched level of service control by offering us near total command of projects logistics thanks our team of experts.</p>
                <a class="btn btn--transparent btn--inverse" href="{{route('services.all')}}">our services</a>
             </div>
          </div>

       </div>
    </div>
 </section>
 {{-- <section class="blog blog-grid" id="blog-1">
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
                      <p>Global provider connected products for consumers, and enterprises , supply chain control is everything, provide visibility and traceability needed for...</p>
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
 </section> --}}
 <section class="map map-3" id="map-1">
 @component('frontend.components.officeLocation')
 @endcomponent
</section>
@endsection
