<?= $this->extend("layouts/app") ?>
<?= $this->section("content") ?>
<!--Team Details Start-->
<section class="team-details">
    <div class="container">
        <div class="team-details__inner">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="team-details__top-left">
                        <div class="team-details__top-img">
                            <img src="<?= site_url() ?>public/assets/images/team/<?= $contacts->pcaPicture ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="team-details__top-right">
                        <div class="team-details__top-content">
                            <p class="team-details__top-title">PCA DE L'ONG</p>
                            <h3 class="team-details__top-name"><?= $contacts->pcaName ?></h3>
                            <div class="team-details__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <p class="team-details__top-text-1">Je suis attiré par la population en souffrance, et
                                ensemble avec mon équipe,
                                nous leur apportons du secours.</p>
                            <p class="team-details__top-text-2">Assistance Internationale Mont Morija est une
                                Organisation Non Gouvernementale engagée basée en République Démocratique du Congo. Nous
                                sommes engagés dans l'aide humanitaire.</p>
                            <p class="team-details__top-text-3">Nous avons comme objectifs :</p>

                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-comment"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Diminuer la pauvreté dans les zones rurales.</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-comment"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Lutte contre l'analphabétisation par la création des structures et centres
                                            de formation.</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-comment"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Participer activement dans la lutte contre les maladies endémiques et
                                            épidémiques, nous citons : le paludisme, le choléra, le VIH/SIDA.</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-comment"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Lutte contre la dépravation de mœurs.</h4>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <span class="icon-comment"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Encadrer les enfants perdus et abandonnés</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-comment"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Renforcer les capacités génératrices de revenus</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-comment"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Promouvoir l'agriculture, la pêche et l'élevage</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-comment"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Améliorer les conditions de vie des enfants pauvres de la RDC et contribuer
                                            à leur Education</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-comment"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Assistance sociale à l'orphelinat, enfants de la rue, déplacés de
                                            guerre </h4>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team Details End-->

<!--Join Team End-->
<section class="join-team">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="join-team__Left">
                    <div class="join-team__images">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="join-team__img-single">
                                    <img src="<?= site_url() ?>public/assets/images/team/team-1-2-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="join-team__img-single">
                                    <img src="<?= site_url() ?>public/assets/images/team/team-1-2-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="join-team__content">
                        <h3 class="join-team__title">Rejoignez notre équipe</h3>
                        <p class="join-team__text">Nous formons les membres dans le domaine d'intervention. Si vous êtes
                            motivés
                            à apporter votre secours par votre aide humanitaire, nous vous invitons à nous rejoindre en
                            nous écrivant au formulaire.</p>
                        <ul class="list-unstyled join-team__points">
                            <li>CONDITIONS.</li>
                            <li>Etre de nationalité congolaise.</li>
                            <li>Avoir au moins 18 ans.</li>
                            <li>Etre résident de l'un de 26 provinces de la RDC.</li>
                        </ul>
                        <div class="join-team__contact">
                            <p>
                                <a href="tel:<?= $contacts->phone ?>"
                                   class="join-team__phone"><?= $contacts->phone ?></a>
                                <a href="mailto:<?= $contacts->email ?>"
                                   class="join-team__email"><?= $contacts->email ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="join-team__right">
                    <form class="join-team__form">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="join-team__input">
                                    <input type="text" placeholder="Votre nom" name="name">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="join-team__input">
                                    <input type="email" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="join-team__input">
                                    <input type="text" placeholder="Téléphone" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="join-team__input">
                                    <input type="text" placeholder="Adresse" name="Address">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="join-team__input">
                                    <input type="text" placeholder="Date de naissance" name="date" id="datepicker">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="join-team__input">
                                    <input type="text" placeholder="Occupation" name="Occupation">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="join-team__input join-team__message-box">
                                    <textarea name="message" placeholder="Votre motivation"></textarea>
                                </div>
                                <div class="join-team__btn-box">
                                    <button type="submit" class="thm-btn join-team__btn">Envoyer votre demande
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Join Team End-->
<?= $this->endSection() ?>
