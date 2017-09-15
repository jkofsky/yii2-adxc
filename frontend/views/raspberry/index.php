<?php
/* @var $this yii\web\View */
/* @var $announceModel common\models\Announcement */
/* @var $birthdayModel common\models\Profile */

use yii\helpers\Html;

$this->title = 'ADX Communications';
?>
<div class="site-index">

    <div class="body-content">
        <?= $this->render('//site/_announcements', [
                'announceModel' => $announceModel,
                'birthdayModel' => $birthdayModel,
            ]);
        ?>

        <div class="container-fluid">
            <div class="col-md-4">
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
                            'Traffic Hotline: (850) 262-6111',
                            'National Sales Office: (850) 262-6101',
                        ];
                        echo HTML::ul($items, ['style' => 'list-style-type: none;']);
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-warning">
                    <div class="panel-heading">Cat Country 98&bullet;7 (WYCT-FM)</div>
                    <div class="panel-body">
                        <?php
                        $items = [
                            Html::a('Web Site (www.catcountry987.com)', 'http://www.catcountry987.com/', ['target' => '_new']),
                            Html::a('Podcast Site (podcast.catcountry987.com)', 'http://podcast.catcountry987.com/', ['target' => '_new']),
                        ];

                        $items[] = '<li class="nav-divider"></li>';
                        $items[] = 'Studio Line: (850) 430-1987';
                        $items[] = 'FM Sales Manager: (850) 262-6139';

                        echo HTML::ul($items, [
                            'encode' => false,
                            'class' => 'nav',
                        ]);
                        ?>
                    </div>
                </div>
            </div>

            <div class = "col-md-4">
                <div class = "panel panel-danger">
                    <div class = "panel-heading">Newsradio 1620/92&bullet;3 (WNRP-AM/FM)</div>
                    <div class = "panel-body">
                        <?php
                        $items = [
                            Html::a('Web Site (www.newsradio1620.com)', 'http://www.newsradio1620.com/', ['target' => '_new']),
                            Html::a('Podcast Site (podcast.newsradio1620.com)', 'http://podcast.newsradio1620.com/', ['target' => '_new']),
                        ];

                        $items[] = '<li class="nav-divider"></li>';
                        $items[] = 'Studio Line: (850) 437-1620';
                        $items[] = 'AM Sales Manager: (850) 262-6139';

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