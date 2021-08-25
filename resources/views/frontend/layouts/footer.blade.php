<footer class="footer-area">
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <img src="{{asset('frontend/assets/images/logo.webp')}}" alt="">
                    <h4 class="footer-social">LET´S BE SOCIAL</h4>
                    <ul class="footer-social-share d-flex">
                        <li>
                            <a target="_blank" href="https://twitter.com/keyconsultants1">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/keyconsultantsmallorca">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a
                                target="_blank"
                                href="https://www.linkedin.com/company/key-consultants-mallorca/"
                            >
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <h2 class="footer-title">Useful Links</h2>
                    <ul class="footer-menu">
                        <li><a href="{{route('landing')}}">Home</a> </li>
                        <li><a href="{{route('properties')}}">Properties </a> </li>
                        <li> <a href="javascript:void(0)">My Favorites </a></li>
                        <li><a href="{{route('meet.our.team')}}">Meet Our Team </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <h2 class="footer-title">Information</h2>
                    <ul class="footer-menu">
                        <li><a href="{{route('about.us')}}">About Us
                            </a></li>
                        <li><a href="{{route('contact')}}">Contact Us
                            </a></li>
                        <li><a href="{{route('career.with.key.consultants')}}">Careers with Key Consultants
                            </a></li>
                        <li><a href="{{route('privacy.cookie.policy')}}">Privacy &amp; Cookies Policy
                            </a></li>
                        <li><a href="{{route('terms.and.conditions.of.business')}}">Terms and Conditions of Service
                            </a></li>
                        <li>Website usage terms</li>
                        <li><a href="{{route('our.fees')}}">
                                Our Prices / Fees
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-moddle-area">
        <div class="container">
            <div class="copyright">
                <span>Copyrights © | All rights reserved to | KEY CONSULTANTS</span>
                <span>Design and Developed By KEY CONSULTANTS</span>
            </div>
        </div>
    </div>
</footer>
<button class="scrollTopBtn"><i class="fa fa-caret-up"></i></button>
@include('sweetalert::alert')
@include('cookie-consent::index')
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/range.slider.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/scripts.js')}}"></script>
@stack('js')
</body>
</html>
