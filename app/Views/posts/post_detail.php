<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<!--Blog Details Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <img src="<?= site_url() ?>public/assets/es_admin/images/posts/<?= $post->picture ?>"
                             alt="<?= altData() ?>">
                        <div class="blog-details__date">
                            <p><?= date('d', strtotime($post->updated_at)) ?>
                                <br> <?= date('M', strtotime($post->updated_at)) ?></p>
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <h3 class="blog-details__title"><?= $post->title ?></h3>
                        <p class="blog-details__text-1"> <?= $post->description ?></p>
                    </div>
                    <div class="blog-details__bottom">
                        <div class="blog-details__social-list">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">

                        <form action="<?= site_url('search-activities') ?>" class="sidebar__search-form" method="post">
                            <?= csrf_field() ?>
                            <input type="search" placeholder="Rechercher ici" name="key" required>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Autres activités</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <?php foreach ($posts as $item): ?>
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="<?= site_url() ?>public/assets/es_admin/images/posts/<?= $item->picture ?>"
                                             alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                            class="far fa-user-circle"></i> ONG AIMM</span>
                                            <a href="<?= site_url('post-detail/' . $item->slug) ?>"><?= $item->title ?></a>
                                        </h3>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Details End-->
<?= $this->endSection() ?>
