<?php
/* @var $this yii\web\View */
/* @var $announceModel common\models\Announcement */
/* @var $birthdayModel common\models\Profile */

use yii\helpers\Html;

$this->title = 'ADXC IntraNet';
?>
<div class="site-index">

    <div class="container-fluid">
        <div class="row">
            <?php
            if (!Yii::$app->user->isGuest) {
                echo $this->render('_announcements', [
                    'announceModel' => $announceModel,
                    'birthdayModel' => $birthdayModel,
                ]);
            }
            ?>
        </div>

        <div class="row">
            <?= $this->render('_officeinfo'); ?>
        </div>

        <div class="row equal-panels">
            <div class="col-md-6">
                <div class="panel panel-adxc">
                    <div class="panel-heading">Cat Country 98&bullet;7 (WYCT-FM)</div>
                    <div class="panel-body">
                        <?php
                        $items = [
                            Html::a('CatCountry Web Site', 'http://www.catcountry987.com/', ['target' => '_new']),
                            Html::a('CatCountry Podcast Site', 'http://podcast.catcountry987.com/', ['target' => '_new']),
                        ];
                        if (!Yii::$app->user->isGuest) {
                            $items[] = Html::a('WYCT Web Mail Login', 'http://webmail.catcountry987.com/imp/login.php', ['target' => '_new']);
                        }

                        $items[] = '<li class="nav-divider"></li>';
                        $items[] = 'Listener Line: (850) 430-1987';
                        $items[] = 'Sales Office: (850) 262-6139';

                        if (!Yii::$app->user->isGuest) {
                            $items[] = '<li class="nav-divider"></li>';
                            $items[] = 'Studio (Hotline): (850) 262-6###';
                            $items[] = 'Studio (On-Air): (850) 262-6###';
                            $items[] = 'Studio (Talent): (850) 262-6###';
                        }
                        echo HTML::ul($items, [
                            'encode' => false,
                            'class' => 'nav',
                        ]);
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class = "panel panel-adxc">
                    <div class = "panel-heading">ESPN Pensacola HD2/94&bullet;5 (WYCT-HD2/FM)</div>
                    <div class = "panel-body">
                        <?php
                        $items = [
                            Html::a('ESPN Pensacola Web Site', 'http://www.espnpensacola.com/', ['target' => '_new']),
                            Html::a('ESPN Pensacola Podcast Site', 'http://podcast.espnpensacola.com/', ['target' => '_new']),
                        ];
                        if (!Yii::$app->user->isGuest) {
                            $items[] = Html::a('ESPN Web Mail Login', 'http://webmail.espnpensacola.com/imp/login.php', ['target' => '_new']);
                        }

                        $items[] = '<li class="nav-divider"></li>';
                        $items[] = 'Listener Line: (850) 437-1620';
                        $items[] = 'Sales Office: (850) 262-6140';

                        if (!Yii::$app->user->isGuest) {
                            $items[] = '<li class="nav-divider"></li>';
                            $items[] = 'Studio (Hotline): (850) 262-6###';
                            $items[] = 'Studio (On-Air): (850) 262-6###';
                            $items[] = 'Studio (Talent): (850) 262-6###';
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

        <div class="row equal-panels">
            <div class="col-md-6">
                <div class = "panel panel-adxc">
                    <div class = "panel-heading">News Radio 1620/92&bullet;3 (WNRP-AM/FM)</div>
                    <div class = "panel-body">
                        <?php
                        $items = [
                            Html::a('News Radio Web Site', 'http://www.newsradio1620.com/', ['target' => '_new']),
                            Html::a('News Radio Podcast Site', 'http://podcast.newsradio1620.com/', ['target' => '_new']),
                        ];
                        if (!Yii::$app->user->isGuest) {
                            $items[] = Html::a('WNRP Web Mail Login', 'http://webmail.newsradio1620.com/imp/login.php', ['target' => '_new']);
                        }

                        $items[] = '<li class="nav-divider"></li>';
                        $items[] = 'Listener Line: (850) 437-1620';
                        $items[] = 'Sales Office: (850) 262-6140';

                        if (!Yii::$app->user->isGuest) {
                            $items[] = '<li class="nav-divider"></li>';
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

            <div class="col-md-6">
                <div class = "panel panel-adxc">
                    <div class = "panel-heading">Talk Radio 1330/92&bullet;3 (WEBY-AM/FM)</div>
                    <div class = "panel-body">
                        <?php
                        $items = [
                            Html::a('Talk Radio Web Site', 'http://www.1330weby.com/', ['target' => '_new']),
                            Html::a('Talk Radio Podcast Site', 'http://podcast.1330weby.com/', ['target' => '_new']),
                        ];
                        if (!Yii::$app->user->isGuest) {
                            $items[] = Html::a('WEBY Web Mail Login', 'http://webmail.newsradio1620.com/imp/login.php', ['target' => '_new']);
                        }

                        $items[] = '<li class="nav-divider"></li>';
                        $items[] = 'Listener Line: (850) 623-1330';
                        $items[] = 'Sales Office: (850) 262-6140';

                        if (!Yii::$app->user->isGuest) {
                            $items[] = '<li class="nav-divider"></li>';
                            $items[] = 'Studio (Hotline): (850) 262-6088';
                            $items[] = 'Studio (On-Air): (850) 262-6###';
                            $items[] = 'Studio (Talent): (850) 262-6###';
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