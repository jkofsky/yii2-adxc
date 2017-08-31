<?php

namespace frontend\controllers;

use Yii;
use common\models\User;
use common\models\search\UserSearch;
use frontend\models\ContactForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * EmployeeController implements the frontend actions for User model.
 */
class EmployeeController extends Controller
{

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        if ($model->profile !== null) {
            return $this->render('view', [
                        'model' => $model,
            ]);
        } else {
            throw new NotFoundHttpException('This Employee does not have a Profile on record.');
        }
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        $model->scenario = 'employee';

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendDepartmentEmail($model->department)) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'Emails have been sent.')
                );
            } else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'There was an error sending your message.'));
            }

            return $this->refresh();
        } else {
            return $this->render('/site/contact', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested Employee does not exist.');
        }
    }

}
