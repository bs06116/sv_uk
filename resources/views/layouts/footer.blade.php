<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <h4>ShinnyView</h4>
                <ul class="utf-footer-links-item">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('about') }}"> About Us</a></li>
                    <li><a href="{{ url('privacy') }}"> Privacy Policy</a></li>
                    <li><a href="{{ route('term') }}">Terms Conditions </a></li>
                    <li><a href="{{ url('contact') }}"> Contact</a></li>
                    <li><a href="{{ route('faq') }}"> FAQ </a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h4>Useful Links</h4>
                <ul class="utf-footer-links-item">
                    <li><a href="{{ url('help-to-buy-property') }}">Help to buy property</a></li>
                    <li><a href="{{ url('mortgages') }}">Mortgages</a></li>
                    <li><a href="{{ url('stamp-duty-calculator') }}">Stamp Duty Calcluator</a></li>
                    <li><a href="{{ url('student-living') }}">Student Living </a></li>
                    <li><a href="{{ url('complaint') }}">Complaints</a></li>
                    <li><a href="{{ url('how-we-handle-unacceptable-behaviour') }}"> How we handle unacceptable
                            behaviour </a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>CONTACT US</h4>
                <ul class="___class_+?8___">
                    <li><a
                            href="https://www.google.com/maps/place/Shiny+View+Motors+Ltd/@51.510584,-0.4441264,17z/data=!3m2!4b1!5s0x487672769b76a291:0x208700da19632f5d!4m5!3m4!1s0x487673ed4d512bc3:0x351adbf2e1864c8e!8m2!3d51.5105656!4d-0.4419337"><i><span
                                    style="color: #bc985f;" class="fa fa-map-marker" aria-hidden="true"></span></i> The
                            Bower, Ground Floor, <br>Four Avenue, Stockley Park <br> UB11 1AF, London.</a></li>
                    <li><a href="#"><i> <span style="color: #bc985f;" class="fa fa-envelope"
                                    aria-hidden="true"></span></i> info@shinnyview.co.uk</a></li>
                    <li><a href="#"><i> <span style="color: #bc985f;" class="fa fa-phone"
                                    aria-hidden="true"></span></i> 020 3290 2948</a></li>
                    <li><a href="#"><i> <span style="color: #bc985f;" class="fa fa-server"
                                    aria-hidden="true"></span></i> www.shinnyview.co.uk</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Join Us</h4>
                <a href="https://www.facebook.com/ShinnyView.PK">
                    <img class="footer-icon" src="{{ asset('assets/img/facebook.png') }}">
                </a>

                <a href="https://twitter.com/shinnyview">
                    <img class="footer-icon" src="{{ asset('assets/img/twitter.png') }}" alt="">
                </a>

                <a href="https://www.instagram.com/shinnyview_official/">
                    <img class="footer-icon" src="{{ asset('assets/img/Instagram.png') }}" alt="">
                </a>

                <a href="https://www.linkedin.com/in/shinny-view-980a89206/">
                    <img class="footer-icon" src="{{ asset('assets/img/in.png') }}" alt="">
                </a>
                <a href="https://www.youtube.com/channel/UC5D93IRh-GQ0m9KzH8sJAnQ">
                    <img class="footer-new" src="{{ asset('assets/img/youtube.png') }}" alt="">
                </a>
            </div>

            <div class="col-lg-3">
                <img class="bar-new" style="width:128px;" st src="{{ asset('assets/img/gooleplay.png') }}"
                    alt="">
                <img class="bar-new" style="width:128px;" src="{{ asset('assets/img/applestore.png') }}" alt="">

            </div>
            <div class="col-lg-3">
                <img class="bar-new" src="{{ asset('assets/img/bar.jpeg') }}" alt="">
            </div>
        </div>

    </div>


    {{-- <script src="{{ asset('assets/js/slick.js') }}"></script> --}}

    <script type="text/javascript">
        $(function() {
            SyntaxHighlighter.all();
        });
        $(window).load(function() {
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 120,
                itemMargin: 5,
                asNavFor: '#slider'
            });

            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FNVQ73CMSF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-FNVQ73CMSF');
    </script>
    <script type="text/javascript" src="{{ asset('assets/carousel/shCore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/carousel/shBrushXml.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/carousel/shBrushJScript.js') }}"></script>

    <!-- Optional FlexSlider Additions -->
    <script src="{{ asset('assets/carousel/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets/carousel/jquery.mousewheel.js') }}"></script>
    <script defer src="{{ asset('assets/carousel/demo.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.agent-img').slick({
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                speed: 800,
                enterMode: true,
                autoplay: true,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            $('.your-class').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                speed: 800,
                enterMode: true,
                autoplay: true,
                arrows: false,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
            $('.feauter-class').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                speed: 800,
                enterMode: true,
                autoplay: true,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
            $('.lahore-class').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 3,
                dots: true,
                infinite: true,
                speed: 800,
                enterMode: true,
                autoplay: true
            });
            $('.karachi-class').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 3,
                dots: true,
                infinite: true,
                speed: 800,
                enterMode: true,
                autoplay: true
            });
            $('.testimonial-class').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                speed: 800,
                enterMode: true,
                autoplay: true,
                arrows: false,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });
    </script>
    <footer class="footersss">
        <span style="color: white;margin-left:515px;">
            © 2021 Shinny View Limited. All rights reserved.</span>
    </footer>
</div>
