<?php
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use yii\grid\GridView;
use \common\models\Department;

$this->title = Yii::t('app', 'Employees');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::a(Yii::t('app', 'Send Bulk Email'), ['contact'], ['class' => 'btn btn-info']) ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'View',
                'contentOptions' => ['class' => 'text-center'],
                'template' => '{view}',
            ],
            [
                'attribute' => 'first_name',
                'value' => 'profile.first_name',
            ],
            [
                'attribute' => 'last_name',
                'value' => 'profile.last_name',
            ],
            'email:email',
            'profile.cell_phone',
            'profile.home_phone',
            [
                'header' => 'Department',
                'attribute' => 'dept_id',
                'value' => 'profile.department.dept_name',
                'filter' => Html::activeDropDownList($searchModel, 'dept_id', Department::getDepartmentList(), ['class' => 'form-control', 'prompt' => 'All']
                ),
            ],
        ],
    ]);
    ?>
</div>
