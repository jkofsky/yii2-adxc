<?php
/* @var $this yii\web\View */

use yii\bootstrap4\Html;

$this->title = 'WNRP Podcast';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Podcast'), 'url' => ['/podcast']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title ?> Maintenance</h1>

<p>Local updating of the Podcast sites has not been implemented yet.
    You will need to go the the main sites.</p>

<?=
Html::a('WNRP - NewsRadio1620', 'http://podcast.newsradio1620.com', ['target' => '_new']);
?>
<br>