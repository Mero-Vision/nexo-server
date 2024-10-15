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
        <section class="hero-equal-height ptb-100 gradient-overly-right"
            style="background: url('assets/img/hero-5.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7 col-lg-6">
                        <div class="hero-content-wrap text-white position-relative z-index">
                            <h1 class="text-white">Web Hosting with cPanel</h1>
                            <p class="lead">Sell anything, anywhere, anytime on the world's biggest eCommerce platform.
                                Up to 50% Off domain and hosting, Starting from $2.99/month.</p>
                            <ul class="list-unstyled tech-feature-list text-white">
                                <li class="py-1"><span class="ti-control-forward mr-2"></span>Flexible, Easy to Use
                                    Control Panel</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2"></span><strong>Unmetered</strong> Bandwidth</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2"></span><strong>Unmetered</strong> Sub Domains,
                                    FTP Accounts</li>
                                <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>99%</strong>
                                    Uptime Guarantee</li>
                                <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>45-Day</strong>
                                    Money-Back Guarantee</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="offer-box text-white text-center py-5 px-4">
                            <span class="h5 text-white">Special intro offer </span>
                            <h2 class="offer-price text-white">
                                <span class="currency usa-currency">$</span>4<span
                                    class="decimal">.99</span><small>/month</small>
                            </h2>
                            <p class="regular-price">Regular Price <strong>$10.99/mo</strong></p>
                            <div class="action-btns mt-4">
                                <a class="btn primary-solid-btn animated-btn" href="#">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--pricing with switch section start-->
        <section class="pricing-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Managed Our Hosting Price</h2>
                            <p class="lead">
                                Professional hosting at an affordable price. Distinctively recaptiualize
                                principle-centered
                                core competencies through
                                core competencies.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-8 col-md-7">
                        <div class="text-center mb-5 radio-box-wrap billingCycle">
                            <div class="single-radio-box">
                                <input name="billingPlan" id="monthly-plan" value="monthly" class="radio"
                                    type="radio" checked>
                                <label for="monthly-plan"><span class="custom-check"></span> Monthly</label>
                            </div>
                            <div class="single-radio-box">
                                <input name="billingPlan" id="yearly-plan" value="yearly" class="radio" type="radio">
                                <label for="yearly-plan"><span class="custom-check"></span> Yearly</label>
                            </div>
                            <div class="single-radio-box">
                                <input name="billingPlan" id="biannual-plan" value="biannual" class="radio"
                                    type="radio">
                                <label for="biannual-plan"><span class="custom-check"></span> Biannual</label>
                            </div>
                            <div class="single-radio-box">
                                <input name="billingPlan" id="triennial-plan" value="triennial" class="radio"
                                    type="radio">
                                <label for="triennial-plan"><span class="custom-check"></span> Triennial</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-5">
                                <h5 class="mb-0">Cloud Starter</h5>
                                <p class="mb-0">Medium traffic personal sites</p>
                            </div>
                            <div class="card-header pb-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">$19<span>/month</span></div>
                                <div class="price text-center mb-0 yearly-price">$69<span>/yearly</span></div>
                                <div class="price text-center mb-0 biannual-price">$130<span>/biannual</span></div>
                                <div class="price text-center mb-0 triennial-price">$199<span>/triennial</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>10</span> Hosted Domains</li>
                                    <li><span>25 GB</span> RAID 10 Storage</li>
                                    <li><span>200 GB</span> Bandwidth</li>
                                    <li><span>1 Free</span> Domain included</li>
                                    <li><span>Super Fast</span> SSD Storage</li>
                                    <li><span>Free</span> SSL Certificate</li>
                                    <li>99.95% Uptime</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card popular-price text-center single-pricing-pack">
                            <div class="pt-5">
                                <h5 class="mb-0">Cloud Business <span class="badge color-1 color-1-bg">Popular</span>
                                </h5>
                                <p class="mb-0">High traffic corporate sites</p>
                            </div>
                            <div class="card-header pb-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">$49<span>/month</span></div>
                                <div class="price text-center mb-0 yearly-price">$159<span>/yearly</span></div>
                                <div class="price text-center mb-0 biannual-price">$299<span>/biannual</span></div>
                                <div class="price text-center mb-0 triennial-price">$429<span>/triennial</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>30</span> Hosted Domains</li>
                                    <li><span>75 GB</span> RAID 10 Storage</li>
                                    <li><span>700 GB</span> Bandwidth</li>
                                    <li><span>3 Free</span> Domain included</li>
                                    <li><span>Super Fast</span> SSD Storage</li>
                                    <li><span>Free</span> SSL Certificate</li>
                                    <li>99.95% Uptime</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn primary-solid-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-5">
                                <h5 class="mb-0">Cloud Enterprise</h5>
                                <p class="mb-0">Enterprise content management</p>
                            </div>
                            <div class="card-header pb-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">$69<span>/month</span></div>
                                <div class="price text-center mb-0 yearly-price">$259<span>/yearly</span></div>
                                <div class="price text-center mb-0 biannual-price">$499<span>/biannual</span></div>
                                <div class="price text-center mb-0 triennial-price">$739<span>/triennial</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>60</span> Hosted Domains</li>
                                    <li><span>175 GB</span> RAID 10 Storage</li>
                                    <li><span>1500 GB</span> Bandwidth</li>
                                    <li><span>6 Free</span> Domain included</li>
                                    <li><span>Super Fast</span> SSD Storage</li>
                                    <li><span>Free</span> SSL Certificate</li>
                                    <li>99.95% Uptime</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="support-cta mt-5">
                            <h5 class="mb-1 d-flex align-items-center justify-content-center"><span
                                    class="ti-loop color-primary mr-3 icon-sm"></span>Choose Your <a
                                    href="pricing-comparison.html" class="ml-2">Compare Hosting Plans</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing with switch section end-->

        <!--promo-section feature section start-->
        <section class="promo-feature ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-7">
                        <div class="section-heading text-center mb-5">
                            <h2>Why Choose Hostlar For Reselelr Hosting Business</h2>
                            <p class="lead">
                                Distinctively centered core competencies through client-centered
                                core competencies. Enthusiastically provide access.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-feature-list p-4 text-center">
                            <span class="ti-package icon-md d-block color-primary mb-4"></span>
                            <h5 class="mb-2">Unlimited Disk Space</h5>
                            <p>Holisticly whiteboard seamless ideas rather than cross quickly interfaces exceptional
                                platforms. </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-feature-list p-4 text-center">
                            <span class="ti-headphone-alt icon-md d-block color-primary mb-4"></span>
                            <h5 class="mb-2">24/7/365 Live Support</h5>
                            <p>Collaboratively architect sustainable predominate backward-compatible value-added
                                information.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-feature-list p-4 text-center">
                            <span class="ti-harddrives icon-md d-block color-primary mb-4"></span>
                            <h5 class="mb-2">Free WHM and cPanel</h5>
                            <p>Conveniently build opportunities with scalable e-services. Quickly whiteboard superior
                                enabled technologies.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-feature-list p-4 text-center">
                            <span class="ti-server icon-md d-block color-primary mb-4"></span>
                            <h5 class="mb-2">Powerful Servers</h5>
                            <p>Quickly seize low-risk high-yield interfaces before niches dynamically standards web
                                partnerships</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-feature-list p-4 text-center">
                            <span class="ti-loop icon-md d-block color-primary mb-4"></span>
                            <h5 class="mb-2">Free Website Transfer</h5>
                            <p>Collaboratively architect sustainable e-services Globally enterprise outsourcing whereas
                                web-readiness</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-feature-list p-4 text-center">
                            <span class="ti-hand-point-up icon-md d-block color-primary mb-4"></span>
                            <h5 class="mb-2">1-click Auto Installer</h5>
                            <p>Professionally adaptive materials schemas Assertively payoff via efficient users promote
                                performance</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo-section feature section end-->

        <!--call to action new style start-->
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
        <!--call to action new style end-->

        <!--technical specifications start-->
        <section class="technical-specification ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-sm-5 mb-md-0 mb-lg-0">
                            <h2>Technical Specifications</h2>
                            <p class="lead">Compellingly morph quality users for granular leadership. Authoritatively
                                build accurate technology after economically sound leadership.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="technical-specifications-wrap mt-md-5 mt-lg-5">
                            <span class="ti-harddrives icon-md color-primary d-block mb-4"></span>
                            <h5>Web Hosting Features</h5>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span>Flexible, Easy to Use
                                    Control Panel</li>
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
                            <span class="ti-panel icon-md color-primary d-block mb-4"></span>
                            <h5>cPanel Control Panel</h5>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>Latest</strong>
                                    cPanel Web Hosting Control Panel</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span>Webalizer, Raw Log Manager
                                    with Error Logs</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-primary"></span>Instant
                                    Shopping Carts, Blogs, Portals</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>Password</strong>
                                    Protected Directories Error Pages</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-primary"></span>Web
                                    Based File Manager, Hotlink Protection</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="technical-specifications-wrap mt-md-5 mt-lg-5">
                            <span class="ti-server icon-md color-primary d-block mb-4"></span>
                            <h5>Programming & Databases</h5>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>MySQL</strong>
                                    Databases with phpMyAdmin Access</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-primary"></span>Fast
                                    CGI, PHP 7, Ruby on Rails, Python</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>ImageMagick</strong>
                                    Curl, CPAN, GD Library</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>SSH</strong>
                                    Access and Cron Job Scheduling</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-primary"></span>SSL
                                    Certification</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="technical-specifications-wrap mt-md-5 mt-lg-5">
                            <span class="ti-email icon-md color-primary d-block mb-4"></span>
                            <h5>Email Features</h5>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>Unlimited</strong>
                                    POP3 Email Accounts with SMTP</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-primary"></span>WebMail
                                    Access: Horde, RoundCube</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-primary"></span>Receive
                                    your email to your phone via IMAP</li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-primary"></span>Prevent
                                    spam with SpamAssassin</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>Unlimited</strong>
                                    Email Aliases, Autoresponders</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="technical-specifications-wrap mt-md-5 mt-lg-5">
                            <span class="ti-headphone-alt icon-md color-primary d-block mb-4"></span>
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
                                <li class="py-1"><span class="ti-control-forward mr-2 color-primary"></span>Online
                                    Support Portal</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>500+</strong>Video
                                    Tutorials and <strong>680+</strong> Help Articles</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="technical-specifications-wrap mt-md-5 mt-lg-5">
                            <span class="ti-direction-alt icon-md color-primary d-block mb-4"></span>
                            <h5>Application Hosting Plan</h5>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>Free</strong>
                                    Website Transfer, Domain Transfer</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>52 Free</strong>
                                    scripts can be instantly installed</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>$100</strong>
                                    Google Adwords Offer (Details)</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>$100</strong> Bing
                                    Ads Credit (Details)</li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-primary"></span><strong>Free</strong> SSL
                                    Certification website securely</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--technical specifications end-->

        @include('front.components.faq')

        @include('front.components.testimonials')

    </div>

    @include('front.layout.footer')
</body>

</html>
