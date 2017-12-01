<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = 'WYCT Podcast';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Podcast'), 'url' => ['/podcast']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title ?> Maintenance</h1>

<p>Local updating of the Podcast sites has not been implemented yet.
    You will need to go the the main sites.</p>

<?=
Html::a('WYCT - CatCountry 98&bullet;7', 'http://podcast.catcountry987.com', ['class' => 'external-link', 'target' => '_new']);
?>
<br>