<?php
/* @var $this yii\web\View */
/* @var $nowPlaying 'http://music.catcountry987.com/playing.xml' */
/* @var $history 'http://music.catcountry987.com/history.xml' */

use yii\bootstrap\Html;

$this->title = 'CatCountry - Now Playing';
?>
<div class="onair">
    <div class="text-center">
        <img class="header-img" src="images/Color_cat_on_transparent_w_shadow.png" alt="CatCountry 98.7">
    </div>
    <div class="panel panel-warning box-shadow">
        <div class="panel-heading">Playing Now</div> 
        <div class="panel-body">
            <b><?= Html::encode($history->Song[0]->Title); ?></b>  &ndash; 
            <span style="font-size: .60em;"><?= Html::encode($history->Song[0]->Artist); ?></span>
        </div>
    </div>
    <div class = "panel panel-info box-shadow">
        <div class = "panel-heading">Recently Played</div>
        <div class = "panel-body">
            <?php
            $list = [];
            foreach ($history->Song as $song) {
                if (intval($song['id']) == 1) {
                    continue;
                }
                $list[] = '<b>' . Html::encode($song->Title) . '</b>' .
                        ' &ndash; <span style="font-size: .60em;">' .
                        Html::encode($song->Artist) . '</span>';
            }
            echo Html::ul($list, ['encode' => false]);
            ?>
        </div>
    </div>
</div>