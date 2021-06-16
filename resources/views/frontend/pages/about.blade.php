
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
    <h1>Global Logistics Partner To World’s Famous Brands For Over 25 Years!</h1>
    </div>
        @component('frontend.components.Breadcam',['back_link'=>'Company','active_link'=>'About Us'])

        @endcomponent

    </div>

    </div>

    </div>

    </section>

    @component('frontend.components.aboutus')

    @endcomponent
@endsection
