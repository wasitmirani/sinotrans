<!DOCTYPE html>
<html dir="ltr" lang="en-US">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <!-- OR -->
    {!! SEO::generate() !!}

      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


      <link href="{{asset('/assets/images/favicon/favicon.png')}}" rel="icon">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="../css2.css?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
      <link href="{{asset('/assets/css/vendor.min.css')}}" rel="stylesheet">
      <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
        @stack("styles")
        <style>
            .footer .footer-center {
    padding-top: 50px !important;
    padding-bottom: 10px !important;
}
.footer .footer-center {
    padding-top: 26px;
}
.counter {
    background-color: #114b89;
    color: #fff;
    border-radius: 4px;
    padding: 25px 40px 30px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.contact-types .button.active {
    background-color: #e11d07;
}
.about .about-img .about-card {
    background-color: #114b89;
    color: #fff;
    border-radius: 4px;
    padding: 35px 50px 40px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 330px;
    z-index: 99;
}
.bg-theme {
    background-color: #e11d07!important;
}
.footer .widget-links ul li a {
    color: #ffffff;
    font-size: 14px;
    font-weight: 400;
    line-height: 33px;
    text-transform: capitalize;
    font-family: roboto,sans-serif;
}


.footer .footer-widget .widget-content p {
    color: #ffffff;
    font-size: 14px;
    font-weight: 400;
    line-height: 25px;
    margin-bottom: 25px;
}

.footer .widget-contact .widget-content .address a {
    color: #ffffff;
    font-size: 14px;
}
.footer {
    background-color: #114b89;
    padding-top: 0;
    padding-bottom: 0;
}
.footer .widget-contact .widget-content .phone a {
    color: #ffffff;
    font-family: rubik,sans-serif;
    font-size: 22px;
}
.bg-overlay-theme:before {
    background-color: #114b89;
    opacity: 0.9;
}
.cta .action-panel .action-panel-content.inverted {
    background-color: #114b89;
}
.widget-reservation::before {
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background-color: rgb(17 75 137 / 90%);
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
    z-index: 2;
}
.cta .action-panel .action-panel-content {
    position: absolute;
    bottom: 0;
    left: 0;
    background-color: #114b89;
    -webkit-transition: .3s ease-in-out;
    -o-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    padding: 35px 40px;
    border-radius: 0 4px 0 4px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 344px;
    height: 106px;
    z-index: 99;
}
.brands-images:hover {
  -webkit-filter: none !important;
  filter: none !important;

}

.brands-images {
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
}
  </style>
      @livewireStyles
   </head>
   <body>

      <div class="wrapper clearfix" id="wrapperParallax">

        @include('layouts.frontend.components.navbar')

          @yield('content')

         @include('layouts.frontend.components.footer')

         <div class="backtop" id="back-to-top"><i class="fas fa-chevron-up"></i></div>
      </div>

     <script src="{{asset('assets/js/vendor/jquery-3.4.1.min.js')}}"></script>
      <script src="{{asset('assets/js/vendor.min.js')}}"></script>
      <script src="{{asset('assets/js/functions.js')}}"></script>

      @livewireScripts
   </body>
</html>
