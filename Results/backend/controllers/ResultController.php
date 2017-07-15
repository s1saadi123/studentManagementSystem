<?php

namespace backend\controllers;

use Yii;
use backend\models\Result;
use backend\models\ResultSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ResultController implements the CRUD actions for Result model.
 */
class ResultController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
          'access'=>[
            'class'=> AccessControl::classname(),
            'only'=>['create','update'],
            'rules'=>[
              [
                'allow'=>true,
                'roles'=>['@']
              ],
            ]
          ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Result models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResultSearch();
      //  $searchModel->total_marks = 250;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
      //  $dataProvider->query->andWhere(['>','total_marks'=>2]);
    //  $dataProvider->query->where('field1 = :field1 AND field2 = :field2', [':field1' => 1, ':field2' => 'A']);
  //  $dataProvider->$query->andFilterWhere(['>', 'total_marks', 60]);
    //$query->orFilterWhere(['=', 'grade', 'c']);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Result model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Result model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Result();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->rs_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Result model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->rs_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Result model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Result model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Result the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Result::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
