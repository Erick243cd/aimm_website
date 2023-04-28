<?= $this->extend("layouts/app") ?>
<?= $this->section("content") ?>
<!--Contact Page Start-->
<section class="contact-page">

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-page__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Contactez-nous maintenant</span>
                        <h2 class="section-title__title">Ecrivez-nous en remplissant <br> ce formulaire</h2>
                    </div>
                    <div class="contact-page__form">
                        <form action="#"
                              class="comment-one__form contact-form-validated"
                              novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Votre nom" name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Adresse mail" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Téléphone" name="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Objet" name="Object">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="message" placeholder="Ecrire un message"></textarea>
                                    </div>
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">Envoyer le message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="contact-page__right">
                    <div class="contact-page__img">
                        <img src="<?= site_url() ?>public/assets/images/resources/donation-details-img-1.jpg" alt="">
                        <div class="contact-page__img-shape">
                            <img src="<?= site_url() ?>public/assets/images/shapes/contact-page-img-shape.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12">
                    <div style="color: black;!important;">
                        <h4 class="contact-info__title">Contacts</h4>
                        <p class="">
                            <a href="" class=""><?= $contacts->email ?></a><br>
                            <a href="" class=""><?= $contacts->phone ?></a><br>
                            <a href="https://goo.gl/maps/qLig7GQsaa74m3Am7" target="_blank"><?= $contacts->address ?></a><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--Contact Page End-->

<!--Contact page Google Map Start-->
<section class="contact-page-google-map">
    <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125035.4477567094!2d27.418317272453017!3d-11.669039197571289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19723f113453d9c9%3A0x5fed947228aa42f8!2sAfrinewsoft!5e0!3m2!1sfr!2scd!4v1666038964630!5m2!1sfr!2scd"
            class="contact-page-google-map__one" allowfullscreen></iframe>

</section>
<!--Google Map End-->
<?= $this->endSection() ?>
