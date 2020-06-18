<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <?= Html::csrfMetaTags() ?>
        <link rel="apple-touch-icon" sizes="180x180" href="<?= Yii::getAlias('@web/images/ico/apple-touch-icon.png'); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= Yii::getAlias('@web/images/ico/favicon-32x32.png'); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= Yii::getAlias('@web/images/ico/favicon-16x16.png'); ?>">
        <link rel="manifest" href="<?= Yii::getAlias('@web/images/ico/site.webmanifest'); ?>">
        <link rel="mask-icon" href="<?= Yii::getAlias('@web/images/ico/safari-pinned-tab.svg" color="#5bbad5'); ?>">
        <link rel="shortcut icon" href="<?= Yii::getAlias('@web/images/ico/favicon.ico'); ?>">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="msapplication-config" content="<?= Yii::getAlias('@web/images/ico/browserconfig.xml'); ?>">
        <meta name="theme-color" content="#ffffff">
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
        <?=
        \jkofsky\scrollTop\ScrollTop::widget([
            'btnColorClass' => 'btn-info',
            'linkText' => 'Top',
            'glyphicon' => 'glyphicon-menu-up',
        ])
        ?>
        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'ADXC IntraNet',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-expand-md sticky-top navbar-dark bg-adxc',
                ],
            ]);
            $menuItems = [
                ['label' => '<i class="fas fa-home" title="Home Page"></i>', 'url' => ['/site/index']],
                ['label' => 'Employees', 'url' => ['/employee/index'], 'visible' => !Yii::$app->user->isGuest],
                ['label' => 'Discrepencies', 'url' => ['/ticket'], 'visible' => !Yii::$app->user->isGuest],
                ['label' => 'Podcasts', 'url' => ['/podcast'], 'visible' => !Yii::$app->user->isGuest],
                ['label' => 'Engineering', 'url' => ['/engineering/index'], 'visible' => !Yii::$app->user->isGuest],
                ['label' => 'Documents', 'url' => ['/document/index'], 'visible' => !Yii::$app->user->isGuest],
                ['label' => '<i class="fas fa-info-circle" title="Sign In"></i><span class="sr-only">Options</span>',
                    'linkOptions' => ['title' => Yii::t('app', 'Options')],
                    'items' => [
                        ['label' => Yii::t('app', 'Phone List'), 'url' => ['/site/phone-list'], 'visible' => !Yii::$app->user->isGuest],
                        ['label' => Yii::t('app', 'My Profile'), 'url' => ['/profile/index'], 'visible' => !Yii::$app->user->isGuest],
                        ['label' => Yii::t('app', 'Weather Information'), 'url' => ['/site/weather']],
                        ['label' => Yii::t('app', 'Useful Reading'), 'url' => ['/site/reading', 'page' => 'index']]
                    ]
                ]
            ];

            if (Yii::$app->user->isGuest) {
//                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => '<i class="fas fa-sign-in-alt" title="Sign In"></i><span class="sr-only">Sign In</span>',
                    'url' => ['/site/login'],
                ];
            } else {
                $menuItems[] = '<li class="nav-item">'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                                '<i class="fas fa-sign-out-alt" title="Sign Out"></i><span class="sr-only">Sign Out</span>', ['class' => 'btn nav-link ']
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
                <div class="alert text-danger alert-danger" role="alert">
                    Information on this site is <strong>For Internal Use Only!</strong>
                </div> 
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'options' => ['class' => 'breadcrumb d-print-none']
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>

                <div class="alert text-danger alert-danger d-print-none" role="alert">
                    Information on this site is <strong>For Internal Use Only!</strong>
                </div> 
            </div>
        </div>

        <!-- Footer -->
        <footer class="text-light bg-adxc py-2 d-print-none">
            <p class="m-0 text-center">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                &ndash; <?= Yii::$app->params['companyName'] ?>, All Rights Reserved.</p>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
