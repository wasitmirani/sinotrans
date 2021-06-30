<section class="about pt-70" id="about-1">
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-5">
             <div class="about-img about-img-left">
                <div class="about-img-warp bg-overlay">
                   <div class="bg-section"><img src="{{asset('assets/images/about/1.jpg')}}" alt="about Image"></div>
                </div>
                <div class="counter">
                   <div class="counter-icon"> <i class="flaticon-018-packaging"></i></div>
                   <div class="counter-num">
                      <span >1000</span>
                      <p></p>
                   </div>
                   <div class="counter-name">
                      <h6>Projects</h6>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-12 col-lg-7">
             <div class="heading heading-3">
                <p class="heading-subtitle">Providing Full Range Of Transportation.</p>
                <h2 class="heading-title">ABOUT SINOTRANS</h2>
             </div>
             <div class="about-block">
                <div class="row">
                   <div class="col-12 col-lg-7">
                      <div class="block-left">
                         <p class="text-justify">{{config('app.name')}} is the largest integrated logistics integrator in China and has gone on to co-found, along with Transhold Ltd, Sinotrans Logistics Pakistan Pvt. Ltd., a group company of one of Pakistan's oldest & respected international freight forwarding organizations.</p>
                         @if(!request()->routeIs('company.about-us'))
                         <p class="text-justify">
                            Since 2014 Sinotrans Pakistan, offers road transportation, heavy lifting, and oversize transport, customs clearance, ship agency, owners’ husbandry, warehousing, Containerised and breakbulk as well ocean freight booking services to trade points such as Karachi Port, Port Qasim and Gwadar.

                        </p>
                        @else
                        <p class="text-justify">
                            Sinotrans is the largest integrated logistics integrator in China and has gone on to co-found, along with Transhold Ltd, Sinotrans Logistics Pakistan Pvt. Ltd., a group company of one of Pakistan's oldest & respected international freight forwarding organizations.
                            Since 2014 Sinotrans Pakistan, offers road transportation, heavy lifting, and oversize transport, customs clearance, ship agency, owners’ husbandry, warehousing, Containerised and breakbulk as well ocean freight booking services to trade points such as Karachi Port, Port Qasim and Gwadar.
                            The unbeatable dependability and timeliness of our services to all destinations for a wide and diverse customer base has made us a leading integrated logistics service provider in Pakistan. It also means we play a significant role in a diverse array of projects that contribute to the country’s national wealth, security, and environmental well-being: From the Hub Power Project to equipment transport of the storied Orange Line Metro Lahore, to the K2 And K3 Nuclear Power Plant Karachi , we proudly help deliver prosperity and progress.
                        </p>
                        @endif
                        @if(!request()->routeIs('company.about-us'))
                        <a href="{{route('company.about-us')}}"><i class="icon-arrow-right"></i> read more</a>
                        @endif
                      </div>
                   </div>
                   <div class="col-12 col-lg-5">
                      <div class="block-right">
                         <div class="detail">
                            <h6>Corporate Vision </h6>
                            <p>To become one of the leading integrated logistics services corporations in Pakistan.</p>
                         </div>
                         <div class="detail">
                            <h6>corporate mission</h6>
                            <p>To continuously create business and social value, through provision of the best solutions and services, with an unrelenting focus on customer needs.</p>
                         </div>

                      </div>
                   </div>
                </div>
             </div>
             <div class="signature-block">
                <div class="signature-body">
                   <h6>Mr. Babar Badat</h6>
                   <p>Chairman</p>
                </div>




                {{-- <img src="#" alt="signature"> --}}
             </div>
             <div class="row">
                <span class="mt-4">{{config('app.name')}}</span>

            </div><img style="width: 140px;" src="{{asset('/assets/images/logo/logo-dark.png')}}" alt="{{config('app.name')}}">
             </div>
          </div>
       </div>
    </div>
 </section>
