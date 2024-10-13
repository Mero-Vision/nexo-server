<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.layout.header')
</head>

<body>

    @include('front.layout.loader')
    @include('front.layout.nav')

    <div class="main">

        <!--page header section start-->
        <section class="page-header-section ptb-100 gradient-overly-right"
            style="background: url('assets/img/hero-14.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-6">
                        <div class="page-header-content text-white">
                            <h1 class="text-white mb-2">About Us</h1>
                            <p class="lead">Compellingly conceptualize ubiquitous methodologies and progressive total
                                linkage. Credibly reconceptualize enabled models after open-source applications. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--breadcrumb bar start-->
        <div class="breadcrumb-bar py-3 gray-light-bg border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0 pl-0">
                                <li class="list-inline-item breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="list-inline-item breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb bar end-->

        <!--feature section tab style start-->
        <section class="feature-tab-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-3 col-12 order-lg-last align-self-center">
                        <div class="image-box fadein text-xl-right text-center">
                            <img src="assets/img/icon-shared-hosting.svg" alt="wp-hosting" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 col-12 order-xl-first">
                        <h2>We Make Sure Your Website is Fast</h2>
                        <p>Efficiently reintermediate long-term high-impact channels without equity
                            invested technology. Quickly brand backend web-readiness without
                            cross-platform e-services.</p>
                        <div class="row pt-2">
                            <div class="col-md-6 col-12">
                                <h5>Exclusive Features</h5>
                                <ul class="disc-style">
                                    <li>Daily Backups & free backup restore</li>
                                    <li>Security Updates and Patching</li>
                                    <li>Performance and resource monitoring</li>
                                    <li>Step-by-step Tutorials & Knowledgebase</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-12">
                                <h5>WordPress Services</h5>
                                <ul class="disc-style">
                                    <li>1-click WordPress Installation</li>
                                    <li>Free WordPress Transfer</li>
                                    <li>Themes and plugins installation</li>
                                    <li>Malware Scan & Reports</li>
                                </ul>
                            </div>
                        </div>
                        <div class="action-btns mt-4">
                            <a href="#" class="btn primary-solid-btn mr-2">Start Now</a>
                            <a href="#" class="btn outline-btn">Pricing Plans</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature section tab style end-->

        <!--network map section start-->
        <section class="network-map-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Our Data centers Location</h2>
                            <p class="lead">Cloudhub offers a low latency worldwide network, enabling you to deploy
                                your
                                service infrastructure in close proximity to your customer base.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="network-map-wrap">
                            <ul class="custom-map-location">
                                <li style="top: 29%; left: 15.5%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Canada"></span>
                                </li>
                                <li style="top: 42%; left: 20%;">
                                    <span data-toggle="tooltip" data-placement="top" title="United States"></span>
                                </li>
                                <li style="top: 70%; left: 32%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Brazil"></span>
                                </li>
                                <li style="top: 57%; left: 48%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Nigeria"></span>
                                </li>
                                <li style="top: 18%; left: 53%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Finland"></span>
                                </li>
                                <li style="top: 34%; left: 55%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Ukraine"></span>
                                </li>
                                <li style="top: 45%; left: 68%;">
                                    <span data-toggle="tooltip" data-placement="top" title="India"></span>
                                </li>
                                <li style="top: 35%; left: 80%;">
                                    <span data-toggle="tooltip" data-placement="top" title="China"></span>
                                </li>
                                <li style="top: 77%; left: 85%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Australia"></span>
                                </li>
                            </ul>
                            <img src="assets/img/map-dark.svg" alt="location map">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--network map section end-->

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

        <!--meet our team section start-->
        <section class="our-team-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8">
                        <div class="section-heading text-center mb-3">
                            <h2>Our Expert Team</h2>
                            <p class="lead">Grow go forward manufactured products and optimal networks.
                                Enthusiastically
                                disseminate user-centric outsourcing through revolutionary</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="staff-member mt-md-4 mt-lg-4">
                            <div class="card text-center border-0 shadow-sm">
                                <img src="assets/img/hancie.jpg" alt="team image" class="card-img-top"
                                    style="height: 450px">
                                <div class="card-body">
                                    <h5 class="teacher mb-0">Hancie Phago</h5>
                                    <span>Founder and Chief Executive Officer (CEO)</span>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="staff-member mt-md-4 mt-lg-4">
                            <div class="card text-center border-0 shadow-sm">
                                <img src="assets/img/biru.jpg" alt="team image" class="card-img-top"
                                    style="height: 450px">
                                <div class="card-body">
                                    <h5 class="h5 teacher mb-0">Biru Khadka</h5>
                                    <span>Co-Founder and Chief Financial Officer (CFO)</span>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="staff-member mt-md-4 mt-lg-4">
                            <div class="card text-center border-0 shadow-sm">
                                <img src="assets/img/nitesh.JPG" alt="team image" class="card-img-top"
                                    style="height: 450px">
                                <div class="card-body">
                                    <h5 class="h5 teacher mb-0">Nitesh Hamal</h5>
                                    <span>Co-Founder and Chief Technical Officer (CTO)</span>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--meet our team section end-->

        <!--testimonial and review section start-->
        <section class="client-review-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>What Our Customers Say About Us?</h2>
                            <p class="lead">Authoritatively reinvent client-centric e-markets via fully tested
                                process. Objectively restore strategic initiatives through fully researched.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Awesome support from technical</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models.
                                    Progressively maximize 2.0 relationships whereas process-centric.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Alex Khamer</h6>
                                <small class="text-right">6 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Awesome Design Quality with Support</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models maximize
                                    2.0 relationships whereas methodologies.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Peter Anderson</h6>
                                <small class="text-right">3 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Contacted support after Midnight</h5>
                                <p>Objectively envisioneer magnetic manufactured products and dynamic models.
                                    Progressively maximize 2.0 relationships whereas process-centric.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Jolio Darix</h6>
                                <small class="text-right">8 days ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial and review section end-->

    </div>

    @include('front.layout.footer')
</body>

</html>
