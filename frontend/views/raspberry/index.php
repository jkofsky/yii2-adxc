<?php
/* @var $this yii\web\View */
/* @var $announceModel common\models\Announcement */
/* @var $birthdayModel common\models\Profile */

use yii\helpers\Html;

$this->title = 'ADXC IntraNet';
?>
<style> 
    body {
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f1f94f+0,a51731+40,2e7dea+100 */
        background: #f1f94f; /* Old browsers */
        background: -moz-radial-gradient(center, ellipse cover,  #f1f94f 0%, #a51731 40%, #2e7dea 100%); /* FF3.6-15 */
        background: -webkit-radial-gradient(center, ellipse cover,  #f1f94f 0%,#a51731 40%,#2e7dea 100%); /* Chrome10-25,Safari5.1-6 */
        background: radial-gradient(ellipse at center,  #f1f94f 0%,#a51731 40%,#2e7dea 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f1f94f', endColorstr='#2e7dea',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#de47ac+0,ad1283+50,1e5799+100 */
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#b7deed+0,7ccdea+40,8c3310+70,bf6e4e+100 */
    }
    .site-index {
        margin-top: 2em;
        font-size: 1.5em;
    }
    .container {width: 90%;}
</style>
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
                        $items[] = 'FM Sales: (850) 262-6000';

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
                        $items[] = 'AM Sales: (850) 262-6139';

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