<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">
    <div class="panel panel-danger">
        <div class="panel-heading"><h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="panel-body">
            <h2 class="error-summary"><?= $message ?></h2>
            <p>
                The above error occurred while the Web server was processing your 
                request for:
            </p>
            <div  class="alert alert-warning" style="font-size: larger;">
                <?= Yii::$app->request->absoluteUrl; ?>
            </div>
            <?php if (!empty(Yii::$app->request->referrer)): ?>
                <p>Requested from:
                    <?=
                    Html::a(Yii::$app->request->referrer, Yii::$app->request->referrer, array('class' => 'noicon'));
                    ?>
                <hr />
                </p>
            <?php endif; ?>
            <p>
                Please contact us if you think this is a server error. Thank you.
            </p>
        </div>
    </div>
</div>
