<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<!--About One Start-->
<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-one__img-box">
                        <div class="about-one__img">
                            <img src="<?= site_url() ?>public/assets/images/resources/about-one-img.jpg" alt="">
                        </div>
                        <div class="about-one__small-img wow zoomIn animated animated" data-wow-delay="500ms"
                             data-wow-duration="2500ms">
                            <img src="<?= site_url() ?>public/assets/images/resources/causes-1-4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="about-one__right-content">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">à propos de nous</span>
                            <h2 class="section-title__title">Nous pouvons sauver des vies grâce à votre aide.</h2>
                        </div>
                        <p class="about-one__text">
                            Assistance Internationale Mont Morija est une Organisation Non Gouvernementale
                            basée en République Démocratique du Congo.
                            Nous sommes engagés dans l'aide humanitaire et plus précisément dans :
                        </p>
                        <ul class="list-unstyled about-one__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-comment"></span>
                                </div>
                                <div class="text">
                                    <h4>La lutte contre l'analphabétisme.</h4>
                                    <p>Améliorer les conditions de vie des enfants pauvres de la RDC, contribuer à leur
                                        éducation...</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-comment"></span>
                                </div>
                                <div class="text">
                                    <h4>L'assistance sociale.</h4>
                                    <p>Apporter de l'aide aux orphelins, enfants de la rue, veuves, de déplacés de
                                        guerre,
                                        lutte contre la violence sexuelle faite à la femme...</p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-one__bottom-video-box">
                            <div class="about-one__btn-box">
                                <a href="<?= site_url('about') ?>" class="thm-btn about-one__btn">Voir plus...</a>
                            </div>
                            <div class="about-one__video-link">
                                <a title="Voir nos actions en vidéo" href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                   class="video-popup">
                                    <div class="about-one__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->

<!--Feature One Start-->
<section class="feature-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                <!--Feature One Single-->
                <div class="feature-one__single">
                    <div class="feature-one__top">
                        <div class="feature-one__icon">
                            <span class="icon-help"></span>
                        </div>
                        <h3 class="feature-one__title"><a href="about.html">Lutte contre l'an alphabétisation</a></h3>
                    </div>
                    <p class="feature-one__text">Par la création des structures éducatives et sanitaires et centres de
                        formation.</p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <!--Feature One Single-->
                <div class="feature-one__single">
                    <div class="feature-one__top">
                        <div class="feature-one__icon">
                            <span class="icon-donation-1"></span>
                        </div>
                        <h3 class="feature-one__title"><a href="<?= site_url('about') ?>">Lutte contre la pauvreté</a>
                        </h3>
                    </div>
                    <p class="feature-one__text">Encadrement et renforcement des capacités génératrices de revenus dans
                        les milieux ruraux. </p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                <!--Feature One Single-->
                <div class="feature-one__single">
                    <div class="feature-one__top">
                        <div class="feature-one__icon">
                            <span class="icon-plus"></span>
                        </div>
                        <h3 class="feature-one__title"><a href="<?= site_url('about') ?>">Lutte contre les maladies</a>
                        </h3>
                    </div>
                    <p class="feature-one__text">Sensibilisation sur la lutte congre les maladies endémiques et
                        épidémiologiques.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Feature One Start-->

<!--Causes One Start-->
<section class="causes-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Quelques activités réalisées</span>
            <h2 class="section-title__title">Apportons de l'aide<br> à notre prochain.</h2>
        </div>
        <div class="row">
            <?php $delay = 0;
            foreach ($posts as $post): ?>
                <?php $delay += 100 ?>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="<?= $delay ?>ms">
                    <!--Causes One Single-->
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="<?= site_url() ?>public/assets/es_admin/images/posts/<?= $post->picture?>"
                                 alt="<?= altData() ?>">
                        </div>
                        <div class="causes-one__content-box">
                            <div class="causes-one__donate-btn-box">
                                <a href="<?= site_url('donate') ?>" class="thm-btn causes-one__donate-btn">Faites-nous
                                    un don</a>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="<?= site_url('post-detail/'.$post->slug)?>"><?= $post->title?></a>
                                </h3>
                                <div class="causes-one__btn-box">
                                    <a href="<?= site_url('post-detail/'.$post->slug)?>" class="causes-one__read-more">Voir les détails <span
                                                class="icon-plus-sign"></span></a>
                                </div>
                            </div>
                            <div class="causes-one__bottom">
                                <ul class="list-unstyled causes-one__list">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <div class="text">
                                            <p><?= date('D M, Y', strtotime($post->updated_at))?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-back-in-time"></span>
                                        </div>
                                        <div class="text">
                                            <p><?= date('h:s: i', strtotime($post->updated_at))?></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--Causes One End-->


<!--video One Start-->
<section class="video-one">
    <div class="video-one__content-box">
        <div class="video-one-shape sauare-mover"></div>
        <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
             style="background-image: url(<?= site_url()?>public/assets/images/backgrounds/video-one-bg.jpg);"></div>
        <div class="container">
            <div class="video-one__inner">
                <div class="video-one__video-link">
                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                        <div class="video-one__video-icon">
                            <span class="fa fa-play"></span>
                            <i class="ripple"></i>
                        </div>
                    </a>
                </div>
                <h3 class="video-one__title">Regarder la vidéo <br> sur notre assistance aux enfants.</h3>
                <p class="video-one__text">Visitez notre chaine Youtube pour voir <br> les vidéos sur l'ensemble
                de nos actions d'assistance humanitaire</p>
                <a href="https://youtube.com" class="thm-btn video-one__btn" target="_blank">Plus de vidéos</a>
            </div>
        </div>
    </div>
</section>
<!--video One End-->

<?= $this->endSection() ?>
