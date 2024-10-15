<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.layout.header')
</head>

<body>

    @include('front.layout.loader')
    @include('front.layout.nav')

    <div class="main">

        <!--hero section start-->
        <section class="hero-equal-height ptb-100"
            style="background: url('assets/img/offer-bg-3.png')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-8">
                        <div class="hero-content-wrap text-white text-center position-relative z-index">
                            <h1 class="text-white">Use Domain Checker to Find Unique Domains!</h1>
                            <p class="lead">Up to 50% Off domain and hosting, Starting from $2.99/month, free SSL
                                certificate, 24/7/365 support, money back guarantee.</p>
                            <div class="domain-search-wrap">
                                <form action="https://clients.nexoserver.com/cart.php"
                                    class="domain-search-form w-75 d-block mx-auto">
                                    <div class="input-group">
                                        <input type="text" name="query" id="domain" class="form-control"
                                            placeholder="example.com" />
                                        <input type="hidden" name="a" class="form-control" value="add" />
                                        <input type="hidden" name="domain" class="form-control" value="register" />
                                        <div class="input-group-append">
                                            <button class="btn search-btn btn-hover d-flex align-items-center"
                                                type="submit">
                                                <span class="ti-search mr-2"></span> Search
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <div class="domain-list-wrap mt-4">
                                    <ul class="list-inline domain-search-list text-white">
                                        <li class="list-inline-item"><a href="#"><img src="assets/img/com-w.png" alt="com" width="70" class="img-fluid"> <span>$8.99</span></a></li>
                                        <li class="list-inline-item"><a href="#"><img src="assets/img/net-w.png" alt="com" width="70" class="img-fluid"> <span>$4.99</span></a></li>
                                        <li class="list-inline-item"><a href="#"><img src="assets/img/org-w.png" alt="com" width="70" class="img-fluid"> <span>$2.99</span></a></li>
                                        <li class="list-inline-item"><a href="#"><img src="assets/img/store-w.png" alt="com" width="70" class="img-fluid"> <span>$0.99</span></a></li>
                                        <li class="list-inline-item"><a href="#"><img src="assets/img/online-w.png" alt="com" width="70" class="img-fluid"> <span>$0.99</span></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--domain name block start-->
        <div class="domain-name-block pt-100 mt--165">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <ul class="list-inline domain-list">
                            <li class="list-inline-item white-bg custom-shadow">
                                <a href="#">
                                    <div class="single-domain">
                                        <img src="assets/img/com.png" alt="domain" class="img-fluid" />
                                        <div class="domain-price">
                                            <h6 class="sell-price">$2.56 <span
                                                    class="badge badge-danger text-uppercase">Sell</span></h6>
                                            <span class="old-price">$29.95</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item white-bg custom-shadow">
                                <a href="#">
                                    <div class="single-domain">
                                        <img src="assets/img/net.png" alt="domain" class="img-fluid" />
                                        <div class="domain-price">
                                            <h6 class="sell-price">$5.56 <span
                                                    class="badge badge-danger text-uppercase">Sell</span></h6>
                                            <span class="old-price">$49.99</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item white-bg custom-shadow">
                                <a href="#">
                                    <div class="single-domain">
                                        <img src="assets/img/club.png" alt="domain" class="img-fluid" />
                                        <div class="domain-price">
                                            <h6 class="sell-price">$1.56 <span
                                                    class="badge badge-danger text-uppercase">Sell</span></h6>
                                            <span class="old-price">$19.00</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item white-bg custom-shadow">
                                <a href="#">
                                    <div class="single-domain">
                                        <img src="assets/img/org.png" alt="domain" class="img-fluid" />
                                        <div class="domain-price">
                                            <h6 class="sell-price">$6.99 <span
                                                    class="badge badge-danger text-uppercase">Sell</span></h6>
                                            <span class="old-price">$59.95</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item white-bg custom-shadow">
                                <a href="#">
                                    <div class="single-domain">
                                        <img src="assets/img/store.png" alt="domain" class="img-fluid" />
                                        <div class="domain-price">
                                            <h6 class="sell-price">$0.99 <span
                                                    class="badge badge-danger text-uppercase">Sell</span></h6>
                                            <span class="old-price">$4.99</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item white-bg custom-shadow">
                                <a href="#">
                                    <div class="single-domain">
                                        <img src="assets/img/online.png" alt="domain" class="img-fluid" />
                                        <div class="domain-price">
                                            <h6 class="sell-price">$2.56 <span
                                                    class="badge badge-danger text-uppercase">Sell</span></h6>
                                            <span class="old-price">$29.95</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--domain name block end-->

        <!--feature section start-->
        <section class="feature-section ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="cta-new-wrap">
                            <h2>Create Your Own Professional Website</h2>
                            <p class="lead">Globally parallel task granular alignments through excellent intellectual
                                capital. Globally deploy vertical leadership.</p>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span>Flexible,
                                    Easy to Use Control Panel</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>Unmetered</strong>
                                    Bandwidth</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>Unmetered</strong>
                                    Sub Domains, FTP Accounts</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>99%</strong>
                                    Uptime Guarantee</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>45-Day</strong>
                                    Money-Back Guarantee</li>
                            </ul>
                            <div class="action-btns mt-4">
                                <a href="#download" class="btn primary-solid-btn animated-btn mr-lg-3">Get
                                    Started Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="cta-new-wrap">
                            <img src="assets/img/data-center.svg" alt="hosting" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature section end-->

        <!--popular domain block start-->
        <section class="popular-domain-list ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-2">
                            <h2>Popular Top Level Domains Fit For You</h2>
                            <p class="lead">Assertively benchmark bricks-and-clicks opportunities and process-centric
                                supply
                                chains. Credibly deliver extensible growth strategies.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div
                            class="single-popular-domain position-relative white-bg rounded shadow-sm p-5 mt-sm-4 mt-md-5 mt-lg-4">
                            <img src="assets/img/com.png" alt="domain" class="img-fluid" />
                            <div class="domain-info-wrap">
                                <span class="position-absolute badge color-1 color-1-bg">Most Popular</span>
                                <p>Holisticly parallel task team building results bleeding-edge.</p>
                                <ul class="list-inline domain-price-list">
                                    <li class="list-inline-item domain-old-price">
                                        <del>$10.99</del>
                                    </li>
                                    <li class="list-inline-item domain-new-price">$8.99</li>
                                </ul>
                            </div>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn primary-solid-btn mr-2">Register</a>
                                <a href="#" class="btn outline-btn">Transfer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div
                            class="single-popular-domain position-relative white-bg rounded shadow-sm p-5 mt-sm-4 mt-md-5 mt-lg-4">
                            <img src="assets/img/online.png" alt="domain" class="img-fluid" />
                            <div class="domain-info-wrap">
                                <p>Uniquely synergize cost effective it is technologies performance.</p>
                                <ul class="list-inline domain-price-list">
                                    <li class="list-inline-item domain-old-price">
                                        <del>$12.99</del>
                                    </li>
                                    <li class="list-inline-item domain-new-price">$0.99</li>
                                </ul>
                            </div>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn primary-solid-btn mr-2">Register</a>
                                <a href="#" class="btn outline-btn">Transfer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div
                            class="single-popular-domain position-relative white-bg rounded shadow-sm p-5 mt-sm-4 mt-md-5 mt-lg-4">
                            <img src="assets/img/club.png" alt="domain" class="img-fluid" />
                            <div class="domain-info-wrap">
                                <p>Competently fabricate leveraged methods of empowerment.</p>
                                <ul class="list-inline domain-price-list">
                                    <li class="list-inline-item domain-old-price">
                                        <del>$16.99</del>
                                    </li>
                                    <li class="list-inline-item domain-new-price">$6.99</li>
                                </ul>
                            </div>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn primary-solid-btn mr-2">Register</a>
                                <a href="#" class="btn outline-btn">Transfer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div
                            class="single-popular-domain position-relative white-bg rounded shadow-sm p-5 mt-sm-4 mt-md-5 mt-lg-4">
                            <img src="assets/img/net.png" alt="domain" class="img-fluid" />
                            <div class="domain-info-wrap">
                                <p>Dynamically network front results for methods empowerment. </p>
                                <ul class="list-inline domain-price-list">
                                    <li class="list-inline-item domain-old-price">
                                        <del>$15.99</del>
                                    </li>
                                    <li class="list-inline-item domain-new-price">$4.99</li>
                                </ul>
                            </div>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn primary-solid-btn mr-2">Register</a>
                                <a href="#" class="btn outline-btn">Transfer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div
                            class="single-popular-domain position-relative white-bg rounded shadow-sm p-5 mt-sm-4 mt-md-5 mt-lg-4">
                            <img src="assets/img/pro.png" alt="domain" class="img-fluid" />
                            <div class="domain-info-wrap">
                                <p>Synergistically create visionary for our multifunctional schemas. </p>
                                <ul class="list-inline domain-price-list">
                                    <li class="list-inline-item domain-old-price">
                                        <del>$10.99</del>
                                    </li>
                                    <li class="list-inline-item domain-new-price">$0.99</li>
                                </ul>
                            </div>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn primary-solid-btn mr-2">Register</a>
                                <a href="#" class="btn outline-btn">Transfer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div
                            class="single-popular-domain position-relative white-bg rounded shadow-sm p-5 mt-sm-4 mt-md-5 mt-lg-4">
                            <img src="assets/img/org.png" alt="domain" class="img-fluid" />
                            <div class="domain-info-wrap">
                                <p>Quickly promote B2B markets rather than impactful results.</p>
                                <ul class="list-inline domain-price-list">
                                    <li class="list-inline-item domain-old-price">
                                        <del>$10.99</del>
                                    </li>
                                    <li class="list-inline-item domain-new-price">$8.99</li>
                                </ul>
                            </div>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn primary-solid-btn mr-2">Register</a>
                                <a href="#" class="btn outline-btn">Transfer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--popular domain block end-->

        <!--feature section start-->
        <section class="feature-section ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Best Hosting Features For You</h2>
                            <p class="lead">These features come standard in all of our hosting plans. Dynamically
                                extend
                                imperatives through open-source quickly niche markets.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature-content-wrap">
                            <ul class="nav nav-tabs feature-tab feature-new-tab justify-content-center mb-3 border-bottom-0"
                                data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-1"
                                        data-toggle="tab">
                                        <h6 class="mb-0">Features</h6>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" href="#feature-tab-2"
                                        data-toggle="tab">
                                        <h6 class="mb-0">Technical Features</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content feature-tab-content">
                                <div class="tab-pane" id="feature-tab-1">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="features-box mt-md-5 mt-lg-5">
                                                <div class="features-box-icon">
                                                    <span class="ti-panel icon-sm color-primary"></span>
                                                </div>
                                                <div class="features-box-content">
                                                    <h5>Custom Control Panel</h5>
                                                    <p>Our intuitive control panel gives you admin access to all of your
                                                        DreamHost products
                                                        easily.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="features-box mt-md-5 mt-lg-5">
                                                <div class="features-box-icon">
                                                    <span class="ti-thumb-up icon-sm color-primary"></span>
                                                </div>
                                                <div class="features-box-content">
                                                    <h5>Real-Life Human Beings</h5>
                                                    <p>Tech veterans, geeks, and nerds are all standing by to optimize
                                                        your experience whether.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="features-box mt-md-5 mt-lg-5">
                                                <div class="features-box-icon">
                                                    <span class="ti-mouse-alt icon-sm color-primary"></span>
                                                </div>
                                                <div class="features-box-content">
                                                    <h5>1-Click Installer</h5>
                                                    <p>No need to dig into a bunch of documentation. Simply install web
                                                        apps like WordPress,
                                                        Joomla!.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="features-box mt-md-5 mt-lg-5">
                                                <div class="features-box-icon">
                                                    <span class="ti-timer icon-sm color-primary"></span>
                                                </div>
                                                <div class="features-box-content">
                                                    <h5>100% Uptime Guarantee</h5>
                                                    <p>With multiple datacenter locations, redundant cooling, emergency
                                                        generators and
                                                        monitoring.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="features-box mt-md-5 mt-lg-5">
                                                <div class="features-box-icon">
                                                    <span class="ti-harddrives icon-sm color-primary"></span>
                                                </div>
                                                <div class="features-box-content">
                                                    <h5>Solid State Drives (SSD)</h5>
                                                    <p>With SSDs, your website, caching, and database queries are faster
                                                        by our calculations. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="features-box mt-md-5 mt-lg-5">
                                                <div class="features-box-icon">
                                                    <span class="ti-cup icon-sm color-primary"></span>
                                                </div>
                                                <div class="features-box-content">
                                                    <h5>Award-Winning Support</h5>
                                                    <p>No question is too simple, or too complex for our team of
                                                        experts. Synergistically
                                                        synergize.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="feature-tab-2">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4 col-12">
                                            <div class="technical-specifications-wrap mt-md-5 mt-lg-5">
                                                <span class="ti-harddrives icon-md color-primary d-block mb-3"></span>
                                                <h5>Web Hosting Features</h5>
                                                <ul class="list-unstyled tech-feature-list">
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span>Flexible,
                                                        Easy to Use Control Panel</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>Unmetered</strong>
                                                        Bandwidth</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>Unmetered</strong>
                                                        Sub Domains, FTP Accounts</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>99%</strong>
                                                        Uptime Guarantee</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>45-Day</strong>
                                                        Money-Back Guarantee</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-12">
                                            <div class="technical-specifications-wrap mt-md-5 mt-lg-5">
                                                <span class="ti-panel icon-md color-primary d-block mb-3"></span>
                                                <h5>cPanel Control Panel</h5>
                                                <ul class="list-unstyled tech-feature-list">
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>Latest</strong>
                                                        cPanel Web Hosting Control Panel</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span>Webalizer,
                                                        Raw Log Manager with Error Logs</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span>Instant
                                                        Shopping Carts, Blogs, Portals</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>Password</strong>
                                                        Protected Directories Error Pages</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span>Web
                                                        Based File Manager, Hotlink Protection</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-12">
                                            <div class="technical-specifications-wrap mt-md-5 mt-lg-5">
                                                <span class="ti-server icon-md color-primary d-block mb-3"></span>
                                                <h5>Programming & Databases</h5>
                                                <ul class="list-unstyled tech-feature-list">
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>MySQL</strong>
                                                        Databases with phpMyAdmin Access</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span>Fast
                                                        CGI, PHP 7, Ruby on Rails, Python</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>ImageMagick</strong>
                                                        Curl, CPAN, GD Library</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>SSH</strong>
                                                        Access and Cron Job Scheduling</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span>SSL
                                                        Certification</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-12">
                                            <div class="technical-specifications-wrap mt-md-5 mt-lg-5">
                                                <span class="ti-email icon-md color-primary d-block mb-3"></span>
                                                <h5>Email Features</h5>
                                                <ul class="list-unstyled tech-feature-list">
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>Unlimited</strong>
                                                        POP3 Email Accounts with SMTP</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span>WebMail
                                                        Access: Horde, RoundCube</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span>Receive
                                                        your email to your phone via IMAP</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span>Prevent
                                                        spam with SpamAssassin</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>Unlimited</strong>
                                                        Email Aliases, Autoresponders</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-12">
                                            <div class="technical-specifications-wrap mt-md-5 mt-lg-5">
                                                <span
                                                    class="ti-headphone-alt icon-md color-primary d-block mb-3"></span>
                                                <h5>Award-Winning Support</h5>
                                                <ul class="list-unstyled tech-feature-list">
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>24/7/365</strong>
                                                        Premium Support with Live Chat</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>Automatic</strong>
                                                        Weekly Off-Site Data Backups</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>24/7/365</strong>
                                                        Hosting Server Monitoring</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span>Online
                                                        Support Portal</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>500+</strong>Video
                                                        Tutorials and <strong>680+</strong> Help Articles</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-12">
                                            <div class="technical-specifications-wrap mt-md-5 mt-lg-5">
                                                <span
                                                    class="ti-direction-alt icon-md color-primary d-block mb-3"></span>
                                                <h5>Application Hosting Plan</h5>
                                                <ul class="list-unstyled tech-feature-list">
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>Free</strong>
                                                        Website Transfer, Domain Transfer</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>52
                                                            Free</strong> scripts can be instantly installed</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>$100</strong>
                                                        Google Adwords Offer (Details)</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>$100</strong>
                                                        Bing Ads Credit (Details)</li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-primary"></span><strong>Free</strong>
                                                        SSL Certification website securely</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature section end-->

        <!--call to action section start-->
        <section class="call-to-action ptb-100 gradient-overly-bottom"
            style="background: url('assets/img/hero-bg-4.jpg')no-repeat center center / cover fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="call-to-action-content text-white text-center">
                            <h2 class="text-white">Already have a domain that you love?</h2>
                            <p>No problem! It's quick and painless to transfer your hosting, domain registrations, or
                                both
                                to HostLar maximize market positioning solutions and enterprise services.</p>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn solid-white-btn mr-3">Existing Customers</a>
                                <a href="#" class="btn outline-white-btn">New Customers</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action section end-->

        <!--start and transfer section start-->
        <section class="start-transfer ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Easy to Start and Hassle free Transfer</h2>
                            <p class="lead">Get Immediate Activation or Express Transfer service free of charge.
                                Enthusiastically enhance testing procedures and cross.</p>
                        </div>
                    </div>
                </div>
                <div class="row start-website-box">
                    <div class="col-lg-6 col-12 pr-lg-0">
                        <div class="left-box white-bg">
                            <div class="d-flex align-items-center mb-4">
                                <span class="ti-vector icon-sm text-white primary-bg p-2 rounded mr-3"></span>
                                <h5 class="mb-0">Start a New Website <span class="badge color-1 color-1-bg">Easy to
                                        start</span></h5>
                            </div>
                            <ul>
                                <li>
                                    <strong>One-click App Marketplace</strong>
                                    <p>Over 450 Apps ready to be installed in seconds</p>
                                </li>
                                <li>
                                    <strong>The best DIY solution</strong>
                                    <p>20+ Frameworks and your favorite dev tools</p>
                                </li>
                                <li>
                                    <strong>Step by Step Tutorials</strong>
                                    <p>3000+ pages of tutorials to get you started</p>
                                </li>
                                <li>
                                    <strong>Unlimited 24/7 Priority Support</strong>
                                    <p>Always-free in-house technical support</p>
                                </li>
                            </ul>
                            <div class="btn-holder mt-4">
                                <a class="btn primary-solid-btn" href="#">Start now</a>
                            </div>
                            <p class="mt-3">
                                <small>Sign up today before <span class="text-blue" data-role="site-activation-timer"
                                        data-type="new">04:00 PM</span> and get Immediate Account
                                    Activation and Free Website Setup!
                                </small>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 pl-lg-0">
                        <div class="right-box primary-bg">
                            <div class="d-flex align-items-center mb-4">
                                <span class="ti-loop icon-sm color-primary white-bg p-2 rounded mr-3"></span>
                                <h5 class="mb-0 text-white">Express Transfer</h5>
                            </div>
                            <ul>
                                <li>
                                    <strong>People-powered site transfer</strong>
                                    <p>No messy automation - get it done by experts</p>
                                </li>
                                <li>
                                    <strong>No downtime, Fast and Painless</strong>
                                    <p>Express Transfer service included in all plans</p>
                                </li>
                                <li>
                                    <strong>Free Domain Transfer</strong>
                                    <p>Free one-year domain renewal after transfer</p>
                                </li>
                                <li>
                                    <strong>Free months of hosting</strong>
                                    <p>Up to six months unused time compensation</p>
                                </li>
                            </ul>
                            <div class="btn-holder mt-4">
                                <a class="btn solid-white-btn" href="#">Transfer Now</a>
                            </div>
                            <p class="mt-3">
                                <small>Sign up now and get your website transferred by <span class="text-yellow"
                                        data-role="site-activation-timer" data-type="transfer">04:57 PM</span>
                                    today with free Express Transfer!
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--start and transfer section end-->

        <!--compare provider table start-->
        <section class="compare-provider-table ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>HostLar head to head comparison</h2>
                            <p class="lead">
                                Globally incubate next-generation e-services via state of the art technology.
                                Appropriately
                                iterate quality.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="table-responsive">
                            <table
                                class="table w-100 table-hover table-bordered table-striped comparision-table text-center">
                                <thead class="comparision-table-head">
                                    <tr>
                                        <td class="td-blank"></td>
                                        <th class="primary-bg text-white provider-logo">
                                            <img alt="hostlar-logo" src="assets/img/logo-white.png"
                                                class="img-fluid" />
                                        </th>
                                        <th class="provider-logo">
                                            <img alt="hostlar-logo" src="assets/img/clients-logo-01.png"
                                                class="img-fluid" />
                                        </th>
                                        <th class="provider-logo">
                                            <img alt="hostlar-logo" src="assets/img/clients-logo-02.png"
                                                class="img-fluid" />
                                        </th>
                                        <th class="provider-logo">
                                            <img alt="hostlar-logo" src="assets/img/clients-logo-03.png"
                                                class="img-fluid" />
                                        </th>
                                        <th class="provider-logo">
                                            <img alt="hostlar-logo" src="assets/img/clients-logo-04.png"
                                                class="img-fluid" />
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="comparision-table-body">
                                    <tr>
                                        <td>
                                            <p class="text-left">Starting From</p>
                                        </td>
                                        <td class="primary-bg text-white">
                                            <strong>$2.95</strong>
                                            <small>/month</small>
                                        </td>
                                        <td>
                                            <strong>$5.99</strong>
                                            <small>/month</small>
                                        </td>
                                        <td>
                                            <strong>$6.99</strong>
                                            <small>/month</small>
                                        </td>
                                        <td>
                                            <strong>$9.99</strong>
                                            <small>/month</small>
                                        </td>
                                        <td>
                                            <strong>$7.99</strong>
                                            <small>/month</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-left">SSD Only servers</p>
                                        </td>
                                        <td class="primary-bg text-white">
                                            <span class="ti-check"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-check"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-left">RocketBooster</p>
                                        </td>
                                        <td class="primary-bg text-white">
                                            <span class="ti-check"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-left">Let's Encrypt</p>
                                        </td>
                                        <td class="primary-bg text-white">
                                            <span class="ti-check"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-left"> Cloudflare CDN Caching</p>
                                        </td>
                                        <td class="primary-bg text-white">
                                            <span class="ti-check"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-left">SpamExperts</p>
                                        </td>
                                        <td class="primary-bg text-white">
                                            <span class="ti-check"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-left">Web Application Firewall</p>
                                        </td>
                                        <td class="primary-bg text-white">
                                            <span class="ti-check"></span>
                                        </td>
                                        <td> Paid</td>
                                        <td> Paid</td>
                                        <td> Paid</td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-left">RocketBooster</p>
                                        </td>
                                        <td class="primary-bg text-white">
                                            <span class="ti-check"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-left">Free Daily Backups</p>
                                        </td>
                                        <td class="primary-bg text-white">
                                            <span class="ti-check"></span>
                                        </td>
                                        <td class="">
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td> Paid</td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-left">Instant chat response</p>
                                        </td>
                                        <td class="primary-bg text-white">
                                            <span class="ti-check"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                        <td>
                                            <span class="ti-close text-danger"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-left">Multiple server location</p>
                                        </td>
                                        <td class="primary-bg text-white">
                                            <strong>10</strong>
                                        </td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--compare provider table end-->

        <!--testimonial and review section start-->
        {{-- @include('front.components.testimonials') --}}
        <!--testimonial and review section end-->

    </div>

    @include('front.layout.footer')
</body>

</html>
