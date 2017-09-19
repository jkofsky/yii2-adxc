<?php
/* @var $this yii\web\View */
/* @var $feeds 'http://podcast.newsradio1620.com/index.php/rss.xml' */

use yii\helpers\Html;

$this->title = 'FOX News Headlines';
?>
<div class="fox-index">
    <h1 class="panel panel-default">FOX News National Headlines
        <?= Html::img($feeds->channel->image->url, [ 'class' => "img-thumbnail pull-right"]); ?></h1>

    <ul class="media-list list-unstyled">
        <?php
        for ($idx = 0; $idx < 6; ++$idx) {
            $item = $feeds->channel->item[$idx];
            $airDate = date('F d, Y @ h:m:s a', strtotime($item->pubDate));
            ?>
        <li class="panel panel-info">
                <div class="panel-heading">
                    <h2><?= Html::encode($item->title); ?></h2>
                    <p class="text-small"><?= $airDate; ?></p>
                </div>
                <div class="panel-body">
                    <p><?= $item->description; ?></p>
                </div><!--/media-body-->
            </li><!--/media-->
        <?php } // Next $idx     ?>
    </ul>
</div>