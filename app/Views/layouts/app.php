<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= $title ?? "ONG Assistance Internationale Mont Morija" ?></title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?= site_url() ?>public/assets/images/favicons/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?= site_url() ?>public/assets/images/favicons/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?= site_url() ?>public/assets/images/favicons/favicon-16x16.png"/>
    <link rel="manifest" href="<?= site_url() ?>public/assets/images/favicons/site.webmanifest"/>
    <meta name="description" content="ONG Assistance Internationale Mont Morija"/>

    <!-- fonts -->
    <link
            href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
            rel="stylesheet">

    <link
            href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
            rel="stylesheet">

    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/animate/animate.min.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/animate/custom-animate.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/jarallax/jarallax.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/nouislider/nouislider.min.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/nouislider/nouislider.pips.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/odometer/odometer.min.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/swiper/swiper.min.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/sopot-icons/style.css">
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/tiny-slider/tiny-slider.min.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/reey-font/stylesheet.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/owl-carousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/owl-carousel/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/bxslider/jquery.bxslider.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/bootstrap-select/css/bootstrap-select.min.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/vegas/vegas.min.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/vendors/timepicker/timePicker.css"/>

    <!-- template styles -->
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/css/sopot.css"/>
    <link rel="stylesheet" href="<?= site_url() ?>public/assets/css/sopot-responsive.css"/>
</head>

<body>
<div class="preloader">
    <img class="preloader__image" width="60" src="<?= site_url() ?>public/assets/images/loader.png" alt=""/>
