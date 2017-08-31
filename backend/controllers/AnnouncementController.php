<?php

namespace backend\controllers;

use Yii;
use common\models\Announcement;
use common\models\search\AnnouncementSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AnnouncementController implements the CRUD actions for Announcement model.
 */
class AnnouncementController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Announcement models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AnnouncementSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Announcement model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Announcement model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Announcement();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $dateFormat = Yii::$app->params['datePickerFormat'];
            $model->start_date = !empty($model->start_date) ? Yii::$app->formatter->asDate($model->start_date, $dateFormat) : null;
            $model->end_date = !empty($model->end_date) ? Yii::$app->formatter->asDate($model->end_date, $dateFormat) : null;

            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Announcement model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $dateFormat = Yii::$app->params['datePickerFormat'];
            $model->start_date = !empty($model->start_date) ? Yii::$app->formatter->asDate($model->start_date, $dateFormat) : null;
            $model->end_date = !empty($model->end_date) ? Yii::$app->formatter->asDate($model->end_date, $dateFormat) : null;

            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Announcement model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Purge ALL expired Announcement models.
     * If purging is successful, the browser will be redirected to the 'index' page.
     * @return mixed
     */
    public function actionPurge()
    {
        $announceModel = Announcement::find()
                ->where(['is not', 'end_date', null])
                ->andWhere(['<=', 'end_date', time()])
                ->orderBy('Start_date DESC')
                ->all();

        if ($announceModel) {
            foreach ($announceModel as $model) {
                $model->delete();
            }
            Yii::$app->session->setFlash('success', Yii::t('app', 'Expired Announcements have been <spam class="alert-link">Purged!</span>'));
        } else {
            Yii::$app->session->setFlash('success', Yii::t('app', 'Nothing to purge.'));
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the Announcement model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Announcement the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Announcement::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
