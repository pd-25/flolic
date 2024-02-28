<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Frolic Services</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap-grid.css') }}" rel="stylesheet">
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('frontend/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel Assets pranab -->
    <link href="{{ asset('frontend/owl-carousel/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/owl-carousel/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- Owl Carousel Assets pranab -->
    <!-- Custom styles for this template -->
    <link href="{{ asset('frontend/css/modern-business.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Menu -->
    <link href="{{ asset('frontend/addons/jquery.smartmenus.bootstrap-4.css') }}" rel="stylesheet">
    <!-- GRT Youtube Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/grt-youtube-popup.css') }}">
    
</head>

<body>

    <header id="main-header">
        <div id="top-header">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="top-header-left">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="">+91-8981228599</a>
                                    / <a href="">+91 9831821332</a></li>
                                <li><i class="fa fa-envelope aria-hidden="true"></i> <a
                                        href="">frolic.services@gmail.com</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="top-header-right">
                            <p><i class="fa fa-map-marker aria-hidden="true"></i> Dong Fang building, 5th Floor, Suit no
                                - 602, Newtown, Kolkata- 700156</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div id="second-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-4">
                        <div class="logo">
                            <img src="{{ asset('frontend/images/logo.png') }}" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-10 col-8 header-menu">
                        <nav class="navbar navbar-expand-lg navbar-light mainmenu">
                            <button aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNav"
                                data-target="#navbarNav" data-toggle="collapse" type="button" class="navbar-toggler">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="navbarNav" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('ceo-desk') }}" class="nav-link">CEO Desk</a>
                                    </li>
                                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                            href="#">Services</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('electrical-design') }}">Electrical design</a></li>
                                            <li><a href="{{ route('hvac-design') }}">HVAC design</a></li>
                                            <li><a href="{{ route('phe-design') }}">PHE design</a></li>
                                            <li><a href="{{ route('fire-system-design') }}">Fire system design</a></li>
                                            <li><a href="{{ route('elv-network-design') }}">ELV network design</a></li>
                                            <li><a href="{{ route('cctv-and-security-system-design') }}">CCTV and security system
                                                    design</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('our-project') }}" class="nav-link">Our Project</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('testimonials') }}" class="nav-link">Testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('contact-us') }}" class="nav-link">Contact Us</a>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </header>

    @yield('content')


    <footer id="main_footer">

        <div id="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 fst-footer">
                        <img src="{{ asset('frontend/images/logo.png') }}" class="img-fluid mb-3">
                        <p>Lorem ipsum dolor sit amctetur adipiscing elit. Vestibulum ultricies elementum eros, vitae
                            viverra nibh consequat eu.</p>
                        <ul class="footer-social">
                            <li><a href=""><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 snd-footer">
                        <h4>Quick Links</h4>
                        <ul class="footer-menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="ceo-desk">CEO Desk</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="testimonials">Testimonials</a></li>
                            <li><a href="contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 trd-footer">
                        <h4>Connect With Us</h4>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Dong Fang building, 5th Floor, Suit no
                            - 602, Newtown, Kolkata- 700156</p>

                        <br>
                        <p class="footer-phone"><i class="fa fa-phone" aria-hidden="true"></i> +91-8981228599 / +91
                            9831821332</p>
                        <p class="footer-phone"><i class="fa fa-envelope" aria-hidden="true"></i>
                            frolic.services@gmail.com</p>

                    </div>
                </div>
            </div>
        </div>

        <div id="footer-copyright">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <p>Copyright © 2023, Frolic Services. All Rights Reserved | Design and Developed By <a
                                href="https://www.webredas.com/">Webredas</a></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- GRT Youtube Popup -->
    <script src="{{ asset('frontend/js/grt-youtube-popup.js') }}"></script>

    <!-- Initialize GRT Youtube Popup plugin -->
    <script>
        // Demo video 1
        $(".youtube-link").grtyoutube({
            autoPlay: true,
            theme: "dark"
        });
    </script>
    
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="{{ asset('frontend/addons/jquery.smartmenus.js') }}"></script>
    <!-- SmartMenus jQuery Bootstrap 4 Addon -->
    <script type="text/javascript" src="{{ asset('frontend/addons/jquery.smartmenus.bootstrap-4.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/owl-carousel/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/dist/simple-lightbox.js?v2.2.1') }}"></script>
    <!-- End Owl pranab-->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script> --}}
    <script>
        $(document).ready(function() {
            var owl = $('#owl-service');
            owl.owlCarousel({
                items: 3,
                loop: true,
                nav: false,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [2000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            var owl = $('#owl-gallery');
            owl.owlCarousel({
                items: 3,
                loop: true,
                nav: false,
                margin: 25,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [2000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            var owl = $('#owl-testimonial');
            owl.owlCarousel({
                items: 3,
                loop: true,
                nav: false,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [2000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })
        })
    </script>
    @yield('script')
</body>

</html>