</div>
<!-- /.preloader -->
<div class="page-wrapper">
    <header class="main-header clearfix">
        <div class="main-header__top clearfix">
            <div class="container clearfix">
                <div class="main-header__top-inner clearfix">
                    <div class="main-header__top-left">
                        <ul class="list-unstyled main-header__top-address">
                            <li>
                                <div class="icon">
                                    <span class="icon-call"></span>
                                </div>
                                <div class="text">
                                    <p><a href="tel:5204654544">+5204654544</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:demo@example.com">demo@example.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-place"></span>
                                </div>
                                <div class="text">
                                    <p>24/21, 2nd Rangpur, Sapla</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <ul class="list-unstyled main-header__top-right-content">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Help You</a></li>
                            <li><a href="#" class="search-toggler"> <i class="fa fa-search"></i> Search</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu clearfix">
            <div class="container clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="main-menu-wrapper__left">
                        <div class="main-menu-wrapper__logo">
                            <a href="index.html"><img src="assets/images/resources/logo-1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__main-menu">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown current">
                                    <a href="index.html">Home</a>
                                    <ul>
                                        <li>
                                            <a href="index.html">Home One</a>
                                        </li>
                                        <li><a href="index2.html">Home Two</a></li>
                                        <li><a href="index3.html">Home Three</a></li>
                                        <li class="dropdown">
                                            <a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index.html">Header One</a></li>
                                                <li><a href="index2.html">Header Two</a></li>
                                                <li><a href="index3.html">Header Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="dropdown">
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                        <li><a href="projects.html">Project</a></li>
                                        <li><a href="project-details.html">Project Details</a></li>
                                        <li><a href="testimonials.html">Testimonial</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Donation</a>
                                    <ul>
                                        <li><a href="donation.html">Donation</a></li>
                                        <li><a href="donation-list.html">Donation List</a></li>
                                        <li><a href="donation-details.html">Donation Details</a></li>
                                        <li><a href="donate-now.html">Donate Now</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="events.html">Events</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-v-1.html">Blog V-1</a></li>
                                        <li><a href="blog-v-2.html">Blog V-2</a></li>
                                        <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <a href="donate-now.html" class="thm-btn main-header__btn">Donate Now</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->



    <?= $this->renderSection("content")?>

    <!--Site Footer Start-->
    <footer class="site-footer-one">
        <div class="site-footer-one__top">
            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget-one__about">
                            <div class="footer-widget-one__about-logo">
                                <a href="index.html"><img src="assets/images/resources/footer-logo.png" alt=""></a>
                            </div>
                            <p class="footer-widget-one__about-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam iaculis lorem augue, at
                                dapibus quam aliquet ex...
                            </p>
                            <ul class="list-unstyled footer-widget-one__list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-place"></span>
                                    </div>
                                    <div class="text">
                                        <p>13/A, Miranda Halim City.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-envelope"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:demo@example.com">demo@example.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:09969569535">099 695 695 35</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget-one__gallery clearfix">
                            <h3 class="footer-widget-one__title">Gallery</h3>
                            <ul class="footer-widget-one__gallery-list list-unstyled clearfix">
                                <li>
                                    <div class="footer-widget-one__gallery-img">
                                        <img src="assets/images/resources/footer-widget-one-gallery-1.jpg" alt="">
                                        <a href="project-details.html"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget-one__gallery-img">
                                        <img src="assets/images/resources/footer-widget-one-gallery-2.jpg" alt="">
                                        <a href="project-details.html"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget-one__gallery-img">
                                        <img src="assets/images/resources/footer-widget-one-gallery-3.jpg" alt="">
                                        <a href="project-details.html"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget-one__gallery-img">
                                        <img src="assets/images/resources/footer-widget-one-gallery-4.jpg" alt="">
                                        <a href="project-details.html"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget-one__gallery-img">
                                        <img src="assets/images/resources/footer-widget-one-gallery-5.jpg" alt="">
                                        <a href="project-details.html"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget-one__gallery-img">
                                        <img src="assets/images/resources/footer-widget-one-gallery-6.jpg" alt="">
                                        <a href="project-details.html"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget-one__gallery-img">
                                        <img src="assets/images/resources/footer-widget-one-gallery-7.jpg" alt="">
                                        <a href="project-details.html"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget-one__gallery-img">
                                        <img src="assets/images/resources/footer-widget-one-gallery-8.jpg" alt="">
                                        <a href="project-details.html"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget-one__gallery-img">
                                        <img src="assets/images/resources/footer-widget-one-gallery-9.jpg" alt="">
                                        <a href="project-details.html"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget-one__latest-works clearfix">
                            <h3 class="footer-widget-one__title">Latest News</h3>
                            <ul class="footer-widget-one__latest-works-list list-unstyled clearfix">
                                <li>
                                    <div class="footer-widget-one__latest-works-content">
                                        <h4 class="footer-widget-one__latest-works-title">
                                            <a href="blog-details.html">Change your Life Through Education</a>
                                        </h4>
                                        <p class="footer-widget-one__latest-works-date">
                                            July 29, 20222
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget-one__latest-works-content">
                                        <h4 class="footer-widget-one__latest-works-title">
                                            <a href="blog-details.html">Donate your woolens this winter</a>
                                        </h4>
                                        <p class="footer-widget-one__latest-works-date">
                                            July 29, 20222
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__column footer-widget-one__twitter-feed clearfix">
                            <h3 class="footer-widget-one__title">Twitter Feed</h3>
                            <div class="owl-carousel owl-theme thm-owl__carousel footer-widget-one__twitter-feed-content"
                                 data-owl-options='{
                                    "loop": true,
                                    "autoplay": true,
                                    "margin": 30,
                                    "nav": false,
                                    "dots": true,
                                    "smartSpeed": 500,
                                    "autoplayTimeout": 10000,
                                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                    "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "991": {
                                            "items": 1
                                        },
                                        "1200": {
                                            "items": 1
                                        }
                                    }
                                }'>
                                <div class="footer-widget-one__twitter-feed-single">
                                    <p class="footer-widget-one__twitter-feed-text">Lorem ipsum is simply free text
                                        dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt <a href="#">http://t.twitter.com</a></p>
                                    <div class="footer-widget-one__twitter-feed-bottom">
                                        <div class="footer-widget-one__twitter-feed-icon">
                                            <span class="fab fa-twitter"></span>
                                        </div>
                                        <div class="footer-widget-one__twitter-feed-details">
                                            <h5 class="footer-widget-one__twitter-feed-name">John Smith
                                                <span>@unicktheme</span></h5>
                                            <p class="footer-widget-one__twitter-feed-time">18 Hours Ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-widget-one__twitter-feed-single">
                                    <p class="footer-widget-one__twitter-feed-text">Lorem ipsum is simply free text
                                        dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt <a href="#">http://t.twitter.com</a></p>
                                    <div class="footer-widget-one__twitter-feed-bottom">
                                        <div class="footer-widget-one__twitter-feed-icon">
                                            <span class="fab fa-twitter"></span>
                                        </div>
                                        <div class="footer-widget-one__twitter-feed-details">
                                            <h5 class="footer-widget-one__twitter-feed-name">Kavin Smith
                                                <span>@unicktheme</span></h5>
                                            <p class="footer-widget-one__twitter-feed-time">18 Hours Ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-widget-one__twitter-feed-single">
                                    <p class="footer-widget-one__twitter-feed-text">Lorem ipsum is simply free text
                                        dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt <a href="#">http://t.twitter.com</a></p>
                                    <div class="footer-widget-one__twitter-feed-bottom">
                                        <div class="footer-widget-one__twitter-feed-icon">
                                            <span class="fab fa-twitter"></span>
                                        </div>
                                        <div class="footer-widget-one__twitter-feed-details">
                                            <h5 class="footer-widget-one__twitter-feed-name">Sara Albart
                                                <span>@unicktheme</span></h5>
                                            <p class="footer-widget-one__twitter-feed-time">18 Hours Ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="container">
                <div class="site-footer__bottom-inner">
                    <p class="site-footer__bottom-text">© 2022 Copyright by <a
                                href="https://themeforest.net/user/unicktheme">unicktheme</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="assets/images/resources/footer-logo.png"
                                                              width="155" alt=""/></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@sopot.com">needhelp@sopot.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..."/>
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-search-interface-symbol"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="<?= site_url() ?>public/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/jarallax/jarallax.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/nouislider/nouislider.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/odometer/odometer.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/swiper/swiper.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/wnumb/wNumb.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/wow/wow.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/isotope/isotope.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/countdown/countdown.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/vegas/vegas.min.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="<?= site_url() ?>public/assets/vendors/timepicker/timePicker.js"></script>

<script src="<?= site_url() ?>public/assets/js/sopot.js"></script>
</body>
</html>