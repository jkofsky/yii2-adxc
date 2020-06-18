<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\bootstrap4\Html;

$this->title = $name;
?>
<div class="site-error">
    <div class="card shadow">
        <div class="card-header text-light bg-danger"><h2><?= Html::encode($this->title) . ' - ', $message ?></h2></div>
        <div class="card-body">
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
