<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;
use common\components\PodcastFeedParser;
use yii\bootstrap\Collapse;

$this->title = 'Podcasts';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Podcast Sites Status</h1>

<p>Local updating of the Podcast sites has not been implemented yet.
    You will need to go the the main sites.</p>

<div class="row">
    <div class="col-md-12">
        <?php
        $wnrpContent = $wyctContent = '';

        $feedItems = PodcastFeedParser::parse("http://podcast.newsradio1620.com/rss.xml.html");
        foreach ($feedItems as $node) {
            $wnrpContent .= $this->render('_podcastItem', ['node' => $node]);
        }

        $feedItems = PodcastFeedParser::parse("http://podcast.catcountry987.com/rss.xml.html");
        foreach ($feedItems as $node) {
            $wyctContent .= $this->render('_podcastItem', ['node' => $node]);
        }
        ?>
        <?=
        Collapse::widget([
            'items' => [
                // WNRP
                [
                    'label' => 'Recent WNRP Podcasts' .
                    Html::a('Login to Update', 'http://podcast.newsradio1620.com/site/login.html', [
                        'target' => '_new', 'class' => 'btn btn-xs btn-warning pull-right'
                    ]),
                    'encode' => false,
                    'content' => $wnrpContent,
                    // open its content by default
                    //'contentOptions' => ['class' => 'in'],
                    'options' => ['class' => 'panel-adxc'],
                ],
                // WYCT
                [
                    'label' => 'Recent WYCT Podcasts' .
                    Html::a('Login to Update', 'http://podcast.catcountry987.com/site/login.html', [
                        'target' => '_new', 'class' => 'btn btn-xs btn-warning pull-right'
                    ]),
                    'encode' => false,
                    'content' => $wyctContent,
                    //'contentOptions' => [...],
                    'options' => ['class' => 'panel-adxc'],
                ],
                // WEBY
                [
                    'label' => 'Recent WEBY Podcasts',
                    'content' => [
                        'Anim pariatur cliche...',
                        'Anim pariatur cliche...'
                    ],
                    //'contentOptions' => [...],
                    'options' => ['class' => 'panel-adxc'],
                ],
                // ESPN
                [
                    'label' => 'Recent ESPN (W233CM) Podcasts',
                    'content' => [
                        'Anim pariatur cliche...',
                        'Anim pariatur cliche...'
                    ],
                    //'contentOptions' => [...],
                    'options' => ['class' => 'panel-adxc'],
                ],
            ]
        ]);
        ?>



    </div>
    <!--<nav class="navbar">
        <form class="form-inline" action="" method="post" name="search_form">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
                <span class="input-group-btn" id="basic-addon1">
                    <button class="btn btn-info" type="submit">
                        <span class="glyphicon glyphicon-sunglasses"></span></button>
                </span>
            </div>
        </form>
    </nav>-->
</div>