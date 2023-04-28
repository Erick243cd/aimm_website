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
    <link rel="stylesheet"
          href="<?= site_url() ?>public/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css"/>
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
                                    <p><a href="tel:<?= $contacts->phone ?>"><?= $contacts->phone ?></a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:<?= $contacts->email ?>"><?= $contacts->email ?></a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-place"></span>
                                </div>
                                <div class="text">
                                    <p><?= character_limiter($contacts->address, 30) ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <ul class="list-unstyled main-header__top-right-content">
                            <?php if (isset($user_data)): ?>
                                <li><a onclick="return confirm('Etes-vous sûr de vous déconnecter ?')"
                                       href="<?= site_url('logout') ?>">Logout</a></li>
                                <li><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
                            <?php else: ?>
                                <li><a href="<?= site_url('login') ?>">Login</a></li>
                            <?php endif; ?>
                            <li><a href="#" class="search-toggler"> <i class="fa fa-search"></i> Recherche</a></li>
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
                            <a href="<?= $page == 'home' ? '#' : site_url() ?>"><img
                                        src="<?= site_url() ?>public/assets/images/resources/logo-N.png" alt=""></a>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__main-menu">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="<?= $page == 'home' ? "current" : "" ?>"><a
                                            href="<?= $page == 'home' ? '#' : site_url() ?>">Accueil</a></li>
                                <li class="<?= $page == 'about' ? "current" : "" ?>"><a
                                            href="<?= $page == 'about' ? '#' : site_url('about') ?>">A propos de
                                        nous</a></li>
                                <li class="<?= $page == 'activities' ? "current" : "" ?>"><a
                                            href="<?= $page == 'activities' ? '#' : site_url('activities') ?>">Activités</a>
                                </li>
                                <li class="<?= $page == 'contact' ? "current" : "" ?>"><a
                                            href="<?= $page == 'contact' ? '#' : site_url('contact') ?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <a href="<?= $page == 'donate' ? '#' : site_url('donate') ?>" class="thm-btn main-header__btn">FAITES-NOUS
                            UN DON</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->


    <?= $this->renderSection("content") ?>

    <!--Site Footer Start-->
    <footer class="site-footer-one">
        <div class="site-footer-one__top">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget-one__about">
                            <div class="footer-widget-one__about-logo">
                                <a href="<?= $page == 'home' ? "#" : site_url() ?>"><img
                                            src="<?= site_url() ?>public/assets/images/resources/logo-footer.png"
                                            alt="<?= altData() ?>"></a>
                            </div>
                            <p class="footer-widget-one__about-text">
                                Assistance Internationale Mont Morija A.I.M.M. en sigle est une ONG ayant comme Objectif
                                de contribuer
                                au développement de la population locale avec la participation des jeunes.
                            </p>
                            <ul class="list-unstyled footer-widget-one__list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-place"></span>
                                    </div>
                                    <div class="text">
                                        <p><?= $contacts->address ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-envelope"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:<?= $contacts->email ?>"><?= $contacts->email ?></a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:<?= $contacts->phone ?>"><?= $contacts->phone ?></a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget-one__latest-works clearfix">
                            <h3 class="footer-widget-one__title">Activités récentes</h3>
                            <ul class="footer-widget-one__latest-works-list list-unstyled clearfix">
                                <?php foreach ($posts as $post): ?>
                                    <li>
                                        <div class="footer-widget-one__latest-works-content">
                                            <h4 class="footer-widget-one__latest-works-title">
                                                <a href="<?= site_url('post-detail/' . $post->slug) ?>"><?= $post->title ?></a>
                                            </h4>
                                            <p class="footer-widget-one__latest-works-date">
                                                <?= date('M d, Y', strtotime($post->updated_at)) ?>
                                            </p>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="container">
                <div class="site-footer__bottom-inner">
                    <p class="site-footer__bottom-text">© <?= date('Y') ?> AIMM, Tous droits réservés, by <a
                                href="https://afrinewsoft.com" target="_blank">Afrinewsoft</a></p>
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
            <a href="<?= $page == 'home' ? "#" : site_url() ?>" aria-label="<?= altData() ?>">
                <img src="<?= site_url() ?>public/assets/images/resources/logo-N.png" width="155"
                     alt="<?= altData() ?>"/></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:<?= $contacts->email ?>"><?= $contacts->email ?></a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:<?= $contacts->phone ?>"><?= $contacts->phone ?></a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-linkedin"></a>
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
        <form action="<?= site_url('search-activities')?>"method="post">
            <label for="search" class="sr-only">Rechercher ici</label><!-- /.sr-only -->
            <input type="text" id="search" required name="key" placeholder="Rechercher ici..."/>
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