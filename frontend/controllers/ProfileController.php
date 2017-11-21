<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Html;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Profile;
use common\models\search\ProfileSearch;

/**
 * ProfileController implements the CRUD actions for Profile model.
 */
class ProfileController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create', 'update'],
                'rules' => [
                    [
                        'actions' => ['index', 'view', 'create', 'update'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Profile models.
     * @return mixed
     */
    public function actionIndex() {
        if (empty(Yii::$app->user->identity->id)) {
            throw new UnauthorizedHttpException(\Yii::t('app', 'You need to be logged in to access this'));
        }
        if (($model = Profile::findOne(Yii::$app->user->identity->id)) !== null) {
            return $this->render('view', [
                        'model' => $model,
            ]);
        } else {
            return $this->redirect(['create']);
        }
    }

    /**
     * Displays a single Profile model for currently logged in User.
     * 
     * @return mixed
     */
    public function actionView() {
        return $this->render('view', [
                    'model' => $this->findModel(Yii::$app->user->identity->id),
        ]);
    }

    /**
     * Creates a new Profile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Profile();
        $model->loadDefaultValues();
        $model->user_id = Yii::$app->user->identity->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view']);
        } else {
            $dateFormat = Yii::$app->params['datePickerFormat'];
            $model->birth_date = !empty($model->birth_date) ? Yii::$app->formatter->asDate($model->birth_date, $dateFormat) : null;
            $model->aniversary_date = !empty($model->aniversary_date) ? Yii::$app->formatter->asDate($model->aniversary_date, $dateFormat) : null;
            $model->hire_date = !empty($model->hire_date) ? Yii::$app->formatter->asDate($model->hire_date, $dateFormat) : null;

            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Profile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * 
     *  @return mixed
     */
    public function actionUpdate() {
        $model = $this->findModel(Yii::$app->user->identity->id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view']);
        } else {
            $dateFormat = Yii::$app->params['datePickerFormat'];
            $model->birth_date = !empty($model->birth_date) ? Yii::$app->formatter->asDate($model->birth_date, $dateFormat) : null;
            $model->aniversary_date = !empty($model->aniversary_date) ? Yii::$app->formatter->asDate($model->aniversary_date, $dateFormat) : null;
            $model->hire_date = !empty($model->hire_date) ? Yii::$app->formatter->asDate($model->hire_date, $dateFormat) : null;

            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Finds the Profile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Profile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Profile::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
