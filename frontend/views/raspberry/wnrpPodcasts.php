<?php
/* @var $this yii\web\View */
/* @var $feeds 'http://podcast.newsradio1620.com/index.php/rss.xml' */

use yii\helpers\Html;

$this->title = 'Newsradio Podcasts';
?>
<div class="wnrp-index">
    <img src="images/NR_PrimaryLogo.jpg" alt="<?= $feeds->channel->image->title; ?>" class="wnrpLogo">
    <h1 class="header text-right"><?= $feeds->channel->title; ?></h1>
    <h3 class="header text-right">These Podcasts and more are available at<br>
        <u><?= $feeds->channel->link; ?></u></h3>
    <div class="clearfix"></div>
    <ul class="media-list list-unstyled">
        <?php
        foreach ($feeds->channel->item as $item) {
            $airDate = strtotime($item->pubDate);
            ?>
            <li class="media">
                <div class="media-left text-center">
                    <p class="airdate img-thumbnail">
                        <span style="font-size:9pt;margin:0px;padding:0px;"><?php echo date('F Y', $airDate); ?></span>
                        <span style="font-size: 2em; font-weight:bold;margin:0px;"><?php echo date('j', $airDate); ?></span><br />
                        <span style="font-size:9pt;margin:0px;padding:0px;"><?php echo date('l', $airDate); ?></span><br />
                    </p>
                    <div class="media-object">
                        <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">
                            <img alt="Creative Commons License" src="https://i.creativecommons.org/l/by-nc-nd/4.0/80x15.png" title="Creative Commons License" />
                        </a>
                    </div>
                </div>
                <div class="media-body">
                    <div class="media-heading"><h2><?= $item->title; ?></h2></div>
                    <div class="host">with <?= $item->author; ?></div>
                    <p class="img-thumbnail"><?= $item->description; ?></p>

                    <!--                    <div class="media-right media-object">
                                            <audio controls>
                                                <source src="<?= $item->enclosure['url'] ?>" type="<?= $item->enclosure['type'] ?>">
                                                Your browser does not support the audio tag.
                                            </audio>
                                        </div>-->
                </div><!--/media-body-->
            </li><!--/media-->
        <?php } // Next $idx     ?>
    </ul>
</div>