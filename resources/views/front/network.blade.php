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
                            <h1 class="text-white mb-2">Network</h1>
                            <p class="lead">Intrinsicly supply extensible outsourcing before robust channels. Uniquely
                                utilize market-driven technologies before vertical.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--breadcrumb bar start-->
        <div class="breadcrumb-bar py-3 border-bottom gray-light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0 pl-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="list-inline-item breadcrumb-item active">Network</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb bar end-->

        <!--network map section start-->
        <section class="network-map-section ptb-100 ">
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

        @include('front.components.testimonials')
    </div>

    @include('front.layout.footer')
</body>

</html>
