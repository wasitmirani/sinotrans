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
