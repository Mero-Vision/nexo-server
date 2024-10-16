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
        <section class="hero-equal-height ptb-100 gradient-overlay gradient-bg"
            style="background: url('assets/img/hero-bg-2.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-12">
                        <div class="hero-content-wrap text-white">
                            <h1 class="text-white">Fast and Reliable Web Hosting Solutions with Nexo Server</h1>
                            <p class="lead">Empower Your Online Presence with Affordable Domain and Hosting Services.
                            </p>
                            <form action="https://clients.nexoserver.com/cart.php" class="domain-search-form mt-3">
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
                                    <li class="list-inline-item"><a href="#"><img src="assets/img/com-w.png"
                                                alt="com" width="75" class="img-fluid" />
                                            <span>$8.99</span></a></li>
                                    <li class="list-inline-item"><a href="#"><img src="assets/img/net-w.png"
                                                alt="com" width="75" class="img-fluid" />
                                            <span>$4.99</span></a></li>
                                    <li class="list-inline-item"><a href="#"><img src="assets/img/org-w.png"
                                                alt="com" width="75" class="img-fluid" />
                                            <span>$2.99</span></a></li>
                                    <li class="list-inline-item"><a href="#"><img src="assets/img/store-w.png"
                                                alt="com" width="75" class="img-fluid" />
                                            <span>$0.99</span></a></li>
                                    <li class="list-inline-item"><a href="#"><img src="assets/img/online-w.png"
                                                alt="com" width="75" class="img-fluid" />
                                            <span>$0.99</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="animation-image-wrap">
                            <img src="{{ url('assets/img/servers.svg') }}" alt="wp hosting" class="img-fluid" />
                            <img src="{{ url('assets/img/animated-icon-1.png') }}" alt="wp hosting"
                                class="animation-icon-img animation-icon-1" />
                            <img src="{{ url('assets/img/animated-icon-2.png') }}" alt="wp hosting"
                                class="animation-icon-img animation-icon-2" />
                            <img src="{{ url('assets/img/animated-icon-3.png') }}" alt="wp hosting"
                                class="animation-icon-img animation-icon-3" />
                            <img src="{{ url('assets/img/animated-icon-4.png') }}" alt="wp hosting"
                                class="animation-icon-img animation-icon-4" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--hero section end-->

        <!--promo-section section start-->
        <section class="promo-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-md-0 mb-lg-5">
                            <h2>Nexo Server Helps You Succeed</h2>
                            <p class="lead">Grow your website faster by using Nexo Server as your foundation.
                                Dynamically
                                streamline principle-centered technologies.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <a href="#">
                            <div
                                class="single-promo-2 single-promo-hover rounded-custom text-center white-bg p-5 h-100">
                                <div class="circle-icon">
                                    <span class="fas fa-bezier-curve text-white"></span>
                                </div>
                                <h5>Super Easy to Use</h5>
                                <p>Increase sales by showing true dynamics of your website.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <a href="#">
                            <div
                                class="single-promo-2 single-promo-hover rounded-custom text-center white-bg p-5 h-100">
                                <div class="circle-icon">
                                    <span class="fas fa-sync-alt text-white"></span>
                                </div>
                                <h5>Fast & Reliable</h5>
                                <p>Build your online store’s trust using Social Proof &amp; Urgency.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <a href="#">
                            <div
                                class="single-promo-2 single-promo-hover rounded-custom text-center white-bg p-5 h-100">
                                <div class="circle-icon">
                                    <span class="fas fa-headset text-white"></span>
                                </div>
                                <h5>24/7 Expert Support</h5>
                                <p>Realize importance of social proof in customer’s purchase decision.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--promo-section section end-->

        <!--services section start-->
        <section class="our-services ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5 mb-sm-5 mb-md-3 mb-lg-3">
                            <h2>We Have a Hosting Solution For You</h2>
                            <p class="lead">Synergistically architect plug-and-play without next-generation
                                manufactured products. Assertively develop synergistic networks.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-shared-hosting.svg" alt="shared hosting" class="img-fluid mb-4"
                                width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">Shared Hosting</h3>
                                <p>Our most popular product! Shared Web Hosting gives you a fast SSD
                                    storage hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$2.59/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span
                                        class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-wordpress-hosting.svg" alt="shared hosting"
                                class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">WordPress Hosting</h3>
                                <p>Get up and running fast with Optimized performance easy
                                    maintenance hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$2.59/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span
                                        class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-vps-hosting.svg" alt="shared hosting" class="img-fluid mb-4"
                                width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">VPS Hosting</h3>
                                <p>Virtual Private Servers with ultra-fast SSDs and flexibility, Ubuntu, IPv6,
                                    Nginx and more.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$12.00/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span
                                        class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-website-builder.svg" alt="shared hosting"
                                class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">WP Website Builder</h3>
                                <p>No code required! Build your site confidently with design tools that WordPress
                                    website build.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$2.59/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span
                                        class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-dadicate-hosting.svg" alt="shared hosting"
                                class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">Dedicated Hosting</h3>
                                <p>Fast web servers to run your applications with root and a 100% Guarantee
                                    our hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$145.59/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span
                                        class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-cloud-hosting.svg" alt="shared hosting" class="img-fluid mb-4"
                                width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">Cloud Hosting</h3>
                                <p>Lightning-fast servers with root access, SSD storage and blazing-fast networking
                                    hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>$0.0059/mo</strong></p>
                                <a href="#" class="btn-link">View Details <span
                                        class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <!--services section end-->

        <!--call to action section start-->
        <section class="call-to-action ptb-100 gradient-overlay"
            style="background: url('assets/img/hero-bg-4.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="call-to-action-content text-white text-center">
                            <h2 class="text-white">Need Some Help?</h2>
                            <p class="lead mb-0">Whether you’re stuck or just want some tips on where to start, hit up
                                our
                                experts anytime.</p>
                            <p>Sales Chat: <strong> MON-FRI 8AM-4PM PT</strong> | Customer Support Chat: Every Day
                                <strong>
                                    5:30AM–9:30PM PT</strong>
                            </p>
                            <div class="action-btns">
                                <a href="#" class="btn solid-white-btn mr-3">Chat With Us</a>
                                <a href="#" class="btn outline-white-btn">Send us an Email</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--call to action section end-->

        @include('front.components.switch_pricing')

        <!--feature section start-->
        <section class="feature-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Hosting Features For Your Big Ideas</h2>
                            <p class="lead">These features come standard in all of our hosting plans. Dynamically
                                extend
                                imperatives through open-source quickly niche markets.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-panel icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Custom Control Panel</h5>
                                <p>Our intuitive control panel gives you admin access to all of your DreamHost products.
                                    Easily update domain information, add users, adjust email settings gain access.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-thumb-up icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Real-Life Human Beings</h5>
                                <p>Tech veterans, geeks, and nerds are all standing by to optimize your experience.
                                    Whether
                                    you get in touch with our support, read our knowledge base, or start a thread.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-mouse-alt icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>1-Click Installer</h5>
                                <p>No need to dig into a bunch of documentation. Simply install web apps like WordPress,
                                    Joomla! and more. Monotonectally administrate economically sound opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-timer icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>100% Uptime Guarantee</h5>
                                <p>With multiple datacenter locations, redundant cooling, emergency generators, and
                                    constant
                                    monitoring, we are able to offer our 100% Uptime Guarantee.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-harddrives icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Solid State Drives (SSD)</h5>
                                <p>With SSDs, your website, caching, and database queries are faster by our
                                    calculations.
                                    Quickly orchestrate worldwide niche markets vis-a-vis end-to-end infomediaries. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-cup icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Award-Winning Support</h5>
                                <p>No question is too simple, or too complex for our team of experts. Synergistically
                                    synergize Our in-house support staff and service team are here for you 24/7, 365.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--feature section end-->

        <!--call to action section start-->
        <section class="call-to-action ptb-100 gradient-overlay"
            style="background: url('assets/img/hero-bg-4.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 col-lg-8">
                        <div class="call-to-action-content text-white">
                            <h2 class="text-white">Need Some Help?</h2>
                            <p>Whether you’re stuck or just want some tips on where to start, hit up our experts
                                anytime.
                                <br> Sales Chat: <strong> MON-FRI 8AM-4PM PT</strong> | Customer Support Chat: Every Day
                                <strong> 5:30AM–9:30PM PT</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="action-btns mt-md-4 text-md-right text-lg-right text-sm-left">
                            <a href="#" class="btn solid-white-btn mr-3">Chat With Us</a>
                            <a href="#" class="btn outline-white-btn">Send us an Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--call to action section end-->

        <!--faq section start-->
        <div id="faq" class="ptb-100 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading mb-5">
                            <h2>Frequently Asked Queries</h2>
                            <p>Discover the answers to common inquiries about our hosting and domain services. Our goal
                                is to provide you with transparent information, helping you make informed decisions for
                                your online presence.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div id="accordion-one" class="accordion accordion-faq">
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                    <h6 class="mb-0 d-inline-block">What types of hosting services does Nexo Server
                                        offer?
                                    </h6>
                                </a>
                                <div id="collapseOne" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Nexo Server provides a variety of hosting services, including shared hosting,
                                            VPS (Virtual Private Server) hosting, dedicated server hosting, and cloud
                                            hosting solutions. Each plan is designed to cater to different needs,
                                            whether you're a small business, an online store, or a large enterprise.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseTwo">
                                    <h6 class="mb-0 d-inline-block">How do I register a domain with Nexo Server?</h6>
                                </a>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>To register a domain with Nexo Server, simply visit our website, use the
                                            domain search tool to check availability, and follow the prompts to complete
                                            your registration. You can choose from various domain extensions and enjoy
                                            competitive pricing with additional services like WHOIS privacy protection.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseThree">
                                    <h6 class="mb-0 d-inline-block">Is there a money-back guarantee with Nexo Server
                                        hosting plans?
                                    </h6>
                                </a>
                                <div id="collapseThree" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Yes, Nexo Server offers a 30-day money-back guarantee on all our hosting
                                            plans. If you're not satisfied with our services within the first 30 days,
                                            you can request a full refund, no questions asked.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseFour">
                                    <h6 class="mb-0 d-inline-block">Do I need technical skills to use Nexo Server's
                                        hosting services?
                                    </h6>
                                </a>
                                <div id="collapseFour" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Not at all! Nexo Server provides user-friendly control panels and one-click
                                            installations for popular applications, making it easy for anyone to manage
                                            their hosting account. Additionally, our dedicated support team is available
                                            24/7 to assist you with any questions or technical issues.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseFour">
                                    <h6 class="mb-0 d-inline-block">Can I upgrade my hosting plan later?
                                    </h6>
                                </a>
                                <div id="collapseFour" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p>Yes, you can easily upgrade your hosting plan at any time. Nexo Server offers
                                            scalable solutions, allowing you to switch to a higher-tier plan as your
                                            business grows or your hosting needs change. Simply contact our support
                                            team, and they will assist you with the upgrade process.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--faq section end-->

        @include('front.components.testimonials')


    </div>

    @include('front.layout.footer')
</body>

</html>
