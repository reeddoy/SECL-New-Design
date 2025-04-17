<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'SECL - Shahrish Engineering Construction Limited')</title>
    <meta name="author" content="SECL">
    <meta name="description" content="SECL - Shahrish Engineering Construction Limited">
    <meta name="keywords" content="SECL - Shahrish Engineering Construction Limited">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&amp;family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="cursor"></div>
    <div class="cursor2"></div>

    <!-- loader section -->
    <div id="preloader" class="preloader"><button class="th-btn preloaderCls">Cancel Preloader</button>
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span preloader-text="S" class="characters">S </span>
                    <span preloader-text="E" class="characters">E</span>
                    <span preloader-text="C" class="characters">C</span>
                    <span preloader-text="L" class="characters">L</span>
                    <!-- <span preloader-text="R" class="characters">R</span> -->
                </div>
            </div>
        </div>
    </div>


    <div class="sidemenu-wrapper sidemenu-info">
        <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget">
                <div class="th-widget-about">
                    <div class="about-logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.svg') }}" alt="SECL"></a>
                    </div>
                    <p class="about-text">Construction services offer
                        tailored solutions to meet the unique needs and
                        specifications of each project.</p>
                    <div class="th-social style2"><a href="https://www.facebook.com/"><i
                                class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                class="fab fa-linkedin-in"></i></a> <a href="https://www.whatsapp.com/"><i
                                class="fab fa-whatsapp"></i></a></div>
                </div>
            </div>

            <div class="widget">
                <h3 class="widget_title">Contact Us</h3>
                <div class="th-widget-about">
                    <h4 class="footer-info-title">Address Location</h4>
                    <p class="footer-info"><i class="fas fa-map-marker-alt"></i>138 MacArthur
                        Ave, USA</p>
                    <h4 class="footer-info-title">Phone
                        Number</h4>
                    <p class="footer-info"><i class="fa-sharp fa-solid fa-phone"></i><a class="text-inherit"
                            href="tel:+19524357106">+1
                            952-435-7106</a></p>
                    <h4 class="footer-info-title">Email Address</h4>
                    <p class="footer-info"><i class="fas fa-envelope"></i><a class="text-inherit"
                            href="mailto:info@SECL.com">info@SECL.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box"><button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#"><input type="text" placeholder="What are you looking for?"> <button type="submit"><i
                    class="fal fa-search"></i></button></form>
    </div>
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.svg') }}" alt="SECL"></a></div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about_us') }}">About Us</a></li>
                    <li><a href="{{ url('/service') }}">Service</a></li>
                    <li class="menu-item-has-children"><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/project') }}">Our Projects</a></li>
                            <li><a href="{{ url('/faq') }}">FAQ</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/contact_us') }}">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="th-header header-layout2">
        <div class="header-top">
            <div class="container th-container">
                <div class="row justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-auto">
                        <div class="top-left">
                            <p class="header-notice"><i class="fa-regular fa-hashtag"></i>Welcome
                                To SECL Limited</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-wrapper">
                            <div class="header-links">
                                <ul>
                                    <li><i class="fa-regular fa-phone"></i><a href="tel:+12013802737">+1
                                            201-380-2737</a></li>
                                    <li><i class="fa-regular fa-envelope"></i><a
                                            href="mailto:help24/7info@SECL.com">help24/7info@SECL.com</a></li>
                                </ul>
                            </div>
                            <div class="social-links"><span class="social-title">Follow Us:</span>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                    href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a> <a
                                    href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="container th-container">
                <div class="menu-area">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.svg') }}"
                                        alt="SECL" width="185px"></a></div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about_us') }}">About
                                            Us</a></li>
                                    <li><a href="{{ url('/service') }}">Service</a> </li>
                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/project') }}">Our Projects</a></li>
                                            <li><a href="{{ url('/faq') }}">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/contact_us') }}">Contact
                                            us</a></li>
                                </ul>
                            </nav><button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button"><button type="button" class="icon-btn searchBoxToggler"><i
                                        class="far fa-search"></i></button>
                                <a href="#" class="icon-btn sideMenuToggler d-none d-lg-block"><i
                                        class="fa-solid fa-grid"></i></a> <a href="contact.html"
                                    class="th-btn th-icon">GET A QUOTE<i class="fa-regular fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>













    <main>
        @yield('content')
    </main>
















    <div class data-pos-for=".footer-layout2" data-sec-pos="bottom-half">
        <div class="container">
            <div class="newsletter-sec bg-theme">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-6 col-xl-7">
                        <div class="newsletter-wrapper">
                            <h4 class="h2 newsletter-title text-white">Subscribe
                                to our newsletter</h4>
                            <p class="newsletter-text">Get 20% off your
                                first order just by subscribing to our
                                newsletter</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="newsletter-form-wrapper">
                            <form class="newsletter-form"><input class="form-control" type="email"
                                    placeholder="Enter your Email" required>
                                <button type="submit" class="th-btn style4">Subscribe
                                    Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-wrapper bg-title footer-layout2" data-bg-src="{{ asset('assets/img/bg/footer_bg_2.jpg') }}">
        <div class="footer-area">
            <div class="widget-area">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="widget footer-widget">
                                <div class="th-widget-about">
                                    <div class="about-logo"><a href="home-company.html"><img src="{{ asset('assets/img/logo.svg') }}"
                                                alt="SECL" width="200px"></a></div>
                                    <p class="about-text">Look for
                                        contractors with relevant
                                        experience, a solid reputation, and
                                        proper licensing.</p>
                                    <div class="th-widget-contact style2">
                                        <div>
                                            <h4 class="footer-info-title">Phone
                                                Number</h4>
                                            <p class="footer-info"><i class="fa-sharp fa-solid fa-phone"></i><a
                                                    class="text-inherit" href="tel:+19524357106">+1
                                                    952-435-7106</a></p>
                                        </div>
                                        <div>
                                            <h4 class="footer-info-title">Email
                                                Address</h4>
                                            <p class="footer-info"><i class="fas fa-envelope"></i><a
                                                    class="text-inherit" href="mailto:info@SECL.com">info@SECL.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-30">
                                        <h4 class="footer-info-title">Address
                                            Location</h4>
                                        <p class="footer-info"><i class="fas fa-map-marker-alt"></i>138
                                            MacArthur Avenue,
                                            USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Quick
                                    Links</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="team.html">Team
                                                Member</a></li>
                                        <li><a href="service.html">Services</a></li>
                                        <li><a href="contact.html">Company
                                                History</a></li>
                                        <li><a href="contact.html">Need a
                                                Career?</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="price.html">Pricing
                                                Plans</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Our
                                    Services</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="service.html">Building
                                                Construction</a></li>
                                        <li><a href="service.html">Architecture
                                                Design</a></li>
                                        <li><a href="service.html">Building
                                                Renovation</a></li>
                                        <li><a href="service.html">Flooring
                                                & Roofing</a></li>
                                        <li><a href="service.html">Real
                                                Estate</a></li>
                                        <li><a href="service.html">Interior
                                                Design</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">Gallery
                                    Post</h3>
                                <div class="sidebar-gallery">
                                    <div class="gallery-thumb"><img src="{{ asset('assets/img/widget/gallery_1_1.jpg') }}"
                                            alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_1.jpg') }}"
                                            class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                                    <div class="gallery-thumb"><img src="{{ asset('assets/img/widget/gallery_1_2.jpg') }}"
                                            alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_2.jpg') }}"
                                            class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                                    <div class="gallery-thumb"><img src="{{ asset('assets/img/widget/gallery_1_3.jpg') }}"
                                            alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_3.jpg') }}"
                                            class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                                    <div class="gallery-thumb"><img src="{{ asset('assets/img/widget/gallery_1_4.jpg') }}"
                                            alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_4.jpg') }}"
                                            class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025 <a
                                    href="https://shahrishconstruction.com" target="_blank">SECL</a>. All
                                Rights Reserved.</p>
                        </div>
                        <div class="col-lg-6 text-end d-none d-lg-block">
                            <div class="th-social"><span class="social-title">Follow Us:</span>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                    href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>


</html>