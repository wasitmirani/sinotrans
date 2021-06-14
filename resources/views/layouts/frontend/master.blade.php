<!DOCTYPE html>
<html dir="ltr" lang="en-US">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="author" content="{{config('app.name')}}">
      <meta name="title" content="{{config('app.name')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="{{config('app.name')}} is one of the world&#039;s leading logistics companies with a global reach spanning across several developed &amp; developing markets. Click to learn more.">
      <title>{{config('app.name')}}</title>
      <link href="{{asset('/assets/images/favicon/favicon.png')}}" rel="icon">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="../css2.css?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
      <link href="{{asset('/assets/css/vendor.min.css')}}" rel="stylesheet">
      <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
   </head>
   <body>
      <div class="preloader">
         <div class="loader-spinner">
            <div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
            </div>
         </div>
      </div>
      <div class="wrapper clearfix" id="wrapperParallax">

        @include('layouts.frontend.components.navbar')

        @yield('content')

         @include('layouts.frontend.components.footer')

         <div class="backtop" id="back-to-top"><i class="fas fa-chevron-up"></i></div>
      </div>
      <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
      <script src="assets/js/vendor.min.js"></script>
      <script src="assets/js/functions.js"></script>
   </body>
</html>
