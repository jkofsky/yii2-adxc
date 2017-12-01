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
    Html::a('WNRP - NewsRadio1620', ['/podcast/wnrp'], ['class' => 'external-link']),
    Html::a('WYCT - CatCountry 98&bullet;7', ['/podcast/wyct'], ['class' => 'external-link']),
        ], ['encode' => false]);
?>
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
