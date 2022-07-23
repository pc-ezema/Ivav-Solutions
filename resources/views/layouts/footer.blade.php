<!-- Start Subscribe Area -->
<section class="subscribe-area bg-f4f5fe">
    <div class="container">
        <div class="subscribe-content">
            <h2>We always try to be as close to you as possible</h2>

            <form class="newsletter-form" data-bs-toggle="validator">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <button type="submit"><i class="bx bxs-hot"></i> Subscribe Now</button>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div id="validator-newsletter" class="form-result"></div>
                    </div>
                </div>
            </form>

            <!-- <div class="shape14"><img src="assets/img/shape/13.png" alt="image"></div>
            <div class="shape15"><img src="assets/img/shape/14.png" alt="image"></div>
            <div class="shape16"><img src="assets/img/shape/15.png" alt="image"></div>
            <div class="shape17"><img src="assets/img/shape/16.png" alt="image"></div>
            <div class="shape18"><img src="assets/img/shape/17.png" alt="image"></div> -->
        </div>
    </div>
</section>
<!-- End Subscribe Area -->

<!-- Start Footer Area -->
<footer class="footer-area">
    <!-- <div class="divider"></div> -->

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="/"><img src="" alt="image"></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Company</h3>

                    <ul class="services-list">
                        <li><a href="/about-us">About Us</a></li>
                        <li><a href="/services">Services</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Support</h3>

                    <ul class="support-list">
                        <li><a href="/faq">FAQ's</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Contact Info</h3>

                    <ul class="footer-contact-info">
                        <li>Location: <a href="#" target="_blank">[{{config('app.address_1')}}]</a>
                                      <a href="#" target="_blank">[{{config('app.address_2')}}]</a></li>
                        <li>Email: <a href="mailto:{{config('app.email')}}"><span class="__cf_email__" data-cfemail="a6cec3cacac9e6d5d2d4c7de88c5c9cb">[{{config('app.email')}}]</span></a></li>
                        <li>Phone: <a href="tel:{{config('app.phone_1')}}">[{{config('app.phone_1')}}]</a>
                                    <a href="tel:{{config('app.phone_2')}}">[{{config('app.phone_2')}}]</a></li>
                    </ul>
                    <ul class="social">
                        <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <p>Copyright @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                    document.write(new Date().getFullYear())
                </script> {{config('app.name')}}. </a>
            </p>
        </div>
    </div>
</footer>
<!-- End Footer Area -->