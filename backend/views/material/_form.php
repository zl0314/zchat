<?php

use yii\helpers\Html;
use backend\widgets\ActiveForm;
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

    <?= $form->field($model, 'intro')->textarea()->widget('common\widgets\ueditor\UEditor') ?>

    <div class="form-group">
        <?= $form->defaultButtons() ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>