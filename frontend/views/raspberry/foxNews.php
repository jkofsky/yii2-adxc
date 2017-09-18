<?php
/* @var $this yii\web\View */
/* @var $feeds 'http://podcast.newsradio1620.com/index.php/rss.xml' */

use yii\helpers\Html;

$this->title = 'Newsradio Podcasts';
?>
<div class="fox-index">
    <h1><?= Html::img($feeds->channel->image->url,[ 'class'=>"img-thumbnail"]); ?></h1>
    <h3>FOX News Headlines &ndash; Politics</h3>
    <div class="clearfix"></div>
    <?php
    foreach ($feeds->channel->item as $item) {
        $airDate = strtotime($item->pubDate);
        ?>
        <div class="media">
            <div class="media-body">
                <div class="media-heading"><h2><?= $item->title; ?></h2></div>
                <div class="host">with <?= $item->author; ?></div>
                <p><?= $item->description; ?></p>
            </div><!--/media-body-->
        </div><!--/media-->
    <?php } // Next $idx     ?>
</div>