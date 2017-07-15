<?php
namespace backend\controllers;

//use Yii;
use yii\web\Controller;
use backend\models\Users;

/**
 *
 */
class UsersController extends Controller
{

  public function actionIndex()
  {
    $users = Users::find()->all();

    return $this->render('index',['users'=>$users]);

  }
}


 ?>
