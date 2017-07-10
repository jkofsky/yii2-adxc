<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Html::encode(Yii::$app->name . ' - Mission Statement');
$this->params['breadcrumbs'][] = ['label' => 'Useful Reading', 'url' => ['site/reading']];
$this->params['breadcrumbs'][] = Html::encode('Mission Statement');
?>

<h1><?php echo Html::encode('Our Mission Statement'); ?></h1>
<ol>
    <li class="odd">To serve our community with compelling and informative content.</li>
    <li class="even">To broadcast radio entertainment and information that appeals to the largest number of people.</li>
    <li class="odd">To maintain a work environment that allows people to perform at the highest level for the company
        while meeting their own personal goals for growth and advancement.</li>
    <li class="even">To super-serve our clients so they get the best results possible from their advertising investment.</li>
</ol>
