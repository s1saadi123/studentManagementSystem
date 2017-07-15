<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Students;

/* @var $this yii\web\View */
/* @var $model backend\models\Result */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="result-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'students_std_id')->dropDownList(
      ArrayHelper::map(Students::find()->all(),'std_id','std_name'),['prompt'=>'Select Student']
      ) ?>

    <?= $form->field($model, 'maths')->textInput() ?>

    <?= $form->field($model, 'physics')->textInput() ?>

    <?= $form->field($model, 'chemistry')->textInput() ?>

    <?= $form->field($model, 'english')->textInput() ?>

    <?= $form->field($model, 'urdu')->textInput() ?>

    <?= $form->field($model, 'total_marks')->textInput() ?>

    <?= $form->field($model, 'grade')->dropDownList([ 'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'F' => 'F', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
