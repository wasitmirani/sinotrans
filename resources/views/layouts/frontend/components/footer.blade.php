@push('styles')
<style>
    .footer {
    background-color: #00003f;
    padding-top: 0;
    padding-bottom: 0;
}
</style>

@endpush

<footer class="footer footer-1">
    <div class="footer-top">
       <div class="container">
          <div class="row">
             <div class="col-12 col-lg-3 col-xl-4">
                <div class="footer-logo" ><img class="footer-logo"  src="{{asset('assets/images/logo/logo-light.png')}}" alt="logo"></div>
             </div>
             <div class="col-12 col-lg-9 col-xl-8">
                <div class="widget-newsletter">
                   <div class="widget-content">
                      <p>Sign up for industry alerts,<br>insights from sinotrans.</p>
                      <form class="form-newsletter mailchimp">
                         <input class="form-control" type="email" name="email" placeholder="Your Email Address">
                         <input class="btn btn--primary" type="submit" value="sign up!">
                         <div class="subscribe-alert"></div>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="footer-center">
       <div class="container">
          <div class="row">
             <div class="col-sm-6 col-md-6 col-lg-3 footer-widget widget-about">
                <div class="footer-widget-title">
                   <h5>about</h5>
                </div>
                <div class="widget-content">
                   <p> Sinotrans is the largest integrated logistics integrator in China and has gone on to co-found, along with Transhold Ltd, Sinotrans Logistics Pakistan Pvt. Ltd., a group company of one of Pakistan's oldest & respected international freight forwarding organizations.</p>
                   <div class="module module-social">
                       <a class="share-facebook" href="https://www.facebook.com/sinotranspak/"><i class="fab fa-facebook-f"> </i></a>

                       <a class="share-twitter" href="https://pk.linkedin.com/company/sinotrans-logistics-pakistan-pvt-ltd"><i class="fab fa-linkedin"></i></a></div>
                </div>
             </div>
             <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-2 footer-widget widget-links">
                <div class="footer-widget-title">
                   <h5>services</h5>
                </div>
                <div class="widget-content">
                   <ul>
                      <li><a href="{{route('services.ocean.freigh')}}">Ocean Freight</a></li>
                      <li><a href="{{route('services.ship.agency')}}">Ship Agency</a></li>
                      <li><a href="{{route('services.custom.clearance')}}">Custom Clearance </a></li>
                      <li><a href="{{route('services.ware.house')}}">Warehousing</a></li>
                      <li><a href="{{route('services.road.transport')}}">Road Transport </a></li>

                   </ul>
                </div>
             </div>
             <div class="col-sm-6 col-md-6 col-lg-2 footer-widget widget-links">
                <div class="footer-widget-title">
                   <h5>industries</h5>
                </div>
                <div class="widget-content">
                   <ul>

                      <li ><a href="javascript:void(0)"><span>consumer &amp; retail</span></a></li>
                      <li ><a href="javascript:void(0)"><span>oil &amp; energy</span></a></li>
                      <li ><a href="javascript:void(0)"><span>automative</span></a></li>
                      <li ><a href="javascript:void(0)"><span>communications &amp; hightech</span></a></li>
                      <li ><a href="javascript:void(0)"><span>chemicals</span></a></li>
                      <li ><a href="javascript:void(0)"><span>events</span></a></li>
                     <li ><a href="javascript:void(0)"><span>construction</span></a></li>
                   </ul>
                </div>
             </div>
             <div class="col-sm-6 col-md-6 col-lg-3 footer-widget widget-contact">
                <div class="footer-widget-title">
                   <h5>quick contact</h5>
                </div>
                <div class="widget-content">o contact with our team.</p>
                   <ul>
                      <li class="phone text-light"><a href="tel:+92(021) 35642730"><i class="fas fa-phone-alt"></i> +92(021) 35642730</a></li>
                      <li class="address"><a href="javascript:void(0)">3rd Floor, Bahria Complex 3, Lalazar, MT Khan Road, Service Road, Naval Officers Residential Estate 1 Naval Officers Colony, Karachi, Karachi City, Sindh,Pakistan.</a></li>
                   </ul>
                </div>
             </div>
          </div>
          <div class="clearfix"></div>
       </div>
    </div>
    <div class="footer-bottom">
       <div class="row">
          <div class="col-md-12 col-md-12 text--center footer-copyright">
             <div class="copyright"><span>&copy; {{date('Y')}}  {{config('app.name')}}  All Rights Reserved </span><a href="#"></a></div>
          </div>
       </div>
    </div>
 </footer>
