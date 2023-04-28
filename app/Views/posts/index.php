<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<!--Recent Event Start-->
<section class="recent-event">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Nos activités récentes</span>
            <h2 class="section-title__title"><?= $requests ?? "Nos sommes très actifs <br> Sur le terrain." ?></h2>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                <!--Recent Event Single-->
                <?php foreach ($posts as $item): ?>
                    <div class="recent-event__single">
                        <div class="recent-event__img">
                            <img src="<?= site_url() ?>public/assets/es_admin/images/posts/<?= $item->picture ?>"
                                 alt="<?= altData() ?>">
                            <div class="recent-event__btn-box">
                                <a href="<?= site_url('post-detail/' . $item->slug) ?>"
                                   class="thm-btn recent-event__btn">Détails</a>
                            </div>
                        </div>
                        <div class="recent-event__content">
                            <ul class="list-unstyled recent-event__meta">
                                <li>
                                    <p>
                                        <span class="icon-calendar"></span> <?= date('d M Y', strtotime($item->updated_at)) ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="icon-back-in-time"></span> <?= date('h:i', strtotime($item->updated_at)) ?>
                                    </p>
                                </li>
                            </ul>
                            <h3 class="recent-event__title"><a
                                        href="<?= site_url('post-detail/' . $item->slug) ?>"><?= $item->title ?></a>
                            </h3>
                            <p class="recent-event__text"><?= character_limiter($item->description, 400) ?>.</p>
                        </div>
                    </div>
                    <!--Recent Event Single-->
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>
<!--Recent Event End-->

<?= $this->endSection() ?>
