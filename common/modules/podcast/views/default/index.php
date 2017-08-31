<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = 'Podcasts';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title ?> Site Update</h1>

<p>Local updating of the Podcast sites has not been implemented yet.
    You will need to go the the main sites.</p>

<?=
Html::ul([
    Html::a('WNRP - NewsRadio1620', 'http://podcast.newsradio1620.com', ['class' => 'external-link']),
    Html::a('WYCT - CatCountry 98&bullet;7', 'http://podcast.catcountry987.com', ['class' => 'external-link']),
        ], ['encode' => false]);
?>
