<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \common\models\Department;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Employees');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
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
            'is_active:boolean',
            [
                'header' => 'Department',
                'attribute' => 'dept_id',
                'value' => 'profile.department.dept_name',
                'filter' => Html::activeDropDownList($searchModel, 'dept_id', Department::getDepartmentList(), ['class' => 'form-control', 'prompt' => 'All']
                ),
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
            ],
        ],
    ]);
    ?>
</div>
