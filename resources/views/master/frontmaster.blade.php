<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wowtheme7.com/tf/charifund/charifund/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Sep 2025 06:33:09 GMT -->

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend_assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend_assets/images/favicon.png') }}" type="image/x-icon">
    <!-- #title -->
    <title>Zindagi Tujhe Salaam | Nonprofit NGO </title>
    <!-- #keywords -->
    <meta name="keywords" content="charity, nonprofit, fundraising, donation, html, bootstrap, scss">
    <!-- #description -->
    <meta name="description" content="Nonprofit NGO Fundraising HTML5 Template">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Nunito:ital,wght@0,200..1000;1,200..1000&amp;family=Outfit:wght@100..900&amp;display=swap"
        rel="stylesheet"> <!-- main css -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/main.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/responsive.css') }}">
    <!-- color themes -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/default-theme.css') }}" id="switch-color">
    <!-- want sticky header -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/sticky-header.css') }}">
    <!-- box layout css -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/box-layout.css') }}">
    <!-- dark mode css -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/dark-mode.css') }}">
    <!-- rtl css -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/rtl.css') }}">

    @yield('css')
</head>

<body>

    <div class="page-wrapper">
        <!-- ==== preloader start ==== -->
        <div class="preloader">
            <i class="icon-donation"></i>
            <p>Zindagi Tujhe Salaam</p>
        </div>
        <!-- ==== / preloader end ==== -->
        <!-- ==== topbar start ==== -->
        <div class="topbar topbar--secondary d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="topbar__inner">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6 col-xxl-4">
                                    <div class="topbar__list-wrapper">
                                        <ul class="topbar__list">
                                            <li><a href="mailto:zindagitujhesalaam@gmail.com"><i
                                                        class="fa-regular fa-envelope"></i>zindagitujhesalaam@gmail.com</a>
                                            </li>
                                            <li><a href="tel:522 4105853"><i class="fa-solid fa-phone"></i>+91 522
                                                    4105853</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-xxl-4 d-none d-xxl-block">
                                    <div class="topbar__extra text-center">
                                        <p><i class="icon-heart-hand"></i> Are you ready to help them? Let's become a
                                            volunteer!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-xxl-4">
                                    <div class="topbar__items justify-content-end">


                                        <div class="social">
                                            <a href="https://www.facebook.com/ZindagiTujheSaalam" target="_blank"
                                                aria-label="share us on facebook" title="facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                            <a href="https://x.com/ZtSalaam/" target="_blank"
                                                aria-label="share us on twitter" title="twitter">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                            <a href="https://www.linkedin.com/" target="_blank"
                                                aria-label="share us on linkedin" title="linkedin">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                            <a href="https://www.instagram.com/zindagitujhesalam/" target="_blank"
                                                aria-label="share us on instagram" title="instagram">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==== / topbar end ==== -->
        <!-- ==== header start ==== -->
        <header class="header header-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main-header__menu-box">
                            <nav class="navbar p-0">
                                <div class="navbar-logo">
                                    <a href="/">
                                        <img src="{{ asset('frontend_assets/images/logo.png') }}" alt="Image">
                                    </a>
                                </div>
                                <div class="navbar__menu-wrapper">
                                    <div class="navbar__menu d-none d-xl-block">
                                        <ul class="navbar__list">
                                            <li class="navbar__item  nav-fade">
                                                <a href="/">Home</a>

                                            </li>
                                            <li class="navbar__item navbar__item--has-children nav-fade">
                                                <a href="#" aria-label="dropdown menu"
                                                    class="navbar__dropdown-label dropdown-label-alter">About Us</a>
                                                <ul class="navbar__sub-menu">
                                                    <li>
                                                        <a href="faq.html">Our Guiding Principles</a>
                                                    </li>

                                                    <li class="navbar__item navbar__item--has-children">
                                                        <a aria-label="dropdown menu"
                                                            class="navbar__dropdown-label navbar__dropdown-label-sub">Our
                                                            Team</a>
                                                        <ul class="navbar__sub-menu navbar__sub-menu__nested">
                                                            <li>
                                                                <a href="events.html">Core Members</a>
                                                            </li>
                                                            <li>
                                                                <a href="event-details.html">Leadership Influencers</a>
                                                            </li>
                                                            <li>
                                                                <a href="event-details.html">Advisory Board</a>
                                                            </li>
                                                            <li>
                                                                <a href="event-details.html">Members</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="navbar__item navbar__item--has-children">
                                                        <a aria-label="dropdown menu"
                                                            class="navbar__dropdown-label navbar__dropdown-label-sub">Our
                                                            Journey</a>
                                                        <ul class="navbar__sub-menu navbar__sub-menu__nested">
                                                            <li>
                                                                <a href="shop.html">Human First</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-details.html">Muhim</a>
                                                            </li>
                                                            <li>
                                                                <a href="cart.html">Jagrati</a>
                                                            </li>
                                                            <li>
                                                                <a href="checkout.html">Sneh</a>
                                                            </li>
                                                            <li>
                                                                <a href="checkout.html">Muskaan</a>
                                                            </li>
                                                        </ul>
                                                    </li>


                                                </ul>
                                            </li>
                                            <li class="navbar__item navbar__item--has-children nav-fade">
                                                <a href="#" aria-label="dropdown menu"
                                                    class="navbar__dropdown-label dropdown-label-alter">Campaigns</a>
                                                <ul class="navbar__sub-menu">
                                                    <li>
                                                        <a href="our-causes.html">Phone A Friend</a>
                                                    </li>
                                                    <li>
                                                        <a href="cause-details.html">Responsible India Possible
                                                            India</a>
                                                    </li>
                                                    <li>
                                                        <a href="our-causes.html">Be A Hero</a>
                                                    </li>
                                                </ul>
                                            </li>


                                            <li class="navbar__item nav-fade">
                                                <a href="contact-us.html">Gallery</a>
                                            </li>
                                            <li class="navbar__item nav-fade">
                                                <a href="contact-us.html">Career</a>
                                            </li>
                                            <li class="navbar__item nav-fade">
                                                <a href="/contact">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="contact-btn">
                                        <div class="contact-icon">
                                            <i class="icon-support"></i>
                                        </div>
                                        <div class="contact-content">
                                            <p>Call Us Now</p>
                                            <a href="tel:522 4105853">(+91)522 4105853 </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar__options">
                                    <div class="navbar__mobile-options ">
                                        {{-- <div class="search-box">
                                 <button class="open-search" aria-label="search products" title="open search box">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                 </button>
                              </div> --}}
                                        <a href="donate-us.html" class="btn--primary d-none d-md-flex">Donate Now <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <button class="open-offcanvas-nav d-flex d-xl-none"
                                        aria-label="toggle mobile menu" title="open offcanvas menu">
                                        <span class="icon-bar top-bar"></span>
                                        <span class="icon-bar middle-bar"></span>
                                        <span class="icon-bar bottom-bar"></span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ==== / header end ==== -->
        <!-- ==== mobile menu start ==== -->
        <div class="mobile-menu mobile-menu--primary d-block d-xxl-none">
            <nav class="mobile-menu__wrapper">
                <div class="mobile-menu__header nav-fade">
                    <div class="logo">
                        <a href="index.html" aria-label="home page" title="logo">
                            <img src="{{ asset('frontend_assets/images/logo.png') }}" alt="Image">
                        </a>
                    </div>
                    <button aria-label="close mobile menu" class="close-mobile-menu">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="mobile-menu__list"></div>
                <div class="mobile-menu__cta nav-fade d-block d-md-none">
                    <a href="donate-us.html" class="btn--primary ">Donate Now <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="mobile-menu__social social nav-fade">
                    <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook"
                        title="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://vimeo.com/" target="_blank" aria-label="share us on vimeo" title="vimeo">
                        <i class="fa-brands fa-vimeo-v"></i>
                    </a>
                    <a href="https://x.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin"
                        title="linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </nav>
        </div>
        <div class="mobile-menu__backdrop"></div>


        <!-- === Main Section Start-->
        <main>
            @yield('content')
        </main>
        <!-- === Main Section End-->
        <!-- ==== footer start ==== -->
        <footer class="footer-two">
            <div class="container">


                <div class="row gutter-60">
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="footer-two__widget" data-aos="fade-up" data-aos-duration="1000">
                            <div class="footer-two__widget-logo">
                                <a href="index.html">
                                    <img src="{{ asset('frontend_assets/images/logo-light.png') }}" alt="Image">
                                </a>
                            </div>
                            <div class="footer-two__widget-content">
                                <p>Our secure online donation platform allows you to make contributions quickly and
                                    safely. Choose from various.
                                </p>
                                <div class="social">
                                    <a href="https://www.facebook.com/" target="_blank"
                                        aria-label="share us on facebook" title="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://vimeo.com/" target="_blank" aria-label="share us on vimeo"
                                        title="vimeo">
                                        <i class="fa-brands fa-vimeo-v"></i>
                                    </a>
                                    <a href="https://x.com/" target="_blank" aria-label="share us on twitter"
                                        title="twitter">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                        aria-label="share us on linkedin" title="linkedin">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-2 offset-xl-1">
                        <div class="footer-two__widget" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="footer-two__widget-intro">
                                <h5>Quick Links</h5>
                                <div class="line">
                                    <span class="large-line"></span>
                                    <span class="small-line"></span>
                                    <span class="small-line"></span>
                                </div>
                            </div>
                            <div class="footer-two__widget-content">
                                <ul>
                                    <li><a href="about-us.html"><i class="fa-solid fa-arrow-right"></i>About Us</a>
                                    </li>
                                    <li><a href="blog-list.html"><i class="fa-solid fa-arrow-right"></i>Our
                                            News</a>
                                    </li>
                                    <li><a href="our-causes.html"><i class="fa-solid fa-arrow-right"></i>Our
                                            Campaign</a>
                                    </li>
                                    <li><a href="faq.html"><i class="fa-solid fa-arrow-right"></i>FAQ</a></li>
                                    <li><a href="contact-us.html"><i class="fa-solid fa-arrow-right"></i>Get A
                                            Quote</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="footer-two__widget footer-two__widget--alternate" data-aos="fade-up"
                            data-aos-duration="1000" data-aos-delay="400">
                            <div class="footer-two__widget-intro">
                                <h5>Our Services</h5>
                                <div class="line">
                                    <span class="large-line"></span>
                                    <span class="small-line"></span>
                                    <span class="small-line"></span>
                                </div>
                            </div>
                            <div class="footer-two__widget-content">
                                <ul>
                                    <li><a href="our-causes.html"><i class="fa-solid fa-arrow-right"></i>Our
                                            Causes</a>
                                    </li>
                                    <li><a href="events.html"><i class="fa-solid fa-arrow-right"></i>Education
                                            Support</a>
                                    </li>
                                    <li><a href="our-causes.html"><i class="fa-solid fa-arrow-right"></i>Our
                                            Campaign</a>
                                    </li>
                                    <li><a href="our-causes.html"><i class="fa-solid fa-arrow-right"></i>Food
                                            Support</a>
                                    </li>
                                    <li><a href="our-causes.html"><i class="fa-solid fa-arrow-right"></i>Health
                                            Support</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="footer-two__widget footer-two__widget--alternate" data-aos="fade-up"
                            data-aos-duration="1000" data-aos-delay="600">
                            <div class="footer-two__widget-intro">
                                <h5>Get In Touch</h5>
                                <div class="line">
                                    <span class="large-line"></span>
                                    <span class="small-line"></span>
                                    <span class="small-line"></span>
                                </div>
                            </div>
                            <div class="footer-two__widget-content footer-two__widget-content--contact">
                                <ul>
                                    <li><a href="https://maps.app.goo.gl/Gr9pTNqz5FRNrjQw8" target="_blank"><i
                                                class="fa-solid fa-location-dot"></i>455 West Orchard Street Kings
                                            Mountain, NC 280867</a>
                                    </li>
                                    <li><a href="tel:2305-587-3407"><i class="fa-solid fa-phone"></i>+088 (246)
                                            642-27-10</a>
                                    </li>
                                    <li><a href="mailto:support@example.com"><i
                                                class="fa-regular fa-envelope"></i>example@email.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-two__copyright">
                <div class="container">
                    <div class="row align-items-center gutter-12">
                        <div class="col-12 col-lg-6">
                            <div class="footer-two__copyright-inner text-center text-lg-start">
                                <p>Copyright &copy; <span id="copyrightYear"></span> <a
                                        href="index.html">Charifund</a>.
                                    All rights
                                    reserved.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="footer__bottom-left">
                                <ul class="footer__bottom-list justify-content-center justify-content-lg-end">
                                    <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="privacy-policy.html">Cookie Settings</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
                <img src="{{ asset('frontend_assets/images/sprade.png') }}" alt="Image" class="base-img">
            </div>
            <div class="sprade-light" data-aos="zoom-in" data-aos-duration="1000">
                <img src="{{ asset('frontend_assets/images/sprade-light.png') }}" alt="Image">
            </div>
        </footer>
        <!-- ==== / footer end ==== -->
        <!-- ==== custom cursor start ==== -->
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"></div>
        <!-- ==== / custom cursor end ==== -->
        <!-- ==== scroll to top start ==== -->
        <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
            <span></span>
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </button>
        <!-- ==== / scroll to top end ==== -->
        <!-- ==== color switcher start ==== -->

        <!-- ==== / color switcher end ==== -->
    </div>
    <!-- ==== js dependencies start ==== -->
    <!-- jquery -->
    <script src="{{ asset('frontend_assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- bootstrap five js -->
    <script src="{{ asset('frontend_assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('frontend_assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('frontend_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- swiper slider js -->
    <script src="{{ asset('frontend_assets/js/swiper-bundle.min.js') }}"></script>
    <!-- viewport js -->
    <script src="{{ asset('frontend_assets/js/viewport.jquery.js') }}"></script>
    <!-- odometer js -->
    <script src="{{ asset('frontend_assets/js/odometer.min.js') }}"></script>
    <!-- vanilla tilt js -->
    <script src="{{ asset('frontend_assets/js/vanilla-tilt.min.js') }}"></script>
    <!-- aos js -->
    <script src="{{ asset('frontend_assets/js/aos.js') }}"></script>
    <!-- splittext js -->
    <script src="{{ asset('frontend_assets/js/SplitText.min.js') }}"></script>
    <!-- scrollto js -->
    <script src="{{ asset('frontend_assets/js/ScrollToPlugin.min.js') }}"></script>
    <!-- scrolltrigger js -->
    <script src="frontend_assets/js/ScrollTrigger.min.js"></script>
    <!-- gsap js -->
    <script src="{{ asset('frontend_assets/js/gsap.min.js') }}"></script>
    <!-- ==== / js dependencies end ==== -->
    <!-- template settings js -->
    <script src="{{ asset('frontend_assets/js/template-settings.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('frontend_assets/js/custom.js') }}"></script>
</body>


<!-- Mirrored from wowtheme7.com/tf/charifund/charifund/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Sep 2025 06:34:15 GMT -->

</html>
