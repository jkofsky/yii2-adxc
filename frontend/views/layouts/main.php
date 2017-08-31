<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
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
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?=
        \jkofsky\scrollTop\ScrollTop::widget([
            'btnColorClass' => 'btn-info',
            'linkText' => 'Top',
            'glyphicon' => 'glyphicon-circle-arrow-up',
        ])
        ?>
        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => '<span class="glyphicon glyphicon-home"></span>',
                    'url' => ['/site/index'],
                    'linkOptions' => ['title' => Yii::t('app', 'Home')]
                ],
                ['label' => 'Employees', 'url' => ['/employee/index'], 'visible' => !Yii::$app->user->isGuest],
                ['label' => 'Discrepencies', 'url' => ['/ticket'], 'visible' => !Yii::$app->user->isGuest],
                ['label' => 'Podcasts', 'url' => ['/podcast'], 'items' => [
                        ['label' => 'WNRP', 'url' => ['/podcast/wnrp']],
                        ['label' => 'WYCT', 'url' => ['/podcast/wyct']],
                    ],
                    'visible' => !Yii::$app->user->isGuest],
                ['label' => 'Engineering', 'url' => ['/engineering/index'], 'visible' => !Yii::$app->user->isGuest],
                ['label' => 'Documents', 'url' => ['/document/index'], 'visible' => !Yii::$app->user->isGuest],
                ['label' => '<span class="glyphicon glyphicon-info-sign"></span>', 'url' => ['/reading/index'], 'items' => [
                        ['label' => Yii::t('app', 'My Profile'), 'url' => ['/profile/index'], 'visible' => !Yii::$app->user->isGuest],
                        ['label' => Yii::t('app', 'Phone List'), 'url' => ['/site/phone-list'], 'visible' => !Yii::$app->user->isGuest],
                        ['label' => Yii::t('app', 'Weather Information'), 'url' => ['/site/weather']],
                        ['label' => Yii::t('app', 'Useful Reading'), 'url' => ['/site/reading', 'page' => 'index']],
                    ]
                ],
            ];

            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => Yii::t('app', 'Signup'), 'url' => ['/site/signup']];
                $menuItems[] = ['label' => '<span class="glyphicon glyphicon-log-in"></span>',
                    'url' => ['/site/login'],
                    'linkOptions' => ['title' => Yii::t('app', 'Login')]];
            } else {
                $menuItems[] = '<li title="' . Yii::t('app', 'Logout') . '">'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                                '<span class="glyphicon glyphicon-log-out"></span> (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>';
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
                'activateParents' => true,
                'encodeLabels' => false,
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <div class="alert alert-danger" role="alert">
                    Information on this site is <strong>For Internal Use Only!</strong>
                </div>
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'options'=>['class'=>'breadcrumb hidden-print']
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
                <br>
                <div class="alert alert-danger" role="alert">
                    Information on this site is <strong>For Internal Use Only!</strong>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy;<?= date('Y') ?>
                    <?= Yii::$app->params['companyName'] ?>
                </p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
