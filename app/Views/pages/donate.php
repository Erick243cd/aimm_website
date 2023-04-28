<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<!--Donate Now Start-->
<section class="donate-now">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="donate-now__left">
                    <div class="donate-now__payment-info">
                        <p class="donate-now__causes-text">Vous avez été touché par nos assistances que nous apportons
                            aux personnes en
                            pleine difficulté et vous avez résolu de faire aussi votre don pour contribuer à la cause,
                            tous les bénéficiaires vous seront reconnaissants.</p>
                        <h3 class="donate-now__title">Informations de paiement</h3>
                        <form class="donate-now__payment-info-form">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="donate-now__payment-info-input">
                                        <input type="text" placeholder="Numéro compte : 903-98393-87683" name="number">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="donate-now__payment-info-input">
                                        <input type="text" placeholder="M-PESA :+2430003039303" name="date">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="donate-now__payment-info-input">
                                        <input type="text" placeholder="AIRTEL MONEY :+2430003039303" name="code">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="donate-now__payment-info-input">
                                        <input type="text" placeholder="ORANGE MONEY :+2430003039303" name="Billing">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="donate-now__right">
                    <div class="donate-now__causes">
                        <div class="donate-now__causes-img">
                            <img src="<?= site_url() ?>public/assets/images/resources/donate-now-causes-img.jpg" alt="">
                        </div>
                        <div class="donate-now__causes-content-box">
                            <div class="donate-now__causes-content">
                                <h3 class="donate-now__causes-title">
                                    <a href="donation-details.html">Apportons de l'aide aux nécessiteux</a>
                                </h3>
                                <p class="donate-now__causes-text">Grâce à votre don, nous pouvons sauver des vies</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Donate Now End-->
<?= $this->endSection() ?>

