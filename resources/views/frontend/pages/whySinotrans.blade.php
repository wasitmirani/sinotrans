
@extends('layouts.frontend.master')
@section('content')

<section class="page-title page-title-4 bg-overlay bg-overlay-dark bg-parallax" id="page-title">
    <div class="bg-section"><img src="{{asset('assets/images/page-titles/15.jpg')}}" alt="Background"></div>
    <div class="container">
    <div class="row">
    <div class="col-12 col-lg-6">
    <div class="title text-lg-left">
    <div class="title-sub-heading">
    {{-- <p>Dedicated Customer Teams &amp; An Agile Services</p> --}}
    </div>
    <div class="title-heading">
    <h1>Why Sinotrans</h1>
    </div>
        @component('frontend.components.Breadcam',['back_link'=>'Company','active_link'=>'Why Sinotrans'])
        @endcomponent

    </div>

    </div>

    </div>

    </section>

    <section class="about about-2 about-5" id="about-5">
        <div class="container">
        <div class="row">
        <div class="col-12 col-lg-5">
        <div class="heading heading-9">
        <p class="heading-subtitle">Providing Full Range Of Transportation .</p>
        <h2 class="heading-title">Why Sinotrans Limited?</h2>
        </div>
        <div class="about-block">
        <div class="block-left">
        <p>Sinotrans specializes in managing complex, high-value, heavy-lift and over-dimensional project cargo and international freight forwarding services.  Customers can count on us for reliable, professional, safe, and compliant cargo handling, while remaining responsive to constantly changing market needs.</p>
        <p>The unbeatable combination of our technology, service and people for our diverse customer base has made us a leading integrated logistics service provider in Pakistan with a reputation for multi-modal project cargo success backed by proven innovative logistics solutions and service excellence.</p>
        <p>In 7 short years, we have accomplished over 50 large projects, equalling over 1.5 million tons of cargo, thanks to our ever expanding team: Thanks to their extensive knowledge base and rich experience, unwavering adaptability as well as unrelenting commitment to success, we’re certain to achieve much more. We also equip them with state-of-the-art tools and equipment to help empower lasting business relationships and sustained success.</p>
        <p>This also means we play a significant role in a diverse array of projects that contribute to the country’s national wealth, security, and environmental well-being: From wind, solar, and hydropower setups to equipment transport for the overall revamp of Pakistan’s national grid, shifting over 7500+ TEU’s, we proudly help deliver prosperity and progress</p>
        </div>
        </div>
        <div class="signature-block">
        <div class="signature-body">
        <span>{{config('app.name')}}</span>

        </div><img style="width: 80px;" src="{{asset('/assets/images/logo/logo-dark.png')}}" alt="{{config('app.name')}}">
        </div>
        </div>

        <div class="col-12 col-lg-6 offset-lg-1">
        <div class="about-img abput-img-text">
        <div class="about-img-warp">
        <div class="bg-section"><img class="img-fluid" src="{{asset('/assets/images/about/2.jpg')}}" alt="about Image"></div>
        </div>
        <div class="about-card">
        <h6>Flexibile, Improved & Accelerated Solutions!</h6>
        <p>Strong customer service orientation.</p><a href="{{route('services.all')}}"><i class="icon-arrow-right"></i> our services</a>
        </div>
        </div>
        </div>
        </div>

        </div>

        </section>

@endsection
