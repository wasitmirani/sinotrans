<header class="header header-1 header-transparent" id="navbar-spy">
    <nav class="navbar navbar-expand-lg  navbar-bordered navbar-sticky" id="primary-menu">
       <div class="container">
          <a class="navbar-brand" href="{{route('index')}}"><img class="logo logo-light" src="{{asset('assets/images/logo/logo-light.png')}}"  alt="{{config('app.name')}} Logo"><img class="logo logo-dark" src="{{asset('assets/images/logo/logo-dark.png')}}"   alt="{{config('app.name')}} Logo"></a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
             <ul class="navbar-nav ml-auto">
                <li class="nav-item {{request()->routeIs('index') ? 'active' : ''}}">
                   <a class="dropdown-toggle" href="{{route('index')}}" ><span>Home</span></a>
                </li>
                <li class="nav-item has-dropdown  {{request()->routeIs('company*') ? 'active' : ''}}">
                   <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>company</span></a>
                   <ul class="dropdown-menu">
                      <li class="nav-item   {{request()->routeIs('company.about-us') ? 'current' : ''}} "><a href="{{route('company.about-us')}}"><span>about us</span></a></li>
                      <li class="nav-item"><a href="page-core.html"><span>core values</span></a></li>
                      <li class="nav-item"><a href="page-team.html"><span>leadership team</span></a></li>
                      <li class="nav-item"><a href="page-locations.html"><span>global locations</span></a></li>
                      <li class="nav-item"><a href="page-careers.html"><span>careers</span></a></li>
                   </ul>
                </li>
                <li class="nav-item has-dropdown mega-dropdown {{request()->routeIs('services*') ? 'active' : ''}}">
                   <a class="dropdown-toggle" href="{{route('services.all')}}" data-toggle="dropdown"><span>services</span></a>
                   <ul class="dropdown-menu">
                      <li>
                         <div class="row">
                            <div class="col col-md-6">
                               <h5 class="menu-head">transport services</h5>
                               <ul>
                                  <li class="nav-item"><a href="#"><span>Transportation</span></a></li>
                                  <li class="nav-item"><a href="#"><span>Shipping Agency</span></a></li>
                                  <li class="nav-item"><a href="#"><span>Business commercial</span></a></li>
                                  <li class="nav-item"><a href="#"><span>Custom clearance</span></a></li>
                                  <li class="nav-item"><a href="#"><span>WareHousing Solutions                                </span></a></li>
                               </ul>
                            </div>
                            <div class="col col-md-6">
                               <h5 class="menu-head">industry solutions</h5>
                               <ul>
                                  <li class="nav-item"><a href="industry-retail.html"><span>consumer &amp; retail</span></a></li>
                                  <li class="nav-item"><a href="industry-science.html"><span>oil &amp; energy</span></a></li>
                                  <li class="nav-item"><a href="industry-chemical.html"><span>automative</span></a></li>
                                  <li class="nav-item"><a href="industry-power.html"><span>communications &amp; hightech</span></a></li>
                                  <li class="nav-item"><a href="industry-food.html"><span>chemicals</span></a></li>
                                  <li class="nav-item"><a href="industry-oil.html"><span>events</span></a></li>
                                <li class="nav-item"><a href="industry-oil.html"><span>construction</span></a></li>
                               </ul>
                            </div>
                         </div>
                      </li>
                   </ul>
                </li>
                <li class="nav-item has-dropdown">
                   <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>news &amp; media</span></a>
                   <ul class="dropdown-menu">
                      <li class="nav-item"><a href="blog-grid-fullwidth.html"><span>our blog</span></a></li>
                      <li class="nav-item"><a href="blog-single-sidebar.html"><span>single blog post</span></a></li>
                      <li class="nav-item"><a href="page-our-services.html"><span>our services</span></a></li>
                      <li class="nav-item"><a href="case-studies-grid.html"><span>case studies grid</span></a></li>
                      <li class="nav-item"><a href="case-studies-standard.html"><span>case studies standard</span></a></li>
                      <li class="nav-item"><a href="case-study-single.html"><span>single case study</span></a></li>
                   </ul>
                </li>
                <li class="nav-item has-dropdown">
                   <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>features</span></a>
                   <ul class="dropdown-menu">
                      <li class="nav-item"><a href="request-quote.html"><span>request a quote</span></a></li>
                      <li class="nav-item"><a href="track-shipment.html"><span>track &amp; trace</span></a></li>
                      <li class="nav-item"><a href="find-location.html"><span>find a location</span></a></li>
                      <li class="nav-item"><a href="faqs.html"><span>help &amp; fAQs</span></a></li>
                   </ul>
                </li>
                <li class="nav-item"><a href="contact.html"><span>contact</span></a></li>
             </ul>
             <div class="module-container">
                <div class="module module-search float-left">
                   <div class="module-icon search-icon"><i class="icon-search"></i><span class="title">search</span></div>
                   <div class="module-content module-fullscreen module-search-box">
                      <div class="pos-vertical-center">
                         <div class="container">
                            <div class="row">
                               <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                                  <form class="form-search">
                                     <input class="form-control" type="text" placeholder="type words then enter">
                                     <button></button>
                                  </form>
                               </div>
                            </div>
                         </div>
                      </div>
                      <a class="module-cancel" href="javascript:void(0)"><i class="fas fa-times"></i></a>
                   </div>
                </div>
                <div class="module-contact"><a class="btn btn--primary" href="javascript:void(0)">request a quote</a></div>
                <div class="module module-language">
                   <div class="selected"><span>en </span><i class="fas fa-chevron-down"></i></div>
                   <div class="lang-list">
                      <ul>
                         <li> <a href="javascript:void(0)">english</a></li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </nav>
 </header>
