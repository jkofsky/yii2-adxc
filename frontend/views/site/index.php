<?php
/* @var $this yii\web\View */
/* @var $announceModel common\models\Announcement */

use yii\helpers\Html;

$this->title = 'ADXC IntraNet';
?>
<div class="site-index">

    <div class="body-content">
        <?php
        if (!Yii::$app->user->isGuest) {
            echo $this->render('_announcements', [
                'announceModel' => $announceModel,
            ]);
        }
        ?>

        <div class="row">
            <div class="col-lg-4"'>
                <div class="panel panel-info">
                    <div class="panel-heading">Business Office</div>
                    <div class="panel-body">
                        <address>
                            <b>ADX Communications of Escambia, LLC</b><br />
                            7251 Plantation Road<br />
                            Pensacola, Florida 32514
                        </address>
                        <?php
                        $items = [
                            'Voice: (850) 494-2800',
                            'FAX: (850) 494-0778',
                            'Newsroom: (850) 262-6119',
                            'Traffic Desk: (850) 262-6111',
                            'National Sales Office: (850) 262-6101',
                        ];
                        echo HTML::ul($items, ['style' => 'list-style-type: none;']);
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-warning">
                    <div class="panel-heading">Cat Country 98&bullet;7 (WYCT-FM)</div>
                    <div class="panel-body">
                        <?php
                        $items = [
                            Html::a('CatCountry Web Site', 'http://www.catcountry987.com/', ['target' => '_new']),
                            Html::a('CatCountry Podcast Site', 'http://podcast.catcountry987.com/', ['target' => '_new']),
                        ];
                        if (!Yii::$app->user->isGuest) {
                            $items[] = Html::a('CatCountry Web Mail Login', 'http://webmail.catcountry987.com/imp/login.php', ['target' => '_new']);
                        }

                        $items[] = '<li class="nav-divider"></li>';
                        $items[] = 'Studio Line: (850) 430-1987';
                        $items[] = 'FM Sales: (850) 262-6000';

                        if (!Yii::$app->user->isGuest) {
                            $items[] = 'Studio (Hotline): (850) 262-61##';
                            $items[] = 'Studio (On-Air): (850) 262-61##';
                            $items[] = 'Studio (Talent): (850) 262-61##';
                        }
                        echo HTML::ul($items, [
                            'encode' => false,
                            'class' => 'nav',
                        ]);
                        ?>
                    </div>
                </div>
            </div>

            <div class = "col-lg-4">
                <div class = "panel panel-danger">
                    <div class = "panel-heading">Newsradio 1620/92&bullet;3 (WNRP-AM/FM)</div>
                    <div class = "panel-body">
                        <?php
                        $items = [
                            Html::a('Newsradio Web Site', 'http://www.newsradio1620.com/', ['target' => '_new']),
                            Html::a('Newsradio Podcast Site', 'http://podcast.newsradio1620.com/', ['target' => '_new']),
                        ];
                        if (!Yii::$app->user->isGuest) {
                            $items[] = Html::a('Newsradio Web Mail Login', 'http://webmail.newsradio1620.com/imp/login.php', ['target' => '_new']);
                        }

                        $items[] = '<li class="nav-divider"></li>';
                        $items[] = 'Studio Line: (850) 437-1620';
                        $items[] = 'AM Sales: (850) 262-6139';

                        if (!Yii::$app->user->isGuest) {
                            $items[] = 'Studio (Hotline): (850) 262-6131';
                            $items[] = 'Studio (On-Air): (850) 262-6132';
                            $items[] = 'Studio (Talent): (850) 262-6125';
                            $items[] = 'Studio (Prod Booth): (850) 262-6154';
                        }
                        echo HTML::ul($items, [
                            'encode' => false,
                            'class' => 'nav',
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>