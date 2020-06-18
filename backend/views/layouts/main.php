<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
        <!-- FontAwsome css -->
        <script src="https://kit.fontawesome.com/1191c5cb0f.js" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-expand-md sticky-top navbar-dark bg-adxc',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = '<li class="nav-item">'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn nav-link']
                        )
                        . Html::endForm()
                        . '</li>';
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav ml-auto'],
                'items' => $menuItems,
                'activateParents' => true,
                'encodeLabels' => false,
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <!-- Footer -->
        <footer class="text-light bg-adxc py-2 m-0 d-print-none">
            <p class="text-center">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                &ndash; <?= Yii::$app->params['companyName'] ?>, All Rights Reserved.</p>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
