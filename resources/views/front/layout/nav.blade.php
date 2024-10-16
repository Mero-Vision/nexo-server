 <!--header section start-->
 <header id="header" class="header-main">
     <!--topbar start-->
     <div id="header-top-bar" class="gray-light-bg">
         <div class="container">
             <div class="row justify-content-between">
                 <div class="col-md-7 col-lg-7">
                     <div class="topbar-text d-none d-md-block d-lg-block">
                         <ul class="list-inline">
                             <li class="list-inline-item">
                                 <a href="tell:9825915122"><span class="fas fa-phone mr-2"></span> 24x7 Technical
                                     Support: 9825915122</a>
                             </li>
                             <li class="list-inline-item"><a href="#"><span class="fas fa-comments mr-2"></span>
                                     Live
                                     Chat</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-md-4 col-lg-4">
                     <div class="topbar-text">
                         <ul class="list-inline text-right">
                             <li class="list-inline-item"><a href="https://clients.nexoserver.com/login"><span
                                         class="fas fa-user mr-2"></span> Login</a></li>
                             <li class="list-inline-item"><a href="https://clients.nexoserver.com/register.php"><span
                                         class="fas fa-lock mr-2"></span> Register</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--topbar end-->

     <!--main header menu start-->
     <div id="logoAndNav" class="main-header-menu-wrap white-bg border-bottom">
         <div class="container">
             <nav class="js-mega-menu navbar navbar-expand-md header-nav">

                 <!--logo start-->
                 <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('assets/img/logo.png') }}"
                         width="200" alt="logo" class="img-fluid" /></a>
                 <!--logo end-->

                 <!--responsive toggle button start-->
                 <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar"
                     data-toggle="collapse" data-target="#navBar">
                     <span id="hamburgerTrigger">
                         <span class="fas fa-bars"></span>
                     </span>
                 </button>
                 <!--responsive toggle button end-->

                 <!--main menu start-->
                 <div id="navBar" class="collapse navbar-collapse">
                     <ul class="navbar-nav ml-auto main-navbar-nav">
                         <!--home start-->
                         <li class="nav-item custom-nav-item" data-position="left">
                             <a class="nav-link custom-nav-link" href="{{ url('/') }}">Home</a>


                         </li>
                         <!--home end-->




                         <!--hosting start-->
                         <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="720px"
                             data-position="right">
                             <a id="hostingMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                 href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Hosting</a>

                             <!--  Mega Menu -->
                             <div class="hs-mega-menu w-100 main-sub-menu" aria-labelledby="hostingMegaMenu">
                                 <div class="row no-gutters">
                                     <div class="col-md-6">
                                         <!--menu title with subtitle and icon item start-->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link" href="{{ url('web-hosting') }}">
                                                 <div class="media">
                                                     <div class="menu-item-icon"><i class="fas fa-server"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Web Hosting</span>
                                                         <small class="u-header__promo-text">Innovate reliable quality
                                                             Starting at <strong>$2.99</strong></small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <!--menu title with subtitle and icon item end-->

                                         <!--menu title with subtitle and icon item start-->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link" href="{{ url('cloud-hosting') }}">
                                                 <div class="media">
                                                     <div class="menu-item-icon"><i class="fas fa-cloud"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Cloud Hosting <span
                                                                 class="badge badge-danger ml-1">Hot</span></span>
                                                         <small class="u-header__promo-text">Conveniently cloud
                                                             Starting
                                                             at <strong>$5.99/mo</strong></small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <!--menu title with subtitle and icon item end-->


                                         <!--menu title with subtitle and icon item start-->
                                         {{-- <div class="title-with-icon-item">
                                             <a class="title-with-icon-link" href="vps-hosting.html">
                                                 <div class="media">
                                                     <div class="menu-item-icon"><i class="fas fa-box"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">VPS Hosting <span
                                                                 class="badge badge-success ml-1">Popular</span></span>
                                                         <small class="u-header__promo-text">Pefficiently maintain
                                                             Starting at <strong>$11.99</strong></small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div> --}}
                                         <!--menu title with subtitle and icon item end-->
                                         <!--menu title with subtitle and icon item start-->
                                         {{-- <div class="title-with-icon-item">
                                             <a class="title-with-icon-link" href="dedicated-server-hosting.html">
                                                 <div class="media">
                                                     <div class="menu-item-icon"><i class="fas fa-tachometer-alt"></i>
                                                     </div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Dedicated Hosting</span>
                                                         <small class="u-header__promo-text">Quickly build Starting at
                                                             <strong>$150.99/mo</strong></small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div> --}}
                                         <!--menu title with subtitle and icon item end-->

                                     </div>

                                     <div class="col-md-6">

                                         <!--menu title with subtitle and icon item start-->
                                         <div class="title-with-icon-item">
                                             <a class="title-with-icon-link" href="{{ url('wordpress-hosting') }}">
                                                 <div class="media">
                                                     <div class="menu-item-icon"><i class="fas fa-database"></i></div>
                                                     <div class="media-body">
                                                         <span class="u-header__promo-title">Wordpress
                                                             Hosting</span>
                                                         <small class="u-header__promo-text">Conveniently Starting at
                                                             <strong>$9.99/mo</strong></small>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <!--menu title with subtitle and icon item end-->


                                     </div>

                                 </div>
                             </div>
                             <!-- End Demos - Mega Menu -->
                         </li>
                         <!--hosting end-->



                         <!--pages start-->
                         <li class="nav-item hs-has-sub-menu custom-nav-item">
                             <a id="pagesMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                 href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"
                                 aria-labelledby="pagesSubMenu">Domains</a>

                             <!-- Pages - Submenu -->
                             <ul id="pagesSubMenu" class="hs-sub-menu main-sub-menu" aria-labelledby="pagesMegaMenu"
                                 style="min-width: 260px;">
                                 <li class="nav-item submenu-item">
                                     <a class="nav-link sub-menu-nav-link" href="{{ url('domains') }}">Domain
                                         Checker</a>
                                 </li>

                                 <li class="nav-item submenu-item">
                                     <a class="nav-link sub-menu-nav-link" href="{{ url('whois') }}">WHOIS Lookup</a>
                                 </li>

                             </ul>
                             <!-- End Pages - Submenu -->
                         </li>
                         <!--pages end-->


                         <!--pages start-->
                         <li class="nav-item hs-has-sub-menu custom-nav-item">
                             <a id="pagesMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                 href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"
                                 aria-labelledby="pagesSubMenu">Digital Solutions</a>

                             <!-- Pages - Submenu -->
                             <ul id="pagesSubMenu" class="hs-sub-menu main-sub-menu" aria-labelledby="pagesMegaMenu"
                                 style="min-width: 260px;">
                                 <li class="nav-item submenu-item">
                                     <a class="nav-link sub-menu-nav-link"
                                         href="https://clients.nexoserver.com/store/ssl-certificates">Buy SSL
                                         Certificates</a>
                                 </li>

                                 <li class="nav-item submenu-item">
                                     <a class="nav-link sub-menu-nav-link"
                                         href="https://clients.nexoserver.com/store/360monitoring">Buy 360 Site
                                         Monitoring</a>
                                 </li>

                                 <li class="nav-item submenu-item">
                                     <a class="nav-link sub-menu-nav-link"
                                         href="https://clients.nexoserver.com/store/nordvpn">Buy Nord VPN</a>
                                 </li>

                                 <li class="nav-item submenu-item">
                                     <a class="nav-link sub-menu-nav-link"
                                         href="https://clients.nexoserver.com/store/xovinow">Buy XOVI NOW</a>
                                 </li>

                                 <li class="nav-item submenu-item">
                                     <a class="nav-link sub-menu-nav-link"
                                         href="https://clients.nexoserver.com/store/professional-email">Buy
                                         Professional Email</a>
                                 </li>

                                 <li class="nav-item submenu-item">
                                     <a class="nav-link sub-menu-nav-link"
                                         href="https://clients.nexoserver.com/store/marketgoo">Buy SEO Tools</a>
                                 </li>

                                 <li class="nav-item submenu-item">
                                     <a class="nav-link sub-menu-nav-link"
                                         href="https://clients.nexoserver.com/store/site-builder">Site Builder</a>
                                 </li>

                                 <li class="nav-item submenu-item">
                                    <a class="nav-link sub-menu-nav-link"
                                        href="https://clients.nexoserver.com/store/sitelock">Buy SiteLock Website Security</a>
                                </li>

                             </ul>
                             <!-- End Pages - Submenu -->
                         </li>
                         <!--pages end-->



                         <!--support start-->
                         <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="360px"
                             data-position="right">
                             <a id="supportMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                 href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Support</a>
                             <!--support submenu start-->
                             <div class="hs-mega-menu main-sub-menu" aria-labelledby="supportMegaMenu"
                                 style="min-width: 330px;">

                                 <!--menu title with subtitle and icon item start-->
                                 <div class="title-with-icon-item">
                                     <a class="title-with-icon-link"
                                         href="https://clients.nexoserver.com/contact.php">
                                         <div class="media align-items-center">
                                             <img class="menu-titile-icon" src="assets/img/chat.svg" alt="SVG">
                                             <div class="media-body">
                                                 <span class="u-header__promo-title">Submit a Request </span>
                                                 <small class="u-header__promo-text">Support team quickly response
                                                 </small>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <!--menu title with subtitle and icon item end-->

                                 <!--menu title with subtitle and icon item start-->
                                 <div class="title-with-icon-item">
                                     <a class="title-with-icon-link" href="{{ url('support') }}">
                                         <div class="media align-items-center">
                                             <img class="menu-titile-icon" src="assets/img/support.svg"
                                                 alt="SVG">
                                             <div class="media-body">
                                                 <span class="u-header__promo-title">24/7/365 Support</span>
                                                 <small class="u-header__promo-text">Support and statement</small>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <!--menu title with subtitle and icon item end-->
                                 <!--menu title with subtitle and icon item start-->
                                 <div class="title-with-icon-item">
                                     <a class="title-with-icon-link" href="{{ url('network') }}">
                                         <div class="media align-items-center">
                                             <img class="menu-titile-icon" src="assets/img/data-services.svg"
                                                 alt="SVG">
                                             <div class="media-body">
                                                 <span class="u-header__promo-title">Our Datacenter</span>
                                                 <small class="u-header__promo-text">24 Data center globally</small>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <!--menu title with subtitle and icon item end-->


                                 <!--submenu footer start-->
                                 <div class="u-header__promo-footer">
                                     <!-- List -->
                                     <div class="row no-gutters">
                                         <div class="col-6">
                                             <div class="u-header__promo-footer-item">
                                                 <small class="text-muted d-block">Check what's new</small>
                                                 <a class="small"
                                                     href="https://clients.nexoserver.com/knowledgebase">
                                                     Changelog
                                                 </a>
                                             </div>
                                         </div>
                                         <div class="col-6 u-header__promo-footer-ver-divider">
                                             <div class="u-header__promo-footer-item">
                                                 <small class="text-muted d-block">Have a question?</small>
                                                 <a class="small" href="https://clients.nexoserver.com/contact.php">
                                                     Contact us
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- End List -->
                                 </div>
                                 <!--submenu footer end-->
                             </div>
                             <!--support submenu end-->
                         </li>
                         <!--support end-->

                         <!--about start-->
                         <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="250px"
                             data-position="right">
                             <a id="aboutMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                 href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">About</a>

                             <!--about submenu start-->
                             <div class="hs-mega-menu main-sub-menu" aria-labelledby="aboutMegaMenu"
                                 style="min-width: 330px;">



                                 <!--menu title with subtitle and icon item start-->
                                 <div class="title-with-icon-item">
                                     <a class="title-with-icon-link" href="{{ url('about-us') }}">
                                         <div class="media align-items-center">
                                             <img class="menu-titile-icon" src="assets/img/community.svg"
                                                 alt="SVG">
                                             <div class="media-body">
                                                 <span class="u-header__promo-title">About Us</span>
                                                 <small class="u-header__promo-text">We are leading hosting company
                                                 </small>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <!--menu title with subtitle and icon item end-->


                                 <!--menu title with subtitle and icon item start-->
                                 <div class="title-with-icon-item">
                                     <a class="title-with-icon-link"
                                         href="https://clients.nexoserver.com/contact.php">
                                         <div class="media align-items-center">
                                             <img class="menu-titile-icon" src="assets/img/chat-mobile.svg"
                                                 alt="SVG">
                                             <div class="media-body">
                                                 <span class="u-header__promo-title">Contact Us</span>
                                                 <small class="u-header__promo-text">Face any problem contact with us
                                                 </small>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <!--menu title with subtitle and icon item end-->


                                 <!--menu title with subtitle and icon item start-->
                                 <div class="title-with-icon-item">
                                     <a class="title-with-icon-link" href="network.html">
                                         <div class="media align-items-center">
                                             <img class="menu-titile-icon" src="assets/img/network.svg"
                                                 alt="SVG">
                                             <div class="media-body">
                                                 <span class="u-header__promo-title">Network</span>
                                                 <small class="u-header__promo-text">Keep your data save and secure
                                                 </small>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <!--menu title with subtitle and icon item end-->




                             </div>
                             <!--about submenu end-->
                         </li>
                         <!--about end-->

                         <!--button start-->
                         <li class="nav-item header-nav-last-item d-flex align-items-center">
                             <a class="btn primary-solid-btn animated-btn"
                                 href="https://clients.nexoserver.com/clientarea.php" target="_blank">
                                 Client Area
                             </a>
                         </li>
                         <!--button end-->
                     </ul>
                 </div>
                 <!--main menu end-->
             </nav>
         </div>
     </div>
     <!--main header menu end-->
 </header>
 <!--header section end-->
