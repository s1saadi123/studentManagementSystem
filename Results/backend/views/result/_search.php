<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ResultSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="result-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rs_id') ?>

    <?= $form->field($model, 'students_std_id') ?>

    <?= $form->field($model, 'maths') ?>

    <?= $form->field($model, 'physics') ?>

    <?= $form->field($model, 'chemistry') ?>

    <?php // echo $form->field($model, 'english') ?>

    <?php // echo $form->field($model, 'urdu') ?>

    <?php // echo $form->field($model, 'total_marks') ?>

    <?php // echo $form->field($model, 'grade') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
