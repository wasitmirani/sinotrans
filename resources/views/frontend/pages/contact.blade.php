



@extends('layouts.frontend.master')
@section('content')
<section class="map map-2">

    <iframe
    width="600"
    height="450"
    style="border:0"
    loading="lazy"
    allowfullscreen
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCxcHXNubtbDr4mHGqxlCSvni-UQBmqkXY
      &q=Sinotrans+Pakistan+Pvt+Ltd&zoom=16">
  </iframe>
 </section>
 <section class="contact-info">
    <div class="container">
       <div class="row">
          <div class="col-12 col-lg-4">
             <div class="row">
                <div class="col-12 col-sm-6 col-lg-12">
                   <div class="contact-details">
                      <h6>contact details</h6>
                      <ul class="list-unstyled info">
                         <li><span class="fas fa-map-marker-alt"></span><a href="javascript:void(0)">3rd Floor, Bahria Complex 3, Lalazar, MT Khan Road, Service Road, Naval Officers Residential Estate 1 Naval Officers Colony, Karachi, Karachi City, Sindh.</a></li>
                         <li><span class="fas fa-envelope"></span><a href="mail:info@sinotrans.com.pk"><span >info@sinotrans.com.pk</span></a></li>
                         <li><span class="fas fa-phone-alt"></span><a href="tel:+92(021) 35642730">+92(021) 35642730</a></li>
                      </ul>
                   </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-12">
                   <div class="opening-hours">
                      <h6>opening hours</h6>
                      <ul class="list-unstyled">
                         <li> <span>Monday-friday</span><span>10:00 - 18:00</span></li>
                         <li> <span>saturday</span><span>10:00 - 14:00</span></li>
                         <li> <span>sunday</span><span>closed</span></li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-12 col-lg-8">
            @livewire('contactus')
          </div>
       </div>
    </div>
 </section>

 @endsection
