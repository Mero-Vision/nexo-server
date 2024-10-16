<!--footer section start-->
<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="row footer-top-wrap">
                        <div class="col-12">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">SECURED BY</h4>
                                <ul class="list-inline security-icon-list">
                                    <li class="list-inline-item"><img src="assets/img/mcafee-logo.png" width="110"
                                            alt="security" class="img-fluid" /></li>
                                    <li class="list-inline-item"><img src="assets/img/norton-logo.png" width="110"
                                            alt="security" class="img-fluid" /></li>
                                    <li class="list-inline-item"><img src="assets/img/accredited-logo.png"
                                            width="110" alt="security" class="img-fluid" /></li>
                                    <li class="list-inline-item"><img src="assets/img/secured-logo.png" width="110"
                                            alt="security" class="img-fluid" /></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row footer-top-wrap">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">PRODUCTS</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('web-hosting')}}">Web Hosting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('cloud-hosting')}}">Cloud Hosting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">VPS Servers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('wordpress-hosting')}}">Wordpress Servers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('domains')}}">Domain Names</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">COMPANY</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('about-us')}}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('network')}}">Datacenter</a>
                                    </li>
                                    
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">LEGAL</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Legal Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Report Abuse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms of Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">WHOIS Lookup</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">SUPPORT</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://clients.nexoserver.com/contact.php">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://clients.nexoserver.com/knowledgebase">Knowledge Base</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://clients.nexoserver.com/serverstatus.php">System Status</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://clients.nexoserver.com/submitticket.php">Support Team</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom gray-light-bg py-3">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">Copyrights © <?php echo Date('Y'); ?>. All
                        rights reserved by
                        <a href="https://merovision.com/" target="_blank">Mero Vision</a>
                    </p>
                </div>
                <div class="col-md-7 col-lg-6">
                    <div class="payment-method text-right">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img src="{{url('assets/img/footer/fonepay.png')}}" alt="amex" width="50" />
                            </li>
                            <li class="list-inline-item">
                                <img src="{{ url('assets/img/footer/payment-visa.svg') }}" alt="visa"
                                    width="50" />
                            </li>

                            <li class="list-inline-item">
                                <img src="{{ url('assets/img/footer/payment-paypal.svg') }}" alt="paypal"
                                    width="50" />
                            </li>
                            <li class="list-inline-item">
                                <img src="{{url('assets/img/footer/esewa.png')}}" alt="bitcoin" width="50" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
<!--footer section end-->
<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-rocket"></span>
</button>
<!--bottom to top button end-->
<!--build:js-->
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/validator.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.rcounterup.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/hs.megamenu.js"></script>
<script src="assets/js/app.js"></script>
<!--endbuild-->
