<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Material;

/* @var $this yii\web\View */
/* @var $model common\models\Material */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'type')->dropDownList(Material::getTypes()) ?>

    <?= $form->field($model, 'pic')->textInput() ?>

    <?= $form->field($model, 'intro')->textarea() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
