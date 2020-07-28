<?php
/* @var $this yii\web\View */

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;

$this->title = 'ADXC IntraNet';
?>
<div class="site-index">

    <section id="values" data-section="values">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card shadow-lg border-primary  mb-3">
                    <div class="card-header bg-adxc text-light">
                        <b><i class="fas fa-map-marker-alt"></i> Business Office</b>
                    </div>
                    <?= $this->render('_officeinfo'); ?>
                </div>
            </div>
            <?php if (!Yii::$app->user->isGuest) : ?>
                <div class="col-lg-6 col-md-12">
                    <div class="card shadow-lg border-primary mb-3">
                        <div class="card-header bg-adxc text-light">
                            <i class="far fa-comments"></i>
                            <b>Announcements for <?= date('l, F jS'); ?></b>
                        </div>
                        <?= $this->render('_announcements.php'); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section id="about" data-section="about">

        <div class="row ">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card shadow-lg border-primary mb-3">
                    <img src="<?= Yii::getAlias('@web/images/wyctlogo.png'); ?>" 
                         class="card-img-top p-1" 
                         alt="Cat Country 98.7 Logo">
                    <div class="card-body pb-0">
                        <ul class="list-unstyled mb-0">
                            <li><a href="http://catcountry987.com" class="card-link" target="_blank">
                                    <i class="fas fa-globe"></i> Website</a></li>
                            <li><a href="tel:850-430-1987" class="card-link" title="(850) 430-1987">
                                    <i class="fas fa-mobile-alt"></i> Studio Lines</a></li>
                            <li><a href="https://adxc-live.streamguys1.com/catcountry987" class="card-link" target="_blank">
                                    <i class="fas fa-play-circle"></i> Live Stream</a></li>
                            <li><a href="#" class="card-link" target="_blank">
                                    <i class="fab fa-facebook"></i> Facebook</a></li>
                            <li><a href="#" class="card-link" target="_blank">
                                    <i class="fab fa-twitter"></i> Twitter</a></li>
                            <li><a href="#" class="card-link" target="_blank">
                                    <i class="fab fa-youtube"></i> Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card shadow-lg border-danger mb-3">
                    <img class="card-img-top p-1" src="<?= Yii::getAlias('@web/images/wnrplogo.jpg'); ?>" alt="Newsradio 92.3 Logo">
                    <div class="card-body pb-0">
                        <ul class="list-unstyled mb-0">
                            <li><a href="http://newsradio1620.com" class="card-link" target="_blank">
                                    <i class="fas fa-globe"></i> Website</a></li>
                            <li><a href="tel:850-437-1620" class="card-link" title="(850) 437-1620">
                                    <i class="fas fa-mobile-alt"></i> Studio Lines</a></li>
                            <li><a href="https://adxc-live.streamguys1.com/wnrp" class="card-link" target="_blank">
                                    <i class="fas fa-play-circle"></i> Live Stream</a></li>
                            <li><a href="#" class="card-link" target="_blank">
                                    <i class="fab fa-facebook"></i> Facebook</a></li>
                            <li><a href="#" class="card-link" target="_blank">
                                    <i class="fab fa-twitter"></i> Twitter</a></li>
                            <li><a href="#" class="card-link" target="_blank">
                                    <i class="fab fa-youtube"></i> Youtube</a></li>
                            <!--li><a href="#" class="card-link" target="_blank">
                                <i class="fas fa-rss"></i> RSS Feed</a></li-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card shadow-lg border-warning mb-3">
                    <img class="card-img-top p-1" src="<?= Yii::getAlias('@web/images/webylogo.jpg'); ?>" alt="ESPN Pensacola 99.1 Logo">
                    <div class="card-body pb-0">
                        <ul class="list-unstyled mb-0">
                            <li><a href="http://espnpensacola.com" class="card-link" target="_blank">
                                    <i class="fas fa-globe"></i> Website</a></li>
                            <li><a href="tel:850-623-1330" class="card-link" title="(850) 623-1330">
                                    <i class="fas fa-mobile-alt"></i> Studio Lines</a></li>
                            <li><a href="http://mega5.fast-serv.com:8026/stream" class="card-link" target="_blank">
                                    <i class="fas fa-play-circle"></i> Live Stream</a></li>
                            <li><a href="#" class="card-link" target="_blank">
                                    <i class="fab fa-facebook"></i> Facebook</a></li>
                            <li><a href="#" class="card-link" target="_blank">
                                    <i class="fab fa-twitter"></i> Twitter</a></li>
                            <li><a href="#" class="card-link" target="_blank">
                                    <i class="fab fa-youtube"></i> Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card shadow-lg border-info mb-3">
                    <img class="card-img-top p-1" src="<?= Yii::getAlias('@web/images/playlistlogo.jpg'); ?>" alt="Pensacola's Playlist 94.5 Logo">
                    <div class="card-body pb-0">
                        <ul class="list-unstyled mb-0">
                            <li><a href="http://playlist945.com" class="card-link" target="_blank">
                                    <i class="fas fa-globe"></i> Website</a></li>
                            <li><a href="http://173.193.205.96:7246/stream" class="card-link" target="_blank">
                                    <i class="fas fa-play-circle"></i> Live Stream</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <ul class="list-unstyled list-inline" style="font-family: monospace; font-size: 1.5rem;">
            <li class="list-inline-item badge-pill badge-primary">Gr8blu3Z</li>
            <li class="list-inline-item badge-pill badge-secondary">6ooD3@tz</li>
            <li class="list-inline-item badge-pill badge-success">4img34i$</li>
            <li class="list-inline-item badge-pill badge-danger">10KeuBas</li>
            <li class="list-inline-item badge-pill badge-warning">IQ5wuGm2</li>
            <li class="list-inline-item badge-pill badge-info">N0$a1nt$</li>
            <li class="list-inline-item badge-pill badge-dark">C9IwSWmB</li>
            <li class="list-inline-item badge-pill badge-light">Eu478dhu</li>
        </ul>
    </section>
</div>
