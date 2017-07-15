<?php

namespace backend\controllers;


use Yii;
use backend\models\Result;
use backend\models\ResultSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * StudentsController implements the CRUD actions for Students model.
 */
class PassController extends Controller
{

    public function actionIndex()
    {
      $searchModel = new ResultSearch();
      //$searchModel->grade = 'a';
      //$searchModel->grade = 'c';
      $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
      $dataProvider->query->orWhere(['grade'=>'a']);
      $dataProvider->query->orWhere(['grade'=>'b']);
      $dataProvider->query->orWhere(['grade'=>'c']);
      $dataProvider->query->orWhere(['grade'=>'d']);
    //  $dataProvider->$query->andFilterWhere(['>', 'total_marks', 60]);
    //+['ResultSearch' => ['=', 'rs_id' =>2]]

      return $this->render('index', [
          'searchModel' => $searchModel,
          'dataProvider' => $dataProvider,
      ]);
    }


}
/*$searchModel = new StudentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);*/
