<?php
/* @var $this yii\web\View */

use yii\bootstrap4\Html;

$this->title = 'Trouble Tickets';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title ?> Site Update</h1>

<p>Trouble Tickets are still being processed via the
    <?=
    Html::a('ZendDesk Website', 'https://adxtech.zendesk.com/access/unauthenticated', ['target' => '_blank'])
    ?>
</p>
