<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StudentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'std_id') ?>

    <?= $form->field($model, 'std_name') ?>

    <?= $form->field($model, 'std_email') ?>

    <?= $form->field($model, 'std_contact_no') ?>

    <?= $form->field($model, 'std_address') ?>

    <?php // echo $form->field($model, 'std_class') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
