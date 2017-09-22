<?php

use yii\helpers\Html;
use backend\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Keyword */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keyword-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success layui-btn' : ' layui-btn btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
