<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ResultSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Results';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="result-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Result', ['create'], ['class' => 'btn btn-success']) ?>

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'rs_id',
            'studentsStd.std_name',
            'maths',
            'physics',
            'chemistry',
            'english',
            'urdu',
            'total_marks',
            'grade',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
