<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Result */

$this->title = $model->rs_id;
$this->params['breadcrumbs'][] = ['label' => 'Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="result-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rs_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->rs_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'rs_id',
            'students_std_id',
            'maths',
            'physics',
            'chemistry',
            'english',
            'urdu',
            'total_marks',
            'grade',
        ],
    ]) ?>

</div>
