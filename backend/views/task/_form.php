<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="store-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->label('Название')->textInput() ?>

    <?= $form->field($model, 'description')->label('Описание')->textInput() ?>

    <?= $form->field($model, 'plan_date')->label('Дата')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>